<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include('../koneksi.php');
    session_start();
    $tabel = $_POST['namaTabel'];
    if ($tabel == 'tbl_users') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $level_user = $_POST['level_user'];
        //buat sql
        $data = array('user' => $username, 'pass' => $password, 'level' => $level_user);

        $check = $koneksi->query("SELECT count(*) FROM tbl_users where username='$username'");
        $number_rows = $check->fetchColumn();
        if ($number_rows > 0) {
            echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data gagal',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=user&page=user&actions=tampil'
            })
         </script>";
        } else {
            $querys = $koneksi->prepare("INSERT into tbl_users(username,password,level_user) value(:user,:pass,:level)");
            $querys->execute($data);
            if ($querys) {
                echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data berhasil',
                icon: 'success'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=user&page=user&actions=tampil'
            })
         </script>";
            } else {
                echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data gagal',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=user&page=user&actions=tampil'
            })
         </script>";
            }
        }
    } elseif ($tabel == 'tbl_siswa') {
        require '../vendor/autoload.php';
        include('../excel_reader2.php');
        //upload file xls
        $target = $_FILES['fileupload']['name'];
        $file_data = $_FILES['fileupload']['tmp_name'];
        //ijin akses file   
        // chmod($_FILES['fileupload']['name'], 0777);
        $ekstensi = pathinfo($target)['extension'];
        $ekstensi_allowed = array("xls", "xlsx");
        // var_dump($ekstensi_allowed);
        if (in_array($ekstensi, $ekstensi_allowed)) {
            // mengambil isi file xls
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
            $spreadsheet = $reader->load($file_data);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();
            $jumlahData = 0;
            for ($i = 1; $i < count($sheetdata); $i++) {
                $nisn = $sheetdata[$i]['0'];
                $nama = $sheetdata[$i]['1'];
                $jenis_kelamin = $sheetdata[$i]['2'];
                $tempat_lahir = $sheetdata[$i]['3'];
                $tanggal_lahir = $sheetdata[$i]['4'];
                $alamat = $sheetdata[$i]['5'];
                $tahun_ajaran = $sheetdata[$i]['6'];
                $kelas = $sheetdata[$i]['7'];
                $pass = md5('123456');
                $level = 'Siswa';

                if ((!empty($nisn)) && (!empty($nama)) && (!empty($jenis_kelamin)) && (!empty($tempat_lahir)) && (!empty($tanggal_lahir)) && (!empty($alamat))) {
                    // input data ke database (table data_pegawai)
                    $cek_kelas = $koneksi->query("select * from tbl_kelas where concat like '$kelas'")->fetch();
                    $cek_nisn = $koneksi->query("select count(*) from tbl_users where username='$nisn'")->fetchColumn();
                    if ($cek_nisn > 0) {
                        $sql_user = $koneksi->prepare("update tbl_users set password='$pass' where username='$nisn'")->execute();

                        $cek_id = $koneksi->query("select * from tbl_users where username='$nisn'")->fetch();

                        $cek_siswa = $koneksi->query("select count(*) 
                        from tbl_siswa where id_user='$cek_id[id]'")->fetchColumn();
                        if ($cek_siswa > 0) {
                            $q1 = $koneksi->prepare("update tbl_siswa set id_kelas='$cek_kelas[id]',nama='$nama',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',alamat='$alamat',tahun_ajaran='$tahun_ajaran' where id_user='$cek_id[id]'")->execute();
                        } else {
                            $q1 = $koneksi->prepare("INSERT into tbl_siswa (id_kelas,id_user,nama,jenis_kelamin,tanggal_lahir,tempat_lahir,alamat,tahun_ajaran,created_at) values('$cek_kelas[id]','$cek_id[id]','$nama','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$alamat','$tahun_ajaran',NOW())")->execute();
                        }
                    } else {
                        $sql_user = $koneksi->prepare("insert into tbl_users(username,password,level_user)values('$nisn','$pass','$level')")->execute();
                        $cek_id = $koneksi->query("select * from tbl_users where username='$nisn'")->fetch();
                        $cek_kelas = $koneksi->query("select * from tbl_kelas where concat like '$kelas'")->fetch();
                        $q1 = $koneksi->prepare("INSERT into tbl_siswa (id_kelas,id_user,nama,jenis_kelamin,tanggal_lahir,tempat_lahir,alamat,tahun_ajaran,created_at) values('$cek_kelas[id]','$cek_id[id]','$nama','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$alamat','$tahun_ajaran',NOW())")->execute();
                    }
                }
            }
            if ($sql_user && $q1) {
                echo "<script>
                Swal.fire({
                    title: 'Simpan Data!',
                    text: 'File berhasil diupload.',
                    icon: 'success'
                }).then((result) => {
                        window.location.href = '../index_admin.php?folder=siswa&page=siswa&actions=tampil'
                })
            </script>";
            } else {
                echo "<script>
                Swal.fire({
                    title: 'Simpan Data!',
                    text: 'File gagal diupload.',
                    icon: 'error'
                }).then((result) => {
                        window.location.href = '../index_admin.php?folder=siswa&page=siswa&actions=tampil'
                })
            </script>";
            }
        }
    } elseif ($tabel == 'tbl_kelas') {
        $kelas = $_POST['kelas'];
        $sub_kelas = $_POST['sub_kelas'];
        $concat = $kelas;
        $concat .= $sub_kelas;
        //buat sql
        $data = array('kelas' => $kelas, 'sub_kelas' => $sub_kelas, 'concat' => $concat);

        $check = $koneksi->query("SELECT count(*) FROM tbl_kelas where kelas='$kelas' and sub_kelas ='$sub_kelas'");
        $number_rows = $check->fetchColumn();
        if ($number_rows > 0) {
            echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'File gagal disimpan.',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=kelas&page=kelas&actions=tampil'
            })
         </script>";
        } else {
            $querys = $koneksi->prepare("INSERT into tbl_kelas(kelas,sub_kelas,concat) value(:kelas,:sub_kelas,:concat)");
            $querys->execute($data);
            if ($querys) {
                echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data berhasil',
                icon: 'success'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=kelas&page=kelas&actions=tampil'
            })
         </script>";
            } else {
                echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data gagal',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=kelas&page=kelas&actions=tampil'
            })
         </script>";
            }
        }
    } elseif ($tabel == 'tbl_guru') {
        require '../vendor/autoload.php';
        include('../excel_reader2.php');
        //upload file xls
        $target = $_FILES['fileupload']['name'];
        $file_data = $_FILES['fileupload']['tmp_name'];
        //ijin akses file   
        // chmod($_FILES['fileupload']['name'], 0777);
        $ekstensi = pathinfo($target)['extension'];
        $ekstensi_allowed = array("xls", "xlsx");
        // var_dump($ekstensi_allowed);
        if (in_array($ekstensi, $ekstensi_allowed)) {
            // mengambil isi file xls
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
            $spreadsheet = $reader->load($file_data);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();
            $jumlahData = 0;
            for ($i = 1; $i < count($sheetdata); $i++) {
                $nip = $sheetdata[$i]['0'];
                $nama = $sheetdata[$i]['1'];
                $jenis_kelamin = $sheetdata[$i]['2'];
                $tempat_lahir = $sheetdata[$i]['3'];
                $tanggal_lahir = $sheetdata[$i]['4'];
                $alamat = $sheetdata[$i]['5'];
                $no_telp = $sheetdata[$i]['6'];
                $kelas = $sheetdata[$i]['7'];
                $pass = md5('123456');
                $level = 'Guru';

                if ((!empty($nip)) && (!empty($nama)) && (!empty($jenis_kelamin)) && (!empty($tempat_lahir)) && (!empty($tanggal_lahir)) && (!empty($alamat)) && (!empty($no_telp))) {
                    // input data ke database (table data_pegawai)
                    $cek_kelas = $koneksi->query("select * from tbl_kelas where concat like '$kelas'")->fetch();
                    $cek_nip = $koneksi->query("select count(*) from tbl_users where username='$nip'")->fetchColumn();
                    if ($cek_nip > 0) {
                        $sql_user = $koneksi->prepare("update tbl_users set password='$pass' where username='$nip'")->execute();

                        $cek_id = $koneksi->query("select * from tbl_users where username='$nip'")->fetch();

                        $cek_siswa = $koneksi->query("select count(*) 
                        from tbl_guru where id_user='$cek_id[id]'")->fetchColumn();
                        if ($cek_siswa > 0) {
                            $q1 = $koneksi->prepare("update tbl_guru set id_kelas='$cek_kelas[id]',nama='$nama',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',alamat='$alamat',no_telp='$no_telp' where id_user='$cek_id[id]'")->execute();
                        } else {
                            $q1 = $koneksi->prepare("INSERT into tbl_guru (id_user,id_kelas,nama,tanggal_lahir,tempat_lahir,jenis_kelamin,alamat,no_telp,created_at) values('$cek_id[id]','$cek_kelas[id]','$nama','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$alamat','$no_telp',NOW())")->execute();
                        }
                    } else {
                        $sql_user = $koneksi->prepare("insert into tbl_users(username,password,level_user)values('$nip','$pass','$level')")->execute();

                        $cek_id = $koneksi->query("select * from tbl_users where username='$nip'")->fetch();
                        $cek_kelas = $koneksi->query("select * from tbl_kelas where concat like '$kelas'")->fetch();
                        $q1 = $koneksi->prepare("INSERT into tbl_guru (id_user,id_kelas,nama,tanggal_lahir,tempat_lahir,jenis_kelamin,alamat,no_telp,created_at) values('$cek_id[id]','$cek_kelas[id]','$nama','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$alamat','$no_telp',NOW())")->execute();
                    }
                }
            }
            if ($sql_user && $q1) {
                echo "<script>
                Swal.fire({
                    title: 'Simpan Data!',
                    text: 'File berhasil diupload.',
                    icon: 'success'
                }).then((result) => {
                        window.location.href = '../index_admin.php?folder=guru&page=guru&actions=tampil'
                })
            </script>";
            } else {
                echo "<script>
                Swal.fire({
                    title: 'Simpan Data!',
                    text: 'File gagal diupload.',
                    icon: 'error'
                }).then((result) => {
                        window.location.href = '../index_admin.php?folder=guru&page=guru&actions=tampil'
                })
            </script>";
            }
        }
    } elseif ($tabel == 'tbl_raport') {
        require '../vendor/autoload.php';
        include('../excel_reader2.php');
        //upload file xls
        $target = $_FILES['fileupload']['name'];
        $file_data = $_FILES['fileupload']['tmp_name'];
        //ijin akses file   
        // chmod($_FILES['fileupload']['name'], 0777);
        $ekstensi = pathinfo($target)['extension'];
        $ekstensi_allowed = array("xls", "xlsx", "xlsm");
        // var_dump($ekstensi_allowed);
        if (in_array($ekstensi, $ekstensi_allowed)) {
            // mengambil isi file xls
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
            $spreadsheet = $reader->load($file_data);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();
            $jumlahData = 0;
            $kelas = $sheetdata[3]['2'];
            $tahun_ajaran = $sheetdata[4]['2'];
            $cek_kelas = $koneksi->query("select * from tbl_kelas where concat like '$kelas'")->fetch();
            for ($i = 8; $i < count($sheetdata); $i++) {
                $nisn = $sheetdata[$i]['1'];
                $pai = $sheetdata[$i]['3'];
                $pkn = $sheetdata[$i]['4'];
                $bahasa_indo = $sheetdata[$i]['5'];
                $mtk = $sheetdata[$i]['6'];
                $ipa = $sheetdata[$i]['7'];
                $ips = $sheetdata[$i]['8'];
                $sbdp = $sheetdata[$i]['9'];
                $pjok = $sheetdata[$i]['10'];
                $bahasa_inggris = $sheetdata[$i]['11'];
                $bahasa_arab = $sheetdata[$i]['12'];
                $tahsin = $sheetdata[$i]['13'];
                $tik = $sheetdata[$i]['14'];


                if ((!empty($nisn)) && (!empty($pai)) && (!empty($pkn)) && (!empty($bahasa_indo)) && (!empty($mtk)) && (!empty($ipa)) && (!empty($ips)) && (!empty($sbdp)) && (!empty($pjok)) && (!empty($bahasa_inggris)) && (!empty($bahasa_arab)) && (!empty($tahsin)) && (!empty($tik))) {
                    $nilai_raport = ($pai + $pkn + $bahasa_indo + $mtk + $ipa + $ips + $sbdp + $pjok + $bahasa_inggris + $bahasa_arab + $tahsin + $tik) / 12;
                    $nilai_raport = number_format($nilai_raport, 2);
                    // input data ke database (table data_pegawai)
                    $cek_siswa = $koneksi->query("select tbl_siswa.id as id from tbl_siswa 
                    join tbl_users on tbl_users.id = tbl_siswa.id_user
                    where username = '$nisn'")->fetch();
                    $cek_nip = $koneksi->query("select count(*) from tbl_raport 
                    join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                    join tbl_users on tbl_users.id = tbl_siswa.id_user
                    where tbl_raport.id_siswa='$cek_siswa[id]' and tbl_raport.id_kelas = '$cek_kelas[id]' and tbl_raport.tahun_ajaran ='$tahun_ajaran'")->fetchColumn();
                    if ($cek_nip > 0) {
                        $q1 = $koneksi->prepare("update tbl_raport
                        join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa 
                        set pai='$pai',pkn ='$pkn',bahasa_indonesia='$bahasa_indo',mtk ='$mtk',ipa='$ipa',ips='$ips',sbdp='$sbdp',pjok='$pjok',bahasa_inggris='$bahasa_inggris',bahasa_arab='$bahasa_arab',tahsin='$tahsin',tik='$tik',nilai_raport='$nilai_raport' where tbl_raport.id_siswa='$cek_siswa[id]' and tbl_raport.id_kelas ='$cek_kelas[id]' and tbl_raport.tahun_ajaran='$tahun_ajaran'")->execute();
                    } else {
                        $q1 = $koneksi->prepare("INSERT into tbl_raport (id_siswa,pai,pkn,bahasa_indonesia,mtk,ipa,ips,sbdp,pjok,bahasa_inggris,bahasa_arab,tahsin,tik,nilai_raport,id_kelas,tahun_ajaran,created_at) values('$cek_siswa[id]','$pai','$pkn','$bahasa_indo','$mtk','$ipa','$ips','$sbdp','$pjok','$bahasa_inggris','$bahasa_arab','$tahsin','$tik','$nilai_raport','$cek_kelas[id]','$tahun_ajaran',NOW())")->execute();
                    }
                }
            }
            if ($q1) {
                echo "<script>
                Swal.fire({
                    title: 'Simpan Data!',
                    text: 'File berhasil diupload.',
                    icon: 'success'
                }).then((result) => {
                        window.location.href = '../index_admin.php?folder=raport&page=raport&actions=tampil'
                })
            </script>";
            } else {
                echo "<script>
                Swal.fire({
                    title: 'Simpan Data!',
                    text: 'File gagal diupload.',
                    icon: 'error'
                }).then((result) => {
                        window.location.href = '../index_admin.php?folder=raport&page=raport&actions=tampil'
                })
            </script>";
            }
        }
    } elseif ($tabel == 'tbl_seleksi') {
        $lomba = $_POST['lomba'];
        $tanggal = $_POST['tanggal_lomba'];
        $bobotCore = $_POST['bobotCore'];
        $bobotSecon = $_POST['bobotSecon'];
        $kode_seleksi = $_POST['kode_seleksi'];
        $tahun = date('Y', strtotime($tanggal));
        $cek_tahun = $koneksi->query("select count(*) from tbl_seleksi where kriteria='$lomba' and year(tanggal)='$tahun'")->fetchColumn();
        if ($cek_tahun > 0) {
            echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Periode Lomba Pada Tahun Ini Sudah ada.',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=seleksi&page=seleksi&actions=tampil'
            })
        </script>";
        } else {
            for ($i = 1; $i <= count($_POST['kritCore']); $i++) {
                $kritCore = $_POST['kritCore'][$i];
                $subCore = $_POST['subCore'][$i];
                $cek = $koneksi->query("select count(*) from tbl_seleksi where kode_seleksi ='$kode_seleksi' and kriteria='$lomba' and subkriteria='$kritCore' and tanggal='$tanggal'")->fetchColumn();
                if ($cek > 0) {
                    $q1 = $koneksi->prepare("update tbl_seleksi set bobot_subkriteria='$subCore',bobot='$bobotCore' where faktor ='Core' and kode_seleksi ='$kode_seleksi' and kritera='$lomba' and subkriteria='$subCore' and tanggal='$tanggal'")->execute();
                } else {
                    $q1 = $koneksi->prepare("INSERT into tbl_seleksi (kode_seleksi,faktor,kriteria,bobot,subkriteria,bobot_subkriteria,tanggal,created_at) values('$kode_seleksi','Core','$lomba','$bobotCore','$kritCore','$subCore','$tanggal',NOW())")->execute();
                }
            }
            for ($i = 1; $i <= count($_POST['kritSecon']); $i++) {
                $kritSecon = $_POST['kritSecon'][$i];
                $subSecon = $_POST['subSecon'][$i];
                $cek = $koneksi->query("select count(*) from tbl_seleksi where kode_seleksi ='$kode_seleksi' and kriteria='$lomba' and subkriteria='$kritSecon' and tanggal='$tanggal'")->fetchColumn();
                if ($cek > 0) {
                    $q2 = $koneksi->prepare("update tbl_seleksi set bobot_subkriteria='$subSecon',bobot='$bobotSecon' where faktor ='Secondary' and kode_seleksi ='$kode_seleksi' and kritera='$lomba' and subkriteria='$subSecon' and tanggal='$tanggal'")->execute();
                } else {
                    $q2 = $koneksi->prepare("INSERT into tbl_seleksi (kode_seleksi,faktor,kriteria,bobot,subkriteria,bobot_subkriteria,tanggal,created_at) values('$kode_seleksi','Secondary','$lomba','$bobotSecon','$kritSecon','$subSecon','$tanggal',NOW())")->execute();
                }
            }
            if ($q1 && $q2) {
                echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data berhasil.',
                icon: 'success'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=seleksi&page=seleksi&actions=tampil'
            })
        </script>";
            } else {
                echo "<script>
            Swal.fire({
                title: 'Simpan Data!',
                text: 'Simpan data gagal.',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=seleksi&page=seleksi&actions=tampil'
            })
        </script>";
            }
        }
    }

    ?>
</body>

</html>
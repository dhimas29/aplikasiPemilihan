<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include('../koneksi.php');

    $tabel = $_POST['namaTabel'];
    if ($tabel == 'tbl_users') {
        $username = $_POST['username'];
        $id = $_POST['id'];
        $level_user = $_POST['level_user'];
        if (!isset($_POST['password']) == '') {
            $password = md5($_POST['password']);
            $data = array('user' => $username, 'pass' => $password, 'level' => $level_user, 'id' => $id);
            $querys = $koneksi->prepare("update tbl_users set username=:user,password=:pass,level_user=:level where id=:id");
        } else {
            $data = array('user' => $username, 'level' => $level_user, 'id' => $id);
            $querys = $koneksi->prepare("update tbl_users set username=:user,level_user=:level where id=:id");
        }
        $querys->execute($data);
        if ($querys) {
            echo "<script>
            Swal.fire({
                title: 'Ubah Data!',
                text: 'File berhasil diubah.',
                icon: 'success'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=user&page=user&actions=tampil'
            })
         </script>";
        } else {
            echo "<script>
            Swal.fire({
                title: 'Ubah Data!',
                text: 'File gagal diubah.',
                icon: 'error'
            }).then((result) => {
                    window.location.href = '../index_admin.php?folder=user&page=user&actions=tampil'
            })
         </script>";
        }
    } elseif ($tabel == 'tbl_seleksi_proses') {
        $ket = $_POST['ket'];
        $id = $_POST['id'];
        $id_user = $_POST['id_user'];
        $kode_seleksi = $_POST['kode_seleksi'];
        $cek = $koneksi->query("select count(*) from tbl_seleksi_proses where id_siswa='$id' and kode_seleksi='$kode_seleksi' and id_user ='$id_user'")->fetchColumn();
        if ($cek > 0) {
            $querys = $koneksi->prepare("update tbl_seleksi_proses set ket='$ket' where id_siswa='$id' and kode_seleksi='$kode_seleksi' and id_user='$id_user'")->execute();
        } else {
            $querys = $koneksi->prepare("INSERT into tbl_seleksi_proses (id_siswa,id_user,kode_seleksi,ket,created_at) values('$id','$id_user','$kode_seleksi','$ket',NOW())")->execute();
        }
    }

    ?>
</body>

</html>
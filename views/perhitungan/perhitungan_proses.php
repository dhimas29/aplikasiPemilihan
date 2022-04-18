<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Perhitungan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Nilai Target</h3>
                            <a data-toggle="modal" data-target="#infoBobot">
                                <h3 class="card-title float-right btn-warning btn btn-sm">! Info Pembobotan</h3>
                            </a>
                            <a data-toggle="modal" data-target="#infoNilai">
                                <h3 class="card-title float-right btn-info btn btn-sm mr-3">! Info Pemetaan Nilai</h3>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <?php
                                            foreach ($koneksi->query("select * from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'") as $key => $value) {
                                                $dat = preg_replace("/_/", " ", $value['subkriteria']);
                                            ?>
                                                <th>
                                                    <p><?= ucwords($dat); ?></p>
                                                </th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            foreach ($koneksi->query("select * from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'") as $key => $value) { ?>
                                                <td>
                                                    <p><?= $value['bobot_subkriteria']; ?></p>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <ul class="nav nav-pills me-auto">
                                <li class="nav-item">
                                    <h3 data-toggle="tab" href="#nilai_awal" class="nav-link active card-title mt-2">Nilai Bobot Awal</h3>
                                    <h3 data-toggle="tab" href="#pemetaan_gap" class="nav-link card-title mt-2">Pemetaan GAP</h3>
                                    <h3 data-toggle="tab" href="#pembobotan_gap" class="nav-link card-title mt-2">Pembobotan GAP</h3>
                                    <h3 data-toggle="tab" href="#perhitungan_factor" class="nav-link card-title mt-2">Perhitungan NCF dan NSF</h3>
                                </li>
                                <!-- <li class="nav-item">
                                    <a data-toggle="modal" data-target="#infoNilai">
                                        <h3 class="card-title float-right btn-warning btn btn-sm mt-2">! Info Pemetaan Nilai</h3>
                                    </a>
                                </li> -->
                            </ul>

                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- TAB NILAI AWAL -->
                                <div class="tab-pane active" id="nilai_awal">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Nama</th>
                                                <?php $conNilai = $koneksi->query("select count(*) 
                                        from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'")->fetchColumn(); ?>
                                                <th colspan="<?= $conNilai ?>">Nilai</th>
                                            </tr>
                                            <tr>
                                                <?php
                                                $namaTab1 = '';
                                                $namaTabSum1 = '';
                                                foreach ($koneksi->query("select subkriteria,tbl_seleksi.bobot_subkriteria from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'") as $key => $value) {
                                                    $dat1 = preg_replace("/_/", " ", $value['subkriteria']);
                                                    $namaTab1 .=  "sum(" . $value['subkriteria'] . ") as " . $value['subkriteria'] . ",";
                                                    $arrayTab1[] = $value['subkriteria'];
                                                ?>
                                                    <th><?= ucwords($dat1) ?></th>
                                                <?php }
                                                $namaTab1 = substr($namaTab1, 0, -1);
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            foreach ($koneksi->query('select ' . $namaTab1 . ',nama,count(id_siswa) as conId from tbl_raport 
                                    join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                    group by id_siswa') as $key => $value) { ?>
                                                <tr>
                                                    <td style="width: 10px;"><?= $nomor++; ?></td>
                                                    <td><?= $value['nama'] ?></td>
                                                    <?php for ($i = 0; $i < count($arrayTab1); $i++) { ?>
                                                        <?php
                                                        $nilaiTab1 = number_format($value[$arrayTab1[$i]] / $value['conId'], 2);
                                                        if ($nilaiTab1 >= 90 && $nilaiTab1 <= 100) {
                                                            $tampilNilai1 = 5;
                                                        } elseif ($nilaiTab1 >= 80 && $nilaiTab1 <= 89) {
                                                            $tampilNilai1 = 4;
                                                        } elseif ($nilaiTab1 >= 70 && $nilaiTab1 <= 79) {
                                                            $tampilNilai1 = 3;
                                                        } elseif ($nilaiTab1 >= 60 && $nilaiTab1 <= 69) {
                                                            $tampilNilai1 = 2;
                                                        } elseif ($nilaiTab1 >= 0 && $nilaiTab1 <= 59) {
                                                            $tampilNilai1 = 1;
                                                        }
                                                        ?>
                                                        <td><?= $tampilNilai1 ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php
                                            }; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- AKHIR TAB NILAI AWAL -->

                                <!-- TAB PEMETAAN GAP -->
                                <div class="tab-pane fade" id="pemetaan_gap">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Nama</th>
                                                <?php $conNilai = $koneksi->query("select count(*) 
                                        from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'")->fetchColumn(); ?>
                                                <th colspan="<?= $conNilai ?>">Nilai</th>
                                            </tr>
                                            <tr>
                                                <?php
                                                $namaTab2 = '';
                                                $namaTabSum2 = '';
                                                foreach ($koneksi->query("select subkriteria,tbl_seleksi.bobot_subkriteria from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'") as $key => $value) {
                                                    $dat2 = preg_replace("/_/", " ", $value['subkriteria']);
                                                    $namaTab2 .=  "sum(" . $value['subkriteria'] . ") as " . $value['subkriteria'] . ",";
                                                    $arrayTab2[] = $value['subkriteria'];
                                                    $arraySeleksi2[] = $value['bobot_subkriteria'];
                                                ?>
                                                    <th><?= ucwords($dat2) ?></th>
                                                <?php }
                                                $namaTab2 = substr($namaTab2, 0, -1);
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            foreach ($koneksi->query('select ' . $namaTab2 . ',nama,count(id_siswa) as conId from tbl_raport 
                                    join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                    group by id_siswa') as $key => $value) { ?>
                                                <tr>
                                                    <td style="width: 10px;"><?= $nomor++; ?></td>
                                                    <td><?= $value['nama'] ?></td>
                                                    <?php for ($i = 0; $i < count($arrayTab2); $i++) { ?>
                                                        <?php
                                                        $nilaiTab2 = number_format($value[$arrayTab2[$i]] / $value['conId'], 2);
                                                        if ($nilaiTab2 >= 90 && $nilaiTab2 <= 100) {
                                                            $tampilNilai2 = 5;
                                                        } elseif ($nilaiTab2 >= 80 && $nilaiTab2 <= 89) {
                                                            $tampilNilai2 = 4;
                                                        } elseif ($nilaiTab2 >= 70 && $nilaiTab2 <= 79) {
                                                            $tampilNilai2 = 3;
                                                        } elseif ($nilaiTab2 >= 60 && $nilaiTab2 <= 69) {
                                                            $tampilNilai2 = 2;
                                                        } elseif ($nilaiTab2 >= 0 && $nilaiTab2 <= 59) {
                                                            $tampilNilai2 = 1;
                                                        }
                                                        ?>
                                                        <td><?= $tampilNilai2 - $arraySeleksi2[$i] ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php
                                            }; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- AKHIR TAB PEMETAAN GAP -->

                                <!-- TAB PEMBOBOTAN GAP -->
                                <div class="tab-pane fade" id="pembobotan_gap">
                                    <table id="example4" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Nama</th>
                                                <?php $conNilai = $koneksi->query("select count(*) 
                                        from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'")->fetchColumn(); ?>
                                                <th colspan="<?= $conNilai ?>">Nilai</th>
                                            </tr>
                                            <tr>
                                                <?php
                                                $namaTab3 = '';
                                                $namaTabSum3 = '';
                                                foreach ($koneksi->query("select subkriteria,tbl_seleksi.bobot_subkriteria from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]'") as $key => $value) {
                                                    $dat3 = preg_replace("/_/", " ", $value['subkriteria']);
                                                    $namaTab3 .=  "sum(" . $value['subkriteria'] . ") as " . $value['subkriteria'] . ",";
                                                    $arrayTab3[] = $value['subkriteria'];
                                                    $arraySeleksi3[] = $value['bobot_subkriteria'];
                                                ?>
                                                    <th><?= ucwords($dat3) ?></th>
                                                <?php }
                                                $namaTab3 = substr($namaTab3, 0, -1);
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            foreach ($koneksi->query('select ' . $namaTab3 . ',nama,count(id_siswa) as conId from tbl_raport 
                                    join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                    group by id_siswa') as $key => $value) { ?>
                                                <tr>
                                                    <td style="width: 10px;"><?= $nomor++; ?></td>
                                                    <td><?= $value['nama'] ?></td>
                                                    <?php for ($i = 0; $i < count($arrayTab3); $i++) { ?>
                                                        <?php
                                                        $nilaiTab3 = number_format($value[$arrayTab3[$i]] / $value['conId'], 2);
                                                        if ($nilaiTab3 >= 90 && $nilaiTab3 <= 100) {
                                                            $tampilNilai3 = 5;
                                                        } elseif ($nilaiTab3 >= 80 && $nilaiTab3 <= 89) {
                                                            $tampilNilai3 = 4;
                                                        } elseif ($nilaiTab3 >= 70 && $nilaiTab3 <= 79) {
                                                            $tampilNilai3 = 3;
                                                        } elseif ($nilaiTab3 >= 60 && $nilaiTab3 <= 69) {
                                                            $tampilNilai3 = 2;
                                                        } elseif ($nilaiTab3 >= 0 && $nilaiTab3 <= 59) {
                                                            $tampilNilai3 = 1;
                                                        }
                                                        $hitungBobot3 = $tampilNilai3 - $arraySeleksi3[$i];
                                                        switch ($hitungBobot3) {
                                                            case '0':
                                                                $nilaiBobot3 = 5.0;
                                                                break;
                                                            case '1':
                                                                $nilaiBobot3 = 4.5;
                                                                break;
                                                            case '-1':
                                                                $nilaiBobot3 = 4.0;
                                                                break;
                                                            case '2':
                                                                $nilaiBobot3 = 3.5;
                                                                break;
                                                            case '-2':
                                                                $nilaiBobot3 = 3.0;
                                                                break;
                                                            case '3':
                                                                $nilaiBobot3 = 2.5;
                                                                break;
                                                            case '-3':
                                                                $nilaiBobot3 = 2.0;
                                                                break;
                                                            case '4':
                                                                $nilaiBobot3 = 1.5;
                                                                break;
                                                            case '-4':
                                                                $nilaiBobot3 = 1.0;
                                                                break;
                                                            default:
                                                                # code...
                                                                break;
                                                        }
                                                        ?>
                                                        <td><?= $nilaiBobot3 ?></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php
                                            }; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- AKHIR TAB PEMBOBOTAN GAP -->

                                <!-- TAB PERHITUNGAN FACTOR -->
                                <div class="tab-pane fade" id="perhitungan_factor">
                                    <div class="card">
                                        <div class="card-header">
                                            <ul class="nav nav-pills me-auto">
                                                <li class="nav-item">
                                                    <h3 data-toggle="tab" href="#perhitungan_ncf" class="nav-link active card-title mt-2">Perhitungan NCF(Core Factor)</h3>
                                                    <h3 data-toggle="tab" href="#perhitungan_nsf" class="nav-link card-title mt-2">Perhitungan NSF(Secondary Factor)</h3>
                                                    <h3 data-toggle="tab" href="#perhitungan_total" class="nav-link card-title mt-2">Perhitungan Nilai Total</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <!-- PERHITUNGAN NCF -->
                                                <div class="tab-pane active" id="perhitungan_ncf">
                                                    <table id="example5" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2">No</th>
                                                                <th rowspan="2">Nama</th>
                                                                <?php $conNilai = $koneksi->query("select count(*) 
                                        from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]' and faktor ='Core'")->fetchColumn(); ?>
                                                                <th colspan="<?= $conNilai ?>">Nilai</th>
                                                                <th rowspan="2">Nilai NCF</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                $namaTab4 = '';
                                                                $namaTabSum4 = '';
                                                                $jumlahTab = 0;
                                                                foreach ($koneksi->query("select subkriteria,tbl_seleksi.bobot_subkriteria,tbl_seleksi.bobot as bobot from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]' and faktor='Core'") as $key => $value) {
                                                                    $dat4 = preg_replace("/_/", " ", $value['subkriteria']);
                                                                    $namaTab4 .=  "sum(" . $value['subkriteria'] . ") as " . $value['subkriteria'] . ",";
                                                                    $arrayTab4[] = $value['subkriteria'];
                                                                    $jumlahTab += 1;
                                                                    $bobotNCF = $value['bobot'];
                                                                    $arraySeleksi4[] = $value['bobot_subkriteria'];
                                                                ?>
                                                                    <th><?= ucwords($dat4) ?></th>
                                                                <?php }
                                                                $namaTab4 = substr($namaTab4, 0, -1);
                                                                ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $nomor = 1;
                                                            foreach ($koneksi->query('select ' . $namaTab4 . ',nama,count(id_siswa) as conId,id_siswa as idsiswa from tbl_raport 
                                                            join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                                            group by id_siswa') as $key => $value) {
                                                                $idsiswa = $value['idsiswa'];
                                                                $data[$idsiswa] = 0; ?>
                                                                <tr>
                                                                    <td style="width: 10px;"><?= $nomor++; ?></td>
                                                                    <td><?= $value['nama'] ?></td>
                                                                    <?php for ($i = 0; $i < count($arrayTab4); $i++) { ?>
                                                                        <?php
                                                                        $nilaiTab4 = number_format($value[$arrayTab4[$i]] / $value['conId'], 2);
                                                                        if ($nilaiTab4 >= 90 && $nilaiTab4 <= 100) {
                                                                            $tampilNilai4 = 5;
                                                                        } elseif ($nilaiTab4 >= 80 && $nilaiTab4 <= 89) {
                                                                            $tampilNilai4 = 4;
                                                                        } elseif ($nilaiTab4 >= 70 && $nilaiTab4 <= 79) {
                                                                            $tampilNilai4 = 3;
                                                                        } elseif ($nilaiTab4 >= 60 && $nilaiTab4 <= 69) {
                                                                            $tampilNilai4 = 2;
                                                                        } elseif ($nilaiTab4 >= 0 && $nilaiTab4 <= 59) {
                                                                            $tampilNilai4 = 1;
                                                                        }
                                                                        $hitungBobot4 = $tampilNilai4 - $arraySeleksi4[$i];
                                                                        switch ($hitungBobot4) {
                                                                            case '0':
                                                                                $nilaiBobot4 = 5.0;
                                                                                break;
                                                                            case '1':
                                                                                $nilaiBobot4 = 4.5;
                                                                                break;
                                                                            case '-1':
                                                                                $nilaiBobot4 = 4.0;
                                                                                break;
                                                                            case '2':
                                                                                $nilaiBobot4 = 3.5;
                                                                                break;
                                                                            case '-2':
                                                                                $nilaiBobot4 = 3.0;
                                                                                break;
                                                                            case '3':
                                                                                $nilaiBobot4 = 2.5;
                                                                                break;
                                                                            case '-3':
                                                                                $nilaiBobot4 = 2.0;
                                                                                break;
                                                                            case '4':
                                                                                $nilaiBobot4 = 1.5;
                                                                                break;
                                                                            case '-4':
                                                                                $nilaiBobot4 = 1.0;
                                                                                break;
                                                                            default:
                                                                                # code...
                                                                                break;
                                                                        }
                                                                        ?>
                                                                        <td><?= $nilaiBobot4 ?></td>
                                                                        <?php $data[$idsiswa] += $nilaiBobot4; ?>
                                                                    <?php } ?>
                                                                    <td><?= $data[$idsiswa] / $jumlahTab; ?></td>
                                                                </tr>
                                                            <?php
                                                            }; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- AKHIR PERHITUNGAN NCF -->

                                                <!-- PERHITUNGAN NSF -->
                                                <div class="tab-pane" id="perhitungan_nsf">
                                                    <table id="example6" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2">No</th>
                                                                <th rowspan="2">Nama</th>
                                                                <?php $conNilai = $koneksi->query("select count(*) 
                                        from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]' and faktor ='Secondary'")->fetchColumn(); ?>
                                                                <th colspan="<?= $conNilai ?>">Nilai</th>
                                                                <th rowspan="2">Nilai NSF</th>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                $namaTab5 = '';
                                                                $namaTabSum5 = '';
                                                                $jumlahTab2 = 0;
                                                                foreach ($koneksi->query("select subkriteria,tbl_seleksi.bobot_subkriteria,tbl_seleksi.bobot as bobot from tbl_seleksi where kriteria='$_POST[kriteria]' and year(tanggal)='$_POST[tanggal]' and faktor='Secondary'") as $key => $value) {
                                                                    $dat5 = preg_replace("/_/", " ", $value['subkriteria']);
                                                                    $namaTab5 .=  "sum(" . $value['subkriteria'] . ") as " . $value['subkriteria'] . ",";
                                                                    $jumlahTab2 += 1;
                                                                    $arrayTab5[] = $value['subkriteria'];
                                                                    $arraySeleksi5[] = $value['bobot_subkriteria'];
                                                                    $bobotNSF = $value['bobot'];
                                                                ?>
                                                                    <th><?= ucwords($dat5) ?></th>
                                                                <?php }
                                                                $namaTab5 = substr($namaTab5, 0, -1);
                                                                ?>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $nomor = 1;
                                                            foreach ($koneksi->query('select ' . $namaTab5 . ',nama,count(id_siswa) as conId,tbl_raport.id_siswa as idsiswa from tbl_raport 
                                    join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                    group by id_siswa') as $key => $value) {
                                                                $idsiswa2 = $value['idsiswa'];
                                                                $data2[$idsiswa2] = 0; ?>
                                                                <tr>
                                                                    <td style="width: 10px;"><?= $nomor++; ?></td>
                                                                    <td><?= $value['nama'] ?></td>
                                                                    <?php for ($i = 0; $i < count($arrayTab5); $i++) { ?>
                                                                        <?php
                                                                        $nilaiTab5 = number_format($value[$arrayTab5[$i]] / $value['conId'], 2);
                                                                        if ($nilaiTab5 >= 90 && $nilaiTab5 <= 100) {
                                                                            $tampilNilai5 = 5;
                                                                        } elseif ($nilaiTab5 >= 80 && $nilaiTab5 <= 89) {
                                                                            $tampilNilai5 = 4;
                                                                        } elseif ($nilaiTab5 >= 70 && $nilaiTab5 <= 79) {
                                                                            $tampilNilai5 = 3;
                                                                        } elseif ($nilaiTab5 >= 60 && $nilaiTab5 <= 69) {
                                                                            $tampilNilai5 = 2;
                                                                        } elseif ($nilaiTab5 >= 0 && $nilaiTab5 <= 59) {
                                                                            $tampilNilai5 = 1;
                                                                        }
                                                                        $hitungBobot5 = $tampilNilai5 - $arraySeleksi5[$i];
                                                                        switch ($hitungBobot5) {
                                                                            case '0':
                                                                                $nilaiBobot5 = 5.0;
                                                                                break;
                                                                            case '1':
                                                                                $nilaiBobot5 = 4.5;
                                                                                break;
                                                                            case '-1':
                                                                                $nilaiBobot5 = 4.0;
                                                                                break;
                                                                            case '2':
                                                                                $nilaiBobot5 = 3.5;
                                                                                break;
                                                                            case '-2':
                                                                                $nilaiBobot5 = 3.0;
                                                                                break;
                                                                            case '3':
                                                                                $nilaiBobot5 = 2.5;
                                                                                break;
                                                                            case '-3':
                                                                                $nilaiBobot5 = 2.0;
                                                                                break;
                                                                            case '4':
                                                                                $nilaiBobot5 = 1.5;
                                                                                break;
                                                                            case '-4':
                                                                                $nilaiBobot5 = 1.0;
                                                                                break;
                                                                            default:
                                                                                # code...
                                                                                break;
                                                                        }
                                                                        ?>
                                                                        <td><?= $nilaiBobot5; ?></td>
                                                                        <?php $data2[$idsiswa2] += $nilaiBobot5; ?>
                                                                    <?php } ?>
                                                                    <td><?= $data2[$idsiswa2] / $jumlahTab2; ?></td>
                                                                </tr>
                                                            <?php
                                                            }; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- AKHIR PERHITUNGAN NSF -->

                                                <!-- PERHITUNGAN TOTAL -->
                                                <div class="tab-pane" id="perhitungan_total">
                                                    <table id="example7" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2">No</th>
                                                                <th rowspan="2">Nama</th>
                                                                <th rowspan="2">Nilai NCF</th>
                                                                <th rowspan="2">Nilai NSF</th>
                                                                <th rowspan="2">Total Nilai</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $nomor = 1;
                                                            foreach ($koneksi->query('select ' . $namaTab5 . ',nama,count(id_siswa) as conId,tbl_raport.id_siswa as idsiswa from tbl_raport 
                                    join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                    group by id_siswa') as $key => $value) {
                                                                $idsiswa2 = $value['idsiswa']; ?>
                                                                <tr>
                                                                    <td><?= $nomor++; ?></td>
                                                                    <td><?= $value['nama']; ?></td>
                                                                    <?php
                                                                    $nilaiNCF = $data[$idsiswa2] / $jumlahTab;
                                                                    $nilaiNSF =  $data2[$idsiswa2] / $jumlahTab2;
                                                                    $totalNilai = (($nilaiNCF * $bobotNCF) / 100) + (($nilaiNSF * $bobotNSF) / 100);
                                                                    ?>
                                                                    <td><?= $nilaiNCF; ?></td>
                                                                    <td><?= $nilaiNSF; ?></td>
                                                                    <td><?= number_format($totalNilai, 2); ?></td>
                                                                </tr>
                                                            <?php
                                                            }; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- AKHIR PERHITUNGAN TOTAL -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- AKHIR TAB PERHITUNGAN FACTOR -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Info Bobot -->
<div class="modal fade" id="infoBobot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Pembobotan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Selisih</th>
                            <th>Bobot Nilai</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>5.0</td>
                            <td>Tidak ada selisih</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>4.5</td>
                            <td>Kompetensi individu kelebihan 1 tingkat</td>
                        </tr>
                        <tr>
                            <td>-1</td>
                            <td>4.0</td>
                            <td>Kompetensi individu kekurangan 1 tingkat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>3.5</td>
                            <td>Kompetensi individu kelebihan 2 tingkat</td>
                        </tr>
                        <tr>
                            <td>-2</td>
                            <td>3.0</td>
                            <td>Kompetensi individu kekurangan 2 tingkat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2.5</td>
                            <td>Kompetensi individu kelebihan 3 tingkat</td>
                        </tr>
                        <tr>
                            <td>-3</td>
                            <td>2.0</td>
                            <td>Kompetensi individu kekurangan 3 tingkat</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1.5</td>
                            <td>Kompetensi individu kelebihan 4 tingkat</td>
                        </tr>
                        <tr>
                            <td>-4</td>
                            <td>1.0</td>
                            <td>Kompetensi individu kekurangan 4 tingkat</td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Info Nilai -->
<div class="modal fade" id="infoNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Pemetaan Nilai</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Bobot Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0 - 59</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>60 - 69</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>70 - 79</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>80 - 89</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>90 - 100</td>
                            <td>5</td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
$fetch = $koneksi->query("select * from tbl_seleksi where kode_seleksi='$_GET[kode_seleksi]'")->fetch();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lomba</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Lomba</li>
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
                            <h3 class="card-title">Lomba</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" method="post">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Kriteria Lomba</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly class="form-control" value="<?= $fetch['kriteria'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-5">
                                            <input type="text" readonly value="<?= date('d M Y', strtotime($fetch['tanggal'])); ?>" name="tanggal_lomba" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Pemilihan Siswa</h3>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered table-hover" id="example3">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>NISN</th>
                                                            <th>Nama</th>
                                                            <th>Total Nilai Raport</th>
                                                            <th style="width: 60px;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $nomor = 1;
                                                        if ($_SESSION['level'] == "Guru") {
                                                            $kelasCek = $koneksi->query("select * from tbl_guru where id_user='$_SESSION[id]'")->fetch();
                                                            foreach ($koneksi->query("select avg(nilai_raport) as nilai_raport,tbl_users.username as nisn,tbl_siswa.nama as nama,tbl_seleksi_proses.ket as ket,tbl_siswa.id as idsiswa,tbl_seleksi_proses.kode_seleksi as kode_seleksi from tbl_raport 
                                                        join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                                        join tbl_users on tbl_users.id = tbl_siswa.id_user
                                                        join tbl_kelas on tbl_kelas.id = tbl_siswa.id_kelas
                                                        left join tbl_seleksi_proses on tbl_seleksi_proses.id_siswa = tbl_siswa.id
                                                        where tbl_siswa.id_kelas = '$kelasCek[id_kelas]' and (tbl_kelas.kelas = 4 || tbl_kelas.kelas = 5)
                                                        group by tbl_raport.id_siswa
                                                        order by nilai_raport desc") as $key => $value) { ?>
                                                                <tr>
                                                                    <td><?= $nomor++; ?></td>
                                                                    <td><?= $value['nisn']; ?></td>
                                                                    <td><?= $value['nama']; ?></td>
                                                                    <td><?= number_format($value['nilai_raport'], 2); ?></td>
                                                                    <?php
                                                                    $tanggalSekarang = date('Y-m-d');

                                                                    $cekProses = $koneksi->query("select * from tbl_seleksi_proses where kode_seleksi='$_GET[kode_seleksi]' and id_siswa='$value[idsiswa]'")->fetch();
                                                                    if ($cekProses['ket'] == '') {
                                                                        $data = 'Tidak Mengikuti';
                                                                    } else {
                                                                        $data = $cekProses['ket'];
                                                                    }
                                                                    if ($fetch['tanggal'] >= $tanggalSekarang) {
                                                                    ?>
                                                                        <td>
                                                                            <a onclick="return partisipasi('<?= $value['idsiswa'] ?>', '<?= $_SESSION['id'] ?>','tbl_seleksi_proses','Mengikuti','<?= $_GET['kode_seleksi'] ?>')" class="btn btn-success btn-sm <?php if ($data == "Mengikuti") echo "disabled"; ?>"><span><i class="fa fa-check"></i></span></a>
                                                                            |
                                                                            <a onclick="return partisipasi('<?= $value['idsiswa'] ?>', '<?= $_SESSION['id'] ?>','tbl_seleksi_proses','Tidak Mengikuti','<?= $_GET['kode_seleksi'] ?>')" class="btn btn-warning btn-sm <?php if ($data == "Tidak Mengikuti") echo "disabled"; ?>"><span><i class="fa fa-minus"></i></span></a>
                                                                        </td>
                                                                    <?php } else {
                                                                        $ket = $data;
                                                                    ?>
                                                                        <td><?= $ket ?></td>
                                                                    <?php }
                                                                    ?>
                                                                </tr>
                                                            <?php }
                                                        } else {
                                                            foreach ($koneksi->query("select avg(nilai_raport) as nilai_raport,tbl_users.username as nisn,tbl_siswa.nama as nama,tbl_seleksi_proses.ket as ket,tbl_siswa.id as idsiswa,tbl_seleksi_proses.ket as ket from tbl_raport
                                                            join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
                                                            join tbl_users on tbl_users.id = tbl_siswa.id_user
                                                            join tbl_kelas on tbl_kelas.id = tbl_siswa.id_kelas
                                                            left join tbl_seleksi_proses on tbl_seleksi_proses.id_siswa = tbl_siswa.id
                                                            where (tbl_kelas.kelas = 4 || tbl_kelas.kelas = 5)
                                                            group by tbl_raport.id_siswa
                                                            order by nilai_raport desc") as $key => $value) { ?>
                                                                <tr>
                                                                    <td><?= $nomor++; ?></td>
                                                                    <td><?= $value['nisn']; ?></td>
                                                                    <td><?= $value['nama']; ?></td>
                                                                    <td><?= number_format($value['nilai_raport'], 2); ?></td>
                                                                    <?php
                                                                    $tanggalSekarang = date('Y-m-d');
                                                                    if ($fetch['tanggal'] >= $tanggalSekarang) { ?>
                                                                        <td>
                                                                            <a onclick="return partisipasi('<?= $value['idsiswa'] ?>', '<?= $_SESSION['id'] ?>','tbl_seleksi_proses','Mengikuti','<?= $_GET['kode_seleksi'] ?>')" class="btn btn-success btn-sm <?php if ($value['ket'] == "Mengikuti") echo "disabled"; ?>"><span><i class="fa fa-check"></i></span></a>
                                                                            |
                                                                            <a onclick="return partisipasi('<?= $value['idsiswa'] ?>', '<?= $_SESSION['id'] ?>','tbl_seleksi_proses','Tidak Mengikuti','<?= $_GET['kode_seleksi'] ?>')" class="btn btn-warning btn-sm <?php if ($value['ket'] == "Tidak Mengikuti") echo "disabled"; ?>"><span><i class="fa fa-minus"></i></span></a>
                                                                        </td>
                                                                    <?php } else {
                                                                        if ($value['ket'] == '') {
                                                                            $ket = 'Tidak Mengikuti';
                                                                        } else {
                                                                            $ket = $value['ket'];
                                                                        }
                                                                    ?>
                                                                        <td><?= $ket ?></td>
                                                                    <?php } ?>
                                                                </tr>
                                                        <?php }
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <a href="?folder=lomba&page=lomba&actions=tampil" class="btn btn-danger btn-sm">
                                Kembali
                            </a>
                        </div>
                        </form>
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
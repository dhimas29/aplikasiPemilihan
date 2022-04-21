<?php
$data = $koneksi->query("SELECT * FROM tbl_guru
join tbl_users on tbl_users.id = tbl_guru.id_user
join tbl_kelas on tbl_kelas.id = tbl_guru.id_kelas
where tbl_guru.id='$_GET[id]'");
$fetch = $data->fetch();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Guru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Guru</li>
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
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Guru</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="proses/proses_edit.php" method="post">
                                <input type="hidden" name="namaTabel" value="tbl_kelas">
                                <input type="hidden" name="id" value="<?= $fetch['id']; ?>">
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['username']; ?>" class="form-control" id="nisn">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['nama']; ?>" class="form-control" id="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['tempat_lahir']; ?>" class="form-control" id="tempat_lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['tanggal_lahir']; ?>" class="form-control" id="tanggal_lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['jenis_kelamin']; ?>" class="form-control" id="jenis_kelamin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['alamat']; ?>" class="form-control" id="alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-2 col-form-label">Wali Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['concat']; ?>" class="form-control" id="kelas">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer">
                            <a href="?folder=guru&page=guru&actions=tampil" class="btn btn-danger btn-sm">
                                Kembali
                            </a>
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
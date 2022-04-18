<?php $namaTabel = 'tbl_users'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa</li>
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
                            <h3 class="card-title">Data Siswa</h3>
                            <a href="" data-toggle="modal" data-target="#tambahData" class="btn btn-primary btn-sm" style="float: right;">Upload Data Siswa</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Tempat / Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Kelas</th>
                                        <th>Tahun Ajaran</th>
                                        <th style="width: 100px;">
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($koneksi->query('select *,tbl_siswa.id as idsiswa from tbl_siswa
                                    join tbl_users on tbl_users.id = tbl_siswa.id_user
                                    join tbl_kelas on tbl_kelas.id = tbl_siswa.id_kelas
                                    order by concat asc,username asc') as $key => $value) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?></td>
                                            <td><?= $value['username']; ?></td>
                                            <td><?= $value['nama']; ?></td>
                                            <td><?= $value['tempat_lahir'] . " / " . date('d-M-Y', strtotime($value['tanggal_lahir'])); ?></td>
                                            <td><?= $value['jenis_kelamin']; ?></td>
                                            <td><?= $value['alamat']; ?></td>
                                            <td><?= $value['concat']; ?></td>
                                            <td><?= $value['tahun_ajaran']; ?></td>
                                            <td>
                                                <a href="?folder=user&page=tutor&actions=detail&id=<?= $value['idsiswa'] ?>" class="btn btn-sm btn-info">Detail</a>|
                                                <a onclick="return deleteSwal(<?= $value['id_user'] ?>,'<?= $namaTabel ?>','siswa')" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
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

<!-- Modal Tambah -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data" action="proses/proses_tambah.php">
                <input type="hidden" name="namaTabel" id="namaTabel" value="tbl_siswa">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_user" class="col-sm-3 control-label">Pilih File</label>
                        <div class="col-sm-12">
                            <input name="fileupload" type="file" required="required" class="form-control">
                            <!-- <input name="upload" type="submit" value="Import"> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
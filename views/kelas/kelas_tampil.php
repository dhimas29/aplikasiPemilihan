<?php $namaTabel = 'tbl_kelas'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kelas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Kelas</li>
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
                            <h3 class="card-title">Data Kelas</h3>
                            <a href="" data-toggle="modal" data-target="#tambahData" class="btn btn-primary btn-sm" style="float: right;">Tambah Data Kelas</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kelas</th>
                                        <th>Sub Kelas</th>
                                        <th style="width: 100px;">
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($koneksi->query('select * from tbl_kelas
                                    order by kelas,sub_kelas asc') as $key => $value) { ?>
                                        <tr>
                                            <td style="width: 10px;"><?= $nomor++; ?></td>
                                            <td><?= $value['kelas']; ?></td>
                                            <td><?= $value['sub_kelas']; ?></td>
                                            <td>
                                                <a href="?folder=kelas&page=kelas&actions=detail&id=<?= $value['id'] ?>" class="btn btn-sm btn-info">Detail</a>|
                                                <a onclick="return deleteSwal(<?= $value['id'] ?>,'<?= $namaTabel ?>','kelas')" class="btn btn-sm btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data" action="proses/proses_tambah.php">
                <input type="hidden" name="namaTabel" id="namaTabel" value="tbl_kelas">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <label for="kelas" class="ml-3 control-label">Kelas</label>
                        </div>
                        <div class="col-sm-8">
                            <select name="kelas" id="kelas" required class="form-control">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mt-2">
                            <label for="sub_kelas" class="ml-3 control-label">Sub Kelas</label>
                        </div>
                        <div class="col-sm-8">
                            <select name="sub_kelas" required class="form-control" id="sub_kelas">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $namaTabel = 'tbl_kelas'; ?>
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
                <div class="col-6">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">GAP</h3>
                        </div>
                        <div class="card-body">
                            <form action="?folder=perhitungan&page=perhitungan&actions=proses" method="post">
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-4 col-form-label">Kriteria Lomba</label>
                                    <div class="col-sm-8">
                                        <select name="kriteria" id="" required class="form-control">
                                            <option value="" selected disabled>--Pilih--</option>
                                            <?php
                                            foreach ($koneksi->query("select kriteria from tbl_seleksi group by kode_seleksi") as $key => $value) { ?>
                                                <option value="<?= $value['kriteria'] ?>"><?= $value['kriteria'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-4 col-form-label">Tahun</label>
                                    <div class="col-sm-8">
                                        <select name="tanggal" id="" required class="form-control">
                                            <option value="" selected disabled>--Pilih--</option>
                                            <?php
                                            foreach ($koneksi->query("select year(tanggal) as tanggal from tbl_seleksi group by kode_seleksi") as $key => $value) { ?>
                                                <option value="<?= $value['tanggal'] ?>"><?= $value['tanggal'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning">Proses</button>
                            </form>
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
<?php
$data = $koneksi->query("SELECT * FROM tbl_seleksi
where tbl_seleksi.kode_seleksi='$_GET[kode_seleksi]'");
$fetch = $data->fetch();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Seleksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Seleksi</li>
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
                            <h3 class="card-title">Seleksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="proses/proses_tambah.php" method="post">
                                <input type="hidden" name="namaTabel" value="tbl_seleksi">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Lomba</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" readonly value="<?= $fetch['kriteria'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-5">
                                            <?php
                                            $date = date('d M Y', strtotime($fetch['tanggal']));
                                            ?>
                                            <input type="text" readonly value="<?= $date ?>" name="tanggal_lomba" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Core</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <?php
                                                    $bobotCore = $koneksi->query("select * from tbl_seleksi where faktor='Core' and kode_seleksi='$_GET[kode_seleksi]'")->fetch();
                                                    ?>
                                                    <label for="nama" class="col-sm-4 col-form-label">Bobot</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" oninput="myFunction1()" id="bobotCore" class="form-control" readonly name="bobotCore" value="<?= $bobotCore['bobot'] ?>">
                                                    </div>
                                                </div>
                                                <?php foreach ($koneksi->query("select * from tbl_seleksi where faktor='Core' and kode_seleksi='$_GET[kode_seleksi]'") as $key => $value) { ?>
                                                    <div class="form-group row">
                                                        <?php
                                                        $dat = preg_replace("/_/", " ", $value['subkriteria']);
                                                        ?>
                                                        <label for="nama" class="col-sm-4 col-form-label"><?= ucwords($dat); ?></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" readonly value="<?= $value['bobot_subkriteria'] ?>">
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Secondary</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <?php
                                                    $bobotSecon = $koneksi->query("select * from tbl_seleksi where faktor='Secondary' and kode_seleksi='$_GET[kode_seleksi]'")->fetch();
                                                    ?>
                                                    <label for="nama" class="col-sm-4 col-form-label">Bobot</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" oninput="myFunction2()" id="bobotSecon" class="form-control" readonly value="<?= $bobotSecon['bobot'] ?>" name="bobotSecon">
                                                    </div>
                                                </div>
                                                <?php foreach ($koneksi->query("select * from tbl_seleksi where faktor='Secondary' and kode_seleksi='$_GET[kode_seleksi]'") as $key => $value) { ?>
                                                    <div class="form-group row">
                                                        <?php
                                                        $dat = preg_replace("/_/", " ", $value['subkriteria']);
                                                        ?>
                                                        <label for="nama" class="col-sm-4 col-form-label"><?= ucwords($dat); ?></label>

                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" readonly value="<?= $value['bobot_subkriteria'] ?>">
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <label for="">Total Bobot</label>
                                        <label for="">100%</label>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <a href="?folder=seleksi&page=seleksi&actions=tampil" class="btn btn-danger btn-sm">
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
</div>
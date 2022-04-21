<?php
$data = $koneksi->query("SELECT * FROM tbl_kelas
where tbl_kelas.id='$_GET[id]'");
$fetch = $data->fetch();
?>
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
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kelas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="proses/proses_edit.php" method="post">
                                <input type="hidden" name="namaTabel" value="tbl_kelas">
                                <input type="hidden" name="id" value="<?= $fetch['id']; ?>">
                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['kelas']; ?>" class="form-control" id="kelas">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sub_kelas" class="col-sm-2 col-form-label">Sub Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['sub_kelas']; ?>" class="form-control" id="sub_kelas">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer">
                            <a href="?folder=kelas&page=kelas&actions=tampil" class="btn btn-danger btn-sm">
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
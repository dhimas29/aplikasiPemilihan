<?php
$data = $koneksi->query("SELECT * FROM tbl_users where id='$_GET[id]'");
$fetch = $data->fetch();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
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
                            <h3 class="card-title">Data User</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="proses/proses_edit.php" method="post">
                                <input type="hidden" name="namaTabel" value="tbl_users">
                                <input type="hidden" name="id" value="<?= $fetch['id']; ?>">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Usename</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['username']; ?>" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" minlength="4" name="password" class="form-control" id="inputEmail3" placeholder="Password">
                                        <small>*jika password tidak diisi, maka password tidak diganti</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" readonly value="<?= $fetch['email']; ?>" name="email" class="form-control" id="inputEmail3" placeholder="ex: example@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Level User</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly value="<?= $fetch['level_user']; ?>" name="level_user" class="form-control" id="inputEmail3" placeholder="ex: example@gmail.com">
                                        <!-- <select name="level_user" id="" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option <?php if ($fetch['level_user'] == 'Admin') echo 'selected' ?> value="Admin">Admin</option>
                                            <option <?php if ($fetch['level_user'] == 'Tutor') echo 'selected' ?> value="Tutor">Tutor</option>
                                            <option <?php if ($fetch['level_user'] == 'Kepala') echo 'selected' ?> value="Kepala">Kepala</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-3">
                                        <button type="submit" class="btn btn-warning">
                                            <span class="fa fa-pen"></span> Ubah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
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
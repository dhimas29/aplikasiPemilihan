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
                            <form class="form-horizontal" action="proses/proses_tambah.php" id="formTambahData" method="post">
                                <input type="hidden" name="namaTabel" id="namaTabel" value="tbl_users">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="username" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" required name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" required name="email" class="form-control" placeholder="ex: example@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Level User</label>
                                    <div class="col-sm-10">
                                        <select required name="level_user" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Siswa">Siswa</option>
                                            <option value="Kepala">Kepala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">
                                            <span class="fa fa-plus"></span> Simpan Data</button>
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
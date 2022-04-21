<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <?php if ($_SESSION['level'] == 'Admin') : ?>
                    <div class="col-lg-12">
                        <!-- small box -->
                        <div class="row">
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4>Data User</h4>
                                        <?php $conUser = $koneksi->query("select count(*) from tbl_users")->fetchColumn(); ?>
                                        <p><?= $conUser; ?></p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <a href="?folder=user&page=user&actions=tampil" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h4>Data Kelas</h4>
                                        <?php $conKelas = $koneksi->query("select count(*) from tbl_kelas")->fetchColumn(); ?>
                                        <p><?= $conKelas; ?></p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-map-signs"></i>
                                    </div>
                                    <a href="?folder=kelas&page=kelas&actions=tampil" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h4>Data Guru</h4>
                                        <?php $conGuru = $koneksi->query("select count(*) from tbl_guru")->fetchColumn(); ?>
                                        <p><?= $conGuru; ?></p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-user-secret"></i>
                                    </div>
                                    <a href="?folder=guru&page=guru&actions=tampil" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-3">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h4>Data Siswa</h4>
                                        <?php $conSiswa = $koneksi->query("select count(*) from tbl_siswa")->fetchColumn(); ?>
                                        <p><?= $conSiswa; ?></p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <a href="?folder=siswa&page=siswa&actions=tampil" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- ./col -->
                <?php if ($_SESSION['level'] == 'Guru') : ?>
                    <div class="col-md-12">
                        <div class="col-lg-3 col-3">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h4>Data Siswa</h4>
                                    <?php $guruFetch = $koneksi->query("select * from tbl_guru where id_user='$_SESSION[id]'")->fetch(); ?>
                                    <?php $conSiswa = $koneksi->query("select count(*) from tbl_siswa
                                    where id_kelas='$guruFetch[id_kelas]'")->fetchColumn(); ?>
                                    <p><?= $conSiswa; ?></p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <a href="?folder=siswa&page=siswa&actions=tampil" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Dashboard
                                </h3>
                            </div>
                            <div class="card-body">
                                Selamat datang di website SD Al-Wathoniyah 9
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
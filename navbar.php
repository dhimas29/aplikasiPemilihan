<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <ul class="navbar-nav ml-auto">

            <?php if ($_SESSION['level'] == 'Guru') : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-danger navbar-badge">
                                <?php
                                $nomor = 0;
                                $sekarang = date('Y-m-d');
                                foreach ($koneksi->query("select * from tbl_seleksi group by kode_seleksi,year(tanggal)") as $key => $value) {
                                    if ($value['tanggal'] >= $sekarang) {
                                        $nomor++;
                                    }
                                }
                                echo $nomor; ?>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                            <?php foreach ($koneksi->query("select * from tbl_seleksi group by kode_seleksi order by tanggal desc") as $key => $value) { ?>
                                <a href="?folder=lomba&page=lomba&actions=tambah&kode_seleksi=<?= $value['kode_seleksi'] ?>" class="dropdown-item">
                                    <div class="media">
                                        <img src="assets/img/logoLomba.png" alt="Logo Lomba" class="img-size-50 mr-3 img-circle">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                Lomba <?= $value['kriteria'];
                                                        if ($value['tanggal'] >= $sekarang) {
                                                        ?>
                                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                                <?php } else { ?>
                                                    <span class="float-right text-sm text-secondary"><i class="fas fa-star"></i></span>
                                                <?php } ?>
                                            </h3>
                                            <!-- <p class="text-sm">php</p> -->
                                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?= date('d M Y', strtotime($value['tanggal'])); ?></p>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                            <div class="dropdown-divider"></div>
                            <a href="?folder=lomba&page=lomba&actions=tampil" class="dropdown-item dropdown-footer">Lihat Semua</a>
                        </div>
                    </li>
                </ul>
            <?php endif; ?>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="https://i.pinimg.com/236x/82/2b/ae/822baef36029716ec69b17259bc74ac2.jpg" class="user-image img-circle elevation-2" alt="User Image">
                    <?php
                    $fetchName = $koneksi->query("select tbl_users.username,nama from tbl_guru 
                    join tbl_users on tbl_users.id = tbl_guru.id_user
                    where id_user='$_SESSION[id]'")->fetch();
                    if ($_SESSION['level'] == 'Admin') {
                        $statName = $_SESSION['level'];
                    } else {
                        $statName = $fetchName['nama'];
                    } ?>

                    <span class="d-none d-md-inline"><?= $statName; ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="https://i.pinimg.com/236x/82/2b/ae/822baef36029716ec69b17259bc74ac2.jpg" class="img-circle elevation-2" alt="User Image">
                        <p>
                            <?= $statName; ?>
                            <br>
                            <?php if ($_SESSION['level'] == 'Guru') : ?>
                                (<?= $fetchName['username'] ?>)
                            <?php endif; ?>
                        </p>
                    </li>
                    <li class="user-footer">
                        <div class="row">
                            <div class="col-4 text-center">
                            </div>
                            <div class="col-4 text-center">
                            </div>
                            <div class="col-4 text-center">
                                <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
</nav>
<!-- /.navbar -->
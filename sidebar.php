<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="index_admin.php" class="brand-link">
        <!-- ganti logo -->
        <img src="assets/img/logoSD.png" alt="Logo" class="brand-image img-circle elevation-2" style="opacity: .8;max-height: 28px;margin-left: 0.4rem;margin-top:0;">
        <span class="brand-text font-weight-light">SD Al-Wathoniyah 9</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php
                isset($_GET['folder']) ? $folder = $_GET['folder'] : $folder = '';
                isset($_GET['page']) ? $page = $_GET['page'] : $page = '';
                ?>
                <li class="nav-item user-panel">
                    <a href="index_admin.php" class="nav-link <?php if ($folder == '') echo 'active' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php
                $namaFolder = $folder == 'user' || $folder == 'siswa' || $folder == 'kelas' || $folder == 'guru' || $folder == 'raport'; ?>
                <li class="nav-item <?php if ($namaFolder)  echo 'menu-open' ?>">
                    <a href="#" class="nav-link <?php if ($namaFolder) echo 'active' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <?php if ($_SESSION['level'] == 'Admin') : ?>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="?folder=user&page=user&actions=tampil" class="nav-link <?php if ($page == 'user') echo 'active' ?> ">
                                    <i class="<?php if ($page == 'user') {
                                                    echo 'fa';
                                                } else {
                                                    echo 'far';
                                                }; ?>  fa-circle nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="?folder=kelas&page=kelas&actions=tampil" class="nav-link <?php if ($page == 'kelas') echo 'active' ?> ">
                                    <i class="<?php if ($page == 'kelas') {
                                                    echo 'fa';
                                                } else {
                                                    echo 'far';
                                                }; ?>  fa-circle nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="?folder=guru&page=guru&actions=tampil" class="nav-link <?php if ($page == 'guru') echo 'active' ?> ">
                                    <i class="<?php if ($page == 'guru') {
                                                    echo 'fa';
                                                } else {
                                                    echo 'far';
                                                }; ?>  fa-circle nav-icon"></i>
                                    <p>Data Guru</p>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="?folder=siswa&page=siswa&actions=tampil" class="nav-link <?php if ($page == 'siswa') echo 'active' ?>">
                                <i class="<?php if ($page == 'siswa') {
                                                echo 'fa';
                                            } else {
                                                echo 'far';
                                            }; ?> fa-circle nav-icon"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="?folder=raport&page=raport&actions=tampil" class="nav-link <?php if ($page == 'raport') echo 'active' ?>">
                                <i class="<?php if ($page == 'raport') {
                                                echo 'fa';
                                            } else {
                                                echo 'far';
                                            }; ?> fa-circle nav-icon"></i>
                                <p>Data Raport</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php if ($_SESSION['level'] == 'Guru') : ?>
                    <li class="nav-item user-panel">
                        <a href="?folder=lomba&page=lomba&actions=tampil" class="nav-link <?php if ($page == 'lomba') echo 'active' ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Lomba
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($_SESSION['level'] == 'Admin') : ?>
                    <li class="nav-item user-panel">
                        <a href="?folder=seleksi&page=seleksi&actions=tampil" class="nav-link <?php if ($page == 'seleksi') echo 'active' ?>">
                            <i class="nav-icon fas fa-signal"></i>
                            <p>
                                Seleksi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item user-panel">
                        <a href="?folder=perhitungan&page=perhitungan&actions=tampil" class="nav-link <?php if ($page == 'perhitungan') echo 'active' ?>">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>
                                Perhitungan
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
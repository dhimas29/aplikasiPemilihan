<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Al-Wathoniyah 9</title>
    <link rel="icon" href="assets/img/logoSD.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/dist/css/carousel.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            padding: 0px;
        }
    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>
    <!-- <div class="container-fluid"> -->
    <header class="sticky-top">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 100px;">
                <div class="container-fluid">
                    <img src="assets/img/logoSD.png" width="30" height="24" alt="">
                    <a class="navbar-brand" href="#">SD Al-Wathoniyah 9</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav me-auto mb-2 mb-lg-0">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#profilescroll">Profile</a>
                            <a class="nav-link" href="#infoscroll">Visi Misi</a>
                            <a class="nav-link" href="#albumscroll">Galery</a>
                        </div>
                        <div class="navbar-nav me-2">
                            <a class="btn btn-outline-primary rounded-pill" data-mdb-ripple-color="dark" data-bs-toggle="modal" href="#" data-bs-target="#loginModal"><i class="fa fa-sign-in" aria-hidden="true"> Login</i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    <main>
        <!-- JUMBOTRON -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://mataramweb.com/demo/wp-content/uploads/2021/08/sejumlah-siswa-membaca-bersama-pada-pekan-membaca-di-sekolah-_160412162710-283.jpg" style="background-size: cover;background-position: center;background-repeat: no-repeat;background-color: transparent;background-image: linear-gradient(180deg,#FF6666 40%,#631717 100%);" alt="">
                    <!-- <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Selamat Datang</h1>
                            <p>di SD Al-Wathoniyah 9</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->

        <!-- profile -->
        <div class="bg-light mt-5" id="profilescroll">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="https://www.laduni.id/panel/themes/default/uploads/post/PESANTREN_AL-WATHONIYAH_ASSHODRIYAH_9_JAKARTA_TIMUR.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">Yayasan Al Wathoniyah 9</h1>
                        <p class="lead" style="text-align: justify;text-indent: 30px;">Merupakan sebuah lembaga Pendidikan Formal dan Non Formal, yang didirikan oleh Drs. KH. A. Shodri HM pada tanggal, 1 Januari 1970 di atas sebidang tanah wakaf seluas 500 m2 yang diuraikan dalam girik nomor C.682 Persil 43 terletak di Kp. Pedaengan Kel. Penggilingan Kec. Cakung Jakarta Timur.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END profile -->

        <!-- INFO -->
        <div class="bg-light mt-5" id="infoscroll">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row g-5 py-5">
                    <div class="col-lg-6">
                        <h3>VISI</h3>
                        <p class="lead" style="text-align: justify;text-indent: 30px;">
                            Terwujudnya Anak Didik Madrasah Ibtidaiyah Al-Wathoniyah Cantilan yang ber-IMTAK (beriman, bertakwa, dan berakhlakul karimah), serta mampu ber-IPTEK (Ilmu Pengetahuan dan Teknologi) untuk menyongsong masa depan. Serta mewujudkan Madrasah Kebanggaan Masyarakat.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h3>MISI</h3>
                        <!-- <h1 class="display-5 fw-bold lh-1 mb-3">Yayasan Al Wathoniyah 9</h1> -->
                        <p class="lead" style="text-align: justify;">
                        <ol style="padding-left: 15px;">
                            <li>Meningkatkan Kualitas Pelayanan Mutu Pendidikan.</li>
                            <li>Meningkatkan Aktivitas dan Kreatifitas Siswa Melalui Peningkatan Kinerja Pelaksana Praktikum Pendidikan.</li>
                            <li>Meningkatkan Kualitas Bimbingan Pengamalan Ibadah dan Pengamalan Sikap Hormat Terhadap Penganut Agama Lain.</li>
                            <li>Meningkatkan Partisifasi Aktif dalam Mengikuti Inovasi dalam Bidang Pendidikan.</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END INFO -->

        <!-- ALBUM -->

        <section class="py-5 text-center container" id="albumscroll">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Galery</h1>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img width="100%" height="225" src="https://mataramweb.com/demo/wp-content/uploads/2021/08/sejumlah-siswa-membaca-bersama-pada-pekan-membaca-di-sekolah-_160412162710-283.jpg" alt="">
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img width="100%" height="225" src="https://mataramweb.com/demo/wp-content/uploads/2021/08/xhero_bg.jpg.pagespeed.ic_.J2JpiIDF0w.webp" alt="">
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img width="100%" height="225" src="https://mataramweb.com/demo/wp-content/uploads/2021/08/sd.jpg" alt="">
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img width="100%" height="225" src="https://mataramweb.com/demo/wp-content/uploads/2021/08/Hari-Pramuka.2e16d0ba.fill-1200x800-1.jpg" alt="">
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img width="100%" height="225" src="https://mataramweb.com/demo/wp-content/uploads/2021/08/Cara-Daftar-BLT-Anak-Sekolah-Rp-34-Juta.jpg" alt="">
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <img width="100%" height="225" src="https://mataramweb.com/demo/wp-content/uploads/2021/08/mengulas-usia-yang-pantas-dari-syarat-masuk-sd-mendikbud-1583145880.jpg" alt="">
                                <hr>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END ALBUM -->

        <!-- FOOTER -->

        <div class="container">
            <!-- <footer class="row row-cols-5 py-5 my-5 border-top"> -->
            <footer class="col-md-12 py-5 my-5 border-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col">
                                <img src="assets/img/logoSD.png" width="100%" alt="">
                            </div>
                            <div class="col">
                                <h3>SD Al - Wathoniyah 9</h3>
                            </div>
                            <p class="text-muted" style="text-align: justify;text-indent: 50px;">Merupakan sebuah lembaga Pendidikan Formal dan Non Formal, yang didirikan oleh Drs. KH. A. Shodri HM pada tanggal, 1 Januari 1970 di atas sebidang tanah wakaf seluas 500 m2 yang diuraikan dalam girik nomor C.682 Persil 43 terletak di Kp. Pedaengan Kel. Penggilingan Kec. Cakung Jakarta Timur.</p>
                        </div>
                    </div>

                    <div class="col-md-1">

                    </div>

                    <div class="col-md-3">
                        <h5>Pages</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#profilescroll" class="nav-link p-0 text-muted">Profile</a></li>
                            <li class="nav-item mb-2"><a href="#infoscroll" class="nav-link p-0 text-muted">Info</a></li>
                            <li class="nav-item mb-2"><a href="#albumscroll" class="nav-link p-0 text-muted">Galery</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5">
                        <h5>Contact</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Alamat</p>
                            </div>
                            <div class="col">
                                <p style="text-align: justify;">: Jalan Raya Penggilingan No.99, Penggilingan, Cakung, RT.3/RW.8, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13940</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>No.Telp</p>
                            </div>
                            <div class="col">
                                <p style="text-align: justify;">: (021) 4616390</p>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-3">
                                <p>Email</p>
                            </div>
                            <div class="col">
                                <p style="text-align: justify;">: email@gmail.com</p>
                            </div>
                        </div> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126919.0608560779!2d106.94450120285607!3d-6.234618778308532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b152e1f7a27%3A0x96240fe1b46cd183!2sYayasan%20Al%20-%20Wathoniyah%20Asshodriyah%209!5e0!3m2!1sid!2sid!4v1650553900878!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </row>
                    </div>
                </div>
            </footer>
        </div>

        <!-- END FOOTER -->
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Button trigger modal -->

    <!-- Modal LOGIN-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header">
                        <img src="assets/img/logoSD.png" width="10%" alt="logoModal">
                        <h4 class="modal-title" id="exampleModalLabel">Silakan Login</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="proses_login.php" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">NIK/NISN</label>
                                <input type="text" placeholder="Masukkan NIK/NISN" name="username" required class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" placeholder="Masukkan Password Anda" name="password" required class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-md btn-primary rounded-pill d-grid gap-2 col-6 mx-auto">Masuk Sekarang Juga</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL LOGIN -->

    <!-- Modal REGISTER-->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header">
                        <img src="assets/img/logo.jpg" width="10%" alt="logoModal">
                        <h4 class="modal-title" id="exampleModalLabel">Silahkan Mendaftar</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="proses/proses_tambah.php" method="post">
                        <input type="hidden" name="namaTabel" id="namaTabel" value="tbl_pelamar">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleNik" class="form-label">NIK</label>
                                <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" min="0" maxlength="18" placeholder="Masukkan Nik Anda" name="nik" required class="form-control" id="exampleNik" aria-describedby="nikHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleNama" class="form-label">Nama Lengkap</label>
                                <input type="text" placeholder="Masukkan Nama Anda" name="nama" required class="form-control" id="exampleNama" aria-describedby="namaHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleNotelp" class="form-label">Nomor Telepon</label>
                                <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" min="0" maxlength="15" placeholder="Masukkan No Telp Anda" name="no_telp" required class="form-control" id="exampleNotelp" aria-describedby="notelpHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleEmail" class="form-label">Email</label>
                                <input type="email" placeholder="nama@gmail.com" name="email" required class="form-control" id="exampleEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="examplePassword" class="form-label">Password</label>
                                <input type="password" minlength="4" placeholder="Masukkan Password Anda" name="password" required class="form-control" id="examplePassword" aria-describedby="passwordHelp">
                            </div>
                            <button type="submit" class="btn btn-md btn-primary rounded-pill d-grid gap-2 col-6 mx-auto">Daftar Sekarang</button>

                        </div>
                        <div class="modal-footer">
                            <small>Sudah punya akun. <a href="register.php" class="btn-sm" data-bs-toggle="modal" href="#" data-bs-target="#loginModal">Login disini</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL REGISTER -->

</body>

</html>
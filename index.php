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
                            <a class="nav-link" href="#pricingscroll">Pricing</a>
                            <a class="nav-link" href="#infoscroll">Info</a>
                            <a class="nav-link" href="#albumscroll">Album</a>
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
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2021/07/pemandangan-alam.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://furnizing.com/files/img/hadirkan-suasana-alam-di-rumah-anda597e9f64b682dcc2d0bad5d20d0a2402.jpg" alt="">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.lampost.co/upload/perlawanan-dari-alam.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END JUMBOTRON -->

        <!-- PRICING -->
        <div id="pricingscroll">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="pricing-header pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal">Pricing</h1>
                    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 users included</li>
                                    <li>2 GB of storage</li>
                                    <li>Email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>20 users included</li>
                                    <li>10 GB of storage</li>
                                    <li>Priority email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-white bg-primary border-primary">
                                <h4 class="my-0 fw-normal">Enterprise</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>30 users included</li>
                                    <li>15 GB of storage</li>
                                    <li>Phone and email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="display-6 text-center mb-4 mt-4">Compare plans</h2>

                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th style="width: 34%;"></th>
                                <th style="width: 22%;">Free</th>
                                <th style="width: 22%;">Pro</th>
                                <th style="width: 22%;">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Public</th>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Private</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Permissions</th>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Sharing</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Unlimited members</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Extra security</th>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24">
                                        <use xlink:href="#check" />
                                    </svg></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END PRICING -->

        <!-- INFO -->
        <div class="bg-light mt-5" id="infoscroll">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="https://getbootstrap.com/docs/5.1/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END INFO -->

        <!-- ALBUM -->

        <section class="py-5 text-center container" id="albumscroll">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album example</h1>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php for ($i = 0; $i < 9; $i++) {  ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img width="100%" height="225" src="https://getbootstrap.com/docs/5.1/examples/heroes/bootstrap-themes.png" alt="">
                                    <hr>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
                                <img src="https://getbootstrap.com/docs/5.1/examples/heroes/bootstrap-themes.png" width="100%" alt="">
                            </div>
                            <div class="col">
                                <h3 class="mt-3">PBN</h3>
                            </div>
                            <p class="text-muted" style="text-align: justify;text-indent: 50px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid numquam, fugiat voluptatibus animi veniam ipsa, veritatis esse atque quod nisi dicta quidem tenetur quibusdam similique quaerat non quis dolore, repudiandae quos accusamus autem voluptas? Dolorem adipisci repellat eaque iusto. Magnam, molestias iusto! Inventore minus aperiam debitis pariatur cupiditate amet deleniti?</p>
                        </div>
                    </div>

                    <div class="col">

                    </div>

                    <div class="col-md-3">
                        <h5>Pages</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#pricingscroll" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#infoscroll" class="nav-link p-0 text-muted">Info</a></li>
                            <li class="nav-item mb-2"><a href="#albumscroll" class="nav-link p-0 text-muted">Album</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h5>Contact</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Alamat</p>
                            </div>
                            <div class="col">
                                <p style="text-align: justify;">: Jl. Pramuka No.59, RT.006/RW.006, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>No.Telp</p>
                            </div>
                            <div class="col">
                                <p style="text-align: justify;">: 0812312312</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Email</p>
                            </div>
                            <div class="col">
                                <p style="text-align: justify;">: email@gmail.com</p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53364.37920309387!2d107.009582450245!3d-6.219981594265342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c25f0027091%3A0x885772e11113cb50!2sAlun-Alun%20Kota%20Bekasi!5e0!3m2!1sid!2sid!4v1647613020633!5m2!1sid!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                        <div class="modal-footer">
                            <small>Belum punya akun. <a class="btn-sm" data-bs-toggle="modal" href="#" data-bs-target="#registerModal">Daftar disini</a></small>

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
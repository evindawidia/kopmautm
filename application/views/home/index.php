<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koperasi Mahasiswa UTM</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>public/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>public/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>public/asset/css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">KopMa UTM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url("Home/registrasi") ?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Join us ?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-uppercase">Koperasi Mahasiswa</div>
                <div class="intro-lead-in">Universitas Trunojoyo Madura</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url("Home/login") ?>">Login</a>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">How to join us ?</h2>
                    <h3 class="section-subheading text-muted">Cara bergabung dengan KopMa UTM</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?= base_url() ?>public/asset/img/about/daftar.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Daftar Member</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Daftarkan diri anda dengan melakukan registrasi. Pastikan untuk melengkapi data-data Anda. Pada setiap pendaftaran member akan dikenai Uang Kas sebesar Rp. 20.000,00. Calon member maksimal berada di semester 6.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?= base_url() ?>public/asset/img/about/login.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Login</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Login pada akun anda untuk melakukan transaksi-transaksi lainnya. Pastikan akun anda telah terdaftar menjadi member KopMa. Masukkan Username yang berisi email dan password anda dengan benar.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?= base_url() ?>public/asset/img/about/transaksi.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Pilih Transaksi</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Terdapat 2 pilihan transaksi yaitu Pembelian dan Pengajuan. Anda akan dapat mengakses transaksi tersebut dengan tujuan atau kepentingan masing-masing.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?= base_url() ?>public/asset/img/about/pembelian.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Pembelian Barang</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">KopMa menyediakan berbagai macam kebutuhan mahasiswa seperti ATK, tas dan lain sebagainya dengan harga yang cukup terjangkau serta kualitas yang baik. Anda akan merasa nyaman berbelanja di KopMa UTM.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="<?= base_url() ?>public/asset/img/about/peminjaman.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Peminjaman Uang</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Member yang telah terdaftar di KopMa UTM dapat melakukan peminjaman uang dengan cicilan yang tidak memberatkan. Serta proses peminjaman yang mudah.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; KopMaUTM <?= date('Y') ?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#" style="color: #5bb666">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" style="color: #5bb666">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>public/asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>public/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url() ?>public/asset/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url() ?>public/asset/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>public/asset/js/agency.min.js"></script>

</body>

</html>
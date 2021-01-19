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
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                            Products <span class="caret"></span></a>
                        <ul class="dropdown-menu bg-dark" style="width: 350px">
                            <?php foreach ($Kategori as $k) { ?>
                                <li class="nav-link"><a href="<?= base_url() ?>Home/produk?id=<?= $k->id_kategori ?>"><?= $k->nama_kategori ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">How to ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $UserLogin->nama_anggota ?></span>

                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Logout" jika ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url() ?>Home/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-uppercase">Koperasi Mahasiswa</div>
                <div class="intro-lead-in">Universitas Trunojoyo Madura</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Layanan Kami</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <a href="<?= base_url() ?>Home/produk" class="text text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Pembelian Barang</h4>
                    </a>
                    <p class="text-muted">KopMa menyediakan berbagai macam kebutuhan mahasiswa seperti ATK, tas dan lain sebagainya dengan harga yang cukup terjangkau serta kualitas yang baik. Anda akan merasa nyaman berbelanja di KopMa UTM.</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url() ?>Home/peminjaman" class="text text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-money-check-alt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Peminjaman Uang</h4>
                    </a>
                    <p class="text-muted">Member yang telah terdaftar di KopMa UTM dapat melakukan peminjaman uang dengan cicilan yang tidak memberatkan. Serta proses peminjaman yang mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Kategori Produk</h2>
                    <h3 class="section-subheading text-muted">Produk-produk yang kami sediakan</h3>
                </div>
            </div>
            <div class="row">
                <?php foreach ($Kategori as $k) { ?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" href="<?= base_url() ?>Home/produk?id=<?= $k->id_kategori ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-shopping-cart fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?= base_url("public/asset/img/katpro/$k->id_kategori") ?>.jpg" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4><?= $k->nama_kategori ?></h4><br>
                            <a href="" class="text-muted">Read More...</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">How to make transactions ?</h2>
                    <h3 class="section-subheading text-muted">Cara untuk transaksi</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
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

    <!-- Team -->
    <section class="bg-light page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Keanggotaan KopMa UTM</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url() ?>public/asset/img/team/1.jpg" alt="">
                        <h4>Widia Cahyaningrum</h4>
                        <p class="text-muted">Bendahara KopMa UTM</p>
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
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url() ?>public/asset/img/team/3.jpg" alt="">
                        <h4>Evinda Widia Cahyaningrum</h4>
                        <p class="text-muted">Ketua KopMa UTM</p>
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
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url() ?>public/asset/img/team/1.jpg" alt="">
                        <h4>Cahyaningrum Widia</h4>
                        <p class="text-muted">Sekretaris KopMa UTM</p>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Hubungi Kami di...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 alert alert-warning">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        <i class="fa fa-envelope"></i>&nbsp&nbsp&nbsp kopmautm@trunojoyo.ac.id
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="fa fa-phone"></i>&nbsp&nbsp&nbsp +6281931541928
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="fa fa-map-marker-alt"></i>&nbsp&nbsp&nbsp Jl. Raya Telang, Perumahan Telang Inda, Telang, Kamal, Kabupaten Bangkalan, Jawa Timur 69162
                                    </th>
                                </tr>
                                <tr>
                                    <th class="d-flex">
                                        <i class="fa fa-quote-left"></i>
                                        <h3>Dari Kita Oleh Kita Untuk Kita</h3><i class="fa fa-quote-right"></i>
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15835.628713745355!2d112.7271187!3d-7.13673195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd803dd886bbff5%3A0x9777ca139b28195d!2sUniversity%20of%20Trunojoyo%20Madura!5e0!3m2!1sen!2sid!4v1574513037527!5m2!1sen!2sid" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    </form>
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
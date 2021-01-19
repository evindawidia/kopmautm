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

    <?= $this->session->flashdata("msg") ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url('Home/user') ?>">KopMa UTM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('Home/user') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#peminjaman">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#track">Trackrecord Peminjaman</a>
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
                    <a class="btn btn-primary" href="<?= base_url('Home/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Peminjaman -->
    <section class="bg-light page-section" id="peminjaman">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr>
                    <h2 class="section-heading text-uppercase">Peminjaman</h2>
                    <h3 class="section-subheading text-muted">Peminjaman Uang</h3>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-1">
                <div class="card-body p-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Peminjaman</h1>
                                </div>
                                <form action="<?= base_url() ?>Home/dopeminjaman" method="POST">
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="number" name="jumlah_pinjam" class="form-control form-control-user" max="1000000" placeholder="Masukkan Nominal (max 1 juta)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="number" name="tenor" class="form-control form-control-user" placeholder="Jangka Pinjam" min="3" max="24">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success text-white" type="submit">Ajukan Peminjaman</button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bg-light page-section" id="track">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr>
                    <h2 class="section-heading text-uppercase">Trackrecord Peminjaman</h2>
                    <h3 class="section-subheading text-muted">Trackrecord Peminjaman Uang</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid col-lg-10">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Trackrecord Pembayaran</h1>
            <p class="mb-2">Berikut adalah trackrecord pembayaran peminjaman uang anda.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-dark"><?= $UserLogin->nama_anggota ?></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <?php
                            $i = 0;
                            foreach ($Peminjaman as $pem) {
                                $i++
                            ?>
                                <tr>
                                    <th>Pengajuan</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Angsuran</th>
                                    <th>Keterangan</th>
                                </tr>
                                <?php foreach ($pem->GetLogPembayaran() as $glp) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td>
                                            <?= $glp->tanggal_bayar ?>
                                        </td>
                                        <td>
                                            <?= $pem->jumlah_cicilan ?>
                                        </td>
                                        <td>
                                            <?= $glp->GetStatusBayar() ?>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                            <!-- looping space -->

                        </table>
                    </div>
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
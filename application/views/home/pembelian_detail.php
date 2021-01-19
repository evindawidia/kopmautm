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
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                            Products <span class="caret"></span></a>
                        <ul class="dropdown-menu bg-dark" style="width: 350px">
                            <?php foreach ($KategoriList as $kl) { ?>
                                <li class="nav-link"><a href="<?= base_url() ?>Home/produk?id=<?= $kl->id_kategori ?>"><?= $kl->nama_kategori ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#KeranjangModal"><i class="fa fa-shopping-cart"></i> Keranjang</a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anggota</span>

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


    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?= $this->session->flashdata('msg') ?>
                    <hr>
                    <h2 class="section-heading text-uppercase"><?= $Barang->nama_barang ?></h2>
                    <h3 class="section-subheading text-muted">Pilih Jumlah Barang Dan Beli</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6">
                    <a class="portfolio-link">
                        <div class="portfolio">
                        </div>
                        <img class="img-fluid" src="<?= $Barang->image ?>" alt="">
                    </a>
                </div>

                <div class="col-6 col-sm-6">
                    <div class="portfolio-caption">
                        <form action="<?= base_url() . "Home/tambah_keranjang?id=" . $Barang->id_barang ?>" method="POST">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        Nama Barang :
                                    </th>
                                    <td>
                                        <?= $Barang->nama_barang ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Harga Barang :
                                    </th>
                                    <td>
                                        <?= $Barang->harga_jual ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Stock
                                    </th>
                                    <td>
                                        <?= $Barang->stock ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <td>
                                        <?= $Barang->deskripsi ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="number" class="form-control form" name="jumlah_beli" value="1" placeholder="1-99" min="1" max="99">
                                    </th>
                                    <td>
                                        <button type="submit" class="btn btn-info">Masukan Ke Keranjang</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About -->


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

    <div class="modal fade" id="KeranjangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keranjang Anda</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nama Barang
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Jumlah Item
                                </th>
                                <th>
                                    Total Harus dibayar
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>

                            <?php
                            $bayar = 0;
                            foreach ($Keranjang as $k) {
                                foreach ($k->DetailPembelian() as $dp) { ?>
                                    <tr>
                                        <td>
                                            <?= $dp->GetNamaBarang() ?>
                                        </td>
                                        <td>
                                            <?= $dp->GetHargaJual() ?>
                                        </td>
                                        <td>
                                            <?= $dp->jumlah_beli ?>
                                        </td>
                                        <td>
                                            Rp. <?= $dp->GetTotal() ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger text-white" href="<?= base_url() ?>Home/delete_item?id=<?= $dp->id_det_pembelian ?>">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } ?>
                    </table>
                    <br>
                </div>
                <?php if (isset($k)) { ?>
                    <div class="modal-footer">
                        <a class="btn btn-success text-white" href="<?= base_url() ?>Home/checkout?id=<?= $k->id_pembelian ?>">Checkout</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

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
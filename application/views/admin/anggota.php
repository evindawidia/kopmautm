<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koperasi Mahasiswa UTM</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/') ?>css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin KopMa</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Admin/data_anggota') ?>">
                    <i class="fas fa-users"></i>
                    <span>Data Anggota</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Admin/data_pembelian') ?>">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Data Pembelian</span>
                </a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/data_peminjaman') ?>">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Data Peminjaman</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/data_barsup') ?>">
                    <i class="fas fa-address-book"></i>
                    <span>Data Barang & Supplier</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Pemberitahuan
                                </h6>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>

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

                </nav>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0">Data Pendaftar</h1>
                    </div>


                    <div class="row">
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <table class="table table-striped">

                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Nama
                                            </th>
                                            <th>
                                                Tanggal Mendaftar
                                            </th>
                                            <th>
                                                Prodi
                                            </th>
                                            <th style="width: 300px">
                                                Button
                                            </th>
                                        </tr>

                                        <!-- loopingnya disini sayang -->
                                        <?php foreach ($pendaftar as $p) { ?>
                                            <tr>
                                                <td>
                                                    <?= $p->id_anggota ?>
                                                </td>
                                                <td>
                                                    <?= $p->nama_anggota ?>
                                                </td>
                                                <td>
                                                    <?= $p->tanggal_mendaftar ?>
                                                </td>
                                                <td>
                                                    <?= $p->nama_prodi ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('Admin/detail_pendaftar/' . $p->id_anggota) ?>">
                                                        <i class="fas fa-eye"></i>
                                                        <span>View</span>
                                                    </a>
                                                    <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('Admin/tambah_anggota/' . $p->id_anggota) ?>">
                                                        <i class="fas fa-plus"></i>
                                                        <span>Tambah</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <!-- ============================ -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0">Data Anggota</h1>
                    </div>


                    <div class="row">
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <table class="table table-striped">

                                        <tr>
                                            <th>
                                                ID Anggota
                                            </th>
                                            <th>
                                                Nama Anggota
                                            </th>
                                            <th>
                                                Tanggal Mendaftar
                                            </th>
                                            <th>
                                                Prodi
                                            </th>
                                            <th style="width: 400px">
                                                Button
                                            </th>
                                        </tr>

                                        <?php foreach ($anggota as $a) { ?>
                                            <tr>
                                                <td>
                                                    <?= $a->id_anggota ?>
                                                </td>
                                                <td>
                                                    <?= $a->nama_anggota ?>
                                                </td>
                                                <td>
                                                    <?= $a->tanggal_mendaftar ?>
                                                </td>
                                                <td>
                                                    <?= $a->nama_prodi ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('Admin/detail_anggota/' . $a->id_anggota) ?>">
                                                        <i class="fas fa-eye"></i>
                                                        <span>View</span>
                                                    </a>
                                                    <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('Admin/edit_anggota/' . $a->id_anggota) ?>">
                                                        <i class="fas fa-edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="">
                                                        <i class="fas fa-trash"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <!-- ============================ -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Kompa UTM 2019</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

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

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('asset/') ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url('asset/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('asset/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('asset/') ?>js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url('asset/') ?>vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url('asset/') ?>js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url('asset/') ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>
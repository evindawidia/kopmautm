<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Dashboard</h1>
    </div>
    <div class="row d-sm-flex">
        <div class="col-lg-1">
            <img class="" src="<?= base_url() ?>public/asset/img/logo.png" alt="" style="width: 100%">
        </div>
        <div class="col-lg-10">
            <h2>Koperasi Mahasiswa</h2>
            <p class="text-muted">Universitas Trunojoyo Madura</p>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pemasukan Koperasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengeluaran Koperasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Peminjaman Koperasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">

                                </div>
                                <div class="col">

                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Anggota KopMa UTM</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-clipboard fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>
                                Nama
                            </th>
                            <th>
                                Tanggal Ajuan
                            </th>
                            <th>
                                Jumlah Pinjaman
                            </th>
                            <th>
                                Tenor
                            </th>
                        </tr>
                        <?php foreach ($Pengajuan as $p) { ?>
                            <tr>
                                <td><?php foreach ($Anggota as $a) {
                                        if ($p->anggota_id == $a->id_anggota) {
                                            echo $a->nama_anggota;
                                        }
                                    } ?></td>
                                <td><?= $p->tanggal_ajuan ?></td>
                                <td><?= $p->jumlah_pinjam ?></td>
                                <td><?= $p->tenor ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>



        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Short Cut</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th><a href="" class="btn btn-info" style="width: 100%">Konfirmasi Anggota</a></th>
                        </tr>

                        <tr>
                            <th><a href="" class="btn btn-success" style="width: 100%">Konfirmasi Peminjaman</a></th>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
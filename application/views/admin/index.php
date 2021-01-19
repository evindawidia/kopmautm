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
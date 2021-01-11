<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Pembelian</h1>
    </div>


    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Status Pengajuan</th>
                            <th>Tanggal</th>
                            <th>Jumlah Pinjaman</th>
                            <th>Cicilan</th>
                            <th>Tenor</th>
                            <th style="width: 300px">Button</th>
                        </tr>
                        <?php foreach ($Peminjaman as $p) { ?>
                            <tr>
                                <td><?= $p->id_pengajuan ?></td>
                                <td><?= $p->GetNamaAnggota() ?></td>
                                <td><?= $p->GetStatusAju() ?></td>
                                <td><?= $p->tanggal_ajuan ?></td>
                                <td><?= $p->jumlah_pinjam ?></td>
                                <td><?= $p->jumlah_cicilan ?></td>
                                <td><?= $p->tenor ?></td>
                                <td>
                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/detail_peminjaman?id=<?= $p->id_pengajuan ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>Log</span>
                                    </a>
                                    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/peminjaman_delete?id=<?= $p->id_pengajuan ?>">
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
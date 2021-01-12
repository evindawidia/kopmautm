<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Pembelian Detail</h1>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-2">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Tgl Pembelian</th>
                            <th>Status Pembelian</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                            <th style="width: 200px">Button</th>
                        </tr>
                        <?php foreach ($Detail_Beli as $d) {
                            if ($d->pembelian_id == $pembelian->id_pembelian) { ?>
                                <tr>
                                    <td><?= $d->id_det_pembelian ?></td>
                                    <td><?= $d->date_created ?></td>
                                    <td><?= $d->GetStatusBeli() ?></td>
                                    <td><?= $d->GetNamaBarang() ?></td>
                                    <td><?= $d->jumlah_beli ?></td>
                                    <td><a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/pembelian_edit?id=<?= $d->id_det_pembelian ?>">
                                            <i class="fas fa-eye"></i>
                                            <span>Edit</span>
                                        </a>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                        <!-- ============================ -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
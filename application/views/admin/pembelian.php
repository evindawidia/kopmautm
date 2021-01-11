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
                            <th>ID Pembelian</th>
                            <th>Nama</th>
                            <th>Tanggal Beli</th>
                            <th>Status Beli</th>
                            <th style="width: 300px">Button</th>
                        </tr>
                        <?php foreach ($Pembelian as $p) { ?>
                            <tr>
                                <td><?= $p->id_pembelian ?></td>
                                <td><?php foreach ($Anggota as $a) {
                                        if ($a->id_anggota == $p->anggota_id) {
                                            echo $a->nama_anggota;
                                        }
                                    } ?></td>
                                <td><?= $p->tanggal_beli ?></td>
                                <td><?php foreach ($Detail_Beli as $b) {
                                        if ($b->pembelian_id == $p->id_pembelian) {
                                            echo $b->GetStatusBeli();
                                        }
                                    } ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="">
                                        <i class="fas fa-eye"></i>
                                        <span>View</span>
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
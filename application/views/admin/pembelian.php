<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Pembelian</h1>
    </div>


    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/pembelian_add">
                        <i class="fas fa-plus"></i>
                        <span>Tambah</span>
                    </a>
                    <br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th style="width: 300px">Button</th>
                        </tr>
                        <?php foreach ($Pembelian as $p) { ?>
                            <tr>
                                <td><?= $p->id_pembelian ?></td>
                                <td><?= $p->GetNamaAnggota() ?></td>
                                <td>
                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/detail_pembelian?id=<?= $p->id_pembelian ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>View</span>
                                    </a>
                                    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/pembelian_delete?id=<?= $p->id_pembelian ?>">
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
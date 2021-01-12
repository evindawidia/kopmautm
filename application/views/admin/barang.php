<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Barang</h1>
    </div>


    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/barang_add">
                        <i class="fas fa-plus"></i>
                        <span>Tambah</span>
                    </a>
                    <br><br>
                    <?= $this->session->flashdata('msg') ?>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tanggal Input</th>
                            <th>Stock</th>
                            <th style="width: 350px">Button</th>
                        </tr>
                        <?php foreach ($Barang as $b) { ?>
                            <tr>
                                <td><?= $b->id_barang ?></td>
                                <td><?= $b->nama_barang ?></td>
                                <td><?= $b->date_created ?></td>
                                <td><?= $b->stock ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/detail_barang?id=<?= $b->id_barang ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>View</span>
                                    </a>
                                    <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/barang_edit?id=<?= $b->id_barang ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/barang_delete?id=<?= $b->id_barang ?>">
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
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Supplier</h1>
    </div>


    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Tanggal Buat</th>
                            <th style="width: 250px">Button</th>
                        </tr>
                        <?php foreach ($Supplier as $s) { ?>
                            <tr>
                                <td><?= $s->id_supplier ?></td>
                                <td><?= $s->nama_supplier ?></td>
                                <td><?= $s->alamat_supplier ?></td>
                                <td><?= $s->no_telpon_supplier ?></td>
                                <td><?= $s->date_created ?></td>
                                </td>
                                <td>
                                    <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/supplier_edit?id=<?= $s->id_supplier ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/supplier_delete?id=<?= $s->id_supplier ?>">
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
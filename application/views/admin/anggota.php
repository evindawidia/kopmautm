<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Anggota</h1>
    </div>


    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/anggota_add">
                        <i class="fas fa-plus"></i>
                        <span>Tambah</span>
                    </a>
                    <br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tanggal Mendaftar</th>
                            <th>Prodi</th>
                            <th style="width: 400px">Button</th>
                        </tr>
                        <?php foreach ($Anggota as $a) { ?>
                            <tr>
                                <td><?= $a->id_anggota ?></td>
                                <td><?= $a->nama_anggota ?></td>
                                <td><?= $a->date_created ?></td>
                                <td><?php foreach ($Prodi as $p) {
                                        if ($p->id_prodi == $a->prodi_id) {
                                            echo $p->nama_prodi;
                                        }
                                    } ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/anggota_detail?id=<?= $a->id_anggota ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>View</span>
                                    </a>
                                    <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/anggota_edit?id=<?= $a->id_anggota ?>">
                                        <i class="fas fa-eye"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="<?= base_url() ?>Admin/anggota_delete?id=<?= $a->id_anggota ?>">
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
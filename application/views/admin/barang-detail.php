<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Barang Detail</h1>
    </div>
    <div class="row">
        <div class="col-xl-10 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <?= $this->session->flashdata('msg') ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Image</th>
                            <td><img src="<?= $barang->getImage() ?>" class="img-fluid" style="width:100px"></td>
                        </tr>
                        <tr>
                            <th>ID barang</th>
                            <td><?= $barang->id_barang ?></td>
                        </tr>
                        <tr>
                            <th>Nama Barang</th>
                            <td><?= $barang->nama_barang ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Kategori Barang</th>
                            <td><?= $barang->GetKategori() ?></td>
                        </tr>
                        <tr>
                            <th>Harga Jual</th>
                            <td><?= $barang->harga_jual ?></td>
                        </tr>
                        <tr>
                            <th>Harga Beli</th>
                            <td><?= $barang->harga_beli ?></td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td><?= $barang->stock ?></td>
                        </tr>
                        <tr>
                            <th>Supplier</th>
                            <td><?= $barang->GetSupplier() ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td><?= $barang->deskripsi ?></td>
                        </tr>
                        <!-- ============================ -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Tambah Data Barang</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <form action="<?= base_url() ?>Admin/doaddbarang" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Supplier</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="supplier_id" type="text" class="form-control" placeholder="Supplier" required>
                                        <?php foreach ($Supplier as $s) { ?>
                                            <option value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Kategori</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="kategori_id" type="text" class="form-control" placeholder="Kategori" required>
                                        <?php foreach ($Kategori as $k) { ?>
                                            <option value="<?= $k->id_kategori ?>"><?= $k->nama_kategori ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Barang</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="nama_barang" type="text" class="form-control form-control-user" placeholder="Nama Barang" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Harga Jual</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Harga Jual" name="harga_jual" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Harga Beli</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Harga Beli" name="harga_beli" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Image</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="file" class="form-control form-control-user" name="image" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Deskripsi</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Deskripsi" name="deskripsi" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Stock</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Stock" name="stock" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Date Created</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="date" class="form-control form-control-user" placeholder="Y-M-D" name="date_created" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Simpan
                            </button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
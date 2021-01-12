<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Edit Data Barang</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <?= $this->session->flashdata('msg') ?>
                        <?php echo form_open_multipart('Admin/doeditbarang?id=' . $id); ?>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">ID Barang</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input readonly type="text" class="form-control form-control-user" value="<?= $barang->id_barang ?>" name="id_barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Supplier</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <select name="supplier_id" type="text" class="form-control" placeholder="Supplier">
                                    <?php foreach ($Supplier as $s) { ?>
                                        <option value="<?= $s->id_supplier ?>" <?php if ($s->id_supplier == $barang->supplier_id) {
                                                                                    echo "selected";
                                                                                } ?>><?= $s->nama_supplier ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Kategori</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <select name="kategori_id" type="text" class="form-control" placeholder="Kategori">
                                    <?php foreach ($Kategori as $k) { ?>
                                        <option value="<?= $k->id_kategori ?>" <?php if ($k->id_kategori == $barang->kategori_id) {
                                                                                    echo "selected";
                                                                                } ?>><?= $k->nama_kategori ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Barang</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input name="nama_barang" type="text" class="form-control form-control-user" value="<?= $barang->nama_barang ?>" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Harga Jual</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" value="<?= $barang->harga_jual ?>" placeholder="Harga Jual" name="harga_jual">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Harga Beli</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" value="<?= $barang->harga_beli ?>" placeholder="Harga Beli" name="harga_beli">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Image</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <img class="img-fluid" style="width: 30%" src="<?= $barang->getImage() ?>" id="img-preview">
                                <input type="file" class="form-control form-control-user" id="img-input" name="image" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Deskripsi</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" value="<?= $barang->deskripsi ?>" placeholder="Deskripsi" name="deskripsi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Stock</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" value="<?= $barang->stock ?>" placeholder="Stock" name="stock">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Date Created</label></div>
                            <div class="col-sm-10 mb-3 mb-sm-0">
                                <input readonly type="text" class="form-control form-control-user" value="<?= $barang->date_created ?>" placeholder="Date Created" name="date_created">
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
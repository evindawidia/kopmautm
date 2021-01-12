<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Edit Data Pembelian</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <form action="<?= base_url() . "Admin/doeditpembelian?id=" . $DetailPembelian->id_det_pembelian ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">ID Detail</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input readonly type="text" class="form-control form-control-user" value="<?= $DetailPembelian->id_det_pembelian ?>" placeholder="ID Detail Pembelian" name="id_det_pembelian">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Status Beli</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="status_beli_id" type="text" class="form-control" placeholder="Status Beli">
                                        <?php foreach ($StatusBeli as $s) { ?>
                                            <option value="<?= $s->id_status_beli ?>" <?php if ($s->id_status_beli == $DetailPembelian->status_beli_id) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $s->status_beli ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Barang</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="barang_id" type="text" class="form-control" placeholder="Barang">
                                        <?php foreach ($Barang as $b) { ?>
                                            <option value="<?= $b->id_barang ?>" <?php if ($b->id_barang == $DetailPembelian->barang_id) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $b->nama_barang ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Jumlah Beli</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $DetailPembelian->jumlah_beli ?>" placeholder="Jumlah Beli" name="jumlah_beli">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Tanggal</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="date_created" readonly type="text" class="form-control form-control-user" value="<?= $DetailPembelian->date_created ?>" placeholder="Tanggal">
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
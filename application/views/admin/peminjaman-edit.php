<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Edit Data Peminjaman</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <form action="<?= base_url() . "Admin/doeditpeminjaman?id=" . $Pengajuan->id_pengajuan ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">ID</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input readonly type="text" class="form-control form-control-user" value="<?= $Pengajuan->id_pengajuan ?>" name="id_pengajuan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Anggota</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="anggota_id" type="text" class="form-control" placeholder="Anggota">
                                        <?php foreach ($Anggota as $a) { ?>
                                            <option value="<?= $a->id_anggota ?>" <?php if ($a->id_anggota == $Pengajuan->anggota_id) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $a->nama_anggota ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Status Beli</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="stat_pengajuan_id" type="text" class="form-control" placeholder="Status Aju">
                                        <?php foreach ($StatusAju as $s) { ?>
                                            <option value="<?= $s->id_stat_pengajuan ?>" <?php if ($s->id_stat_pengajuan == $Pengajuan->stat_pengajuan_id) {
                                                                                                echo "selected";
                                                                                            } ?>><?= $s->status_pengajuan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Tanggal Ajuan</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="tanggal_ajuan" readonly type="text" class="form-control form-control-user" value="<?= $Pengajuan->tanggal_ajuan ?>" placeholder="Tanggal Ajuan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Jumlah Pinjaman</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $Pengajuan->jumlah_pinjam ?>" placeholder="Jumlah Pinjam" name="jumlah_pinjam">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Jumlah Cicilan</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $Pengajuan->jumlah_cicilan ?>" placeholder="Jumlah Cicilan" name="jumlah_cicilan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Tenor</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $Pengajuan->tenor ?>" placeholder="Tenor" name="tenor">
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
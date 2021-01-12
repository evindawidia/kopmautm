<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Anggota</h1>
                        </div>
                        <form action="<?= base_url() . "Admin/doeditanggota?id=" . $anggota->id_anggota ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">ID Anggota</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input readonly type="text" class="form-control form-control-user" value="<?= $anggota->id_anggota ?>" placeholder="ID Anggota" name="id_anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Level</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="level_id" type="text" class="form-control" placeholder="Level">
                                        <?php foreach ($Level as $l) { ?>
                                            <option value="<?= $l->id_level ?>" <?php if ($l->id_level == $anggota->level_id) {
                                                                                    echo "selected";
                                                                                } ?>><?= $l->ket_level ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Anggota</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $anggota->nama_anggota ?>" placeholder="Nama Anggota" name="nama_anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Email</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $anggota->email ?>" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Password</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $anggota->password ?>" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Alamat</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $anggota->alamat_anggota ?>" placeholder="Alamat" name="alamat_anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">No Telp</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $anggota->no_telpon_anggota ?>" placeholder="No Telpon" name="no_telpon_anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Jenis Kelamin</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select type="text" class="form-control" placeholder="Jenis Kelamin" name="gender_id">
                                        <?php foreach ($Gender as $g) { ?>
                                            <option value="<?= $g->id_gender ?>" <?php if ($g->id_gender == $anggota->gender_id) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $g->jenis_kelamin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Tanggal Daftar</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="date_created" readonly type="text" class="form-control form-control-user" value="<?= $anggota->date_created ?>" placeholder="Tanggal Mendaftar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Prodi</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="prodi_id" type="text" class="form-control" placeholder="Prodi">
                                        <?php foreach ($Prodi as $pr) { ?>
                                            <option value="<?= $pr->id_prodi ?>" <?php if ($pr->id_prodi == $anggota->prodi_id) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $pr->nama_prodi ?></option>
                                        <?php } ?>
                                    </select>
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
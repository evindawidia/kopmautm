<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Tambah Data Anggota</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <form action="<?= base_url() ?>Admin/doaddanggota" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Level</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="level_id" type="text" class="form-control" placeholder="Level" required>
                                        <?php foreach ($Level as $l) { ?>
                                            <option value="<?= $l->id_level ?>"><?= $l->ket_level ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Anggota</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Nama Anggota" name="nama_anggota" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Email</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Password</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Alamat</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Alamat" name="alamat_anggota" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">No Telp</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="No Telpon" name="no_telpon_anggota" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Jenis Kelamin</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select type="text" class="form-control" placeholder="Jenis Kelamin" name="gender_id" required>
                                        <?php foreach ($Gender as $g) { ?>
                                            <option value="<?= $g->id_gender ?>"><?= $g->jenis_kelamin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Tanggal Daftar</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="date_created" type="date" class="form-control form-control-user" placeholder="Y-M-D" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Prodi</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <select name="prodi_id" type="text" class="form-control" placeholder="Prodi" required>
                                        <?php foreach ($Prodi as $pr) { ?>
                                            <option value="<?= $pr->id_prodi ?>"><?= $pr->nama_prodi ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Tambah
                            </button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
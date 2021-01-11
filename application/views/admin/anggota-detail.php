<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Anggota Detail</h1>
    </div>
    <div class="row">
        <div class="col-xl-10 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID Anggota</th>
                            <td><?= $anggota->id_anggota ?></td>
                        </tr>
                        <tr>
                            <th>Level Anggota</th>
                            <td><?php foreach ($Level as $l) {
                                    if ($l->id_level == $anggota->level_id) {
                                        echo $l->ket_level;
                                    }
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Anggota</th>
                            <td><?= $anggota->nama_anggota ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?= $anggota->alamat_anggota ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $anggota->email ?></td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td><?= $anggota->no_telpon_anggota ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php foreach ($Gender as $g) {
                                    if ($g->id_gender == $anggota->gender_id) {
                                        echo $g->jenis_kelamin;
                                    }
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Mendaftar</th>
                            <td><?= $anggota->date_created ?></td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td><?php foreach ($Prodi as $p) {
                                    if ($p->id_prodi == $anggota->prodi_id) {
                                        echo $p->nama_prodi;
                                    }
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>
                                <?= $anggota->password ?>
                            </td>
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
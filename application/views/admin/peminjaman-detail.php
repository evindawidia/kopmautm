<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Log Pembayaran</h1>
    </div>
    <div class="row">
        <div class="col-xl-10 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID Bayar</th>
                            <th>Tgl Pembayaran</th>
                            <th>Status Pembayaran</th>
                        </tr>
                        <?php foreach ($Log_Bayar as $l) {
                            if ($l->pengajuan_id == $peminjaman->id_pengajuan) { ?>
                                <tr>
                                    <td><?= $l->id_pembayaran ?></td>
                                    <td><?= $l->tanggal_bayar ?></td>
                                    <td><?= $l->GetStatusBayar() ?></td>
                                </tr>
                        <?php }
                        } ?>
                        <!-- ============================ -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
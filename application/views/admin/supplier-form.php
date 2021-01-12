<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Supplier</h1>
                        </div>
                        <form action="<?= base_url() ?>Admin/doaddsupplier" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Supplier</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Nama Supplier" name="nama_supplier" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Alamat supplier</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="alamat_supplier" type="text" class="form-control form-control-user" placeholder="Alamat supplier" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">No Telpon</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="No Telpon" name="no_telpon_supplier" required>
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
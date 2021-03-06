<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Edit Data Supplier</h1>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-3">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <form action="<?= base_url() . "Admin/doeditsupplier?id=" . $supplier->id_supplier ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">ID Supplier</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input readonly type="text" class="form-control form-control-user" value="<?= $supplier->id_supplier ?>" name="id_supplier">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Nama Supplier</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $supplier->nama_supplier ?>" name="nama_supplier">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Alamat supplier</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input name="alamat_supplier" type="text" class="form-control form-control-user" value="<?= $supplier->alamat_supplier ?>" placeholder="Alamat supplier">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">No Telpon</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="<?= $supplier->no_telpon_supplier ?>" placeholder="No Telpon" name="no_telpon_supplier">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0"><label style="margin-top: auto; margin-bottom: auto">Date Created</label></div>
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                    <input readonly type="date" class="form-control form-control-user" value="<?= $supplier->date_created ?>" placeholder="Date Created" name="date_created">
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
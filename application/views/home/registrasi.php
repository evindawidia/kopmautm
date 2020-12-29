<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Koperasi UTM</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>public/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>public/asset/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-3">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <?php echo form_open_multipart('Home/doregistrasi'); ?>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input required type="text" class="form-control form-control-user" name="nama_anggota" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input required type="text" class="form-control form-control-user" name="alamat_anggota" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <input required type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input required type="text" class="form-control form-control-user" name="no_telpon_anggota" placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <select type="text" class="form-control" name="gender_id" placeholder="Jenis Kelamin" required>
                                        <?php foreach ($Gender as $g) { ?>
                                            <option value="<?= $g->id_gender ?>"><?= $g->jenis_kelamin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <select type="text" class="form-control" name="prodi_id" placeholder="Prodi" required>
                                        <?php foreach ($Prodi as $p) { ?>
                                            <option value="<?= $p->id_prodi ?>"><?= $p->nama_prodi ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input required type="password" class="form-control form-control-user" name="password" placeholder="Enter Password">
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>public/asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>public/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>public/asset/js/sb-admin-2.min.js"></script>

</body>

</html>
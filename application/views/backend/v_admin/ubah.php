<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ubah Admin - SIKOPSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <?php
        $this->load->view('backend/v_header');
        ?>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Form Ubah Admin</h4>

                    <form class="form-horizontal" action="<?php echo site_url('admin/update/') . $data['id_admin']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nama_admin">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="Nama Lengkap" value="<?= $data['nama_admin'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="username_admin">Username</label>
                            <div class="col-sm-10">
                                <input type="text" id="username_admin" name="username_admin" class="form-control" placeholder="Username" value="<?= $data['username_admin']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="pswd_admin" autocomplete="off">
                                <small class="text-danger">Jika ingin mengubah data, Password Wajib diisi kembali*)</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="img_admin">Foto Admin</label>
                            <div class="col-sm-10">
                                <img src="<?php echo base_url('assets/img_admin/') . $data['img_admin']; ?>" alt="img_admin" width="160" height="150">
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="file" class="custom-file-input" id="img_admin" name="img_admin" accept="image/*">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <input type="hidden" name="img_admin1" value="<?= $data['img_admin']; ?>">
                        <input type="hidden" name="pswd_admin1" value="<?= $data['pswd_admin']; ?>">
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                <a href="<?php echo site_url('admin'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
                            </div>
                        </div>

                    </form>

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    2020 &copy; PRIMKOPPABRI USP 20 Slawi
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>

</body>

</html>
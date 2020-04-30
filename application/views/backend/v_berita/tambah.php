<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tambah Berita - SIKOPSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Koperasi" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/images/favicon.ico">

    <!-- Summernote css -->
    <link href="<?php echo base_url(); ?>assets/backend/libs/summernote/summernote-bs4.css" rel="stylesheet" />
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
                    <h4 class="header-title">Form Tambah Berita</h4>

                    <form class="form-horizontal" action="<?php echo site_url('berita/simpan'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="judul_berita">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judul Berita">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tgl_berita">Tanggal Berita</label>
                            <div class="col-sm-10">
                                <input type="date" id="tgl_berita" name="tgl_berita" class="form-control" placeholder="Tanggal Berita">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="isi_berita">Isi Berita</label>
                            <div class="col-sm-10">
                                <textarea name="isi_berita" id="summernote-editor" placeholder="Isi Berita" class="form-control"></textarea>
                            </div>
                        </div>
                        <style>
                            .kiri {
                                margin-left: 12px !important;
                                margin-right: 12px !important;

                            }
                        </style>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="img_berita">Foto Berita</label>
                            <div class="col-sm-10">
                                <input type="file" class="custom-file-input" id="img_berita" name="img_berita" accept="image/*">
                                <label class="custom-file-label kiri" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                <a href="<?php echo site_url('berita'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
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
                    2018 - 2019 &copy; Greeva theme by <a href="">Coderthemes</a>
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

    <!--Summernote js-->
    <script src="<?php echo base_url(); ?>assets/backend/libs/summernote/summernote-bs4.min.js"></script>

    <!-- Init js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/pages/form-summernote.init.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>


    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>

</html>
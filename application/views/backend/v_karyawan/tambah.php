<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tambah Karyawan - SIKOPSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Koperasi" name="description" />
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
                    <h4 class="header-title">Form Tambah Karyawan</h4>

                    <form class="form-horizontal" action="<?php echo site_url('karyawan/simpan'); ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nama_karyawan">Nama Karyawan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Nama Lengkap Karyawan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="alamat">Alamat Karyawan</label>
                            <div class="col-sm-10">
                                <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat Karyawan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="masa_kerja">Masa Kerja</label>
                            <div class="col-sm-10">
                                <input type="number" id="masa_kerja" name="masa_kerja" class="form-control" placeholder="Masa Kerja">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="jabatan">Jabatan Karyawan</label>
                            <div class="col-sm-10">
                                <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan Karyawan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="diangkat">Diangkat</label>
                            <div class="col-sm-10">
                                <input type="date" id="diangkat" name="diangkat" class="form-control" placeholder="Diangkat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="golongan">Golongan</label>
                            <div class="col-sm-10">
                                <input type="textarea" id="golongan" name="golongan" class="form-control" placeholder="Golongan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="kd_resort">Nama Resort</label>
                            <div class="col-sm-10">
                                <select name="kd_resort" class="custom-select">
                                    <option value="-">-- Pilih Resort --</option>
                                    <?php
                                    foreach ($resort as $row) {
                                    ?>
                                        <option value="<?= $row['kd_resort']; ?>"><?= $row['nama_resort']; ?></option>
                                    <?php } ?>
                                    <option value="-">Tidak ada Resort</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                <a href="<?php echo site_url('karyawan'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
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

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>

</body>

</html>
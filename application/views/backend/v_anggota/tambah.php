<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tambah Anggota - SIKOPSI</title>
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
                    <h4 class="header-title">Form Tambah Anggota</h4>

                    <form class="form-horizontal" action="<?php echo site_url('anggota/simpan'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nama_anggota">Nama Lengkap <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nohp_anggota">No HP <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <input type="number" min="0" id="nohp_anggota" name="nohp_anggota" class="form-control" placeholder="No HP" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Resort <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <select name="kd_resort" class="custom-select" required>
                                    <option value="-">-- Pilih Resort --</option>
                                    <?php
                                    foreach ($resort as $row) {
                                    ?>
                                        <option value="<?= $row['kd_resort']; ?>"><?= $row['nama_resort']; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Hari <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <select name="id_hari" class="custom-select" required>
                                    <option value="-">-- Pilih Hari --</option>
                                    <option value="1">Senin</option>
                                    <option value="2">Selasa</option>
                                    <option value="3">Rabu</option>
                                    <option value="4">Kamis</option>
                                    <option value="5">Jum'at</option>
                                    <option value="6">Sabtu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="alamat_anggota">Alamat <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <textarea id="alamat_anggota" name="alamat_anggota" class="form-control" placeholder="Alamat" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="rt_anggota"></label>
                            <div class="col-sm-1">
                                <input type="text" id="rt_anggota" name="rt_anggota" class="form-control" placeholder="RT" required>
                            </div>
                            <div class="col-sm-1">
                                <input type="text" id="rw_anggota" name="rw_anggota" class="form-control" placeholder="RW" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="desa_anggota" name="desa_anggota" class="form-control" placeholder="Desa" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="kec_anggota" name="kec_anggota" class="form-control" placeholder="Kecamatan" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="kab_anggota" name="kab_anggota" class="form-control" placeholder="Kabupaten" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="prov_anggota" name="prov_anggota" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="usaha_anggota">Usaha Anggota <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <div class="radio radio-success mb-2">
                                    <input type="radio" id="radio1" value="Petani" name="usaha_anggota">
                                    <label for="radio1">
                                        Petani
                                    </label>
                                </div>
                                <div class="radio radio-success mb-2">
                                    <input type="radio" id="radio2" value="Dagang" name="usaha_anggota">
                                    <label for="radio2">
                                        Dagang
                                    </label>
                                </div>
                                <div class="radio radio-success mb-2">
                                    <input type="radio" id="radio3" name="usaha_anggota" onclick="changeradioother()">
                                    <label for="radio2">
                                        <input id="inputother" type="text" onchange="changeradioother()">
                                    </label>

                                    <!-- <input type="radio" id="radio3" value="Lainnya" name="usaha_anggota"> -->
                                    <!-- <label for="radio3">
                                        Lainnya
                                    </label> -->
                                    <script>
                                        function changeradioother() {
                                            var other = document.getElementById("inputother");
                                            document.getElementById("radio3").value = other.value;
                                        }
                                    </script>
                                </div>
                                <!-- <input type="text" id="usaha_anggota" name="usaha_anggota" class="form-control" placeholder="Usaha"> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tanda_pengenal">Scan Tanda Pengenal (KTP/SIM) <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                                <input type="file" class="custom-file-input" id="tanda_pengenal" name="tanda_pengenal" accept="image/*, application/pdf" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                        <small class="text-danger">*)Data Wajib Diisi Semua</small>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                <a href="<?php echo site_url('anggota'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ubah Anggota - SIKOPSI</title>
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
                    <h4 class="header-title">Form Ubah Anggota</h4>

                    <form class="form-horizontal" action="<?php echo site_url('anggota/update/') . $data['id_anggota']; ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nama_anggota">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Lengkap" value="<?= $data['nama_anggota']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nohp_anggota">No HP</label>
                            <div class="col-sm-10">
                                <input type="number" id="nohp_anggota" name="nohp_anggota" class="form-control" placeholder="No HP" value="<?= $data['nohp_anggota']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Resort</label>
                            <div class="col-sm-10">
                                <select name="kd_resort" class="custom-select" id="kd_resort">
                                    <option value="-">-- Pilih Resort --</option>
                                    <option value="B">BUGENVIL</option>
                                    <option value="C">CEMPAKA</option>
                                    <option value="D">DAHLIA</option>
                                    <option value="E">ESTER</option>
                                    <option value="F">FLAMBOYAN</option>
                                    <option value="G">GADING</option>
                                    <option value="H">HARUM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Hari</label>
                            <div class="col-sm-10">
                                <select name="id_hari" class="custom-select" id="id_hari">
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
                            <label class="col-sm-2 col-form-label" for="alamat_anggota">Alamat</label>
                            <div class="col-sm-10">
                                <textarea id="alamat_anggota" name="alamat_anggota" class="form-control" placeholder="Alamat"><?= $data['alamat_anggota']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="rt_anggota"></label>
                            <div class="col-sm-1">
                                <input type="text" id="rt_anggota" name="rt_anggota" class="form-control" placeholder="RT" value="<?= $data['rt_anggota']; ?>">
                            </div>
                            <div class="col-sm-1">
                                <input type="text" id="rw_anggota" name="rw_anggota" class="form-control" placeholder="RW" value="<?= $data['rw_anggota']; ?>">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="desa_anggota" name="desa_anggota" class="form-control" placeholder="Desa" value="<?= $data['desa_anggota']; ?>">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="kec_anggota" name="kec_anggota" class="form-control" placeholder="Kecamatan" value="<?= $data['kec_anggota']; ?>">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="kab_anggota" name="kab_anggota" class="form-control" placeholder="Kabupaten" value="<?= $data['kab_anggota']; ?>">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="prov_anggota" name="prov_anggota" class="form-control" placeholder="Provinsi" value="<?= $data['prov_anggota']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="usaha_anggota">Usaha Anggota</label>
                            <div class="col-sm-10">
                                <input type="text" id="usaha_anggota" name="usaha_anggota" class="form-control" placeholder="Usaha" value="<?= $data['usaha_anggota']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                <a href="<?php echo site_url('anggota'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
                            </div>
                        </div>
                        <input type="hidden" id="resort" value="<?= $data['kd_resort']; ?>">
                        <input type="hidden" id="hari" value="<?= $data['id_hari']; ?>">
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
        var resort = document.getElementById("resort").value;
        var hari = document.getElementById("hari").value;

        $('#kd_resort').val(resort).find("option[value=" + resort + "]").attr('selected', true);

        $('#id_hari').val(hari).find("option[value=" + hari + "]").attr('selected', true);
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tambah Peminjaman - SIKOPSI</title>
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

    <link href="<?php echo base_url(); ?>assets/backend/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/backend/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/backend/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" />


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
                    <h4 class="header-title">Form Tambah Peminjaman</h4>

                    <form class="form-horizontal" action="<?php echo site_url('peminjaman/simpan'); ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="no_peminjaman">No Peminjaman</label>
                            <div class="col-sm-10">
                                <input type="text" id="no_peminjaman" name="no_peminjaman" class="form-control" placeholder="No Peminjaman" value="<?= $no; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="nama_anggota">Nama Peminjam</label>
                            <div class="col-sm-10">
                                <select name="id_anggota" id="id_anggota" class="form-control" data-toggle="select2">
                                    <option value="-">-- Pilih Anggota --</option>
                                    <?php
                                    foreach ($anggota as $row) {
                                    ?>
                                        <option value="<?= $row['id_anggota']; ?>"><?= $row['id_anggota']; ?> - <?= $row['nama_anggota']; ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tgl_drop">Tanggal Drop</label>
                            <div class="col-sm-10">
                                <input type="date" id="tgl_drop" name="tgl_drop" class="form-control" placeholder="Tanggal Drop" value="<?= date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pinjaman Pokok</label>
                            <div class="col-sm-10">
                                <input type="text" id="pinjaman_pokok" name="pinjaman_pokok" class="form-control nominal" placeholder="Pinjaman Pokok" onchange="hitung()">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jasa Peminjaman</label>
                            <div class="col-sm-10">
                                <input type="text" id="jasa_peminjaman" name="jasa_peminjaman" class="form-control nominal" placeholder="Jasa Peminjaman" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jasa Pelayanan</label>
                            <div class="col-sm-10">
                                <input type="text" id="jasa_pelayanan" name="jasa_pelayanan" class="form-control nominal" placeholder="Jasa Pelayanan" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Resiko Kredit</label>
                            <div class="col-sm-10">
                                <input type="text" id="resiko_kredit" name="resiko_kredit" class="form-control nominal" placeholder="Resiko Kredit" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Pinjaman</label>
                            <div class="col-sm-10">
                                <input type="text" id="total_pinjaman" name="total_pinjaman" class="form-control" placeholder="Total Pinjaman" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Angsuran</label>
                            <div class="col-sm-10">
                                <input type="number" id="angsuran" name="angsuran" class="form-control" placeholder="Angsuran" value="10" readonly>
                            </div>
                        </div>
                        <input type="hidden" name="resort" id="resort">
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                <a href="<?php echo site_url('peminjaman'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
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
                    2020 &copy; PRIMKOPPABRI USP 20 Slawi </div>
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

    <!-- select2 js -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/select2/select2.min.js"></script>

    <!-- Mask input -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/jquery-mask-plugin/jquery.mask.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <script>
        $('[data-toggle="select2"]').select2();

        $('.nominal').mask("#.##0", {
            reverse: true
        });
    </script>

    <script>
        function hitung() {
            var x = document.getElementById("pinjaman_pokok").value;
            x = x.split('.').join('')
            var jasa_peminjaman = document.getElementById("jasa_peminjaman").value = x * 9 / 100;
            var jasa_pelayanan = document.getElementById("jasa_pelayanan").value = x * 9 / 100;
            var resiko_kredit = document.getElementById("resiko_kredit").value = x * 2 / 100;

            document.getElementById("total_pinjaman").value = parseInt(x) + parseInt(jasa_peminjaman) + parseInt(jasa_pelayanan) + parseInt(resiko_kredit);

        }
    </script>

</body>

</html>
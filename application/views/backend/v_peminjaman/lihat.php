<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Angsuran Pinjaman - SIKOPSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/images/favicon.ico">

    <!-- third party css -->
    <link href="<?php echo base_url(); ?>assets/backend/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="<?php echo base_url(); ?>assets/backend/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                    <h4>Nama Peminjam : <?= $data['nama_anggota']; ?></h4>
                    <h4>Detail Peminjaman</h4>
                    <div class="row font-weight-bold">
                        <div class="col-4">
                            Total Peminjaman : <br> Rp. <?= number_format($data['total_pinjaman'], 0, '.', '.') ?><br>
                        </div>
                        <div class="col-8">
                            Sisa Angsuran : <br>
                            Bulan : <?= $data['angsuran'] - $angsuran_ke; ?><br>
                            Nominal : Rp. <?= number_format($data['total_pinjaman'] - $sisa_angsuran['nominal_angsuran'], 0, '.', '.') ?>
                        </div>
                    </div>

                    <p></p>
                    <h4>Tambah Angsuran</h4>
                    <form action="<?php echo site_url('peminjaman/simpan_angsuran?id=') . $this->input->get('id'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label for="">Nominal Angsuran</label> <br>
                                <input type="number" name="nominal_angsuran" class="form-control nominal" value="<?= $data['total_pinjaman'] / 10 ?>">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="">Angsuran Ke</label> <br>
                                <input type="number" name="angsuran_ke" class="form-control" value="<?= $angsuran_ke + 1 ?>">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="">Tanggal Angsuran </label><br>
                                <input type="date" name="tgl_angsuran" class="form-control">
                            </div>
                            <div class="col-md-2 form-group">
                                <br>
                                <?php
                                if ($angsuran_ke == '10') {

                                ?>
                                    <a href="javascript:;" onclick="alert2()" class="btn btn-primary" class="form-control">Simpan</a>
                                <?php } else {
                                ?>
                                    <button type="submit" class="btn btn-primary" class="form-control">Simpan</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                    <p></p>
                    <h4 class="header-title">Data Angsuran</h4>

                    <div class="dropdown-divider"></div>
                    <table id="datatable" class="table table-bordered nowrap table-responsive-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Angsuran</th>
                                <th>Angsuran Ke</th>
                                <th>Nominal Angsuran</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody class="text-center">
                            <?php
                            $no = 1;
                            foreach ($angsuran as $row) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['tgl_angsuran']; ?></td>
                                    <td><?= $row['angsuran_ke']; ?></td>
                                    <td><?= 'Rp. ' . number_format($row['nominal_angsuran'], 0, '.', '.'); ?></td>
                                    <td><a href="javascript:void(0);" onclick="alert('<?= $row['id_angsuran'] ?>','<?= $this->input->get('id'); ?>')"><i class="mdi mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->

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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/vendor.min.js"></script>

    <!-- datatable js -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/libs/datatables/responsive.bootstrap4.min.js"></script>
    <!-- Mask input -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/jquery-mask-plugin/jquery.mask.min.js"></script>

    <!-- Datatables init -->
    <script>
        $(document).ready(function() {
            $("#datatable").DataTable({
                keys: !0
            });

            $('.nominal').mask('0.000.000.000', {
                reverse: true
            });
        });
    </script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/sweetalert2/sweetalert2.min.js"></script>

    <script>
        function alert(id, r) {
            var base_url = window.location.href;
            var base_url = (base_url.split("/"));
            console.log('<?= site_url('peminjaman/hapus_s') ?>');
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Anda akan menghapus data angsuran ini ?",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#31ce77",
                cancelButtonColor: "#f34943",
                confirmButtonText: "Ya, hapus ini!"
            }).then(function(t) {
                if (t.value) {
                    window.location.replace('<?= site_url('peminjaman/hapus_angsuran/') ?>' + id + '?r=' + r)
                } else {
                    t.dismiss === Swal.DismissReason.cancel
                }
            })
        }

        function alert2() {
            Swal.fire({
                title: "Error!!",
                text: "Angsuran Sudah Lunas",
                type: "danger"
            })
        }
    </script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>
</body>

</html>
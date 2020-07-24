<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Karyawan - SIKOPSI</title>
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
                    <h4>Filter</h4>
                    <form method="GET">
                        <div class="row">

                            <div class="col-md-3">
                                <select class="custom-select" name="resort" id="resort">
                                    <option value="0">Semua Resort</option>
                                    <option value="B">BUGENVIL</option>
                                    <option value="C">CEMPAKA</option>
                                    <option value="D">DAHLIA</option>
                                    <option value="E">ESTER</option>
                                    <option value="F">FLAMBOYAN</option>
                                    <option value="G">GADING</option>
                                    <option value="H">HARUM</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo site_url('karyawan/tambah'); ?>"><button class="btn btn-primary">Tambah</button></a>

                    <p></p>
                    <h4 class="header-title">Data Karyawan</h4>

                    <?= $this->session->flashdata('message'); ?>
                    <div class="dropdown-divider"></div>
                    <table id="datatable" class="table table-bordered nowrap table-responsive-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Golongan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $no = 1;
                            foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama_karyawan']; ?></td>
                                    <td><?= $row['jabatan']; ?></td>
                                    <td><?= $row['golongan']; ?></td>
                                    <td><a href="<?php echo site_url('karyawan/ubah/') . $row['id_karyawan']; ?>"><i class="mdi mdi-account-edit"></i></a> | <a href="javascript:void(0);" onclick="alert('<?= $row['id_karyawan'] ?>', '<?= $row['nama_karyawan'] ?>')"><i class="mdi mdi mdi-delete"></i></a>
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
    <!-- Datatables init -->
    <script>
        $(document).ready(function() {
            $("#datatable").DataTable({
                keys: !0
            });
        });
    </script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/sweetalert2/sweetalert2.min.js"></script>

    <script>
        function alert(id, name) {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Anda akan menghapus data karyawan " + name,
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#31ce77",
                cancelButtonColor: "#f34943",
                confirmButtonText: "Ya, hapus ini!"
            }).then(function(t) {
                if (t.value) {
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data karyawan " + name + " telah terhapus",
                        type: "success"
                    }).then(function() {
                        window.location.replace('<?= site_url('karyawan') ?>' + '/hapus/' + id)
                    });
                } else {
                    t.dismiss === Swal.DismissReason.cancel
                }
            })
        }
    </script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>
    <script>
        $(function() {
            var url_string = window.location;
            var url = new URL(url_string);
            resort = url.searchParams.get("resort");
            $('#resort option[value=' + resort + ']').attr('selected', true);
        });
    </script>
</body>

</html>
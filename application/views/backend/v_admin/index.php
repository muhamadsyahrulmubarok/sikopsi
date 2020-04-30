<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin - SIKOPSI</title>
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
                    <a href="<?php echo site_url('admin/tambah'); ?>"><button class="btn btn-primary">Tambah</button></a>

                    <p></p>
                    <h4 class="header-title">Data Admin</h4>
                    <?= $this->session->flashdata('message');; ?>
                    <div class="dropdown-divider"></div>
                    <table id="datatable" class="table table-bordered nowrap table-responsive-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama_admin']; ?></td>
                                    <td><?= $row['username_admin']; ?></td>
                                    <td class="text-center"><a href="<?php echo site_url('admin/ubah/') . $row['id_admin']; ?>"><i class="mdi mdi-account-edit"></i></a> | <a href="javascript:void(0);" onclick="alert('<?= $row['id_admin'] ?>', '<?= $row['nama_admin'] ?>')"><i class="mdi mdi mdi-delete"></i></a>

                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/vendor.min.js"></script>

    <!-- App js -->

    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>

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

    <script src="<?php echo base_url(); ?>assets/backend/libs/sweetalert2/sweetalert2.min.js"></script>

    <script>
        function alert(id, name) {
            var base_url = window.location.href;
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Anda akan menghapus data admin " + name,
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#31ce77",
                cancelButtonColor: "#f34943",
                confirmButtonText: "Ya, hapus ini!"
            }).then(function(t) {
                if (t.value) {
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data admin " + name + " telah terhapus",
                        type: "success"
                    }).then(function() {
                        window.location.replace(base_url + '/hapus/' + id)
                    });
                } else {
                    t.dismiss === Swal.DismissReason.cancel
                }
            })
        }
    </script>

    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tabungan - SIKOPSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/images/favicon.ico">

    <!-- third party css -->
    <link href="<?php echo base_url(); ?>assets/backend/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                                <select class="custom-select" name="hari" id="hari">
                                    <option value="0">Semua Hari</option>
                                    <option value="1">Senin</option>
                                    <option value="2">Selasa</option>
                                    <option value="3">Rabu</option>
                                    <option value="4">Kamis</option>
                                    <option value="5">Jum'at</option>
                                    <option value="6">Sabtu</option>
                                </select>
                            </div>
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
                    <h4 class="header-title">Data Tabungan</h4>

                    <div class="dropdown-divider"></div>
                    <table id="datatable" class="table table-bordered nowrap table-responsive-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Anggota</th>
                                <th>Nama Anggota</th>
                                <th>Total Tabungan</th>
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
                                    <td><?= $row['id_anggota']; ?></td>
                                    <td><?= $row['nama_anggota']; ?></td>
                                    <td><?= 'Rp. ' . number_format($row['tabungan'], 0, '.', '.'); ?></td>
                                    <td><a href="#"><i class="mdi mdi-information-variant"></i></a>
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

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/backend/js/script.js"></script>
    <script>
        $(function() {
            var url_string = window.location;
            var url = new URL(url_string);
            hari = url.searchParams.get("hari");
            resort = url.searchParams.get("resort");

            $('#hari option[value=' + hari + ']').attr('selected', true);
            $('#resort option[value=' + resort + ']').attr('selected', true);
        });
    </script>
</body>

</html>
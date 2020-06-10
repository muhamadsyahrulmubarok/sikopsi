<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Laporan - SIKOPSI</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

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
                                <select class="custom-select" name="bulan" id="bulan">
                                    <option value="0">Semua Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="custom-select" name="tahun" id="tahun">
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>

                    <br>
                    <div class="dropdown-divider"></div>
                    <h4 class="header-title">Data Peminjaman</h4>

                    <div class="dropdown-divider"></div>
                    <table id="datatable" class="table table-bordered nowrap table-responsive-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Resort</th>
                                <th>ID Anggota</th>
                                <th>No Peminjaman</th>
                                <th>Nama Anggota</th>
                                <th>Total Pinjam</th>
                            </tr>
                        </thead>


                        <tbody class="text-center">
                            <?php
                            $no = 1;
                            foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama_resort']; ?></td>
                                    <td><?= $row['id_anggota']; ?></td>
                                    <td><?= $row['no_peminjaman']; ?></td>
                                    <td><?= $row['nama_anggota']; ?></td>
                                    <td><?= $row['total_pinjaman']; ?></td>
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
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- Datatables init -->
    <script>
        $(document).ready(function() {
            $("#datatable").DataTable({
                keys: !0,
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                ]
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
            bulan = url.searchParams.get("bulan");
            tahun = url.searchParams.get("tahun");

            $('#bulan option[value=' + bulan + ']').attr('selected', true);
            $('#tahun option[value=' + tahun + ']').attr('selected', true);
        });
    </script>
</body>

</html>
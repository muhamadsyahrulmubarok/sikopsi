<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard - SIKOPSI</title>
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
            <div class="col-xl-4">
                <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                    <div class="float-left" dir="ltr">
                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                    </div>
                    <div class="widget-chart-one-content text-right">
                        <p class="text-white mb-0 mt-2">Statistics</p>
                        <h3 class="text-white">$714</h3>
                    </div>
                </div> <!-- end card-box-->

            </div> <!-- end col -->
            <div class="col-xl-4">
                <div class="card-box widget-chart-one gradient-primary bx-shadow-lg">
                    <div class="float-left" dir="ltr">
                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                    </div>
                    <div class="widget-chart-one-content text-right">
                        <p class="text-white mb-0 mt-2">Statistics</p>
                        <h3 class="text-white">$714</h3>
                    </div>
                </div> <!-- end card-box-->

            </div> <!-- end col -->
            <div class="col-xl-4">
                <div class="card-box widget-chart-one gradient-warning bx-shadow-lg">
                    <div class="float-left" dir="ltr">
                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                    </div>
                    <div class="widget-chart-one-content text-right">
                        <p class="text-white mb-0 mt-2">Statistics</p>
                        <h3 class="text-white">$714</h3>
                    </div>
                </div> <!-- end card-box-->

            </div> <!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container -->

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

    <!-- KNOB JS -->
    <script src="<?php echo base_url(); ?>assets/backend/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Dashboard Init JS -->
    <script src="<?php echo base_url(); ?>assets/backend/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

</body>

</html>
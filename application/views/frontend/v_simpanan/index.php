<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cek Simpanan</title>
    <meta name="keywords" content="PRIMKOPPABRI" />
    <meta name="description" content="PRIMKOPPABRI">
    <meta name="author" content="PRIMKOPPABRI">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/bootstrap/bootstrap.min.css">

    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <!-- Template's stylesheets -->
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>js/megamenu/stylesheets/screen.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>css/theme-default.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>js/loaders/stylesheets/screen.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>css/shortcodes.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>fonts/et-line-font/et-line-font.css">

    <!-- Template's stylesheets END -->


    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Style Customizer's stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/style-customizer/css/spectrum.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/style-customizer/css/style-customizer.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>less/skin.less">
    <!-- Style Customizer's stylesheets END -->

    <!-- Skin stylesheet -->

</head>

<body>
    <div class="over-loader loader-live">
        <div class="loader">
            <div class="loader-item style4">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
    </div>
    <!--end loading-->



    <div class="wrapper-boxed">
        <div class="site-wrapper">
            <div class="col-md-12 nopadding">
                <div class="header-section white dark-dropdowns style1 links-dark pin-style">
                    <div class="container">
                        <div class="mod-menu">
                            <div class="row">
                                <div class="col-sm-2"> <a href="<?php echo site_url('home'); ?>" title="" class="logo style-2"> <img src="<?php echo site_url('assets/frontend/'); ?>images/logo/logo.jpeg" alt="Logo" width="80"> </a> </div>
                                <div class="col-sm-10">
                                    <div class="main-nav">
                                        <ul class="nav navbar-nav top-nav">

                                            <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                                        </ul>
                                        <div id="menu" class="collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="right active"> <a href="<?php echo site_url('home'); ?>">Home</a>
                                                </li>
                                                <li> <a href="<?php echo site_url('halberita'); ?>">Berita</a>

                                                </li>
                                                <li> <a href="#">Profile</a> <span class="arrow"></span>
                                                    <ul class="dm-align-2">
                                                        <li> <a href="<?php echo site_url('profil/sejarah'); ?>">Sejarah</a> </li>
                                                        <li> <a href="<?php echo site_url('profil/visi_misi'); ?>">Visi Misi</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu"> <a href="<?php echo site_url('angsuran'); ?>">Angsuran</a>
                                                </li>
                                                <li class="mega-menu"> <a href="<?php echo site_url('simpanan/cek'); ?>">Simpanan</a>
                                                <li class="mega-menu five-col"> <a href="<?php echo site_url('kontak'); ?>">Kontak</a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end menu-->

            </div>
            <!--end menu-->
            <div class="clearfix"></div>
            <section class="sec-padding section-dark">
                <div class="pagenation-holder">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="uppercase text-light">Cek Simpanan</h4>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                    <li class="current"><a href="#">Simpanan</a></li>
                                    <!-- <li class="current"><a href="#">Blog 3 Column</a></li> -->
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!--end section-->
            <div class="form-body bg-white">
                <div class="">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-12 text-center">
                                <h4 class="uppercase">Form Cek Simpanan</h4>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-body bg-light">
                                <form method="get">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="lable-text" for="id"> ID Anggota</label>
                                            <input id="id" class="input-1" type="text" placeholder="Masukan ID Anggota" name="id" value="<?= $this->input->get('id'); ?>" required>
                                            <small class="text-danger">*</small>
                                        </div>
                                    </div>
                                    <small class="text-danger">*)Wajib dimasukan</small>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary btn-fullwidth uppercase" type="submit"><i class="fa fa-paper-plane"></i> Cek Data</button>
                                        </div>
                                    </div>
                                    </br>
                                </form>
                                <!-- end row -->
                                <?php
                                if ($this->input->get('id')) {
                                ?>
                                    <div class="pricing-table-2">

                                        <div class="inner-box table-responsive">
                                            <div class="text-center">
                                                <h4>Informasi Simpanan</h4>
                                            </div>
                                            No Anggota : <?= $simpanan['id_anggota']; ?><br>
                                            Nama : <?= $simpanan['nama_anggota']; ?><br>
                                            <!-- Total Simpanan : <?= 'Rp. ' . number_format($simpanan['simpanan'], 0, '.', '.'); ?><br> -->
                                            <style>
                                                .table-bordered {
                                                    border: 1px solid #000 !important;
                                                }

                                                .table-bordered thead th {
                                                    border: 1px solid #000 !important;
                                                }

                                                .table-bordered tbody td {
                                                    border: 1px solid #000 !important;
                                                }

                                                .table-bordered tfoot th {
                                                    border: 1px solid #000 !important;
                                                }
                                            </style>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>Tgl. Drop</th>
                                                    <th>No. Pinjaman</th>
                                                    <th>Jumlah Rp.</th>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row['tgl_drop_simpanan']; ?></td>
                                                            <td><?= $row['no_peminjaman']; ?></td>
                                                            <td><?= 'Rp. ' . number_format($row['simpanan'], 0, ',', '.'); ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <th colspan="2">Jumlah</th>
                                                    <th>
                                                        <?php
                                                        $total = 0;
                                                        foreach ($data as $row) {
                                                            $jumlah = $row['simpanan'];
                                                            $total = $jumlah + $total;
                                                        }
                                                        echo 'Rp. ' . number_format($total, 0, ',', '.');
                                                        ?>
                                                    </th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                            <!--end form body-->
                        </div>
                        <!--end item-->
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- end section -->

            <div class="sec-padding section-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 clearfix margin-bottom">
                            <div class="footer-logo">
                                <h2 class="text-white"><strong>KSP PRIMKOPPABRI SLAWI</strong></h2>
                            </div>
                            <div class="clearfix"></div>
                            <address class="text-light">
                                <strong class="text-white">Alamat:</strong> <br>
                                Jl. Merak No. 13 RT 04 RW 03 Kel. Slawi Kulon - Kec. Slawi <br>
                                Tegal, Jawa Tengah
                            </address>
                            <span class="text-light"><strong>No. Telp Aduan:</strong> +62 823-2639-5985</span><br>
                            <span class="text-light"><strong>Email:</strong> admin@primkoppabri.com </span><br>
                            <ul class="footer-social-icons white left-align icons-plain text-center">
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!--end item-->


                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- end section -->

            <section class="sec-padding-6 section-medium-dark">
                <div class="container">
                    <div class="row">
                        <div class="fo-copyright-holder text-center"> Copyright © 2020 PRIMKOPPABRI | All rights reserved. </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!-- end section -->

            <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

        </div>
    </div>
</body>

<!-- Scripts -->
<script src="<?php echo site_url('assets/frontend/'); ?>js/jquery/jquery.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/bootstrap/bootstrap.min.js"></script>

<script src="<?php echo site_url('assets/frontend/'); ?>js/less/less.min.js" data-env="development"></script>

<!-- Scripts END -->

<!-- Template scripts -->
<script src="<?php echo site_url('assets/frontend/'); ?>js/megamenu/js/main.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/jFlickrFeed/jflickrfeed.min.js"></script>
<script>
    $('#basicuse').jflickrfeed({
        limit: 6,
        qstrings: {
            id: '133294431@N08'
        },
        itemTemplate: '<li>' +
            '<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
            '</li>'
    });
</script>

<script>
    $(window).load(function() {
        setTimeout(function() {

            $('.loader-live').fadeOut();
        }, 1000);
    })
</script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/functions/functions.js"></script>

</html>
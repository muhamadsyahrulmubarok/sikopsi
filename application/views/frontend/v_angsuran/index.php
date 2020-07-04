<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cek Angsuran</title>
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
                                <div class="col-sm-2"> <a href="index.html" title="" class="logo style-2 mar-4"> <img src="<?php echo site_url('assets/frontend/'); ?>images/logo/logo-dark.png" alt=""> </a> </div>
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
                                                <li> <a href="page-about4.html">Profile</a> <span class="arrow"></span>
                                                    <ul class="dm-align-2">
                                                        <li> <a href="#">Sejarah</a> </li>
                                                        <li> <a href="#">Visi Misi</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu"> <a href="<?php echo site_url('angsuran'); ?>">Angsuran</a>
                                                </li>
                                                <li class="mega-menu five-col"> <a href="#">Kontak</a>

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
                                <h4 class="uppercase text-light">Cek Angsuran</h4>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                    <li class="current"><a href="#">Angsuran</a></li>
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
                                <h4 class="uppercase">Form Cek Angsuran</h4>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-body bg-light">
                                <form method="get">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="lable-text" for="id_anggota"> ID Anggota</label>
                                            <input id="id_anggota" class="input-1" type="text" placeholder="Masukan ID Anggota" name="id_anggota" value="<?= $this->input->get('id_anggota'); ?>">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12 col-12">
                                            <label class="lable-text" for="no"> Nomor Peminjaman</label>
                                            <input id="no" class="input-1" type="text" placeholder="Masukan Nomor Peminjaman" name="no" value="<?= $this->input->get('no'); ?>">
                                        </div>

                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary btn-fullwidth uppercase" type="submit"><i class="fa fa-paper-plane"></i> Cek Data</button>
                                        </div>
                                    </div>
                                    </br>
                                </form>
                                <!-- end row -->
                                <?php
                                if ($this->input->get('no')) {
                                ?>
                                    <div class="pricing-table-2">

                                        <div class="inner-box table-responsive">
                                            <div class="text-center">
                                                <h4>Informasi Pinjaman</h4>
                                            </div>
                                            No Anggota : <?= $data['id_anggota']; ?><br>
                                            Nama : <?= $data['nama_anggota']; ?><br>
                                            Jumlah Pinjaman : <?= $data['total_pinjaman']; ?><br>
                                            <table class="table table-bordered text-center">
                                                <tr>
                                                    <th colspan="2">Daftar Angsuran</th>
                                                </tr>
                                                <tr>
                                                    <th>Angsuran Ke-</th>
                                                    <th>Nominal Angsuran</th>
                                                </tr>
                                                <?php
                                                foreach ($angsuran as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?= $row['angsuran_ke']; ?></td>
                                                        <td>Rp. <?= $row['nominal_angsuran']; ?></td>
                                                    </tr>
                                                <?php } ?>
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

            <div class="section-dark sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 colmargin clearfix margin-bottom">
                            <div class="fo-map">
                                <div class="footer-logo"><img src="images/logo/logo.png" alt="" /></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo
                                </p>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-3 col-xs-12 clearfix margin-bottom">
                            <h4 class="text-white less-mar3 font-weight-5">About Us</h4>
                            <div class="clearfix"></div>
                            <br />
                            <ul class="footer-quick-links-4 white">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                            </ul>
                        </div>
                        <!--end item-->

                        <div class="col-md-3 col-xs-12 clearfix margin-bottom">
                            <h4 class="text-white less-mar3 font-weight-5">Quick Links</h4>
                            <div class="clearfix"></div>
                            <br />
                            <ul class="footer-quick-links-4 white">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                            </ul>
                        </div>
                        <!--end item-->

                        <div class="col-md-3 col-xs-12 clearfix margin-bottom">
                            <h4 class="text-white less-mar3 font-weight-5">Contact Us</h4>
                            <div class="clearfix"></div>
                            <br />
                            <address class="text-light">
                                <strong class="text-white">Address:</strong> <br>
                                No.28 - 63739 street lorem ipsum, <br>
                                ipsum City, Country
                            </address>
                            <span class="text-light"><strong>Phone:</strong> + 1 (234) 567 8901</span><br>
                            <span class="text-light"><strong>Email:</strong> email@example.com </span><br>
                            <span class="text-light"><strong>Fax:</strong> + 1 (234) 567 8901</span>
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
                        <div class="fo-copyright-holder text-center"> Copyright © 2019 Codelayers | All rights reserved. </div>
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
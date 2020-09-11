<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIKOPSI </title>
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
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>css/corporate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>fonts/et-line-font/et-line-font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/css/navigation.css">
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>js/parallax/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/frontend/'); ?>js/cubeportfolio/cubeportfolio.min.css">
    <link href="<?php echo site_url('assets/frontend/'); ?>js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/frontend/'); ?>js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/frontend/'); ?>js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>js/jFlickrFeed/style.css" />
    <link rel="stylesheet" href="<?php echo site_url('assets/frontend/'); ?>fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
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
                                <div class="col-sm-2 mb-2"> <a href="<?php echo site_url('home'); ?>" title="" class="logo style-2"> <img src="<?php echo site_url('assets/frontend/'); ?>images/logo/logo.jpeg" alt="Logo" width="80"> </a> </div>
                                <div class="col-sm-10">
                                    <div class="main-nav">
                                        <ul class="nav navbar-nav top-nav">

                                            <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                                        </ul>
                                        <div id="menu" class="collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="right <?php if ($this->uri->segment('1') == 'home') {
                                                                        echo 'active';
                                                                    } ?>"> <a href="<?php echo site_url('home'); ?>">Home</a>
                                                </li>
                                                <li class="right <?php if ($this->uri->segment('1') == 'halberita') {
                                                                        echo 'active';
                                                                    } ?>"> <a href="<?php echo site_url('halberita'); ?>">Berita</a>

                                                </li>
                                                <li class="right <?php if ($this->uri->segment('1') == 'profil') {
                                                                        echo 'active';
                                                                    } ?>"> <a href="#">Profile</a> <span class="arrow"></span>
                                                    <ul class="dm-align-2">
                                                        <li> <a href="<?php echo site_url('profil/sejarah'); ?>">Sejarah</a> </li>
                                                        <li> <a href="<?php echo site_url('profil/visi_misi'); ?>">Visi Misi</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu  <?php if ($this->uri->segment('1') == 'angsuran') {
                                                                            echo 'active';
                                                                        } ?>"> <a href="<?php echo site_url('angsuran'); ?>">Angsuran</a>
                                                </li>
                                                <li class="mega-menu  <?php if ($this->uri->segment('2') == 'cek') {
                                                                            echo 'active';
                                                                        } ?>"> <a href="<?php echo site_url('simpanan/cek'); ?>">Simpanan</a>
                                                </li>
                                                <li class="mega-menu five-col  <?php if ($this->uri->segment('1') == 'kontak') {
                                                                                    echo 'active';
                                                                                } ?>"> <a href="<?php echo site_url('kontak'); ?>">Kontak</a>

                                                </li>
                                                <li class="mega-menu five-col"> <a href="<?php echo site_url('auth'); ?>">Login</a>
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

            <!-- START REVOLUTION SLIDER 5.0 -->
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>

                        <!-- SLIDE  -->
                        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?php echo site_url('assets/frontend/images/sliders/slider01.jpg'); ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">

                            <!-- MAIN IMAGE -->
                            <img src="<?php echo site_url('assets/frontend/images/sliders/slider01.jpg'); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption roboto dark-grey white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['100','100','120','100']" data-fontsize="['18','16','14','14']" data-lineheight="['70','70','70','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">Muda, Beda, Mandiri</div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['145','145','155','135']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1500" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">KSP PRIMKOPPABRI</div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','220','200','180']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="2000" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">SLAWI</div>

                        </li>

                        <!-- SLIDE  -->
                        <li data-index="rs-2" data-transition="slidedown" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?php echo site_url('assets/frontend/images/sliders/slider02.jpg'); ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">

                            <!-- MAIN IMAGE -->
                            <img src="<?php echo site_url('assets/frontend/images/sliders/slider02.jpg'); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption roboto dark-grey white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['100','100','120','100']" data-fontsize="['18','16','14','14']" data-lineheight="['70','70','70','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">Muda, Beda, Mandiri</div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['145','145','155','135']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1500" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">KSP PRIMKOPPABRI</div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','220','200','180']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="2000" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">SLAWI</div>


                        </li>

                        <!-- SLIDE  -->
                        <li data-index="rs-3" data-transition="slidedown" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="<?php echo site_url('assets/frontend/images/sliders/slider03.jpg'); ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">


                            <!-- MAIN IMAGE -->
                            <img src="<?php echo site_url('assets/frontend/images/sliders/slider03.jpg'); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption roboto dark-grey white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['100','100','120','100']" data-fontsize="['18','16','14','14']" data-lineheight="['70','70','70','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">Muda, Beda, Mandiri</div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['145','145','155','135']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1500" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">KSP PRIMKOPPABRI</div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption montserrat fweight-6 text-white tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','220','200','180']" data-fontsize="['70','70','50','30']" data-lineheight="['100','100','100','50']" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="2000" data-splitin="lines" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 30px;">SLAWI</div>


                        </li>

                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END REVOLUTION SLIDER -->


            <section class="sec-padding section-light section-pattren-28">
                <div class="container">
                    <div class="row slide-controls-4 no-gutter">
                        <div id="owl-demo17" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="col-md-6 nopadding">
                                    <div class="img-box">
                                        <div class="overlay"></div>
                                        <img src="<?php echo site_url('assets/frontend/'); ?>images/profil.jpeg" alt="" class="img-responsive" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
                                    <div class="ce-feature-box-4 margin-bottom">
                                        <div class="text-box">
                                            <div class="col-sm-12 nopadding">
                                                <div class="sec-title-container less-padding-4 text-left">
                                                    <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Siapa Kami?</h5>
                                                    <h2 class="font-weight-6 less-mar-1 line-height-5">Tentang Perusahaan Kami</h2>
                                                    <div class="ce-title-line align-left"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <!--end title-->

                                            <p>
                                                KSP Primkoppabri USP. 20 Slawi adalah sebuah lembaga keuangan mikro yang kegiatan utamanya adalah simpan pinjam. Salah satu tujuan didirikannya lembaga ini adalah membantu warga masyarakat di derah Tegal, Pemalang, serta Brebes dalam bidang pembiayaan keuangan.
                                            </p>
                                            <br />
                                            <br />
                                        </div>
                                    </div>
                                </div>
                                <!--end item-->
                            </div>
                            <!--end carousel item-->


                        </div>
                        <!--end carousel-->

                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!-- end section -->


            <section class="sec-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="sec-title-container text-center">
                                <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Recent Blogs</h5>
                                <h2 class="font-weight-6 less-mar-1 line-height-5">Latest Blog Posts </h2>
                                <div class="ce-title-line"></div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->
                        <?php foreach ($berita as $row) {
                        ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="ce-feature-box-28 margin-bottom">
                                    <div class="img-box">
                                        <div class="overlay">
                                        </div>
                                        <img src="<?php echo base_url('assets/img_berita/') . $row['img_berita']; ?>" alt="" class="img-responsive" />
                                    </div>
                                    <div class="text-box padding-4">
                                        <a href="<?php echo site_url('halberita/lihat/') . $row['id_berita']; ?>">
                                            <h5 class="font-weight-5"><?= $row['judul_berita']; ?></h5>
                                        </a>
                                        <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Admin</span> </div>
                                        <br />
                                        <p class="font-weight-5"><?= substr($row['isi_berita'], 0, 950) . ' ...'; ?><a href="<?php echo site_url('halberita/lihat/') . $row['id_berita']; ?>">[Lihat Selengkapnya]</a></p>
                                        <br />
                                        <div class="col-md-12 nopadding">
                                            <a href="#">
                                                <div class="icon-b"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!--end item-->

                    </div>
                </div>
            </section>
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

            <a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
            <!-- end scroll to top of the page-->

        </div>
        <!--end site wrapper-->
    </div>
    <!--end wrapper boxed-->

    <!-- Scripts -->
    <script src="<?php echo site_url('assets/frontend/'); ?>js/jquery/jquery.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/style-customizer/js/spectrum.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/less/less.min.js" data-env="development"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/style-customizer/js/style-customizer.js"></script>
    <!-- Scripts END -->

    <!-- Template scripts -->
    <script src="<?php echo site_url('assets/frontend/'); ?>js/megamenu/js/main.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/ytplayer/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/ytplayer/elementvideo-custom.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/ytplayer/play-pause-btn.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
    <script>
        var tpj = jQuery;
        var revapi4;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_4_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_4_1");
            } else {
                revapi4 = tpj("#rev_slider_4_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "<?php echo site_url('assets/frontend/'); ?>js/revolution-slider/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },

                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "dione",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [640, 640, 650, 400],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    disableProgressBar: "on",
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <script>
        var tpj = jQuery;

        var revapi280;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_280_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_280_1");
            } else {
                revapi280 = tpj("#rev_slider_280_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "../../revolution/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1000, 1024, 778, 480],
                    gridheight: [700, 520, 420, 420],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <script>
        $(window).load(function() {
            setTimeout(function() {

                $('.loader-live').fadeOut();
            }, 1000);
        })
    </script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/parallax/parallax-background.min.js"></script>
    <script>
        (function($) {
            $('.parallax').parallaxBackground();
        })(jQuery);
    </script>
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
    <script src="<?php echo site_url('assets/frontend/'); ?>js/tabs/js/responsive-tabs.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/cubeportfolio/main-mosaic3-cols3.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/owl-carousel/custom.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/accordion/js/smk-accordion.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/accordion/js/custom.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/progress-circle/raphael-min.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/progress-circle/custom.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/progress-circle/jQuery.circleProgressBar.js"></script>
    <script src="<?php echo site_url('assets/frontend/'); ?>js/functions/functions.js"></script>
</body>

</html>
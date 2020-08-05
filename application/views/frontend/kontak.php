<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kontak</title>
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
                                <h4 class="uppercase text-light">Kontak</h4>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                    <li class="current"><a href="#">Kontak</a></li>
                                    <!-- <li class="current"><a href="#">Blog 3 Column</a></li> -->
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!--end section-->
            <section class="sec-padding section-light">
                <div class="container">
                    <div class="row">

                        <div class="col-md-7 col-sm-12 col-xs-12">

                            <h3>Kontak Form</h3>
                            <p>Jika ada pertanyaan atau masukan bisa kirim lewat form dibawah ini !</p>
                            <br />
                            <br />

                            <div class="text-box white padding-4">
                                <div class="one_half">


                                    <div class="cforms_sty3">


                                        <div id="form_status"></div>
                                        <form type="POST" id="code-contact" onSubmit="return valid_datas( this );">
                                            <label class="label">Name <em>*</em></label>
                                            <label class="input">
                                                <input type="text" name="name" id="name">
                                            </label>

                                            <div class="clearfix"></div>

                                            <label class="label">E-mail <em>*</em></label>
                                            <label class="input">
                                                <input type="email" name="email" id="email">
                                            </label>

                                            <div class="clearfix"></div>

                                            <label class="label">Subject <em>*</em></label>
                                            <label class="input">
                                                <input type="text" name="subject" id="subject">
                                            </label>

                                            <div class="clearfix"></div>

                                            <label class="label">Message <em>*</em></label>
                                            <label class="textarea">
                                                <textarea rows="5" name="message" id="message"></textarea>
                                            </label>

                                            <div class="clearfix"></div>
                                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                            <button type="submit" class="button">Send Message</button>

                                        </form>


                                    </div>

                                </div>
                            </div><!-- end .smart-wrap section -->
                            <!-- end .smart-forms section -->
                        </div>
                        <!--end item-->

                        <div class="col-md-5 col-sm-12 col-xs-12 text-left margin-bottom">
                            <h4>Info Alamat</h4>
                            <h6>KSP Primkoppabri USP. 20 Tegal</h6>
                            <p>Jl. Merak No. 13 RT 04/03 Kelurahan Slawi Kulon Kec. Slawi Kab. Tegal
                                No Telp Aduan: +62 823-2639-5985</p>
                            <br />
                            <p>E-mail: admin@primkoppabri.com</p>
                            <p>Website: www.primkoppabri.com</p>
                            <br /><br />
                        </div>
                        <!--end item-->


                        <h4>Find Address</h4>
                        <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7606.8028454889545!2d109.12892446331051!3d-6.969397186496767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbee707e2fee5%3A0xa526614480bd848b!2sKantor%20Primkopabri%20Unit%2010%20Slawi!5e0!3m2!1sid!2sid!4v1593862705897!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <!--end map-->

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

            <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

        </div>
    </div>
</body>
<!-- Scripts -->
<script src="<?php echo site_url('assets/frontend/'); ?>js/jquery/jquery.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/style-customizer/js/spectrum.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/less/less.min.js" data-env="development"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/style-customizer/js/style-customizer.js"></script>
<!-- Scripts END -->

<!-- Template scripts -->
<script src="<?php echo site_url('assets/frontend/'); ?>js/megamenu/js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAcjJcWIgmLyfrhWte18ul3Z3Zd89xGYfQ&' + 'callback=GmapInit"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/gmaps/jquery.gmap.min.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/gmaps/examples.js"></script>


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
<script src="<?php echo site_url('assets/frontend/'); ?>js/functions/functions.js"></script>
<script src="<?php echo site_url('assets/frontend/'); ?>js/cform/form-validate.js"></script>

</html>
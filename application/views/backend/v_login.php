<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - SIKOPSI</title>
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
    <style>
	body {
			background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
			background-size: 500% 500%;
			-webkit-animation: ignielGradient 12s ease infinite;
			-moz-animation: ignielGradient 12s ease infinite;
			animation: ignielGradient 12s ease infinite;
		}
		@-webkit-keyframes ignielGradient {
			0%{background-position:0% 50%}
			50%{background-position:100% 50%}
		}
        /* body {
            background-color: #f1c40f;
            -webkit-animation: color 5s ease-in 0s infinite alternate running;
            -moz-animation: color 5s linear 0s infinite alternate running;
            animation: color 5s linear 0s infinite alternate running;
        }

        /* Animasi + Prefix untuk browser */
        /* @-webkit-keyframes color {
            0% {
                background-color: #ffee00;
            }

            32% {
                background-color: #e74c3c;
            }

            55% {
                background-color: #2f8bd6;
            }

            76% {
                background-color: #119c67;
            }

            100% {
                background-color: #2ecc71;
            }
        }

        @-moz-keyframes color {
            0% {
                background-color: #ffee00;
            }

            32% {
                background-color: #e74c3c;
            }

            55% {
                background-color: #2f8bd6;
            }

            76% {
                background-color: #119c67;
            }

            100% {
                background-color: #2ecc71;
            }
        }

        @keyframes color {
            0% {
                background-color: #ffee00;
            }

            32% {
                background-color: #e74c3c;
            }

            55% {
                background-color: #2f8bd6;
            }

            76% {
                background-color: #119c67;
            }

            100% {
                background-color: #2ecc71;
            }
        }  */
    </style>
</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

    <div class="home-btn d-none d-sm-block">
        <a href="#"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <span><img src="<?php echo base_url(); ?>assets/backend/images/logo.jpeg" alt="" height="90" width="90"></span>
                            </div>
                            <?php echo $this->session->flashdata('message'); ?>
                            <form action="<?php echo site_url('auth'); ?>" method="POST" class="pt-2">

                                <div class="form-group mb-3">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" id="username" required="" placeholder="Enter your username" name="username_admin">
                                </div>

                                <div class="form-group mb-3">
                                    <a href="#" class="text-muted float-right"><small>Forgot your password?</small></a>
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password_admin">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> Masuk </button>
                                </div>

                            </form>

                            <!-- end row -->

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/backend/js/app.min.js"></script>

</body>

</html>

<!-- Topbar Start -->
<style>
    .warna {
        background: rgb(152, 9, 246);
        background: linear-gradient(90deg, rgba(152, 9, 246, 0.9836309523809523) 0%, rgba(23, 227, 190, 1) 0%, rgba(28, 215, 103, 1) 71%);


        /* background-color: #53C63C !important; */
    }
</style>
<div class="navbar-custom warna">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="<?= base_url('assets/img_admin/') . $admin['img_admin']; ?>" alt="user-image" class="responsive-image">
                <span class="pro-user-name ml-1">
                    <?= $admin['nama_admin']; ?> <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h6 class="m-0">
                        Welcome !
                    </h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-user"></i>
                    <span>My Account</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item notify-item">
                    <i class="dripicons-power"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>


    </ul>

    <ul class="list-unstyled menu-left mb-0">
        <li class="float-left">
            <a href="index.html" class="logo">
                <span class="logo-lg">
                    <img src="<?php echo base_url(); ?>assets/backend/images/logo-light.png" alt="" height="22">
                </span>
                <span class="logo-sm">
                    <img src="<?php echo base_url(); ?>assets/backend/images/logo-sm.png" alt="" height="24">
                </span>
            </a>
        </li>
        <li class="float-left">
            <a class="button-menu-mobile navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </li>
    </ul>
</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="<?php echo site_url('dashboard'); ?>">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <?php
                if ($admin['lvl_admin'] == 1) {
                ?>
                    <li>
                        <a href="<?php echo site_url('admin'); ?>" class="alink">
                            <i class="dripicons-user"></i>
                            <span> Admin </span>
                        </a>
                    </li>
                <?php } ?>

                <li>
                    <a href="<?php echo site_url('anggota'); ?>" id="anggota">
                        <i class="dripicons-user-group"></i>
                        <span> Anggota </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('peminjaman'); ?>">
                        <i class="dripicons-to-do"></i>
                        <span> Peminjaman </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('tabungan'); ?>">
                        <i class="dripicons-briefcase"></i>
                        <span> Tabungan </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('karyawan'); ?>">
                        <i class="dripicons-user-id"></i>
                        <span> Karyawan </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('berita'); ?>">
                        <i class="dripicons-blog"></i>
                        <span> Berita </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">SIKOPSI</li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url($menu); ?>"><?= $menu; ?></a></li>
                                <?php if (isset($sub_menu)) {
                                ?>
                                    <li class="breadcrumb-item active"><?= $sub_menu; ?></li>
                                <?php } ?>
                            </ol>
                        </div>
                        <h4 class="page-title">Menu <?= $menu; ?></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
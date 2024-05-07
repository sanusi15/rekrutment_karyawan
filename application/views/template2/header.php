<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Rekrutmen Karyawan PT. Nusantara</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/dashboard/logo2.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <a href="<?= base_url('/'); ?>">
                                        <img width="120px" alt="Image placeholder" src="<?= base_url('assets/img/dashboard/logoP.png') ?>">
                                    </a>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <?php if ($this->session->userdata('userlogin')) : ?>
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="<?= base_url('assets/img/foto/' . $user['foto']) ?>">
                                        </span>
                                        <span class="ml-2"><?= $user['nama_lengkap'] ?></span>
                                    <?php else : ?>
                                        <div class="media-body  ml-2  d-none d-lg-block" style="background-color: #1289FF; border-radius:2px; padding:5px 15px;">
                                            <span class="mb-0 text-sm  font-weight-bold text-white" id="btn_login">LOGIN</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <?php if ($this->session->userdata('userlogin')) :  ?>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome!</h6>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?= base_url('pelamar/logout'); ?>" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <span>
                <img width="170px" alt="Image placeholder" src="<?= base_url('assets/img/dashboard/logoP.png') ?>">
            </span>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('admin'); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/loker'); ?>">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Loker</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('userlogin')['level'] == "1") : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/pelamar'); ?>">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Pelamar</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/listSoal'); ?>">
                            <i class="ni ni-bullet-list-67 text-primary"></i>
                            <span class="nav-link-text">Soal Tes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/listPG'); ?>">
                            <i class="ni ni-bullet-list-67 text-primary"></i>
                            <span class="nav-link-text">Soal PG</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/report'); ?>">
                            <i class="fas fa-solid fa-print text-danger"></i>
                            <span class="nav-link-text">Laporan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/logout'); ?>">
                            <i class="ni ni-user-run"></i>
                            <span class="nav-link-text">Log Out</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">

            </div>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <h6 class="h2 text-white d-inline-block mb-0"><?= $title; ?></h6>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?= base_url(''); ?>/assets/img/user.png">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <?php if ($this->session->userdata('userlogin')['level'] == "1") : ?>
                                        <span class="mb-0 text-sm  font-weight-bold">HRD</span>
                                    <?php elseif ($this->session->userdata('userlogin')['level'] == "2") : ?>
                                        <span class="mb-0 text-sm  font-weight-bold">Staff HRD</span>
                                    <?php else : ?>
                                        <span class="mb-0 text-sm  font-weight-bold">Peserta</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('admin/logout'); ?>" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
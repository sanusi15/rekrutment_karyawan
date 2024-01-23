<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img width="120px" alt="Image placeholder" src="<?= base_url('assets/img/dashboard/logoP.png') ?>">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('pelamar'); ?>">
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/pelamar'); ?>">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Pelamar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/listSoal'); ?>">
                            <i class="ni ni-bullet-list-67 text-primary"></i>
                            <span class="nav-link-text">Soal Tes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pelamar/logout'); ?>">
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
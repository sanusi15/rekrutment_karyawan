<!-- Header -->
<div class="header bg-primary pb-6 ">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row mb-5"></div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-center ">
                <?php if($user['status_lamaran'] == 'Proses Seleksi') : ?>
                <h2 class="mt-5">Data lamaran anda sedang dalam proses seleksi</h2>
                <div class="text-center">
                    <img width="420px" src="<?= base_url('assets/img/dashboard/vector1.jpeg'); ?>" alt="">
                </div>
                <?php elseif($user['status_lamaran'] == 'Diterima') : ?>
                    <h2 class="mt-5">Selamat anda berhasil lolos tahap seleksi</h2>
                    <p>Silahkan menunggu untuk informasi selanjutnya</p>
                    <div class="text-center">
                        <img width="420px" src="<?= base_url('assets/img/dashboard/vector3.png'); ?>" alt="">
                    </div>
                <?php else: ?>
                    <h2 class="mt-5">Mohon maaf anda belum bisa mengikuti tahap selanjutnya</h2>
                    <p>Semoga bisa dilain waktu, terimakasih.</p>
                    <div class="text-center">
                        <img width="420px" src="<?= base_url('assets/img/dashboard/vector3.jpeg'); ?>" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
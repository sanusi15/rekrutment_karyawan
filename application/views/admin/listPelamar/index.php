<style>
    .loker-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">

            </div>
        </div>
    </div>
</div>
<?php if ($this->session->flashdata('msg')) : ?>
    <div class="flashdata" data-flash="<?= $this->session->flashdata('msg'); ?>"></div>
<?php endif; ?>
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <?php foreach ($loker as $l) : ?>
            <div class="col-md-4">
                <div class="card" style="overflow: hidden;">
                    <img class="loker-img" width="400" src="<?= base_url('assets/img/loker/' . $l['img']); ?>" alt="">
                    <div class="p-2 ">
                        <p class="font-weight-bold"><?= $l['posisi']; ?></p>
                        <p>Posisi : <?= $l['jabatan']; ?></p>
                    </div>
                    <div class="p-2 text-center">
                        <a href="<?= base_url('admin/listPelamar/' . $l['id_loker']); ?>" class="btn btn-dark w-100">Lihat Pelamar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <script src="<?= base_url('assets/') ?>js/core/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/sweetAlert2.js"></script>
    <script>
        $(function() {
            var flash = $('.flashdata').data('flash')
            if (flash != undefined) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: flash,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        })
    </script>
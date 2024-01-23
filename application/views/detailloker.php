<style>
    .loker-img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    span{
        font-weight: bold;
        font-size: 14px;
    }

    @media (max-width:760px) {
        .loker-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    }
</style>


    <!-- Page content -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">JOB DESCRIPTION </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card" style="overflow: hidden;">
                                        <img class="loker-img" src="<?= base_url('assets/img/loker/loker3.jpg'); ?>" alt="">
                                        <div class="p-2 ">
                                            <p class="font-weight-bold"><?= $detail['posisi']; ?></p>
                                        </div>
                                        <div class="px-2">
                                            <p class="detail"><span>Posisi</span> : <?= $detail['jabatan']; ?></p>
                                        </div>
                                        <div class="px-2">
                                            <p class="detail"><span>Minimum Pendidikan</span> : <?= $detail['minimum_pendidikan']; ?></p>
                                        </div>
                                        <div class="px-2">
                                            <p class="detail"><span>Persyaratan</span> :<br> <?= $detail['persyaratan']; ?></p>
                                        </div>
                                        <div class="px-2">
                                            <p class="detail"><span>Gaji</span> : Rp. <?= $detail['gaji']; ?> </p>
                                        </div>
                                        <div class="p-2 text-center">
                                            <form action="<?= base_url('registrasi') ?>" method="POST">
                                                <input type="hidden" value="<?= $detail['id_loker']; ?>" name="id">
                                                <button href="<?= base_url('registrasi'); ?>" class="btn btn-dark w-100">Lamar Sekarang</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>
        
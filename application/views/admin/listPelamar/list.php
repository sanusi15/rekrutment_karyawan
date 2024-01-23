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
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header border-0">
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Pelamar</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Melamar</th>
                                <th scope="col" class="sort" data-sort="status">Status Lamaran</th>
                                <th scope="col" class="sort" data-sort="completion">Posisi Yang Dilamar</th>
                                <th scope="col" class="sort" data-sort="completion">Jabatan</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $i = 1;
                            foreach ($list as $l) : ?>
                                <tr>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $i++; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $l['nama_lengkap']; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $l['tgl_lamar']; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <?php if($l['status_lamaran'] == 'Diterima'): ?>
                                                <button class="btn btn-success btn-sm w-100"><?= $l['status_lamaran']; ?></button>
                                            <?php elseif($l['status_lamaran'] == 'Gagal'): ?>
                                                <button class="btn btn-danger btn-sm w-100"><?= $l['status_lamaran']; ?></button>
                                            <?php else : ?>
                                                <button class="btn btn-secondary btn-sm w-100"><?= $l['status_lamaran']; ?></button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $l['posisi']; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $l['jabatan']; ?></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-sm" href="<?= base_url('admin/detailPelamar/' . $l['id_pelamar']); ?>">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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
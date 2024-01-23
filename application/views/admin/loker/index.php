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
                    <a href="<?= base_url('admin/addloker'); ?>" class="mb-0 btn btn-primary btn-sm float-right">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No</th>
                                <th scope="col" class="sort" data-sort="budget">Posisi</th>
                                <th scope="col" class="sort" data-sort="status">Jabatan</th>
                                <th scope="col" class="sort" data-sort="status">Pendidikan</th>
                                <th scope="col" class="sort" data-sort="status">Gaji</th>
                                <th scope="col">Image</th>
                                <th scope="col" class="sort" data-sort="completion">Status</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $i = 1;
                            foreach ($loker as $l) : ?>
                                <tr>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $i++; ?></span>
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
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $l['minimum_pendidikan']; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><?= $l['gaji']; ?></span>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar mr-3">
                                                <img alt="Image placeholder" src="<?= base_url('assets/img/loker/' . $l['img']); ?>">
                                            </a>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-<?= $l['status'] == 'aktif' ? 'success' : 'danger' ?>"></i>
                                            <span class="status"><?= $l['status']; ?></span>
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="<?= base_url('admin/editloker/' . $l['id_loker']); ?>">Detail/Ubah</a>
                                                <a class="dropdown-item" href="">Hapus</a>
                                            </div>
                                        </div>
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
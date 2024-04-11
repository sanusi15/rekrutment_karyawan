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
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="<?= base_url(''); ?>assets/template/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a target="_blank" href="<?= base_url('assets/img/foto/' . $data['foto']); ?>">
                                <img src="<?= base_url('assets/img/foto/' . $data['foto']); ?>" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body mt-5">

                    <div class="text-center">
                        <h5 class="h3">
                            <?= $data['nama_lengkap']; ?>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i><?= $data['tempat_lahir']; ?>, <?= $data['tgl_lahir']; ?>
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Posisi Lamar - <?= $data['posisi']; ?>
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i><a target="_blank" href="<?= base_url('assets/img/ktp/' . $data['ktp']); ?>" class="btn btn-primary">KTP</a>
                            <i class="ni business_briefcase-24 mr-2"></i><a target="_blank" href="<?= base_url('assets/img/cv/' . $data['cv']); ?>" class="btn btn-danger">Lihat CV</a>
                            <i class="ni business_briefcase-24 mr-2"></i><a target="_blank" href="<?= base_url('assets/img/kir/' . $data['kir']); ?>" class="btn btn-success">KIR Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <a href="<?= base_url('admin/jawabanTes/' . $data['id_pelamar']); ?>" class="btn btn-primary w-100">Lihat Jawaban Tes</a>
                </div>
                <?php if ($data['status_lamaran'] == 'Proses Seleksi') : ?>
                    <div class="col-md-6">
                        <a href="<?= base_url('admin/konfirmasiLamaran/' . $data['id_pelamar'] . '/1'); ?>" class="btn btn-success w-100">Terima</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('admin/konfirmasiLamaran/' . $data['id_pelamar'] . '/2'); ?>" class="btn btn-danger w-100">Tolak</a>
                    </div>
                <?php else : ?>
                    <div class="col-md-12">
                        <a href="#" class="btn btn-<?= ($data['status_lamaran'] == 'Diterima' ? 'success' : 'danger') ?> w-100"><?= $data['status_lamaran']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Data Pelamar</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Nama Lengkap</label>
                                    <input type="text" disabled id="input-username" class="form-control" value="<?= $data['nama_lengkap']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" disabled id="input-email" class="form-control" value="<?= $data['email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Tempat Lahir</label>
                                    <input type="text" disabled id="input-username" class="form-control" value="<?= $data['tempat_lahir']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                                    <input type="email" disabled id="input-email" class="form-control" value="<?= $data['tgl_lahir']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">No KTP</label>
                                    <input type="text" disabled id="input-first-name" class="form-control" value="<?= $data['no_ktp']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">No NPWP</label>
                                    <input type="text" disabled id="input-last-name" class="form-control" value="<?= $data['no_npwp']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Gender</label>
                                    <input type="text" disabled id="input-first-name" class="form-control" value="<?= ($data['gender'] == 'lk' ? 'Laki-Laki' : 'Perempuan') ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Status Kawin</label>
                                    <input type="text" disabled id="input-last-name" class="form-control" value="<?= $data['status_kawin']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Agama</label>
                                    <input type="text" disabled id="input-first-name" class="form-control" value="<?= $data['agama'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Kewarganegaraan</label>
                                    <input type="text" disabled id="input-last-name" class="form-control" value="<?= $data['kewarganegaraan']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Posisi Lamar</label>
                                    <input type="text" disabled id="input-first-name" class="form-control" value="<?= $data['posisi'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Tanggal Melamar</label>
                                    <input type="text" disabled id="input-last-name" class="form-control" value="<?= $data['tgl_lamar']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Alamat Asli</label>
                                    <textarea name="" disabled cols="30" rows="3" class="form-control"><?= $data['alamat_asli']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Alamat Domisili (KTP)</label>
                                    <textarea name="" disabled cols="30" rows="3" class="form-control"><?= $data['alamat_domisili']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                </div>
            </div>
        </div>
        <div class="col-12 order-xl-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Riwayat Kerja</h6>
                    <div class="pl-lg-4">
                        <?php if (count($data2) >= 1) : ?>
                            <?php $i = 1;
                            foreach ($data2 as $d) : ?>
                                <div class="row">
                                    <h3>No. <?= $i++; ?></h3>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Nama Perusahaan</label>
                                            <input type="text" disabled id="input-username" class="form-control" value="<?= $d['nama_perusahaan']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Posisi</label>
                                            <input type="text" disabled id="input-username" class="form-control" value="<?= $d['posisi']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Lama Kerja</label>
                                            <input type="text" disabled id="input-username" class="form-control" value="<?= $d['lama_kerja']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Alasan Berhenti</label>
                                            <input type="text" disabled id="input-username" class="form-control" value="<?= $d['alasan_berhenti']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <?php if ($d['sertifikat'] != '') : ?>
                                                <a target="_blank" href="<?= site_url('assets/img/sertifikat/' . $d['sertifikat']) ?>" class="btn btn-success">Lihat Sertifikat</a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" class="btn btn-secondary">Tidak ada sertifikat</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-lg-12">
                                <h3>Pelamar Belum Memiliki Riwayat Kerja</h3>
                            </div>
                        <?php endif; ?>
                    </div>
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
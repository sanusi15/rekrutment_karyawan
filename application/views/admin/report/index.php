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
            <form action="<?= site_url('admin/createReport') ?>" method="post">
                <div class="card ">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Pilih Tanggal Laporan</h3>
                    </div>
                    <div class="row px-4 py-2">
                        <div class="col-md-4">
                            <label for="">Dari Tanggal :</label>
                            <input type="date" class="form-control " name="date1">
                        </div>
                        <div class="col-md-4">
                            <label for="">Sampai Tanggal :</label>
                            <input type="date" class="form-control " name="date2">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary mt-4">Buat Laporan</button>
                        </div>
                    </div>
                </div>
            </form>
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
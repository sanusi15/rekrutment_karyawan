<style>
    .tableku {
        width: 100%;
        border: 0;
    }

    .tableku thead {
        border-top: 1px solid #000;
    }

    .tableku thead th {
        font-size: 12px;
        font-family: Open Sans, sans-serif;
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
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="mb-0 btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</>
                </div>
                <div class="card-body">
                    <div class="pl-lg-4">
                        <table class="table custom-table">
                            <thead>
                                <th width="10%">No</th>
                                <th width="80%">Soal</th>
                                <th width="40%">Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($list as $s) : ?>
                                    <tr>
                                        <td>
                                            <span class="btn btn-disabled"><?= $i++; ?></span>
                                        </td>
                                        <td>
                                            <textarea disabled style="width: 80%;" cols="2" rows="5" class="form-control txtarea"><?= $s['isi_soal']; ?></textarea>
                                        </td>
                                        <td>
                                            <a href="#" data-id="<?= $s['id_soal']; ?>" class="btn btn-sm btn-primary btn-edit">Edit</a>
                                            <a href="#" data-id="<?= $s['id_soal']; ?>" style="display:none;" class="btn btn-sm btn-success btn-simpan">Simpan</a>
                                            <a href="#" data-id="<?= $s['id_soal']; ?>" class="btn btn-danger btn-sm btn-hapus">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('admin/saveSoal'); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    </div>
                    <div class="modal-body">
                        <label for="">Soal</label>
                        <input type="text" class="form-control" name="isi">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
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
            flashdata()
            $('.btn-simpan').hide()

            $('.btn-edit').click(function(e) {
                e.preventDefault()
                var textarea = $(this).closest('tr').find('.txtarea');
                textarea.prop('disabled', false);
                $(this).hide()
                var btnSimpan = $(this).closest('td').find('.btn-simpan')
                btnSimpan.removeAttr('style')
            })

            $('.btn-simpan').click(function(e) {
                e.preventDefault()
                var id = $(this).data('id')
                var textarea = $(this).closest('tr').find('.txtarea').val();
                $.ajax({
                    method: 'POST',
                    url: '<?= base_url('admin/updateSoal'); ?>',
                    data: {
                        soal: textarea,
                        id: id
                    },
                    success: function(result) {
                        if (result == 'berhasil') {
                            window.location.reload()
                        }
                    }
                })
            })

            $('.btn-hapus').click(function(e) {
                e.preventDefault()
                var id = $(this).data('id')
                Swal.fire({
                    title: "Kamu yakin?",
                    text: "Data ini akan terhapus!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'POST',
                            url: '<?= base_url('admin/hapusSoal'); ?>',
                            data: {
                                id: id
                            },
                            success: function(result) {
                                if (result == 'berhasil') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    });
                                    window.location.reload()
                                }
                            }
                        })
                    }
                });
            })
        })

        function flashdata() {
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
        }
    </script>
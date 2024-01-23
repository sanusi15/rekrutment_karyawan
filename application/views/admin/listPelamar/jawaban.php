<style>
    .custom-table tbody tr td:first-child {
        max-width: 60px;
        /* Sesuaikan dengan lebar maksimal yang diinginkan */
        word-wrap: break-word;
        /* Memastikan teks terpotong dan melanjutkan ke baris baru */
        white-space: normal;
    }

    .custom-table tbody tr td:last-child {
        max-width: 60px;
        /* Sesuaikan dengan lebar maksimal yang diinginkan */
        word-wrap: break-word;
        /* Memastikan teks terpotong dan melanjutkan ke baris baru */
        white-space: normal;
    }

    .radio-container {
        display: block;
        position: relative;
        /* Adjust this value based on your design */
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 16px;
        /* Adjust the font size as needed */
    }

    .radio-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        /* Adjust this value based on your design */
        width: 20px;
        /* Adjust this value based on your design */
        background-color: #caca;
        /* Background color of the radio button */
        border-radius: 50%;
        /* Make it a circle */
    }

    .radio-container input:checked~.checkmark {
        background-color: #2196F3;
        /* Color when selected */
    }

    /* Add a white circle inside the custom radio button */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        top: 5px;
        /* Adjust this value based on your design */
        left: 5px;
        /* Adjust this value based on your design */
        width: 10px;
        /* Adjust this value based on your design */
        height: 10px;
        /* Adjust this value based on your design */
        border-radius: 50%;
        background-color: #fff;
    }

    /* Show the white circle inside the custom radio button when selected */
    .radio-container input:checked~.checkmark:after {
        display: block;
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
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="pl-lg-4">
                        <table class="table custom-table">
                            <thead>
                                <th width="50%">Pertanyaan</th>
                                <th width="10%">Jawaban</th>
                                <th width="30%">Penjelasan/Keterangan</th>
                            </thead>
                            <tbody>
                                <?php foreach ($jawaban as $s) : ?>
                                    <tr>
                                        <td width="50%">
                                            <p><?= $s['isi_soal']; ?></p>
                                        </td>
                                        <td>                                            
                                            <span class="btn btn-disabled" ><?= $s['isi_jawaban']; ?></span>
                                        </td>
                                        <td width="30%">
                                            <textarea  disabled class="form-control bg-white"><?= $s['isi_keterangan']; ?></textarea>
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
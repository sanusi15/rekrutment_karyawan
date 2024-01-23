<style>
    .tabs {
        overflow: hidden;
        font-size: 15px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .tablinks {
        color: #f1f1f1;
        background-color: #828287;
        float: left;
        outline: none;
        border: none;
        /* border-top-right-radius: 10px;
        border-bottom-left-radius: 10px; */
        cursor: pointer;
        padding: 5px 8px;
    }

    .tablinks:hover {
        background-color: #121c4a;
    }

    .tabcontent {
        display: none;
    }

    /* Style the active tab */
    .tablinks.active {
        background-color: #121c4a;
    }

    #form_error {
        border: 1px solid #ff1515;
        background-color: #ffc4c4;
        border-radius: 5px;
        padding: 10px;
        line-height: 1px;
    }

    #form_error h1 {
        font-size: 14px;
        font-weight: bold;
    }

    #form_error p {
        font-size: 12px;
    }

    #btn_simpan {
        background-color: #121c4a;
        font-size: 14px;
    }

    #btn_simpan:hover {
        background-color: #828287;
    }

    .line {
        margin: 0 15px;
        width: 100%;
        height: 1px;
        background-color: #afb0b3;
        margin-bottom: 15px;
    }



    @media (max-width: 764px) {
        .tabs {
            font-size: 12px;
            gap: 0;
        }
    }
</style>

    <!-- Page content -->
    <div class="container-fluid mt-5">
        <div class="row mb-2">
            <div class="col-md-12">
                <div id="form_error" hidden style="width:100%"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Silahkan Isi Data Dibawah Ini</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tabs">
                        <button class="tablinks" onclick="openTab(event, 'tab1')">Data Diri</button>
                        <button class="tablinks" onclick="openTab(event, 'tab2')">Pengalaman Kerja</button>
                        <button class="tablinks" onclick="openTab(event, 'tab3')">Pembuatan Akun</button>
                        <button class="tablinks" onclick="openTab(event, 'tab4')">Lanjut</button>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('registrasi/tambah'); ?>" id="formRegist" enctype="multipart/form-data" method="post">
                            <div class="pl-lg-4 tabcontent" id="tab1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="no_ktp">No KTP</label>
                                                    <input type="text" id="no_ktp" class="form-control" name="no_ktp">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="email">Email</label>
                                                    <input type="text" id="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="tgl_lahir">Tanggal Lahir</label>
                                                    <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="gender">Status Perkawinan</label>
                                                    <select id="gender" class="form-control" name="gender">
                                                        <option value="lk">Laki-Laki</option>
                                                        <option value="pr">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="no_hp">No HP</label>
                                                    <input type="text" id="no_hp" class="form-control" name="no_hp">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="status_kawin">Status Perkawinan</label>
                                                    <select id="status_kawin" class="form-control" name="status_kawin">
                                                        <option value="lajang">Lajang</option>
                                                        <option value="Menikah">Menikah</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="agama">Agama</label>
                                                    <select id="agama" class="form-control" name="agama">
                                                        <option value="islam">Islam</option>
                                                        <option value="kristen">Kristen</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="budha">Budha</option>
                                                        <option value="katholik">Katholik</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="kewarganegaraan">Kewarganegaraan</label>
                                                    <select id="kewarganegaraan" class="form-control" name="kewarganegaraan">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_npwp" class="form-control-label">No NPWP</label>
                                                    <input type="text" id="no_npwp" class="form-control" name="no_npwp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="alamat_asli" class="form-control-label">Alamat Sesuai KTP</label>
                                                <textarea name="alamat_asli" id="alamat_asli" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="alamat_domisili" class="form-control-label">Alamat Sesuai Domisili</label>
                                                <textarea name="alamat_domisili" id="alamat_domisili" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <label for="cv" class="form-control-label">Upload Your CV</label>
                                                <input type="file" name="cv" id="cv" class="form-control" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="foto" class="form-control-label">Upload Your Photos</label>
                                                <input type="file" name="foto" id="foto" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 tabcontent" id="tab2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>No.1</h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nama_perusahaan">Nama Perusahaan</label>
                                                    <input type="text" id="nama_perusahaan" class="form-control" name="nama_perusahaan[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="posisi">Posisi/Jabatan</label>
                                                    <input type="text" id="posisi" class="form-control" name="posisi[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="lama_kerja">Lama Kerja</label>
                                                    <input type="text" id="lama_kerja" class="form-control" name="lama_kerja[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="alasan_berhenti">Alasan Berhenti</label>
                                                    <input type="text" id="alasan_berhenti" class="form-control" name="alasan_berhenti[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h2>No.2</h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nama_perusahaan">Nama Perusahaan</label>
                                                    <input type="text" id="nama_perusahaan" class="form-control" name="nama_perusahaan[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="posisi">Posisi/Jabatan</label>
                                                    <input type="text" id="posisi" class="form-control" name="posisi[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="lama_kerja">Lama Kerja</label>
                                                    <input type="text" id="lama_kerja" class="form-control" name="lama_kerja[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="alasan_berhenti">Alasan Berhenti</label>
                                                    <input type="text" id="alasan_berhenti" class="form-control" name="alasan_berhenti[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h2>No.3</h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nama_perusahaan">Nama Perusahaan</label>
                                                    <input type="text" id="nama_perusahaan" class="form-control" name="nama_perusahaan[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="posisi">Posisi/Jabatan</label>
                                                    <input type="text" id="posisi" class="form-control" name="posisi[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="lama_kerja">Lama Kerja</label>
                                                    <input type="text" id="lama_kerja" class="form-control" name="lama_kerja[]">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="alasan_berhenti">Alasan Berhenti</label>
                                                    <input type="text" id="alasan_berhenti" class="form-control" name="alasan_berhenti[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 tabcontent" id="tab3">
                                <div class="row">
                                    <div class="col-12">
                                        <p>Harap diingat username dan password anda.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="username">Username</label>
                                            <input type="text" id="username" class="form-control" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="password">Password</label>
                                            <input type="text" id="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="password2">Konfirmasi Password</label>
                                            <input type="text" id="password2" class="form-control" name="password2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4 tabcontent text-center" id="tab4">
                                <h2>Pastikan semua data sudah terisi dengan benar</h2>
                                <img src="<?= base_url('assets/img/dashboard/vector1.jpeg'); ?>" alt="" width="200" style="">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" id="btn_simpan">Kirim data</button>
                                </div>
                            </div>
                            <hr class="my-4" />
                        </form>
                    </div>
                </div>
            </div>
        </div>


<script src="<?= base_url('assets/') ?>js/core/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sweetAlert2.js"></script>
<script>
    function openTab(evt, tabName) {
        // Hide all tab content
        var tabcontents = document.getElementsByClassName("tabcontent");
        for (var i = 0; i < tabcontents.length; i++) {
            tabcontents[i].style.display = "none";
        }

        // Deactivate all tab links
        var tablinks = document.getElementsByClassName("tablinks");
        for (var i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        // Show the clicked tab content and activate the clicked tab link
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }

    // Show the default tab on page load
    document.getElementById("tab1").style.display = "block";
    document.getElementsByClassName("tablinks")[0].classList.add("active");
</script>
<script>
    $(function() {
        $('#btn_simpan').click(function(e) {
            e.preventDefault()
            var actionUrl = $('#formRegist').attr('action')
            var form_data = new FormData($('#formRegist')[0])
            Swal.fire({
                title: "Kirim data lamaran anda?",
                text: "Silahkan cek ulang apabila ada keraguan",
                imageUrl: '<?= base_url('assets/img/dashboard/vector2.jpeg') ?>',
                imageWidth: 200,
                imageHeight: 200,
                imageAlt: "Custom image",
                showCancelButton: true,
                confirmButtonColor: "#121c4a",
                cancelButtonColor: "#d33",
                confirmButtonText: "Kirim",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form_error').html('')
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: form_data,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            const res = JSON.parse(response)
                            if (res.status == 'error') {
                                Swal.fire({
                                    title: "Data tidak terkirim",
                                    text: "Sepertinya ada kesalahan dalam pengsisian data anda",
                                    imageUrl: '<?= base_url('assets/img/dashboard/vector3.jpeg') ?>',
                                    imageWidth: 200,
                                    imageHeight: 200,
                                    imageAlt: "Custom image",
                                    showCancelButton: false,
                                    confirmButtonColor: "#121c4a",
                                    confirmButtonText: "Cek Ulang",
                                })
                                $('#form_error').append(`<h1>List error :</h1>`)
                                $.each(res.errors, function(field, error) {
                                    $('#form_error').append(error + '\n');
                                    $('#form_error').removeAttr('hidden')
                                });
                            } else {
                                Swal.fire({
                                    title: "Data telah terkirim",
                                    text: "Silahkan klik tombol dibawah untuk melanjutkan ke tahap berikutnya",
                                    imageUrl: '<?= base_url('assets/img/dashboard/vector3.png') ?>',
                                    imageWidth: 200,
                                    imageHeight: 200,
                                    imageAlt: "Custom image",
                                    showCancelButton: false,
                                    confirmButtonColor: "#121c4a",
                                    confirmButtonText: "Lanjut Ke Tes Soal",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '<?= base_url("soal") ?>'
                                    }
                                })
                            }
                        }
                    });
                }
            });

        })
    })
</script>
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
<!-- Main content -->
<div class="main-content" id="panel">
  <!-- Topnav -->
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url('assets/img/dashboard/logo2.png') ?>">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold ml-3">PT. NUSANTARA</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <!-- Dropdown header -->
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
              </div>
              <!-- List group -->
              <div class="list-group list-group-flush">
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url('assets/template/') ?>img/theme/team-1.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url('assets/template/') ?>img/theme/team-2.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url('assets/template/') ?>img/theme/team-3.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>5 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url('assets/template/') ?>img/theme/team-4.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="<?= base_url('assets/template/') ?>img/theme/team-5.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>3 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- View all -->
              <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-ungroup"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
              <div class="row shortcuts px-4">
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                    <i class="ni ni-calendar-grid-58"></i>
                  </span>
                  <small>Calendar</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                    <i class="ni ni-email-83"></i>
                  </span>
                  <small>Email</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                    <i class="ni ni-credit-card"></i>
                  </span>
                  <small>Payments</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                    <i class="ni ni-books"></i>
                  </span>
                  <small>Reports</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                    <i class="ni ni-pin-3"></i>
                  </span>
                  <small>Maps</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                    <i class="ni ni-basket"></i>
                  </span>
                  <small>Shop</small>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url('assets/template/') ?>img/theme/team-4.jpg">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <!-- Header -->

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
                <h3 class="mb-0">Harap isi sesuai dengan diri anda</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="<?= base_url('soal/submit'); ?>" id="formRegist" enctype="multipart/form-data" method="post">
              <div class="pl-lg-4 tabcontent" id="tab1">
                <p>Silahkan pilih Iya/Tidak dan berikan penjelesan pada setiap pernyataan dibawah ini</p>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table custom-table">
                      <thead>
                        <th width="50%">Pertanyaan</th>
                        <th width="10%">Iya</th>
                        <th width="10%">Tidak</th>
                        <th width="30%">Penjelasan/Keterangan</th>
                      </thead>
                      <tbody>
                        <?php foreach ($soal as $s) : ?>
                          <input type="hidden" name="id_soal[]" id="" value="<?= $s['id_soal']; ?>">
                          <tr>
                            <td width="50%">
                              <p><?= $s['isi_soal']; ?></p>
                            </td>
                            <td>
                              <label class="radio-container">
                                <input type="radio" name="pg<?= $s['id_soal'] ?>" value="iya" required/>
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td>
                              <label class="radio-container">
                                <input type="radio" name="pg<?= $s['id_soal'] ?>" value="tidak" required/>
                                <span class="checkmark"></span>
                              </label>
                            </td>
                            <td width="30%">
                              <textarea name="essay[]" id="" class="form-control"></textarea>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <button class="btn btn-success w-100">Kirim Jawaban</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
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
              console.log(res)
              if (res.status === 'error') {
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
                })
              }
            }
          });
        }
      });

    })
  })
</script>
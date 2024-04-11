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
                <th width="5%">No</th>
                <th width="20%">Soal</th>
                <th width="20%">Jawaban A</th>
                <th width="20%">Jawaban B</th>
                <th width="20%">Jawaban C</th>
                <th width="20%">Jawaban D</th>
                <th width="20%">Kunci Jawaban</th>
                <th width="10%">Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($pg as $s) : ?>
                  <tr>
                    <td>
                      <span class="btn btn-disabled"><?= $i++; ?></span>
                    </td>
                    <td>
                      <?= $s['soal_pg']; ?>
                    </td>
                    <td>
                      <?= $s['a'] ?>
                    </td>
                    <td>
                      <?= $s['b'] ?>
                    </td>
                    <td>
                      <?= $s['c'] ?>
                    </td>
                    <td>
                      <?= $s['d'] ?>
                    </td>
                    <td>
                      <?= $s['kunci_jawaban'] ?>
                    </td>
                    <td>
                      <a href="#" data-id="<?= $s['id_pg'] ?>" class="btn btn-sm btn-primary btn-edit">Edit</a>
                      <a href="#" data-id="<?= $s['id_pg']; ?>" style="display:none;" class="btn btn-sm btn-success btn-simpan">Simpan</a>
                      <a href="#" data-id="<?= $s['id_pg']; ?>" class="btn btn-danger btn-sm btn-hapus">Hapus</a>
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
    <div class="modal-dialog modal-xl" role="document">
      <form action="<?= base_url('admin/savePG'); ?>" method="POST">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              <label for="">Soal</label>
              <input type="text" class="form-control" name="soal" id="soal">
              <input type="hidden" class="form-control" name="id_pg" id="id_pg">
            </div>
            <div class="mb-2">
              <label for="">Jawaban A</label>
              <input type="text" class="form-control" name="a" id="a">
            </div>
            <div class="mb-2">
              <label for="">Jawaban B</label>
              <input type="text" class="form-control" name="b" id="b">
            </div>
            <div class="mb-2">
              <label for="">Jawaban C</label>
              <input type="text" class="form-control" name="c" id="c">
            </div>
            <div class="mb-2">
              <label for="">Jawaban D</label>
              <input type="text" class="form-control" name="d" id="d">
            </div>
            <div class="mb-2">
              <label for="">Kunci Jawaban</label>
              <select class="form-control" name="kunci" id="kunci">
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
              </select>
            </div>
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
        var id = $(this).data('id')
        var modal = $('.modal')
        var urlUpdate = "<?= site_url('admin/updatePG') ?>"
        $.ajax({
          url: "<?= site_url('admin/getPG') ?>",
          method: "POST",
          data: {
            id
          },
          success: function(res) {
            var res = JSON.parse(res)
            modal.find('#soal').val(res.soal_pg)
            modal.find('#id_pg').val(res.id_pg)
            modal.find('#a').val(res.a)
            modal.find('#b').val(res.b)
            modal.find('#c').val(res.c)
            modal.find('#d').val(res.d)
            modal.find('#kunci').val(res.kunci_jawaban)

            modal.find('form').attr('src', urlUpdate)
          }
        })
        $('.modal').modal('show')
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
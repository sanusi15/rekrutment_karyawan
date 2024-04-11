<!-- Footer -->
<footer class="footer pt-0">

</footer>
</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url('assets/template/') ?>vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/template/') ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/template/') ?>vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url('assets/template/') ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url('assets/template/') ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="<?= base_url('assets/template/') ?>js/argon.js?v=1.2.0"></script>
<script src="<?= base_url('assets/') ?>js/sweetAlert2.js"></script>
<script>
    $('#btn_login').click(function() {
        window.location.href = '<?= base_url("login") ?>'
    })
</script>
<script>
    $(function() {
        var flash = $('.flashdata').data('flash')
        if (flash != undefined) {
            Swal.fire({
                title: "Berhasil",
                text: flash,
                imageUrl: '<?= base_url('assets/img/dashboard/vector3.png') ?>',
                imageWidth: 200,
                imageHeight: 200,
                imageAlt: "Custom image",
                confirmButtonColor: "#121c4a",
                confirmButtonText: "Mengerti",
            });
        }
    })
</script>
</body>

</html>
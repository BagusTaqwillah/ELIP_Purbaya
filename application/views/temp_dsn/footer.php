<style>
    .py-4 {
        background-image: linear-gradient(45deg,rgba(0, 0, 0, 1), <?php echo $kontrol['warna_dosen']?>);
    }
</style>
</main>
<footer class="py-4  mt-auto ">
    <div class="container-fluid px-4 ">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; E-LIP 20<?= date('y') ?></div>
        </div>
    </div>
</footer>
<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      
    </script>
</div>
</div>
<script src="<?= base_url('vendor/sb_admin/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('vendor/sb_admin/') ?>js/scripts.js"></script>
<script src="<?= base_url('vendor/bootstrap/js/popper.min.js') ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?=base_url('vendor/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('vendor/datatables/datatables-demo.js')?>"></script>


</body>

</html>
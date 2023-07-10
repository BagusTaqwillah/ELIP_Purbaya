</main>
<style>
      .py-4 {
        background-image: linear-gradient(45deg,rgba(0, 0, 0, 1), <?php echo $kontrol['warna_mahasiswa']?>);
    }
</style>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; E-LIP 20<?= date('y') ?></div>
        </div>
    </div>
</footer>
</div>
</div>
<style>
</style>
<script>
    const btn = document.querySelector('#checkbox')
    const body = document.body

    function change() {
        btn.checked ? body.classList.add("dark") : body.classList.remove("dark")
    }

    btn.addEventListener('change', change)
</script>
<script src="<?= base_url('vendor/sb_admin/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('vendor/sb_admin/') ?>js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url('vendor/sb_admin/') ?>js/datatables-simple-demo.js"></script>
</body>

</html>
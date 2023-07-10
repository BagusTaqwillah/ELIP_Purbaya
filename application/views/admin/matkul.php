<style>
    .button{
        width: 100%;
    }
</style>
<div class="container px-4">
    <script>
        <?php if ($this->session->flashdata('swal_icon')) { ?>
              Swal.fire({
                  icon: '<?= $this->session->flashdata('swal_icon') ?>',
                  title: '<?= $this->session->flashdata('swal_title') ?>',
                  text: '<?= $this->session->flashdata('swal_text') ?>',
              })
          <?php } ?>
    </script>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="text-center">Manage Matkul</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                            <a href="<?=base_url('admin/Matkul_a/semester_1')?>" class="button btn btn-primary btn-sm mt-3 text-light">Semester 1</a>
                            <a href="<?=base_url('admin/Matkul_a/semester_2')?>" class="button btn btn-primary btn-sm mt-3 text-light">Semester 2</a>
                            <a href="<?=base_url('admin/Matkul_a/semester_3')?>" class="button btn btn-primary btn-sm mt-3 text-light">Semester 3</a>
                            <a href="<?=base_url('admin/Matkul_a/semester_4')?>" class="button btn btn-primary btn-sm mt-3 text-light">Semester 4</a>
                            <a href="<?=base_url('admin/Matkul_a/semester_5')?>" class="button btn btn-primary btn-sm mt-3 text-light">Semester 5</a>
                            <a href="<?=base_url('admin/Matkul_a/semester_6')?>" class="button btn btn-primary btn-sm mt-3 text-light">Semester 6</a>
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card  p-3">
            <?php $this->load->view('admin/form_matkul')?>
        </div>
        </div>
    </div>
</div>

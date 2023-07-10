<style>
   img{
       border-radius: 10px;
   }
    .card .warning{
        background-color: white;
        border-radius: 20px;
        border-left: 5px solid red;
    }
    .icon{
        color: red;
    }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h3>Backup Database</h3>
                </div>
            </div>
            <div class="row konten">
                <div class="col-md-4">
                    <img src="<?=base_url()?>assets/img/db.jpg" alt="" width="100%">
                </div>
                <div class="col-md-8">
                    <div class="card p-3">
                        <div class="card p-3 warning"> <i class="fas fa-exclamation-circle fa-2x icon"></i><p> Hati-hati dalam membackup database, data yang di di backup sebelumnya tidak menambah data yang terkini</p></div>
                    </div>
                    <a href="<?=base_url('admin/Admin/proses_backup')?>" class="btn btn-success mt-2"><i class="fas fa-file-archive fa-2x"></i>&nbsp; Backup Sekarang</a>
                </div>
            </div>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
  <?php if($this->session->flashdata('swal_icon')) {?>
            Swal.fire({
                icon : '<?=$this->session->flashdata('swal_icon')?>',
                title : '<?=$this->session->flashdata('swal_title')?>',
            })

        <?php }?>
</script>
<div class="container ">
  <h3 class="mt-3 text-center"><?= $judul ?></h3>
  <div class="row">
    <div class="col-md-8 mt-3 ">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><? $judul ?></h5>

          <div class="card-tools">
            <div class="btn-group">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="
                  <?php 
                    if ($user['role_id'] == 1) {
                      $link="edit_profil_mhs";
                    } else if($user['role_id']==2){
                      $link="edit_profil_dsn";
                    }else{
                      $link="edit_profil_adm"; 
                    }
                    ?>
                  <?= base_url($link) ?>
                  ">Edit Profil</a>
                  <a class="dropdown-item" href="
                  <?php 
                    if ($user['role_id'] == 1) {
                      $pass="ubah_password_mhs";
                    } else if($user['role_id']==2){
                      $pass="ubah_password_dsn";
                    }else{
                      $pass="ubah_password_adm";
                    }
                    ?>
                  <?= base_url($pass) ?>
                  ">Ubah Password</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <d iv class="card-body bg-dark text-light">
          <div class="container">
            <div class="row">
              <div class="col">
                <img class="rounded-circle" src="<?= base_url('assets/profil/') . $user['img'] ?>" alt="" width="100%" height="100%">
              </div>
              <div class="col">
                <h4><?= $user['nama'] ?></h4>
                <p><small>Nim :<?= $user['identitas'] ?></small></p>
                <p><small>Email :<?= $user['email'] ?></small></p>
                <p><small>No Hp :<?= $user['no_hp'] ?></small></p>
                <?php if ($user['role_id']==1) { ?>
                  <p><small>Kelas :<?= $mhs['kelas'] ?></small></p>
                <p><small>Semester :<?= $mhs['semester'] ?></small></p>
                <?php }?>
              </div>
            </div>
          </div>
        </d>
        <!-- ./card-body -->
        <div class="card-footer">
          <?php
          date_default_timezone_set('asia/jakarta');
          $hari = date('D-M-Y');
          ?>
          <small>Login pada <?= $hari ?></small>
          <!-- /.row -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <?php if ($user['role_id']==1) { ?>   
      <div class="col mt-3">
        <div class="card p-3">
          <h5> Update Kelas</h5>
          <form action="<?=base_url("Mahasiswa/update_kelas")?>" method="post">
            <div class="form-group">
              <label for="">Kelas</label>
              <select name="kelas" id="" class="form-select">
                <?php foreach($kelas as $kls) {?>
                <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                <?php };?>
              </select>
            </div>
            <div class="form-group">
              <label for="">semester</label>
              <select name="semester" id="" class="form-select">
                <?php foreach($semester as $smt) {?>
                <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                <?php }?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">update</button>
          </form>
        </div>
      </div>
   <?php }?>
  </div>
</div>


<style>
    .p-3{
        background-color: blue;
        border-radius: 50%;
        width: 55px;
        height:60px;
        color:white;
    }
    .tugas{
        box-shadow: 0px 0px 4px rgba(0,0,0,0.2);
    }
</style>
<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="p-3"><i class="fa-solid fa-clipboard-list fa-2x rounded-circle icon"></i></div>
            <h3><?=$isi_tugas['judul']?></h3>
            <small><?=$user['nama']?></small>
            <hr>
            <p><?=$isi_tugas['deskripsi']?></p>
            <hr>
            <div>
               <a href="<?=base_url('assets/tugas/')?><?=$isi_tugas['lampiran']?>" class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Lampiran</a>
            </div>
           
        </div>
        <div class="col-md-4">
        <div class="card mb-2">
                <div class="card-header">
                    Note
                </div>
                <div class="card-body">
                    <p>Dedline</p>
                <p class="text-danger"><b><?php $tanggal=$isi_tugas['tenggat'];echo date('d F Y / H:i',strtotime($tanggal))?></b></p>
            </div>
            </div>

        <?php
        // if ($approve['nama_mhs']==null||$approve['mk']!=$isi_tugas['nama_mk']||$approve['tgl_kirim']<=$waktu) {
        //     echo"terkirim";
        // }else{
        //     echo"belum ngirim";
        // }
        date_default_timezone_set('Asia/Jakarta');
        $waktu=date('Y-m-d H:i:s');
        $telat=$isi_tugas['tenggat'];
        $last=new DateTime($telat);
        $now=new DateTime($waktu);
        $last->format(DateTime::ATOM) . PHP_EOL;
        $now->format(DateTime::ATOM) . PHP_EOL;
        $date = $last->diff($now);
        if ($waktu>=$telat) { ?>
            <div class="container">
            <div class="row">
                <div class="col"><i class="fa-solid fa-circle-info fa-1x text-danger"></i><p class="text-danger">Anda telat tidak bisa kirim tugas segera konfirmasi dosen</p></div>
            </div>
            <div class="row">
              <div class="col">
              <a href="cek.html" class="text-success"><i class="fa-brands fa-whatsapp fa-3x"></i></a>
              </div>
            </form>
            </div>
            </div>
       <?php }else{ ?>
            <div class="card p-2 tugas">
            <h4 class="text-center">Jawaban Anda</h4>
         <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="nama_mhs" value="<?=$mhs['nama_mahasiswa']?>">
            <input type="hidden" name="kelas" value="<?=$mhs['kelas']?>">
            <input type="hidden" name="semester" value="<?=$mhs['semester']?>">
            <input type="hidden" name="nama_mk" value="<?=$isi_tugas['nama_mk']?>">

            <!-- <div class="form-group">
                <label for="">nama anda</label>
                <input type="text" class="form-control" name="nama_mhs">
                <small class="text-danger"><?=form_error(`nama_mhs`)?></small>
            </div>
            <div class="form-group">
                <label for="">kelas</label>
                <input type="text" class="form-control" name="nama_kelas">
                <small class="text-danger"><?=form_error(`nama_mhs`)?></small>
            </div> -->
            
            <?php  if ($approve['nama_mhs']==$mhs['nama_mahasiswa']||$approve['mk']==$isi_tugas['nama_mk']) { ?>
                <div class="form-group">
                    <label for="">upload jawaban</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Kirim" class="btn btn-primary" width="100%">
                </div>
            <?php }else{?>
                <div class="send text-center">
                    <i class="fa-regular fa-circle-check fa-3x" style="color: #21d42d;"></i>
                    <p>sudah terkirim</p>
                </div>
            <?php }?>
         </form> 
         </div> 
       <?php }?> 
        </div>
    </div>
</div>
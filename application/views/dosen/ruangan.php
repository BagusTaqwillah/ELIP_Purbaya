<style>
    *{
        padding: 0;
        margin: 0;
    }
    .alert{
        background-color: silver;
        border-left: 5px solid purple;
    }
    .hijau{
        background-color: green;
        width: 10px;
        height: 10px;
    }
    a{
        text-decoration: none;
    }
</style>
<div class="container-fluid px-4">
    <div class="container">
    <div class="ruang mt-3">
        <h4>List Pemakain Ruang</h4>
        <div class="alert">
            setiap dosen yang memakai dan meninggalkan ruangan harap pencet tombol ruangan dulu
            <div class="sample">
            <p> <b>Keterangam Sample : </b> </p>
            <span class="badge bg-success">ruangan kosong</span>
            <span class="badge bg-danger">ruangan sedang di pakai</span>
            </div>
        </div>
        <div class="card p-3">
            <div class="container">
                <div class="row">
                    <?php foreach($ruang as $r): ?>
                    <?php
                    date_default_timezone_set("Asia/Jakarta");
                     if ($r['status']==0) {
                       $ket="bg-success text-white";
                       $status="Belum Di pakai";
                       $waktu=$r['waktu'];
                    }else{
                        $ket="bg-danger text-white";
                        $status="Di pakai";
                        $waktu= $r['waktu'];
                     }    
                        
                    ?>
                    <div class="col-md-2 text-dark">
                        <a href="<?=base_url('Dosen/pakai_ruangan/')?><?=$r['id_ruang']?>">
                        <div class="card text-center mt-2 <?=$ket?> p-2">
                        <i class="fa-solid fa-landmark fa-2x"></i>
                        <h5><?=$r['nama_ruang']?></h5>
                        <small><?=$status?> <span class="badge bg-dark text-light"><?=$waktu?></span></small>
                        </div>
                    </a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
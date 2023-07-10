<style>
    a{
        text-decoration: none;
        color: white;
    }
    .kelas{
        background-image: linear-gradient(60deg,rgba(0,0,0,1),rgb(0, 16, 46),<?php echo $kontrol['warna_mahasiswa']?>);
    }
</style>
<div class="container">
    <div class="row mt-3">
        <?php foreach($kelas as $k):?>
        <div class="col-md-3 text-center ">
            <a href="<?=base_url('tmk')?>/<?=$k['semester']?>">
            <div class="kelas mt-2  p-2">
                <i class="fas fa-university fa-2x"></i>
                <h3><?=$k['nama_kelas']?></h3>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>
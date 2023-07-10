<style>

a{
        text-decoration: none;
        color: white;
    }
    .kelas{
        background-image: linear-gradient(60deg,rgba(0,0,0,1),rgb(0, 16, 46),<?php echo $kontrol['warna_mahasiswa']?>);
    }
</style>
<div class="container mt-4">
    <div class="row">
        <?php foreach($semester1 as $s1):?>
            <div class="col-md-3 text-center">
                <a href="<?=base_url('')?>t/<?=$s1['nama_kelas']?>">
                <div class="kelas mt-2  p-2">
                    <i class="fas fa-university fa-2x"></i>
                    <h3><?=$s1['nama_kelas']?></h3>
                </div>
             </a>
            </div>
            <?php endforeach;?>
    </div>
</div>
<style>
    .kelas{
        text-decoration: none;
        background-color: <?php echo $kontrol['warna_dosen']?>;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }
</style>
<?php
if ($semester1 == false) {
   echo" kelas belum tersedia";
}

?>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <?php foreach($semester1 as $s1):?>
            <a href="<?=base_url('')?>dp/<?=$s1['nama_kelas']?>" class="kelas"><?=$s1['nama_kelas']?></a>
            <?php endforeach;?>
        </div>
    </div>
</div>
<style>
    .kelas{
        text-decoration: none;
        background-color: <?php echo $kontrol['warna_mahasiswa']?>;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }
</style>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <?php foreach($semester1 as $s1):?>
            <a href="<?=base_url('')?>mks/<?=$s1['nama_kelas']?>" class="kelas"><?=$s1['nama_kelas']?></a>
            <?php endforeach;?>
        </div>
    </div>
</div>
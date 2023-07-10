<style>
    a{
        text-decoration: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <h3 class="text-center p-3">Matkul <?=$judul?></h3>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php foreach($materi_mk as $mm ) :?>
                                <?php if($mm['kelas']==$mhs['kelas']){?>
                                    <a href="<?=base_url('mhs_new/Matkul/detail_materi')?>/<?=$mm['id_materi']?>">
                                    <div class="card mb-2"><?=$mm['judul']?></div>
                                    </a>
                                <?php }?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
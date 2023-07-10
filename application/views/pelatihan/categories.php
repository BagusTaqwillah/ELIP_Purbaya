<style>
    .data{
        background-color: silver;
        margin: auto;
        margin-top: 5px;
    }
    a{
        text-decoration: none;
    }
    .isi{
        display: flex;
        justify-content:space-between;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<div class="container-fluid mt-3">
    <h3 style="font-family: 'Roboto', sans-serif;"><?= $pelatihan ?></h3>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    List Pelatihan
                </div>
                <div class="card-body">
                <?php  $i=1; foreach($namePelatihan as $dp) : ?>
                 <?php
                    if ( $dp['status']==0) {
                        $akses="hidden";
                    }else{
                        $akses="";
                    }
                    
                    ?>
                <a href="<?=base_url('pelatihan/Categories/data_pelatihan')?>/<?=$dp['id_data']?>" <?=$akses?>>
                <div class="card data p-2 bg-light">
                    <div class="isi">
                        <div class="cl">
                            <p class=""><i class="fa-solid fa-folder-closed"></i> Pelatihan Pertemuan <?=$i++?></p>
                        </div>
                        <div class="cl">
                          <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <!-- <p><?= $dp['judul'] ?></p> -->
                </div>
                </a> 
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if (!$user==null) { ?>
<style>
    .pelatihan .card,
    img {
        border-radius: 10px;
    }

     .pelatihan h5 {
        margin-top: -70px;
        background-color: rgba(255, 255, 255, 0.9);
        padding-left: 10px;
        box-shadow: 1px 1px 5px black;
        padding: 5px;
    }

    .pelatihan a {
        text-decoration: none;
        color: black;
    }

    p small {
        position: absolute;
        margin-top: -160px;
        color: white;
        padding-left: 10px;
        background-color: blue;
        padding-right: 10px;
        border-radius: 0 5px 5px 0;
    }
    .detail:hover{
        opacity: 0.6;
    }
</style>
<div class="container-fluid px-4">
    <div class="header mt-2">
        <h3>Skema Pelatihan Yang Tersedia</h3>
        <p>kalian dapat mengikuti pelatihan yang tersedia sebagai pembelajaran</p>
    </div>
    <div class="pelatihan">
        <div class="row">
        <?php foreach($pelatihan as $plt): ?>
           
            <div class="col-md-3">
                    <a  href="<?= base_url(); ?>c/<?= $plt['nama_pelatihan']; ?>" class="detail">
                    <div class="card mt-3">
                            <img src="<?= base_url('assets/img/pelatihan/') ?><?= $plt['img'] ?>" alt="" width="100%">
                            <p><small><?php $tanggal = $plt['tgl_buat'];
                                        echo date('d F Y ', strtotime($tanggal)) ?></small></p>
                            <h5><a href=""><?= $plt['nama_pelatihan'] ?></a></h5>
                        </div>
                    </a>     
                </div>

                
          <?php endforeach;?>
        </div>
    </div>
</div>
<?php }else{
 
 redirect('login','refresh');
    
    
}?>
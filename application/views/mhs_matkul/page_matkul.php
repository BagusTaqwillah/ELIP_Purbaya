<style>
    .card.mk{
        background-image: url('<?=base_url("assets/img/mk/bg_mk4.jpg")?>');
        background-size: cover;
        width: 100%;
        height: 150px;
        padding: 50px;
        margin: 10px;
        border-radius: 10px;
        box-shadow:  8px 8px 16px #bababa,
             -8px -8px 16px #ffffff;
        color: orange;
        text-decoration: none;
        font-size: 20px;
        text-shadow: 20px 20px 20px black;
        z-index: 1;
    }
    .card.mk::before{
        position: absolute;
        content: "";
        bottom: 0;
        width: 100%;
        height: 150px;
        padding: 50px;
        margin-left: -50px;
        border-radius: 10px;
        background-image: linear-gradient(to right,rgba(0,0,0,0.1),rgb(85, 8, 85));
    }
    .card:hover{
        opacity: 0.5;
    }
    .card.mk p{
        color: white;
        position: relative;
        z-index: 1;
        text-decoration: none;
        font-size: 20px;
        text-shadow: 2px 2px black;
    }
    .card-header{
        background-image: linear-gradient(45deg,rgba(0, 0, 0, 1),rgb(85, 8, 85));
        color: white;
    }
    @media(max-width:767.98px){
        .card .mk{
        background-image: url('<?=base_url("assets/img/mk/bg_mk2.jpg")?>');
        background-size: cover;
        display: flex;
        justify-content: center;
        width: 50px;
        height: 150px;
        padding: 50px;
        margin: 10px;
        border-radius: 10px;
        box-shadow:  8px 8px 16px #bababa,
             -8px -8px 16px #ffffff;
              
            }
    }
</style>
<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col mt-2" >
            <h3>Mata Kuliah <?= $mhs['semester']?></h3>
        </div>
    </div>
    <div class="row">
        <?php foreach($matkul as $mk) :?>
            <?php if ($mhs['semester']==$mk['semester']) { ?>
                <div class="col-md-4">
                    <a href="<?=base_url('matkul/')?><?=$mk['nama_mk']?>" class="card mk">
                        <p><?=$mk['nama_mk']?></p>
                    </a>
                </div>
            <?php }?>
        <?php endforeach;?>

    </div>
</div>
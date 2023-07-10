<style>
    .card.mk{
        background-image: url('assets/img/mk/bg_mk4.jpg');
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
        background-image: linear-gradient(to right,rgba(0, 0, 0,0.5),<?php echo $kontrol['warna_mahasiswa']?>);
    }
    .card:hover{
        opacity: 0.5;
    }
    .card.mk p{
        color: white;
        position: relative;
        z-index: 1;
        text-decoration: none;
        font-size: 15px;
        text-shadow: 2px 2px black;
    }
    .card-header{
        background-image: linear-gradient(45deg,rgba(0, 0, 0, 1),<?php echo $kontrol['warna_mahasiswa']?>);
        color: white;
    }
    .conten{
        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: 
            scaleX(-1);
            transform: scaleX(-1);
            filter: Fliph;
            -ms-filter:"FlipH";
    }
    @media(max-width:767.98px){
        .card .mk{
        background-image: url('assets/img/mk/bg_mk1.jpg');
        background-size: cover;
        display: flex;
        justify-content: center;
        width: 50px;
        height: 150px;
        margin: 10px;
        border-radius: 10px;
        box-shadow:  8px 8px 16px #bababa,
             -8px -8px 16px #ffffff;
              
            }
    }
</style>
<div class="container-fluid px-4">
    <div class="row">
        <div class="col mt-2" >
            <h3>Penugasan Semester 1</h3>
        </div>
    </div>
    <div class="row mt-4">
            <div class="col-md-3">
            <div class="form">
                <div class="card">
                    <div class="card-header">
                        Note
                    </div>
                    <div class="card-body">
                    <p>Dosen Diharapkan Memberi Tugas Sesuai Mata Kuliah Yang Diampu</p>
                    <hr> 
                    <img class="conten"src="<?=base_url('assets/img/mhs/slide2.jpg')?>" alt="" srcset="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container">
                <div class="row">
                    <?php foreach($matkul  as $mk ):?>
                    <div class="col-md-4">
                        <a href="<?=base_url('m_algoritma1')?>" class="card mk">
                             <p><?=$mk['nama_mk']?></p>
                        </a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
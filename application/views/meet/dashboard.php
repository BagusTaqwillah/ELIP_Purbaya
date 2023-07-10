<style>
    .card-meet{
        border-radius:20px;
        box-shadow:0px 0px 5px rgba(0,0,0,0.3);
    }
    .card-body{
        background-color:rgb(255, 238, 140,0.5);
        border-radius:20px 20px 0 0;
    }
    lottie-player{
        margin-top:-20px;
    }
    .slug{
    width: 100%;
    border-left: 10px  solid orange;
    padding: 8px 5px 8px 10px;
    color: white;
    background-image: linear-gradient(to right,rgb(0, 0, 0),rgba(0, 0, 0, 0.486),rgba(255, 255, 255, 0));
    }

</style>
<div class="container mt-3 px-4">
    <div class="row">
        <div class="col">
            <h3>Gabung Meet</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="slug">
                <p>Meet Akan Muncul Dibawah ini <br> Setelah Dosen Membuat Room </p>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if ($meet==NULL) {
            echo"meeting belum tersedia ...";
        }?>
            <?php foreach($meet as $m):?>
                <?php  if ($mhs['kelas']==$m['kelas']) {?>         
            <div class="col-md-3">
                <div class="card text-center card-meet">
                    <div class="card-body">
                        <h5 class="card-title"><?=$m['nama_dosen']?></h5>
                        <p class="card-text"><?=$m['nama_mk']?></p>
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_rsgxuwx0.json" background="transparent"  speed="1"  style="width: 70%; height: 70%;" loop  autoplay></lottie-player>
                    </div>
                    <div class="card-footer">
                        <a href="<?=base_url('Meeting/meet/')?><?=$m['link_url']?>" class="btn btn-primary">
                            Join Meet</a>
                    </div>
               </div>   
            </div>
              <?php }?>
            <?php endforeach;?>
    </div>
</div>
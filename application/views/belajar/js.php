<style>
    .isi{
        width: 80%;
        margin: auto;
    }
    .teks{
        text-align: left;
    }
    .tutor h5{
       background-color:rgba(13, 13, 13, 0.75); 
       padding: 5px;
       color: white;
       text-shadow: 1px 1px black;
       padding-left: 10px;
       cursor: pointer;
       border-radius: 5px;
    }
    .tutor h5:active{
        background-color: orangered;
        transition: 0.5s;
    }
    .tutor a{
        text-decoration: none;
    }
    .pane{
        padding-bottom: 50px;
    }
    @media(max-width:780px){
        .isi{
        width: 100%;
        margin: auto;
    }
    }
</style>
<div class="container-fluid px-4">
<div class="isi mt-4">
<div class="row">
    <div class="col">
        <div class="card pane" width="100%">
            <div class="header p-4 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                         <i class="fa-brands fa-js fa-5x text-warning icon"></i>
                        </div>
                        <div class="col-md-9 teks">
                            <h1>Tutorial Javascript Dasar 📜</h1>
                            <small>Direkomendasikan Untuk Yang Baru Belajar </small>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="tutor">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php foreach($javascript as $js) :?>
                            <a href="<?=base_url('Belajar/detail/')?><?=$js['id_tutorial']?>"><h5> <i class="fa-brands fa-js"></i> <?=$js['judul']?></h5></a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<style>
    .isi{
        width: 80%;
        margin: auto;
    }
    .icon{
        color: blue;
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
                         <i class="icon fa-brands fa-css3 fa-5x"></i>
                        </div>
                        <div class="col-md-9 teks">
                            <h1>Tutorial CSS Dasar 🎨</h1>
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
                            <?php foreach($java as $j) :?>
                                <a href="<?=base_url('Belajar/detail/')?><?=$j['id_tutorial']?>"><h5> <i class="fa-brands fa-css3"></i> <?=$j['judul']?></h5></a>
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
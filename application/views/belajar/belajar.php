<style>
    .isi,.card{
        text-decoration: none;
        color: black;
        text-align: left;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }
    .isi .card:hover{
        box-shadow: 1px 1px 6px rgba(0,0,0,0.6);
        
    }
    @media(max-width:758px){
        .card{
            margin-top: 10px ;
        }
    }
</style>
<div class="container-fluid px-3">
    <div class="heading  mt-3">
        <div class="container">
        <h4>Rekomendasi</h4>
        <h3>Tutorial Pemograman Populer🏆 </h3>
        <p>Sebagai Referensi</p>
        </div>
    </div>
        <div class="pertama text-center mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?=base_url('Belajar/html')?>" class="isi">
                        <div class="card kartu p-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-brands fa-html5 fa-4x text-danger"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Tutorial HTML </h4>
                                        <small>tutorial Html untuk pemula yg mau belajar dari nol</small>            
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=base_url('Belajar/js')?>" class="isi">
                        <div class="card  p-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-brands fa-js fa-4x text-warning"></i>
                                    </div>
                                    <div class="col-md-10">
                                    <h4>Tutorial Javascript </h4>
                                        <small>tutorial javascript untuk pemula yg ingin tau dasarnya</small>           
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <a href="<?=base_url('Belajar/python')?>" class="isi">
                        <div class="card kartu p-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-brands fa-python fa-4x text-primary"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Tutorial Python </h4>
                                        <small>tutorial Html untuk pemula yg mau belajar dari nol</small>            
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=base_url('Belajar/php')?>" class="isi">
                        <div class="card  p-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-brands fa-php fa-4x" style="color:purple;" ></i>
                                    </div>
                                    <div class="col-md-10">
                                    <h4>Tutorial PHP </h4>
                                        <small>tutorial javascript untuk pemula yg ingin tau dasarnya</small>           
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <a href="<?=base_url('Belajar/java');?>" class="isi">
                        <div class="card kartu p-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-brands fa-java fa-4x text-danger"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Tutorial Java</h4>
                                        <small>tutorial Java untuk pemula yg mau belajar dari nol</small>            
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?=base_url('Belajar/css')?>" class="isi">
                        <div class="card  p-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                    <i class="fa-brands fa-css3 fa-4x text-primary"></i>
                                    </div>
                                    <div class="col-md-10">
                                    <h4>Tutorial CSS</h4>
                                        <small>tutorial javascript untuk pemula yg ingin tau dasarnya</small>           
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
</div>
<script>
      const btn= document.getElementById('mode')
                        btn.addEventListener('click',()=>{
                            document.body.classList.toggle('dark')
                        })
</script>
 
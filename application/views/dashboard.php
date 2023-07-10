
    <style>
        .jumbotron{
            height: 500px;
            border-radius: 0 0 20% 20%;
            background-image: url('assets/img/bg.jpg');
            background-size: cover;
            color: white;
        }
        .slug{
            margin-top: 50px;
        }
        
        .jumbotron span{ 
            color: #ffb02b;
        }
        .konten_elip{
            border-radius: 20px;
        }
        .slogan h3{
            margin-top: 50px;
            font-size: 24px;
            font-family:'Courier New', Courier, monospace;
            letter-spacing: 0.01cm;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 30px;
        }
        .about{
            margin-top: 20px;
            color: silver;
        }
        .footer{
            background-image: url('assets/img/bg.jpg');
            background-position-y: bottom;
            background-size: cover;
            color: white;
        }
        .footer_by h4{
            font-size: 20px;
            color: silver;
        }
        body{
            background-color: silver;
        }
        @media (max-width: 767.98px) { 
            .navbar-brand{
                width: 50px;
            }
            .main{
                margin-top: 120px;
            }
            .konten .col-md-2 img{
                width: 50%;
                display: flex;
                justify-content: center !important;
               
            }
            .konten .col-md-2{
                margin-bottom: 20px;
            }
        }
    </style>
    <div class="navigasi">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
    <img src="<?=base_url('assets/img/logo.png')?>" alt="" width="8%" class="navbar-brand">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pelatihan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Junior Web</a>
          <a class="dropdown-item" href="#">IOT</a>
          <a class="dropdown-item" href="#">Electronika</a>
          <a class="dropdown-item" href="#">Mobile APP</a>
          <a class="dropdown-item" href="#">Technopreauner</a>
        </div>
      </li>
        <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">About</a>
        <a class="nav-item nav-link" href="#">Kontak</a>
        <a class="btn btn-warning" href="<?=base_url('login')?>">login</a>
        </div>
    </div>
    </div>
    </nav>
    </div>
    <style>
        .pwa{
            height: 50px;
        }
        .pwa a{
            color: white;
            margin: 10px;
            
        }
        .pwa .home{
            background-color: orange;
            height: 60px;
            width: 60px;
            margin: auto;
            border-radius: 20px 20px 0 0;
        }
        .nav-link .side:hover{
            background-color: orange;
            border-radius: 100%;
            color: black;
            padding: 7px;
        }
        
    </style>
            <div class="pwa fixed-bottom  text-dark">
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item ">
                    <a class="nav-link " href="#projek"><i class="fas fa-map-marked-alt side"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link home text-dark" href="#bio"><i class="fas fa-home fa-2x"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#"><i class="fas fa-phone side"></i></a>
                </li>
            </ul>
            </div>
    <div class="jumbotron  slug">
        <div class="container ">
            <div class="row">
               <div class="col-md-6">
               <div id="typed-strings">
                <p>Typed.js is a <strong>JavaScript</strong> library.</p>
                <p>It <em>types</em> out sentences.</p>
                </div>
                <span id="typed"></span>
                <script>
                    var typed = new Typed('Hallo Teman-teman', {
                        stringsElement: '#typed-strings'
                    });
                    </script>
                <h1><span>E-Learning</span> Informatic <br> Purbaya</h1>
                website ini memberikan edukasi ataupun materi teknik informatika di lingkup politeknik purbaya guna membangun akademik yang lebih baik <br>
                <button class="btn btn-warning mt-4">Selengkapnya</button>
               </div>
               <div class="col-md-6 mt-4">
               <img src="<?=base_url('assets/img/bg_jum.png')?>" alt="" width="100%" class="jum_thumb">
               </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="row">
            <div class="col text-center p-3 mt-5">
                <h3>Apa Yang Kamu Dapatkan Di E-LIP?</h3>
            </div>
        </div>
    </div>
    <div class="konten mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="container">
                                    <div class="row mx-auto">
                                        <div class="col-md-2">
                                        <img src="<?=base_url('assets/img/icon/study.png')?>" alt="" width="100%" class="mx-auto">
                                        </div>
                                        <div class="col-md-10">
                                        <h5>Pembelajaran</h5>    
                                            <p>Kamu memperoleh pembelajaran darimanapun dan kapanpun sesuai keinginan untuk mengaksesnya</p> </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="container">
                                    <div class="row mx-auto">
                                        <div class="col-md-2">
                                        <img src="<?=base_url('assets/img/icon/free.png')?>" alt="" width="100%" class="mx-auto">
                                        </div>
                                        <div class="col-md-10">
                                        <h5>Gratis</h5>    
                                            <p>E-LIP bersifat gratis bagi mahasiswa yang ingin belajar tanpa akses berbayar</p> </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="container">
                                    <div class="row mx-auto">
                                        <div class="col-md-2">
                                        <img src="<?=base_url('assets/img/icon/pelatih.png')?>" alt="" width="100%" class="mx-auto">
                                        </div>
                                        <div class="col-md-10">
                                        <h5>Mentor</h5>    
                                            <p>Kamu di bimbing oleh dosen dan mentor2 berdasarkan pengampu prodi yang berkaitan</p> </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="container">
                                    <div class="row mx-auto">
                                        <div class="col-md-2">
                                        <img src="<?=base_url('assets/img/icon/sertifikat.png')?>" alt="" width="100%" class="mx-auto">
                                        </div>
                                        <div class="col-md-10">
                                        <h5>Sertifikat</h5>    
                                            <p>jika kamu tuntas dan menyelesaikan tugas atau membaca materi dari E-lIP maka kamu berhak di berikan sertifikat</p> </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
           
                        
                        
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?=base_url('assets/img/serv_thumb.jpg')?>" alt="" width="100%" class="konten_elip">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="silver" fill-opacity="1" d="M0,128L17.1,106.7C34.3,85,69,43,103,74.7C137.1,107,171,213,206,250.7C240,288,274,256,309,218.7C342.9,181,377,139,411,138.7C445.7,139,480,181,514,192C548.6,203,583,181,617,176C651.4,171,686,181,720,165.3C754.3,149,789,107,823,101.3C857.1,96,891,128,926,133.3C960,139,994,117,1029,106.7C1062.9,96,1097,96,1131,106.7C1165.7,117,1200,139,1234,165.3C1268.6,192,1303,224,1337,208C1371.4,192,1406,128,1423,96L1440,64L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>
    <div class="slogan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center">“Pembelajaran tidak dicapai secara kebetulan, itu harus dicari dengan semangat dan diperhatikan dengan ketekunan.”</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
          <div class="row">
            <div class="col">
                <h5>Konten</h5>
                <p>E-LIP ini memuat konten tentang pembelajaran yang di pelajari di lingkup materi kuliah kampus/p>
            </div>
            <div class="col">
            <h5>Informasi</h5>
                <p>Website E-LIP ini memberikan edukasi dan informasi tentang trend pembelajaran yang diajarkan oleh dosen kampus</p>
            </div>
            <div class="col">
                <h5>Bantuan</h5>
                <p>jika anda bingung dan kurang paham mengenai website E-Lip bisa hubungi kami lewat kontak yang sudah tersedia</p>
            </div>
          </div>
          <div class="footer_by">
            <h4 class="text-center p-4">Development | E-LIP</h4>
          </div>
        </div>
    </div>
    </div>
   
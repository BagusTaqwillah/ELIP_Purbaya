<style>
    .navbar-nav a {
        color: white;
    }

    body {
        height: 100vh;
        background-image: url('assets/img/bg/bg_page.jpg');
        background-size: cover;
    }

    body::after {
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: 0;
        content: "";
        background-image: linear-gradient(45deg, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.7), rgba(194, 12, 134, 0.784));
    }

    .container {
        position: relative;
        z-index: 1;
    }

    .slug h3 {
        margin-top: 100px;
        color: white;
        font-weight: 800;
        font-size: 34px;
        text-shadow: 2px 2px black;
        font-family: 'Yantramanav', sans-serif;
    }

    .slug p {
        color: white;
        text-shadow: 1px 1px black;
    }

    span {
        color: orange;
    }

    .navbar-brand img {
        width: 80px;
        height: 50px;
    }

    .navbar-nav .nav-link:hover {
        position: relative;
        border-bottom: 4px solid orange;
        box-sizing: border-box;
        margin-top: 5px;
        border-radius: 2px;
        color: orange;
    }

    .icon {
        color: white;
    }

    .buton:hover {
        outline: 2px solid red;
        transform: scale(1.04);
    }

    .buton {
        outline: 2px solid orange;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 8px;
        box-sizing: border-box;
        width: 130px;
        padding: auto;
        text-align: center;
        border-radius: 20px;
    }

    .kirim {
        background-color: white;
        border: none;
    }

    .sosmed {
        padding-bottom: 10px;
        display: flex;
        justify-content: center;
        gap: 50px;
    }

    .kirim {
        background-color: purple;
        color: white;
        border: 0;
        padding: 5px;
        border-radius: 5px;
        width: 80px;
    }


    @media(max-width:780.90px) {
        body {
            height: 100vh;
            background-image: url('assets/img/bg/bg_display.jpg');
            background-size: cover;
            background-position-x: center;
        }

        body::after {
            position: absolute;
            width: 100%;
            height: 100%;
            bottom: 0;
            content: "";
            background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.7), rgba(255, 0, 0, 0.37));
        }

        .nav-link a:hover {
            box-sizing: border-box;
            margin-top: 5px;
            border-radius: 2px;
            color: orange;
        }
        #navbarNavAltMarkup{
            border-radius: 20px;
            background-color: black;
            color: white;
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 10px;
        }
       .buton{
           width: 100%;
        }
        .navbar-nav .nav-link:hover {
        position: relative;
        background-color: orange;
        box-sizing: border-box;
        color: orange;
    }
    }

    .custom-shape-divider-bottom-1668179061 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }

    .custom-shape-divider-bottom-1668179061 svg {
        position: relative;
        display: block;
        width: calc(185% + 1.3px);
        height: 171px;
        transform: rotateY(180deg);
    }

    .custom-shape-divider-bottom-1668179061 .shape-fill {
        fill: #9B0055E3;
    }

    /** For tablet devices **/
    @media (min-width: 768px) and (max-width: 1023px) {
        .custom-shape-divider-bottom-1668179061 svg {
            width: calc(185% + 1.3px);
            height: 189px;
        }
      
    }

    .footer h3 {
        padding: 8px;
        position: relative;
        z-index: 2;
        color: #FFFFFF9C;
        font-size: 14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .about{
        background-color:purple;
        color: white;
        padding: 10px;
    }
    .about img{
        background-color: white;
        border-radius: 10px;
    }
  
</style>
<script>
    <?php if ($this->session->flashdata('swal_icon')) { ?>
        Swal.fire({
            icon: '<?= $this->session->flashdata('swal_icon') ?>',
            title: '<?= $this->session->flashdata('swal_title') ?>',
        })
    <?php } ?>
</script>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo_elip.png') ?>" alt="" width="100%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto ">
                <a class="nav-item nav-link text-white" href="#">Home</a>
                <a class="nav-item nav-link text-white" href="#" data-toggle="modal" data-target="#about">Abot</a>
                <a class="nav-item nav-link text-white" href="#" data-toggle="modal" data-target="#kontak">Kontak</a>
            </div>
            <div class="buton">
                <i class="fas fa-user icon"></i> <a class="text-white" href="<?= base_url('login') ?>">Login</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col text-center mt-4 slug">
            <h3 id="typedtext"></h3>
            <button class="btn btn-warning">Selengkapnya</button>
        </div>
    </div>
</div>

<div class="custom-shape-divider-bottom-1668179061">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
<div class="footer fixed-bottom">
    <h3 class="text-center">Developer | Moh.Bagus Taqwillah</h3>
</div>
<script>
    // set up text to print, each item in array is new line
    var aText = new Array(
        "Sistem Pembelajaran E-learning  Informatika<br><span> Politeknik <?= $control['nama_kampus'] ?></span>",
    );
    var iSpeed = 100; // time delay of print out
    var iIndex = 0; // start printing array at this posision
    var iArrLength = aText[0].length; // the length of the text array
    var iScrollAt = 20; // start scrolling up at this many lines

    var iTextPos = 0; // initialise text position
    var sContents = ''; // initialise contents variable
    var iRow; // initialise current row

    function typewriter() {
        sContents = ' ';
        iRow = Math.max(0, iIndex - iScrollAt);
        var destination = document.getElementById("typedtext");

        while (iRow < iIndex) {
            sContents += aText[iRow++] + '<br />';
        }
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "|";
        if (iTextPos++ == iArrLength) {
            iTextPos = 0;
            iIndex++;
            if (iIndex != aText.length) {
                iArrLength = aText[iIndex].length;
                setTimeout("typewriter()", 500);
            }
        } else {
            setTimeout("typewriter()", iSpeed);
        }
    }


    typewriter();
</script>
<!-- kontak -->
<div class="modal fade" id="kontak" tabindex="-1" role="dialog" aria-labelledby="kontakLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Kontak E-Learning Politeknik Purbaya</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <lottie-player autoplay loop mode="normal" src="https://assets1.lottiefiles.com/packages/lf20_fqbwdagm.json" style="width:100%; height:300px;">
                            </lottie-player>
                            <div class="sosmed text-center ">
                                <div class="isi"><a href=""> <i class="fas fa-brands fa-instagram fa-2x text-danger"></i></a></div>
                                <div class="isi"><a href="https://web.facebook.com/PurbayaTegal/?_rdc=1&_rdr"> <i class="fas fa-brands fa-facebook  fa-2x"></i></a></div>
                                <div class="isi"><a href="">
                                        <i class="fas fa-brands fa-whatsapp text-success fa-2x"></i></a></div>
                                <div class="isi"><a href="https://www.youtube.com/channel/UCBaeiv3mVhAf7bg_Viw6y9A">
                                        <i class="fas fa-brands fa-youtube text-danger fa-2x"></i></a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="<?= base_url('kirim_saran') ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Kritik & Saran</label>
                                    <textarea name="saran" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="kirim" type="submit">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"><img src="<?=base_url('assets/img/icon_header.png')?>" alt="" width="100%"></div>
                            <div class="col"> E-lip memiliki nilai-nilai dan tujuan yang dituangkan ke dalam visi & misi pembelajaran kampus. nilai dan tujuan tersebut diharapkan dapat menjadi landasan bagi
                                elip serta seluruh orang yang terlibat di dalamnya. yang merujuk pada akademis mahasiswa.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const player = document.querySelector("lottie-player");
    player.addEventListener("rendered", (e) => {
        //Load via URL
        player.load("https://assets3.lottiefiles.com/packages/lf20_UJNc2t.json");
        // or load via a Bodymovin JSON string/object
        player.load(
            '{"v":"5.3.4","fr":30,"ip":0,"op":38,"w":315,"h":600,"nm":"new", ... }'
        );
    });
</script>
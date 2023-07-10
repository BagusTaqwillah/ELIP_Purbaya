<style>
    .penugasan{
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: 20px;
    }
    .card{
        padding: 10px;
    }
    .bar a{
        color: black;
        text-decoration: none;
        margin-right: 10px;
    }
    .bar a:hover{
        color: blue;
    }
    .bulan{
        background-color: red;
        color: white;
        padding: 8px;
        border-radius: 21px 21px 0 0;
    }
    .data{
        border: 1px solid black;
        width: 200px;
        border-radius: 20px;
    }
    .waktu{
        font-size: 50px;
    }
   @media(max-width:767.98px){
    .penugasan{
        display: flex;
        justify-content: center;
        gap: 5px;
        padding: 10px;
        margin: 20px;
        width: 100%;
    }
   }
   .atas{
    background-color: purple;
    color: white;
   }
   .panduan a{
    text-decoration: none;
   }
   .panduan .card{
    border-right: 8px solid purple;
    border-radius: 10px;
   }
</style>
<?php
      date_default_timezone_set('Asia/Jakarta');
      $waktu=date('d');
      $mont=date('F');
      $tahun=date('Y');

        ?>
<div class="container-fluid px-4">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <script>
            <?php if($this->session->flashdata('swal_icon')){?>
                Swal.fire({
                    icon:'<?=$this->session->flashdata('swal_icon')?>',
                    title:'<?=$this->session->flashdata('swal_title')?>',  
                })
            <?php } ?>
            </script>
        </div>
    </div>
    </div>
    <div class="bar mt-2">
    <a href="#" class="mr-2"  data-toggle="modal" data-target="#exampleModal"><i class="fa-regular fa-calendar"></i> kalender</a>
    <a href="#"><i class="fa-solid fa-bullhorn"></i> informasi</a>
    </div>
    <div class="panduan mt-2">
        <a href="<?= base_url('assets/panduan/Project Pesawat.pdf')?>">
            <div class="card">
                <h4>Panduan E-LIP untuk Dosen</h4>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-md-6 text-center mt-3">
            <div class="card">
                <div class="card-header text-left">
                    Content
                </div>
                <div class="card-body">
                    <h5>Selamat Datang <?=$user['nama']?> Dosen Politeknik Purbaya</h5>
                    <img src="<?=base_url('assets/img/logo_poltek.png')?>" alt="" srcset="" width="30%">
                </div>
            </div>
        </div>
    </div>
  

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
      <div class="modal-header atas">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Tanggal Sekarang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="data text-center mx-auto">
            <div class="bulan">
                <?=$mont?>
            </div>
            <div class="waktu">
                <p><?=$waktu?></p>
            </div>
            <div class="bawah">
                <p><?=$tahun?></p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script>
    window.print();
</script> -->
<style>
    .container{
        background-color:rgb(255, 251, 0);
        width:70%;
        margin:auto;
        padding:20px;
        border:1px solid black;
    }
    .header{
        display:flex;
        justify-content:space-between;
    }
    .head{
        text-align:center;
    }
    .identitas{
        display:flex;
    }
    .profil,.akademik{
        width:50%;
    }
    .img{
        margin-left:20px;
        width:150px;
    }
    .ttd{
        display:flex;
        justify-content:space-between;
    }
    .signature-image {
      width: 200px;
      height: auto;
    }
</style>

<div class="page_krs">
    <div class="container">
        <div class="header">
            <div class="gambar">
                <img class="img" src="<?=base_url('assets/img/poltek.jpg')?>" alt="" srcset="">
            </div>
            <div class="head">
                <h3>POLITEKNIK PURBAYA</h3>
                <h5>SK MENDIKNAS NO 208/D/2002</h5>
                <p>Kampus Jl.Pancakarya No 1 Kajen-Talang-Kab.Tegal 52193</p>
                <p>Telp (0283)3447340</p>
            </div>
            <div class="slug">
                <h4>Kartu Rencana Studi (KRS)</h4>
            </div>
        </div>
        <hr>
        <div class="identitas">
            <div class="profil">
                <p>Nama : <?=$krs['nama']?></p>
                <p>Nim :2002135</p>
                <p>Prodi : <?=$krs['jurusan']?></p>
            </div>
            <div class="akademik">
                <p>Semester : <?=$krs['semester']?></p>
                <p>Tahun Akademik : <?=date('Y')?></p>
                <p>IP semester Lalu:</p>
            </div>
        </div>
        <div class="matkul">
            <table border="1" cellspacing="0" cellpadding="10" width="100%">
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Ambil</th>
                    <th>Status</th>
                </tr>
                <?php $i=1; foreach($matkul as $mk):?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$mk['nama_mk']?></td>
                    <td><?=$mk['sks']?></td>
                    <td>&#10003;</td>
                    <td>Baru</td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
        <div class="ttd">
            <div class="dosen">
            <img src="<?=$krs['ttd_dpa']?>" alt="belum di ttd" class="signature-image" width="50%">
                <p>(----------------)</p>
                <p>Dosen Wali</p>
            </div>
            <div class="mhs">
            <img src="<?=$krs['ttd_mhs']?>" alt="" class="signature-image">
                <p>(----------------)</p>
                <p>Mahasiswa</p>
            </div>
        </div>
        <div class="catatan">
            <p>Catatan :</p>
            <ol type="1">
                <li>Mata Kuliah dengan nila D dan E harus di ulang</li>
                <li>Mahasiswa Bertanggung jawab atas pengisian KRS</li>
            </ol>
        </div>
    </div>
</div>


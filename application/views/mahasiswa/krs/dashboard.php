<div class="container-fluid px-4">
<script>
    <?php if($this->session->flashdata('swal_icon')){?>
        Swal.fire({
            icon:"<?=$this->session->flashdata('swal_icon')?>",
            title:"<?=$this->session->flashdata('swal_title')?>",
        })
    <?php }?>
</script>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-image: linear-gradient(60deg,rgba(0,0,0,1),rgb(0, 16, 46),<?php echo $kontrol['warna_mahasiswa']?>);
 
}
.card{
    box-shadow:0px 0px 8px rgba(0,0,0,0.2);
}

/* Style the buttons inside the tab */
.tab button {
    color:white;
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  margin-bottom:10px;
}
table{
    overflow: scroll; 
}
.pad{
    border:1px solid rgba(0,0,0,0.3);
    border-radius:10px;
}

</style>
   <?php if ($user['role_id']==1) { ?>
    <h2 class="mt-3">Halaman KRS</h2>
            <p>pilih sesuai semester anda</p>

            <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'semester1')">Semester 1</button>
            <button class="tablinks" onclick="openCity(event, 'semester2')">Semester 2</button>
            <button class="tablinks" onclick="openCity(event, 'semester3')">Semester 3</button> 
            <button class="tablinks" onclick="openCity(event, 'semester4')">Semester 4</button> 
            <button class="tablinks" onclick="openCity(event, 'semester5')">Semester 5</button> 
            <button class="tablinks" onclick="openCity(event, 'semester6')">Semester 6</button> 
            </div>

            <div id="semester1" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card p-4 mt-3 mb-3">
                              <h4>Semester 1</h4>  
                            <form action="<?=base_url("mhs/KRS/sendKrs")?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="" class="form-select">
                                        <?php foreach($kelas as $kls ):?>
                                        <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Semester</label>
                                    <select name="semester" id="" class="form-select">
                                    <?php foreach($semester as $smt ):?>
                                        <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan">
                                </div>
                                <small class="text-small text-danger mt-3">* Centang yang perlu</small>
                                <table class="table table-bordered mt-3 table-striped">
                                    <tr>
                                        <th>Matkul</th>
                                        <th>Sks</th>
                                        <th>Ambil</th>
                                    </tr>
                                    <?php foreach ($matkul as $mk) { ?>
                                        <?php if ($mk['semester']=="semester_1") { ?>
                                        <tr>
                                            <td><?=$mk['nama_mk']?></td>
                                            <td><?=$mk['sks']?></td>
                                            <td><input type="checkbox" name="krs" id="" value="ambil"></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                </table>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="ttd">
                                        <div id="signature-pad">
                                            <p>Tanda Tangan Di Bawah</p>
                                            <canvas class="pad"></canvas>
                                            </div>
                                            <button class="btn btn-primary" onclick="saveSignature()">Simpan Tanda Tangan</button>

                                            <script src="https://unpkg.com/signature_pad"></script>
                                            <script>
                                                var canvas = document.querySelector("canvas");
                                                var signaturePad = new SignaturePad(canvas);

                                                function saveSignature() {
                                                    if (signaturePad.isEmpty()) {
                                                    alert("Tanda tangan belum diisi.");
                                                    } else {
                                                    var signatureData = signaturePad.toDataURL();
                                                    // Kirim data tanda tangan ke server atau lakukan tindakan lain yang diinginkan
                                                    // Kirim data tanda tangan ke server
                                                        var xhr = new XMLHttpRequest();
                                                        xhr.open('POST', '<?=base_url('mhs/KRS/ttdMhs')?>', true);
                                                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                                        xhr.onreadystatechange = function() {
                                                            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                                            console.log(xhr.responseText);
                                                            }
                                                        };
                                                        xhr.send('signatureData=' + encodeURIComponent(signatureData));
                                                    console.log(signatureData);
                                                    }
                                                }
                                                </script>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="semester2" class="tabcontent">
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card p-4 mt-3">
                            <h4>Semester 2</h4> 
                            <form action="<?=base_url("mhs/KRS/sendKrs")?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="" class="form-select">
                                        <?php foreach($kelas as $kls ):?>
                                        <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Semester</label>
                                    <select name="semester" id="" class="form-select">
                                    <?php foreach($semester as $smt ):?>
                                        <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan">
                                </div>
                                <small class="text-small text-danger mt-3">* Centang yang perlu</small>
                                <table class="table table-bordered mt-3 table-striped">
                                    <tr>
                                        <th>Matkul</th>
                                        <th>Sks</th>
                                        <th>Ambil</th>
                                    </tr>
                                    <?php foreach ($matkul as $mk) { ?>
                                        <?php if ($mk['semester']=="semester_2") { ?>
                                        <tr>
                                            <td><?=$mk['nama_mk']?></td>
                                            <td><?=$mk['sks']?></td>
                                            <td><input type="checkbox" name="krs" id="" value="ambil"></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                </table>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="semester3" class="tabcontent">
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card p-4 mt-3">
                            <h4>Semester 3</h4> 
                            <form action="<?=base_url("mhs/KRS/sendKrs")?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="" class="form-select">
                                        <?php foreach($kelas as $kls ):?>
                                        <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Semester</label>
                                    <select name="semester" id="" class="form-select">
                                    <?php foreach($semester as $smt ):?>
                                        <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan">
                                </div>
                                <small class="text-small text-danger mt-3">* Centang yang perlu</small>
                                <table class="table table-bordered mt-3 table-striped">
                                    <tr>
                                        <th>Matkul</th>
                                        <th>Sks</th>
                                        <th>Ambil</th>
                                    </tr>
                                    <?php foreach ($matkul as $mk) { ?>
                                        <?php if ($mk['semester']=="semester_3") { ?>
                                        <tr>
                                            <td><?=$mk['nama_mk']?></td>
                                            <td><?=$mk['sks']?></td>
                                            <td><input type="checkbox" name="krs" id="" value="ambil"></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                </table>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="semester4" class="tabcontent">
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card p-4 mt-3">
                            <h4>Semester 4</h4> 
                            <form action="<?=base_url("mhs/KRS/sendKrs")?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="" class="form-select">
                                        <?php foreach($kelas as $kls ):?>
                                        <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Semester</label>
                                    <select name="semester" id="" class="form-select">
                                    <?php foreach($semester as $smt ):?>
                                        <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan">
                                </div>
                                <small class="text-small text-danger mt-3">* Centang yang perlu</small>
                                <table class="table table-bordered mt-3 table-striped">
                                    <tr>
                                        <th>Matkul</th>
                                        <th>Sks</th>
                                        <th>Ambil</th>
                                    </tr>
                                    <?php foreach ($matkul as $mk) { ?>
                                        <?php if ($mk['semester']=="semester_4") { ?>
                                        <tr>
                                            <td><?=$mk['nama_mk']?></td>
                                            <td><?=$mk['sks']?></td>
                                            <td><input type="checkbox" name="krs" id="" value="ambil"></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                </table>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="semester5" class="tabcontent">
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card p-4 mt-3">
                            <h4>Semester 5</h4> 
                            <form action="<?=base_url("mhs/KRS/sendKrs")?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="" class="form-select">
                                        <?php foreach($kelas as $kls ):?>
                                        <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Semester</label>
                                    <select name="semester" id="" class="form-select">
                                    <?php foreach($semester as $smt ):?>
                                        <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan">
                                </div>
                                <small class="text-small text-danger mt-3">* Centang yang perlu</small>
                                <table class="table table-bordered mt-3 table-striped">
                                    <tr>
                                        <th>Matkul</th>
                                        <th>Sks</th>
                                        <th>Ambil</th>
                                    </tr>
                                    <?php foreach ($matkul as $mk) { ?>
                                        <?php if ($mk['semester']=="semester_5") { ?>
                                        <tr>
                                            <td><?=$mk['nama_mk']?></td>
                                            <td><?=$mk['sks']?></td>
                                            <td><input type="checkbox" name="krs" id="" value="ambil"></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                </table>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="semester6" class="tabcontent">
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card p-4 mt-3">
                            <h4>Semester 6</h4> 
                            <form action="<?=base_url("mhs/KRS/sendKrs")?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="" class="form-select">
                                        <?php foreach($kelas as $kls ):?>
                                        <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Semester</label>
                                    <select name="semester" id="" class="form-select">
                                    <?php foreach($semester as $smt ):?>
                                        <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan">
                                </div>
                                <small class="text-small text-danger mt-3">* Centang yang perlu</small>
                                <table class="table table-bordered mt-3 table-striped">
                                    <tr>
                                        <th>Matkul</th>
                                        <th>Sks</th>
                                        <th>Ambil</th>
                                    </tr>
                                    <?php foreach ($matkul as $mk) { ?>
                                        <?php if ($mk['semester']=="semester_6") { ?>
                                        <tr>
                                            <td><?=$mk['nama_mk']?></td>
                                            <td><?=$mk['sks']?></td>
                                            <td><input type="checkbox" name="krs" id="" value="ambil"></td>
                                        </tr>
                                        <?php }?>
                                    <?php }?>
                                </table>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col mt-3 mb-4">
                    <div class="card p-3">
                        <h5>Output KRS</h5>
                        <div class="card-body">
                            <?php if(!$dataKrs==false){?>
                                <div class="row">
                                <?php foreach($dataKrs as $dks) :?>
                                    <?php if ($dks['email']==$user['email']) { ?>
                                        <div class="col-md-3">
                                            <a href="mhs/KRS/cetak_krs/<?=$dks['semester'];?>" class="btn btn-primary"><i class="fas fa-download"></i> <?=$dks['semester']?></a>
                                        </div>
                                        <?php }?>
                                <?php endforeach;?>
                            </div>
                            <?php }else{?>
                                <small class="text-small">data KRS belum tersedia..</small>
                            <?php }?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <script>
            function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
            </script>
    <?php }?> 
</div>
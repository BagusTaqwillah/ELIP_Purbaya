<style>
    .form-group{
        margin-top: 8px;
    }
    .buton{
        margin-top: 8px;
    }
    .lampiran{
        padding: 5px;
        border: 1px solid rgba(0, 0,0,0.2);
        border-left: 10px solid <?php echo $kontrol['warna_dosen']?>;
    }
</style>
<div class="container-fluid px-4">
    <div class="row mt-4 p-4">
        <div class="card">
            <div class="container p-2">
                <div class="row">
            <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nama matkul" value="<?=$tugas['nama_mk']?>" name="nama_mk">
                    <small class="text-small text-danger"><?=form_error('nama_mk')?></small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="judul penanda" value="<?=$tugas['judul']?>" name="judul">
                </div>
                <div class="form-group">
                    <select name="semester" id="" class="form-control" >
                        <option value="">--pilih--</option>
                        <option value="1">semester 1</option>
                        <option value="2">semester 2</option>
                        <option value="3">semester 3</option>
                        <option value="4">semester 4</option>
                        <option value="5">semester 5</option>
                    </select>
                </div>
                <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="kelas" id="" class="form-control">
                                <?php foreach($kelas as $k):?>
                                    <option value="<?=$k['nama_kelas']?>"><?=$k['nama_kelas']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                <div class="form-group">
                    <input type="datetime-local" class="form-control"  placeholder="tenggat" value="<?=$tugas['tenggat']?>" name="tenggat">
                </div>
                <div class="form-group">
                   <textarea name="deskripsi" id="" cols="30" rows="0" placeholder="deskripsi tugas" class="form-control" value="<?=$tugas['deskripsi']?>"><?=$tugas['deskripsi']?></textarea>
                </div>
                <div class="buton">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
           
            </div>
            <div class="col-md-6">
                <div class="lampiran">
                    <div class="form-group">
                        <label for="">Lampiran</label>
                        <input type="file" class="form-control"  placeholder="lampiran" value="<?=$tugas['lampiran']?>" name="lampiran">
                    </div>
                </div>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
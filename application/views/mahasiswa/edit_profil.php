<style>
    .update{
        background-color: rgb(222, 38, 114) ;
        margin-top: 20px;
        color: white;
    }
    .update:hover{
        background-color: blue;
        color: white;
    }
    .card{
        box-shadow: 2px 2px 14px 0px rgba(0,0,0,0.75);
    }
</style>
<div class="container-fluid px-4 mt-3 mb-3">
    <div class="row">
        <div class="col">
            <h3>Edit Profil</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card p-4">
            <?php echo form_open_multipart('');?>
                    <div class="form-group">
                        <label class="label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?=$user['nama']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nim/Nid</label>
                        <input type="number" class="form-control" name="identitas" value="<?=$user['identitas']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tgl Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?=$user['tgl_lahir']?>">
                    </div>
                    <div class="form-group">
                        <!-- <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?=$user['alamat']?>"> -->
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="3" class="form-control" value="<?=$user['alamat']?>"><?=$user['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="<?=$user['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input type="text" class="form-control" name="no_hp" value="<?=$user['no_hp']?>">
                    </div>
                   
                        <div class="row mt-2">
                            <label>img</label>
                            <div class="col-md-3"><img src="<?=base_url('assets/profil/')?>/<?=$user['img']?>" alt="" class="img-thumbnail" ></div>
                            <div class="col-md-9">
                                <input type="file" class="form-control" value="<?=$user['img']?>" name="img">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn update">Update</button>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
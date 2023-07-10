<div class="container px-4">
    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit User</h5>
                </div>
                <form action="" method="post">
                <div class="card-body">   
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" value="<?=$user['nama']?>" name="nama">
                            <small class="text-small text-danger"><?=form_error('nama')?></small>
                        </div>
                        <div class="form-group">
                            <label for="">NID/NIM</label>
                            <input type="text" class="form-control"  value="<?=$user['identitas']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control" value="<?=$user['email']?>" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>level</label>
                            <select name="role_id" id="" value="<?=$user['role_id'] ?>" class="form-control"> 
                                <option value="1">--Pilih Level--</option>
                                <option value="1">Mahasiswa</option>
                                <option value="2">Dosen</option>
                                <option value="3">Admin</option>
                            </select>
                        </div>
                </div>
                <div class="card-footer">
                    <a href="<?=base_url('A_user')?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col mt-4">
            <h3>Edit Ruangan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Ruangan
                </div>
                <div class="card-body">
                    <form  method="post">
                        <div class="form-group">
                            <label for="">Nama Ruangan</label>
                            <input type="text" class="form-control" name="nama_ruangan" value="<?=$ruangan['nama_ruang']?>">
                        </div>
                        <a class="btn btn-sm btn-secondary"href="<?=base_url('A_ruangan')?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
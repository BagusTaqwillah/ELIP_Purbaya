<div class="container-fluid px-4">
    <div class="row mt-3 ">
        <div class="col-md-4">
            <?=$this->session->flashdata('Auth')?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Form ubah password</h4>
                </div>
                <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Password Lama</label>
                        <input type="password" class="form-control" name="pass_lama">
                        <small class="text-small text-danger"><?=form_error('pass_lama')?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Password Baru</label>
                        <input type="password" class="form-control" name="pass_baru">
                        <small class="text-danger text-small"><?=form_error('pass_baru')?></small>
                    </div>
               

                </div>
                <div class="card-footer">
                <div class="buton">
                        <button type="submit" class="btn btn-primary">ubah</button>
                        <button type="reset" class="btn btn-secondary">batal</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
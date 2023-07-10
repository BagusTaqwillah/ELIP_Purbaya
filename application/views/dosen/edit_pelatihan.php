<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
            <div class="card-header">
                Edit Materi Pelatihan
            </div>
            <div class="card-body p-3">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?=$pelatihan['kategori']?>" name="kategori" disabled >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?=$pelatihan['status']?>" name="status" disabled hidden>
                    </div>
                    <div class="form-group">
                        <label for="">judul Pelatihan</label>
                        <input type="text" class="form-control" name="judul" value="<?=$pelatihan['judul']?>">
                    </div>
                    <div class="form-group">
                        <label for="">isi Materi Pelatihan</label>
                        <textarea  name="materi" id="summernote" cols="30" rows="10"  value="<?=$pelatihan['materi'];?>">
                        <?=$pelatihan['materi']?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Lampiran</label>
                        <input type="file" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
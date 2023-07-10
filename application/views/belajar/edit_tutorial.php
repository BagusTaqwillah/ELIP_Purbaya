<div class="container-fluid">
    <div class="row">
        <div class="col mt-3">
            <h3>Edit Tutorial</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card p-4">

                <form  method="post">
                    <div class="form-group">
                        <label for="">Nama Pengirim</label>
                        <input type="text" class="form-control" name="penerbit" value="<?=$tutorial['penerbit']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tgl_upload</label>
                        <input type="date" class="form-control" name="tgl_upload" value="<?=$tutorial['tgl_upload']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Judul Tutorial</label>
                        <input type="text" class="form-control" name="judul" value="<?=$tutorial['judul']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Tutorial</label>
                        <select name="tutorial" id="" class="form-control" value="<?=$tutorial['tutorial']?>">
                            <option value="">-- pilih tutor --</option>
                            <option value="HTML">Html</option>
                            <option value="JAVA">Java</option>
                            <option value="JAVASCRIPT">Javascript</option>
                            <option value="PYTHON">Python</option>
                            <option value="CSS">CSS</option>
                            <option value="PHP">Php</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">isi tutorial</label>
                        <textarea name="isi" id="summernote" cols="30" rows="10" value="<?=$tutorial['isi']?>">
                        <?=$tutorial['isi']?>
                        </textarea>
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">kembali</button>
                    <button type="submit" class="btn btn-primary btn-sm">update</button>
                </form>
            </div>
        </div>
    </div>
</div>

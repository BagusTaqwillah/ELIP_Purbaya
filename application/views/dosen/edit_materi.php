<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 mb-2">
            <div class="card">
                <div class="card-header">
                    <i class="fa-regular fa-address-book"></i> Edit Materi
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <!-- <div class="form-group">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control" value="<?= $pelatihan ?>" name="kategori" disabled hidden>
                                        </div> -->
                        <div class="form-group">
                            <label for="">judul Materi</label>
                            <input type="text" class="form-control" name="judul" value="<?= $matkul['judul'] ?>">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" value="<?= $matkul['matkul'] ?>" hidden name="matkul">
                        </div>
                        <div class="form-group">
                            <label for="">semester</label>
                            <select name="semester" id="" value="<?=$matkul['semester']?>">
                                <option value="semester 1">semester 1</option>
                                <option value="semester 2">semester 2</option>
                                <option value="semester 3">semester 3</option>
                                <option value="semester 4">semester 4</option>
                                <option value="semester 6">semester 5</option>
                                <option value="semester 6">semester 6</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">kelas</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kelas" value="<?=$matkul['kelas']?>">
                                <?php foreach ($kelas as $kls) : ?>
                                    <option value="<?= $kls['nama_kelas'] ?>"><?= $kls['nama_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">isi Materi Pelatihan</label>
                            <textarea name="isi_materi" id="summernote" cols="30" rows="10" value="   <?=$matkul['isi_materi']?>">
                                <?=$matkul['isi_materi']?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
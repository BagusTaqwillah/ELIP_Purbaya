<div class="container-fluid">
    <div class="row">
        <div class="col mt-3">
            <h3>Edit Mata Kuliah</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Edit Matakuliah
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">
                                Nama Matakuliah
                            </label>
                            <input type="text" class="form-control"  value="<?=$matkul['nama_mk']?>" name="nama_mk" required>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Semester
                            </label>
                            <select name="semester" class="form-select" required>
                                <?php foreach($semester as $smt){?>
                                    <option value="<?=$smt['nama_semester']?>"><?=$smt['nama_semester']?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah SKS</label>
                            <input type="number" class="form-control" name="sks"  value="<?=$matkul['sks']?>" required>
                        </div>
                        <button class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
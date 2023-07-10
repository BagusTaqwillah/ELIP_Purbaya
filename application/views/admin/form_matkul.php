
                <h4 class="text-center">Tambah Mata Kuliah</h4>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nama Matkul</label>
                        <input type="text" name="nama_mk" class="form-control">
                        <small class="text-danger"><?=form_error('nama_mk')?></small>
                    </div>
                    <div class="form-group">
                        <label for="">Semester</label>
                        <select name="semester" id="" class="form-control">
                            <option value="semester_1">Semester 1</option>
                            <option value="semester_2">Semester 2</option>
                            <option value="semester_3">Semester 3</option>
                            <option value="semester_4">Semester 4</option>
                            <option value="semester_5">Semester 5</option>
                            <option value="semester_6">Semester 6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah SKS</label>
                        <input type="text" name="sks" class="form-control">
                        <small class="text-danger"><?=form_error('sks')?></small>
                    </div>
                    <button type="submit"class="btn btn-primary">Tambah</button>
                </form>
        
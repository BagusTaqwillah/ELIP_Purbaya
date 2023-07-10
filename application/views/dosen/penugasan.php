<style>
    /* .solid{
        background-color:rgb(85, 8, 85) ;
        color: white;
    } */
    .aksi a{
        padding: 10px;
    }
    .buton a{
        margin-top: 10px;
    }
</style>
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-6">
            <script>
            <?php if($this->session->flashdata('swal_icon')){?>
                Swal.fire({
                    icon:'<?=$this->session->flashdata('swal_icon')?>',
                    title:'<?=$this->session->flashdata('swal_title')?>',
                    text:'<?=$this->session->flashdata('swal_text')?>',  
                })
            <?php } ?>
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header solid ">
                    Beri Tugas
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('');?>
                        <div class="form-group">
                            <label for="">Nama Matkul</label>
                            <select name="nama_mk" id="" class="custom-select">
                                <?php foreach($matkul as $mk) :?>
                                    <option value="<?=$mk['nama_mk']?>"><?=$mk['nama_mk']?></option>
                                <?php endforeach;?>
                            </select>
                            <small class="text-small text-danger"><?=form_error('judul')?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Semester</label>
                            <select name="semester" id="" class="form-control">
                                <option value="semester_1">semester 1</option>
                                <option value="semester_2">semester 2</option>
                                <option value="semester_3">semester 3</option>
                                <option value="semester_4">semester 4</option>
                                <option value="semester_5">semester 5</option>
                                <option value="semester_6">semester 6</option>
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
                            <label for="">Judul Penugasan</label>
                            <input type="text" name="judul" class="form-control">
                            <small class="text-small text-danger"><?=form_error('judul')?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Tugas</label>
                            <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"></textarea>
                            <small class="text-small text-danger"><?=form_error('deskripsi')?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Tenggat</label>
                            <input type="datetime-local" class="form-control" name="tenggat">
                        </div>
                        <div class="form-group">
                            <label for="">Lampiran</label>
                            <input type="file" class="form-control" name="lampiran">
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col mb-4 mt-4">
        <div class="card">
                <div class="card-header solid">
                    Data Pengirim Tugas
                </div>
                <div class="card-body buton">
                    <a href="<?=base_url('dsn/Data/semester1')?>" class="btn btn-primary">Semester 1</a>
                    <a href="<?=base_url('dsn/Data/semester2')?>" class="btn btn-primary">Semester 2</a>
                    <a href="<?=base_url('dsn/Data/semester3')?>" class="btn btn-primary">Semester 3</a>
                    <a href="<?=base_url('dsn/Data/semester3')?>" class="btn btn-primary">Semester 4</a>
                    <a href="<?=base_url('dsn/Data/semester3')?>" class="btn btn-primary">Semester 5</a>
                       
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h3>Data Penugasan</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col mb-4">
            <div class="card">
                <div class="card-header solid">
                    Data Penugasan
                </div>
                <div class="card-body">
                <table id="dataTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                            <th>Penugasan</th>
                                            <th>Kelas</th>
                                            <th>Tenggat</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($penugasan as $ps):?>
                                    <tr alt="Data Belum ada">
                                        <td ><?=$i++?></td>
                                        <td><?=$ps['judul']?></td>
                                        <td><?=$ps['kelas']?></td>
                                        <td><?=$ps['tenggat']?></td>
                                        <td>
                                            <div class="aksi">
                                            <a href="<?=base_url('dsn/Penugasan_dsn/delete_penugasan')?>/<?=$ps['id_tugas']?>"><i class="fas fa-trash text-danger"></i></a>
                                            <a href="<?=base_url('dsn/Penugasan_dsn/edit_penugasan')?>/<?=$ps['id_tugas']?>" ><i class="fas fa-edit text-warning"></i></a>
                                            <a href="" ><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       
    </div>

</div>
<style>

</style>
<div class="container mt-4">
    <script>
        <?php
        if ($this->session->flashdata('swal_icon')) { ?>
            Swal.fire({
                icon: '<?= $this->session->flashdata('swal_icon') ?>',
                title: '<?= $this->session->flashdata('swal_title') ?>',
            })
        <?php } ?>
    </script>
    <div class="row">
        <div class="col-md-8 mb-2">

            <div class="card">
                <div class="card-header">
                    <i class="fa-regular fa-address-book"></i> <?= $matkul ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <!-- <div class="form-group">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control" value="<?= $pelatihan ?>" name="kategori" disabled hidden>
                                        </div> -->
                        <div class="form-group">
                            <label for="">judul Materi</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?= $matkul ?>" hidden name="matkul">
                        </div>
                        <div class="form-group">
                            <label for="">semester</label>
                            <select name="semester" id="" class="custom-select mr-sm-2">
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
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kelas">
                                <?php foreach ($data_matkul as $dm) : ?>
                                    <option value="<?= $dm['nama_kelas'] ?>"><?= $dm['nama_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">isi Materi Pelatihan</label>
                            <textarea name="isi_materi" id="summernote" cols="30" rows="10">
                             </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fa-regular fa-rectangle-list"></i> Data Matkul
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Materi</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($materiMatkul as $mm) : ?>
                                <tr>
                                    <td><?= $mm['judul'] ?></td>
                                    <td><?= $mm['kelas'] ?></td>
                                    <td><a onclick="return confirm('yakin ingin menghapus materi')" class="badge badge-danger text-light" href="<?= base_url('dsn/Matkul/hapus_materi') ?>/<?= $mm['id_materi'] ?>">hapus</a> <a class="badge badge-warning" href="<?= base_url('dsn/Matkul/edit_materi') ?>/<?= $mm['id_materi'] ?>">edit</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
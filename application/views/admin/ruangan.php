<div class="container px-4 mt-3">
    <div class="form">
        <div class="container">
            <div class="row">
                <script>
                    <?php if ($this->session->flashdata('swal_icon')) { ?>
                        Swal.fire({
                            icon: '<?= $this->session->flashdata('swal_icon') ?>',
                            title: '<?= $this->session->flashdata('swal_title') ?>',
                        })
                    <?php } ?>
                </script>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Form Tambah Ruangan
                        </div>
                        <div class="card-body">
                            <form action="admin/Admin/add_ruangan" method="post">
                                <div class="form-group">
                                    <label for="">Nama Ruangan</label>
                                    <input type="text" class="form-control" name="nama_ruangan">
                                </div>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <img src="<?= base_url('assets/img/classroom.jpg') ?>" alt="" width="50%"><br>
                    <a type="button" class="btn btn-success text-light mt-3 btn-sm" data-toggle="modal" data-target="#kelas">
                        Tambah Kelas
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <h3>Data Ruangan</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-header solid">
                            Data Ruangan
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ruangan</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($ruangan as $r) : ?>
                                        <tr alt="Data Belum ada">
                                            <td><?= $i++ ?></td>
                                            <td><?= $r['nama_ruang'] ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="<?= base_url('admin/Admin/delete_ruangan') ?>/<?= $r['id_ruang'] ?>"><i class="fas fa-trash text-danger"></i></a>
                                                    <a href="<?= base_url('admin/Admin/edit_ruangan') ?>/<?= $r['id_ruang'] ?>"><i class="fas fa-edit text-warning"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="kelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/Admin/add_kelas') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama_kelas" trim>
                    </div>
                    <div class="form-group">
                        <label for="">Semester</label>
                        <select name="semester" id="" class="custom-select">
                            <option value="semester_1">semester 1</option>
                            <option value="semester_2">semester 2</option>
                            <option value="semester_3">semester 3</option>
                            <option value="semester_4">semester 4</option>
                            <option value="semester_5">semester 5</option>
                            <option value="semester_6">semester 6</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
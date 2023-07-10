<?php if ($user['role_id'] == 3) { ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <script>
                    <?php if ($this->session->flashdata('swal_icon')) { ?>
                        Swal.fire({
                            icon: '<?= $this->session->flashdata('swal_icon') ?>',
                            title: '<?= $this->session->flashdata('swal_title') ?>',
                        })
                    <?php } ?>
                </script>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <button class="nav-link active" data-toggle="modal" data-target="#add_pelatihan"><i class="fas fa-plus"></i> Buat Pelatihan</button>
                                <!-- Modal -->
                                <div class="modal fade" id="add_pelatihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pelatihan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('add_pelatihan') ?>" method="post">
                                                    <div class="form-group">
                                                        <input type="text" name="nama_pelatihan" class="form-control" placeholder="nama pelatihan">
                                                        <small class="text-danger"><?= form_error('nama_pelatihan') ?></small>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="datetime-local" name="tgl_buat" class="form-control" placeholder="nama pelatihan">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Buat</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="nama_pelatihan">
                                        <table  id="dataTable" class="table table-bordered" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Pelatihan</th>
                                                    <th class="text-center">Tgl dibuat</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($pelatihan as $pl) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $pl['nama_pelatihan'] ?></td>
                                                        <td><?= $pl['tgl_buat'] ?></td>
                                                        <td>
                                                            <!-- <a href="<?= base_url('pelatihan/Pelatihan/edit_pelatihan/') ?><?= $pl['id_pelatihan'] ?>"><i class="fas fa-edit"></i></a> -->
                                                            <a onclick="return confirm('yakin ingin hapus')" href="<?= base_url('pelatihan/Pelatihan/delete_pelatihan/') ?><?= $pl['id_pelatihan'] ?>"><i class="fas fa-trash text-danger"></i></a>
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
        </div>
    </div>
<?php } ?>
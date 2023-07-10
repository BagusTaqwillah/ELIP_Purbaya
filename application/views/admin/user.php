<div class="container-fluid px-4">
    <script>
        <?php if ($this->session->flashdata('swal_icon')) { ?>
            Swal.fire({
                icon: '<?= $this->session->flashdata('swal_icon') ?>',
                title: '<?= $this->session->flashdata('swal_title') ?>',
                text: '<?= $this->session->flashdata('swal_text') ?>',
            })
        <?php } ?>
    </script>
    <div class="user">
        <div class="container mt-4">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dosen" data-whatever="@mdo"><i class="fas fa-plus"></i> Dosen</button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#admin" data-whatever="@getbootstrap"><i class="fas fa-plus"></i> Admin</button>

            <div class="modal fade" id="dosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="add_dosen" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Dosen</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">NID</label>
                                    <input type="number" class="form-control" id="recipient-name" name="identitas">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" id="recipient-name" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" id="recipient-name" name="password1">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- form add admin -->
            <div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="add_admin" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Admin</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">No Identitas</label>
                                    <input type="number" class="form-control" id="recipient-name" name="identitas">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" id="recipient-name" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" id="recipient-name" name="password1">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <h5>Data User</h5>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($allUser as $as) :?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$as['nama']?></td>
                                        <td>
                                            <?php 
                                            $level=$as['role_id'];
                                            if ($level==1) {
                                               echo"Mahasiswa";
                                            }else if($level==2){
                                              echo"Dosen";
                                            }else{
                                                echo"Admin";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php $status=$as['status'];
                                            if ($status==1) {
                                                echo"<span class='badge badge-success badge-sm'>Aktif</span>";
                                            }else{
                                                echo"<span  class='badge badge-danger badge-sm'>Tidak Aktif</span>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?=base_url('admin/Admin/nonaktif')?>/<?=$as['id_user']?>" class="badge badge-warning"><i class="fa-solid fa-power-off"></i></a>
                                            <a onclick="return alert('yakin ingin hapus')"href="<?=base_url('admin/Admin/delete_user')?>/<?=$as['id_user']?>" class="badge badge-danger"><i class="fa-solid fa-trash"></i></a>
                                            <a  href="<?=base_url('admin/Admin/edit_user')?>/<?=$as['id_user']?>" class="badge badge-info" ><i class="fa-solid fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
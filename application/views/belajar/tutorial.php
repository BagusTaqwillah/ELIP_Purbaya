<script src=""></script>
<div class="container-fluid px-4">
    <div class="tutor">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        <?php if ($this->session->flashdata('swal_icon')) { ?>
                            Swal.fire({
                                icon: '<?= $this->session->flashdata('swal_icon') ?>',
                                title: '<?= $this->session->flashdata('swal_title') ?>',
                                text: '<?= $this->session->flashdata('swal_text') ?>',
                            })
                        <?php } ?>
                    </script>
                </div>
            </div>
            <row>
                <col>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                    <i class="fa-solid fa-folder-plus"></i> Tutorial
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable  modal-lg" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('Belajar/upload_tutorial') ?>" method="post">
                                    <div class="form-group">
                                        <label for="">Nama Pengirim</label>
                                        <input type="text" class="form-control" name="penerbit">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tgl_upload</label>
                                        <input type="date" class="form-control" name="tgl_upload">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Judul Tutorial</label>
                                        <input type="text" class="form-control" name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Tutorial</label>
                                        <select name="tutorial" id="" class="form-control">
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
                                        <textarea name="isi" id="summernote" cols="30" rows="10">

                                         </textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </col>
            </row>
        </div>
        <div class="row mt-4">
            <div class="col mb-4">
                <div class="card">
                    <div class="card-header solid">
                        Data Penugasan
                    </div>
                    <div class="card-body">
                        <div class="data">
                            <table  id="dataTable" class="table table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($tutorial as $tutor) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $tutor['judul'] ?></td>
                                            <td><?= $tutor['tutorial'] ?></td>
                                            <td>
                                            <a href="<?=base_url('Belajar/edit_tutorial/')?><?=$tutor['id_tutorial']?>" class="badge badge-warning"><i class="fa-solid fa-edit"></i></a>
                                            <a onclick="return confirm('yakin ingin hapus')"href="<?=base_url('Belajar/hapus_tutorial/')?><?=$tutor['id_tutorial']?>" class="badge badge-danger"><i class="fa-solid fa-trash"></i></a>
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
<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      
    </script>
    

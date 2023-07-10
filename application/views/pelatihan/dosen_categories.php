
<style>
    .list {
        display: flex;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header ">
                    upload pelatihan <?= $pelatihan ?>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card p-3">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control" value="<?= $pelatihan ?>" name="kategori" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">judul Pelatihan</label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                        <div class="form-group">
                                            <label for="">isi Materi Pelatihan</label>
                                            <textarea name="isi" id="summernote" cols="30" rows="10">
                                         </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Lampiran</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header ">
                                        Draft Pelatihan
                                    </div>
                                    <div class="card-body">

                                        <?php if ($list_pelatihan == false) : ?>
                                            <small>Belum ada data</small>
                                        <?php else : ?>
                                            <?php foreach($list_pelatihan as $lp) {?>
                                                <?php if ($lp['status']==1) {
                                                            $icon='<i class="fas fa-eye "></i>';
                                                            $warna="badge-primary";
                                                            $status="<span class='badge badge-success'> Publish</span>";
                                                        }else{
                                                            $icon='<i class="fas fa-lock"></i>';
                                                            $warna="badge-danger";
                                                            $status="<span class='badge badge-danger'>Belum Publish</span>";
                                                        }
                                                        ?>
                                            <div class="card p-2 list">
                                                <div class="data">
                                                    <?= $lp['judul'] ?>  <?=$status?>
                                                </div>
                                                <div class="aksi">
                                                    <a onclick="return confirm('ingin menghapu pelatihan ?')" href="<?= base_url('dsn/Pelatihan_dsn/hapus_pelatihan') ?>/<?= $lp['id_data'] ?>" class="badge badge-danger"><i class="fas fa-trash"></i></a>
                                                    <a href="<?= base_url('dsn/Pelatihan_dsn/edit_pelatihan') ?>/<?= $lp['id_data'] ?>" class="badge badge-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('dsn/Pelatihan_dsn/publish_pelatihan') ?>/<?= $lp['id_data'] ?>" class="badge <?=$warna?>">
                                                        <?=$icon?>
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <?php  };?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col mt-3">
            <h5>Yang Berpartisipasi</h5>
            <section class="section mt-2">
                <div class="card">
                    <div class="card-header  text-light">
                        Data Audiens
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Nama Audien</th>
                                    <th>Pelatihan</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($audien as $adn) : ?>
                                    <tr>
                                        <td><?= $adn['nama_audien'] ?></td>
                                        <td><?= $adn['nama_pelatihan'] ?></td>
                                        <td>2023-02-09</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> jawaban</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
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
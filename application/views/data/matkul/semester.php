<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                   <p><a href="<?=base_url('A_matkul')?>" class="btn btn-sm btn-secondary"><i class="far fa-arrow-alt-circle-left fa-1x"></i> </a>   <?=$judul?></p>
                </div>
                <div class="card-body">
            <table id="dataTable" class="table table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($matkul as $mk) : ?>
                                <tr alt="Data Belum ada">
                                    <td><?= $i++ ?></td>
                                    <td><?= $mk['nama_mk'] ?></td>
                                    <td><?= $mk['sks']?></td>
                                    <td>
                                        <div class="aksi">
                                            <a onclick="return confirm('yakin ingin hapus matkul')" href="<?= base_url('admin/Matkul_a/delete_mk') ?>/<?= $mk['id_mk'] ?>"><i class="fas fa-trash text-danger"></i></a>
                                            <a href="<?= base_url('admin/Matkul_a/edit_mk') ?>/<?= $mk['id_mk'] ?>"><i class="fas fa-edit text-warning"></i></a>
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

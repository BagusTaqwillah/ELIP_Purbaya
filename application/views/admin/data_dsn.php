<div class="container-fluid px-4">
    <div class="row">
        <div class="col mt-3">
            <h3>Data Dosen</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <section class="section mt-2">
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                    <a href="<?=base_url('admin')?>" class="btn btn-sm btn-outline-light"><i class="fas fa-arrow-left"></i> </a> 
                        <a href="<?=base_url('admin/Admin/cetakDataDsn')?>" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print semua data</a>
                        <a href="<?=base_url('admin/Admin/exportDsnXls')?>" class="btn btn-success btn-sm"><i class="fas fa-table"></i> Export excel</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NID</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dosen as $dsn) : ?>
                                    <tr>
                                        <td><?= $dsn['nama'] ?></td>
                                        <td><?= $dsn['identitas'] ?></td>
                                        <td>
                                        <?php if ($dsn['status']==1) { ?>
                                                <span class=" badge badge-success badge-sm">aktif</span>
                                            <?php }else{ ?>
                                                <span class=" badge badge-danger badge-sm ">tidak aktif</span>
                                            <?php }?>
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
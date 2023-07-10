<div class="container-fluid px-4">
    <div class="row">
        <div class="col mt-3">
            <h3>Data Admin</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <section class="section mt-2">
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print semua data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Kelas</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admin as $adm) : ?>
                                    <tr>
                                        <td><?= $adm['nama'] ?></td>
                                        <td><?= $adm['identitas'] ?></td>
                                        <td>2023-02-09</td>
                                        <td>
                                            <span class=" badge badge-success badge-sm bg-warning">proses</span>
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
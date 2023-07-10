<div class="container">
    <div class="row">
    <div class="row mt-4">
        <div class="col mb-4">
            <div class="card">
                <div class="card-header solid">
                    Data Pengirim Kelas <?=$judul?>
                </div>
                <div class="card-body">
                <table id="dataTable" class="table table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                            <th>Nama</th>
                                            <th>Matkul</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($tugas as $ps):?>
                                    <tr alt="Data Belum ada">
                                        <td ><?=$i++?></td>
                                        <td><?=$ps['nama_mhs']?></td>
                                        <td><?=$ps['mk']?></td>
                                        <td>
                                            <div class="aksi">
                                            <!-- <a href=""><i class="fas fa-trash text-danger"></i></a>
                                            <a href="" ><i class="fas fa-edit text-warning"></i></a> -->
                                            <a href="<?=base_url('dsn/Data/detail_tugas')?>/<?=$ps['id_mtugas']?>" ><i class="fas fa-eye"></i></a>
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
    </div>
</div>
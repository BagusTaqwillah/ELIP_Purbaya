<style>
    .data h5{
        background-color: silver;
        border-left: 10px  solid purple;
        padding: 8px;
        width: 70%;
        border-radius: 0 10px 10px 0;
        color: black;
    }
</style>
<div class="container-fluid px-4">
    <script>
        <?php if ($this->session->flashdata('swal_icon')) {?>
            Swal.fire({
                icon : '<?=$this->session->flashdata('swal_icon')?>',
                title : '<?=$this->session->flashdata('swal_title')?>',
            })
         <?php }?>
    </script>
    <div class="row mt-4">
        <h3>Kirim Pelatihan Yang sesuai Kriteria</h3>
    </div>
    <div class="row ">
        <div class="col">
            <?php foreach($pelatihan as $camp):?>
            <a href="<?= base_url(); ?>d/<?= $camp['nama_pelatihan']; ?>">
            <div class="data">
                <h5><?=$camp['nama_pelatihan']?></h5>
            </div>
            </a>
            <?php endforeach;?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    Berikan Sertifikat
                </div>
                <div class="card-body">
                    <form action="dsn/Pelatihan_dsn/sendSertifikat" method="post">
                        <div class="form-group">
                            <label for="">Kepada</label>
                            <select name="id_user" id="" class="form-select">
                            <?php foreach($audien as $adn):?>
                                <option value="<?=$adn['id_user']?>"><?=$adn['nama']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pelatihan</label>
                            <select name="id_pelatihan" id="" class="form-select">
                            <?php foreach($pelatihan as $camp):?>
                                <option value="<?=$camp['id_pelatihan']?>"><?=$camp['nama_pelatihan']?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Berikan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    data penerima sertifikat
                </div>
                <div class="card-body">
                <table id="dataTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                            <th>Penerima</th>
                                            <th>Pelatihan</th>
                                            <th>Tgl Reward</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($sertifikat as $sertif):?>
                                    <tr alt="Data Belum ada">
                                        <td ><?=$i++?></td>
                                        <td><?=$sertif['nama']?></td>
                                        <td><?=$sertif['nama_pelatihan']?></td>
                                        <td><?=$sertif['tgl_reward']?></td>
                                        <td>
                                            <div class="aksi">
                                            <a href="<?=base_url('dsn/Pelatihan_dsn/deleteSertif')?>/<?=$sertif['id_sertifikat']?>"><i class="fas fa-trash text-danger"></i></a>
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

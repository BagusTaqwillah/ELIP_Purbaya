<?php
        header("Content-type:application/vnd-ms-excel");
        header("Content-Disposition:attachment;filename=data_dosen.xls");
    ?>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h3>Data Semua Dosen Politeknik Purbaya</h3>
            <p>Jln Supriyadi No 1 Trayeman</p>
            <p>www.purbaya.ac.id</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>Nama Dosen</th>
                    <th>NID/NIPY</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                </tr>
                <?php $i=1; foreach ($dosen as $dsn) : ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$dsn['nama']?></td>
                    <td><?=$dsn['identitas']?></td>
                    <td><?=$dsn['alamat']?></td>
                    <td><?=$dsn['no_hp']?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
<?php 
redirect('data_mhs','refresh');
?>
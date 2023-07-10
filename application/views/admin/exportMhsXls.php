<?php
        header("Content-type:application/vnd-ms-excel");
        header("Content-Disposition:attachment;filename=data_mahasiswa.xls");
    ?>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h3>Data Semua Mahasiswa Politeknik Purbaya</h3>
            <p>Jln Supriyadi No 1 Trayeman</p>
            <p>www.purbaya.ac.id</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                </tr>
                <?php $i=1; foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$mhs['nama_mahasiswa']?></td>
                    <td><?=$mhs['email']?></td>
                    <td><?=$mhs['kelas']?></td>
                    <td><?=$mhs['semester']?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
<?php 
redirect('data_mhs','refresh');
?>
<?php
        header("Content-type:application/vnd-ms-excel");
        header("Content-Disposition:attachment;filename=data_Krs_$kelas.xls");
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
                <tr >
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                    <th>Keterangan</th>
                </tr>
                <?php $i=1; foreach ($krs as $k) : ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$k['nama']?></td>
                    <td><?=$k['nim']?></td>
                    <td><?=$k['kelas']?></td>
                    <td><?=$k['semester']?></td>
                    <td><?=$k['jurusan']?></td>
                    <td><?php
                        if ($k['action']==1) {
                            echo "selesai";
                        }else{
                            echo "proses ttd";
                        }
                    ?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <h3>Pengirim Tugas</h3>
                <table width="100%">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$tugas['nama_mhs']?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$tugas['kelas']?></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$tugas['semester']?></td>
                    </tr>
                    <tr>
                        <td>Matkul</td>
                        <td>:</td>
                        <td><?=$tugas['mk']?></td>
                    </tr>
                    <tr>
                        <td>Jawaban</td>
                        <td>:</td>
                        <td><a href="" class="btn btn-primary">Lihat</a> <?=$tugas['file']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kirim</td>
                        <td>:</td>
                        <td><?=$tugas['tgl_kirim']?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
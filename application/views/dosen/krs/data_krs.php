<style>
    .pad{
    border:1px solid rgba(0,0,0,0.3);
    border-radius:10px;
}

</style>
<div class="container px-4 mt-3">
    <div class="row">
        <div class="col">
            <h3>KRS kelas <?=$kelas?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card  p-3">
                <div id="signature-pad">
                    <p class="text-small text-danger">* Pastikan Dosen Tanda Tangan Sesuai Kelas DPA</p>
                    <canvas class="pad"></canvas>
                </div>
                <button class="btn btn-primary" onclick="saveSignature()">Simpan TTD </button>

                    <script src="https://unpkg.com/signature_pad"></script>
                        <script>
                            var canvas = document.querySelector("canvas");
                            var signaturePad = new SignaturePad(canvas);

                            function saveSignature() {
                            if (signaturePad.isEmpty()) {
                                alert("Tanda tangan belum diisi.");
                            } else {
                                var signatureData = signaturePad.toDataURL();
                                // Kirim data tanda tangan ke server atau lakukan tindakan lain yang diinginkan
                                // Kirim data tanda tangan ke server
                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', '<?=base_url('dsn/Dsn_Krs/ttdDpa')?>', true);
                                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                    console.log(xhr.responseText);
                                }
                                };
                                xhr.send(
                                    'signatureData=' + encodeURIComponent(signatureData),
                                    );
                                    console.log(signatureData);
                                }
                                }
                        </script>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header">
                <a href="<?=base_url('A_krs')?>" class="btn btn-sm btn-secondary"><i class="far fa-arrow-alt-circle-left fa-1x"></i> </a> Data Krs
                </div>
                <div class="card-body">
                    <a href="<?=base_url('admin/A_Krs/exportXls/')?><?=$kelas?>" class="btn btn-success mb-2 btn-sm"><i class="fas fa-file-excel"></i> export excel</a>
                <table id="dataTable" border="1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($dataKrs as $dks) :?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$dks['nama']?></td>
                                        <td><?=$dks['kelas']?></td>
                                        <td>
                                            <?php $status=$dks['action'];
                                            if ($status==1) {
                                                echo"<span class='badge badge-success badge-sm'>Approve</span>";
                                            }else{
                                                echo"<span  class='badge badge-warning badge-sm'>Proses ttd</span>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <!-- <a href="<?=base_url('admin/Admin/nonaktif')?>/<?=$dks['id_krs']?>" class="badge badge-warning"><i class="fa-solid fa-power-off"></i></a> -->
                                            <!-- <a onclick="return alert('yakin ingin hapus')"href="<?=base_url('admin/A_Krs/hapusKrs')?>/<?=$dks['id_krs']?>" class="badge badge-danger"><i class="fa-solid fa-trash"></i></a>
                                            <a  href="<?=base_url('admin/A_Krs/approveKrs')?>/<?=$dks['id_krs']?>" class="badge badge-success" ><i class="fa-solid fa-check"></i></a> -->
                                            <a  href="<?=base_url('dsn/Dsn_Krs/detailKrs')?>/<?=$dks['id_krs']?>" class="badge badge-info" ><i class="fa-solid fa-eye"></i> Detail</a>
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
<div class="container-fluid px-4">
    <div class="row">
        <div class="col mt-3">
            <h3>Data Mahasiswa</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <section class="section mt-2">
                <div class="card">
                <script>
                    function konfirAktivasi(event) {
                      
                        Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Tindakan ini tidak dapat diurungkan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, lanjutkan!',
                        cancelButtonText: 'Batal'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            // Lanjutkan ke tindakan setelah konfirmasi
                            window.location.href = 'admin/Admin/aktivasi_mhs';
                        }
                        });
                    }
                    <?php if ($this->session->flashdata('swal_icon')) { ?>
                        Swal.fire({
                            icon: '<?= $this->session->flashdata('swal_icon') ?>',
                            title: '<?= $this->session->flashdata('swal_title') ?>',
                        })
                    <?php } ?>
                </script>
                    <div class="card-header bg-secondary text-light">
                        <a href="<?=base_url('admin')?>" class="btn btn-sm btn-outline-light"><i class="fas fa-arrow-left"></i> </a> 
                        <a href="<?=base_url('admin/Admin/cetakDataMhs')?>" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> Print semua data</a>
                        <a onclick="return konfirAktivasi()" href="#" class="btn btn-outline-warning btn-sm"><i class="fas fa-user-check"></i> Aktivasi Semua</a>
                        <a href="admin/Admin/exportMhsXls" class="btn btn-success btn-sm"><i class="fas fa-table"></i> Export Excel</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mahasiswa as $mhs) : ?>
                                    <tr>
                                        <td><?= $mhs['nama'] ?></td>
                                        <td><?= $mhs['identitas'] ?></td>
                                        <td>
                                            <?php if ($mhs['status']==1) { ?>
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
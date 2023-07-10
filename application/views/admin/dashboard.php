<?php if ($user['role_id'] == 3) { ?>
    <div class="container-fluid px-4">
        <script>
            <?php if ($this->session->flashdata('swal_icon')) { ?>
                Swal.fire({
                    icon: '<?= $this->session->flashdata('swal_icon') ?>',
                    title: '<?= $this->session->flashdata('swal_title') ?>',
                })
            <?php } ?>
        </script>
        <div class="alert alert-success mt-4" role="alert">
            <h4 class="alert-heading"><i class="fas fa-info-circle"></i> Hallo <?= $user['nama'] ?>!</h4>
            <p>Monitoring selalu kegiata di pembelajaran E-lIP ini.</p>
            <hr>
            <p class="mb-0">Control Panel untuk menyeting page.</p>
            <div class="kontrol">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                    <i class="fas fa-gear"></i> setting
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Control Panel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#kampus"><i class="fas fa-university fa-2x"></i></button>
                                                <p>Kampus</p>
                                            </div>
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#slogan"><i class="fa-solid fa-font fa-2x"></i></button>
                                                <p>Slogan</p>
                                            </div>
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#dosen"><i class="fa-solid fa-palette fa-2x"></i></button>
                                                <p>Dosen</p>
                                            </div>
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#mahasiswa"><i class="fa-solid fa-palette fa-2x"></i></button>
                                                <p>Mahasiswa</p>
                                            </div>
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#thumbnail"><i class="fas fa-image fa-2x"></i></button>
                                                <p>Img Dashboard</p>
                                            </div>
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#thumbnail"><i class="fas fa-image fa-2x"></i></button>
                                                <p>Logo</p>
                                            </div>
                                            <!-- <div class="col">
                                                <button data-toggle="modal" data-target="#thumbnail"><i class="fas fa-image fa-2x"></i></button>
                                                <p>icon</p>
                                            </div>
                                            <div class="col">
                                                <button data-toggle="modal" data-target="#thumbnail"><i class="fas fa-image fa-2x"></i></button>
                                                <p>icon</p>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal kampus -->
                <div class="modal fade" id="kampus" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah Nama Kampus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="ganti_kampus" method="post">
                                    <div class="form-group">
                                        <label for="">Nama Kampus</label>
                                        <input type="text" class="form-control" name="nama_kampus">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal slogan -->
                <div class="modal fade" id="slogan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah Slogan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="ganti_kampus" method="post">
                                    <div class="form-group">
                                        <label for="">Slogan</label>
                                        <input type="text" class="form-control" name="nama_kampus">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- img thumbnail -->
                <div class="modal fade" id="thumbnail" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah Thumbnail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="ganti_thumbnail" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">upload thumbnail</label>
                                        <input type="file" class="form-control" name="img">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal warna dosen -->
                <div class="modal fade" id="dosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah warna</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('warna_dosen') ?>" method="post">
                                    <div class="form-group">
                                        <label for="">Ubah warna dosen</label>
                                        <input type="color" class="form-control" name="warna_dosen">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal warna mahasiswa -->
                <div class="modal fade" id="mahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah warna</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('warna_mahasiswa') ?>" method="post">
                                    <div class="form-group">
                                        <label for="">Ubah warna mahasiswa</label>
                                        <input type="color" class="form-control" name="warna_mahasiswa">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="count">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <a href="<?= base_url('data_mhs') ?>">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <?= $countmhs ?> Mahasiswa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <a href="<?= base_url('data_dsn') ?>">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <?= $countdsn ?> Dosen</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <a href="<?= base_url('data_adm') ?>">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <?= $countadm ?> Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-gear fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container-fluid px-4">
        <h1>Halaman Tidak Di Temukan</h1>
    </div>
<?php } ?>
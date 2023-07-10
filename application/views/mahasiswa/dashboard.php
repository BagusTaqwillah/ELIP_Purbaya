                <style>
                    .dark {
                        background-color: #000;
                        color: #fff;
                    }

                    .topket {
                        background-color: rgb(222, 38, 114);
                    }

                    .pelatihan {
                        display: flex;
                        justify-content: center;
                    }

                    .pelatihan a {
                        width: 200px;
                        margin: 2px;
                        background-color: rgb(222, 38, 114);
                    }

                    .dosen {
                        margin-top: 50px;
                    }

                    .dosen h3 {
                        background-color: rgb(242, 234, 234);
                        border-left: 5px solid blue;
                    }

                    .mahasiswa h3 {
                        background-color: rgb(242, 234, 234);
                        border-left: 5px solid blue;
                    }

                    .panduan .col {
                        margin-top: 10px;
                    }

                    .panduan a {
                        text-decoration: none;
                        color: black;
                    }

                    .panduan a:hover {
                        text-decoration: none;
                        color: blue;
                    }

                    .panel {
                        background-color: white;
                        height: 100px;
                    }

                    .home {
                        text-decoration: none;
                        color: white;
                        /* background-color: <?= $kontrol['warna_mahasiswa'] ?>; */
                        padding: 8px;
                        border-radius: 10px;
                    }

                    .ds {
                        padding: 8px;
                        border-radius: 20px 0 0 20px;
                        background-color: <?= $kontrol['warna_mahasiswa'] ?>;
                    }
                </style>
                <?php if ($user['role_id'] == 1) { ?>
                    <div class="container-fluid px-4">
                        <div class="row mt-3">
                            <div class="col-md-10">
                                <h3><?= $judul ?></h3>
                            </div>
                            <div class="col">
                                <div class="ds">
                                    <a class="home" href="<?= base_url('Dashboard') ?>">Home </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <script>
                                    <?php if ($this->session->flashdata('swal_icon')) { ?>
                                        Swal.fire({
                                            icon: '<?= $this->session->flashdata('swal_icon') ?>',
                                            title: '<?= $this->session->flashdata('swal_title') ?>',
                                        })
                                    <?php } ?>
                                </script>
                            </div>
                        </div>

                        <!-- <div class="container">
                            <div class="row">
                                <h3>Pelatihan</h3><hr>
                                <div class="col pelatihan">
                                    <a href="" class="btn btn-primary">Junior Web</a>
                                    <a href="" class="btn btn-primary">IOT</a>
                                    <a href="" class="btn btn-primary">Algoritma</a>
                                    <a href="" class="btn btn-primary">Electronika</a>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card mb-4">

                                    <img src="<?= base_url('assets/control') ?>/<?= $kontrol['img'] ?>" alt="">
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="card mb-4">
                                    <div class=" card-header p-3 text-light">
                                        <i class="fas fa-chart-area me-1"></i>
                                        E-Lip
                                    </div>
                                    <div class="card-body text-center bg-dark text-light">
                                        <img src="<?=base_url('assets/img/logo_poltek.png')?>" alt="" width="16%">
                                        <h3>Selamat Datang Di <span class="text-warning">E-lip</span></h3>
                                        <p>Media Website E-learning politeknik <?= $kontrol['nama_kampus'] ?> guna mendukung akademik mahasiswa prodi teknik informatika</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panduan mb-4">
                            <div class="container">
                                <div class="row mahasiswa">
                                    <div class="col">
                                        <h3 class="p-3 text-dark">Panduan Mahasiswa</h3>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <i class="fa-regular fa-file-pdf fa-2x"></i>
                                                    <a href="<?= base_url('assets/panduan/Project Pesawat.pdf') ?>" class="text-dark">Panduan E-LIP untuk Mahasiswa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row dosen">
                                <div class="col">
                                    <h3 class="p-3  text-dark">Panduan Dosen</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <i class="fa-regular fa-file-pdf fa-2x"></i>
                                                <a href="<?= base_url('assets/panduan/Project Pesawat.pdf') ?>" class="text-dark">Panduan E-LIP untuk Dosen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
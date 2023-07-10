<style>
    .accordion {
        background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.5), <?php echo $kontrol['warna_mahasiswa'] ?>);
        /* background-color: white; */
    }
    .drop{
        background-color:black;
        color:white;
        margin-top:10px;
        width:90%;
        border-radius:20px;
        margin-left:5px;
    }
    .accordion {
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
    }
</style>
<?php if ($user['role_id'] == 1) { ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="biodata">

                        </div>
                        <div class="sb-sidenav-menu-heading">Dashboard</div>
                        <a class="nav-link text-white" href="<?= base_url('mahasiswa') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link text-white" href="<?= base_url('mhs_edaran') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-envelope"></i></div>
                            Surat Edaran
                        </a>
                        <div class="sb-sidenav-menu-heading">Mahasiswa</div>
                        <a class="nav-link collapsed text-white drop" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-columns"></i></div>
                            Tutorial
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-white" href="<?= base_url('pemograman') ?>">Pemograman</a>
                                <a class="nav-link text-white" href="">IOT</a>
                            </nav>
                        </div>
<!--versi baru  -->
                        <a class="nav-link collapsed text-white" href="<?= base_url('mhs_new/Tugas') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-briefcase"></i></div>
                            Tugas
                        </a>
                        <a class="nav-link collapsed text-white" href="<?= base_url('mhs_new/Matkul') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-book-open"></i></div>
                            Matkul
                        </a>
                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Matkul
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    semester
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?= base_url('mhs/Matkul_mhs/semester1') ?>">Semester I</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Matkul_mhs/semester2') ?>">Semester II</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Matkul_mhs/semester3') ?>">Semester III</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Matkul_mhs/semester4') ?>">Semester IV</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Matkul_mhs/semester5') ?>">Semester V</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Matkul_mhs/semester6') ?>">Semester VI</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>  -->
                        <a class="nav-link collapsed text-white" href="<?= base_url('pelatihan') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-users"></i></div>
                            Pelatihan
                        </a>
                        <a class="nav-link collapsed text-white" href="<?= base_url('krs') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-file-alt" ></i></div>
                            Kartu Rencana Studi
                        </a>
                        <a class="nav-link collapsed text-white" href="<?= base_url('Meeting') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-video"></i></div>
                            Meeting
                        </a>

<!-- akhir ver baru -->
 <!-- versi lama  -->
                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#tugasPages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                            Tugas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="tugasPages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    semester
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?= base_url('mhs/Tugas/semester1') ?>">Semester 1</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Tugas/semester2') ?>">Semester 2</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Tugas/semester3') ?>">Semester 3</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Tugas/semester4') ?>">Semester 4</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Tugas/semester5') ?>">Semester 5</a>
                                        <a class="nav-link" href="<?= base_url('mhs/Tugas/semester6') ?>">Semester 6</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        
                        <!-- menu yang diedit -->
                       
                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePelatihan" aria-expanded="false" aria-controls="collapsePelatihan">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-briefcase"></i></div>
                                NOT FOUND
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> 
                            <div class="collapse" id="collapsePelatihan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('p_web') ?>">Junior Web</a>
                                    <a class="nav-link" href="">IOT</a>
                                </nav>
                            </div> -->
                        <!-- <a class="nav-link collapsed" href="<?= base_url('logout') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                                Presensi
                            </a> -->
                        
                        <!-- <a class="nav-link collapsed text-white" href="<?= base_url('khs') ?>">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-file-alt" ></i></div>
                            Kartu Hasil Studi
                        </a> -->

                        
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
            <?php } ?>
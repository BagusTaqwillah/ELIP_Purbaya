<style>
    .accordion{
        background-image: linear-gradient(45deg,rgba(0, 0, 0, 1), <?php echo $kontrol['warna_dosen']?>);
        /* background-color: <?php echo $kontrol['warna_dosen']?>; */
    }
    .nav .nav-link a{
        color: white;
    }
</style>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion text-white sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link text-white" href="<?=base_url('dosen')?>">
                                <div class="sb-nav-link-icon text-white "><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Dosen</div>
                            
                            <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapseMatkul" aria-expanded="false" aria-controls="collapseMatkul">
                                <div class="sb-nav-link-icon  "><i class="fa-solid fa-book-bookmark"></i></div>
                                Mata Kuliah
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseMatkul" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav ">
                                    <a class="nav-link" href="<?=base_url('matkul_1')?>">Semester 1</a>
                                    <a class="nav-link" href="<?=base_url('matkul_2')?>">Semester 2</a>
                                    <a class="nav-link" href="<?=base_url('matkul_3')?>">Semester 3</a>
                                    <a class="nav-link" href="<?=base_url('matkul_4')?>">Semester 4</a>
                                    <a class="nav-link" href="<?=base_url('matkul_5')?>">Semester 5</a>
                                    <a class="nav-link" href="<?=base_url('matkul_6')?>">Semester 6</a>
                                </nav>
                            </div>
                         
                            <a class="nav-link collapsed" href="<?=base_url('penugasan_dsn')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                Penugasan
                            </a> 

                            <a class="nav-link collapsed" href="<?=base_url('pelatihan_dsn')?>">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-folder-open"></i></div>
                                Pelatihan
                            </a> 
                            <!-- <a class="nav-link collapsed" href="<?=base_url('profil_dsn')?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Profil
                            </a> -->
                            <a class="nav-link collapsed" href="<?=base_url('Belajar/tutorial_dsn')?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                                Tutorial
                            </a>
                            <a class="nav-link collapsed" href="<?=base_url('ruangan')?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-school"></i></div>
                                Ruangan
                            </a>
                            <a class="nav-link collapsed" href="<?=base_url('Dosen/meet')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>
                                Meeting
                            </a>
                            <a class="nav-link collapsed" href="<?=base_url('dosen_krs')?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                                KRS
                            </a>
                            <a class="nav-link collapsed" href="<?=base_url('logout')?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
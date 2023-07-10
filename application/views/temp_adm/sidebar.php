<style>

</style>
<?php if ($user['role_id'] == 3) { ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion  sb-sidenav-dark bg-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="biodata">

                        </div>
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= base_url('admin/Admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Master Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('A_user') ?>">manage user</a>
                                <a class="nav-link" href="<?= base_url('A_matkul') ?>">mata kuliah</a>
                                <a class="nav-link" href="<?= base_url('A_pelatihan') ?>">pelatihan</a>
                                <a class="nav-link" href="<?= base_url('A_ruangan') ?>">Ruangan</a>
                                <a class="nav-link" href="<?= base_url('A_surat_edaran') ?>">Surat Edaran</a>
                                <a class="nav-link" href="<?= base_url('A_krs') ?>">KRS</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="<?= base_url('profil_adm') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Profil
                        </a>
                        <a class="nav-link collapsed" href="<?= base_url('admin/Admin/backup') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
                            Backup Database
                        </a>
                        <a class="nav-link collapsed" href="<?= base_url('adm_tutorial') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-school"></i></div>
                            Tutorial
                        </a>
                        <a class="nav-link collapsed" href="<?= base_url('logout') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-sign-out-alt"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
            <?php } ?>
<style>
    /* .sb-topnav{
        background-image: linear-gradient(45deg,rgba(0, 0, 0, 1),rgb(85, 8, 85));
    } */
    .sb-topnav{
            box-shadow:0 0 10px rgba(0,0,0,0.5);
        }
</style>
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><img src="<?=base_url('assets/img/logo_elip.png')?>" alt="" width="50%"></a>
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-dark"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= base_url('profil_dsn') ?>">Profil</a></li>
                <li><a class="dropdown-item" href="<?= base_url('edit_profil_dsn') ?>">Edit Profil</a></li>
                <li><a class="dropdown-item" href="<?= base_url('ubah_password_dsn') ?>">Ubah Password</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
            
          
        </nav>
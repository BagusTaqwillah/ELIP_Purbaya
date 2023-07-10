<style>
    body {
        background-image: url('assets/img/login/bg_login.jpg');
        background-size: cover;
        width: 100%;
    }

    body::after {
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: 0;
        content: "";
        background-image: linear-gradient(40deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7), rgba(194, 12, 134, 0.6));
    }

    /* .jumbotron{
            height: 300px;
            background-image: url('assets/img/login/bg_login.jpg');
            background-size: cover;
            background-position-y: -20px;
            border-radius: 0px 0px 150px 150px;
        } */
    .login {
        height: 100%;
        position: relative;
        z-index: 1;
        padding-top: 50px;
    }

    .thumb {
        width: 200px;
        padding-bottom: 20px;
    }

    .card {
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        background-color: rgba(255, 255, 255, 0.284);
        color: white;
    }
    .input-group{
        background-color:rgba(255, 255, 255, 0.284) ;
    }

    @media (max-width: 767.98px) {
        .jumbotron {
            border-radius: 0px 0px 20px 20px;
            height: 300px;
        }
    }
</style>

<div class="login">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 mx-auto">
            <img src="<?=base_url('assets/img/logo_elip.png')?>" alt="" width="100%" class="text-center thumb">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card p-5">
                    <h3 class="text-center p-3">Login</h3>
                    <?= $this->session->flashdata('Auth');
                    ?>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email">
                        </div>
                        <small class="text-danger text-small"><?= form_error('email') ?></small>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password">
                        </div>
                        <small class="text-danger text-small"><?= form_error('password') ?></small>
                        <div class="reg text-center">
                            <button type="submit" class="btn btn-primary mx-auto">Login</button>
                        </div>

                    </form>
                    <p class="text-center ">Belum Punya akun <a href="<?= base_url('registrasi') ?>">Daftar?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-image: url('assets/img/login/bg_login.jpg');
        background-size: cover;
    }

    body::after {
        position: absolute;
        width: 100%;
        height: 1000px;
        bottom: 0;
        content: "";
        margin-bottom: -70px;
        background-image: linear-gradient(40deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7), rgba(194, 12, 134, 0.6));
    }

    .thumb {
        width: 200px;
        padding-top: 10px;
    }

    .login {
        position: relative;
        z-index: 1;
    }

    .card {
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        background-color: rgba(255, 255, 255, 0.284);
        color: white;
        padding-bottom: 20px;
    }

    .user {
        width: 150px;
        margin-bottom: 20px;
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
            <div class="col mx-auto mt-4 mb-4">
                <img src="<?= base_url('assets/img/logo_elip.png') ?>" alt="" width="50%" class="text-center thumb">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card p-2">
                    <h3 class="text-center p-3">Registrasi</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
                                        <small class="text-small text-danger"><?= form_error('nama') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="NIM/NID anda" name="identitas">
                                        <small class="text-small text-danger"><?= form_error('identitas') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" Email anda" name="email">
                                        <small class="text-small text-danger"><?= form_error('email') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="No Hp anda" name="no_hp">
                                        <small class="text-small text-danger"><?= form_error('no_hp') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="Tgl lahir anda" name="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Alamat anda" name="alamat">
                                    </div>
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="password" name="password1">
                                                    <small class="text-small text-danger"><?= form_error('password1') ?></small>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="ulangi password" name="password2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="reg text-center">
                                            <button type="submit" class="btn btn-primary mx-auto">Registrasi</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <!-- <div class="col-md-6">CEK</div> -->
                        </div>
                    </div>
                    <p class="text-center ">Sudah Punya Akun <a href="<?= base_url('Auth') ?>">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
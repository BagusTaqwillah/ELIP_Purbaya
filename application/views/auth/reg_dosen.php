<style>
        
        .jumbotron{
            height: 300px;
            background-image: url('assets/img/login/log_bg.jpg');
            background-size: cover;
            background-position-y: -20px;
            border-radius: 0px 0px 150px 150px;
        }
        .login{
            margin-top: -300px;
        }
       
        .card{
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
            background-color: rgba(255, 255, 255, 255);
        }
        .user{
            width: 150px;
            margin-bottom: 20px;
        }
        @media (max-width: 767.98px) { 
            .jumbotron{
                border-radius: 0px 0px 20px 20px;
                height: 300px;
            }
        }
    </style>
        <div class="jumbotron">
       
        </div>
        <div class="login">
            <div class="container mb-3">
                <div class="row text-center mb-2">
                    <div class="col-md-6 mx-auto">
                        <img src="<?=base_url('assets/img/logo.png')?>" alt="" class="text-center thumb" width="50%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card p-5">
                            <h3 class="text-center p-3"><?=$judul?></h3>
                            <div class="container">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" Nama lengkap" name="nama_dosen">
                                    <small class="text-small text-danger"><?=form_error('nama_dosen')?></small>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder=" Nid/nidn anda" name="nid">
                                    <small class="text-small text-danger"><?=form_error('nid')?></small>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Tanggal lahir anda" name="tgl_lahir">
                                    <small class="text-small text-danger"><?=form_error('tgl_lahir')?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" Alamat anda" name="alamat">
                                    <small class="text-small text-danger"><?=form_error('alamat')?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" No hp anda" name="no_hp">
                                    <small class="text-small text-danger"><?=form_error('no_hp')?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" Email anda" name="email">
                                    <small class="text-small text-danger"><?=form_error('email')?></small>
                                </div>
                                <div class="form-group">
                                    <select name="mk" id="" class="form-control">
                                        <option value="iot">Iot</option>
                                        <option value="technopreneur">Technopreuner</option>
                                        <option value="robotic">Robotic</option>
                                        <option value="electronika">Electronika</option>
                                        <option value="database">Database</option>
                                        <option value="pemograman web">Pemograman Web</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="password" name="password1">
                                                    <small class="text-small text-danger"><?=form_error('password1')?></small>
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
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                           
                                                            
                            </form>
                            </div>
                        </div>
                    </div>
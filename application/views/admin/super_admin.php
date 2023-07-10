<?php if ($user['role_id']!=5||$user['role_id']==null) {?>
    <?php 
    redirect('login','refresh');
    ?>
<?php }else {?>
<style>
    body{
       height:100vh;
       display:flex;
       justify-content:center;
       align-items:center;
    }
    .kartu{
        width:150px;
        height:150px;
        border-radius:50%;
        align-items:center;
        justify-content:center;
        border:1px solid black;
    }
    .kartu:hover{
        text-decoration:none;
        background-color:orange;
    }
    .pembungkus{
        display:flex;
        width:60%;
        margin:auto;
    }
    .display{
        box-shadow:0px 0px 5px rgba(0,0,0,0.5)
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto ">
            <div class="card text-center p-3 display">
                    <h3>Super Admin</h3>
                    <div class="container mt-4 mb-4">
                        <?php if ($service['status_page']==1) { ?> 
                         <small class="badge badge-warning">Proses Perbaikan...</small>
                         <?php }else{?>
                            <small class="badge badge-success">Status OK...</small>        
                        <?php }?>
                        <div class="row pembungkus text-center">
                            <div class="col-md-6">
                                <a href="https://cpanel.epizy.com/login.php">
                                <div class="card kartu">
                                    <img class="mx-auto" src="<?=base_url('assets/img/cpanel.png')?>" alt="" width="50%">
                                    <h5>Cpanel</h5>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                 
                                    <a href="Dashboard/status_system">
                                    <div class="card kartu">
                                        <img class="mx-auto" src="<?=base_url('assets/img/monitoring.png')?>" alt="" width="50%">
                                        <h5>Maintenance</h5>
                                    </div>
                                    </a>
                            </div>
                        </div>
                        <!-- Small modal -->
                            <button type="button" class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target=".bd-example-modal-sm">Password Cpanel</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                       Informasi Secret Akun
                                    </div>
                                    <div class="modal-body">
                                        <p>user : epiz_33178430</p>
                                        <p>password : PWoizIOfHuJPvxm</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                       
                    </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
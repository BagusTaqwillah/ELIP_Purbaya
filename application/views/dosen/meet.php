<script>
            <?php if($this->session->flashdata('swal_icon')){?>
                Swal.fire({
                    icon:'<?=$this->session->flashdata('swal_icon')?>',
                    title:'<?=$this->session->flashdata('swal_title')?>',  
                })
            <?php } ?>
            </script>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3>Buat Room Meet</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                  <i class="fas fa-plus"></i> Buat Meet
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Form Buat Meet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url("Meeting/buatRoom")?>" method="post">
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" id=""class="form-select">
                                    <?php foreach($kelas as $kls){?>
                                    <option value="<?=$kls['nama_kelas']?>"><?=$kls['nama_kelas']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Matkul</label>
                                <select name="nama_mk" id=""class="form-select">
                                <?php foreach($matkul as $mk){?>
                                    <option value="<?=$mk['nama_mk']?>"><?=$mk['nama_mk']?></option>
                                <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Generate Room</button>
                        </div>
                    </div>
                </div>
                 </form>
                </div>
        </div>
    </div>
    <div class="row  mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Room Meet Yang Dibuat
                </div>
                <div class="card-body">
                  <div class="container">
                    <?php foreach($meet as $m) :?>
                    <div class="row">
                        <div class="col">
                            <div class="card " >
                            <div class="card-body text-center">
                                <h4><?=$m['kelas']?></h4>
                                <h5 class="card-title"><?=$m['nama_dosen']?></h5>
                                <p class="card-text"><?=$m['nama_mk']?></p>
                                <a href="<?=base_url('Dosen/masukMeet/')?><?=$m['link_url']?>" class="btn btn-primary"><i class="fas fa-video"></i> Masuk</a>
                                <a onclick="return confirm('yakin ingin hapus meet')" href="<?=base_url('Dosen/deleteMeet/')?>/<?=$m['id_meet']?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
        <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_mec2ti4p.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay></lottie-player>
        </div>
    </div>
</div>
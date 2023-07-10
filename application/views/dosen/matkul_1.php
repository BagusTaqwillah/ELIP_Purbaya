<style>
    .card-footer{
        background-color: purple;
        border-radius: 50px;
    }
    .card{
        background-image: url('assets/img/mk/matkul.jpg');
        background-size: cover;
        background-position-x: right;
        background-position-y: center;
        color: white;
        height: 100px;
        text-align: right;
    }
    .card:hover{
        opacity: 0.5;
    }
</style>
<div class="container mt-4">
    <script>
        <?php if($this->session->flashdata('swal_icon')) {?>
            Swal.fire({
                icon : '<?=$this->session->flashdata('swal_icon')?>',
                title : '<?=$this->session->flashdata('swal_title')?>',
            })

        <?php }?>
    </script>
    <div class="row">
        <?php foreach($matkul as $mk):?>
        <div class="col-md-3">
            <a href="<?=base_url('')?>mk/<?=$mk['nama_mk']?>">
            <div class="card p-4 mt-2">
                <p><b><?=$mk['nama_mk']?></b></p>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>
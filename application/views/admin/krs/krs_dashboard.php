<style>
 .kartu{
    background-image:linear-gradient(-45deg,blue,purple);
    color:white;
    border:none;
    border-radius:10px;
    text-decoration:none;
 }
 .kartu:hover{
    opacity: 0.5;
    transition:0.5s;
 }
</style>
<script>
    <?php if ($this->session->flashdata('swal_icon')) { ?>
        Swal.fire({
            icon: '<?= $this->session->flashdata('swal_icon') ?>',
            title: '<?= $this->session->flashdata('swal_title') ?>',
        })
     <?php } ?>
</script>
<div class="container px-4">
    <div class="row">
        <div class="col mt-3">
            <h3>Data KRS</h3>
        </div>
    </div>
    <div class="row">
        <?php foreach($kelas as $kls) :?>
        <div class="col-md-3 mt-2">
            <a href="admin/A_Krs/data_krs/<?=$kls['nama_kelas']?>">
            <div class="card  kartu p-4 text-center">
                <h4><?=$kls['nama_kelas']?></h4>
            </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>
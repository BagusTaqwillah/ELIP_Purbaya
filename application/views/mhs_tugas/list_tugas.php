<style>
    .dark {
        background-color: #000;
        color: #fff;
    }

    .list_tugas a {
        text-decoration: none;
        font-size: 14px;
    }

    .list_tugas .icon {
        margin-right: 10px;
    }

    .slug {
        background-image: url('../assets/img/mk/bg_mk3.jpg');
        background-position-y: center;
        background-position-x: right;
        background-size: cover;
        height: 240px;
    }

    .slug,
    h3,
    p {
        z-index: 1;
        position: relative;
    }

    .slug::after {
        position: absolute;
        content: "";
        width: 100%;
        bottom: 0;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        height: 100%;
        margin-left: -25px;
    }
</style>
<div class="container-fluid px-4">
    <div class="row">
        <div class="col ">
            <div class="card p-4 mt-3 text-white slug">
                <h3>Penugasan <?=$mk_tugas?></h3>
                <p><?=$judul?></p>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3">
            <div class="card p-3 kartu">
                <h4>Happy Nugas</h4>
                <p>bisa diselesaikan sekarang asalkan jangan di tunda-tunda</p>

            </div>
        </div>
        <div class="col-md-9 list_tugas">
            <?php foreach ($tugas as $t) : ?>
                <?php if ($t['kelas']==$mhs['kelas']) { ?>
                     <div class="card p-2 mt-2 ">
                        <a class="text-dark" href="<?= base_url('mhs_new/Tugas/isi_tugas') ?>/<?=$t['id_tugas']?>"><i class="fa-solid fa-clipboard-list fa-2x rounded-circle icon"></i><?=$t['nama_mk']?></a>
                    </div>
                    <?php }?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
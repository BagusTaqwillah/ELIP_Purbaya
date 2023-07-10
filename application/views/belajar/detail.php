<style>
    .card {
        padding: 30px;
    }

    @media(max-width:320px) {
        .card {
            padding: 20px;
        }
    }
</style>
<div class="container px-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="isi">
                        <h3>#Materi <?= $isi['judul'] ?></h3>
                        <p>Pengirim : <?= $isi['penerbit'] ?></p>
                        <small>tanggal upload : <?= $isi['tgl_upload'] ?></small>
                        <hr>
                        <p><?= $isi['isi'] ?></p>
                    </div>
                    <div class="komen" width="30%">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="post" width="30%">
                                        <div class="form-group">
                                            <p>komentar</p>
                                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-warning mt-2">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
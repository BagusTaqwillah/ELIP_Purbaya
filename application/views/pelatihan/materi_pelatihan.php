<style>
    .pengumpulan{
        border: 1px solid black;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <?=$materi_pelatihan['judul']?>
                <?=$materi_pelatihan['materi']?>
            </div>
            
        </div>
    </div>
    <div class="row mt-2">
    <div class="col">
         <div class="card pengumpulan">
                <div class="card-header">
                    Pengumpulan Tugas Pelatihan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tugas</label>
                            <input type="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
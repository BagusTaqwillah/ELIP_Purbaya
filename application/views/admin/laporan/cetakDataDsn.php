<style>
	hr{
		border:2px solid blue;
	}
	.atas img{
		width:150px;
		margin-right:200px;
	}
	.ttd{
		margin-left:auto;
		margin-top:20px;
	}
	.sp{
		text-decoration:underline;
		margin-bottom:-5px;
	}
</style>
<div class="container">
    <div class="card p-4">
    <div class="row">
        <div class="col-md-3 atas">
		    <img src="<?=base_url('assets/img/poltek.jpg')?>" alt="" width="100%">
		</div>
		<div class="col-md-9">
			<h3>Politeknik Purbaya</h3>
			<h3><i><b>Politeknik Technopreneur</b></i></h3>
			<small class="text-small">Kampus 1 :Jln Pancakarya No 1 Kajen Talang Tegal 52193</small><br>
		    <small>Kampus 2:Jln Supriyadi No 72 Trayeman Slawi Tegal</small><br>
			<small>Telp:08211140080</small><br>
			<small>Laman : <a href="https://purbaya.ac.id/">hhtps://purbaya.ac.id</a></small>
		</div>
    </div>
    <hr>
    <div class="row">
        <div class="col mt-3">
            <table border="1" cellspacing="0" cellpadding="10" width="100%">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NID/NIPY</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>
                <?php $i=1; foreach ($dosen as $dsn) : ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$dsn['nama']?></td>
                    <td><?=$dsn['identitas']?></td>
                    <td><?=$dsn['alamat']?></td>
                    <td><?=$dsn['no_hp']?></td>
                </tr>
                <?php endforeach;?>
            </table>
            
        </div>
    </div>
    </div>
</div>

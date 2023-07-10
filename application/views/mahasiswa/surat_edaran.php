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
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card p-4 mt-3 mb-3">
				<div class="atas mx-auto">
					<div class="row">
						<div class="col-md-3">
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
				</div>
				<hr>
				<div class="sk text-center">
					<h5 class="sp">SURAT PEMBERITAHUAN</h5>
					<P>Nomor : <?=$edaran['no_surat']?></P>
				</div>
				<div class="isi">
					<p>Berdasarkan Surat Keputusan Bersama (SKB) <?=$edaran['isi_surat']?></p>
				</div>
				<div class="penutup">
					<p>Demikian pemberitahuan ini kami sampaikan,atas perhatian dan kerjasamanya kami ucapkan terima kasih</p>
				</div>
				<div class="ttd">
					<p>Tegal <?=$edaran['tgl_dibuat']?></p>
					<img src="<?=base_url('assets/img/ttd_direktur.jpg')?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
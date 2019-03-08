<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Detail Data Pelamar
			  </div>
			  <div class="card-body">
			    <h5 class="card-title"><?= $tb_pelamar['nama']; ?></h5>
			    <b>KTP:</b><p class="card-text"><?= $tb_pelamar['ktp']; ?></p>
			    <b>No HP:</b><p class="card-text"><?= $tb_pelamar['nohp']; ?></p>
			    <b>Alamat:</b><p class="card-text"><?= $tb_pelamar['alamat']; ?></p>
			    <b>Pendidikan:</b><p class="card-text"><?= $tb_pelamar['pendidikan']; ?></p>
			    <b>Jurusan:</b><p class="card-text"><?= $tb_pelamar['jurusan']; ?></p>
			    
			    
			    <a href="<?= base_url(); ?>pelamar" class="btn btn-primary">Kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>
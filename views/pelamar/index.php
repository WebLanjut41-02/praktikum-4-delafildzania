<div class= "container">

	<?php if($this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pelamar
			  <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?php base_url(); ?>pelamar/tambah" class="btn btn-primary">Tambah Data Pelamar</a>	
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari data pelamar . . ." name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit">Cari</button>
				  </div>
				</div>

			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Data Pelamar</h3>
			<?php 
	echo $this->pagination->create_links();
	?>
			<?php if(empty($tb_pelamar)) : ?>
				<div class="alert alert-danger" role="alert">
					Data pelamar tidak ditemukan.
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($tb_pelamar as $pel) : ?>
					<li class="list-group-item">
					  	<?= $pel['id_pelamar']; ?>
					  	<?= $pel['nama']; ?>
					  	<a href="<?= base_url(); ?>pelamar/hapus/<?= $pel['id_pelamar']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
					  	<a href="<?= base_url(); ?>pelamar/detail/<?= $pel['id_pelamar']; ?>" class="badge badge-primary float-right">Detail</a>
					  	<a href="<?= base_url(); ?>pelamar/ubah/<?= $pel['id_pelamar']; ?>" class="badge badge-success float-right">Ubah</a>
				 	</li>
				<?php endforeach; ?>
			</ul>
		</div>


	</div>

</div>
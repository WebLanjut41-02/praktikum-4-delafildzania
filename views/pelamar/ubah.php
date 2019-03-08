<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    <b>UBAH DATA PELAMAR</b>
			  </div>

			  <div class="card-body">
			   <form action="" method="POST">
			   		<input type="hidden" name="id_pelamar" value=<?= $tb_pelamar['id_pelamar'];  ?>">
   					<div class="form-group">
	      				<label for="nama">Nama Pelamar</label>
					      <input type="text" name="nama" class="form-control" id="nama" value="<?= $tb_pelamar['nama']; ?>">
					      <small class="form-text text-danger"><?= form_error('nama'); ?></small>
				    </div>
				    <div class="form-group">
	      				<label for="ktp">No KTP</label>
					      <input type="text" name="ktp" class="form-control" id="ktp" value="<?= $tb_pelamar['ktp']; ?>">
					      <small class="form-text text-danger"><?= form_error('ktp'); ?></small>
				    </div>
				     <div class="form-group">
				      <label for="jk">Jenis Kelamin</label>
				      <select id="jk" name="jk" class="form-control">
				      	<?php foreach($jk as $j) : ?>
				      		<?php if($j == $tb_pelamar['jk']) : ?>
				        		<option value="<?= $j; ?>" selected><?= $j; ?></option>
				        	<?php else : ?>
				        		<option value="<?= $j; ?>"><?= $j; ?></option>
				        	<?php endif; ?>
				    	<?php endforeach; ?>
				      </select>
				    </div>
				    <div class="form-group">
	      				<label for="nohp">Nomor HP</label>
					      <input type="text" name="nohp" class="form-control" id="nohp" value="<?= $tb_pelamar['nohp']; ?>">
					      <small class="form-text text-danger"><?= form_error('nohp'); ?></small>
				    </div>
				    <div class="form-group">
	      				<label for="email">Email</label>
					      <input type="email" name="email" class="form-control" id="email" placeholder="@gmail.com" value="<?= $tb_pelamar['email']; ?>">
					      <small class="form-text text-danger"><?= form_error('email'); ?></small>
				    </div>
				    <div class="form-group">
	      				<label for="alamat">Alamat</label>
					      <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $tb_pelamar['alamat']; ?>">
					      <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
				    </div>
				    <div class="form-group">
				      <label for="pendidikan">Pendidikan</label>
				      <select id="pendidikan" name="pendidikan" class="form-control">
				      	<?php foreach($pendidikan as $p) : ?>
				      		<?php if($p == $tb_pelamar['pendidikan']) : ?>
				        		<option value="<?= $p; ?>" selected><?= $p; ?></option>
				        	<?php else : ?>
				        		<option value="<?= $p; ?>"><?= $p; ?></option>
				        	<?php endif; ?>
				    	<?php endforeach; ?>
				      </select>
				    </div>
				    <div class="form-group">
	      				<label for="jurusan">Jurusan</label>
					      <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?= $tb_pelamar['jurusan']; ?>">
					      <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
				    </div>
				     <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>

</div>
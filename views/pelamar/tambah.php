<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    <b>INPUT DATA PELAMAR</b>
			  </div>

			  <div class="card-body">
			   <form action="" method="POST">
   					<div class="form-group">
	      				<label for="nama">Nama Pelamar</label>
					      <input type="text" name="nama" class="form-control" id="nama">
					      <small class="form-text text-danger"><?= form_error('nama'); ?></small>
				    </div>
				    <div class="form-group">
	      				<label for="ktp">No KTP</label>
					      <input type="text" name="ktp" class="form-control" id="ktp">
					      <small class="form-text text-danger"><?= form_error('ktp'); ?></small>
				    </div>
				     <div class="form-group">
				      <label for="jk">Jenis Kelamin</label>
				      <select id="jk" name="jk" class="form-control">
				        <option selected>Laki-Laki</option>
				        <option>Perempuan</option>
				      </select>
				    </div>
				    <div class="form-group">
	      				<label for="nohp">Nomor HP</label>
					      <input type="text" name="nohp" class="form-control" id="nohp">
					      <small class="form-text text-danger"><?= form_error('nohp'); ?></small>
				    </div>
				    <div class="form-group">
	      				<label for="email">Email</label>
					      <input type="email" name="email" class="form-control" id="email" placeholder="@gmail.com">
					      <small class="form-text text-danger"><?= form_error('email'); ?></small>
				    </div>
				    <div class="form-group">
	      				<label for="alamat">Alamat</label>
					      <input type="text" name="alamat" class="form-control" id="alamat">
					      <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
				    </div>
				    <div class="form-group">
				      <label for="pendidikan">Pendidikan</label>
				      <select id="pendidikan" name="pendidikan" class="form-control">
				        <option selected>Diploma</option>
				        <option>Sarjana</option>
				        <option>Magister</option>
				        <option>Doktor</option>
				      </select>
				    </div>
				    <div class="form-group">
	      				<label for="jurusan">Jurusan</label>
					      <input type="text" name="jurusan" class="form-control" id="jurusan">
					      <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
				    </div>
				     <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>

</div>
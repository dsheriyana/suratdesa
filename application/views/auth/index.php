
<body class="bg-forgot">
	<!-- wrapper -->
<form id="formLogin">
<div class="p-4 d-flex align-items-center">
	<div class="w-100">
		<div class="row justify-content-center">
			<div class="col-md-5 mt-5">
				<div class="text-center text-white mb-5">
						<img src="<?= base_url(); ?>public/vendor/assets/images/icons/logo-majalengka.png" width="90" alt="" />
						<h5>APLIKASI PELAYANAN MASYARAKAT<br>
							ANJUNGAN SURAT KETERANGAN DESA MANDIRI<br>
							DESA MEKARMULYA<br>
							KECAMATAN KERTAJATI</h5>
				</div>
				<div class="card">
					<div class="card-body">
						<form id="formLogin">
							<div class="text-center">
								<div class="form-group">
									
									<input name="nik" id="nik" class="form-control form-control-lg radius-30" type="text" placeholder="Masukkan NIK"  autocomplete="off">
									
								</div>
								
								<button type="submit" class="btn btn-primary btn-lg btn-block radius-30">Masuk</button> 

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</form>

<!-- /.modal -->

<form action="<?= base_url(); ?>auth/surat" method="POST">
<div class="modal fade bs-example-modal-xl" id="modalData" tabindex="-1" role="dialog" aria-labelledby="modalData " aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title mt-0">
					Data Penduduk : 321014....
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
					<div class="form-group row">
							<label for="nik" class="col-sm-3 col-form-label">NIK</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK :" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="nama" placeholder="Nama :" readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat, Tanggal Lahir : " readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin : " readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat : " readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Agama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="agama" name="agama" placeholder="Agama : " readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Status Perkawinan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan : " readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Pekerjaan</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan : " readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir : " readonly>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" id="button" class="btn btn-success mt-2"><i class="fas fa-arrow-right"></i> Lanjut</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>

<script src="<?= base_url(); ?>public/assets/js/script/cek_nik.js?ut=<?= date('his'); ?>"></script>

<div class="switcher-wrapper">
		<div class="switcher-btn">
		<?php if ($this->uri->segment(2) != 'login') { ?>
				<button onclick="location.href='<?= base_url('auth/login'); ?>'" type="button" id="halaman_admin" class="btn btn-rounded btn-light"><i class="fas fa-user-alt"></i></button>
			<?php } else { ?>
				<button onclick="location.href='<?= base_url('auth'); ?>'" type="button" id="halaman_admin" class="btn btn-rounded btn-light"><i class="fas fa-home"></i></button>
			<?php } ?>
		</div>
	</div>
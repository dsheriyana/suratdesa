
<body class="bg-forgot">
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
						<form id="formLogin" autocomplete="off">
							<div class="text-center">
								<div class="form-group">
								<input name="username" id="username" class="form-control form-control-lg radius-30" type="text" placeholder="Username">
								</div>
								<div class="form-group">
								<input name="password" id="password" class="form-control form-control-lg radius-30" type="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary mt-2">Masuk</button>

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script src="<?= base_url(); ?>public/assets/js/script/login.js?ut=<?= date('his'); ?>"></script>

<div class="switcher-wrapper">
		<div class="switcher-btn">
		<?php if ($this->uri->segment(2) != 'login') { ?>
				<button onclick="location.href='<?= base_url('auth/login'); ?>'" type="button" id="halaman_admin" class="btn btn-rounded btn-light"><i class="fas fa-user-alt"></i></button>
			<?php } else { ?>
				<button onclick="location.href='<?= base_url('auth'); ?>'" type="button" id="halaman_admin" class="btn btn-rounded btn-light"><i class="fas fa-home"></i></button>
			<?php } ?>
		</div>
	</div>

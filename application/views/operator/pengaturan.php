<body class="bg-forgot">
	<div class="p-4 d-flex align-items-center">
	<div class="w-100">
		<div class="row justify-content-center">
			<div class="col-md-5 mt-5">
				<div class="text-center text-white mb-5">
					<h4 class="font-size-18 font-weight-bold">PENGATURAN</h4>
				</div>
			</div>
			<div class="col-md-12">
				<button class="btn btn-light mb-2" type="button" onclick='location.href="<?= base_url("operator"); ?>"'><i class="fas fa-arrow-left"></i> Kembali</button>
				<div class="card">
					<div class="card-body">
						<div class="col-md-12">
							<form id="formKades">
								<div class="form-group row">
									<input type="hidden" name="id_setting" id="id_setting" value="<?= $pengaturan->id_setting; ?>">
									<label for="nama_kades" class="col-sm-2 col-form-label">Kepala Desa</label>
									<div class="col-sm-10">
										<div class="input-group">
											
											<input id="nama_kades" name="nama_kades" value="<?= $pengaturan->nama_kades; ?>" class="form-control" type="text">
											<div class="input-group-append">
												<button class="btn btn-primary" type="submit"> Update</button>
											</div>
										</div>

									</div>
								</div>
							</form>
							<form id="formCamat">
								<input type="hidden" name="id_setting" id="id_setting" value="<?= $pengaturan->id_setting; ?>">
								<div class="form-group row">
									<label for="nama_camat" class="col-sm-2 col-form-label">Camat</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" id="nama_camat" name="nama_camat" value="<?= $pengaturan->nama_camat; ?>"  class="form-control" type="text">
											<div class="input-group-append">
												<button class="btn btn-primary" type="submit"> Update</button>
											</div>
										</div>

									</div>
								</div>
							</form>
							<form id="formCamatNIP">
								<input type="hidden" name="id_setting" id="id_setting" value="<?= $pengaturan->id_setting; ?>">
								<div class="form-group row">
									<label for="nip_camat" class="col-sm-2 col-form-label">NIP Camat</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" id="nip_camat" name="nip_camat" value="<?= $pengaturan->nip_camat; ?>"  class="form-control" type="text">
											<div class="input-group-append">
												<button class="btn btn-primary" type="submit"> Update</button>
											</div>
										</div>

									</div>
								</div>
							</form>
							<form id="formKapolsek">
								<input type="hidden" name="id_setting" id="id_setting" value="<?= $pengaturan->id_setting; ?>">
								<div class="form-group row">
									<label for="nama_kapolsek" class="col-sm-2 col-form-label">Kapolsek</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" id="nama_kapolsek" name="nama_kapolsek" value="<?= $pengaturan->nama_kapolsek; ?>"  class="form-control" type="text">
											<div class="input-group-append">
												<button class="btn btn-primary" type="submit"> Update</button>
											</div>
										</div>

									</div>
								</div>
							</form>
							<div class="form-group row">
								<label for="nik" class="col-sm-2 col-form-label">Ubah Kata Sandi?</label>
								<div class="col-sm-10">

									<button class="btn btn-yes btn-primary" type="button"> Ya</button>
									<button class="btn btn-no btn-danger" type="button"> Tidak</button>

								</div>
							</div>
							<div id="ubah_sandi">
								<form id="formUbahSandi">
									<div class="form-group row">
										<label for="password_old" class="col-sm-2 col-form-label">Kata Sandi Lama</label>
										<div class="col-sm-10">
											<input type="password" name="password_old" id="password_old" class="form-control" required>
											<div class="msg mt-1">

											</div>
										</div>
									</div>
									<hr>
									<div class="form-group row">
										<label for="password_new" class="col-sm-2 col-form-label">Kata Sandi Baru </label>
										<div class="col-sm-10">
											<input type="password" name="password_new" id="password_new" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="password_conf" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi Baru</label>
										<div class="col-sm-10">
											<input type="password" name="password_conf" id="password_conf" class="form-control" required>
											<div class="msg2 mt-1">

											</div>
										</div>

									</div>
									<div class="form-group row">
										<label for="password_conf" class="col-sm-2 col-form-label"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-success">Update Kata Sandi</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url(); ?>public/assets/js/script/pengaturan.js?ut=<?= date('his'); ?>"></script>

<body class="bg-forgot">
	<div class="p-4 d-flex align-items-center">
		<div class="w-100">
			<div class="row justify-content-center">
				<div class="col-md-5 mt-5">
					<div class="text-center text-white mb-5">
						<h4 class="font-size-18 font-weight-bold">HALAMAN OPERATOR</h4>
					</div>
					<div class="card">
						<div class="card-body">
							<form id="formLogin">
								<div class="text-center">
									<div class="form-group row d-flex justify-content-center">
										<div class="col-md-9">
											<button onclick="location.href=`${base_url}operator/dokumen`" type="button" class="btn btn-block btn-primary mt-2">DATA DOKUMEN</button>
										</div>
										<div class="col-md-9">
											<button onclick="location.href=`${base_url}operator/penduduk`" type="button" class="btn btn-block btn-success mt-2">DATA PENDUDUK</button>
										</div>
										<div class="col-md-9">
											<button onclick="image_bg()" type="button" class="btn btn-block btn-warning mt-2">GANTI BACKGROUND WEBSITE</button>
										</div>
										<div class="col-md-9">
											<button type="button" onclick="location.href=`${base_url}operator/pengaturan`" class="btn btn-block btn-secondary mt-2">PENGATURAN</button>
										</div>
										<div class="col-md-9">
											<button type="button" onclick="location.href=`${base_url}operator/logout`" class="btn btn-block btn-danger mt-2">LOGOUT</button>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="modal fade bs-example-modal-xl" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd " aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mt-0">
						Tambah Data Penduduk
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="formTambah">
						<div class="row">
							<div class="col-md-12">

								<div class="form-group row">
									<label for="nik" class="col-sm-3 col-form-label">NIK</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" id="nik" name="nik" required>
									</div>
								</div>
							</div>
							<div class="col-md-12">

								<div class="form-group row">
									<label for="nama" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="nama" name="nama" required>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group row">
									<label for="tmp_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-9">
										<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-9">
										<select name="jk" id="jk" class="form-control" required>
											<option value="">Pilih Jenis Kelamin</option>
											<option value="L">Laki-laki</option>
											<option value="P">Perempuan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="blok" class="col-sm-3 col-form-label">Blok</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="blok" name="blok" required>
									</div>
								</div>
							</div>

							<div class="col-md-12">

								<div class="form-group row">
									<label for="rt" class="col-sm-3 col-form-label">RT/RW</label>
									<div class="col">
										<div class="row">
											<div class="col-sm-6">
												<input type="text" class="form-control" id="rt" name="rt" placeholder="Contoh: RT : 007">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="rw" name="rw" placeholder="Contoh: RW : 007">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="gol_darah" class="col-sm-3 col-form-label">Golongan Darah</label>
									<div class="col-sm-9">
										<select name="gol_dar" id="gol_dar" class="form-control">
											<option value="">Pilih Golongan Darah</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="AB">AB</option>
											<option value="O">O</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="agama" class="col-sm-3 col-form-label">Agama</label>
									<div class="col-sm-9">
										<select name="agama" id="agama" class="form-control">
											<option value="">Pilih Agama</option>
											<option value="Islam">Islam</option>
											<option value="Kristen">Kristen</option>
											<option value="Hindu">Hindu</option>
											<option value="Buddha">Buddha</option>
											<option value="Konghucu">Konghucu</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="status" class="col-sm-3 col-form-label">Status</label>
									<div class="col-sm-9">
										<select name="agama" id="agama" class="form-control">
											<option value="">Pilih Status</option>
											<option value="Kawin">Kawin</option>
											<option value="Belum Kawin">Belum Kawin</option>

										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="kepala_keluarga" class="col-sm-3 col-form-label">Kepala Keluarga</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group row">
									<label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" onclick="location.href=`${base_url}surat`" id="button" class="btn btn-success mt-2">Simpan</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="modalBg" tabindex="-1" role="dialog" aria-labelledby="modalAdd " aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mt-0">
						Ganti Background Website
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('operator/ganti_bg'); ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">

								<div class="form-group row">
									<label for="nik" class="col-sm-3 col-form-label">Gambar :</label>
									<div class="col-sm-9">
										<input type="file" class="form-control" id="image_bg" name="image_bg" required>
										<small style="color: red;">Pastikan gambar tidak boleh lebih dari 2 MB</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" id="button" class="btn btn-success mt-2">Simpan</button>
					</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<script src="<?= base_url(); ?>public/assets/js/script/tambah_data.js?ut=<?= date('his'); ?>"></script>

	<script>
		image_bg = () => {
			$("#modalBg").modal('show');
		}
	</script>

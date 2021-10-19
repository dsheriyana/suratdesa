<body class="bg-forgot">
	<div class="p-4 d-flex align-items-center">
	<div class="w-100">
	<form method="POST" action="reviewSKPW">

		<div class="row justify-content-center">
			<div class="col-md-5 mt-5">
				<div class="text-center text-white mb-5">
					<h4 class="font-size-18 font-weight-bold">FORMULIR KETERANGAN PINDAH WNI</h4>
					<input type="text" name="no_skpw" id="no_skpw" value="474.1/029/Pemdes/2021"  class="form-control" required>
				</div>
			</div>
			<div class="col-md-12">
				
				<div class="row">
						<div class="col-12 col-lg-9 mx-auto">
							
				
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">DATA DAERAH ASAL</h4>
									</div>
									<hr/>
									<div class="form-body">
										<!-- <div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-4">
												<input type="text" class="form-control">
											</div>
											<label class="col-sm-2 col-form-label">First Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control">
											</div>
										</div> -->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nomor KK</label>
											<div class="col-sm-10">
											<input type="text" name="kk" id="kk" placeholder="No. KK" value="<?= $pemohon['kk']; ?>"  class="form-control" readonly>

											<!-- <select class="single-select" id="kk" name="kk" required onchange="getKK(this.value)">>
													<option selected="" disabled="" value="">-- Pilih Nomor KK --</option> 
											<?php $jsArray = "var prdName = new Array();\n";
											foreach ($datakk as $p): ?>
												<option value="<?= $p->kk; ?>"><?= $p->kk; ?> (<?= $p->kepala_keluarga; ?>)</option>
											<?php	$jsArray .= "prdName['" . $p->kk . "'] = {kepala_keluarga:'" . addslashes($p->kepala_keluarga) . "'};\n";
											?>
											<?php endforeach;
											
											?>
												</select> -->
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
											<div class="col-sm-10">
											<input type="text" name="kepala_kk" id="kepala_keluarga" placeholder="Nama Kepala Keluarga" value="<?= $pemohon['kepala_keluarga']; ?>"  class="form-control" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-3">
											<input class="form-control" type="text" id="alamat" name="alamat" placeholder="Alamat / No Rumah" required> 
											</div>
											<div class="col-sm-2">
												<input type="number" name="rt" id="rt" placeholder="RT"  size="3" maxlength="3" class="form-control" value="<?= $pemohon['rt']; ?>" readonly/>
											</div>
											<div class="col-sm-2">
												<input class="form-control" type="number" name="rw" id="rw" size="3" maxlength="3" placeholder="RW" value="<?= $pemohon['rw']; ?>" readonly> 
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="text" name="dusun" id="dusun" placeholder="Dusun" value="<?= $pemohon['blok']; ?>" readonly> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa" name="desa" value="<?= $setting['nama_desa']; ?>" placeholder="Desa" readonly> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec" id="kec" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" readonly/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab"  value="<?= $setting['nama_kabupaten']; ?>" name="kab" placeholder="Kabupaten" readonly> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi" id="provinsi" value="<?= $setting['nama_provinsi']; ?>" placeholder="Provinsi" class="form-control" readonly/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kode Pos / Telepon</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kode_pos"  value="<?= $setting['kode_pos']; ?>" name="kode_pos" placeholder="Kode Pos" readonly> 
											</div>
											<div class="col-sm-5">
												<input type="number" name="telepon" id="telepon" placeholder="telepon" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK Pemohon</label>
											<div class="col-sm-10">
												<input type="number" maxlength="16" name="nik" id="nik" value="<?= $pemohon['nik']; ?>" class="form-control" readonly>
												
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama" id="nama" value="<?= $pemohon['nama']; ?>" class="form-control" readonly>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">DATA DAERAH TUJUAN</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alasan Pindah</label>
											<div class="col-sm-10">
												<select class="single-select" id="alasan_pindah_id" name="alasan_pindah_id" onchange=get_alasan(this.value) required>
													<option selected="" disabled="" value="">-- Pilih Alasan Pindah --</option> 
													<option value="1">Pekerjaan</option>
													<option value="2">Pendidikan</option>
													<option value="3">Keamanan</option>
													<option value="4">Kesehatan</option>
													<option value="5">Perumahan</option>
													<option value="6">Keluarga</option>
													<option value="7">Lainnya (sebutkan)</option>
												</select>
											</div>
										</div>
										<div id="sebut_alasan" class="form-group row" style="display:none;">
											<label class="col-sm-2 col-form-label">Sebutkan Alasan Pindah</label>
											<div class="col-sm-10">
												<input type="text" name="sebut_alasan" id="sebut_alasan" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat Tujuan Pindah</label>
											<div class="col-sm-3">
											<input class="form-control" type="text" id="alamat_tujuan" name="alamat_tujuan" placeholder="Blok" required> 
											</div>
											<div class="col-sm-2">
												<input type="number" name="rt_tujuan" id="rt_tujuan" placeholder="RT"  size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-2">
												<input class="form-control" type="number" name="rw_tujuan" id="rw_tujuan" size="3" maxlength="3" placeholder="RW" required> 
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="text" name="dusun_tujuan" id="dusun_tujuan" placeholder="Dusun / Dukuh / Kampung" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_tujuan" name="desa_tujuan" value="<?= $setting['nama_desa']; ?>" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_tujuan" id="kec_tujuan" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kab/Kota / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_tujuan"  value="<?= $setting['nama_kabupaten']; ?>" name="kab_tujuan" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_tujuan" id="provinsi_tujuan" value="<?= $setting['nama_provinsi']; ?>" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kode Pos / Telepon</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kode_pos_tujuan"  name="kode_pos_tujuan" placeholder="Kode Pos Tujuan" required> 
											</div>
											<div class="col-sm-5">
												<input type="number" name="telepon_tujuan" id="telepon_tujuan" placeholder="Telepon" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Jenis Kepindahan</label>
											<div class="col-sm-10">
												<select class="single-select" id="jenis_kepindahan_id" name="jenis_kepindahan_id" onchange="urus_anggota($(this).val());" required>
													<option selected="" disabled="" value="">-- Pilih Jenis Kepindahan --</option> 
													<option value="1">Kep. Keluarga</option>
													<option value="2">Kep. Keluarga dan Seluruh Angg. Keluarga</option>
													<option value="3">Kep. Keluarga dan Sbg. Angg. Keluarga</option>
													<option value="4">Angg. Keluarga</option>
												</select>
											</div>
										</div>
											<input id='status_kk_tidak_pindah' type="hidden" name="status_kk_tidak_pindah_id"/>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Status KK Bagi Yang Tidak Pindah</label>
											<div class="col-sm-10">
												<select id="status_kk_tidak_pindah_show" class="single-select" onchange="$('#status_kk_tidak_pindah').val($(this).val());" required>
													<option selected="" disabled="" value="">-- Pilih Status KK Tidak Pindah --</option> 
													<option value="1">Numpang KK</option>
													<option value="2">Membuat KK Baru</option>
													<option value="3">Nomor KK Tetap</option>
												</select>
											</div>
											<div class="col-sm-10" style="display: none" id="status_kk_tidak_pindah_f108_show">
												<select class="single-select" onchange="$('#status_kk_tidak_pindah').val($(this).val());">
													<option selected="" disabled="" value="">-- Pilih Status KK Tidak Pindah --</option> 
													<option value="1">Numpang KK</option>
													<option value="2">Membuat KK Baru</option>
													<option value="3">Tidak Ada Angg. Keluarga Yang Ditinggalkan</option>
													<option value="4">Nomor KK Tetap</option>
												</select>
											</div>
										</div>
											<input id='status_kk_pindah' type="hidden" name="status_kk_pindah_id"/>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Status KK Bagi Yang Pindah</label>
											<div class="col-sm-10">
												<select class="single-select" id='status_kk_pindah_show' onchange="$('#status_kk_pindah').val($(this).val());" required>
													<option selected="" disabled="" value="">-- Pilih Status KK Tidak Pindah --</option> 
													<option value="1">Numpang KK</option>
													<option value="2">Membuat KK Baru</option>
													<option value="3">Nomor KK Tetap</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">KELUARGA YANG PINDAH</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<div class="col-sm-10">
												<!-- <input type="button" value="Tambah Anggota" onclick="createNewElement();"/> -->
											</div>
										</div>

											<div class="table-responsive">
												<table class="table table-bordered dataTable table-hover nowrap">
													<thead class="bg-gray disabled color-palette">
														<tr>
															<th>&nbsp;</th>
															<th>No</th>
															<th>NIK</th>
															<th>Nama</th>
															<th>KTP Berlaku S/D</th>
															<!-- <th>SHDK</th> -->
														</tr>
													</thead>
													<tbody>
														<?php if ($getkk!=NULL): ?>
															<input id='jumlah_anggota' type='hidden' disabled='disabled' value="<?= count($getkk);?>">
															<?php $i=0;?>
															<?php foreach ($getkk AS $data): $i++;?>
																<tr>
																	<td>
																		<input type="checkbox" id="jumlah_ikut<?= ($i)?>" name="jumlah_ikut[]" value="<?= $data->nik; ?>">
																	</td>
																		<td><?= $i?></td>
																	<td>
																		<input id="nik_penduduk<?= ($i)?>" type="hidden" name="nik_penduduk[]" value="<?= $data->nik; ?>"/>
																		<?= $data->nik; ?>
																	</td>
																	<td>
																		<input id="nama_penduduk<?= ($i)?>" type="hidden" name="nama_penduduk[]" value="<?= $data->nama; ?>"/>
																		<?= $data->nama; ?>
																	</td>
																	<td>
																		<input class="form-control" id="ktp_berlaku<?= ($i)?>" type="text" name="ktp_berlaku[]" value="Seumur Hidup"/>
																		
																	</td>
																	<!-- <td><input type="number" name="shdk[]" id="shdk<?= ($i)?>" placeholder="SHDK" class="form-control"/></td> -->
																</tr>
															<?php endforeach;?>
														<?php endif; ?>
													</tbody>
												</table>
											</div>

										<div id="newElementId"> </div>

									</div>
									
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">TANDA TANGAN PETUGAS</h4>
									</div>
									<hr/>
									<div class="form-body">
									<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Petugas</label>
											<div class="col-sm-10">
											<input class="form-control" type="text" id="petugas"  name="petugas" placeholder="NAMA PETUGAS" required> 
											</div>
										</div> 
									</div>
									
								</div>
							</div>

		
							


						</div>
						
						<input type="hidden" value="<?= $this->uri->segment(2); ?>" name="jenis_surat">
		<button type="submit" name="submit" class="lanjut no-print"><i class="fa fa-arrow-right"></i> Lanjut</button>
	</form>
	<button onclick="window.history.back()" class="kembali no-print" title="Kembali">
		<i class="fa fa-arrow-left"></i> Kembali
	</button>
					</div>

			</div>
		</div>
	</div>
	<!-- DATALIST -->
	<datalist id="data_kk">
		<?php
		foreach ($penduduk->result() as $b) { ?>
			<option value='<?= $b->kk; ?>'><?= $b->kepala_keluarga; ?></option>

		<?php } ?>

	</datalist>
	<datalist id="data_penduduk">
		<?php
		foreach ($penduduk->result() as $b) { ?>
			<option value='<?= $b->nik; ?>'><?= $b->nama; ?></option>

		<?php } ?>

	</datalist>
	<script type="text/JavaScript">
		function createNewElement() {
			// First create a DIV element.
			var txtNewInputBox = document.createElement('div');
				txtNewInputBox.className = "form-group row";

			// Then add the content (a new input box) of the element.
			txtNewInputBox.innerHTML = "<label class='col-sm-2 col-form-label'>NIK / Nama / Masa Berlaku KTP / SHDK</label><div class='col-sm-3'><input type='number' maxlength='16' list='data_penduduk' name='nik_penduduk[]' id='nik_penduduk' placeholder='NIK' onchange='return autofill();' class='form-control' required></div><div class='col-sm-2'><input type='text' name='nama_penduduk[]' id='nama_penduduk' placeholder='Nama Lengkap'  class='form-control' required/></div><div class='col-sm-2'><input class='form-control' type='text' name='ktp_berlaku[]' id='ktp_berlaku' placeholder='SEUMUR HIDUP' required> </div><div class='col-sm-3'><input class='form-control' type='text' name='kk_level[]' id='kk_level' placeholder='SHDK' required></div>";

			// Finally put it where it is supposed to appear.
			document.getElementById("newElementId").appendChild(txtNewInputBox);
		}
	</script>
	<script>
		<?php echo $jsArray; ?>  
		function getKK(x){  
			document.getElementById('kepala_keluarga').value = prdName[x].kepala_keluarga;   
		};  

		/* set otomatis hari */
		function data_hari() {
			moment.locale('id');
			var tgl = document.getElementById('date').value;
			var oneDate = moment(tgl, 'DD-MM-YYYY');
			var dayName = oneDate.format('dddd');
			
			document.getElementById('hari').value = dayName;

			// var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
			// var d = new Date(document.getElementById('date').value);
			// document.getElementById('hari').value = days[d.getDay()];
		};
		function data_hari_kematian() {
			moment.locale('id');
			var tgl = document.getElementById('tgl_kematian').value;
			var oneDate = moment(tgl, 'DD-MM-YYYY');
			var dayName = oneDate.format('dddd');
			
			document.getElementById('hari_kematian').value = dayName;

			// var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
			// var d = new Date(document.getElementById('date').value);
			// document.getElementById('hari').value = days[d.getDay()];
		};

	</script>

<script>
	function enable_anggota()
	{
		jumlah_anggota = $("#jumlah_anggota").val();
		for (i = 1; i <= jumlah_anggota; i++)
		{
			anggota = $("#anggota_show"+i);
			if (anggota.length > 0)
			{
				anggota.removeAttr('disabled');
			}
		}
	}
	function anggota_pindah(ya_atau_tidak)
	{
		jumlah_anggota = $("#jumlah_anggota").val();
		for (i = 1; i <= jumlah_anggota; i++)
		{
			anggota = $("#anggota_show"+i);
			if (anggota.length > 0)
			{
				anggota.attr("checked", ya_atau_tidak);
				anggota.trigger("onchange");
				anggota.attr('disabled', 'disabled');
			}
		}
	}

	function urus_masa_ktp(centang, urut)
	{
		// ktp_berlaku sekarang selalu 'Seumur Hidup' dan tidak diubah
		if (centang)
		{
			$('#anggota' + urut).attr('disabled', 'disabled');
		}
		else
		{
			$('#anggota' + urut).removeAttr('disabled');
		}
	}
	
	function urus_anggota(jenis_pindah)
	{
		if ($('#kode_format').val() == "f108")
		{
			status_kk_tidak_pindah = "#status_kk_tidak_pindah_f108_show";
		}
		else
		{
			status_kk_tidak_pindah = "#status_kk_tidak_pindah_show";
		}
		// Hanya anggota yang pindah
		if (jenis_pindah == 4)
		{
			$('#kk_show').attr("checked", false);
			$("#kk").attr('disabled', 'disabled');
			if ($('#kode_format').val() == "f108")
			{
				$(status_kk_tidak_pindah).val("4");
			}
			else
			{
				$(status_kk_tidak_pindah).val("3");
			}
			$(status_kk_tidak_pindah).trigger("onchange");
			$(status_kk_tidak_pindah).attr('disabled', 'disabled');
			$("#status_kk_pindah_show").removeAttr('disabled');
			enable_anggota();
		}
		else
		{
			$('#kk_show').attr("checked", true);
			$("#kk").removeAttr('disabled');
			if ($('#klasifikasi_pindah_id').val() < 3)
			{
				// Jika pindah di satu kecamatan, nomor KK tetap.
				// Jika pindah ke luar kecamatan, nomor KK ganti.
				$("#status_kk_pindah_show").val("3");
				$("#status_kk_pindah_show").trigger("onchange");
				$("#status_kk_pindah_show").attr('disabled', 'disabled');
			}
			else
			{
				$("#status_kk_pindah_show").removeAttr('disabled');
			}
			$(status_kk_tidak_pindah).removeAttr('disabled');
			// KK and semua anggota pindah
			if (jenis_pindah == 2)
			{
				if ($('#kode_format').val() == "f108")
				{
					$(status_kk_tidak_pindah).val("3");
				}
				else
				{
					$(status_kk_tidak_pindah).val(" ");
				}
				$(status_kk_tidak_pindah).trigger("onchange");
				$(status_kk_tidak_pindah).attr('disabled', 'disabled');
				anggota_pindah(true);
			}
			// KK dan sebagian anggota pindah
			if (jenis_pindah == 3)
			{
				enable_anggota();
			}
			// Hanya KK yang pindah
			if (jenis_pindah == 1)
			{
				anggota_pindah(false);
			}
		};
		$('#kk_show').trigger("onchange");
	}
	function get_alasan(alasan)
	{
		if (alasan == 7)
		{
			$('#sebut_alasan').show();
		}
		else
		{
			$('#sebut_alasan').hide();
		}
	}
		function autofill() {
			
			var nik = document.getElementById('nik').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik').value = val.nik;
						document.getElementById('nama').value = val.nama;
						document.getElementById('rt').value = val.rt;
						document.getElementById('rw').value = val.rw;
						document.getElementById('dusun').value = val.blok;
					});
				}
			});
			var nik_ibu = document.getElementById('nik_ibu').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_ibu,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_ibu').value = val.nik;
						document.getElementById('nama_ibu').value = val.nama;
						document.getElementById('tgl_lahir_ibu').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_ibu').value = val.blok;
						document.getElementById('rt_ibu').value = val.rt;
						document.getElementById('rw_ibu').value = val.rw;
					});
				}
			});
			var nik_ayah = document.getElementById('nik_ayah').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_ayah,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_ayah').value = val.nik;
						document.getElementById('nama_ayah').value = val.nama;
						document.getElementById('tgl_lahir_ayah').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_ayah').value = val.blok;
						document.getElementById('rt_ayah').value = val.rt;
						document.getElementById('rw_ayah').value = val.rw;
					});
				}
			});
			var nik_saksi1 = document.getElementById('nik_saksi1').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_saksi1,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_saksi1').value = val.nik;
						document.getElementById('nama_saksi1').value = val.nama;
						document.getElementById('tgl_lahir_saksi1').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_saksi1').value = val.blok;
						document.getElementById('rt_saksi1').value = val.rt;
						document.getElementById('rw_saksi1').value = val.rw;
					});
				}
			});
			var nik_saksi2 = document.getElementById('nik_saksi2').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_saksi2,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_saksi2').value = val.nik;
						document.getElementById('nama_saksi2').value = val.nama;
						document.getElementById('tgl_lahir_saksi2').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_saksi2').value = val.blok;
						document.getElementById('rt_saksi2').value = val.rt;
						document.getElementById('rw_saksi2').value = val.rw;
					});
				}
			});

		}
	</script>




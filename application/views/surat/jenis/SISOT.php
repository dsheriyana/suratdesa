<?php
$today = date("Y-m-d");
?>

<body class="bg-forgot">
	<form autocomplete="off" action="reviewSISOT" method="POST">
		<div class="book">
			<div class="page">
				<div class="isisurat">
					<br><br>
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT IZIN SUAMI / ORANG TUA</b></div>
					<div class="center"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini :
					</div>

					<table style="width: 80%; margin: 0 auto; font-size: 12pt;">
						<tr>
							<td style="width: 35%;">
								Nama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="nama_pemohon" id="nama_pemohon" value="<?= $pemohon['nama']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								NIK
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input list="data_penduduk" type="text" name="nik_pemohon" id="nik_pemohon" value="<?= $pemohon['nik']; ?>" placeholder="NIK" onchange="return autofill();" required>

							</td>
						</tr>
						<tr>
							<td>
								Tempat, Tanggal Lahir
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="tmp_lahir_pemohon" id="tmp_lahir_pemohon" value="<?= $pemohon['tmp_lahir']; ?>" required>, <input type="text" class="datepicker" value="<?= tgl_string($pemohon['tgl_lahir']); ?>" name="tgl_lahir_pemohon" id="tgl_lahir_pemohon" required>
							</td>
						</tr>
						<tr>
							<td>
								Jenis Kelamin
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<select name="jk_pemohon" id="jk_pemohon">
									<option value="L" <?=($pemohon['jk']=='L')?'selected="selected"':''?>>Laki-laki</option>
									<option value="P" <?=($pemohon['jk']=='P')?'selected="selected"':''?>>Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Pekerjaan
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="pekerjaan_pemohon" id="pekerjaan_pemohon" value="<?= $pemohon['pekerjaan']; ?>" required>
							</td>
						</tr>
						<tr style="vertical-align:top">
							<td>
								Alamat
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								Blok <input type="text" name="blok_pemohon" id="blok_pemohon" value="<?= $pemohon['blok']; ?>" required><br>
								RT/RW <input type="text" id="rt_pemohon" name="rt_pemohon" maxlength="3" size="2"  value="<?= $pemohon['rt']; ?>" required> / <input type="text" id="rw_pemohon" name="rw_pemohon"  value="<?= $pemohon['rw']; ?>" maxlength="3" size="2" required><br>
								Desa <input type="text" name="desa_pemohon" id="desa_pemohon" value="<?= ucwords(strtolower($setting['nama_desa'])); ?>" required><br>
								Kec. <input type="text" name="kec_pemohon" id="kec_pemohon" value="<?= ucwords(strtolower($setting['nama_kecamatan'])); ?>" required><br>
								Kab. <input type="text" name="kab_pemohon" id="kab_pemohon" value="<?= ucwords(strtolower($setting['nama_kabupaten'])); ?>" required>
							</td>
						</tr>
					</table>
					<div class="tab">
						Dengan ini memberikan Izin kepada <b>Istri/Anak</b> saya.
					</div>

					<table style="width: 80%; margin: 0 auto; font-size: 12pt;">
						<tr>
							<td style="width: 35%;">
								Nama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="nama" id="nama" required>
							</td>
						</tr>
						<tr>
							<td>
								NIK
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input list="data_penduduk" type="text" name="nik" id="nik" placeholder="NIK" onchange="return autofill();" required>

							</td>
						</tr>
						<tr>
							<td>
								Tempat, Tanggal Lahir
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="tmp_lahir" id="tmp_lahir" required>, <input type="text" class="datepicker" name="tgl_lahir" id="tgl_lahir" required>
							</td>
						</tr>
						<tr>
							<td>
								Jenis Kelamin
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<select name="jk" id="jk">
									<option value="L">Laki-laki</option>
									<option value="P">Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Pekerjaan
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="pekerjaan" id="pekerjaan" required>
							</td>
						</tr>
						<tr style="vertical-align:top">
							<td>
								Alamat
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								Blok <input type="text" name="blok" id="blok" required><br>
								RT/RW <input type="text" id="rt" name="rt" maxlength="3" size="2" required> / <input type="text" id="rw" name="rw" maxlength="3" size="2" required><br>
								Desa <input type="text" name="desa" id="desa" value="<?= ucwords(strtolower($setting['nama_desa'])); ?>" required><br>
								Kec. <input type="text" name="kec" id="kec" value="<?= ucwords(strtolower($setting['nama_kecamatan'])); ?>" required><br>
								Kab. <input type="text" name="kab" id="kab" value="<?= ucwords(strtolower($setting['nama_kabupaten'])); ?>" required>
							</td>
						</tr>
					</table>
					<div class="tab">
						<textarea id="keterangan" name="keterangan" cols="80%" rows="5" required>Bekerja sebagai Tenaga Kerja Indonesia (TKI) dengan Negara tujuan TAIWAN sesuai dengan kontrak selama 3 tahun.</textarea>
					</div>
					<div class="tab">
						Demikian Surat izin ini dibuat dengan sebenarnya tanpa ada paksaan dari pihak manapun.
					</div>
					<br />
					<table style="width: 100%;">
						<tr>
							<td></td>
							<td style="text-align: center;">
								<?= ucwords(strtolower($setting['nama_desa'])); ?>, <input type="text" name="tgl_surat" id="tgl_surat" class="datepicker" value="<?= tgl_string(date("Y-m-d")); ?>">
							</td>
						</tr>
						<tr style="vertical-align:bottom">
							<td style="width:50%;text-align: center;">
								Yang diberi Izin
								<br />
								<br />
								<br />
								<br />
								<u><b><input type="text" name="ttdnama" id="ttdnama" value="" required></b></u>
							</td>
							<td style="width:50%;text-align: center;">
								Yang Memberi Izin
								<br />
								<br />
								<i>materai</i>
								<br />
								<br />
								<u><b><input type="text" name="ttdnama_pemohon" id="ttdnama_pemohon" value="<?= $pemohon['nama']; ?>" required></b></u>
							</td>
						</tr>
					</table>
					<table style="width: 100%;">
						<tr style="vertical-align:bottom">
							<td style="text-align: center;">
								Mengetahui, <br>
								Kepala Desa <?= ucwords(strtolower($setting['nama_desa'])); ?>
								<br />
								<br />
								<br />
								<br />
								<br />
								<u><b><?= $setting['nama_kades']; ?></b></u>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<input type="hidden" value="<?= $this->uri->segment(2); ?>" name="jenis_surat">
		<button type="submit" name="submit" class="lanjut no-print"><i class="fa fa-arrow-right"></i> Lanjut</button>
	</form>
	<button onclick="window.history.back()" class="kembali no-print" title="Kembali">
		<i class="fa fa-arrow-left"></i> Kembali
	</button>

	<datalist id="data_penduduk">
		<?php
		foreach ($penduduk->result() as $b) { ?>
			<option value='<?= $b->nik; ?>'><?= $b->nama; ?></option>

		<?php } ?>

	</datalist>


	<script>
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
						document.getElementById('tmp_lahir').value = val.tmp_lahir;
						document.getElementById('tgl_lahir').value = moment(val.tgl_lahir).format('LL');
						document.getElementById('jk').value = val.jk;
						document.getElementById('pekerjaan').value = val.pekerjaan;
						document.getElementById('blok').value = val.blok;
						document.getElementById('rt').value = val.rt;
						document.getElementById('rw').value = val.rw;
						document.getElementById('ttdnama').value = val.nama;
					});
				}
			});

			var nik_pemohon = document.getElementById('nik_pemohon').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_pemohon,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_pemohon').value = val.nik;
						document.getElementById('nama_pemohon').value = val.nama;
						document.getElementById('tmp_lahir_pemohon').value = val.tmp_lahir;
						document.getElementById('tgl_lahir_pemohon').value = moment(val.tgl_lahir).format('LL');
						document.getElementById('jk_pemohon').value = val.jk;
						document.getElementById('pekerjaan_pemohon').value = val.pekerjaan;
						document.getElementById('blok_pemohon').value = val.blok;
						document.getElementById('rt_pemohon').value = val.rt;
						document.getElementById('rw_pemohon').value = val.rw;
						document.getElementById('ttdnama_pemohon').value = val.nama;
					});
				}
			});

		}
	</script>

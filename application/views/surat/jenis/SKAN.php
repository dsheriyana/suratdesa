<?php
$today = date("Y-m-d");
?>

<body class="bg-forgot">

	<form autocomplete="off" action="reviewSKAN" method="POST">

		<div class="book">

			<div class="page">
				<table style="width: 100%;border-collapse: collapse;">
					<tr class="border_bottom">
						<td>
							<img src="<?= base_url('public/vendor/assets/images/icons/logo-majalengka.png'); ?>" style="width: 25mm; height: auto;" />
						</td>
						<td style="text-align: center;">
							<div style="font-weight: bold; font-size: 18pt;">PEMERINTAH KABUPATEN MAJALENGKA</div>
							<div style="font-weight: bold; font-size: 18pt;">KECAMATAN KERTAJATI</div>
							<div style=" font-size: 23pt;">KANTOR KEPALA DESA MEKARMULYA</div>
							Jl Sukajaya No. 311, Desa Mekarmulya, Kecamatan Kertajati, Majalengka 45457
						</td>
					</tr>
				</table>
				<br>
				<div class="isisurat">
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN ANDON NIKAH</b></div>
					<div class="center">Nomor : 474.2/<input type="text" name="no_skan" id="no_skan" size="30px" value="<?= $no_surat; ?>/PEMDES/<?= date('Y'); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini Kepala Desa  <?= ucwords(strtolower($setting['nama_desa'])); ?>, menerangkan bahwa:
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
								Kewarganegaraan
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="kewarganegaraan_pemohon" id="kewarganegaraan_pemohon" value="Indonesia" required>

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
						Orang tersebut di atas adalah penduduk Desa Mekarmulya Kecamatan Kertajati Kabupaten
						Majalengka Yang bermaksud akan melangsungkan pernikahan Ke :
					</div>
					<table style="width: 80%; margin: 0 auto;">
						<tr>
							<td style="width: 35%;">
								Desa/Kelurahan
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="desa_tujuan" id="desa_tujuan" required>
							</td>
						</tr>
						<tr>
							<td>
								Kecamatan
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="kec_tujuan" id="kec_tujuan" required>

							</td>
						</tr>
						<tr>
							<td>
								Kabupaten
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="kab_tujuan" id="kab_tujuan" required>
							</td>
						</tr>
						<tr>
							<td>
								Provinsi
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="prov_tujuan" id="prov_tujuan" required>
							</td>
						</tr>
					</table>
					<div class="tab"></div>
					<table style="width: 80%; margin: 0 auto; font-size: 12pt;">
						<tr>
							<td style="width: 35%;">
								Dengan Seorang 
								<select name="dengan_seorang" id="dengan_seorang">
									<option value="L" <?=($pemohon['jk']=='L')?'selected="selected"':''?>>Perempuan</option>
									<option value="P" <?=($pemohon['jk']=='P')?'selected="selected"':''?>>Laki-laki</option>
								</select>
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>

							</td>
						</tr>
						<tr>
							<td style="width: 35%;">
								Nama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
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
								<select name="bin" id="bin">
									<option value="L" <?=($pemohon['jk']=='L')?'selected="selected"':''?>>Binti</option>
									<option value="P" <?=($pemohon['jk']=='P')?'selected="selected"':''?>>Bin</option>
								</select>
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="binti" id="binti" class="js-kioskboard-input" data-kioskboard-specialcharacters="true" required>

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
								Agama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<select name="agama" id="agama">
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Katolik">Katolik</option>
									<option value="Buddha">Buddha</option>
									<option value="Hindu">Hindu</option>
									<option value="Konghucu">Konghucu</option>
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
								Desa <input type="text" name="desa" id="desa" value="" required><br>
								Kec. <input type="text" name="kec" id="kec" value="" required><br>
								Kab. <input type="text" name="kab" id="kab" value="" required>
							</td>
						</tr>
					</table>
					<div class="tab">
						Demikian Surat keterangan ini di buat dengan sebenarnya untuk di pergunakan sebagaimana
						mestinya.
					</div>
					<br />

					<table style="width: 100%;">
						<tr>
							<td></td>
							<td style="text-align: center;">
								<?= ucwords(strtolower($setting['nama_desa'])); ?>, <input type="text" class="datepicker" name="tgl_surat" id="tgl_surat" value="<?= tgl_string($today); ?>">
							</td>
						</tr>
						<tr style="vertical-align:bottom">
							<td style="width:50%;text-align: center;">

							</td>
							<td style="width:50%;text-align: center;">
								Kepala Desa Mekarmulya
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
						document.getElementById('binti').value = val.nama_ayah;
						document.getElementById('pekerjaan').value = val.pekerjaan;
						document.getElementById('blok').value = val.blok;
						document.getElementById('rt').value = val.rt;
						document.getElementById('rw').value = val.rw;
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
						document.getElementById('dengan_seorang').value = val.jk;
						document.getElementById('bin').value = val.jk;
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

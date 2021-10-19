<body class="bg-forgot">
	<form autocomplete="off" action="reviewSKTM2" method="POST">
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
				<br /><br />
				<div class="isisurat">
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN TIDAK MAMPU (SKTM)</b></div>
					<div class="center">Nomor : 477.4/<input type="text" id="no_sktm2" name="no_sktm2" value="<?= $no_surat; ?>/Pem-Des/<?= date("Y"); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
					</div>
					<table style="width: 80%; margin: 0 auto;">
						<tr>
							<td style="width: 35%;">
								Nama
							</td>
							<td>:</td>
							<td>
								<input type="text" name="nama_ayah" id="nama_ayah" required>
							</td>
						</tr>
						<tr>
							<td>
								NIK
							</td>
							<td>:</td>
							<td>
							<input list="data_penduduk" type="text" name="nik_ayah" id="nik_ayah" placeholder="NIK" onchange="return autofill();" required>
							</td>
						</tr>
						<tr>
							<td>
								Tempat, Tanggal Lahir
							</td>
							<td>:</td>
							<td>
								<input type="text" name="tmp_lahir_ayah" id="tmp_lahir_ayah" required>, <input type="text" class="datepicker" name="tgl_lahir_ayah" id="tgl_lahir_ayah">
							</td>
						</tr>

						<tr>
							<td>
								Jenis Kelamin
							</td>
							<td>:</td>
							<td>
								<input type="text" name="jk_ayah" id="jk_ayah" value="Laki-laki" readonly>
							</td>
						</tr>
						<tr>
							<td>
								Kewarganegaraan
							</td>
							<td>:</td>
							<td>
								<input type="text" name="kewarganegaraan" id="kewarganegaraan" value="Indonesia" readonly>
							</td>
						</tr>
						<tr style="vertical-align:top">
							<td>
								Alamat
							</td>
							<td>:</td>
							<td>
								Dusun <input type="text" name="blok_ayah" id="blok_ayah" required><br> RT/RW <input type="text" name="rt_ayah" id="rt_ayah" size="3" required>/<input type="text" name="rw_ayah" id="rw_ayah" size="3" required><br> Desa <input type="text" name="desa_ayah" id="desa_ayah" value="<?= ucwords(strtolower($setting['nama_desa'])); ?>" required><br> Kec. <input type="text" name="kec_ayah" id="kec_ayah" value="<?= ucwords(strtolower($setting['nama_kecamatan'])); ?>" required><br> Kab. <input type="text" name="kab_ayah" id="kab_ayah" value="Majalengka" required>
							</td>
						</tr>

					</table>
					<table style="width: 80%; margin: 0 auto; margin-top:20px">
						<tr>
							<td style="width: 35%;">
								Nama
							</td>
							<td>:</td>
							<td>
								<input type="text" name="nama_ibu" id="nama_ibu" required>
							</td>
						</tr>
						<tr>
							<td>
								NIK
							</td>
							<td>:</td>
							<td>
							<input list="data_penduduk" type="text" name="nik_ibu" id="nik_ibu" placeholder="NIK" onchange="return autofill();" required>
							</td>
						</tr>
						<tr>
							<td>
								Tempat, Tanggal Lahir
							</td>
							<td>:</td>
							<td>
								<input type="text" name="tmp_lahir_ibu" id="tmp_lahir_ibu" required>, <input type="text" class="datepicker" name="tgl_lahir_ibu" id="tgl_lahir_ibu">
							</td>
						</tr>

						<tr>
							<td>
								Jenis Kelamin
							</td>
							<td>:</td>
							<td>
								<input type="text" name="jk_ibu" id="jk_ibu" value="Perempuan" readonly>
							</td>
						</tr>
						<tr>
							<td>
								Kewarganegaraan
							</td>
							<td>:</td>
							<td>
								<input type="text" name="kewarganegaraan" id="kewarganegaraan" value="Indonesia" readonly>
							</td>
						</tr>
						<tr style="vertical-align:top">
							<td>
								Alamat
							</td>
							<td>:</td>
							<td>
								Dusun <input type="text" name="blok_ibu" id="blok_ibu" required><br> RT/RW <input type="text" name="rt_ibu" id="rt_ibu" size="3" required>/<input type="text" name="rw_ibu" id="rw_ibu" size="3" required><br> Desa <input type="text" name="desa_ibu" id="desa_ibu" value="<?= ucwords(strtolower($setting['nama_desa'])); ?>" required><br> Kec. <input type="text" name="kec_ibu" value="<?= ucwords(strtolower($setting['nama_kecamatan'])); ?>" id="kec_ibu" required><br> Kab. <input type="text" name="kab_ibu" id="kab_ibu" value="Majalengka" required>
							</td>
						</tr>

					</table>
					<table style="width: 80%; margin: 0 auto; margin-top:20px">
						<tr>
							<td style="width: 35%;" colspan="3">
								Nama tersebut di atas adalah Wali dari :
							</td>
							<td></td>
							<td></td>
						</tr>
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
								Tempat, Tanggal Lahir
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="tmp_lahir_pemohon" id="tmp_lahir_pemohon" value="<?= $pemohon['tmp_lahir']; ?>" required>, <input type="text" class="datepicker" value="<?= tgl_string($pemohon['tgl_lahir']); ?>" name="tgl_lahir_pemohon" id="tgl_lahir_pemohon" required>
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
						<tr>
							<td>
								Status Perkawinan
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="status_pemohon" id="status_pemohon"  value="<?= $pemohon['status']; ?>" required>

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
					<textarea name="keterangan">
					Berdasarkan data dan catatan yang ada, sampai di keluarkannya surat ini, nama tersebut di atas tercatat sebagai penduduk Desa kami,yang tergolong, <b> KELUARGA	KURANG MAMPU/PRA SEJAHTERA</b>. Untuk itu kami mohon pihak Sekolah memberikan prioritas dalam keringanan biaya pendidikan / mendapatkan beasiswa pendidikan.
					</textarea>
					</div>
					<div class="tab">
						Demikian surat keterangan ini dibuat dengan sebenarnya, agar dapat dipergunakan
						sebagaimana mestinya.
					</div>
					<br />
					<table style="width: 100%;">
						<tr>
							<td></td>
							<td style="text-align: center;">
								Mekarmulya, <input type="text" class="datepicker" name="tgl_surat" id="tgl_surat" value="<?= tgl_string(date("Y-m-d")); ?>">
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
			var nik_ayah = document.getElementById('nik_ayah').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_ayah,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_ayah').value = val.nik;
						document.getElementById('nama_ayah').value = val.nama;
						document.getElementById('tmp_lahir_ayah').value = val.tmp_lahir;
						document.getElementById('tgl_lahir_ayah').value = moment(val.tgl_lahir).format('LL');
						document.getElementById('jk_ayah').value = val.jk;
						document.getElementById('blok_ayah').value = val.blok;
						document.getElementById('rt_ayah').value = val.rt;
						document.getElementById('rw_ayah').value = val.rw;
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
						document.getElementById('tmp_lahir_ibu').value = val.tmp_lahir;
						document.getElementById('tgl_lahir_ibu').value = moment(val.tgl_lahir).format('LL');
						document.getElementById('jk_ibu').value = val.jk;
						document.getElementById('blok_ibu').value = val.blok;
						document.getElementById('rt_ibu').value = val.rt;
						document.getElementById('rw_ibu').value = val.rw;
					});
				}
			});
			

		}
	</script>

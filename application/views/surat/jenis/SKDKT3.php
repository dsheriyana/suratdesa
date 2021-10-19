<body class="bg-forgot">
	<form autocomplete="off" action="reviewSKDKT3" method="POST">
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
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT PERNYATAAN DESA</b></div>
					<div class="center">Nomor : 181.1/<input type="text" name="no_skdkt3" id="no_skdkt3" size="30px" value="<?= $no_surat; ?>/PEMDES/<?= date('Y'); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
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
						Orang tersebut diatas benar-benar memiliki Sebidang tanah darat yang terdaftar dalam
						SHM / Letter C / SPPT Nomor : <input type="text" name="no_sppt" id="no_sppt" required> atas nama <input type="text" name="atas_nama" id="atas_nama" required> Nomor Persil : <input type="text" name="no_persil" id="no_persil" required> Kelas :
						<input type="text" name="kelas" id="kelas" required> Luas : <input type="text" name="luas_tanah" id="luas_tanah" required> m<sup>2</sup> yang berlokasi di Blok : <input type="text" name="lokasi_blok" id="lokasi_blok" required> Desa <input type="text" name="lokasi_desa" id="lokasi_desa" required>
						Kecamatan <input type="text" name="kecamatan" id="kecamatan" required> Kabupaten Majalengka. Tanah tersebut berasal dari <input type="text" name="berasal_dari" id="berasal_dari" placeholder="Hibah/Jual Beli/Warisan" required> Sdr <input type="text" name="nama_pemilik" id="nama_pemilik" required> pada tanggal <input type="text" class="datepicker" name="tgl_asal" id="tgl_asal"> Adapun tanah tersebut saat
						ini tidak sedang dijaminkan atau tidak dalam sengketa.

					</div>
					<div class="tab">
						Adapun batas-batasnya sebagai berikut :
					</div>
					<table style="width: 80%; margin: 0 auto;">
						<tr>
							<td style="width: 35%;">
								Sebelah Utara
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="batas_utara" id="batas_utara" class="js-kioskboard-input" data-kioskboard-type="all" data-kioskboard-specialcharacters="true">
							</td>
						</tr>
						<tr>
							<td style="width: 35%;">
								Sebelah Timur
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="batas_timur" id="batas_timur" class="js-kioskboard-input" data-kioskboard-type="all" data-kioskboard-specialcharacters="true">
							</td>
						</tr>
						<tr>
							<td>
								Sebelah Selatan
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="batas_selatan" id="batas_selatan" class="js-kioskboard-input" data-kioskboard-type="all" data-kioskboard-specialcharacters="true">
							</td>
						</tr>
						<tr style="vertical-align:top">
							<td>
								Sebelah Barat
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="text" name="batas_barat" id="batas_barat" class="js-kioskboard-input" data-kioskboard-type="all" data-kioskboard-specialcharacters="true">
							</td>
						</tr>

					</table>
					<div class="tab">
						Demikian surat keteranan ini saya buat dengan sesungguh-sungguhnya mengingat
						sumpah jabatan dan untuk dapat dipergunakan sebagaimana mestinya
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

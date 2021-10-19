<body class="bg-forgot">
	<form autocomplete="off" action="reviewSPIKH" method="POST">
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
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT PERNYATAAN IZIN HAJATAN / RAME – RAME / HIBURAN / PESTA</b></div>
					<div class="center">Nomor : 300/<input type="text" name="no_spikh" id="no_spikh" value="<?= $no_surat; ?>/PEMDES/<?= date("Y"); ?>"></div>
					<div class="tab2">
						Yang bertandatangan dibawah ini, saya:
					</div>
					<table style="width: 80%; margin: 0 auto;">
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
							<td style="width: 35%;">
								Umur
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="number" name="umur_pemohon" id="umur_pemohon" value="" required>
							</td>
						</tr>
						<tr>
							<td style="width: 35%;">
								Pekerjaan
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="pekerjaan_pemohon" id="pekerjaan_pemohon" value="<?= $pemohon['pekerjaan']; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
								Agama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<input type="text" name="agama_pemohon" id="agama_pemohon" value="<?= $pemohon['agama']; ?>" required>

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
					<div class="tab2">
					    Dengan ini menyatakan bahwa:
					</div>
                    <div class="tab2">
                    <textarea name="keterangan" id="keterangan" cols="90" rows="5" >Pada Hari Rabu malam Kamis 04-05 Agustus Tahun 2021 Jam 08:00 WIB s/d selesai dengan maksud kegiatan Resepsi Pernikahan dengan Hiburan Siang Organ Karedok DARMA NADA Dari Desa Pasiripis Kec Kertajati Kab Majalengka.</textarea>
					</div>
					<div class="tab2">
						Sehubungan dengan hal tersebut diatas maka <b>SAYA BERSEDIA</b> dan <b>SANGGUP</b>, untuk memenuhi Peraturan antara lain sebagai berikut :
					</div>
					<div class="tab2">
						<ol>
							<li>Pada waktu pelaksanaan Hajatan/Rame – rame / Hiburan / Pesta, menjamin ketentraman dan ketertiban dalam lingkungannya dan hubungan baik dengan tetangganya.</li>
							<li>Menjaga kerukunan Beragama melalui penghentian kegiatan Hajatan / Rame–rame / Hiburan / Pesta saat waktu Beribadah atau Shalat.</li>
							<li>Menjaga dan bertanggungjawab atas kebersihan dan kesehatan lingkungan yang sifatnya mengganggu Tetangga atau lingkungan.</li>
							<li>Tidak akan melanggar atau melakukan hal – hal yang bertentangan yang dilarang oleh Peraturan Perundang–undangan serta Hukum yang berlaku.</li>
							<li><b>BERSEDIA</b> dan <b>SANGGUP</b> mengganti segala kerugian yang ditimbulkan akibat penyelenggaraan hiburan sebagaimana tersebut diatas.</li>
							<li>Saat pelaksanaan Hajatan / Rame – rame / Hiburan / Pesta, penyelenggara / Tuan Hajat / Penanggung jawab dilarang menyediakan segala Jenis Minuman Keras (Miras).</li>
							<li><b>BERSEDIA</b> dan <b>SANGGUP</b> melaksanakan Protokol Kesehatan untuk antisipasi penyebaran Covid–19.</li>
						</ol>
					</div>

					<div class="tab2">
                    Demikian Surat Pernyataan ini saya buat dengan penuh kesadaran dan rasa tanggung jawab tanpa ada tekanan dari Pihak manapun.
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

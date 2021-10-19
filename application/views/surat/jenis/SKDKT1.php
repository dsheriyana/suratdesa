<body class="bg-forgot">
	<form autocomplete="off" action="reviewSKDKT1" method="POST">
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
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN DESA</b></div>
					<div class="center">Nomor : 181.1/<input type="text" name="no_skdkt1" id="no_skdkt1" size="30px" value="<?= $no_surat; ?>/PEMDES/<?= date('Y'); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
					</div>
					<div class="tab2">
						<ol>
							<li>Sebidang tanah darat yang terdaftar dalam SPPT Nomor: <input type="text" name="no_sppt" id="no_sppt" required> Blok : <input type="text" name="blok" id="blok" required> Desa <?= $setting['nama_desa']; ?> Kecamatan <?= $setting['nama_kecamatan']; ?> Kabupaten Majalengka Nomor Persil: <input type="text" name="no_persil" id="no_persil" required> Kelas : <input type="text" name="kelas_persil" id="kelas_persil" required> Luas : <input type="number" name="luas_tanah" id="luas_tanah" required> m<sup>2</sup> Tertera atas nama dengan segala sesuatu yang berdiri diatasnya dan berbatasan dengan tanah milik : </li>
							<table style=" width: 80%; margin: 0 auto;">
								<tr>
									<td style="width: 30%;">
										Sebelah Utara
									</td>
									<td>:</td>
									<td>
										<input type="text" name="batas_utara" id="batas_utara" required>
									</td>
								</tr>
								<tr>
									<td>
										Sebelah Timur
									</td>
									<td>:</td>
									<td>
										<input type="text" name="batas_timur" id="batas_timur" required>
									</td>
								</tr>
								<tr>
									<td>
										Sebelah Selatan
									</td>
									<td>:</td>
									<td>
										<input type="text" name="batas_selatan" id="batas_selatan" required>
									</td>
								</tr>
								<tr style="vertical-align:top">
									<td>
										Sebelah Barat
									</td>
									<td>:</td>
									<td>
										<input type="text" name="batas_barat" id="batas_barat" required>
									</td>
								</tr>

							</table>
							<li>Tanah tersebut diatas adalah hak milik dari saudara/i <input type="text" name="nama_hak_milik" id="nama_hak_milik" required> beralamatkan di Dusun
								<input type="text" name="blok_hak_milik" id="blok_hak_milik" required> RT <input type="number" name="rt_hak_milik" id="rt_hak_milik" required> RW <input type="number" name="rw_hak_milik" id="rw_hak_milik" required> Desa <input type="text" name="desa_hak_milik" id="desa_hak_milik" required> Kecamatan <input type="text" name="kec_hak_milik" id="kec_hak_milik" required>
							</li>
							<li>Pemilik tanah tersebut adalah Warga Negera Indonesia.</li>
							<li>Tanah tersebut sampai pada waktu keterangan ini dibuat, masih tetap tertulis atas namanya
								dan tidak terjadi perselisihan atau persengketaan dengan pihak lain baik mengenai haknya
								maupun batas batasnya.
							</li>
							<li>Tanah tersebut dipergunakan untuk Perumahan/Pesawahan*)</li>
							<li>Tanah tersebut tidak sedang dijaminkan kepada pihak lain.</li>
						</ol>
					</div>
					<table style="width: 80%; margin: 0 auto;">
						<tr>
							<td style="width: 35%;">
								<u><b>Harga taksiran</b></u>
							</td>
						</tr>
						<tr>
							<td>
								Tanah
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="number" name="harga_tanah" id="harga_tanah" required>
							</td>
						</tr>
						<tr>
							<td>
								Bangunan
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<input type="number" name="harga_bangunan" id="harga_bangunan" required>
							</td>
						</tr>

					</table>
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
								Pemilik Jaminan
								<br />
								<br />
								<br />
								<br />
								<br />
								<u><b><input type="text" name="nama_jaminan" id="nama_jaminan" required></b></u>
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

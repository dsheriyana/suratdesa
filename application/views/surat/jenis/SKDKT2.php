<body class="bg-forgot">
	<form autocomplete="off" action="reviewSKDKT2" method="POST">
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
					<div class="center">Nomor : 181.1/<input type="text" name="no_skdkt2" id="no_skdkt2" size="30px" value="<?= $no_surat; ?>/PEMDES/<?= date('Y'); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
					</div>
					<div class="tab">

						<table style=" width: 85%; margin: 0 auto;">
							<tr>
								<td style="width: 30%;">
									Kepala Desa
								</td>
								<td>:</td>
								<td>
									<?= ucwords(strtolower($setting['nama_desa'])); ?>
								</td>
							</tr>
							<tr>
								<td>
									Kecamatan
								</td>
								<td>:</td>
								<td>
									<?= ucwords(strtolower($setting['nama_kecamatan'])); ?>
								</td>
							</tr>
							<tr>
								<td>
									Kabupaten
								</td>
								<td>:</td>
								<td>
									Majalengka
								</td>
							</tr>
							<tr>
								<td colspan="3">
									menerangkan bahwa berdasarkan Akta Jual Beli:

								</td>
								<td></td>
								<td>

								</td>
							</tr>
							<tr>
								<td>
									No. SHM
								</td>
								<td>:</td>
								<td>
									<input type="text" name="no_shm" id="no_shm" required>
								</td>
							</tr>
							<tr>
								<td>
									Atas nama
								</td>
								<td>:</td>
								<td>
									<input type="text" name="atas_nama" id="atas_nama" required>
								</td>
							</tr>
							<tr>
								<td>
									Luas tanah
								</td>
								<td>:</td>
								<td>
									<input type="number" name="luas_tanah" id="luas_tanah" required> m<sup>2</sup>
								</td>
							</tr>
							<tr>
								<td>
									Persil
								</td>
								<td>:</td>
								<td>
									<input type="number" name="persil" id="persil" required>
								</td>
							</tr>
							<tr>
								<td>
									Harga/Meter/Bata
								</td>
								<td>:</td>
								<td>
									<input type="number" name="harga" id="harga" required>
								</td>
							</tr>
						</table>
					</div>
					Demikin keterangan ini kami buat dengan sebenarnya, kepada yang berkepentingan agar
					menjadi maklum.
					<br>
					<br>
					<br>
					<br>
					<table style="width: 100%;">
						<tr>
							<td></td>
							<td style="text-align: center;">
								<?= ucwords(strtolower($setting['nama_desa'])); ?>, <input type="text" class="datepicker" name="tgl_surat" id="tgl_surat" value="<?= tgl_string(date("Y-m-d")); ?>">
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

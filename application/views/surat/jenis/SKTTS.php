<body class="bg-forgot">
	<form autocomplete="off" action="reviewSKTTS" method="POST">
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
					<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN TANAH TIDAK SENGKETA</b></div>
					<div class="center">Nomor : 477.4/ <input type="text" id="no_sktts" name="no_sktts" value="<?= $no_surat; ?>/Pem-Des/<?= date("Y"); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini:
					</div>
					<table style="width: 80%; margin: 0 auto;">
						<tr>
							<td style="width: 20%;">
								Nama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= ucwords(strtolower($setting['nama_kades'])); ?>
							</td>
						</tr>
						<tr>
							<td>
								Jabatan
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								Kepala Desa Mekarmulya
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
								Desa <input type="text" name="desa" id="desa" value="Mekarmulya" readonly><br>
								Kec. <input type="text" name="kec" id="kec" value="Kertajati" readonly><br>
								Kab. <input type="text" name="kab" id="kab" value="Majalengka" readonly>
							</td>
						</tr>

					</table>
					<div class="tab">
						Dengan ini menerangkan bahwa sebidang Tanah atas nama <?= $pemohon['nama']; ?>, <?= ucwords(strtolower($pemohon['blok'])); ?>, Persil Nomor : <input type="text" name="no_persil" required> Nomor SPPT : <input type="text" name="no_sppt" required> seluas <input type="text" name="luas_tanah" required> m<sup>2</sup>
						yang terletak di
						Blok <input type="text" name="blok_tanah" required> Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka Provinsi
						Jawa Barat Tidak dalam keadaan sengketa dan tidak dalam situasi keadaan perselisihan dengan
						pihak manapun juga, dan benar Hak milik saudara <?= $pemohon['nama']; ?> beserta ahli warisnya yang
						tercantum sebagaimana dalam surat keterangan dan pernyataan ahli waris.

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

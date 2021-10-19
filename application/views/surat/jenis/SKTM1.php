<body class="bg-forgot">
	<form autocomplete="off" action="reviewSKTM1" method="POST">
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
					<div class="center">Nomor : 477.4/<input type="text" name="no_sktm1" id="no_sktm1" size="30px" value="<?= $no_surat; ?>/PEMDES/<?= date('Y'); ?>"></div>
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
						<textarea id="keterangan" name="keterangan">
						Berdasarkan data dan catatan yang ada, sampai dikeluarkannya surat keterangan ini, nama orang tersebut diatas tercatat sebagai penduduk Desa kami yang tergolong KELUARGA TIDAK MAMPU KURANG MAMPU/PRA SEJAHTERA
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

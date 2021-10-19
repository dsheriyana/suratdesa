<body class="bg-forgot">
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
			<br />
			<div class="isisurat">
				<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN TIDAK MAMPU (SKTM)</b></div>
				<div class="center">Nomor : 477.4/<?= $no_sktm2; ?></div>
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
							<?= $nama_ayah; ?>
						</td>
					</tr>
					<tr>
						<td>
							NIK
						</td>
						<td>:</td>
						<td>
							<?= $nik_ayah; ?>
						</td>
					</tr>
					<tr>
						<td>
							Tempat, Tanggal Lahir
						</td>
						<td>:</td>
						<td>
							<?= ucwords(strtolower($tmp_lahir_ayah)); ?>, <?= $tgl_lahir_ayah; ?>
						</td>
					</tr>

					<tr>
						<td>
							Jenis Kelamin
						</td>
						<td>:</td>
						<td>
								<?php if ($jk_ayah == 'L') {
									echo "Laki-laki";
								} else {
									echo "Perempuan";
								}
								?>
						</td>
					</tr>
					<tr>
						<td>
							Kewarganegaraan
						</td>
						<td>:</td>
						<td>
							<?= $kewarganegaraan; ?>
						</td>
					</tr>
					<tr style="vertical-align:top">
						<td>
							Alamat
						</td>
						<td>:</td>
						<td>
							Dusun <?= $dsn_ayah; ?> RT/RW <?= $rt_ayah; ?>/<?= $rw_ayah; ?> Desa <?= $desa_ayah; ?> Kec. <?= $kec_ayah; ?> Kab. <?= $kab_ayah; ?>
						</td>
					</tr>
				</table>
				<table style="width: 80%; margin: 0 auto; margin-top:10px">
					<tr>
						<td style="width: 35%;">
							Nama
						</td>
						<td>:</td>
						<td>
							<?= $nama_ibu ?>
						</td>
					</tr>
					<tr>
						<td>
							NIK
						</td>
						<td>:</td>
						<td>
							<?= $nik_ibu; ?>
						</td>
					</tr>
					<tr>
						<td>
							Tempat, Tanggal Lahir
						</td>
						<td>:</td>
						<td>
							<?= ucwords(strtolower($tmp_lahir_ibu)); ?>, <?= $tgl_lahir_ibu; ?>
						</td>
					</tr>

					<tr>
						<td>
							Jenis Kelamin
						</td>
						<td>:</td>
						<td>
						<?php if ($jk_ibu == 'L') {
									echo "Laki-laki";
								} else {
									echo "Perempuan";
								}
								?>
						</td>
					</tr>
					<tr>
						<td>
							Kewarganegaraan
						</td>
						<td>:</td>
						<td>
							<?= $kewarganegaraan; ?>
						</td>
					</tr>
					<tr style="vertical-align:top">
						<td>
							Alamat
						</td>
						<td>:</td>
						<td>
							Dusun <?= $dsn_ibu; ?> RT/RW <?= $rt_ibu; ?>/<?= $rw_ibu; ?> Desa <?= $desa_ibu; ?> Kec. <?= $kec_ibu; ?> Kab. <?= $kab_ibu; ?>
						</td>
					</tr>
				</table>
				<table style="width: 80%; margin: 0 auto;">
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
							<?= $nama_pemohon; ?>
						</td>
					</tr>
					<tr>
						<td>
							Jenis Kelamin
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td>
							<?= ($jk_pemohon == 'L') ? "Laki-laki" : "Perempuan"; ?>
						</td>
					</tr>
					<tr>
						<td>
							Tempat, Tanggal Lahir
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td>
							<?= ucwords(strtolower($tmp_lahir_pemohon)); ?>, <?= $tgl_lahir_pemohon; ?>
						</td>
					</tr>

					<tr>
						<td>
							Pekerjaan
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td>
							<?= $pekerjaan_pemohon; ?>
						</td>
					</tr>
					<tr>
						<td>
							Status Perkawinan
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td>
							<?= $status_pemohon; ?>
						</td>
					</tr>
					<tr style="vertical-align:top">
						<td>
							Alamat
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td>
						Blok <?= ucwords(strtolower($blok_pemohon)); ?> RT/RW <?= $rt_pemohon; ?>/<?= $rw_pemohon; ?> Desa <?= ucwords(strtolower($desa_pemohon)); ?> Kec. <?= ucwords(strtolower($kec_pemohon)); ?>, Kab. <?= ucwords(strtolower($kab_pemohon)); ?>
						</td>
					</tr>

				</table>
				<div class="tab">
				<?= $keterangan; ?>
				</div>
				<div class="tab">
					Demikian surat keterangan ini dibuat dengan sebenarnya, agar dapat dipergunakan
					sebagaimana mestinya.
				</div>
				<table style="width: 100%;">
					<tr>
						<td></td>
						<td style="text-align: center;">
							Mekarmulya, <?= $tgl_surat; ?>
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
	<form id="formSubmit">
		<input type="hidden" name="param" value="cetak">
		<input type="hidden" name="tgl_surat" value="<?= tgl_ubah($tgl_surat); ?>">
		<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">
		<input type="hidden" name="no_sktm2" value="<?= $no_sktm2; ?>">
		<input type="hidden" name="keterangan" value="<?= $keterangan; ?>">

		<input type="hidden" name="nama_pemohon" value="<?= $nama_pemohon; ?>">
		<input type="hidden" name="tmp_lahir_pemohon" value="<?= $tmp_lahir_pemohon; ?>">
		<input type="hidden" name="jk_pemohon" value="<?= $jk_pemohon; ?>">
		<input type="hidden" name="tgl_lahir_pemohon" value="<?= $tgl_lahir_pemohon; ?>">
		<input type="hidden" name="pekerjaan_pemohon" value="<?= $pekerjaan_pemohon; ?>">
		<input type="hidden" name="status_pemohon" value="<?= $status_pemohon; ?>">
		<input type="hidden" name="blok_pemohon" value="<?= $blok_pemohon; ?>">
		<input type="hidden" name="rt_pemohon" value="<?= $rt_pemohon; ?>">
		<input type="hidden" name="rw_pemohon" value="<?= $rw_pemohon; ?>">
		<input type="hidden" name="desa_pemohon" value="<?= $desa_pemohon; ?>">
		<input type="hidden" name="kec_pemohon" value="<?= $kec_pemohon; ?>">
		<input type="hidden" name="kab_pemohon" value="<?= $kab_pemohon; ?>">

		<button type="submit" class="lanjut no-print" id="cetak">
			<i class="fa fa-arrow-right"></i> Cetak
		</button>
		<button type="button" onclick="window.print()" class="lanjut no-print" id="cetakulang">
			<i class="fa fa-arrow-right"></i> Cetak Ulang
		</button>
	</form>

	<button onclick="window.history.back()" class="kembali no-print" title="Kembali">
		<i class="fa fa-arrow-left"></i> Kembali
	</button>
	<button onclick="location.href=`${base_url}auth/logout`" class="tutup no-print" title="tutup">
		<i class="fa fa-times"></i> Tutup
	</button>
	<script>
		let formSubmit = document.querySelector("#formSubmit");
		window.addEventListener("DOMContentLoaded", () => {
			document.querySelector("#cetakulang").style.display = "none";
		})


		formSubmit.addEventListener("submit", (e) => {
			e.preventDefault();

			let formData = new FormData(e.currentTarget);
			simpan_data(formData);

		})

		const simpan_data = async (formData) => {
			let url = `${base_url}surat/reviewSKTM2`;
			const response = await request_xhr(url, "POST", formData);
			if (response.status) {
				formSubmit.querySelector("#cetak").style.display = "none";
				formSubmit.querySelector("#cetakulang").style.display = "block";
				window.print();
			} else {
				alert(response.pesan);
			}
		}
	</script>
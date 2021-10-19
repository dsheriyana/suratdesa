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
			<br /><br />
			<div class="isisurat">
				<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN DESA</b></div>
				<div class="center">Nomor : 181.1/<?= $no_skdkt1; ?></div>
				<div class="tab">
					Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
				</div>
				<div class="tab2">
					<ol>
						<li>Sebidang tanah darat yang terdaftar dalam SPPT Nomor: <?= $no_sppt; ?> Blok : <?= $blok; ?> Desa <?= $setting['nama_desa']; ?> Kecamatan <?= $setting['nama_kecamatan']; ?> Kabupaten Majalengka Nomor Persil: <?= $no_persil; ?> Kelas : <?= $kelas_persil; ?> Luas : <?= $luas_tanah; ?> m<sup>2</sup> Tertera atas nama dengan segala sesuatu yang berdiri diatasnya dan berbatasan dengan tanah milik : </li>
						<table style=" width: 80%; margin: 0 auto;">
							<tr>
								<td style="width: 30%;">
									Sebelah Utara
								</td>
								<td>:&nbsp;&nbsp;
									<?= $batas_utara; ?>
								</td>
							</tr>
							<tr>
								<td>
									Sebelah Timur
								</td>
								<td>:&nbsp;&nbsp;
									<?= $batas_timur; ?>
								</td>
							</tr>
							<tr>
								<td>
									Sebelah Selatan
								</td>
								<td>:&nbsp;&nbsp;
									<?= $batas_selatan; ?>
								</td>
							</tr>
							<tr style="vertical-align:top">
								<td>
									Sebelah Barat
								</td>
								<td>:&nbsp;&nbsp;
									<?= $batas_barat; ?>
								</td>
							</tr>

						</table>
						<li>Tanah tersebut diatas adalah hak milik dari saudara/i <?= $nama_hak_milik; ?> beralamatkan di Dusun
							<?= $blok_hak_milik; ?> RT <?= $rt_hak_milik; ?> RW <?= $rw_hak_milik; ?> Desa <?= $desa_hak_milik; ?> Kecamatan <?= $kec_hak_milik; ?>
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
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;
							<?= "Rp " . number_format($harga_tanah, 2, ',', '.'); ?>
						</td>
					</tr>
					<tr>
						<td>
							Bangunan
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;
							<?= "Rp " . number_format($harga_bangunan, 2, ',', '.'); ?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Jumlah</b>
						</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;

							<b><?= "Rp " . number_format($harga_tanah + $harga_bangunan, 2, ',', '.'); ?></b>
						</td>
					</tr>
				</table>
				<br />
				<table style="width: 100%;">
					<tr>
						<td></td>
						<td style="text-align: center;">
							Mekarmulya, <?= $tgl_surat; ?>
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
							<u><b><?= $nama_jaminan; ?></b></u>
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
		<input type="hidden" name="no_skdkt1" value="<?= $no_skdkt1; ?>">
		<input type="hidden" name="no_sppt" value="<?= $no_sppt; ?>">
		<input type="hidden" name="tgl_surat" value="<?= tgl_ubah($tgl_surat); ?>">
		<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">
		<input type="hidden" name="blok" value="<?= $blok; ?>">
		<input type="hidden" name="no_persil" value="<?= $no_persil; ?>">
		<input type="hidden" name="kelas_persil" value="<?= $kelas_persil; ?>">
		<input type="hidden" name="luas_tanah" value="<?= $luas_tanah; ?>">
		<input type="hidden" name="batas_utara" value="<?= $batas_utara; ?>">
		<input type="hidden" name="batas_timur" value="<?= $batas_timur; ?>">
		<input type="hidden" name="batas_selatan" value="<?= $batas_selatan; ?>">
		<input type="hidden" name="batas_barat" value="<?= $batas_barat; ?>">
		<input type="hidden" name="nama_hak_milik" value="<?= $nama_hak_milik; ?>">
		<input type="hidden" name="blok_hak_milik" value="<?= $blok_hak_milik; ?>">
		<input type="hidden" name="rt_hak_milik" value="<?= $rt_hak_milik; ?>">
		<input type="hidden" name="rw_hak_milik" value="<?= $rw_hak_milik; ?>">
		<input type="hidden" name="desa_hak_milik" value="<?= $desa_hak_milik; ?>">
		<input type="hidden" name="kec_hak_milik" value="<?= $kec_hak_milik; ?>">
		<input type="hidden" name="harga_tanah" value="<?= $harga_tanah; ?>">
		<input type="hidden" name="harga_bangunan" value="<?= $harga_bangunan; ?>">
		<input type="hidden" name="nama_jaminan" value="<?= $nama_jaminan; ?>">

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
			let url = `${base_url}surat/reviewSKDKT1`;
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

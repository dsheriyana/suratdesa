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
				<div class="center">Nomor : 181.1/<?= $no_skdkt2; ?></div>
				<div class="tab">
					Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
				</div>
				<div class="tab">

					<table style=" width: 85%; margin: 0 auto;">
						<tr>
							<td style="width: 30%;">
								Kepala Desa
							</td>
							<td>:&nbsp;&nbsp;
								<?= ucwords(strtolower($setting['nama_desa'])); ?>
							</td>
						</tr>
						<tr>
							<td>
								Kecamatan
							</td>
							<td>:&nbsp;&nbsp;
								<?= ucwords(strtolower($setting['nama_kecamatan'])); ?>
							</td>
						</tr>
						<tr>
							<td>
								Kabupaten
							</td>
							<td>:&nbsp;&nbsp;
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
							<td>:&nbsp;&nbsp;
								<?= $no_shm; ?>
							</td>
						</tr>
						<tr>
							<td>
								Atas nama
							</td>
							<td>:&nbsp;&nbsp;
								<?= $atas_nama; ?>
							</td>
						</tr>
						<tr>
							<td>
								Luas tanah
							</td>
							<td>:&nbsp;&nbsp;
								<?= $luas_tanah; ?> m<sup>2</sup>
							</td>
						</tr>
						<tr>
							<td>
								Persil
							</td>
							<td>:&nbsp;&nbsp;
								<?= $persil; ?>
							</td>
						</tr>
						<tr>
							<td>
								Harga/Meter/Bata
							</td>
							<td>:&nbsp;&nbsp;
								<?= "Rp " . number_format($harga, 2, ',', '.'); ?>
							</td>
						</tr>
					</table>
				</div>
				<div class="tab">
				Demikin keterangan ini kami buat dengan sebenarnya, kepada yang berkepentingan agar
				menjadi maklum.
				</div>
				<br>
				<br>
				<br>
				<table style="width: 100%;">
					<tr>
						<td></td>
						<td style="text-align: center;">
							<?= ucwords(strtolower($setting['nama_desa'])); ?>, <?= $tgl_surat; ?>
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
		
	<input type="hidden" name="nama_pemohon" value="<?= $nama_pemohon; ?>">
	<input type="hidden" name="nik_pemohon" value="<?= $nik_pemohon; ?>">
	<input type="hidden" name="tmp_lahir_pemohon" value="<?= $tmp_lahir_pemohon; ?>">
	<input type="hidden" name="tgl_lahir_pemohon" value="<?= $tgl_lahir_pemohon; ?>">
	<input type="hidden" name="jk_pemohon" value="<?= $jk_pemohon; ?>">
	<input type="hidden" name="pekerjaan_pemohon" value="<?= $pekerjaan_pemohon; ?>">
	<input type="hidden" name="blok_pemohon" value="<?= $blok_pemohon; ?>">
	<input type="hidden" name="rt_pemohon" value="<?= $rt_pemohon; ?>">
	<input type="hidden" name="rw_pemohon" value="<?= $rw_pemohon; ?>">
	<input type="hidden" name="desa_pemohon" value="<?= $desa_pemohon; ?>">
	<input type="hidden" name="kec_pemohon" value="<?= $kec_pemohon; ?>">
	<input type="hidden" name="kab_pemohon" value="<?= $kab_pemohon; ?>">

	
		<input type="hidden" name="no_skdkt2" value="<?= $no_skdkt2; ?>">
		<input type="hidden" name="tgl_surat" value="<?= tgl_ubah($tgl_surat); ?>">
		<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">
		<input type="hidden" name="no_shm" value="<?= $no_shm; ?>">
		<input type="hidden" name="atas_nama" value="<?= $atas_nama; ?>">
		<input type="hidden" name="luas_tanah" value="<?= $luas_tanah; ?>">
		<input type="hidden" name="persil" value="<?= $persil; ?>">
		<input type="hidden" name="harga" value="<?= $harga; ?>">

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
			let url = `${base_url}surat/reviewSKDKT2`;
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

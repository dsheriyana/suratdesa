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
				<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN TANAH TIDAK SENGKETA</b></div>
				<div class="center">Nomor : 477.4/<?= $no_sktts; ?></div>
				<div class="tab">
					Yang bertandatangan dibawah ini:
				</div>
				<table style="width: 80%; margin: 0 auto;">
					<tr>
						<td style="width: 35%;">
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
						Blok <?= ucwords(strtolower($blok)); ?> RT/RW <?= $rt; ?>/<?= $rw; ?> Desa <?= ucwords(strtolower($setting['nama_desa'])); ?> Kec. <?= ucwords(strtolower($setting['nama_kecamatan'])); ?>, Kab. Majalengka
						</td>
					</tr>

				</table>
				<div class="tab">
					Dengan ini menerangkan bahwa sebidang Tanah atas nama <b><?= $pemohon['nama']; ?></b>, <?= ucwords(strtolower($pemohon['blok'])); ?>, Persil Nomor : <?= $no_persil; ?> Nomor SPPT : <?= $no_sppt; ?> seluas <?= $luas_tanah; ?> m<sup>2</sup>
					yang terletak di
					Blok <?= $blok_tanah; ?> Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka Provinsi
					Jawa Barat Tidak dalam keadaan sengketa dan tidak dalam situasi keadaan perselisihan dengan
					pihak manapun juga, dan benar Hak milik saudara <b><?= $pemohon['nama']; ?></b> beserta ahli warisnya yang tercantum sebagaimana dalam surat keterangan dan pernyataan ahli waris.
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
		<input type="hidden" name="no_sktts" value="<?= $no_sktts; ?>">

		
		<input type="hidden" name="blok" value="<?= $blok; ?>">
		<input type="hidden" name="rt" value="<?= $rt; ?>">
		<input type="hidden" name="rw" value="<?= $rw; ?>">

		<input type="hidden" name="no_persil" value="<?= $no_persil; ?>">
		<input type="hidden" name="no_sppt" value="<?= $no_sppt; ?>">
		<input type="hidden" name="luas_tanah" value="<?= $luas_tanah; ?>">
		<input type="hidden" name="blok_tanah" value="<?= $blok_tanah; ?>">


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
			let url = `${base_url}surat/reviewSKTTS`;
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

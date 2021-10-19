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
				<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN LUAS TANAH</b></div>
				<div class="center">Nomor : 181.1/<?= $no_sklt; ?></div>
				<div class="tab">
					Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
				</div>
				<div class="tab2">
				<ol>
					<table style="width: 90%; margin: 0 auto;">
						<tr>
							<td style="width: 45%;">
								<li>Akta AJB/Hibah/PHB/Letter C/No</li>
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<?= $no_akta; ?>
							</td>
						</tr>
						<tr>
							<td>
								Atas nama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= $pemohon['nama']; ?>
							</td>
						</tr>

						<tr style="vertical-align:top">
							<td>
								Alamat
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								Blok <?= ucwords(strtolower($pemohon['blok'])); ?> RT/RW <?= $pemohon['rt']; ?>/<?= $pemohon['rw']; ?> Desa <?= ucwords(strtolower($setting['nama_desa'])); ?> Kec. <?= ucwords(strtolower($setting['nama_kecamatan'])); ?>, Kab. Majalengka
							</td>
						</tr>
						<tr>
							<td>
								Persil/Kelas
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= $persil; ?>
							</td>
						</tr>
						<tr>
							<td>
								Luas
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= $luas_lahan; ?> m<sup>2</sup>
							</td>
						</tr>
					</table>
					<table style="width: 90%; margin: 0 auto; margin-top:15px">
						<tr>
							<td style="width: 45%;">
								<li>SPPT tahun <?= $tahun_sppt; ?> Nomor</li>
							</td>
							<td>&nbsp;&nbsp;:</td>
							<td>
								<?= $no_sppt; ?>
							</td>
						</tr>
						<tr>
							<td>
								Atas nama
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= $pemohon['nama']; ?>
							</td>
						</tr>

						<tr style="vertical-align:top">
							<td>
								Alamat
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								Blok <?= ucwords(strtolower($pemohon['blok'])); ?> RT/RW <?= $pemohon['rt']; ?>/<?= $pemohon['rw']; ?> Desa <?= ucwords(strtolower($setting['nama_desa'])); ?> Kec. <?= ucwords(strtolower($setting['nama_kecamatan'])); ?>, Kab. Majalengka
							</td>
						</tr>
						<tr>
							<td>
								Persil/Kelas
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= $persil_beda; ?>
							</td>
						</tr>
						<tr>
							<td>
								Luas
							</td>
							<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
							<td>
								<?= $luas_lahan_beda; ?> m<sup>2</sup>
							</td>
						</tr>
					</table>
				</ol>
				</div>
				<div class="tab">
					Dari kedua data tersebut diatas terdapat perbedaan/selisih luas sebesar <b><?= $selisih_tanah; ?></b> m<sup>2</sup>
					, maka dengan
					ini kami terangkan bahwa perbedaan tersebut disebabkan kekeliruan penginputan data di
					BKAD sehingga luas yang betul adalah pada data Akta Jual Beli sesuai data di atas.
					Demikian keterangan dari kami, kepada yang berkepentingan harap mengetahui dan
					memakluminya.

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
						<td style="width: 50px;"></td>
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
		<input type="hidden" name="no_akta" value="<?= $no_akta; ?>">
		<input type="hidden" name="tahun_sppt" value="<?= $tahun_sppt; ?>">
		<input type="hidden" name="persil" value="<?= $persil; ?>">
		<input type="hidden" name="luas_lahan" value="<?= $luas_lahan; ?>">
		<input type="hidden" name="no_sppt" value="<?= $no_sppt; ?>">
		<input type="hidden" name="persil_beda" value="<?= $persil_beda; ?>">
		<input type="hidden" name="luas_lahan_beda" value="<?= $luas_lahan_beda; ?>">
		<input type="hidden" name="no_sklt" value="<?= $no_sklt; ?>">

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
			let url = `${base_url}surat/reviewSKLT`;
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

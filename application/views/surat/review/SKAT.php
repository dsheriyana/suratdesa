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
			<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN ASAL TANAH</b></div>
			<div class="center">Nomor : 181.1/<?= $no_skat; ?></div>
			<div class="tab">
				Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
			</div>
			<table style="width: 80%; margin: 0 auto;">
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
						NIK
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $nik_pemohon; ?>
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
						Jenis Kelamin
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= ($jk_pemohon == 'L') ? "Laki-laki" : "Perempuan" ?>

					</td>
				</tr>
				<tr>
					<td>
						Kewarganegaraan
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $kewarganegaraan_pemohon; ?>
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
				Memiliki sebagian / sebidang tanah / rumah / tanah pekarangan / tanah bekas Hak Milik Adat berdasarkan SPPT/STTS No. : <b><?= $no_sppt; ?></b> yang terletak di Blok <?= $letak_blok; ?> Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, dengan No. Persil <?= $no_persil; ?> Kelas <?= $kelas_persil; ?> luas <?= $luas_tanah; ?> M<sup>2</sup>, dengan batas tanah sebagai berikut:
			</div>
			<table style="width: 80%; margin: 0 auto;">
				<tr>
					<td style="width: 35%;">
						Sebelah Utara
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
						<?= $batas_utara; ?>
					</td>
				</tr>
				<tr>
					<td>
						Sebelah Timur
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
						<?= $batas_timur; ?>
					</td>
				</tr>
				<tr>
					<td>
						Sebelah Selatan
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
						<?= $batas_selatan; ?>
					</td>
				</tr>
				<tr style="vertical-align:top">
					<td>
						Sebelah Barat
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
						<?= $batas_barat; ?>
					</td>
				</tr>

			</table>
			<div class="tab">
				Tanah tersebut diatas adalah mutasi Nama : <?= $nama_mutasi; ?> dari hak bagi waris yang beralamatkan di
				Dusun <?= $dusun; ?> RT <?= $rt; ?> RW <?= $rw; ?> Desa <?= $desa; ?> Kecamatan <?= $kecamatan; ?> Kabupaten
				Majalengka, sejak tanggal <?= $tgl_ketetapan; ?> karena jual beli. Salinan F Desa/Induk C terlampir.
				Demikian surat keterangan asal tanah ini kami buat dengan sesungguhnya, untuk dipergunakan
				seperlunya.
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
						<!-- Mengetahui, <br/>
                                Kepala Desa Mekarmulya
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <u><?= $setting['nama_kades']; ?></u> -->
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


	<input type="hidden" name="no_sppt" value="<?= $no_sppt; ?>">
	<input type="hidden" name="letak_blok" value="<?= $letak_blok; ?>">
	<input type="hidden" name="no_persil" value="<?= $no_persil; ?>">
	<input type="hidden" name="kelas_persil" value="<?= $kelas_persil; ?>">
	<input type="hidden" name="luas_tanah" value="<?= $luas_tanah; ?>">
	<input type="hidden" name="batas_utara" value="<?= $batas_utara; ?>">
	<input type="hidden" name="batas_timur" value="<?= $batas_timur; ?>">
	<input type="hidden" name="batas_selatan" value="<?= $batas_selatan; ?>">
	<input type="hidden" name="batas_barat" value="<?= $batas_barat; ?>">
	<input type="hidden" name="nama_mutasi" value="<?= $nama_mutasi; ?>">
	<input type="hidden" name="dusun" value="<?= $dusun; ?>">
	<input type="hidden" name="rt" value="<?= $rt; ?>">
	<input type="hidden" name="rw" value="<?= $rw; ?>">
	<input type="hidden" name="desa" value="<?= $desa; ?>">
	<input type="hidden" name="kecamatan" value="<?= $kecamatan; ?>">
	<input type="hidden" name="tgl_ketetapan" value="<?= $tgl_ketetapan; ?>">
	<input type="hidden" name="tgl_surat" value="<?= tgl_ubah($tgl_surat); ?>">
	<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">

	<input type="hidden" name="no_skat" value="<?= $no_skat; ?>">

	<button type="submit" name="cetak" id="cetak" class="lanjut no-print">
		<i class="fa fa-arrow-right"></i> Cetak
	</button>
	<button type="button" onclick="window.print()" name="cetakulang" id="cetakulang" class="lanjut no-print">
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
	window.addEventListener("DOMContentLoaded", () => {
		document.querySelector("#cetakulang").style.display = 'none';
	})

	let formSubmit = document.querySelector("#formSubmit");


	formSubmit.addEventListener("submit", (e) => {
		e.preventDefault();

		let formData = new FormData(e.currentTarget);
		simpan_data(formData);

	})

	const simpan_data = async (formData) => {
		let url = `${base_url}surat/reviewSKAT`;
		const response = await request_xhr(url, "POST", formData);
		if (response.status) {
			formSubmit.querySelector("#cetak").style.display = 'none';
			formSubmit.querySelector("#cetakulang").style.display = 'block';
			window.print();
		} else {
			alert(response.pesan);
		}
	}
</script>

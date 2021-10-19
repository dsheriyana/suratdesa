<div class="book">
	<div class="page">
		<div class="isisurat">
			<br><br>
			<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT IZIN SUAMI / ORANG TUA</b></div>
			<div class="center"></div>
			<div class="tab">
				Yang bertandatangan dibawah ini :
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
						<?php if ($jk_pemohon == 'L') {
							echo "Laki-laki";
						} else {
							echo "Perempuan";
						}
						?>
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
						Blok <?= ucwords(strtolower($blok_pemohon)); ?> RT/RW <?= $rt_pemohon; ?>/<?= $rw_pemohon; ?> Desa <?= ucwords(strtolower($desa_pemohon)); ?> Kec. <?= ucwords(strtolower($kec_pemohon)); ?>, Kab.  <?= ucwords(strtolower($kab_pemohon)); ?>
					</td>
				</tr>
			</table>
			<div class="tab">
				Dengan ini memberikan Izin kepada <b>Istri/Anak</b> saya.
			</div>
			<table style="width: 80%; margin: 0 auto; font-size: 12pt;">
				<tr>
					<td style="width: 35%;">
						Nama
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $nama; ?>
					</td>
				</tr>
				<tr>
					<td>
						NIK
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $nik; ?>
					</td>
				</tr>
				<tr>
					<td>
						Tempat, Tanggal Lahir
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= ucwords(strtolower($tmp_lahir)); ?>, <?= $tgl_lahir; ?>
					</td>
				</tr>
				<tr>
					<td>
						Jenis Kelamin
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?php if ($jk == 'L') {
							echo "Laki-laki";
						} else {
							echo "Perempuan";
						}
						?>
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $pekerjaan; ?>
					</td>
				</tr>
				<tr style="vertical-align:top">
					<td>
						Alamat
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
					Blok <?= ucwords(strtolower($blok)); ?> RT/RW <?= $rt; ?>/<?= $rw; ?> Desa <?= ucwords(strtolower($desa)); ?> Kec. <?= ucwords(strtolower($kec)); ?>, Kab.  <?= ucwords(strtolower($kab)); ?>
					</td>
				</tr>
			</table>
			<div class="tab">
				<?= $keterangan; ?>
			</div>
			<div class="tab">
				Demikian Surat izin ini dibuat dengan sebenarnya tanpa ada paksaan dari pihak manapun.
			</div>
			<table style="width: 100%;">
				<tr>
					<td></td>
					<td style="text-align: center;">
					<?= ucwords(strtolower($setting['nama_desa'])); ?>, <?= $tgl_surat; ?>
					</td>
				</tr>
				<tr style="vertical-align:bottom">
					<td style="width:50%;text-align: center;">
						Yang diberi Izin
						<br />
						<br />
						<br />
						<br />
						<u><b><?= $ttdnama; ?></b></u>
					</td>
					<td style="width:50%;text-align: center;">
						Yang Memberi Izin
						<br />
						<br />
						<i>materai</i>
						<br />
						<br />
						<u><b><?= $ttdnama_pemohon; ?></b></u>
					</td>
				</tr>
			</table>
			<table style="width: 100%;">
				<tr style="vertical-align:bottom">
					<td style="text-align: center;">
						Mengetahui, <br>
						Kepala Desa <?= ucwords(strtolower($setting['nama_desa'])); ?>
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


	<input type="hidden" name="nama" value="<?= $nama; ?>">
	<input type="hidden" name="nik" value="<?= $nik; ?>">
	<input type="hidden" name="tmp_lahir" value="<?= $tmp_lahir; ?>">
	<input type="hidden" name="tgl_lahir" value="<?= $tgl_lahir; ?>">
	<input type="hidden" name="jk" value="<?= $jk; ?>">
	<input type="hidden" name="pekerjaan" value="<?= $pekerjaan; ?>">
	<input type="hidden" name="blok" value="<?= $blok; ?>">
	<input type="hidden" name="rt" value="<?= $rt; ?>">
	<input type="hidden" name="rw" value="<?= $rw; ?>">
	<input type="hidden" name="desa" value="<?= $desa; ?>">
	<input type="hidden" name="kec" value="<?= $kec; ?>">
	<input type="hidden" name="kab" value="<?= $kab; ?>">
	<input type="hidden" name="keterangan" value="<?= $keterangan; ?>">
	<input type="hidden" name="ttdnama" value="<?= $ttdnama; ?>">
	<input type="hidden" name="ttdnama_pemohon" value="<?= $ttdnama_pemohon; ?>">

	<input type="hidden" name="tgl_surat" value="<?= tgl_ubah($tgl_surat); ?>">
	<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">

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
	window.addEventListener("DOMContentLoaded", () =>{
		document.querySelector("#cetakulang").style.display = "none";
	})


	formSubmit.addEventListener("submit", (e) => {
		e.preventDefault();

		let formData = new FormData(e.currentTarget);
		simpan_data(formData);

	})

	const simpan_data = async (formData) => {
		let url = `${base_url}surat/reviewSISOT`;
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
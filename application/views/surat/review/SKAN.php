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
					Jl Sukajaya No. 311, Desa  <?= ucwords(strtolower($setting['nama_desa'])); ?>, Kecamatan  <?= ucwords(strtolower($setting['nama_kecamatan'])); ?>,  <?= ucwords(strtolower($setting['nama_kabupaten'])); ?> 45457
				</td>
			</tr>
		</table>
		<br>
		<div class="isisurat">
			<div class="center" style="font-size: 14pt; text-decoration: underline;"><b>SURAT KETERANGAN ANDON NIKAH</b></div>
			<div class="center">Nomor : 474.2/<?= $no_skan; ?></div>
			<div class="tab">
				Yang bertandatangan dibawah ini Kepala Desa  <?= ucwords(strtolower($setting['nama_desa'])); ?>, menerangkan bahwa:
			
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
						<?= ($jk_pemohon == 'L') ? "Laki-laki" : "Perempuan"; ?>
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
			</div>
			<div class="tab">
				Orang tersebut di atas adalah penduduk Desa <?= ucwords(strtolower($desa_pemohon)); ?> Kecamatan <?= ucwords(strtolower($kec_pemohon)); ?> Kabupaten <?= ucwords(strtolower($kab_pemohon)); ?> Yang bermaksud akan melangsungkan pernikahan ke:
			
			<table style="width: 80%; margin: 0 auto;">
				<tr>
					<td style="width: 35%;">
						Desa/Kelurahan
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
					<?= ucwords(strtolower($desa_tujuan)); ?>
					</td>
				</tr>
				<tr>
					<td>
						Kecamatan
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
					<?= ucwords(strtolower($kec_tujuan)); ?>
					</td>
				</tr>
				<tr>
					<td>
						Kabupaten
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
					<?= ucwords(strtolower($kab_tujuan)); ?>
					</td>
				</tr>
				<tr>
					<td>
						Provinsi
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;
					<?= ucwords(strtolower($prov_tujuan)); ?>
					</td>
				</tr>

			</table>
			</div>
			<div class="tab">
				Dengan Seorang <?= ($jk_pemohon == 'L') ? "Perempuan" : "Laki-laki"; ?> :
			
			<table style="width: 80%; margin: 0 auto;">
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
						<?= ($jk_pemohon == 'L') ? "Binti" : "Bin"; ?>
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $binti; ?>
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
						<?= ($jk == 'L') ? "Laki-laki" : "Perempuan"; ?>
					</td>
				</tr>
				<tr>
					<td>
						Agama
					</td>
					<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
					<td>
						<?= $agama; ?>
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
						Blok <?= ucwords(strtolower($blok)); ?> RT/RW <?= $rt; ?>/<?= $rw; ?> Desa <?= ucwords(strtolower($desa)); ?> Kec. <?= ucwords(strtolower($kec)); ?>, Kab. <?= ucwords(strtolower($kab)); ?>
					</td>
				</tr>

			</table>
			</div>
			<div class="tab">
				Demikian Surat keterangan ini di buat dengan sebenarnya untuk di pergunakan sebagai mana mestinya.
		
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
</div>
<form id="formSubmit">
	<input type="hidden" name="param" value="cetak">
	<input type="hidden" name="desa" value="<?= $desa; ?>">
	<input type="hidden" name="kec" value="<?= $kec; ?>">

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

	<input type="hidden" name="desa_tujuan" value="<?= $desa_tujuan; ?>">
	<input type="hidden" name="kec_tujuan" value="<?= $kec_tujuan; ?>">
	<input type="hidden" name="kab_tujuan" value="<?= $kab_tujuan; ?>">
	<input type="hidden" name="prov_tujuan" value="<?= $prov_tujuan; ?>">

	<input type="hidden" name="dengan_seorang" value="<?= $dengan_seorang; ?>">
	<input type="hidden" name="bin" value="<?= $bin; ?>">
	<input type="hidden" name="nama" value="<?= $nama; ?>">
	<input type="hidden" name="nik" value="<?= $nik; ?>">
	<input type="hidden" name="tmp_lahir" value="<?= $tmp_lahir; ?>">
	<input type="hidden" name="tgl_lahir" value="<?= $tgl_lahir; ?>">
	<input type="hidden" name="jk" value="<?= $jk; ?>">
	<input type="hidden" name="pekerjaan" value="<?= $pekerjaan; ?>">
	<input type="hidden" name="blok" value="<?= $blok; ?>">
	<input type="hidden" name="rt" value="<?= $rt; ?>">
	<input type="hidden" name="rw" value="<?= $rw; ?>">
	<input type="hidden" name="tgl_surat" value="<?= tgl_ubah($tgl_surat); ?>">
	<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">
	<input type="hidden" name="binti" value="<?= $binti; ?>">
	<input type="hidden" name="no_skan" value="<?= $no_skan; ?>">

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
		let url = `${base_url}surat/reviewSKAN`;
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


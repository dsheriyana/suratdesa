<body class="bg-forgot">
	<form autocomplete="off" action="<?= base_url('surat/reviewSKLT'); ?>" method="POST">
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
					<div class="center">Nomor : 181.1/<input name="no_sklt" id="no_sklt" value="<?= $no_surat; ?>/Pemdes/<?= date("Y"); ?>"></div>
					<div class="tab">
						Yang bertandatangan dibawah ini Kepala Desa Mekarmulya Kecamatan Kertajati Kabupaten Majalengka, menerangkan bahwa:
					</div>
					<ol>
						<table style="width: 80%; margin: 0 auto;">
							<tr>
								<td style="width: 45%;">
									<li>Akta AJB/Hibah/PHB/Letter C/No</li>
								</td>
								<td>&nbsp;&nbsp;:</td>
								<td>
									<input type="text" name="no_akta" id="no_akta" required>
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
									<input type="text" name="persil" id="persil" required>
								</td>
							</tr>
							<tr>
								<td>
									Luas
								</td>
								<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td>
									<input type="text" name="luas_lahan" id="luas_lahan" required> m<sup>2</sup>
								</td>
							</tr>
						</table>
						<table style="width: 80%; margin: 0 auto; margin-top:25px">
							<tr>
								<td style="width: 45%;">
									<li>SPPT tahun <input type="text" id="tahun_sppt" name="tahun_sppt" maxlength="4" size="3" required>  Nomor</li>
								</td>
								<td>&nbsp;&nbsp;:</td>
								<td>
									<input type="text" name="no_sppt" id="no_sppt" required>
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
									<input type="text" name="persil_beda" id="persil_beda" required>
								</td>
							</tr>
							<tr>
								<td>
									Luas
								</td>
								<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td>
									<input type="text" name="luas_lahan_beda" id="luas_lahan_beda" required> m<sup>2</sup>
								</td>
							</tr>
						</table>
					</ol>
					<div class="tab">
						Dari kedua data tersebut diatas terdapat perbedaan/selisih luas sebesar <b class="selisih_luas"></b> m<sup>2</sup>
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
								Mekarmulya, <input type="text" class="datepicker" name="tgl_surat" id="tgl_surat" value="<?= tgl_string(date("Y-m-d")); ?>">
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
		<input type="hidden" value="<?= $this->uri->segment(2); ?>" name="jenis_surat">
		<input type="hidden" name="selisih_tanah" id="selisih_tanah">
		<button type="submit" name="submit" class="lanjut no-print"><i class="fa fa-arrow-right"></i> Lanjut</button>
	</form>
	<button onclick="window.history.back()" class="kembali no-print" title="Kembali">
		<i class="fa fa-arrow-left"></i> Kembali
	</button>
	<script>
		document.querySelector("#luas_lahan_beda").addEventListener("keyup", () => {
			if (document.querySelector("#luas_lahan_beda").value.length > 0) {
				let nilai_akhir = document.querySelector("#luas_lahan_beda").value - document.querySelector("#luas_lahan").value
				document.querySelector(".selisih_luas").innerHTML = nilai_akhir
				document.querySelector("#selisih_tanah").value = nilai_akhir
			} else {
				document.querySelector(".selisih_luas").innerHTML = 0
			}
		})
	</script>

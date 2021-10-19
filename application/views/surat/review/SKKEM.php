<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
		table.disdukcapil {
		width: 100%;
		border: solid 1px #000000;
		/*border-collapse: collapse;*/
	}

	table.disdukcapil td {
		padding: 1px 1px 1px 3px;
		margin: 0px;
	}

	table.disdukcapil td.padat {
		padding: 0px;
		margin: 0px;
	}

	table.disdukcapil td.anggota {
		border-left: solid 1px #000000;
		border-right: solid 1px #000000;
		border-top: dashed 1px #000000;
		border-bottom: dashed 1px #000000;
	}

	table.disdukcapil td.judul {
		border-left: solid 1px #000000;
		border-right: solid 1px #000000;
		border-top: double 1px #000000;
		border-bottom: double 1px #000000;
	}

	table.disdukcapil td.bawah {
		border-bottom: solid 1px #000000;
	}

	table.disdukcapil td.atas {
		border-top: solid 1px #000000;
	}

	table.disdukcapil td.tengah_blank {
		border-left: solid 1px #000000;
		border-right: solid 1px #000000;
	}

	table.disdukcapil td.pinggir_kiri {
		border-left: solid 1px #000000;
	}

	table.disdukcapil td.pinggir_kanan {
		border-right: solid 1px #000000;
	}

	table.disdukcapil td.kotak {
		border: solid 1px #000000;
	}

	table.disdukcapil td.abu {
		background-color: lightgrey;
	}

	table.disdukcapil td.kode {
		background-color: lightgrey;
	}

	table.disdukcapil td.kode div {
		margin: 0px 15px 0px 15px;
		border: solid 1px black;
		background-color: white;
		text-align: center;
	}

	table.disdukcapil td.pakai-padding {
		padding-left: 20px;
		padding-right: 2px;
	}

	table.disdukcapil td.kiri {
		text-align: left;
	}

	table.disdukcapil td.kanan {
		text-align: right;
	}

	table.disdukcapil td.tengah {
		text-align: center;
	}

	table#kop {
		margin-top: -5px;
		margin-bottom: 0px;
		padding: 0px;
		border: 0px;
		border-collapse: collapse;
	}

	table#kop td {
		padding: 0px;
		margin: 0px;
	}

	table#kop tr {
		padding: 0px;
		margin: 0px;
	}

	table#kode {
		padding: 2px 10px;
		border: solid 1px black;
		margin-top: 0px;
		margin-bottom: 0px;
		font-size: 11pt;
	}
	
.lanjut {
			color: white;
			border: none;
			background-color: #32ab13;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 10px;
			position: fixed;
			top: 40px;
			right: 40px;
			box-shadow: 2px 2px 3px #D3D3D3;
		}

		.lanjut:hover {
			background-color: #07820a;
		}

		.kembali {
			color: white;
			border: none;
			background-color: red;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 10px;
			position: fixed;
			top: 40px;
			left: 40px;
			box-shadow: 2px 2px 3px #D3D3D3;
		}

		.kembali:hover {
			background-color: crimson;
		}

		.tutup {
			color: white;
			border: none;
			background-color: #5a7684;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 10px;
			position: fixed;
			bottom: 40px;
			right: 40px;
			box-shadow: 2px 2px 3px #D3D3D3;
		}

		.tutup:hover {
			background-color: #212529;
		}

		.my-float {
			margin-top: 22px;
		}

		@media print {
			.no-print {
				visibility: hidden;
			
			}
			body {
				zoom: 62%;
			}
		}

</style>

<script>
		let base_url = '<?= base_url(); ?>';
	</script>

<page orientation="portrait" format="215x330" style="font-size: 7pt">
	<table id="kode" align="right">
		<tr><td><strong>Kode . F-2.29</strong></td></tr>
	</table>
	<table id="kop" class="disdukcapil">
		<col span="48" style="width: 2.0833%;">
		<tr><td colspan=48>&nbsp;</td></tr>
		<tr>
			<td colspan="10">Pemerintah Desa/Kelurahan</td>
			<td>: </td>
			<td colspan="7"><?= $setting['nama_desa'];?></td>
			<td colspan="13">&nbsp;</td>
			<td colspan="3">Ket : </td>
			<td colspan="4">Lembar 1</td>
			<td>: </td>
			<td colspan="9">Untuk Yang Bersangkutan</td>
		</tr>
		<tr>
			<td colspan="10">Kecamatan</td>
			<td>: </td>
			<td colspan="7"><?= $setting['nama_kecamatan'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">Lembar 2</td>
			<td>: </td>
			<td colspan="9">Untuk UPTD/Instansi Pelaksana</td>
		</tr>
		<tr>
			<td colspan="10">Kabupaten/Kota</td>
			<td>:</td>
			<td colspan="7">MAJALENGKA</td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">Lembar 3</td>
			<td>: </td>
			<td colspan="9">Untuk Desa/Kelurahan</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>
			<?php for ($i=0; $i<10; $i++): ?>
				<td style="border-bottom: 1px solid black;">&nbsp;</td>
			<?php endfor; ?>
			<td colspan="13">&nbsp;</td>
			<td colspan="4">Lembar 4</td>
			<td>: </td>
			<td colspan="9">Untuk Kecamatan</td>
		</tr>
		<tr>
			<td colspan="10">Kode Wilayah</td>
			<td style="border-right: 1px solid black;">:</td>
			<?php for ($i=0; $i<10; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($setting['kode_desa'][$i])): ?>
						<?= $setting['kode_desa'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="27">&nbsp;</td>
		</tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
	<p style="text-align: center; margin-top: 2px;">
		<strong style="font-size: 10pt;">SURAT KETERANGAN KEMATIAN </strong>
		<br>
		<strong style="font-size: 10pt;">Nomor: <?= $no_skkem; ?> </strong>
	</p>
	<table class="disdukcapil" style="margin-top: -15px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="10">Nama Kepala Keluarga</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($kepala_keluarga[$i])): ?>
						<?= $kepala_keluarga[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($kk[$i])): ?>
						<?= $kk[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21">&nbsp;</td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Jenazah -->
		<tr>
			<td colspan=48><strong>JENAZAH </strong></td>
		</tr>
		<tr>
			<td colspan="10">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nik_jenazah[$i])): ?>
						<?= $nik_jenazah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_jenazah[$i])): ?>
						<?= $nama_jenazah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3.&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_jenazah;?>
				</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4.&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir / Umur <?= $tgl_lahir_jenazah; ?> </td>
			<td>:</td>
				<?php 
				$date = date($tgl_lahir_jenazah);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($umur_jenazah[$j])): ?>
						<?= $umur_jenazah[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>5.&nbsp;&nbsp;&nbsp;&nbsp;Tempat Lahir </td>
			<td>:</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tmp_lahir_jenazah[$i])): ?>
						<?= $tmp_lahir_jenazah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="25">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6.&nbsp;&nbsp;&nbsp;&nbsp;Agama </td>
			<td>:</td>
			<td class="kotak padat tengah">
				<?php if (isset($agama_jenazah[0])): ?>
					<?= $agama_jenazah[0];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>
			</td>
			<td colspan=4>1. Islam</td>
			<td colspan=6>2. Kristen </td>
			<td colspan=6>3. Katolik </td>
			<td colspan=5>4. Hindu </td>
			<td colspan=5>5. Budha </td>
			<td colspan=6>6. Lainnya </td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">7.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pekerjaanid_jenazah[$j])): ?>
						<?= $pekerjaanid_jenazah[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $pekerjaan_jenazah; ?></td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">8.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $blok_jenazah; ?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rt_jenazah[$i])): ?>
						<?= $rt_jenazah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rw_jenazah[$i])): ?>
						<?= $rw_jenazah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $setting['nama_desa'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $setting['nama_kecamatan'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $kab_jenazah; ?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $provinsi_jenazah; ?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">9.&nbsp;&nbsp;&nbsp;&nbsp;Anak ke </td>
			<td>:</td>
			<td class="kotak padat tengah">
				<?= $anakke_jenazah; ?>
			</td>
			<td>&nbsp;</td>
			<td colspan=6>1,  2,  3,  4, ... </td>
			<td colspan=29>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">10.&nbsp;&nbsp;Tanggal Kematian </td>
			<td>:</td>
			<?php 
			$date = date($tgl_kematian);
			$date_arr = explode("-", $date);
			$tgl = $date_arr[0];
			$bln = $date_arr[1];
			$thn = $date_arr[2];
			?>
			<td colspan="4">Tanggal : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="12">&nbsp;</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">11.&nbsp;&nbsp;Pukul </td>
			<td>:</td>
			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($waktu_kematian[$i])): ?>
						<?= $waktu_kematian[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>12.&nbsp;&nbsp;Sebab Kematian </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($sebab_kematian[$i])): ?>
						<?= $sebab_kematian[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=6>1. Sakit biasa / tua</td>
			<td colspan=6>2. Wabah Penyakit </td>
			<td colspan=6>3. Kecelakaan </td>
			<td colspan=18>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan=6>4. Kriminalitas </td>
			<td colspan=6>5. Bunuh Diri </td>
			<td colspan=6>6. Lainnya </td>
			<td colspan=18>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">13.&nbsp;&nbsp;Tempat Kematian </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tempat_kematian[$i])): ?>
						<?= $tempat_kematian[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="10">14.&nbsp;&nbsp;Yang menerangkan </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($yang_menerangkan[$i])): ?>
						<?= $yang_menerangkan[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=8>2. Tenaga Kesehatan </td>
			<td colspan=6>3. Kepolisian </td>
			<td colspan=5>4. Lainnya </td>
			<td colspan=5>&nbsp;</td>
		</tr>
		<tr><td colspan=48 class="bawah"></td></tr>
		<!-- AYAH -->
		<tr>
			<td colspan=48><strong>AYAH</strong></td>
		</tr>
		<tr>
			<td colspan="10">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nik_ayah[$i])): ?>
						<?= $nik_ayah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_ayah[$i])): ?>
						<?= $nama_ayah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3.&nbsp;&nbsp;&nbsp;Tanggal Lahir </td>
			<td>:</td>
			<?php if (!empty($tgl_lahir_ayah)):
				$date = date($tgl_lahir_ayah);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
			else:
				unset($tgl); unset($bln); unset($thn);
			endif;
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		 <td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($umur_ayah[$j])): ?>
						<?= $umur_ayah[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan <?= $pekerjaanid_ayah; ?></td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pekerjaanid_ayah[$j])): ?>
						<?= $pekerjaanid_ayah[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $pekerjaan_ayah; ?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $blok_ayah?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rt_ayah[$i])): ?>
						<?= $rt_ayah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rw_ayah[$i])): ?>
						<?= $rw_ayah[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $desa_ayah;?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $kec_ayah;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $kab_ayah;?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $provinsi_ayah;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
<!-- AKHIR AYAH -->
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
<!-- AWAL IBU -->
		<tr>
			<td colspan=48><strong>IBU</strong></td>
		</tr>
		<tr>
			<td colspan="10">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nik_ibu[$i])): ?>
						<?= $nik_ibu[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_ibu[$i])): ?>
						<?= $nama_ibu[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3.&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir </td>
			<td>:</td>
			<?php if (!empty($tgl_lahir_ibu)) {
					$date = date($tgl_lahir_ibu);
					$date_arr = explode("-", $date);
					$tgl = $date_arr[0];
					$bln = $date_arr[1];
					$thn = $date_arr[2];
				}
				else
				{ unset($tgl); unset($bln); unset($thn); }
			?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($umur_ibu[$j])): ?>
						<?= $umur_ibu[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pekerjaanid_ibu[$j])): ?>
						<?= $pekerjaanid_ibu[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $pekerjaan_ibu; ?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $blok_ibu; ?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rt_ibu[$i])): ?>
						<?= $rt_ibu[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rw_ibu[$i])): ?>
						<?= $rw_ibu[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $desa_ibu;?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $kec_ibu;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $kab_ibu;?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $provinsi_ibu;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
<!-- AKHIR IBU -->
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
<!-- AWAL PELAPOR -->
		<tr>
			<td colspan=48><strong>PELAPOR</strong></td>
		</tr>
		<tr>
			<td colspan="10">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['nik'][$i])): ?>
						<?= $pemohon['nik'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['nama'][$i])): ?>
						<?= $pemohon['nama'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3.&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir / Umur </td>
			<td>:</td>
				<?php 
					$date = date($tgl_lahir_pelapor);
					$date_arr = explode("-", $date);
					$tgl = $date_arr[0];
					$bln = $date_arr[1];
					$thn = $date_arr[2];
				?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($umur_pelapor[$j])): ?>
						<?= $umur_pelapor[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4.&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_pelapor;?>
				</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pekerjaanid_pelapor[$j])): ?>
						<?= $pekerjaanid_pelapor[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $pekerjaan_pelapor; ?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $pemohon['blok']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['rt'][$i])): ?>
						<?= $pemohon['rt'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['rw'][$i])): ?>
						<?= $pemohon['rw'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $desa_pelapor;?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $kec_pelapor;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $kab_pelapor;?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $provinsi_pelapor;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
<!-- AKHIR PELAPOR -->
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
<!-- AWAL SAKSI 1 -->
		<tr>
			<td colspan=48><strong>SAKSI 1 </strong></td>
		</tr>
		<tr>
			<td colspan="10">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nik_saksi1[$i])): ?>
						<?= $nik_saksi1[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_saksi1[$i])): ?>
						<?= $nama_saksi1[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3.&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir / Umur </td>
			<td>:</td>
				<?php
					$date = date($tgl_lahir_saksi1);
					$date_arr = explode("-", $date);
					$tgl = $date_arr[0];
					$bln = $date_arr[1];
					$thn = $date_arr[2];
				?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($umur_saksi1[$j])): ?>
						<?= $umur_saksi1[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4.&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_saksi1;?>
				</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pekerjaanid_saksi1[$j])): ?>
						<?= $pekerjaanid_saksi1[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $pekerjaan_saksi1?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $blok_saksi1; ?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rt_saksi1[$i])): ?>
						<?= $rt_saksi1[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rw_saksi1[$i])): ?>
						<?= $rw_saksi1[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $desa_saksi1;?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $kec_saksi1;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $kab_saksi1;?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $provinsi_saksi1;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
<!-- AKHIR SAKSI 1 -->
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td class="bawah">&nbsp;</td>
			<?php endfor; ?>
		</tr>
<!-- AWAL SAKSI 2 -->
		<tr>
			<td colspan=48><strong>SAKSI 2 </strong></td>
		</tr>
		<tr>
			<td colspan="10">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nik_saksi2[$i])): ?>
						<?= $nik_saksi2[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_sasksi2[$i])): ?>
						<?= $nama_sasksi2[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3.&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir / Umur </td>
			<td>:</td>
				<?php $date = date($tgl_lahir_saksi2);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
				?>
			<td colspan="4">Tanggal :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bulan : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Tahun : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($umur_saksi2[$j])): ?>
						<?= $umur_saksi2[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4.&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_saksi2;?>
				</td>
			<td colspan=5>1. Laki-laki </td>
			<td colspan=7>2. Perempuan </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pekerjaanid_saksi2[$j])): ?>
						<?= $pekerjaanid_saksi2[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $pekerjaan_saksi2; ?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $blok_saksi2; ?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rt_saksi2[$i])): ?>
						<?= $rt_saksi2[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($rw_saksi2[$i])): ?>
						<?= $rw_saksi2[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $desa_saksi2;?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $kec_saksi2;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $kab_saksi2;?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $provinsi_saksi2;?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
<!-- AKHIR SAKSI 2 -->
	</table>
	<table id="ttd" class="disdukcapil" style="margin-top: 5px; margin-bottom: 0px; padding: 0px; border: 0px; border-collapse: collapse;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="33">&nbsp;</td>
			<td colspan="13" style="text-align: center;">
				<?= ucwords(strtolower($setting['nama_desa']));?>, <?= tgl_default(date('Y m d',time()));?>
			</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;">Mengetahui</td>
			<td colspan="15">&nbsp;</td>
			<td colspan="10" style="text-align: center;">Pemohon</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;">Kepala Desa <?= ucwords(strtolower($setting['nama_desa'])); ?></td>
			<td colspan="15">&nbsp;</td>
			<td colspan="10" style="text-align: center;">&nbsp;</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;"><strong>(&nbsp;<?= $setting['nama_kades']; ?>&nbsp;)</strong></td>
			<td colspan="13">&nbsp;</td>
			<td colspan="14" style="text-align: center;"><strong>(&nbsp;<?= $pemohon['nama']; ?>&nbsp;)</strong></td>
			<td colspan="1">&nbsp;</td>
		</tr>
	</table>
</page>

<form id="formSubmit">
	<input type="hidden" name="param" value="cetak">

	<input type="hidden" name="tgl_surat" value="<?= date("Y-m-d"); ?>">
	<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">
	<input type="hidden" name="no_skkem" value="<?= $no_skkem; ?>">

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
		let url = `${base_url}surat/reviewSKKEM`;
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


<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/833245c2e4.js"></script>
<script src="<?= base_url(); ?>public/assets/js/script/global_script.js?upt=<?= date('Y-m-d H:i:s'); ?>"></script>
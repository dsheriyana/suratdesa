<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">
table.disdukcapil
{
	width: 100%;
	border: solid 1px #000000;
	/*border-collapse: collapse;*/
}
table.disdukcapil td
{
	padding: 1px 1px 1px 3px;
	margin: 0px;
}
table.disdukcapil td.padat
{
	padding: 0px;
	margin: 0px;
}
table.disdukcapil td.anggota
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: dashed 1px #000000;
	border-bottom: dashed 1px #000000;
}
table.disdukcapil td.judul
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: double 1px #000000;
	border-bottom: double 1px #000000;
}
table.disdukcapil td.bawah {border-bottom: solid 1px #000000;}
table.disdukcapil td.atas {border-top: solid 1px #000000;}
table.disdukcapil td.tengah_blank
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
}
table.disdukcapil td.pinggir_kiri {border-left: solid 1px #000000;}
table.disdukcapil td.pinggir_kanan {border-right: solid 1px #000000;}
table.disdukcapil td.kotak {border: solid 1px #000000;}
table.disdukcapil td.abu {background-color: lightgrey;}
table.disdukcapil td.kode {background-color: lightgrey;}
table.disdukcapil td.kode div
{
	margin: 0px 15px 0px 15px;
	border: solid 1px black;
	background-color: white;
	text-align: center;
}
table.disdukcapil td.pakai-padding
{
	padding-left: 20px;
	padding-right: 2px;
}
table.disdukcapil td.kiri { text-align: left; }
table.disdukcapil td.kanan { text-align: right; }
table.disdukcapil td.tengah { text-align: center; }

table#kop
{
	margin-top: -5px;
	margin-bottom: 0px;
	padding: 0px;
	border: 0px;
	border-collapse: collapse;
}
table#kop td {padding: 0px; margin: 0px;}
table#kop tr {padding: 0px; margin: 0px;}
table#kode
{
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

<page orientation="portrait" format="210x330" style="font-size: 7pt">
	<table id="kode" align="right">
		<tr><td><strong>Kode . F-2.01</strong></td></tr>
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
			<td colspan="9">UPTD/Instansi Pelaksana</td>
		</tr>
		<tr>
			<td colspan="10">Kecamatan</td>
			<td>: </td>
			<td colspan="7"><?= $setting['nama_kecamatan'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">Lembar 2</td>
			<td>: </td>
			<td colspan="9">Untuk yang bersangkutan</td>
		</tr>
		<tr>
			<td colspan="10">Kabupaten/Kota</td>
			<td>:</td>
			<td colspan="7">MAJALENGKA</td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">Lembar 3</td>
			<td>: </td>
			<td colspan="9">Desa/Kelurahan</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td style="border-bottom: 1px solid black;">&nbsp;</td>
			<?php endfor; ?>
			<td colspan="14">&nbsp;</td>
			<td colspan="4">Lembar 4</td>
			<td>: </td>
			<td colspan="9">Kecamatan</td>
		</tr>
		<tr>
			<td colspan="10">Kode Wilayah</td>
			<td style="border-right: 1px solid black;">:</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="28">&nbsp;</td>
		</tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
	<p style="text-align: center; margin: 0px; padding: 0px;">
		<strong style="font-size: 9pt;">SURAT KETERANGAN KELAHIRAN<br>(WARGA NEGARA INDONESIA)</strong>
	</p>
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
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
		<tr>
			<td colspan=48><strong>BAYI / ANAK </strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_bayi[$i])): ?>
						<?= $nama_bayi[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nik_bayi[$i])): ?>
						<?= $nik_bayi[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_bayi;?>
				</td>
			<td colspan=5>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>4. &nbsp;&nbsp;Tempat Dilahirkan </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tempat_dilahirkan[$i])): ?>
						<?= $tempat_dilahirkan[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. RS/SB</td>
			 <td colspan=6>2. Puskesmas </td>
			<td colspan=6>3. Polindes</td>
			<td colspan=5>4. Rumah </td>
			<td colspan=7>5. Lainnya &nbsp; </td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Tempat Kelahiran </td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $tempat_kelahiran; ?></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Hari dan Tanggal Lahir </td>
			<td>:</td>
			<td colspan="3">Hari : </td>
			<td colspan=4 class="kotak"><?= $hari;?></td>
				<?php
					$tgl = date('dd',strtotime($tgl_lahir));
					$bln = date('mm',strtotime($tgl_lahir));
					$thn = date('Y',strtotime($tgl_lahir));
					?>
			<td colspan="4" class="kanan">Tgl : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
			<td colspan="10">7. &nbsp;&nbsp;Pukul </td>
			<td>:</td>
			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($waktu_lahir[$i])): ?>
						<?= $waktu_lahir[$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>8. &nbsp;&nbsp;Jenis Kelahiran </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($jenis_kelahiran)): ?>
						<?= $jenis_kelahiran;?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Tunggal</td>
			<td colspan=6>2. Kembar 2 </td>
			<td colspan=6>3. Kembar 3 </td>
			<td colspan=5>4. Kembar 4 </td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">9. &nbsp;&nbsp;Kelahiran Anak Ke </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($kelahiran_anak_ke)): ?>
						<?= $kelahiran_anak_ke;?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Satu </td>
			<td colspan=6>2. Dua </td>
			<td colspan=6>3. Tiga </td>
			<td colspan=5>4. Empat </td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">10. Penolong Kelahiran </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($penolong_kelahiran)): ?>
						<?= $penolong_kelahiran;?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=6>2. Bidan/Perawat </td>
			<td colspan=6>3. Dukun </td>
			<td colspan=5>4. Lainnya </td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">11. Berat Bayi</td>
			<td>:</td>
			<td colspan="3" class="kotak"><?= $berat_bayi; ?></td>
			<td> Kg</td>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">12. Panjang Bayi</td>
			<td>:</td>
			<td colspan="2" class="kotak"><?= $panjang_bayi; ?></td>
			<td> cm</td>
			<td colspan="22">&nbsp;</td>
		</tr>
		<tr><td colspan=48 class="bawah"></td></tr>
		<tr>
			<td colspan=48><strong>IBU</strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
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
			<td colspan="10">2. &nbsp;&nbsp;Nama Lengkap</td>
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
			<td colspan="10">3. &nbsp;&nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
			<?php 
				$date = date($tgl_lahir_ibu);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
			?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
					<?php if (isset($umur_ibu[$j])): ?>
						<?= $umur_ibu[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
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
			<td colspan="21" class="kotak"><?= $pekerjaan_ibu?></td>
			<td colspan="2">&nbsp;</td></tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $alamat_ibu; ?></td>
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
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Kewarganegaraan </td>
			<td>:</td>
			<td class="kotak padat tengah"><?= $wn_ibu ? $wn_ibu : '1';?></td>
			<td colspan=4>1. WNI </td>
			<td colspan=6>2. WNA </td>
			<td colspan=6>&nbsp;</td>
		</tr>
		<tr>
		<td colspan="10">7. &nbsp;&nbsp;Kebangsaan </td>
			<td>:</td>
			<td colspan="9" class="kotak">INDONESIA</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">8. &nbsp;&nbsp;Tgl Pencatatan Perkawinan</td>
			<td>:</td>
			<?php if (!empty($tanggalperkawinan_ibu)):
				$date = date($tanggalperkawinan_ibu);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
			else:
				$tgl = '-'; $bln = '-'; $thn = '-';
			endif;
			?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>AYAH</strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
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
			<td colspan="10">2. &nbsp;&nbsp;Nama Lengkap</td>
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
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
			
				<?php 
					$date = date($tgl_lahir_ayah);
					$date_arr = explode("-", $date);
					$tgl = $date_arr[0];
					$bln = $date_arr[1];
					$thn = $date_arr[2];
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
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
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $alamat_ayah?></td>
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
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Kewarganegaraan </td>
			<td>:</td>
			<td class="kotak padat tengah"><?= $wn_ayah ? $wn_ayah : '1';?></td>
			<td colspan=4>1. WNI </td>
			<td colspan=6>2. WNA </td>
			<td colspan=6>&nbsp;</td>
		</tr>
		<tr>
		<td colspan="10">7. &nbsp;&nbsp;Kebangsaan </td>
			<td>:</td>
			<td colspan="9" class="kotak">INDONESIA</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>PELAPOR</strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
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
			<td colspan="10">2. &nbsp;&nbsp;Nama Lengkap</td>
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
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				
			<?php 
					$date = date($tgl_lahir_pelapor);
					$date_arr = explode("-", $date);
					$tgl = $date_arr[0];
					$bln = $date_arr[1];
					$thn = $date_arr[2];
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
							&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
			<td colspan="10">4. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_pelapor;?>
				</td>
			<td colspan=5>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
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
			<td colspan="21" class="kotak"><?= $pemohon['pekerjaan']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $pemohon['blok']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['rt'][$i])): ?>
						<?= $pemohon['rt'][$i];?>
						<?php else: ?> &nbsp;
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
			<td colspan="11">&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $setting['nama_desa'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $setting['nama_kecamatan'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak">MAJALENGKA</td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak">JAWA BARAT</td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>SAKSI 1 </strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
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
			<td colspan="10">2. &nbsp;&nbsp;Nama Lengkap</td>
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
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php 
				$date = date($tgl_lahir_saksi1);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
			<td colspan="10">4. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_saksi1;?>
				</td>
			<td colspan=5>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
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
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $alamat_saksi1?></td>
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
			<td colspan="12" class="kotak"><?= $setting['nama_desa'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $setting['nama_kecamatan'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak">MAJALENGKA</td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak">JAWA BARAT</td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>SAKSI 2 </strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
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
			<td colspan="10">2. &nbsp;&nbsp;Nama </td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($nama_saksi2[$i])): ?>
						<?= $nama_saksi2[$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php
				$date = date($tgl_lahir_saksi2);
				$date_arr = explode("-", $date);
				$tgl = $date_arr[0];
				$bln = $date_arr[1];
				$thn = $date_arr[2];
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
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
			<td colspan="10">4. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $jk_saksi2;?>
				</td>
			<td colspan=5>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
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
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $alamat_saksi2; ?></td>
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
			<td colspan="12" class="kotak"><?= $setting['nama_desa'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $setting['nama_kecamatan'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak">MAJALENGKA</td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak">JAWA BARAT</td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr style="line-height: 1px; height: 1px; margin-bottom: -10px;">
			<?php for ($i=0; $i<48; $i++): ?>
				<td style="line-height: 1px; height: 1px; padding: -10px;"></td>
			<?php endfor; ?>
		</tr>
	</table>
	<br>
	<table id="ttd" class="disdukcapil" style="margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; border-collapse: collapse;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="33">&nbsp;</td>
			<td colspan="15" style="text-align: center">
				Majalengka, <?= tgl_default(date('Y m d',time()));?>
			</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Mengetahui,</td>
			<td colspan="15" style="text-align: center;"></td>
			<td colspan="15" style="text-align: center;"></td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Kepala Desa <?= ucwords(strtolower($setting['nama_desa'])); ?></td>
			<td colspan="15" style="text-align: center;"></td>
			<td colspan="15" style="text-align: center;">Pelapor</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= $setting['nama_kades']; ?>&nbsp;)</strong></td>
			<td colspan="15" style="text-align: center;"><strong>&nbsp;&nbsp;</strong></td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= $pemohon['nama']; ?>&nbsp;)</strong></td>
		</tr>
		
	</table>
</page>


<form id="formSubmit">
	<input type="hidden" name="param" value="cetak">

	<input type="hidden" name="nama_bayi" value="nama_bayi">
		<input type="hidden" name="nik_bayi" value="nik_bayi">
		<input type="hidden" name="jk_bayi" value="jk_bayi">
		<input type="hidden" name="tempat_dilahirkan" value="tempat_dilahirkan">
		<input type="hidden" name="tempat_kelahiran" value="tempat_kelahiran">
		<input type="hidden" name="hari" value="hari">
		<input type="hidden" name="tgl_lahir" value="tgl_lahir">
		<input type="hidden" name="waktu_lahir" value="waktu_lahir">
		<input type="hidden" name="jenis_kelahiran" value="jenis_kelahiran">
		<input type="hidden" name="kelahiran_anak_ke" value="kelahiran_anak_ke">
		<input type="hidden" name="penolong_kelahiran"	value="penolong_kelahiran">
		<input type="hidden" name="berat_bayi" value="berat_bayi">
		<input type="hidden" name="panjang_bayi" value="panjang_bayi">

		<input type="hidden" name="nik_ibu" value="nik_ibu">
		<input type="hidden" name="nama_ibu" value="nama_ibu">
		<input type="hidden" name="tgl_lahir_ibu" value="tgl_lahir_ibu">
		<input type="hidden" name="umur_ibu" value="umur_ibu">
		<input type="hidden" name="pekerjaanid_ibu" value="pekerjaanid_ibu">
		<input type="hidden" name="pekerjaan_ibu" value="pekerjaan_ibu">
		<input type="hidden" name="alamat_ibu" value="alamat_ibu">
		<input type="hidden" name="rt_ibu" value="rt_ibu">
		<input type="hidden" name="rw_ibu" value="rw_ibu">
		<input type="hidden" name="desa_ibu" value="desa_ibu">
		<input type="hidden" name="kec_ibu" value="kec_ibu">
		<input type="hidden" name="kab_ibu" value="kab_ibu">
		<input type="hidden" name="provinsi_ibu" value="provinsi_ibu">
		<input type="hidden" name="wn_ibu" value="wn_ibu">
		<input type="hidden" name="tanggalperkawinan_ibu" value="tanggalperkawinan_ibu">

		<input type="hidden" name="nik_ayah" value="nik_ayah">
		<input type="hidden" name="nama_ayah" value="nama_ayah">
		<input type="hidden" name="tgl_lahir_ayah" 	value="tgl_lahir_ayah">
		<input type="hidden" name="umur_ayah" value="umur_ayah">
		<input type="hidden" name="pekerjaanid_ayah" value="pekerjaanid_ayah">
		<input type="hidden" name="pekerjaan_ayah" value="pekerjaan_ayah">
		<input type="hidden" name="alamat_ayah" value="alamat_ayah">
		<input type="hidden" name="rt_ayah" value="rt_ayah">
		<input type="hidden" name="rw_ayah" value="rw_ayah">
		<input type="hidden" name="desa_ayah" value="desa_ayah">
		<input type="hidden" name="kec_ayah" value="kec_ayah">
		<input type="hidden" name="kab_ayah" value="kab_ayah">
		<input type="hidden" name="provinsi_ayah" value="provinsi_ayah">
		<input type="hidden" name="wn_ayah" value="wn_ayah">
		
		
		<input type="hidden" name="kk" 				value="kk">
		<input type="hidden" name="kepala_keluarga" 				value="kepala_keluarga">
		<input type="hidden" name="tgl_lahir_pelapor" 	value="tgl_lahir_pelapor">
		<input type="hidden" name="umur_pelapor" 		value="umur_pelapor">

	<input type="hidden" name="tgl_surat" value="<?= date("Y-m-d"); ?>">
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
		let url = `${base_url}surat/reviewSKKEL`;
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
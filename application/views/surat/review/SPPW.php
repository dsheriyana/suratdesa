<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>

<style type="text/css">
	table.disdukcapil {
		font-size: 10pt;
		width: 100%;
		/*border-collapse: collapse;*/
	}

	table.disdukcapil td {
		padding: 1px 1px 1px 3px;
	}

	table.disdukcapil td.satu {
		width: 10px;
		text-align: center;
	}

	table.disdukcapil td.padat {
		padding: 0px;
		margin: 0px;
		font-size: 9.5pt;
	}

	table.disdukcapil td.kotak {
		border: solid 1px #000000;
	}

	table.disdukcapil td.kanan {
		text-align: right;
	}

	table.disdukcapil td.tengah {
		text-align: center;
	}

	table.pengikut {
		font-size: 10pt;
		margin-top: 25px;
		border-collapse: collapse;
		border: solid 1px black;
		width: 100%;
	}

	table.pengikut td,
	th {
		border: solid 1px black;
		padding: 1px 1px 1px 3px;
	}

	table.pengikut th {
		text-align: center;
		vertical-align: middle;
	}

	table.pengikut td.tengah {
		text-align: center;
	}

	table.ttd {
		margin-top: 20px;
		width: 100%;
	}

	table.ttd td {
		text-align: center;
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
			body{
				zoom: 99%;
			}
			
		}
</style>

<script>
		let base_url = '<?= base_url(); ?>';
	</script>

<page orientation="portrait" format="210x330" style="font-size: 10pt">
	<table align="right" style="padding: 5px 20px; border: solid 1px black;">
		<tr>
			<td><strong>F.1-34</strong></td>
		</tr>
	</table>
	<table style="margin-top: 10px;" class="disdukcapil">
		<col style="width: 26%;">
		<col span="6" style="width: 4%;">
		<col style="width: 50%;">
		<tr>
			<td>PROVINSI</td>
			<td>:</td>
			<?php for ($i = 0; $i < 2; $i++) : ?>
				<td class="kotak tengah">
					<?php if (isset($setting['kode_provinsi'][$i])) : ?>
						<?= $setting['kode_provinsi'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2>&nbsp;</td>
			<td class="kanan">*)</td>
			<td class="kotak"><?= $setting['nama_provinsi']; ?></td>
		</tr>
		<tr>
			<td>KABUPATEN/KOTA</td>
			<td>:</td>
			<?php for ($i = 0; $i < 2; $i++) : ?>
				<td class="kotak tengah">
					<?php if (isset($setting['kode_kabupaten'][$i])) : ?>
						<?= $setting['kode_kabupaten'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2>&nbsp;</td>
			<td class="kanan">*)</td>
			<td class="kotak"><?= $setting['nama_kabupaten']; ?></td>
		</tr>
		<tr>
			<td>KECAMATAN</td>
			<td>:</td>
			<?php for ($i = 0; $i < 2; $i++) : ?>
				<td class="kotak tengah">
					<?php if (isset($setting['kode_kecamatan'][$i])) : ?>
						<?= $setting['kode_kecamatan'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2>&nbsp;</td>
			<td class="kanan">*)</td>
			<td class="kotak"><?= $setting['nama_kecamatan']; ?></td>
		</tr>
		<tr>
			<td>DESA/KELURAHAN</td>
			<td>:</td>
			<?php for ($i = 0; $i < 4; $i++) : ?>
				<td class="kotak tengah">
					<?php if (isset($setting['kode_desa'][$i])) : ?>
						<?= $setting['kode_desa'][$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td class="kanan">*)</td>
			<td class="kotak"><?= $setting['nama_desa']; ?></td>
		</tr>
		<tr>
			<td>DUSUN/DUKUH/KAMPUNG</td>
			<td>:</td>
			<td colspan=6 class="kotak"><?= $dusun; ?></td>
		</tr>
	</table>
	<p style="text-align: center;">
		<strong style="font-size: 12pt;">FORMULIR PERMOHONAN PINDAH WNI</strong><br>
		<b>Antar Kabupaten / Kota atau Antar Provinsi<br></b>
		<b>No. 474.1/<?= $no_sppw; ?></b>
	</p>

	<table class="disdukcapil">
		<col style="width: 3%;">
		<col style="width: 24.4%;">
		<col span="22" style="width: 3.3%">
		<tr>
			<td colspan=2><strong>DATA DAERAH ASAL</strong></td>
			<td colspan=22>&nbsp;</td>
		</tr>
		<tr>
			<td>1.</td>
			<td>Nomor Kartu Keluarga</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($kk[$i])) : ?>
						<?= $kk[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=6>&nbsp;</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Nama Kepala Keluarga</td>
			<td colspan=22 class="kotak"><?= $kepala_kk; ?></td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Alamat</td>
			<td colspan=12 class="kotak"><?= $alamat; ?></td>
			<td colspan=2 style="text-align: center;">RT</td>
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($rt[$i])) : ?>
						<?= $rt[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2 style="text-align: center;">RW</td>
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($rw[$i])) : ?>
						<?= $rw[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan=2>&nbsp;</td>
			<td colspan=7>Dusun/Dukuh/Kampung</td>
			<td colspan=15 class="kotak"><?= $dusun; ?></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td>a. Desa/Kelurahan</td>
			<td colspan=8 class="kotak"><?= $desa; ?></td>
			<td colspan=4>c. Kab/Kota</td>
			<td colspan=10 class="kotak"><?= $kab; ?></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td>b. Kecamatan</td>
			<td colspan=8 class="kotak"><?= $kec; ?></td>
			<td colspan=4>d. Provinsi</td>
			<td colspan=10 class="kotak"><?= $provinsi; ?></td>
		</tr>

		<tr>
			<td colspan=2>&nbsp;</td>
			<td colspan=3>Kode Pos</td>
			<?php for ($i = 0; $i < 5; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($kode_pos[$i])) : ?>
						<?= $kode_pos[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2 style="padding-left: -2px;">Telepon</td>
			<?php for ($i = 0; $i < 12; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($telepon[$i])) : ?>
						<?= trim($telepon[$i]); ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>4.</td>
			<td>NIK Pemohon</td>
			<?php for ($i = 0; $i < 16; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($nik[$i])) : ?>
						<?= $nik[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=6>&nbsp;</td>
		</tr>

		<tr>
			<td>5.</td>
			<td>Nama Lengkap</td>
			<td colspan=22 class="kotak"><?= $nama; ?></td>
		</tr>
		<tr>
			<td colspan=24>&nbsp;</td>
		</tr>
		<tr>
			<td colspan=2><strong>DATA KEPINDAHAN</strong></td>
			<td colspan=22>&nbsp;</td>
		</tr>

		<tr>
			<td rowspan="2">1.</td>
			<td rowspan="2">Alasan Pindah</td>
			<td rowspan="2" class="kotak satu"><?= $alasan_pindah_id; ?></td>
			<td rowspan="2">&nbsp;</td>
			<td colspan=4 class="padat">1. Pekerjaan</td>
			<td colspan=4 class="padat">3. Keamanan</td>
			<td colspan=4 class="padat">5. Perumahan</td>
			<td colspan=8 class="padat">7. Lainnya (sebutkan)</td>
		</tr>

		<tr>
			<td colspan=4 class="padat">2. Pendidikan</td>
			<td colspan=4 class="padat">4. Kesehatan</td>
			<td colspan=4 class="padat">6. Keluarga</td>
			<td colspan=8 class="padat">
				<?php if ($sebut_alasan) : ?>
					<span style='text-decoration: none; border-bottom: 1px dotted black;'><?= $sebut_alasan; ?></span>
				<?php else : ?>
					..............................
				<?php endif; ?>
			</td>
		</tr>

		<tr>
			<td>2.</td>
			<td>Alamat Tujuan Pindah</td>
			<td colspan=12 class="kotak"><?= $alamat_tujuan; ?></td>
			<td colspan=2 style="text-align: center;">RT</td>
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($rt_tujuan[$i])) : ?>
						<?= $rt_tujuan[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2 style="text-align: center;">RW</td>
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($rw_tujuan[$i])) : ?>
						<?= $rw_tujuan[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan=2>&nbsp;</td>
			<td colspan=7>Dusun/Dukuh/Kampung</td>
			<td colspan=15 class="kotak"><?= $dusun_tujuan; ?></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td>a. Desa/Kelurahan</td>
			<td colspan=8 class="kotak"><?= $desa_tujuan; ?></td>
			<td colspan=4>c. Kab/Kota</td>
			<td colspan=10 class="kotak"><?= $kab_tujuan; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>b. Kecamatan</td>
			<td colspan=8 class="kotak"><?= $kec_tujuan; ?></td>
			<td colspan=4>d. Provinsi</td>
			<td colspan=10 class="kotak"><?= $provinsi_tujuan; ?></td>
		</tr>
		<tr>
			<td colspan=2>&nbsp;</td>
			<td colspan=3>Kode Pos</td>
			<?php for ($i = 0; $i < 5; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($kode_pos_tujuan[$i])) : ?>
						<?= $kode_pos_tujuan[$i]; ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=2 style="padding-left: -2px;">Telepon</td>
			<?php for ($i = 0; $i < 12; $i++) : ?>
				<td class="kotak satu">
					<?php if (isset($telepon_tujuan[$i])) : ?>
						<?= trim($telepon_tujuan[$i]); ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td rowspan="2">3.</td>
			<td rowspan="2">Jenis Kepindahan</td>
			<td rowspan="2" class="kotak satu"><?= trim($jenis_kepindahan_id, "'"); ?></td>
			<td colspan=11 class="padat">1. Kep. Keluarga</td>
			<td colspan=10 class="padat">3. Kep. Keluarga dan Sbg. Angg. Keluarga</td>
		</tr>
		<tr>
			<td colspan=11 class="padat">2. Kep. Keluarga dan Seluruh Angg. Keluarga</td>
			<td colspan=10 class="padat">4. Angg. Keluarga</td>
		</tr>

		<tr>
			<td>4.</td>
			<td>Status KK Bagi Yang Tidak Pindah</td>
			<td class="kotak satu"><?= ($status_kk_tidak_pindah_id) ? $status_kk_tidak_pindah_id : "-"; ?></td>
			<td colspan=5 class="padat">1. Numpang KK</td>
			<td colspan=6 class="padat">2. Membuat KK Baru</td>
			<td colspan=7 class="padat">3. Nomor KK Tetap</td>
		</tr>

		<tr>
			<td>5.</td>
			<td>Status KK Bagi Yang Pindah</td>
			<td class="kotak satu"><?= $status_kk_pindah_id; ?></td>
			<td colspan=5 class="padat">1. Numpang KK</td>
			<td colspan=6 class="padat">2. Membuat KK Baru</td>
			<td colspan=7 class="padat">3. Nomor KK Tetap</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Keluarga Yang Pindah</td>
			<td colspan=20>&nbsp;</td>
		</tr>
	</table>

	<table class="pengikut">
		<tr>
			<th style="width: 5%">NO.</th>
			<th style="width: 35%" colspan=16>NIK</th>
			<th style="width: 33%">NAMA</th>
			<th style="width: 17%">MASA BERLAKU KTP S/D</th>
			<th style="width: 10%" colspan=2>SHDK</th>
		</tr>

		<?php
		for ($i = 0; $i < MAX_PINDAH; $i++) :
			$nomor = $i + 1;
			if ($i < count($jumlah_ikut)) :
				$id = trim($jumlah_ikut[$i], "'");
				$penduduk = $this->model_global->get_data('t_penduduk', ['nik' => $id])->row_array();?>
				<tr>
					<td class="tengah"><?= $nomor; ?></td>
					
					<?php for ($j = 0; $j < 16; $j++) : ?>
						
						<td class="tengah">
							<?php if (isset($penduduk['nik'][$j])) : ?>
								<?= $penduduk['nik'][$j]; ?>
							<?php else : ?>
								&nbsp;
							<?php endif; ?>
						</td>
					<?php endfor; ?>
					<td><?= $penduduk['nama']; ?></td>
					<td>
						<?php if ($ktp_berlaku[$i]) : ?>
							<?= $ktp_berlaku[$i]; ?>
						<?php else : ?>
							&nbsp;
						<?php endif; ?>
					</td>
					<?php $shdk = str_pad($shdk, 2, "0", STR_PAD_LEFT); ?>
					<?php for ($j = 0; $j < 2; $j++) : ?>
						<td class="tengah">
							
						</td>
					<?php endfor; ?>
				</tr>

			<?php else : ?>
				<tr>
					<?php for ($k = 0; $k < 21; $k++) : ?>
						<td>&nbsp;</td>
					<?php endfor; ?>
				</tr>
			<?php endif; ?>
		<?php endfor; ?>

	</table>

	<table class="ttd">
		<col style="width:35%">
		<col style="width:30%">
		<col style="width:35%">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><?= ucwords(strtolower($setting['nama_desa'])); ?>, <?= tgl_default(date("Y m d")); ?></td>
		</tr>
		<tr>
			<td>Mengetahui,</td>
			<td>Mengetahui,</td>
			<td>Pemohon,</td>
		</tr>
		<tr>
			<td>Camat <?= ucwords(strtolower($setting['nama_kecamatan'])); ?></td>
			<td>Kepala Desa <?= ucwords(strtolower($setting['nama_desa'])); ?></td>
			<td></td>
		</tr>
		<tr style="font-size: 10mm; line-height: normal;">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><b><?= $setting['nama_camat']; ?></b></td>
			<td><b><?= $setting['nama_kades'] ?></b></td>
			<td><b><?= $nama; ?></b></td>
		</tr>
		<tr>
			<td> <?= $setting['nip_camat']; ?></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<p>
		<strong>Keterangan:</strong><br>
		*) Diisi Oleh Petugas
	</p>

</page>


<form id="formSubmit">
	<?php 
	
		$penduduk = $this->model_global->get_data('t_penduduk', ['nik' => $id])->row_array();?>
		<input type="hidden" name="jumlah_ikut[]" value="<?= $penduduk['nik']; ?>">
	<input type="hidden" name="param" value="cetak">
	<input type="hidden" name="kepala_kk" value="<?= $kepala_kk; ?>">
		<input type="hidden" name="kk" value="<?= $kk; ?>">
		<input type="hidden" name="alamat" value="<?= $alamat; ?>">
		<input type="hidden" name="rt" value="<?= $rt; ?>">
		<input type="hidden" name="rw" value="<?= $rw; ?>">
		<input type="hidden" name="dusun" value="<?= $dusun; ?>">
		<input type="hidden" name="desa" value="<?= $desa; ?>">
		<input type="hidden" name="kab" value="<?= $kab; ?>">
		<input type="hidden" name="kec" value="<?= $kec; ?>">
		<input type="hidden" name="provinsi" value="<?= $provinsi; ?>">
		<input type="hidden" name="kode_pos" value="<?= $kode_pos; ?>">
		<input type="hidden" name="telepon" value="<?= $telepon; ?>">
		<input type="hidden" name="nik" value="<?= $nik; ?>">
		<input type="hidden" name="nama" value="<?= $nama; ?>">
		<input type="hidden" name="alasan_pindah_id" value="<?= $alasan_pindah_id; ?>">
		<input type="hidden" name="sebut_alasan" value="<?= $sebut_alasan; ?>">

		<input type="hidden" name="alamat_tujuan" value="<?= $alamat_tujuan; ?>">
		<input type="hidden" name="rt_tujuan" value="<?= $rt_tujuan; ?>">
		<input type="hidden" name="rw_tujuan" value="<?= $rw_tujuan; ?>">
		<input type="hidden" name="dusun_tujuan" value="<?= $dusun_tujuan; ?>">
		<input type="hidden" name="desa_tujuan" value="<?= $desa_tujuan; ?>">
		<input type="hidden" name="kec_tujuan" value="<?= $kec_tujuan; ?>">
		<input type="hidden" name="kab_tujuan" value="<?= $kab_tujuan; ?>">
		<input type="hidden" name="provinsi_tujuan" value="<?= $provinsi_tujuan; ?>">
		<input type="hidden" name="kode_pos_tujuan" value="<?= $kode_pos_tujuan; ?>">
		<input type="hidden" name="telepon_tujuan" value="<?= $telepon_tujuan; ?>">
		<input type="hidden" name="jenis_kepindahan_id" value="<?= $jenis_kepindahan_id; ?>">
		<input type="hidden" name="status_kk_tidak_pindah_id" value="<?= $status_kk_tidak_pindah_id; ?>">
		<input type="hidden" name="status_kk_pindah_id" value="<?= $status_kk_pindah_id; ?>">

	<input type="hidden" name="tgl_surat" value="<?= date("Y-m-d"); ?>">
	<input type="hidden" name="jenis_surat" value="<?= $jenis_surat; ?>">
	<input type="hidden" name="no_sppw" value="<?= $no_sppw; ?>">

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
		let url = `${base_url}surat/reviewSPPW`;
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
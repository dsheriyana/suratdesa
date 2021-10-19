<body class="bg-forgot">
	<div class="p-4 d-flex align-items-center">
	<div class="w-100">
		
	<form method="POST" action="reviewSKKEM">
		<div class="row justify-content-center">
			<div class="col-md-5 mt-5">
				<div class="text-center text-white mb-5">
					<h4 class="font-size-18 font-weight-bold">SURAT KETERANGAN KEMATIAN<br></h4>
					<input type="text" name="no_skkem" id="no_skkem" value="474.3/06/404.319.11/2021" class="form-control" required>
				</div>
			</div>
			<div class="col-md-12">
				
				<div class="row">
						<div class="col-12 col-lg-9 mx-auto">
						<div class="card radius-15">
								<div class="card-body">
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nomor Kartu Keluarga</label>
											<div class="col-sm-5">
												<input type="text" maxlength="16" list="data_kk" name="kk" id="kk" placeholder="No. KK" onchange="return autofill_kk();"  class="form-control" required>
											</div>
											<!-- <label class="col-sm-2 col-form-label">Nama Kepala Keluarga</label> -->
											<div class="col-sm-5">
												<input type="text" name="kepala_keluarga" id="kepala_keluarga" placeholder="Nama Kepala Keluarga"  class="form-control" required>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">JENAZAH</h4>
									</div>
									<hr/>
									<div class="form-body">
										<!-- <div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-4">
												<input type="text" class="form-control">
											</div>
											<label class="col-sm-2 col-form-label">First Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control">
											</div>
										</div> -->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama_jenazah" id="nama_jenazah" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK</label>
											<div class="col-sm-10">
												<input type="number" maxlength="16" list="data_penduduk" name="nik_jenazah" id="nik_jenazah" onchange="return autofill();" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-10">
												<select name="jk_jenazah" id="jk_jenazah" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Jenis Kelamin --</option>
													<option value="1">Laki-Laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
											<div class="col-sm-5">
											<input type="text" name="tgl_lahir_jenazah" id="tgl_lahir_jenazah" 	onchange="$('input[name=umur_jenazah]').val(_calculateAge($(this).val()));" placeholder="Tanggal Lahir" class="result form-control" required/>
										
											</div>
											<div class="col-sm-5">
												<input type="number" name="umur_jenazah" id="umur_jenazah" placeholder="Umur" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tempat Lahir</label>
											<div class="col-sm-10">
												<input type="text" name="tmp_lahir_jenazah" id="tmp_lahir_jenazah" placeholder="Kabupaten / Kota" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Agama</label>
											<div class="col-sm-10">
												<select name="agama_jenazah" id="agama_jenazah" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Agama --</option>
													<option value="1">Islam</option>
													<option value="2">Kristen</option>
													<option value="3">Katolik</option>
													<option value="4">Hindu</option>
													<option value="5">Budha</option>
													<option value="6">Lainnya</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pekerjaan</label>
											<div class="col-sm-10">
											<input type="hidden" name="pekerjaanid_jenazah">
											<select class="single-select" name="pekerjaan_jenazah" id="pekerjaan_jenazah" onchange="$('input[name=pekerjaanid_jenazah]').val($(this).find(':selected').data('pekerjaanid'));" required>
												<option selected="" disabled="" value="">-- Pilih Pekerjaan --</option> 
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="01">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="02">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="03">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="04">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="05">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="06">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="07">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="08">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="09">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
											</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="blok_jenazah" name="blok_jenazah" placeholder="Blok" required> 
											</div>
											<div class="col-sm-3">
												<input type="number" name="rt_jenazah" id="rt_jenazah" placeholder="RT"  size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="number" name="rw_jenazah" id="rw_jenazah" size="3" maxlength="3" placeholder="RW" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_jenazah" name="desa_jenazah" value="<?= $setting['nama_desa']; ?>" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_jenazah" id="kec_jenazah" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_jenazah"  value="MAJALENGKA" name="kab_jenazah" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_jenazah" id="provinsi_jenazah" value="JAWA BARAT" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Anak ke</label>
											<div class="col-sm-10">
												<select name="anakke_jenazah" id="anakke_jenazah" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Anak ke --</option>
													<option value="1">Satu</option>
													<option value="2">Dua</option>
													<option value="3">Tiga</option>
													<option value="4">Empat</option>
												</select>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Hari / Tanggal / Jam Kematian</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="hari_kematian" name="hari_kematian" placeholder="Hari Kematian" readonly> 
											<!-- <select name="hari" id="hari" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Hari --</option>
													<option value="SENIN">Senin</option>
													<option value="SELASA">Selasa</option>
													<option value="RABU">Rabu</option>
													<option value="KAMIS">Kamis</option>
													<option value="JUMAT">Jumat</option>
													<option value="SABTU">Sabtu</option>
													<option value="MINGGU">Minggu</option>
												</select> -->
											</div>
											<div class="col-sm-3">
												<input type="text" name="tgl_kematian" id="tgl_kematian" onchange="return data_hari_kematian();" placeholder="Tanggal Kematian" class="result form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="result form-control" type="text" name="waktu_kematian" id="time" placeholder="Jam Kematian" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Sebab Kematian</label>
											<div class="col-sm-10">
												<select name="sebab_kematian" id="sebab_kematian" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Sebab Kematian --</option>
													<option value="1">Sakit Biasa / Tua</option>
													<option value="2">Wabah Penyakit</option>
													<option value="3">Kecelakaan</option>
													<option value="4">Kriminalitas</option>
													<option value="5">Bunuh Diri</option>
													<option value="6">Lainnya</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tempat Kematian</label>
											<div class="col-sm-10">
											<input type="text" name="tempat_kematian" id="tempat_kematian" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Yang menerangkan</label>
											<div class="col-sm-10">
												<select name="yang_menerangkan" id="yang_menerangkan" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Yang Menerangkan --</option>
													<option value="1">Dokter</option>
													<option value="2">Tenaga Kesehatan</option>
													<option value="3">Kepolisian</option>
													<option value="4">Lainnya</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">IBU</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK</label>
											<div class="col-sm-10">
												<input type="number" maxlength="16" list="data_penduduk" name="nik_ibu" id="nik_ibu" onchange="return autofill();" class="form-control" required>
												
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
											<div class="col-sm-5">
											<input type="text" name="tgl_lahir_ibu" id="tgl_lahir_ibu" 	onchange="$('input[name=umur_ibu]').val(_calculateAge($(this).val()));" placeholder="Tanggal Lahir" class="result form-control" required/>
										
											</div>
											<div class="col-sm-5">
												<input type="number" name="umur_ibu" id="umur_ibu" placeholder="Umur" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pekerjaan</label>
											<div class="col-sm-10">
											<input type="hidden" name="pekerjaanid_ibu">
											<select class="single-select" name="pekerjaan_ibu" id="pekerjaan_ibu" onchange="$('input[name=pekerjaanid_ibu]').val($(this).find(':selected').data('pekerjaanid'));" required>
												<option selected="" disabled="" value="">-- Pilih Pekerjaan --</option> 
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="01">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="02">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="03">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="04">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="05">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="06">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="07">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="08">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="09">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
										</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="blok_ibu" name="blok_ibu" placeholder="Blok" required> 
											</div>
											<div class="col-sm-3">
												<input type="number" name="rt_ibu" id="rt_ibu" placeholder="RT"  size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="number" name="rw_ibu" id="rw_ibu" size="3" maxlength="3" placeholder="RW" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_ibu" name="desa_ibu" value="<?= $setting['nama_desa']; ?>" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_ibu" id="kec_ibu" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_ibu"  value="MAJALENGKA" name="kab_ibu" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_ibu" id="provinsi_ibu" value="JAWA BARAT" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 
									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">AYAH</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK</label>
											<div class="col-sm-10">
											<input type="number" maxlength="16" list="data_penduduk" name="nik_ayah" id="nik_ayah" onchange="return autofill();" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama_ayah" id="nama_ayah" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
											<div class="col-sm-5">
											<input type="text" name="tgl_lahir_ayah" id="tgl_lahir_ayah" 	onchange="$('input[name=umur_ayah]').val(_calculateAge($(this).val()));" placeholder="Tanggal Lahir" class="result form-control" required/>
										
											</div>
											<div class="col-sm-5">
												<input type="number" name="umur_ayah" id="umur_ayah" placeholder="Umur" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pekerjaan</label>
											<div class="col-sm-10">
											<input type="hidden" name="pekerjaanid_ayah">
											<select class="single-select" name="pekerjaan_ayah" id="pekerjaan_ayah" onchange="$('input[name=pekerjaanid_ayah]').val($(this).find(':selected').data('pekerjaanid'));" required>
												<option selected="" disabled="" value="">-- Pilih Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="01">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="02">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="03">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="04">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="05">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="06">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="07">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="08">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="09">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
										</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="blok_ayah" name="blok_ayah" placeholder="Blok" required> 
											</div>
											<div class="col-sm-3">
												<input type="number" name="rt_ayah" id="rt_ayah" placeholder="RT"  size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="number" name="rw_ayah" id="rw_ayah" size="3" maxlength="3" placeholder="RW" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_ayah" value="<?= $setting['nama_desa']; ?>" name="desa_ayah" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_ayah" id="kec_ayah" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_ayah" value="MAJALENGKA" name="kab_ayah" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_ayah" id="provinsi_ayah" value="JAWA BARAT" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 
										
									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">PELAPOR</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK</label>
											<div class="col-sm-10">
												<input type="number" maxlength="16" name="nik_pelapor" id="nik_pelapor" value="<?= $pemohon['nik']; ?>" class="form-control" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama_pelapor" id="nama_pelapor" value="<?= $pemohon['nama']; ?>" class="form-control" required readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
											<div class="col-sm-5">
											<input type="text" name="tgl_lahir_pelapor" id="tgl_lahir_pelapor" value="<?= date("d-m-Y", strtotime($pemohon['tgl_lahir'])); ?>" onchange="$('input[name=umur_pelapor]').val(_calculateAge($(this).val()));" class="result form-control" readonly/>
											</div>
											<div class="col-sm-5">
											<?php
												$tanggal =new DateTime($pemohon['tgl_lahir']);
												$today = new DateTime('today');
												$y = $today->diff($tanggal)->y;
												?>
												<input type="number" name="umur_pelapor" id="umur_pelapor" value="<?= $y; ?>" placeholder="Umur" class="form-control" readonly/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-10">
											<input class="form-control" type="text" id="jk_pelapor" value="<?= ($pemohon['jk'] == 'L') ? "Laki-laki" : "Perempuan"; ?>" name="jk_pelapor" placeholder="Pekerjaan" readonly> 
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pekerjaan</label>
											<div class="col-sm-10">
											<input type="hidden" name="pekerjaanid_pelapor">
											<select class="single-select" name="pekerjaan_pelapor" id="pekerjaan_pelapor" onchange="$('input[name=pekerjaanid_pelapor]').val($(this).find(':selected').data('pekerjaanid'));" required>
												<option selected="" disabled="" value="">-- Pilih Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="01">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="02">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="03">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="04">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="05">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="06">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="07">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="08">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="09">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
										</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="blok_pelapor" name="blok_pelapor" value="<?= $pemohon['blok']; ?>" placeholder="Blok" required> 
											</div>
											<div class="col-sm-3">
												<input type="number" name="rt_pelapor" id="rt_pelapor" placeholder="RT" value="<?= $pemohon['rt']; ?>" size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="number" name="rw_pelapor" id="rw_pelapor" value="<?= $pemohon['rw']; ?>" size="3" maxlength="3" placeholder="RW" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_pelapor" name="desa_pelapor" value="<?= $setting['nama_desa']; ?>" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_pelapor" id="kec_pelapor" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_pelapor" name="kab_pelapor" value="MAJALENGKA" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_pelapor" id="provinsi_pelapor" value="JAWA BARAT" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 

									</div>
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">SAKSI 1</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK</label>
											<div class="col-sm-10">
											<input type="number" maxlength="16" list="data_penduduk" name="nik_saksi1" id="nik_saksi1" onchange="return autofill();" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama_saksi1" id="nama_saksi1" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
											<div class="col-sm-5">
											<input type="text" name="tgl_lahir_saksi1" id="tgl_lahir_saksi1" onchange="$('input[name=umur_saksi1]').val(_calculateAge($(this).val()));" placeholder="Tanggal Lahir" class="result form-control" required/>
										
											</div>
											<div class="col-sm-5">
												<input type="number" name="umur_saksi1" id="umur_saksi1" placeholder="Umur" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-10">
												<select name="jk_saksi1" id="jk_saksi1" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Jenis Kelamin --</option>
													<option value="1">Laki-Laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pekerjaan</label>
											<div class="col-sm-10">
											<input type="hidden" name="pekerjaanid_saksi1">
											<select class="single-select" name="pekerjaan_saksi1" id="pekerjaan_saksi1" onchange="$('input[name=pekerjaanid_saksi1]').val($(this).find(':selected').data('pekerjaanid'));" required>
												<option selected="" disabled="" value="">-- Pilih Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="01">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="02">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="03">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="04">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="05">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="06">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="07">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="08">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="09">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
										</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="blok_saksi1" name="blok_saksi1" placeholder="Blok" required> 
											</div>
											<div class="col-sm-3">
												<input type="number" name="rt_saksi1" id="rt_saksi1" placeholder="RT"  size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="number" name="rw_saksi1" id="rw_saksi1" size="3" maxlength="3" placeholder="RW" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_saksi1" value="<?= $setting['nama_desa']; ?>" name="desa_saksi1" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_saksi1" id="kec_saksi1" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_saksi1" value="MAJALENGKA" name="kab_saksi1" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_saksi1" id="provinsi_saksi1" value="JAWA BARAT" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 
									</div> 
								</div>
							</div>

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">SAKSI 2</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">NIK</label>
											<div class="col-sm-10">
											<input type="number" maxlength="16" list="data_penduduk" name="nik_saksi2" id="nik_saksi2" onchange="return autofill();" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" name="nama_saksi2" id="nama_saksi2" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
											<div class="col-sm-5">
											<input type="text" name="tgl_lahir_saksi2" id="tgl_lahir_saksi2" onchange="$('input[name=umur_saksi2]').val(_calculateAge($(this).val()));" placeholder="Tanggal Lahir" class="result form-control" required/>
										
											</div>
											<div class="col-sm-5">
												<input type="number" name="umur_saksi2" id="umur_saksi2" placeholder="Umur" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-10">
												<select name="jk_saksi2" id="jk_saksi2" class="form-control" required>
													<option selected="" disabled="" value="">-- Pilih Jenis Kelamin --</option>
													<option value="1">Laki-Laki</option>
													<option value="2">Perempuan</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Pekerjaan</label>
											<div class="col-sm-10">
											<input type="hidden" name="pekerjaanid_saksi2">
											<select class="single-select" name="pekerjaan_saksi2" id="pekerjaan_saksi2" onchange="$('input[name=pekerjaanid_saksi2]').val($(this).find(':selected').data('pekerjaanid'));" required>
												<option selected="" disabled="" value="">-- Pilih Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="01">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="02">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="03">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="04">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="05">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="06">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="07">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="08">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="09">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
										</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat / RT / RW</label>
											<div class="col-sm-4">
											<input class="form-control" type="text" id="blok_saksi2" name="blok_saksi2" placeholder="Blok" required> 
											</div>
											<div class="col-sm-3">
												<input type="number" name="rt_saksi2" id="rt_saksi2" placeholder="RT"  size="3" maxlength="3" class="form-control" required/>
											</div>
											<div class="col-sm-3">
												<input class="form-control" type="number" name="rw_saksi2" id="rw_saksi2" size="3" maxlength="3" placeholder="RW" required> 
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Desa / Kecamatan</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="desa_saksi2" value="<?= $setting['nama_desa']; ?>" name="desa_saksi2" placeholder="Desa" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="kec_saksi2" id="kec_saksi2" value="<?= $setting['nama_kecamatan']; ?>" placeholder="Kecamatan" class="form-control" required/>
											</div>
										</div> 
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kabupaten / Provinsi</label>
											<div class="col-sm-5">
											<input class="form-control" type="text" id="kab_saksi2" value="MAJALENGKA" name="kab_saksi2" placeholder="Kabupaten" required> 
											</div>
											<div class="col-sm-5">
												<input type="text" name="provinsi_saksi2" id="provinsi_saksi2" value="JAWA BARAT" placeholder="Provinsi" class="form-control" required/>
											</div>
										</div> 
									</div> 
								</div>
							</div>
							

							

							


						</div>
						
						<input type="hidden" value="<?= $this->uri->segment(2); ?>" name="jenis_surat">
		<button type="submit" name="submit" class="lanjut no-print"><i class="fa fa-arrow-right"></i> Lanjut</button>
	</form>
	<button onclick="window.history.back()" class="kembali no-print" title="Kembali">
		<i class="fa fa-arrow-left"></i> Kembali
	</button>
					</div>

			</div>
		</div>
	</div>
	<!-- DATALIST -->
	<datalist id="data_kk">
		<?php
		foreach ($penduduk->result() as $b) { ?>
			<option value='<?= $b->kk; ?>'><?= $b->kepala_keluarga; ?></option>

		<?php } ?>

	</datalist>
	<datalist id="data_penduduk">
		<?php
		foreach ($penduduk->result() as $b) { ?>
			<option value='<?= $b->nik; ?>'><?= $b->nama; ?></option>

		<?php } ?>

	</datalist>
	
	<script>
		function autofill_kk() {
			var kk = document.getElementById('kk').value;
			$.ajax({
				url: "carikk",
				data: '&kk=' + kk,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('kk').value = val.kk;
						document.getElementById('kepala_keluarga').value = val.kepala_keluarga;
					});
				}
			});

		}
		/* set otomatis hari */
		function data_hari() {
			moment.locale('id');
			var tgl = document.getElementById('date').value;
			var oneDate = moment(tgl, 'DD-MM-YYYY');
			var dayName = oneDate.format('dddd');
			
			document.getElementById('hari').value = dayName;

			// var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
			// var d = new Date(document.getElementById('date').value);
			// document.getElementById('hari').value = days[d.getDay()];
		};
		function data_hari_kematian() {
			moment.locale('id');
			var tgl = document.getElementById('tgl_kematian').value;
			var oneDate = moment(tgl, 'DD-MM-YYYY');
			var dayName = oneDate.format('dddd');
			
			document.getElementById('hari_kematian').value = dayName;

			// var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
			// var d = new Date(document.getElementById('date').value);
			// document.getElementById('hari').value = days[d.getDay()];
		};

	</script>

<script>
		function autofill() {
			var nik_jenazah = document.getElementById('nik_jenazah').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_jenazah,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_jenazah').value = val.nik;
						document.getElementById('nama_jenazah').value = val.nama;
						document.getElementById('tgl_lahir_jenazah').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_jenazah').value = val.blok;
						document.getElementById('rt_jenazah').value = val.rt;
						document.getElementById('rw_jenazah').value = val.rw;
					});
				}
			});
			var nik_ibu = document.getElementById('nik_ibu').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_ibu,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_ibu').value = val.nik;
						document.getElementById('nama_ibu').value = val.nama;
						document.getElementById('tgl_lahir_ibu').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_ibu').value = val.blok;
						document.getElementById('rt_ibu').value = val.rt;
						document.getElementById('rw_ibu').value = val.rw;
					});
				}
			});
			var nik_ayah = document.getElementById('nik_ayah').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_ayah,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_ayah').value = val.nik;
						document.getElementById('nama_ayah').value = val.nama;
						document.getElementById('tgl_lahir_ayah').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_ayah').value = val.blok;
						document.getElementById('rt_ayah').value = val.rt;
						document.getElementById('rw_ayah').value = val.rw;
					});
				}
			});
			var nik_saksi1 = document.getElementById('nik_saksi1').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_saksi1,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_saksi1').value = val.nik;
						document.getElementById('nama_saksi1').value = val.nama;
						document.getElementById('tgl_lahir_saksi1').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_saksi1').value = val.blok;
						document.getElementById('rt_saksi1').value = val.rt;
						document.getElementById('rw_saksi1').value = val.rw;
					});
				}
			});
			var nik_saksi2 = document.getElementById('nik_saksi2').value;
			$.ajax({
				url: "cari",
				data: '&nik=' + nik_saksi2,
				success: function(data) {
					var hasil = JSON.parse(data);

					$.each(hasil, function(key, val) {

						document.getElementById('nik_saksi2').value = val.nik;
						document.getElementById('nama_saksi2').value = val.nama;
						document.getElementById('tgl_lahir_saksi2').value = moment(val.tgl_lahir).format('DD-MM-YYYY');
						document.getElementById('blok_saksi2').value = val.blok;
						document.getElementById('rt_saksi2').value = val.rt;
						document.getElementById('rw_saksi2').value = val.rw;
					});
				}
			});

		}
	</script>

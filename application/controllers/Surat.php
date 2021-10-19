<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('M_dt_penduduk');
		$this->load->library('pdf');
	}

	public function index()
	{
		$data['title'] = 'List Surat';
		$data['jenis_surat'] = $this->model_global->get_data('t_jenissurat')->result();
		$data['view'] = 'surat/list_surat';

		$this->load->view('lyt/index', $data);
	}

	public function cari()
	{
		$nik = $_GET['nik'];
		$cari = $this->M_dt_penduduk->cari($nik)->result();
		echo json_encode($cari);
	}
	public function carikk()
	{
		$kk = $_GET['kk'];
		$cari = $this->M_dt_penduduk->carikk($kk)->result();
		echo json_encode($cari);
	}

	// INPUT SURAT //
	public function SISOT()
	{
		$data['title'] = 'Surat Izin Suami Orang Tua';
		$data['jenis_surat'] = $this->model_global->get_data('t_jenissurat')->result();
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->M_dt_penduduk->tampil_data();
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();
		$data['view'] = 'surat/jenis/SISOT';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSISOT()
	{
		$data['title'] = 'Surat Izin Suami Orang Tua';
		$data['jenis_surat'] = $this->model_global->get_data('t_jenissurat')->result();
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();

		#Data Pemohon
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		#Data Isian

		$data['jenis_surat'] = $this->input->post('jenis_surat');

		$data['nik_pemohon'] = $this->input->post('nik_pemohon');
		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['ttdnama_pemohon'] = $this->input->post('ttdnama_pemohon');


		$data['nik'] = $this->input->post('nik');
		$data['nama'] = $this->input->post('nama');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['jk'] = $this->input->post('jk');
		$data['pekerjaan'] = $this->input->post('pekerjaan');
		$data['blok'] = $this->input->post('blok');
		$data['rt'] = $this->input->post('rt');
		$data['rw'] = $this->input->post('rw');
		$data['desa'] = $this->input->post('desa');
		$data['kec'] = $this->input->post('kec');
		$data['kab'] = $this->input->post('kab');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['tgl_surat'] = $this->input->post('tgl_surat');
		$data['ttdnama'] = $this->input->post('ttdnama');

		$data['view'] = 'surat/review/SISOT';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SISOT-' . $data['nik_pemohon'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$no_surat = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = 'SISOT/' . $data['tgl_surat'] . '/' . $no_surat;
			$dataPost['isi_surat'] = 'SISOT-' . $data['nik_pemohon'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] =$data['nik_pemohon'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKAN()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 15;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Andon Nikah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();
		$data['view'] = 'surat/jenis/SKAN';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKAN()
	{
		$data['title'] = 'Surat Keterangan Andon Nikah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['jenis_surat'] = $this->input->post('jenis_surat');

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 15;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);

		$data['no_skan'] = $this->input->post('no_skan');

		#Data Pemohon
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nik_pemohon'] = $this->input->post('nik_pemohon');
		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['kewarganegaraan_pemohon'] = $this->input->post('kewarganegaraan_pemohon');


		$data['dengan_seorang'] = $this->input->post('dengan_seorang');
		$data['bin'] = $this->input->post('bin');

		#Data Isian
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['desa_tujuan'] = $this->input->post('desa_tujuan');
		$data['kec_tujuan'] = $this->input->post('kec_tujuan');
		$data['kab_tujuan'] = $this->input->post('kab_tujuan');
		$data['prov_tujuan'] = $this->input->post('prov_tujuan');

		$data['kabupaten'] = $this->input->post('kabupaten');
		$data['provinsi'] = $this->input->post('provinsi');
		$data['nama'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['binti'] = $this->input->post('binti');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['jk'] = $this->input->post('jk');
		$data['agama'] = $this->input->post('agama');
		$data['pekerjaan'] = $this->input->post('pekerjaan');
		$data['blok'] = $this->input->post('blok');
		$data['rt'] = $this->input->post('rt');
		$data['rw'] = $this->input->post('rw');
		$data['desa'] = $this->input->post('desa');
		$data['kec'] = $this->input->post('kec');
		$data['kab'] = $this->input->post('kab');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKAN';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKAN-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;
			$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '474.2/' . $data['no_skan'];
			$dataPost['isi_surat'] = 'SKAN-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKAT()
	{

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Akta Tanah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKAT';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKAT()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');

		$data['no_skat'] = $this->input->post('no_skat');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Akta Tanah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		
		$data['nik_pemohon'] = $this->input->post('nik_pemohon');
		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['kewarganegaraan_pemohon'] = $this->input->post('kewarganegaraan_pemohon');


		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sppt'] = $this->input->post('no_sppt');
		$data['letak_blok'] = $this->input->post('letak_blok');
		$data['no_persil'] = $this->input->post('no_persil');
		$data['kelas_persil'] = $this->input->post('kelas_persil');
		$data['luas_tanah'] = $this->input->post('luas_tanah');
		$data['batas_utara'] = $this->input->post('batas_utara');
		$data['batas_timur'] = $this->input->post('batas_timur');
		$data['batas_selatan'] = $this->input->post('batas_selatan');
		$data['batas_barat'] = $this->input->post('batas_barat');
		$data['nama_mutasi'] = $this->input->post('nama_mutasi');
		$data['dusun'] = $this->input->post('dusun');
		$data['rt'] = $this->input->post('rt');
		$data['rw'] = $this->input->post('rw');
		$data['desa'] = $this->input->post('desa');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['tgl_ketetapan'] = $this->input->post('tgl_ketetapan');
		$data['tgl_surat'] = $this->input->post('tgl_surat');


		$data['view'] = 'surat/review/SKAT';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKAT-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '181.1/' . $data['no_skat'];
			$dataPost['isi_surat'] = 'SKAT-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKDKT1()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 43;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 1';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKDKT1';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKDKT1()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skdkt1'] = $this->input->post('no_skdkt1');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 43;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 1';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['no_sppt'] = $this->input->post('no_sppt');
		$data['blok'] = $this->input->post('blok');
		$data['no_persil'] = $this->input->post('no_persil');
		$data['kelas_persil'] = $this->input->post('kelas_persil');
		$data['luas_tanah'] = $this->input->post('luas_tanah');
		$data['batas_utara'] = $this->input->post('batas_utara');
		$data['batas_timur'] = $this->input->post('batas_timur');
		$data['batas_selatan'] = $this->input->post('batas_selatan');
		$data['batas_barat'] = $this->input->post('batas_barat');
		$data['nama_hak_milik'] = $this->input->post('nama_hak_milik');
		$data['blok_hak_milik'] = $this->input->post('blok_hak_milik');
		$data['rt_hak_milik'] = $this->input->post('rt_hak_milik');
		$data['rw_hak_milik'] = $this->input->post('rw_hak_milik');
		$data['desa_hak_milik'] = $this->input->post('desa_hak_milik');
		$data['kec_hak_milik'] = $this->input->post('kec_hak_milik');
		$data['harga_tanah'] = $this->input->post('harga_tanah');
		$data['harga_bangunan'] = $this->input->post('harga_bangunan');
		$data['nama_jaminan'] = $this->input->post('nama_jaminan');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKDKT1';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKDKT1-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '181.1/' . $data['no_skdkt1'];
			$dataPost['isi_surat'] = 'SKDKT1-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKDKT2()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 84;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 2';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKDKT2';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKDKT2()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skdkt2'] = $this->input->post('no_skdkt2');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 84;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 2';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['no_shm'] = $this->input->post('no_shm');
		$data['atas_nama'] = $this->input->post('atas_nama');
		$data['luas_tanah'] = $this->input->post('luas_tanah');
		$data['persil'] = $this->input->post('persil');
		$data['harga'] = $this->input->post('harga');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKDKT2';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKDKT2-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '181.1/' . $data['no_skdkt2'];
			$dataPost['isi_surat'] = 'SKDKT2-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKDKT3()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 91;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 3';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKDKT3';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKDKT3()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skdkt3'] = $this->input->post('no_skdkt3');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 91;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 3';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nik_pemohon'] = $this->input->post('nik_pemohon');
		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['kewarganegaraan_pemohon'] = $this->input->post('kewarganegaraan_pemohon');

		$data['no_sppt'] = $this->input->post('no_sppt');
		$data['atas_nama'] = $this->input->post('atas_nama');
		$data['no_persil'] = $this->input->post('no_persil');
		$data['kelas_persil'] = $this->input->post('kelas_persil');
		$data['luas_tanah'] = $this->input->post('luas_tanah');
		$data['letak_blok'] = $this->input->post('letak_blok');
		$data['lokasi_blok'] = $this->input->post('lokasi_blok');
		$data['lokasi_desa'] = $this->input->post('lokasi_desa');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['berasal_dari'] = $this->input->post('berasal_dari');
		$data['nama_pemilik'] = $this->input->post('nama_pemilik');
		$data['tgl_asal'] = $this->input->post('tgl_asal');
		$data['batas_utara'] = $this->input->post('batas_utara');
		$data['batas_timur'] = $this->input->post('batas_timur');
		$data['batas_selatan'] = $this->input->post('batas_selatan');
		$data['batas_barat'] = $this->input->post('batas_barat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKDKT3';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKDKT3-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '181.1/' . $data['no_skdkt3'];
			$dataPost['isi_surat'] = 'SKDKT3-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKDOM()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 81;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Domisili';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKDOM';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKDOM()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skdom'] = $this->input->post('no_skdom');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 81;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Desa Kepemilikan Tanah 3';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['status_pemohon'] = $this->input->post('status_pemohon');
		$data['pemohon_ttd'] = $this->input->post('pemohon_ttd');


		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKDOM';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKDOM-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '474.1/' . $data['no_skdom'];
			
			$dataPost['isi_surat'] = 'SKDOM-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKGS()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 37;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Garapan Sawah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKGS';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKGS()
	{
		error_reporting(E_ALL ^ E_NOTICE);

		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skgs'] = $this->input->post('no_skgs');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 37;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Garapan Sawah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');


		$data['tahun_garapan'] = $this->input->post('tahun_garapan');
		$data['milik'] = $this->input->post('milik');
		$data['gadai'] = $this->input->post('gadai');
		$data['sewa'] = $this->input->post('sewa');
		$data['tgl_surat'] = $this->input->post('tgl_surat');
		$data['jumlah'] = $data['milik'] + $data['gadai'] + $data['sewa'];
		$data['view'] = 'surat/review/SKGS';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$pdf = $this->_mpdf_print($data, 'SKGS-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '181.1/' . $data['no_skgs'];
			$dataPost['isi_surat'] = 'SKGS-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKLT()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 64;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Luas Tanah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKLT';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKLT()
	{
		error_reporting(E_ALL ^ E_NOTICE);

		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sklt'] = $this->input->post('no_sklt');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 64;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Luas Tanah';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['no_akta'] = $this->input->post('no_akta');
		$data['persil'] = $this->input->post('persil');
		$data['luas_lahan'] = $this->input->post('luas_lahan');
		$data['tahun_sppt'] = $this->input->post('tahun_sppt');
		$data['no_sppt'] = $this->input->post('no_sppt');
		$data['persil_beda'] = $this->input->post('persil_beda');
		$data['luas_lahan_beda'] = $this->input->post('luas_lahan_beda');
		$data['selisih_tanah'] = $this->input->post('selisih_tanah');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKLT';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKLT-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '181.1/' . $data['no_sklt'];
			$dataPost['isi_surat'] = 'SKLT-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKTM1()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Tidak Mampu';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKTM1';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKTM1()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sktm1'] = $this->input->post('no_sktm1');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Tidak Mampu 1';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['status_pemohon'] = $this->input->post('status_pemohon');

		
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['keterangan'] = $this->input->post('keterangan');

		$data['view'] = 'surat/review/SKTM1';

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKTM1-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '477.4/' . $data['no_sktm1'];
			$dataPost['isi_surat'] = 'SKTM1-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKTM2()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 4;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Tidak Mampu 2';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKTM2';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKTM2()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sktm2'] = $this->input->post('no_sktm2');

		#Data Pemohon

		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 4;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Tidak Mampu 2';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['status_pemohon'] = $this->input->post('status_pemohon');

		
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');
		$data['keterangan'] = $this->input->post('keterangan');


		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$data['view'] = 'surat/review/SKTM2';

		$data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['nik_ayah'] = $this->input->post('nik_ayah');
		$data['tmp_lahir_ayah'] = $this->input->post('tmp_lahir_ayah');
		$data['tgl_lahir_ayah'] = $this->input->post('tgl_lahir_ayah');
		$data['jk_ayah'] = $this->input->post('jk_ayah');
		$data['kewarganegaraan'] = $this->input->post('kewarganegaraan');
		$data['dsn_ayah'] = $this->input->post('dsn_ayah');
		$data['rt_ayah'] = $this->input->post('rt_ayah');
		$data['rw_ayah'] = $this->input->post('rw_ayah');
		$data['desa_ayah'] = $this->input->post('desa_ayah');
		$data['kec_ayah'] = $this->input->post('kec_ayah');
		$data['kab_ayah'] = $this->input->post('kab_ayah');
		$data['nama_ibu'] = $this->input->post('nama_ibu');
		$data['nik_ibu'] = $this->input->post('nik_ibu');
		$data['tmp_lahir_ibu'] = $this->input->post('tmp_lahir_ibu');
		$data['tgl_lahir_ibu'] = $this->input->post('tgl_lahir_ibu');
		$data['jk_ibu'] = $this->input->post('jk_ibu');
		$data['dsn_ibu'] = $this->input->post('dsn_ibu');
		$data['rt_ibu'] = $this->input->post('rt_ibu');
		$data['rw_ibu'] = $this->input->post('rw_ibu');
		$data['desa_ibu'] = $this->input->post('desa_ibu');
		$data['kec_ibu'] = $this->input->post('kec_ibu');
		$data['kab_ibu'] = $this->input->post('kab_ibu');


		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKTM2-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '477.4/' . $data['no_sktm2'];
			$dataPost['isi_surat'] = 'SKTM2-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKTTS()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 41;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Tanah Tidak Sengketa';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKTTS';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKTTS()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sktts'] = $this->input->post('no_sktts');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 41;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Tanah Tidak Sengketa';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();


		$data['view'] = 'surat/review/SKTTS';

		$data['blok'] = $this->input->post('blok');
		$data['rt'] = $this->input->post('rt');
		$data['rw'] = $this->input->post('rw');
		$data['desa'] = $this->input->post('desa');
		$data['kec'] = $this->input->post('kec');
		$data['kab'] = $this->input->post('kab');
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');
		$data['no_persil'] = $this->input->post('no_persil');
		$data['no_sppt'] = $this->input->post('no_sppt');
		$data['luas_tanah'] = $this->input->post('luas_tanah');
		$data['blok_tanah'] = $this->input->post('blok_tanah');

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKTTS-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '477.4/' . $data['no_sktts'];
			$dataPost['isi_surat'] = 'SKTTS-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}
	public function SKU()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 458;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Usaha';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKU';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSKU()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sku'] = $this->input->post('no_sku');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 458;
		$data['no_surat'] = str_pad($no, 4, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Keterangan Usaha';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		
		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['nik_pemohon'] = $this->input->post('nik_pemohon');
		$data['kewarganegaraan_pemohon'] = $this->input->post('kewarganegaraan_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['status_pemohon'] = $this->input->post('status_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['agama_pemohon'] = $this->input->post('agama_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');


		$data['view'] = 'surat/review/SKU';

		$data['kewarganegaraan'] = $this->input->post('kewarganegaraan');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SKU-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '503/' . $data['no_sku'];
			$dataPost['isi_surat'] = 'SKU-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}
	public function SPIKH()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 17;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT PERNYATAAN IZIN HAJATAN / RAME – RAME / HIBURAN / PESTA';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SPIKH';

		$this->load->view('lyt/layout_surat', $data);
	}

	public function reviewSPIKH()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_spikh'] = $this->input->post('no_spikh');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 17;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT PERNYATAAN IZIN HAJATAN / RAME – RAME / HIBURAN / PESTA';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();


		$data['view'] = 'surat/review/SPIKH';

		
		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['umur_pemohon'] = $this->input->post('umur_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['agama_pemohon'] = $this->input->post('agama_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');


		$data['keterangan'] = $this->input->post('keterangan');
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('lyt/layout_surat', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SPIKH-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'layout_surat.php', $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '503/' . $data['no_spikh'];
			$dataPost['isi_surat'] = 'SPIKH-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SPSKCK()
	{
		$data['title'] = 'Surat Pengantar SKCK';
		$data['jenis_surat'] = $this->model_global->get_data('t_jenissurat')->result();
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->M_dt_penduduk->tampil_data();
		$data['idsurat'] = $this->uri->segment(2);

		$no_surat = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['idsurat']])->num_rows() + 24;
		$data['no_surat'] = str_pad($no_surat, 3, '0', STR_PAD_LEFT);

		$this->db->select('*');
		$this->db->from('t_penduduk');
		$this->db->where("nik", $this->session->userdata('nik'));
		$data['pemohon'] = $this->db->get()->row_array();
		$data['view'] = 'surat/jenis/SPSKCK';

		$this->load->view('lyt/layout_surat', $data);
	}


	public function reviewSPSKCK()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_spskck'] = $this->input->post('no_spskck');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 24;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'Surat Pengantar Kelakuan Baik';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nama_pemohon'] = $this->input->post('nama_pemohon');
		$data['nik_pemohon'] = $this->input->post('nik_pemohon');
		$data['jk_pemohon'] = $this->input->post('jk_pemohon');
		$data['tmp_lahir_pemohon'] = $this->input->post('tmp_lahir_pemohon');
		$data['tgl_lahir_pemohon'] = $this->input->post('tgl_lahir_pemohon');
		$data['pekerjaan_pemohon'] = $this->input->post('pekerjaan_pemohon');
		$data['blok_pemohon'] = $this->input->post('blok_pemohon');
		$data['rt_pemohon'] = $this->input->post('rt_pemohon');
		$data['rw_pemohon'] = $this->input->post('rw_pemohon');
		$data['desa_pemohon'] = $this->input->post('desa_pemohon');
		$data['kec_pemohon'] = $this->input->post('kec_pemohon');
		$data['kab_pemohon'] = $this->input->post('kab_pemohon');

		$data['keterangan'] = $this->input->post('keterangan');


		#Data Isian
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');


		$data['view'] = 'surat/review/SPSKCK';

		$this->load->view('lyt/layout_surat', $data);

		// #DOM
		// $this->pdf->filename = "SISOT.pdf";
		// $this->pdf->load_view('lyt/layout_surat', $data);
		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print($data, 'SPSKCK-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], 'cetak_style.php', $data['jenis_surat']);

			$no_surat = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = '300/' . $data['no_spskck'];
			$dataPost['isi_surat'] = 'SPSKCK-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}
	public function SKKEL()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN KELAHIRAN (WARGA NEGARA INDONESIA)';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKKEL';

		$this->load->view('lyt/index', $data);
	}

	public function reviewSKKEL()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN KELAHIRAN (WARGA NEGARA INDONESIA)';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['nama_bayi'] 			= $this->input->post('nama_bayi');
		$data['nik_bayi'] 			=  $this->input->post('nik_bayi');
		$data['jk_bayi']			= $this->input->post('jk_bayi');
		$data['tempat_dilahirkan'] 	= $this->input->post('tempat_dilahirkan');
		$data['tempat_kelahiran'] 		= $this->input->post('tempat_kelahiran');
		$data['hari'] 				= $this->input->post('hari');
		$data['tgl_lahir'] 			= $this->input->post('tgl_lahir');
		$data['waktu_lahir'] 		= $this->input->post('waktu_lahir');
		$data['jenis_kelahiran'] 	= $this->input->post('jenis_kelahiran');
		$data['kelahiran_anak_ke']	= $this->input->post('kelahiran_anak_ke');
		$data['penolong_kelahiran']	= $this->input->post('penolong_kelahiran');
		$data['berat_bayi'] 		= $this->input->post('berat_bayi');
		$data['panjang_bayi']		= $this->input->post('panjang_bayi');

		$data['nik_ibu'] 			= $this->input->post('nik_ibu');
		$data['nama_ibu']			= $this->input->post('nama_ibu');
		$data['tgl_lahir_ibu'] 		= $this->input->post('tgl_lahir_ibu');
		$data['umur_ibu'] 			= $this->input->post('umur_ibu');
		$data['pekerjaanid_ibu'] 	= $this->input->post('pekerjaanid_ibu');
		$data['pekerjaan_ibu'] 		= $this->input->post('pekerjaan_ibu');
		$data['alamat_ibu'] 		= $this->input->post('alamat_ibu');
		$data['rt_ibu'] 			= $this->input->post('rt_ibu');
		$data['rw_ibu'] 			= $this->input->post('rw_ibu');
		$data['desa_ibu'] 			= $this->input->post('desa_ibu');
		$data['kec_ibu'] 			= $this->input->post('kec_ibu');
		$data['kab_ibu'] 			= $this->input->post('kab_ibu');
		$data['provinsi_ibu'] 		= $this->input->post('provinsi_ibu');
		$data['wn_ibu'] 			= $this->input->post('wn_ibu');
		$data['tanggalperkawinan_ibu'] = $this->input->post('tanggalperkawinan_ibu');

		$data['nik_ayah'] 			= $this->input->post('nik_ayah');
		$data['nama_ayah']			= $this->input->post('nama_ayah');
		$data['tgl_lahir_ayah'] 	= $this->input->post('tgl_lahir_ayah');
		$data['umur_ayah'] 			= $this->input->post('umur_ayah');
		$data['pekerjaanid_ayah'] 	= $this->input->post('pekerjaanid_ayah');
		$data['pekerjaan_ayah'] 		= $this->input->post('pekerjaan_ayah');
		$data['alamat_ayah'] 		= $this->input->post('alamat_ayah');
		$data['rt_ayah'] 			= $this->input->post('rt_ayah');
		$data['rw_ayah'] 			= $this->input->post('rw_ayah');
		$data['desa_ayah'] 			= $this->input->post('desa_ayah');
		$data['kec_ayah'] 			= $this->input->post('kec_ayah');
		$data['kab_ayah'] 			= $this->input->post('kab_ayah');
		$data['provinsi_ayah'] 		= $this->input->post('provinsi_ayah');
		$data['wn_ayah'] 			= $this->input->post('wn_ayah');
		
		#PEMOHON
		$data['kk'] 				= $this->input->post('kk');
		$data['kepala_keluarga'] 				= $this->input->post('kepala_keluarga');
		$data['tgl_lahir_pelapor'] 	= $this->input->post('tgl_lahir_pelapor');
		$data['umur_pelapor'] 		= $this->input->post('umur_pelapor');
		
		if ($this->input->post('jk_pelapor') == 'Laki-laki') {
			$jk_pelapor = "1"; 
		} else {
			$jk_pelapor = "2";
		}; 
		$data['jk_pelapor'] 		= $jk_pelapor;

		#SAKSI 1
		$data['nik_saksi1']				= $this->input->post('nik_saksi1');
		$data['nama_saksi1'] 			= $this->input->post('nama_saksi1');
		$data['tgl_lahir_saksi1'] 	= $this->input->post('tgl_lahir_saksi1');
		$data['umur_saksi1']			= $this->input->post('umur_saksi1');
		$data['jk_saksi1'] 				= $this->input->post('jk_saksi1');
		$data['pekerjaanid_saksi1'] 	= $this->input->post('pekerjaanid_saksi1');
		$data['pekerjaan_saksi1'] 		= $this->input->post('pekerjaan_saksi1');
		$data['alamat_saksi1'] 			= $this->input->post('alamat_saksi1');
		$data['rt_saksi1'] 				= $this->input->post('rt_saksi1');
		$data['rw_saksi1'] 				= $this->input->post('rw_saksi1');

		#SAKSI 2
		$data['nik_saksi2']				= $this->input->post('nik_saksi2');
		$data['nama_saksi2'] 			= $this->input->post('nama_saksi2');
		$data['tgl_lahir_saksi2'] 		= $this->input->post('tgl_lahir_saksi2');
		$data['umur_saksi2']			= $this->input->post('umur_saksi2');
		$data['jk_saksi2'] 				= $this->input->post('jk_saksi2');
		$data['pekerjaanid_saksi2'] 	= $this->input->post('pekerjaanid_saksi2');
		$data['pekerjaan_saksi2'] 		= $this->input->post('pekerjaan_saksi2');
		$data['alamat_saksi2'] 			= $this->input->post('alamat_saksi2');
		$data['rt_saksi2'] 				= $this->input->post('rt_saksi2');
		$data['rw_saksi2'] 				= $this->input->post('rw_saksi2');
		
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('surat/review/SKKEL', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print2($data, 'SKKEL-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = 'F2-01/' . $data['no_surat'] . "/Pem-Des" . '/' . date("Y");
			$dataPost['isi_surat'] = 'SKKEL-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}
	public function SKKEM()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN KEMATIAN';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['view'] = 'surat/jenis/SKKEM';

		$this->load->view('lyt/index', $data);
	}

	public function reviewSKKEM()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skkem'] = $this->input->post('no_skkem');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 1;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN KEMATIAN';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['kepala_keluarga'] 			= $this->input->post('kepala_keluarga');
		$data['kk'] 						= $this->input->post('kk');
		$data['nik_jenazah'] 				= $this->input->post('nik_jenazah');
		$data['nama_jenazah'] 				= $this->input->post('nama_jenazah');
		$data['jk_jenazah']					= $this->input->post('jk_jenazah');
		$data['tgl_lahir_jenazah'] 			= $this->input->post('tgl_lahir_jenazah');
		$data['umur_jenazah'] 				= $this->input->post('umur_jenazah');
		$data['tmp_lahir_jenazah'] 			= $this->input->post('tmp_lahir_jenazah');
		$data['agama_jenazah'] 				= $this->input->post('agama_jenazah');
		$data['pekerjaanid_jenazah'] 		= $this->input->post('pekerjaanid_jenazah');
		$data['pekerjaan_jenazah'] 			= $this->input->post('pekerjaan_jenazah');
		$data['blok_jenazah']				= $this->input->post('blok_jenazah');
		$data['rt_jenazah']					= $this->input->post('rt_jenazah');
		$data['rw_jenazah'] 				= $this->input->post('rw_jenazah');
		$data['kab_jenazah'] 				= $this->input->post('kab_jenazah');
		$data['provinsi_jenazah'] 			= $this->input->post('provinsi_jenazah');
		$data['anakke_jenazah']				= $this->input->post('anakke_jenazah');
		$data['tgl_kematian'] 				= $this->input->post('tgl_kematian');
		$data['waktu_kematian'] 			= $this->input->post('waktu_kematian');
		$data['sebab_kematian'] 			= $this->input->post('sebab_kematian');
		$data['tempat_kematian'] 			= $this->input->post('tempat_kematian');
		$data['yang_menerangkan'] 			= $this->input->post('yang_menerangkan');

		$data['nik_ayah'] 			= $this->input->post('nik_ayah');
		$data['nama_ayah']			= $this->input->post('nama_ayah');
		$data['tgl_lahir_ayah'] 	= $this->input->post('tgl_lahir_ayah');
		$data['umur_ayah'] 			= $this->input->post('umur_ayah');
		$data['pekerjaanid_ayah'] 	= $this->input->post('pekerjaanid_ayah');
		$data['pekerjaan_ayah'] 	= $this->input->post('pekerjaan_ayah');
		$data['blok_ayah'] 			= $this->input->post('blok_ayah');
		$data['rt_ayah'] 			= $this->input->post('rt_ayah');
		$data['rw_ayah'] 			= $this->input->post('rw_ayah');
		$data['desa_ayah'] 			= $this->input->post('desa_ayah');
		$data['kec_ayah'] 			= $this->input->post('kec_ayah');
		$data['kab_ayah'] 			= $this->input->post('kab_ayah');
		$data['provinsi_ayah'] 		= $this->input->post('provinsi_ayah');


		$data['nik_ibu'] 			= $this->input->post('nik_ibu');
		$data['nama_ibu']			= $this->input->post('nama_ibu');
		$data['tgl_lahir_ibu'] 		= $this->input->post('tgl_lahir_ibu');
		$data['umur_ibu'] 			= $this->input->post('umur_ibu');
		$data['pekerjaanid_ibu'] 	= $this->input->post('pekerjaanid_ibu');
		$data['pekerjaan_ibu'] 		= $this->input->post('pekerjaan_ibu');
		$data['blok_ibu'] 			= $this->input->post('blok_ibu');
		$data['rt_ibu'] 			= $this->input->post('rt_ibu');
		$data['rw_ibu'] 			= $this->input->post('rw_ibu');
		$data['desa_ibu'] 			= $this->input->post('desa_ibu');
		$data['kec_ibu'] 			= $this->input->post('kec_ibu');
		$data['kab_ibu'] 			= $this->input->post('kab_ibu');
		$data['provinsi_ibu'] 		= $this->input->post('provinsi_ibu');
		$data['wn_ibu'] 			= $this->input->post('wn_ibu');

		#PELAPOR
		$data['tgl_lahir_pelapor'] 	= $this->input->post('tgl_lahir_pelapor');
		$data['umur_pelapor'] 		= $this->input->post('umur_pelapor');
		$data['pekerjaanid_pelapor'] = $this->input->post('pekerjaanid_pelapor');
		$data['pekerjaan_pelapor'] 	= $this->input->post('pekerjaan_pelapor');
		$data['desa_pelapor'] 	= $this->input->post('desa_pelapor');
		$data['kec_pelapor'] 	= $this->input->post('kec_pelapor');
		$data['kab_pelapor'] 	= $this->input->post('kab_pelapor');
		$data['provinsi_pelapor'] 	= $this->input->post('provinsi_pelapor');
		
		if ($this->input->post('jk_pelapor') == 'Laki-laki') {
			$jk_pelapor = "1"; 
		} else {
			$jk_pelapor = "2";
		}; 
		$data['jk_pelapor'] 		= $jk_pelapor;

		#SAKSI 1
		$data['nik_saksi1']				= $this->input->post('nik_saksi1');
		$data['nama_saksi1'] 			= $this->input->post('nama_saksi1');
		$data['tgl_lahir_saksi1'] 		= $this->input->post('tgl_lahir_saksi1');
		$data['umur_saksi1']			= $this->input->post('umur_saksi1');
		$data['jk_saksi1'] 				= $this->input->post('jk_saksi1');
		$data['pekerjaanid_saksi1'] 	= $this->input->post('pekerjaanid_saksi1');
		$data['pekerjaan_saksi1'] 		= $this->input->post('pekerjaan_saksi1');
		$data['blok_saksi1'] 			= $this->input->post('blok_saksi1');
		$data['rt_saksi1'] 				= $this->input->post('rt_saksi1');
		$data['rw_saksi1'] 				= $this->input->post('rw_saksi1');
		$data['desa_saksi1'] 	= $this->input->post('desa_saksi1');
		$data['kec_saksi1'] 	= $this->input->post('kec_saksi1');
		$data['kab_saksi1'] 	= $this->input->post('kab_saksi1');
		$data['provinsi_saksi1'] 	= $this->input->post('provinsi_saksi1');

		#SAKSI 2
		$data['nik_saksi2']				= $this->input->post('nik_saksi2');
		$data['nama_saksi2'] 			= $this->input->post('nama_saksi2');
		$data['tgl_lahir_saksi2'] 		= $this->input->post('tgl_lahir_saksi2');
		$data['umur_saksi2']			= $this->input->post('umur_saksi2');
		$data['jk_saksi2'] 				= $this->input->post('jk_saksi2');
		$data['pekerjaanid_saksi2'] 	= $this->input->post('pekerjaanid_saksi2');
		$data['pekerjaan_saksi2'] 		= $this->input->post('pekerjaan_saksi2');
		$data['blok_saksi2'] 			= $this->input->post('blok_saksi2');
		$data['rt_saksi2'] 				= $this->input->post('rt_saksi2');
		$data['rw_saksi2'] 				= $this->input->post('rw_saksi2');
		$data['desa_saksi2'] 	= $this->input->post('desa_saksi2');
		$data['kec_saksi2'] 	= $this->input->post('kec_saksi2');
		$data['kab_saksi2'] 	= $this->input->post('kab_saksi2');
		$data['provinsi_saksi2'] 	= $this->input->post('provinsi_saksi2');
		
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('surat/review/SKKEM', $data);

		if ($this->input->post('param')) {
			#MPDF
			$this->_mpdf_print2($data, 'SKKEM-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = $data['no_skkem'];
			$dataPost['isi_surat'] = 'SKKEM-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}
	
	public function SPPW()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 31;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT PERMOHONAN PINDAH WNI';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();
		$data['getkk'] = $this->model_global->get_data('t_penduduk', ['kk' => $this->session->userdata('kk')])->result();
		$data['datakk'] = $this->model_global->get_data('t_penduduk')->result();

		$data['view'] = 'surat/jenis/SPPW';

		$this->load->view('lyt/index', $data);
	}

	public function reviewSPPW()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_sppw'] = $this->input->post('no_sppw');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 31;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT PERMOHONAN PINDAH WNI';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['kepala_kk'] 						= $this->input->post('kepala_kk');
		$data['kk'] 						= $this->input->post('kk');
		$data['alamat'] 					= $this->input->post('alamat');
		$data['rt'] 						= $this->input->post('rt');
		$data['rw']							= $this->input->post('rw');
		$data['dusun'] 						= $this->input->post('dusun');
		$data['desa'] 						= $this->input->post('desa');
		$data['kab'] 						= $this->input->post('kab');
		$data['kec'] 						= $this->input->post('kec');
		$data['provinsi'] 					= $this->input->post('provinsi');
		$data['kode_pos'] 					= $this->input->post('kode_pos');
		$data['telepon']					= $this->input->post('telepon');
		$data['nik']						= $this->input->post('nik');
		$data['nama'] 						= $this->input->post('nama');
		$data['alasan_pindah_id'] 				= $this->input->post('alasan_pindah_id');
		$data['sebut_alasan'] 				= $this->input->post('sebut_alasan');

		$data['alamat_tujuan']				= $this->input->post('alamat_tujuan');
		$data['rt_tujuan'] 					= $this->input->post('rt_tujuan');
		$data['rw_tujuan'] 					= $this->input->post('rw_tujuan');
		$data['dusun_tujuan'] 				= $this->input->post('dusun_tujuan');
		$data['desa_tujuan'] 				= $this->input->post('desa_tujuan');
		$data['kec_tujuan'] 				= $this->input->post('kec_tujuan');
		$data['kab_tujuan'] 				= $this->input->post('kab_tujuan');
		$data['provinsi_tujuan'] 			= $this->input->post('provinsi_tujuan');
		$data['kode_pos_tujuan'] 			= $this->input->post('kode_pos_tujuan');
		$data['telepon_tujuan'] 			= $this->input->post('telepon_tujuan');
		$data['jenis_kepindahan_id'] 		= $this->input->post('jenis_kepindahan_id');
		$data['status_kk_tidak_pindah_id'] 	= $this->input->post('status_kk_tidak_pindah_id');
		$data['status_kk_pindah_id'] 		= $this->input->post('status_kk_pindah_id');
		// $data['jumlah_ikut'] 				= implode(', ', $this->input->post('jumlah_ikut'));
		// $data['ktp_berlaku'] 				= "SEUMUR HIDUP";
		$data['shdk'] 						= "";


		if(!empty($this->input->post('jumlah_ikut')))
			{
			foreach ( $this->input->post('jumlah_ikut') as $jml_ikut)
				{
					$nik_pengikut[]= $jml_ikut; 
					$ktp[]= "SEUMUR HIDUP";
				}
			}

			$data['jumlah_ikut'] = $nik_pengikut; 
			$data['ktp_berlaku'] = $ktp;
			
		
		
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('surat/review/SPPW', $data);

		if ($this->input->post('param')) {
			#MPDF
			
			$this->_mpdf_print2($data, 'SPPW-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = $data['no_sppw'];
			$dataPost['isi_surat'] = 'SPPW-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}
	public function SKPW()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 30;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN PINDAH WNI';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();
		$data['getkk'] = $this->model_global->get_data('t_penduduk', ['kk' => $this->session->userdata('kk')])->result();
		$data['datakk'] = $this->model_global->get_data('t_penduduk')->result();

		$data['view'] = 'surat/jenis/SKPW';

		$this->load->view('lyt/index', $data);
	}

	public function reviewSKPW()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skpw'] = $this->input->post('no_skpw');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 30;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN PINDAH WNI';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['petugas'] 						= $this->input->post('petugas');

		$data['kepala_kk'] 						= $this->input->post('kepala_kk');
		$data['kk'] 						= $this->input->post('kk');
		$data['alamat'] 					= $this->input->post('alamat');
		$data['rt'] 						= $this->input->post('rt');
		$data['rw']							= $this->input->post('rw');
		$data['dusun'] 						= $this->input->post('dusun');
		$data['desa'] 						= $this->input->post('desa');
		$data['kab'] 						= $this->input->post('kab');
		$data['kec'] 						= $this->input->post('kec');
		$data['provinsi'] 					= $this->input->post('provinsi');
		$data['kode_pos'] 					= $this->input->post('kode_pos');
		$data['telepon']					= $this->input->post('telepon');
		$data['nik']						= $this->input->post('nik');
		$data['nama'] 						= $this->input->post('nama');
		$data['alasan_pindah_id'] 				= $this->input->post('alasan_pindah_id');
		$data['sebut_alasan'] 				= $this->input->post('sebut_alasan');

		$data['alamat_tujuan']				= $this->input->post('alamat_tujuan');
		$data['rt_tujuan'] 					= $this->input->post('rt_tujuan');
		$data['rw_tujuan'] 					= $this->input->post('rw_tujuan');
		$data['dusun_tujuan'] 				= $this->input->post('dusun_tujuan');
		$data['desa_tujuan'] 				= $this->input->post('desa_tujuan');
		$data['kec_tujuan'] 				= $this->input->post('kec_tujuan');
		$data['kab_tujuan'] 				= $this->input->post('kab_tujuan');
		$data['provinsi_tujuan'] 			= $this->input->post('provinsi_tujuan');
		$data['kode_pos_tujuan'] 			= $this->input->post('kode_pos_tujuan');
		$data['telepon_tujuan'] 			= $this->input->post('telepon_tujuan');
		$data['jenis_kepindahan_id'] 		= $this->input->post('jenis_kepindahan_id');
		$data['status_kk_tidak_pindah_id'] 	= $this->input->post('status_kk_tidak_pindah_id');
		$data['status_kk_pindah_id'] 		= $this->input->post('status_kk_pindah_id');
		// $data['jumlah_ikut'] 				= implode(', ', $this->input->post('jumlah_ikut'));
		// $data['ktp_berlaku'] 				= "SEUMUR HIDUP";
		$data['shdk'] 						= "";


		if(!empty($this->input->post('jumlah_ikut')))
			{
			foreach ( $this->input->post('jumlah_ikut') as $jml_ikut)
				{
					$nik_pengikut[]= $jml_ikut; 
					$ktp[]= "SEUMUR HIDUP";
				}
			}

			$data['jumlah_ikut'] = $nik_pengikut; 
			$data['ktp_berlaku'] = $ktp;
			
		
		
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('surat/review/SKPW', $data);

		if ($this->input->post('param')) {
			#MPDF
			
			$this->_mpdf_print2($data, 'SKPW-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = $data['no_skpw'];
			$dataPost['isi_surat'] = 'SKPW-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function SKPDW()
	{
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $this->uri->segment(2)])->num_rows() + 30;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN PINDAH WNI';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();
		$data['getkk'] = $this->model_global->get_data('t_penduduk', ['kk' => $this->session->userdata('kk')])->result();
		$data['datakk'] = $this->model_global->get_data('t_penduduk')->result();

		$data['view'] = 'surat/jenis/SKPDW';

		$this->load->view('lyt/index', $data);
	}

	public function reviewSKPDW()
	{
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['no_skpdw'] = $this->input->post('no_skpdw');

		#Data Pemohon
		$no = $this->model_global->get_data('t_surat', ['id_jenissurat' => $data['jenis_surat']])->num_rows() + 30;
		$data['no_surat'] = str_pad($no, 3, 0, STR_PAD_LEFT);
		$data['title'] = 'SURAT KETERANGAN PINDAH WNI';
		$data['setting'] = $this->model_global->get_data('t_setting')->row_array();
		$data['penduduk'] =  $this->model_global->get_data('t_penduduk');
		$data['pemohon'] = $this->model_global->get_data('t_penduduk', ['nik' => $_SESSION['nik']])->row_array();

		$data['petugas'] 						= $this->input->post('petugas');

		$data['kepala_kk'] 						= $this->input->post('kepala_kk');
		$data['kk'] 						= $this->input->post('kk');
		$data['alamat'] 					= $this->input->post('alamat');
		$data['rt'] 						= $this->input->post('rt');
		$data['rw']							= $this->input->post('rw');
		$data['dusun'] 						= $this->input->post('dusun');
		$data['desa'] 						= $this->input->post('desa');
		$data['kab'] 						= $this->input->post('kab');
		$data['kec'] 						= $this->input->post('kec');
		$data['provinsi'] 					= $this->input->post('provinsi');
		$data['kode_pos'] 					= $this->input->post('kode_pos');
		$data['telepon']					= $this->input->post('telepon');
		$data['nik']						= $this->input->post('nik');
		$data['nama'] 						= $this->input->post('nama');

		$data['status_kk_pindah_id'] 		= $this->input->post('status_kk_pindah_id');
		$data['kk_tujuan'] 					= $this->input->post('kk_tujuan');
		$data['nik_kepala'] 				= $this->input->post('nik_kepala');
		$data['nama_kepala'] 				= $this->input->post('nama_kepala');
		$data['tgl_kedatangan'] 				= $this->input->post('tgl_kedatangan');
		

		$data['alamat_tujuan']				= $this->input->post('alamat_tujuan');
		$data['rt_tujuan'] 					= $this->input->post('rt_tujuan');
		$data['rw_tujuan'] 					= $this->input->post('rw_tujuan');
		$data['dusun_tujuan'] 				= $this->input->post('dusun_tujuan');
		$data['desa_tujuan'] 				= $this->input->post('desa_tujuan');
		$data['kec_tujuan'] 				= $this->input->post('kec_tujuan');
		$data['kab_tujuan'] 				= $this->input->post('kab_tujuan');
		$data['provinsi_tujuan'] 			= $this->input->post('provinsi_tujuan');
		
		// $data['jumlah_ikut'] 				= implode(', ', $this->input->post('jumlah_ikut'));
		// $data['ktp_berlaku'] 				= "SEUMUR HIDUP";
		$data['shdk'] 						= "";


		if(!empty($this->input->post('nik_penduduk')))
			{
			foreach ( $this->input->post('nik_penduduk') as $jml_ikut)
				{
					$nik_pengikut[]= $jml_ikut; 
				}
				foreach ( $this->input->post('ktp_berlaku') as $kt)
				{
					$ktp[]= $kt;
				}
				foreach ( $this->input->post('nama_penduduk') as $np)
				{
					$nama_penduduk[]= $np;
				}
			}

			$data['nik_pengikut'] = $nik_pengikut; 
			$data['nama_pengikut'] = $nama_penduduk; 
			$data['ktp_berlaku'] = $ktp;

			// var_dump($data['nik_pengikut']);
			// var_dump($data['nama_pengikut']);
			// var_dump($data['ktp_berlaku']);
			// die;
			
		
		
		$data['jenis_surat'] = $this->input->post('jenis_surat');
		$data['tgl_surat'] = $this->input->post('tgl_surat');

		$this->load->view('surat/review/SKPDW', $data);

		if ($this->input->post('param')) {
			#MPDF
			
			$this->_mpdf_print2($data, 'SKPDW-' . $_SESSION['nik'] . '-' . $data['tgl_surat'], $data['jenis_surat']);

			$dataPost['id_jenissurat'] = $data['jenis_surat'];
			$dataPost['no_surat'] = $data['no_skpdw'];
			$dataPost['isi_surat'] = 'SKPDW-' . $_SESSION['nik'] . '-' . $data['tgl_surat'] . '.pdf';
			$dataPost['nik'] = $_SESSION['nik'];
			$dataPost['tgl_dibuat'] = $data['tgl_surat'];
			$query = $this->model_global->simpan('t_surat', $dataPost);

			if ($query) {
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
			} else {
				$json['pesan'] = 'Gagal tambah data';
				$json['status'] = false;
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($json));
		} else {
			// $this->model_global->ntf_swal("error", 'Tidak ada NIK');
		}
	}

	public function _mpdf_print(array $data = [], string $filename = null, string $stylesheet = null, string $jenis_surat = null)
	{
		$filename = (FCPATH . 'public/berkas/riwayat_surat/' . $filename . '.pdf');
		$mpdf = new \Mpdf\Mpdf([
			'default_font_size' => 11,
			'default_font' => 'timesnewroman'
		]);

		$html = $this->load->view('surat/review/' . $jenis_surat, $data, true);
		$stylesheet = file_get_contents(APPPATH . 'views/lyt/' . $stylesheet);

		$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
		$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
		// $mpdf->WriteHTML($html);
		$mpdf->Output($filename, 'F');
	}

	public function _mpdf_print2(array $data = [], string $filename = null,string $jenis_surat = null)
	{
		$filename = (FCPATH . 'public/berkas/riwayat_surat/' . $filename . '.pdf');
		$mpdf = new \Mpdf\Mpdf([
			'default_font_size' => 11,
			'default_font' => 'timesnewroman'
		]);

		$html = $this->load->view('surat/review/' . $jenis_surat, $data, true);

		$mpdf->WriteHTML($html);
		// $mpdf->WriteHTML($html);
		$mpdf->Output($filename, 'F');
	}
}

/* End of file Surat.php */

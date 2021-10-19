<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
	}


	public function index()
	{
		$data['title'] = 'Halaman Operator';
		$data['view'] = 'operator/index';

		$this->load->view('lyt/index', $data);
	}

	public function penduduk()
	{
		$data['title'] = 'Halaman Data Penduduk';
		$data['view'] = 'operator/penduduk';

		$this->load->view('lyt/index', $data);
	}

	public function dt_penduduk()
	{

		$this->load->model('m_dt_penduduk');
		$i = 1;
		$list   = $this->m_dt_penduduk->get_datatables();
		$data = array();
		foreach ($list as $key) {
			$row      = array();
			$row["no_kk"]    = $key->kk;
			$row["nik"]    = $key->nik;
			$row["nama"]    = $key->nama;
			$row["alamat"]    = $key->blok . ' RT/RW : ' . $key->rt . '/' . $key->rw;
			$row["ttl"]    = $key->tmp_lahir . ', ' . tgl_default($key->tgl_lahir);
			$row["jk"]    = ($key->jk == 'L') ? "Laki-laki" : "Perempuan";
			$row["gol_darah"]    = $key->gol_darah;
			$row["agama"]    = $key->agama;
			$row["status"]    = $key->status;
			$row["pendidikan"]    = $key->pendidikan;
			$row["pekerjaan"]    = $key->pekerjaan;
			$row["kepala_keluarga"]    = $key->kepala_keluarga;
			$row["nama_ayah"]    = $key->nama_ayah;
			$row["nama_ibu"]    = $key->agama;
			$row["aksi"] 	  = '<a onclick="edit_data(' . $key->id_penduduk . ')" class="btn btn-sm btn-primary" href="#"><i class="fas fa-pencil-alt"></i></a> <a onclick="hapus_data(' . $key->id_penduduk . ')" href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>';
			$data[]   = $row;
		}
		$output = array(
			"draw"          => $_POST['draw'],
			"recordsTotal"  => $this->m_dt_penduduk->count_all(),
			"recordsFiltered" => $this->m_dt_penduduk->count_filtered(),
			"data"          => $data,
		);

		echo json_encode($output);
	}

	public function simpan_penduduk()
	{


		$no_kk = $this->input->post('kk', true);
		$nik = $this->input->post('nik', true);
		$nama = $this->input->post('nama', true);
		$tmp_lahir = $this->input->post('tmp_lahir', true);
		$tgl_lahir = $this->input->post('tgl_lahir', true);
		$jk = $this->input->post('jk', true);
		$blok = $this->input->post('blok', true);
		$rt = $this->input->post('rt', true);
		$rw = $this->input->post('rw', true);
		$gol_darah = $this->input->post('gol_darah', true);
		$agama = $this->input->post('agama', true);
		$status = $this->input->post('status_kawin', true);
		$pekerjaan = $this->input->post('pekerjaan', true);
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir', true);
		$kepala_keluarga = $this->input->post('kepala_keluarga', true);
		$nama_ayah = $this->input->post('nama_ayah', true);
		$nama_ibu = $this->input->post('nama_ibu', true);

		if (empty($this->input->post('id_penduduk'))) {
			$data =
				[
					'kk' => $no_kk,
					'nik' => $nik,
					'nama' => $nama,
					'tmp_lahir' => $tmp_lahir,
					'tgl_lahir' => $tgl_lahir,
					'jk' => $jk,
					'blok' => $blok,
					'rt' => $rt,
					'rw' => $rw,
					'gol_darah' => $gol_darah,
					'agama' => $agama,
					'status' => $status,
					'pekerjaan' => $pekerjaan,
					'pendidikan' => $pendidikan_terakhir,
					'kepala_keluarga' => $kepala_keluarga,
					'nama_ayah' => $nama_ayah,
					'nama_ibu' => $nama_ibu,
				];
			$query = $this->model_global->simpan('t_penduduk', $data);
		} else {
			$data =
				[
					'kk' => $no_kk,
					'nik' => $nik,
					'nama' => $nama,
					'tmp_lahir' => $tmp_lahir,
					'tgl_lahir' => $tgl_lahir,
					'jk' => $jk,
					'blok' => $blok,
					'rt' => $rt,
					'rw' => $rw,
					'gol_darah' => $gol_darah,
					'agama' => $agama,
					'status' => $status,
					'pekerjaan' => $pekerjaan,
					'pendidikan' => $pendidikan_terakhir,
					'kepala_keluarga' => $kepala_keluarga,
					'nama_ayah' => $nama_ayah,
					'nama_ibu' => $nama_ibu,
				];
			$query = $this->model_global->update_data('t_penduduk', $data, ['id_penduduk' => $this->input->post('id_penduduk')]);
		}
		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil simpan data penduduk';
		} else {
			$json['status'] = false;
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function hapus_penduduk($id_penduduk)
	{
		$query = $this->model_global->hapus('t_penduduk', ['id_penduduk' => $id_penduduk]);
		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil hapus data penduduk';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal hapus data penduduk';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function get_penduduk_by_id($id_penduduk)
	{
		$query = $this->model_global->get_data('t_penduduk', ['id_penduduk' => $id_penduduk]);
		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil ambil data penduduk';
			$json['data'] = $query->row();
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal ambil data penduduk';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function pengaturan()
	{

		$data['title'] = 'Halaman Pengaturan';
		$data['pengaturan'] = $this->model_global->get_data('t_setting')->row();
		$data['view'] = 'operator/pengaturan';

		$this->load->view('lyt/index', $data);
	}

	public function update_kades()
	{
		$nama_kades = $this->input->post('nama_kades');

		$data = ['nama_kades' => $nama_kades];

		$query = $this->model_global->update_data('t_setting', $data, ['id_setting' => $this->input->post('id_setting')]);

		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil update data';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal update data';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function update_camat()
	{
		$nama_camat = $this->input->post('nama_camat');

		$data = ['nama_camat' => $nama_camat];

		$query = $this->model_global->update_data('t_setting', $data, ['id_setting' => $this->input->post('id_setting')]);

		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil update data';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal update data';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
	public function update_camatnip()
	{
		$nip_camat = $this->input->post('nip_camat');

		$data = ['nip_camat' => $nip_camat];

		$query = $this->model_global->update_data('t_setting', $data, ['id_setting' => $this->input->post('id_setting')]);

		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil update data';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal update data';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function update_kapolsek()
	{
		$nama_kapolsek = $this->input->post('nama_kapolsek');

		$data = ['nama_kapolsek' => $nama_kapolsek];

		$query = $this->model_global->update_data('t_setting', $data, ['id_setting' => $this->input->post('id_setting')]);

		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil update data';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal update data';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function cek_pwd()
	{
		$pwd = $this->input->post('password_old');
		$cek_user = $this->model_global->get_data('t_user', ['username' => $_SESSION['nik']])->row();
		$cek_pwd = password_verify($pwd, $cek_user->password);
		if ($cek_pwd) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil ambil data';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal ambil data';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function update_pwd()
	{
		$pwd = password_hash($this->input->post("password_conf"), PASSWORD_BCRYPT);
		$data = ['password' => $pwd];
		$query = $this->model_global->update_data('t_user', $data, ['username' => $_SESSION['nik']]);
		if ($query) {
			$json['status'] = true;
			$json['pesan'] = 'Berhasil ubah password';
		} else {
			$json['status'] = false;
			$json['pesan'] = 'Gagal ubah password';
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function dokumen()
	{
		
		$this->load->model('m_dt_dokumen');
		$data['title'] = 'Halaman Data Dokumen';
		$data['view'] = 'operator/dokumen';
		$data['surat'] = $this->m_dt_dokumen->getSurat();

		$this->load->view('lyt/index', $data);
	}

	public function uploadarsip()
	{   
		if (isset($_POST['submit']))
		{
			$config['upload_path'] = './public/berkas/arsip_surat';
			$config['allowed_types']        = 'pdf';
			$config['overwrite'] = TRUE;

			$this->load->library('upload', $config);     
			
			#upload arsip
			if (!empty($_FILES['arsip']['name'])) {
				$config['file_name'] = $this->input->post('id_surat')."-". $this->input->post('nik');
				$this->upload->initialize($config);
				
				$this->upload->do_upload('arsip');
				$dataarsip_surat = $this->upload->data();
				$arsip_surat = $dataarsip_surat['file_name'];   
			}
			#update database
			if (isset($_POST['up'])) {

				$this->db->set('arsip_surat', $arsip_surat);
				$this->db->where('id_surat', $this->input->post('id_surat'));
				$this->db->update('t_surat');
				$json['pesan'] = 'Berhasil tambah data';
				$json['status'] = true;
				redirect('operator/dokumen');
				
			}
		else {
			$json['pesan'] = 'Gagal tambah data';
			$json['status'] = false;
			redirect('operator/dokumen');
				}   
				
		}
	}



	public function dt_dokumen()
	{

		$this->load->model('m_dt_dokumen');

		$list   = $this->m_dt_dokumen->get_datatables();
		$data   = array();
		$no = 1;
		foreach ($list as $key) {
			$row = array();
			$row['no'] = $no++;
			$row['jenis_surat'] = $key->nama_surat;
			$row['nik'] = $key->nik;
			$row['file_surat'] = $key->arsip_surat;
			$row['tgl_dibuat'] = tgl_default($key->tgl_dibuat);
			$data[] = $row;
		}
		$output = array(
			"draw"          => $_POST['draw'],
			"recordsTotal"  => $this->m_dt_dokumen->count_all(),
			"recordsFiltered" => $this->m_dt_dokumen->count_filtered(),
			"data"          => $data,
		);

		echo json_encode($output);
	}

	public function simpan_dokumen()
	{
		$data = [
			'id_jenissurat' => $this->input->post('id_jenissurat'),
			'url' => $this->_simpan_doc(),
		];

		$query = $this->model_global->simpan('ref_surat', $data);
		if ($query) {
			$this->model_global->ntf_swal('success', 'Berhasil tambah data');
		} else {
			$this->model_global->ntf_swal('error', 'Gagal tambah data');
		}

		redirect('operator/dokumen');
	}

	private function _simpan_doc()
	{
		if (!empty($_FILES['url']['name'])) {
			$config['upload_path'] = './public/ref_surat';
			$config['allowed_types'] = 'pdf';
			$config['encrypt_name'] = true;

			$this->upload->initialize($config);


			if ($this->upload->do_upload('url')) {
				$data = $this->upload->data();
				$file = 'public/ref_surat/' . $data['file_name'];
				return $file;
			} else {
				echo 'gagal';
			}
		}
	}

	public function ubah_file()
	{
		$id_ref_surat = $this->input->post('id_ref_surat');

		$cek_file = $this->model_global->get_data('ref_surat', ['id_ref_surat' => $id_ref_surat])->row();

		if (!empty($cek_file->url)) {
			$file = './' . $cek_file->url;
			if (is_file($file)) {
				unlink($file);
			}
		}

		$data = [
			'id_jenissurat' => $cek_file->id_jenissurat,
			'url' => $this->_simpan_doc()
		];

		$query = $this->model_global->update_data('ref_surat', $data, ['id_ref_surat' => $id_ref_surat]);
		if ($query) {
			$this->model_global->ntf_swal('success', 'Berhasil ubah file surat');
		} else {
			$this->model_global->ntf_swal('success', 'Berhasil ubah file surat');
		}
		redirect('operator/dokumen');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}

	public function ganti_bg()
	{


		if (!empty($_FILES['image_bg']['name'])) {

			$query_cek = $this->model_global->get_data('t_setting')->row();

			$config['upload_path'] = './public/vendor/assets/images/login-images/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = true;


			$this->upload->initialize($config);
			$gambar = './public/vendor/assets/images/login-images/' . $query_cek->image_bg;
			if (is_file($gambar)) {
				unlink($gambar);
			}

			if ($this->upload->do_upload('image_bg')) {

				$img = $this->upload->data();
				$gambar = $img['file_name'];

				$data['image_bg'] = $gambar;

				$query = $this->model_global->update_data('t_setting', $data, ['id_setting' => $query_cek->id_setting]);
				if ($query) {
					// $this->model_global->ntf_swal('success', 'Berhasil ubah background :)');
				} else {
					$this->model_global->ntf_swal('error', 'Gagal ubah background, file tidak terupload :(');
				}
			} else {
				$this->model_global->ntf_swal('error', "Gagal ubah background :(");
			}


			redirect('operator');
		}
	}
}

/* End of file Operator.php */

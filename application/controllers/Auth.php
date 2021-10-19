<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	

	public function index()
	{
		$data['title'] = 'Halaman Login';
		$data['view'] = 'auth/index';

		$this->load->view('lyt/index', $data);
	}

	public function cek_nik()
	{
		$nik = $this->input->post('nik', true);

		$cek_nik = $this->model_global->get_data('t_penduduk', ['nik' => $nik])->row();
		if ($cek_nik) {
			$data['data_nik'] = $cek_nik;
			$data['pesan'] = 'Berhasil ambil data';
			$data['status'] = true;
		} else {
			$data['pesan'] = 'Gagal ambil data';
			$data['status'] = false;
		};
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function login()
	{
		$data['title'] = 'Login Admin';
		$data['view'] = 'auth/login';

		$this->load->view('lyt/index', $data);
	}

	public function cek_login()
	{
		$user = $this->input->post('username', true);
		$pass = $this->input->post('password', true);

		$cek_user = $this->model_global->get_data('t_user', ['username' => $user])->row();
		if ($cek_user) {

			$_SESSION['nik'] = $cek_user->username;
			$json['pesan'] = 'a';
			$json['status'] = true;
		} else {
			$json['pesan'] = 'Password salah';
			$json['status'] = false;
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	public function logout()
	{
		//hapus semua sesssion
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function surat()
	{
		$nik = $this->input->post('nik');
        $penduduk = $this->db->get_where('t_penduduk', ['nik' => $nik])->row_array();

		$data = [
			'nik' => $penduduk['nik'],
			'kk' => $penduduk['kk']
		];
		$this->session->set_userdata($data);
		redirect('surat');
	}
}

/* End of file Auth.php */

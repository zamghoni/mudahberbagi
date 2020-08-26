<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	private $folderview = "frontend/moduser/";
	private $redirect 	= "frontend";
	private $template 	= "frontend/template/";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_beranda');
		$this->load->model('M_berita');
		$this->load->model('M_user');
		if ($this->session->userdata('IsDonatur') != 1) {
			redirect('logindonatur', 'refresh');
		}
	}

	public function index()
	{
		redirect('user/profile');
	}

	public function profil()
	{
		$data = array(
			'judul' => 'Profil',
			'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'sub' => 'My Account'
		);

		$this->load->view($this->template . 'header', $data);
		$this->load->view($this->folderview . 'profile', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function uploadBukti($id_transaksi)
	{
		$data = array(
			'judul'	=> "Upload Bukti Donasi",
			'transaksi' =>  $this->db->get_where('transaksi', array('id_transaksi' => $id_transaksi))->row_array(),
			'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'sub'	=> "Upload Bukti Pembayaran"
		);
		$this->load->view($this->template . 'header', $data);
		$this->load->view($this->folderview . 'uploadBukti', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function saveBukti($id)
	{
		$config['upload_path'] = './assets/bukti_transaksi/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name'] =  date('Ymd') . '-' . $id;
		$config['overwrite']    = true;
		$config['max_size']    = '10000';
		//$config['max_width']  = '2500';
		//$config['max_height']  = '1800';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('bukti_pembayaran')) {
			$image = $this->upload->data()['file_name'];
			$data = array(
				'bukti_pembayaran' => $image,
				'status_pembayaran' => '2'
			);
			$this->M_user->saveBukti($id, $data);
			echo "<script>alert('Terimakasih Sudah Donasi Disini, Semoga Bermanfaat dan Berkah Selalu');</script>";
			redirect('user/donasi', 'refresh');
		} else {
			echo $this->upload->display_errors();
		}
	}
	public function donasi()
	{
		$data = array(
			'judul'	=> "Daftar Donasi Anda",
			'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'donasi' => $this->M_user->donasi(),
			'sub'	=> "My Donation"
		);
		$this->load->view('frontend/template/header', $data);
		$this->load->view('frontend/moduser/donasi', $data);
		$this->load->view('frontend/template/footer', $data);
	}
	public function edit()
	{
		$data = array(
			'judul'	=> "Ubah Profile Anda",
			'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'sub'	=> "Edit Profile"
		);
		$this->load->view('frontend/template/header', $data);
		$this->load->view('frontend/moduser/menu', $data);
		$this->load->view('frontend/moduser/edit', $data);
	}

	public function simpan()
	{
		$id = $this->session->userdata('kode_donatur');
		$config['upload_path'] = './assets/img_donatur/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['overwrite']    = true;
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('img_donatur')) {
			$img = $this->upload->data();
			$data = array(
				'nama_donatur' => $this->input->post('nama_donatur'),
				'hp_donatur' => $this->input->post('hp_donatur'),
				'email_donatur' => $this->input->post('email_donatur'),
				'img_donatur' => $img['file_name']
			);
		} else {
			$data = array(
				'nama_donatur' => $this->input->post('nama_donatur'),
				'hp_donatur' => $this->input->post('hp_donatur'),
				'email_donatur' => $this->input->post('email_donatur')
			);
		}
		$this->M_user->save_profile($id, $data);
		redirect('user/profil');
	}

	public function transaksi($id_transaksi)
	{
		$data =  array(
			'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'transaksi' => $this->M_user->GetTransaksi($id_transaksi),
		);

		$this->load->view($this->template . 'header', $data);
		$this->load->view('frontend/moddonasi/transaksi', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function ubahPassword()
	{
		$this->load->library('form_validation');
		$data = array(
			'judul' => 'Ubah Password',
			'data' =>  $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'sub' => 'Ubah Password'
		);
		$donatur = $this->db->get_where('donatur', ['email_donatur' => $this->session->userdata('email_donatur')])->row_array();

		$this->form_validation->set_rules('password_lama', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('password_baru1', 'New Password', 'required|trim|min_length[8]', [
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password_baru2', 'Confirm New Password', 'required|trim|min_length[8]|matches[password_baru1]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('frontend/template/header', $data);
			$this->load->view('frontend/moduser/ubahPassword', $data);
			$this->load->view('frontend/template/footer', $data);
		} else {
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru1');

			if (md5($password_lama) != $donatur['pswd_donatur']) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password ;lama salah!</div>');
				redirect('user/ubahPassword');
			} else {
				if ($password_lama == $password_baru) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama dan baru tidak boleh sama!</div>');
					redirect('user/ubahPassword');
				} else {
					// password sudah ok
					$password_hash = md5($password_baru);

					$this->db->set('pswd_donatur', $password_hash);
					$this->db->where('email_donatur', $this->session->userdata('email_donatur'));
					$this->db->update('donatur');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password diubah!</div>');
					redirect('user/ubahPassword');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda', 'refresh');
	}
}

/* End of file Portal.php */
/* Location: ./application/controllers/Portal.php */

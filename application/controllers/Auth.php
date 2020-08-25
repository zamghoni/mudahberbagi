<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	private $folder	  	= "admin/";
	private $page 		= "Data Admin";
	private $redirect 	= "admin";
	private $template 	= "";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_auth');
		error_reporting(0);
	}

	public function index()
	{
		if ($this->session->userdata('IsAdmin') == 1) {
			redirect('beranda_admin', 'refresh');
		}
		$this->load->view($this->folder . 'login');
	}

	public function login()
	{
		$kd 	= $this->input->POST('kd_admin');
		$pwd	= md5($this->input->POST('pswd_admin'));
		$data = $this->M_auth->CekLogin('admin', 'kd_admin', $kd);
		//jika login
		if ($data['pswd_admin'] == $pwd) {

			$array = array(
				'kd_admin' 	=> $data['kd_admin'],
				'nama_admin' 	=> $data['nama_admin'],
				'img_admin' 	=> $data['img_admin'],
				'IsAdmin'		=> 1
			);
			$this->session->set_userdata($array);
			redirect('beranda_admin', 'refresh');
		} else {
			echo "<script>alert('Username atau Password salah!');</script>";
			redirect('auth', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('IsAdmin');;
		redirect('auth', 'refresh');
	}
}

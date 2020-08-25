<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logindonatur extends CI_Controller
{

	private $folder	  	= "frontend/";
	private $page 		= "Data Donatur";
	private $redirect 	= "donatur";
	private $template 	= "frontend/template/";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_logindonatur');
		error_reporting(0);
	}

	public function index()
	{
		if ($this->session->userdata('IsDonatur') == 1) {
			redirect('beranda', 'refresh');
		}
		$this->session->sess_destroy();
		$data = array(
			'page'		=> $this->page,
			'subpage' 	=> 'Read',
			'data' 		=> ''
		);
		$this->load->view($this->template . 'header', $data);
		$this->load->view($this->folder . 'login', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function login()
	{
		$kd 	= $this->input->post('email_donatur');
		$pwd	= md5($this->input->post('pswd_donatur'));
		$data = $this->M_logindonatur->CekLogin('donatur', 'email_donatur', $kd);
		//jika login
		if ($data['pswd_donatur'] == $pwd) {
			$array = array(
				'email_donatur' 	=> $data['email_donatur'],
				'nama_donatur' 	=> $data['nama_donatur'],
				'img_donatur' 	=> $data['img_donatur'],
				'kode_donatur' => $data['kode_donatur'],
				'IsDonatur'	 => 1
			);
			$this->session->set_userdata($array);
			echo "<script>alert('Berhasil Login');</script>";
			redirect('beranda');
		} else {
			echo "<script>alert('Email atau Password salah!');</script>";
			redirect('logindonatur', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda', 'refresh');
	}
}

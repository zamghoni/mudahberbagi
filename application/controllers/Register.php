<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	private $folder	  	= "frontend/";
	private $page 		= "Daftar Donatur";
	private $redirect 	= "donatur";
	private $template 	= "frontend/template/";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_register');
		error_reporting(0);
	}

	public function index()
	{
		$data = array(
			'page'		=> $this->page,
			'subpage' 	=> 'Read',
			'data' 		=> ''
		);
		$this->load->view($this->template . 'header', $data);
		$this->load->view($this->folder . 'register', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function simpan()
	{
		$data = array(
			'email_donatur' => $this->input->post('email_donatur'),
			'nama_donatur' 	=> $this->input->post('nama_donatur'),
			'pswd_donatur' =>  md5($this->input->post('pswd_donatur')),
			'hp_donatur' =>  $this->input->post('hp_donatur'),
			'img_donatur' 	=> 'default.png'
		);
		$this->M_register->save($data);
		redirect('logindonatur', 'refresh');
	}

	public function berhasil()
	{

		$this->load->view('frontend/berhasil', 'refresh');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('logindonatur', 'refresh');
	}
}

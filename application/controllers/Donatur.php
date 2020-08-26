<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donatur extends CI_Controller {
	private $folderview  	= "admin/moddonatur/";
	private $redirect 	= "Donatur";
	private $template 	= "admin/template/";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_donatur');
		//Cek Login
		IsAdmin();
	}

	public function index(){
	if ($this->input->get('search')) {
		$q = $this->M_donatur->search($this->input->get('search'));
	}else{
		$q = $this->M_donatur->GetAll();
	}
	$data = array(
		'judul'	=> "DATA Donatur",
		'sub'	=> "Lihat Donatur",
		'data'=> $q
	);
	$this->load->view($this->template.'head', $data);
	$this->load->view($this->folderview.'read', $data);
	$this->load->view($this->template.'footer', $data);
	}

	public function create(){
		$data = array(
			'judul'	=> "DATA Donatur",
			'sub'	=> "Tambah Donatur",
			'data' 	=> ''
			);
		$this->load->view($this->template.'head', $data);
		$this->load->view($this->folderview.'create', $data);
		$this->load->view($this->template.'footer', $data);
	}

	public function save(){
		$data = array(
      'kode_donatur'=> $this->input->post('kode_donatur'),
			'nama_donatur'=> $this->input->post('nama_donatur'),
      'pswd_donatur'=> md5($this->input->post('pswd_donatur')),
      'hp_donatur'=> $this->input->post('hp_donatur'),
      'email_donatur'=> $this->input->post('email_donatur'),
      'img_donatur'=> $this->input->post('img_donatur')
			);
		$this->M_donatur->save($data);
		redirect($this->redirect,'refresh');
	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Donatur",
			'sub'	=> "Ubah Donatur",
			'data' 	=> $this->M_donatur->edit($kd)
			);
		$this->load->view($this->template.'head', $data);
		$this->load->view($this->folderview.'edit', $data);
		$this->load->view($this->template.'footer', $data);
	}

	public function update(){
		$kd = $this->uri->segment(3);
		$data = array(
      'kode_donatur'=> $this->input->post('kode_donatur'),
			'nama_donatur'=> $this->input->post('nama_donatur'),
      'hp_donatur'=> $this->input->post('hp_donatur'),
      'email_donatur'=> $this->input->post('email_donatur'),
			);
			if ($this->input->post('pswd_donatur') != null) {
				$data['pswd_donatur'] = md5($this->input->post('pswd_donatur'));
			} else if ($this->input->post('img_donatur') != null) {
				$data['img_donatur'] = $this->input->post('img_donatur');
			}
		$this->M_donatur->update($kd,$data);
		redirect($this->redirect,'refresh');
	}

	public function delete(){
		$kode_donatur = $this->uri->segment(3);
		$data = array('kode_donatur' => $kode_donatur);
		$this->M_donatur->delete($data);
		redirect($this->redirect,'refresh');
	}

}

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

	public function save()
	{
		//img_donatur
		$name_img_donatur = $_FILES['img_donatur']['name'];
		$type_img_donatur = $_FILES['img_donatur']['type'];
		$tmp_img_donatur  = $_FILES['img_donatur']['tmp_name'];
		//upload img
		if (!empty($tmp_img_donatur)) {
			if ($type_img_donatur != "image/jpeg" and $type_img_donatur != "image/jpg" and $type_img_donatur != "image/png") {
				echo "<script>alert('format gambar jpeg|jpg|png');</script>";
				redirect($this->redirect, 'refresh');
			} else {
				$img_donatur = UploadImg($_FILES['img_donatur'], './assets/img_donatur/', 'Donatur', 800);
				$data = array(
					'kode_donatur'=> $this->input->post('kode_donatur'),
					'nama_donatur'=> $this->input->post('nama_donatur'),
		      'pswd_donatur'=> md5($this->input->post('pswd_donatur')),
		      'hp_donatur'=> $this->input->post('hp_donatur'),
		      'email_donatur'=> $this->input->post('email_donatur'),
					'img_donatur' => 	$img_donatur
				);
				$this->M_donatur->save($data);
				redirect($this->redirect, 'refresh');
			}
		}
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

	public function update()
	{
		$kd = $this->uri->segment(3);
		//img_donatur
		$name_img_donatur = $_FILES['img_donatur']['name'];
		$type_img_donatur = $_FILES['img_donatur']['type'];
		$tmp_img_donatur  = $_FILES['img_donatur']['tmp_name'];
		//upload img
		if (!empty($tmp_img_donatur)) {
			if ($type_img_donatur != "image/jpeg" and $type_img_donatur != "image/jpg") {
				echo "<script>alert('format gambar jpeg|jpg|png');</script>";
				redirect($this->redirect, 'refresh');
			} else {
				$img_donatur = UploadImg($_FILES['img_donatur'], './assets/img_donatur/', 'Donatur', 800);
				$data = array(
					'kode_donatur'=> $this->input->post('kode_donatur'),
					'nama_donatur'=> $this->input->post('nama_donatur'),
		      'hp_donatur'=> $this->input->post('hp_donatur'),
		      'email_donatur'=> $this->input->post('email_donatur'),
					'img_donatur' => 	$img_donatur
				);
				unlink("./assets/img_donatur/".$this->input->post('old_img_donatur'));
			}
		} else {
			$data = array(
				'kode_donatur'=> $this->input->post('kode_donatur'),
				'nama_donatur'=> $this->input->post('nama_donatur'),
				'hp_donatur'=> $this->input->post('hp_donatur'),
				'email_donatur'=> $this->input->post('email_donatur'),
			);
		}
		if ($this->input->post('pswd_donatur') != null) {
			$data['pswd_donatur'] = md5($this->input->post('pswd_donatur'));
		}
		$this->M_donatur->update($kd, $data);
		redirect($this->redirect, 'refresh');
	}


	public function delete(){
		$kode_donatur = $this->uri->segment(3);
		$param = $this->M_donatur->GetAll($kode_donatur)->row();
		if ($param->img_donatur != null) {
			unlink("./assets/img_donatur/".$param->img_donatur);
		}
		$data = array('kode_donatur' => $kode_donatur);
		$this->M_donatur->delete($data);
		redirect($this->redirect,'refresh');
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	private $folderview  	= "admin/modadmin/";
	private $redirect 	= "admin";
	private $template 	= "admin/template/";

	public function __construct(){

		parent::__construct();
		//Load model
		$this->load->model('M_admin');
		//Cek Login
		IsAdmin();
	}

	public function index(){
	if ($this->input->get('search')) {
		$q = $this->M_admin->search($this->input->get('search'));
	}else{
		$q = $this->M_admin->GetAll();
	}
	$data = array(
		'judul'	=> "DATA Admin",
		'sub'	=> "Lihat Admin",
		'data'=> $q
	);
	$this->load->view($this->template.'head', $data);
	$this->load->view($this->folderview.'read', $data);
	$this->load->view($this->template.'footer', $data);

	}

	public function create(){
		$data = array(
			'judul'	=> "DATA Admin",
			'sub'	=> "Tambah Admin",
			'data' 	=> ''
			);
		$this->load->view($this->template.'head', $data);
		$this->load->view($this->folderview.'create', $data);
		$this->load->view($this->template.'footer', $data);
	}

	public function save(){
		$data = array(
			'kd_admin'=> $this->input->post('kd_admin'),
			'nama_admin'=> $this->input->post('nama_admin'),
			'email_admin'=> $this->input->post('email_admin'),
			'hp_admin'=> $this->input->post('hp_admin'),
			'img_admin'=>'0000_00_00.jpg',
			'pswd_admin'=> md5($this->input->post('pswd_admin'))
		);
		$this->M_admin->save($data);
		$this->session->set_flashdata('success', 'Data berhasil disimpan');
		redirect($this->redirect,'refresh');

	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Admin",
			'sub'	=> "Ubah Admin",
			'data' 	=> $this->M_admin->edit($kd)
			);
		$this->load->view($this->template.'head', $data);
		$this->load->view($this->folderview.'edit', $data);
		$this->load->view($this->template.'footer', $data);
	}

	public function update(){
		$kd = $this->uri->segment(3);
		//img_admin
		$name_imgadmin = $_FILES['img_admin']['name'];
		$type_imgadmin = $_FILES['img_admin']['type'];
		$tmp_imgadmin  = $_FILES['img_admin']['tmp_name'];
		//upload img
		if (!empty($tmp_imgadmin)){
			if ($type_imgadmin != "image/jpeg" AND $type_imgadmin != "image/jpg"){
		      echo "<script>alert('format gambar jpeg|jpg|png');</script>";
					redirect($this->redirect,'refresh');
			}
			else{
			$img_admin = UploadImg($_FILES['img_admin'],'./assets/img_admin/','admin',240);
			$data = array(
				'nama_admin'=> $this->input->post('nama_admin'),
				'email_admin'=> $this->input->post('email_admin'),
				'hp_admin'=> $this->input->post('hp_admin'),
				'img_admin'			=> $img_admin
			);
			unlink("./assets/img_admin/".$this->input->post('old_img_admin'));
		}
	}
	else{
		$data = array(
			'nama_admin'=> $this->input->post('nama_admin'),
			'email_admin'=> $this->input->post('email_admin'),
			'hp_admin'=> $this->input->post('hp_admin')
		);
	}
		$this->M_admin->update($kd,$data);
		$this->session->set_flashdata('success', 'Data berhasil diubah');
		redirect($this->redirect,'refresh');
	}

	public function delete(){
		$kd_admin = $this->uri->segment(3);
		$param = $this->M_admin->GetAll($kd_admin)->row();
		if ($param->img_admin != null) {
			unlink("./assets/img_admin/".$param->img_admin);
		}
		$data = array('kd_admin' => $kd_admin);
		$this->M_admin->delete($data);
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect($this->redirect,'refresh');
	}

	public function profile($kd)
	{
			$kd = $this->uri->segment(3);
			$data = array(
				'judul'	=> "DATA Admin",
				'sub'	=> "Profile",
				'data' 	=> $this->M_admin->profile($kd)
			);
			$this->load->view($this->template.'head', $data);
			$this->load->view($this->folderview.'profile', $data);
			$this->load->view($this->template.'footer', $data);
	}

	public function update_profile(){
		$kd = $this->uri->segment(3);
		//img_admin
		$name_imgadmin = $_FILES['img_admin']['name'];
		$type_imgadmin = $_FILES['img_admin']['type'];
		$tmp_imgadmin  = $_FILES['img_admin']['tmp_name'];
		//upload img
		if (!empty($tmp_imgadmin)){
			if ($type_imgadmin != "image/jpeg" AND $type_imgadmin != "image/jpg"){
		      echo "<script>alert('format gambar jpeg|jpg|png');</script>";
					redirect($this->redirect,'refresh');
			}
			else{
			$img_admin = UploadImg($_FILES['img_admin'],'./assets/img_admin/','admin',240);
			$data = array(
				'nama_admin'=> $this->input->post('nama_admin'),
				'email_admin'=> $this->input->post('email_admin'),
				'hp_admin'=> $this->input->post('hp_admin'),
				'img_admin'			=> $img_admin
			);
			unlink("./assets/img_admin/".$this->input->post('old_img_admin'));
		}
	}
	else{
		$data = array(
			'nama_admin'=> $this->input->post('nama_admin'),
			'email_admin'=> $this->input->post('email_admin'),
			'hp_admin'=> $this->input->post('hp_admin')
		);
	}
		$this->M_admin->update($kd,$data);
		$this->session->set_flashdata('success', 'Data berhasil diubah');
		redirect('admin/profile/'.$kd);
	}

}

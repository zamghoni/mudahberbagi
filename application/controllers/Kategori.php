<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {
	private $folderview  	= "admin/modkategori/";
	private $redirect 	= "Kategori";
	private $template 	= "admin/template/";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_kategori');
		//Cek Login
		IsAdmin();
	}

	public function index(){
	if ($this->input->get('search')) {
		$q = $this->M_kategori->search($this->input->get('search'));
	}else{
		$q = $this->M_kategori->GetAll();
	}
	$data = array(
		'judul'	=> "DATA Kategori",
		'sub'	=> "Lihat Kategori",
		'data'=> $q
	);
	$this->load->view($this->template.'head', $data);
	$this->load->view($this->folderview.'read', $data);
	$this->load->view($this->template.'footer', $data);
	}

	public function create(){
		$data = array(
			'judul'	=> "DATA Kategori",
			'sub'	=> "Tambah Kategori",
			'data' 	=> ''
			);
		$this->load->view($this->template.'head', $data);
		$this->load->view($this->folderview.'create', $data);
		$this->load->view($this->template.'footer', $data);
	}

	public function save(){
		$data = array(
			'nama_kategori'=> $this->input->post('nama_kategori')
			);
		$this->M_kategori->save($data);
		$this->session->set_flashdata('success', 'Data berhasil disimpan');
		redirect($this->redirect,'refresh');
	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Kategori",
			'sub'	=> "Ubah Kategori",
			'data' 	=> $this->M_kategori->edit($kd)
			);
		$this->load->view($this->template.'head', $data);
		$this->load->view($this->folderview.'edit', $data);
		$this->load->view($this->template.'footer', $data);
	}

	public function update(){
		$kd = $this->uri->segment(3);
		$data = array(
			'nama_kategori'=> $this->input->post('nama_kategori')
			);
		$this->M_kategori->update($kd,$data);
		$this->session->set_flashdata('success', 'Data berhasil diubah');
		redirect($this->redirect,'refresh');
	}

	public function delete(){
		$id_kategori = $this->uri->segment(3);
		$data = array('id_kategori' => $id_kategori);
		$this->M_kategori->delete($data);
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect($this->redirect,'refresh');
	}

}

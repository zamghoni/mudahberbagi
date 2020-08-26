<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller
{
	private $folderview  	= "admin/modberita/";
	private $redirect 	= "berita";
	private $template 	= "admin/template/";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_berita');
		//Cek Login
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search')) {
			$q = $this->M_berita->search($this->input->get('search'));
		} else {
			$q = $this->M_berita->GetAll();
		}
		$data = array(
			'judul'	=> "DATA Berita",
			'sub'	=> "Lihat berita",
			'data' => $q
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'read', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function create()
	{
		$this->load->model('M_kategori');
		$data = array(
			'judul'	=> "DATA Berita",
			'sub'	=> "Tambah berita",
			'row' 	=> $this->M_kategori->GetAll(),
			'data' => ''
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'create', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function save()
	{
		//img_berita
		$name_imgberita = $_FILES['img_berita']['name'];
		$type_imgberita = $_FILES['img_berita']['type'];
		$tmp_imgberita  = $_FILES['img_berita']['tmp_name'];
		//upload img
		if (!empty($tmp_imgberita)) {
			if ($type_imgberita != "image/jpeg" and $type_imgberita != "image/jpg" and $type_imgberita != "image/png") {
				echo "<script>alert('format gambar jpeg|jpg|png');</script>";
				redirect($this->redirect, 'refresh');
			} else {
				$img_berita = UploadImg($_FILES['img_berita'], './assets/img_berita/', 'berita', 800);
				$data = array(
					'judul_berita' => $this->input->post('judul_berita'),
					'id_kategori' => $this->input->post('id_kategori'),
					'st_berita' => 'Blokir',
					'isi_berita' => $this->input->post('isi_berita'),
					'tgl_berita' => date('Y-m-d'),
					'jam_berita' => date('H:i:s'),
					'kd_admin'	=> $this->session->userdata('kd_admin'),
					'img_berita' => 	$img_berita
				);
				$this->M_berita->save($data);
				redirect($this->redirect, 'refresh');
			}
		}
	}

	public function edit()
	{
		$this->load->model('M_kategori');
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Berita",
			'sub'	=> "Ubah berita",
			'row' 	=> $this->M_kategori->GetAll(),
			'data' 	=> $this->M_berita->edit($kd)
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'edit', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function update()
	{
		$kd = $this->uri->segment(3);
		//img_berita
		$name_imgberita = $_FILES['img_berita']['name'];
		$type_imgberita = $_FILES['img_berita']['type'];
		$tmp_imgberita  = $_FILES['img_berita']['tmp_name'];
		//upload img
		if (!empty($tmp_imgberita)) {
			if ($type_imgberita != "image/jpeg" and $type_imgberita != "image/jpg") {
				echo "<script>alert('format gambar jpeg|jpg|png');</script>";
				redirect($this->redirect, 'refresh');
			} else {
				$img_berita = UploadImg($_FILES['img_berita'], './assets/img_berita/', 'berita', 800);
				$data = array(
					'judul_berita' => $this->input->post('judul_berita'),
					'id_kategori' => $this->input->post('id_kategori'),
					'isi_berita' => $this->input->post('isi_berita'),
					'tgl_berita' => $this->input->post('tgl_berita'),
					'jam_berita' => $this->input->post('jam_berita'),
					'kd_admin'	=> $this->session->userdata('kd_admin'),
					'img_berita'			=> $img_berita
				);
			}
		} else {
			$data = array(
				'judul_berita' => $this->input->post('judul_berita'),
				'id_kategori' => $this->input->post('id_kategori'),
				'isi_berita' => $this->input->post('isi_berita'),
				'tgl_berita' => $this->input->post('tgl_berita'),
				'jam_berita' => $this->input->post('jam_berita'),
				'kd_admin'	=> $this->session->userdata('kd_admin'),
			);
		}
		$this->M_berita->update($kd, $data);
		redirect($this->redirect, 'refresh');
	}

	public function status()
	{
		$kd = $this->uri->segment(3);
		$data = array(
			'st_berita' => $this->uri->segment(4)
		);
		$this->M_berita->update($kd, $data);
		redirect($this->redirect, 'refresh');
	}

	public function delete()
	{
		$id_berita = $this->uri->segment(3);
		$data = array('id_berita' => $id_berita);
		$this->M_berita->delete($data);
		redirect($this->redirect, 'refresh');
	}
}

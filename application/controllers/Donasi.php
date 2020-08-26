<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Donasi extends CI_Controller
{
	private $folderview  	= "admin/moddonasi/";
	private $redirect 	= "donasi";
	private $template 	= "admin/template/";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_donasi');
		//Cek Login
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search')) {
			$q = $this->M_donasi->search($this->input->get('search'));
		} else {
			$q = $this->M_donasi->GetAll();
		}
		$data = array(
			'judul'	=> "DATA Donasi",
			'sub'	=> "Lihat Donasi",
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
			'judul'	=> "DATA Donasi",
			'sub'	=> "Tambah Donasi",
			'row' 	=> $this->M_kategori->GetAll(),
			'data' => ''
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'create', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function kontribusi($id_donasi)
	{
		$data = array(
			'judul'	=> "Kontribusi Donasi",
			'data' =>  $this->db->get_where('donasi', array('id_donasi' => $id_donasi))->row_array(),
			'user' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			'sub'	=> ""
		);
		$this->load->view('frontend/template/header', $data);
		$this->load->view('frontend/moddonasi/kontribusi', $data);
	}

	public function simpan()
	{
		$data = array(
			'judul'	=> "Tambah Donasi",
			'sub'	=> "Tambah Donasi"
		);
		$this->load->view('frontend/donasi', $data);
	}


	public function save()
	{
		//img_donasi
		$name_imgdonasi = $_FILES['img_donasi']['name'];
		$type_imgdonasi = $_FILES['img_donasi']['type'];
		$tmp_imgdonasi  = $_FILES['img_donasi']['tmp_name'];
		//upload img
		if (!empty($tmp_imgdonasi)) {
			if ($type_imgdonasi != "image/jpeg" and $type_imgdonasi != "image/jpg" and $type_imgdonasi != "image/png") {
				echo "<script>alert('format gambar jpeg|jpg|png');</script>";
				redirect($this->redirect, 'refresh');
			} else {
				$img_donasi = UploadImg($_FILES['img_donasi'], './assets/img_donasi/', 'donasi', 800);
				$data = array(
					'judul_donasi' => $this->input->post('judul_donasi'),
					'id_kategori' => $this->input->post('id_kategori'),
					'st_donasi' => 'Blokir',
					'isi_donasi' => $this->input->post('isi_donasi'),
					'tgl_donasi' => date('Y-m-d'),
					'jam_donasi' => date('H:i:s'),
					'kd_admin'	=> $this->session->userdata('kd_admin'),
					'target_donasi' => $this->input->post('target_donasi'),
					'img_donasi' => 	$img_donasi
				);
				$this->M_donasi->save($data);
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect($this->redirect, 'refresh');
			}
		}
	}

	public function edit()
	{
		$this->load->model('M_kategori');
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA Donasi",
			'sub'	=> "Ubah Donasi",
			'row' 	=> $this->M_kategori->GetAll(),
			'data' 	=> $this->M_donasi->edit($kd)
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'edit', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function update()
	{
		$kd = $this->uri->segment(3);
		//img_donasi
		$name_imgdonasi = $_FILES['img_donasi']['name'];
		$type_imgdonasi = $_FILES['img_donasi']['type'];
		$tmp_imgdonasi  = $_FILES['img_donasi']['tmp_name'];
		//upload img
		if (!empty($tmp_imgdonasi)) {
			if ($type_imgdonasi != "image/jpeg" and $type_imgdonasi != "image/jpg") {
				echo "<script>alert('format gambar jpeg|jpg|png');</script>";
				redirect($this->redirect, 'refresh');
			} else {
				$img_donasi = UploadImg($_FILES['img_donasi'], './assets/img_donasi/', 'donasi', 800);
				$data = array(
					'judul_donasi' => $this->input->post('judul_donasi'),
					'id_kategori' => $this->input->post('id_kategori'),
					'isi_donasi' => $this->input->post('isi_donasi'),
					'tgl_donasi' => $this->input->post('tgl_donasi'),
					'jam_donasi' => $this->input->post('jam_donasi'),
					'kd_admin'	=> $this->session->userdata('kd_admin'),
					'img_donasi'			=> $img_donasi
				);
			}
		} else {
			$data = array(
				'judul_donasi' => $this->input->post('judul_donasi'),
				'id_kategori' => $this->input->post('id_kategori'),
				'isi_donasi' => $this->input->post('isi_donasi'),
				'tgl_donasi' => $this->input->post('tgl_donasi'),
				'jam_donasi' => $this->input->post('jam_donasi'),
				'kd_admin'	=> $this->session->userdata('kd_admin'),
			);
		}
		$this->M_donasi->update($kd, $data);
		$this->session->set_flashdata('success', 'Data berhasil diubah');
		redirect($this->redirect, 'refresh');
	}

	public function status()
	{
		$kd = $this->uri->segment(3);
		$data = array(
			'st_donasi' => $this->uri->segment(4)
		);
		$this->M_donasi->update($kd, $data);
		redirect($this->redirect, 'refresh');
	}

	public function delete()
	{
		$id_donasi = $this->uri->segment(3);
		$data = array('id_donasi' => $id_donasi);
		$this->M_donasi->delete($data);
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect($this->redirect, 'refresh');
	}
}

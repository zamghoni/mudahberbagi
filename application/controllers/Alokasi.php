<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alokasi extends CI_Controller {
	private $folderview  	= "admin/modalokasi/";
	private $redirect 	= "alokasi";
	private $template 	= "admin/template/";

	public function __construct()
	{
		parent::__construct();
		//Load model
    $this->load->model(array('M_alokasi','M_donasi','M_donatur'));
		//Cek Login
		IsAdmin();
	}

	public function index()
	{
		$data = array(
			'judul'	=> "DATA Alokasi",
			'sub'	=> "Lihat Alokasi",
			'data' => $this->M_alokasi->get(),
			'transaksi' => $this->M_alokasi->total_donasi(),
			'target_donasi' => $this->M_donatur->CountTarget()->row_array()
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'read', $data);
		$this->load->view($this->template . 'footer', $data);
	}

  public function form()
  {
    $alokasi = new stdClass();
    $alokasi->id_alokasi= null;
    $alokasi->id_donasi = null;
    $alokasi->kd_admin = null;
    $alokasi->nama_penerima = null;
    $alokasi->total_alokasi = null;
    $alokasi->alamat_penerima = null;
    $alokasi->ket_alokasi = null;
    $alokasi->dokumentasi = null;
    $alokasi->dibuat_pada = null;
    $data = array(
      'judul' => 'DATA Alokasi',
      'sub' => 'Tambah',
      'row' => $alokasi,
      'donasi' => $this->M_donasi->GetAll(),
    );
    if ($this->form_validation->run() == FALSE) {
      $this->load->view($this->template . 'head', $data);
  		$this->load->view($this->folderview . 'form', $data);
  		$this->load->view($this->template . 'footer', $data);
    }
  }

  public function edit($id)
  {
    $query = $this->M_alokasi->get($id);
    if ($query->num_rows() > 0) {
      $alokasi = $query->row();
      $data = array(
        'judul' => 'DATA Alokasi',
        'sub' => 'Edit',
        'row' => $alokasi,
        'donasi' => $this->M_donasi->GetAll(),
      );
      $this->load->view($this->template . 'head', $data);
      $this->load->view($this->folderview . 'form', $data);
      $this->load->view($this->template . 'footer', $data);
    } else {
      $this->session->set_flashdata('error', "Data tidak ditemukan");
      redirect($this->redirect, 'refresh');
    }
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['Tambah'])) {
      if($this->M_alokasi->cek_nama($post['nama_penerima'])->num_rows() > 0){
        $this->session->set_flashdata('error', "Atas nama <b>$post[nama_penerima]</b> sudah mendapat dana alokasi, silahkan alokasikan dengan yang berbeda");
        redirect('alokasi/form');
      } else {
        $this->M_alokasi->add($post);
      }
    }else if (isset($_POST['Edit'])) {
      $this->M_alokasi->edit($post);
    }
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect($this->redirect, 'refresh');
  }

  public function del($id)
  {
    $this->M_alokasi->del($id);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
    }
    redirect($this->redirect, 'refresh');
  }
}

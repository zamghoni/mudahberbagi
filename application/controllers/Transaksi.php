<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	private $folderview  	= "admin/modtransaksi/";
	private $redirect 	= "Transaksi";
	private $template 	= "admin/template/";

	public function __construct()
	{
		parent::__construct();
		//Load model
		$this->load->model('M_transaksi');
		//Cek Login
		IsAdmin();
	}

	public function index()
	{
		if ($this->input->get('search')) {
			$q = $this->M_transaksi->search($this->input->get('search'));
		} else {
			$q = $this->M_transaksi->GetAll();
		}
		$data = array(
			'judul'	=> "DATA Transaksi",
			'sub'	=> "Lihat Transaksi",
			'data' => $q
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'read', $data);
		$this->load->view($this->template . 'footer', $data);
	}


	public function rekap()
	{

		$bulan = date('m');

		if ($this->input->get('bulan')) {
			$bulan = $this->input->get('bulan');
			$this->session->set_userdata('bulan', $bulan);
		} else {
			$bulan = $bulan;
		}

		$tahun = date('Y');
		if ($this->input->get('tahun')) {
			$tahun = $this->input->get('tahun');
			$this->session->set_userdata('tahun', $tahun);
		} else {
			$tahun = $tahun;
		}


		$q = $this->M_transaksi->GetPerbulan($bulan, $tahun);
		$data = array(
			'judul'	=> "Rekap Data Transasksi",
			'sub'	=> "Lihat",
			'data' => $q,
			'bulan' => $bulan,
			'tahun' => $tahun
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'rekap', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function bagan()
	{
		$data = array(
			'judul'	=> "Bagan Rekap Data Transasksi",
			'sub'	=> "Lihat",
			'rumah_dakwah' => $this->M_transaksi->Rekap('27'),
			'rumah_pintar' => $this->M_transaksi->Rekap('25'),
			'rumah_sehat' => $this->M_transaksi->Rekap('26'),
			'rumah_pemberdayaan' => $this->M_transaksi->Rekap('24')
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'bagan', $data);
		$this->load->view($this->template . 'footer', $data);
	}

	public function save()
	{
		$data = array(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'nominal' => $this->input->post('nominal'),
			'tgl_transaksi' => date('Y-m-d'),
			'dukungan' => $this->input->post('dukungan'),
			'bukti_pembayaran' => $this->input->post('bukti_pembayaran'),
			'status_pembayaran' => $this->input->post('status_pembayaran')
		);
		$this->M_transaksi->save($data);
		$this->session->set_flashdata('success', 'Data berhasil disimpan');
		redirect($this->redirect, 'refresh');
	}

	public function ubahstatus()
	{
		$post = $this->input->post(null, TRUE);
		$id = $this->input->post('id_transaksi');
		if (isset($_POST['Ubah'])) {
				$this->M_transaksi->update($id,$post);
		 if ($this->db->affected_rows() > 0)
		 $this->session->set_flashdata('success', 'Data berhasil di ubah');
		}
		redirect($this->redirect,'refresh');

	}

	public function delete()
	{
		$id_transaksi = $this->uri->segment(3);
		$data = array('id_transaksi' => $id_transaksi);
		$this->M_transaksi->delete($data);
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect($this->redirect, 'refresh');
	}
}

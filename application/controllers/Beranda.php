<?php
defined('BASEPATH') or exit('No direct script access allowed');

class beranda extends CI_Controller
{
	private $folderview = "frontend/moddonasi/";
	private $redirect 	= "frontend";
	private $template 	= "frontend/template/";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_beranda');
		$this->load->model('M_berita');
		$this->load->model('M_donatur');
	}

	public function index()
	{
		$jum=$this->M_beranda->donasiberanda();
		$page=$this->uri->segment(3);
		if (!$page):
			$offset = 0;
		else:
			$offset = $page;
		endif;
		$limit = 3;
		$config['base_url'] = base_url() . 'beranda/index/';
    $config['total_rows'] = $jum->num_rows();
    $config['per_page'] = $limit;
    $config['uri_segment'] = 3;
		//Tambahan untuk styling
    $config['full_tag_open']    = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Previous';
    $this->pagination->initialize($config);
		// end page
		// $q = $this->M_beranda->donasiberanda()->result_array();
		$data = array(
			'judul' => 'Mudah Berbagi',
			'kategori' => $this->M_beranda->kategori(),
			'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
			// 'donasi' => $q,
			'halaman' => $this->pagination->create_links(),
			'donasi' => $this->M_beranda->donasi_perhalaman($offset,$limit),
			'berita' => $this->M_beranda->Getpublik()->result_array(),
			'total_donatur' => $this->M_donatur->CountDonatur(),
			'total_donasi' => $this->M_donatur->CountDonasi()->row_array(),
			'target_donasi' => $this->M_donatur->CountTarget()->row_array()

		);
		$this->load->view($this->template . 'header', $data);
		$this->load->view($this->template . 'head2', $data);
		// $this->load->view($this->template.'footer', $data);
	}

	public function kategori()
	{
		$data = array(
			'kategori' 	=> $this->M_beranda->kategori(),
			'donasi' 		=> $this->M_beranda->donasikategori($this->uri->segment(3))
		);

		$this->load->view($this->template . 'head2', $data);
		$this->load->view($this->folderview . 'kategori', $data);
		$this->load->view($this->template . 'footer', $data);
	}


	public function read()
	{
		$data = array(
			'kategori' 	=> $this->M_beranda->kategori(),
			'row' 	=> $this->M_beranda->donasiread($this->uri->segment(3))->row_array()
		);
		$this->load->view($this->template . 'head2', $data);
		$this->load->view($this->folderview . 'read', $data);
		$this->load->view($this->template . 'footer', $data);
	}
}

/* End of file Portal.php */
/* Location: ./application/controllers/Portal.php */

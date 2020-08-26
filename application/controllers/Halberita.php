<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Halberita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
    }

    public function index()
    {
      $jum=$this->M_berita->Getpublik();
  		$page=$this->uri->segment(3);
  		if (!$page):
  			$offset = 0;
  		else:
  			$offset = $page;
  		endif;
  		$limit = 6;
  		$config['base_url'] = base_url() . 'halberita/index/';
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


        $data = array(
            'judul'    => "Berita - Mudah Berbagi",
            'sub'    => "Lihat berita",
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'halaman' => $this->pagination->create_links(),
            'berita' => $this->M_berita->berita_perhalaman($offset,$limit),
            // 'berita' => $this->M_berita->Getpublik()->result_array()
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/modberita/index', $data);
        $this->load->view('frontend/template/footer', $data);
        // $this->load->view('frontend/modberita/list', $data);
        // $this->load->view('frontend/template/footer', $data);
    }
    public function read($id_berita)
    {
        $q = $this->M_berita->GetBerita($id_berita)->row_array();
        $data = array(
            'judul'    => $q['judul_berita'] . ' - Mudah Berbagi',
            'sub'    => "Lihat berita",
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'berita' => $q,
            'berita_lain' => $this->M_berita->Getpublik($id_berita)->result_array()
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/modberita/lihat', $data);
        $this->load->view('frontend/template/footer', $data);
        // $this->load->view('frontend/modberita/read', $data);
        // $this->load->view('frontend/template/footer', $data);
    }
}

/* End of file Halberita.php */

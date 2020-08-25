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
        $q = $this->M_berita->GetAll();
        $data = array(
            'judul'    => "Berita - Mudah Berbagi",
            'sub'    => "Lihat berita",
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'data1' => $q,
            'berita' => $this->db->get('berita')->result_array()
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
            'berita_lain' => $this->M_berita->GetBeritaLain($id_berita)->result_array()
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/modberita/lihat', $data);
        $this->load->view('frontend/template/footer', $data);
        // $this->load->view('frontend/modberita/read', $data);
        // $this->load->view('frontend/template/footer', $data);
    }
}

/* End of file Halberita.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Halprofile extends CI_Controller
{

    public function index()
    {
        $data = array(
            'judul' => 'Profil',
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/modprofile/read');
        $this->load->view('frontend/template/footer', $data);
    }
}

/* End of file Halprofile.php */

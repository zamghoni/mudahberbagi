<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Haldonasi extends CI_Controller
{

    private $template = 'frontend/template/';
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_donasi', 'M_user'));
    }


    public function index()
    {
        $q = $this->M_donasi->GetAll();
        $data = array(
            'judul'    => "DATA donasi",
            'sub'    => "Lihat donasi",
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'donasi' => $q
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/moddonasi/list', $data);
        $this->load->view('frontend/template/footer', $data);
    }
    public function read($id_donasi)
    {
        $q = $this->M_donasi->GetDonasi($id_donasi)->row_array();
        $data = array(
            'judul'    => "Detail Donasi",
            'sub'    => "Lihat donasi",
            'donasi_masuk' => $this->M_donasi->Getdonasimasuk($id_donasi),
            'donasi_lain' => $this->M_donasi->DonasiLain($id_donasi)->result_array(),
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'donasi' => $q
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/moddonasi/read', $data);
        $this->load->view('frontend/template/footer', $data);
    }

    public function kontribusi($id_donasi)
    {
        $data = array(
            'judul'    => "Kontribusi Donasi",
            'donasi' =>  $this->db->get_where('donasi', array('id_donasi' => $id_donasi))->row_array(),
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'sub'    => "",
            'donasi_lain' => $this->M_donasi->DonasiLain($id_donasi)->result_array()
        );
        $this->load->view('frontend/template/header', $data);
        $this->load->view('frontend/moddonasi/kontribusi', $data);
        $this->load->view('frontend/template/footer', $data);
    }

    public function simpan()
    {
        $data = array(
            'id_donasi' => $this->input->post('id_donasi'),
            'kode_donatur' => $this->input->post('kode_donatur'),
            'id_bank' => $this->input->post('id_bank'),
            'tgl_transaksi' => date('Y-m-d'),
            'nominal' => str_replace('.', '', $this->input->post('nominal')),
            'dukungan' => $this->input->post('dukungan'),
            'bukti_pembayaran' => '0',
            'status_pembayaran' => '0'
        );
        $this->M_user->transaksi($data);

        $id_transaksi = $this->M_user->GetLastTs()['id_transaksi'];
        redirect('haldonasi/transaksi/' . $id_transaksi);
    }

    public function transaksi($id_transaksi)
    {
        $data =  array(
            'judul' => 'Instruksi Pembayaran',
            'data' => $this->db->get_where('donatur', array('email_donatur' => $this->session->userdata('email_donatur')))->row_array(),
            'transaksi' => $this->M_user->GetTransaksi($id_transaksi),
        );

        $this->load->view($this->template . 'header', $data);
        $this->load->view('frontend/moddonasi/transaksi', $data);
        $this->load->view($this->template . 'footer', $data);
    }
}

/* End of file Haldonasi.php */

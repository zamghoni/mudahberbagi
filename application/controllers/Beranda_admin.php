<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Beranda_admin extends CI_Controller
{
	private $folderview  	= "admin/modberanda/";
	private $redirect 	= "beranda_admin";
	private $template 	= "admin/template/";
	public function __construct()
	{
		parent::__construct();
		//Cek Login	
		IsAdmin();
	}
	public function index()
	{
		$data = array(
			'judul'	=> "Beranda",
			'sub'	=> "Halaman Beranda",
			'data' => ""
		);
		$this->load->view($this->template . 'head', $data);
		$this->load->view($this->folderview . 'read', $data);
		$this->load->view($this->template . 'footer', $data);
	}
}

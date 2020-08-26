<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_alokasi extends CI_Model
{
	private $table 	= 'alokasi';
	private $pk 	= 'id_alokasi';

	public function get($id=null)
	{
		$this->db->order_by($this->pk, 'desc');
		$this->db->order_by('dibuat_pada', 'desc');
		$this->db->join('admin','alokasi.kd_admin=admin.kd_admin');
		$this->db->join('donasi', 'alokasi.id_donasi=donasi.id_donasi');
		if ($id != null) {
			$this->db->where('id_alokasi', $id);
		}
		return $this->db->get($this->table);
	}

	public function add($post)
  {
    $params = [
      'id_donasi' => $post['id_donasi'],
      'kd_admin' => $this->session->userdata('kd_admin'),
      'nama_penerima' => $post['nama_penerima'],
			'total_alokasi' => $post['total_alokasi'],
      'alamat_penerima' => $post['alamat_penerima'],
			'ket_alokasi' => $post['ket_alokasi'],
      'dibuat_pada' => date('Y-m-d')
    ];
    if (!empty($_FILES['dokumentasi']['name'])) {
      $upload = $this->_do_uploadfoto();
      $params['dokumentasi'] = $upload;
    }
    $this->db->insert('alokasi', $params);
  }

	private function _do_uploadfoto()
  {
  unset($config);
  $config['upload_path'] 		= './assets/dokumentasi/';
  $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
	$config['max_size']    		=  2048;
  $config['file_name']    	=  'Foto Dokumentasi'.date('ymd').'-'.substr(md5(rand()),0,10);

  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if (!$this->upload->do_upload('dokumentasi')) {
    $this->session->set_flashdata('error', $this->upload->display_errors('',''));
    redirect('alokasi','refresh');
  }
  return $this->upload->data('file_name');
  }

	public function edit($post)
  {
    $params = [
			'id_donasi' => $post['id_donasi'],
      'kd_admin' => $this->session->userdata('kd_admin'),
      'nama_penerima' => $post['nama_penerima'],
			'total_alokasi' => $post['total_alokasi'],
      'alamat_penerima' => $post['alamat_penerima'],
			'ket_alokasi' => $post['ket_alokasi'],
      'dibuat_pada' => $post['dibuat_pada']
    ];
    if (!empty($_FILES['dokumentasi']['name'])) {
      $upload = $this->_do_uploadfoto();
      $params['dokumentasi'] = $upload;
      unlink("./assets/dokumentasi/".$this->input->post('old_dokumentasi'));
    }
    $this->db->where('id_alokasi', $post['id_alokasi']);
    $this->db->update('alokasi', $params);
  }

	function cek_nama($code, $id = null)
	{
		$this->db->from('alokasi');
		$this->db->where('nama_penerima', $code);
		if($id != null){
			$this->db->where('id_alokasi !=', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function del($id)
	{
    $data = $this->M_alokasi->get($id)->row();
    if($data->dokumentasi != null) {
			$file_foto = './assets/dokumentasi/'.$data->dokumentasi;
			unlink($file_foto);
		}
    $this->db->where('id_alokasi', $id);
    $this->db->delete('alokasi');
	}

	public function total_donasi()
	{
		$q = "SELECT donasi.*, SUM(DISTINCT transaksi.nominal) AS total FROM donasi LEFT JOIN transaksi ON transaksi.id_donasi=donasi.id_donasi WHERE status_pembayaran = '1' GROUP BY donasi.id_donasi";
		return $this->db->query($q)->result_array();
	}


}

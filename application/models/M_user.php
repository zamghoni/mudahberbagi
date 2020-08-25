<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
  private $table     = 'user';
  private $pk     = 'kd_admin';

  public function GetLastTs()
  {

    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->order_by('id_transaksi', 'desc');
    $this->db->limit(1);
    return $this->db->get()->row_array();
  }
  public function GetTransaksi($id_transaksi)
  {
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('donasi', 'donasi.id_donasi = transaksi.id_donasi');
    $this->db->where('id_transaksi', $id_transaksi);
    return $this->db->get()->row_array();
  }

  public function transaksi($data)
  {
    return $this->db->insert('transaksi', $data);
  }

  public function save_profile($id, $data)
  {
    $this->db->where('kode_donatur', $id);
    return $this->db->update('donatur', $data);
  }

  public function saveBukti($id, $data)
  {
    $this->db->where('id_transaksi', $id);
    return $this->db->update('transaksi', $data);
  }

  public function donasi()
  {
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('donasi', 'transaksi.id_donasi = donasi.id_donasi');
    $this->db->join('donatur', 'transaksi.kode_donatur = donatur.kode_donatur');
    $this->db->where('donatur.email_donatur', $this->session->userdata('email_donatur'));
    return $this->db->get();
  }
}


/* End of file M_user.php */

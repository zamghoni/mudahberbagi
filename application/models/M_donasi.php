<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_donasi extends CI_Model
{
	private $table 	= 'donasi';
	private $pk 	= 'id_donasi';

	public function GetAll()
	{
		//$this->db->order_by($this->pk, 'desc');
		$this->db->order_by('tgl_donasi', 'desc');
		$this->db->order_by('jam_donasi', 'desc');
		//$this->db->join('admin','donasi.kd_admin=admin.kd_admin');
		$this->db->join('kategori', 'donasi.id_kategori=kategori.id_kategori');
		return $this->db->get($this->table);
	}

	public function GetDonasi($id_donasi)
	{
		$this->db->join('kategori', 'kategori.id_kategori = donasi.id_kategori');
		$this->db->where('id_donasi', $id_donasi);
		return $this->db->get('donasi');
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($kd)
	{
		$this->db->where($this->pk, $kd);
		$this->db->join('kategori', 'donasi.id_kategori=kategori.id_kategori');
		return $this->db->get($this->table)->row_array();
	}

	public function update($kd, $data)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->update($this->table, $data);
	}

	public function delete($data)
	{
		$this->db->where($data);
		return $this->db->delete($this->table);
	}

	public function status($kd, $data)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->update($this->table, $data);
	}

	public function search($data)
	{
		$this->db->like($this->pk, $data);
		$this->db->or_like('judul_donasi', $data);
		$this->db->or_like('nama_donasi', $data);
		$this->db->join('kategori', 'donasi.id_kategori=kategori.id_kategori');
		return $this->db->get($this->table);
	}

	public function DonasiLain($id)
	{
		$this->db->join('transaksi', 'transaksi.id_donasi = donasi.id_donasi', 'LEFT');
		$this->db->select('donasi.*');
		$this->db->select('SUM(transaksi.nominal) as total');
		$this->db->where('donasi.st_donasi', 'Publik');
		$this->db->where_not_in('donasi.id_donasi', $id);
		$this->db->group_by('donasi.id_donasi');
		return $this->db->get('donasi');
	}

	public function Getdonasimasuk($id)
	{
		$this->db->join('donasi', 'donasi.id_donasi = transaksi.id_donasi');
		$this->db->select('donasi.*');
		$this->db->select('SUM(transaksi.nominal) as total');
		$this->db->where('transaksi.id_donasi', $id);
		$this->db->group_by('transaksi.id_donasi');
		return $this->db->get('transaksi')->row_array();
	}
}

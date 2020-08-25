<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_donatur extends CI_Model
{
	private $table 	= 'donatur';
	private $pk 	= 'kode_donatur';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($kd)
	{
		$this->db->where($this->pk, $kd);
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

	public function search($data)
	{
		$this->db->like($this->pk, $data);
		$this->db->or_like('nama_donatur', $data);
		return $this->db->get($this->table);
	}

	public function CountDonatur()
	{
		return $this->db->get($this->table)->num_rows();
	}

	public function CountDonasi()
	{
		// $q = $this->db->query("SELECT SUM(nominal) AS total WHERE status_pembayaran = '1' FROM transaksi");
		$this->db->select('SUM(nominal) as total');
		$this->db->where('status_pembayaran', '1');
		$q = $this->db->get('transaksi');
		return $q;
	}
	public function CountTarget()
	{
		// $q = $this->db->query('SELECT SUM(target_donasi) AS target FROM donasi');
		$this->db->select('SUM(target_donasi) as target');
		$q = $this->db->get('donasi');
		return $q;
	}
}

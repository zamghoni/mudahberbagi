<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{
	private $table 	= 'transaksi';
	private $pk 	= 'id_transaksi';

	public function GetAll()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('donasi', 'transaksi.id_donasi = donasi.id_donasi');
		$this->db->join('donatur', 'transaksi.kode_donatur = donatur.kode_donatur');
		return $this->db->get();
	}

	public function Rekap($data)
	{
		$q = "SELECT target_donasi, SUM(DISTINCT transaksi.nominal) AS total FROM transaksi JOIN donasi ON donasi.id_donasi=transaksi.id_donasi WHERE donasi.id_donasi = $data";
		return $this->db->query($q)->row_array();
	}

	public function GetPerbulan($bulan, $tahun)
	{
		if ($bulan == 'ALL') {
			$q = "SELECT judul_donasi, SUM(DISTINCT transaksi.nominal) AS total FROM transaksi JOIN donasi ON donasi.id_donasi=transaksi.id_donasi WHERE YEAR(transaksi.tgl_transaksi) = $tahun AND status_pembayaran = '1' GROUP BY donasi.id_donasi";
		} else {
			$q = "SELECT judul_donasi, SUM(DISTINCT transaksi.nominal) AS total FROM transaksi JOIN donasi ON donasi.id_donasi=transaksi.id_donasi WHERE MONTH(transaksi.tgl_transaksi) = $bulan AND YEAR(transaksi.tgl_transaksi) = $tahun AND status_pembayaran = '1' GROUP BY donasi.id_donasi";
		}
		return $this->db->query($q)->result_array();
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

	public function update($id,$post)
	{
		if ($this->input->post('status_pembayaran') == '3') {
			$params = [
				'bukti_pembayaran' => '0',
				'status_pembayaran' => $this->input->post('status_pembayaran')
			];
		} else {
			$params = [
				'status_pembayaran' => $this->input->post('status_pembayaran')
			];
		}

		$this->db->where($this->pk, $id);
		$this->db->update($this->table, $params);
	}

	public function delete($data)
	{
		$this->db->where($data);
		return $this->db->delete($this->table);
	}

	public function search($data)
	{
		$this->db->like($this->pk, $data);
		$this->db->or_like('nama_donasi', $data);
		return $this->db->get($this->table);
	}
}

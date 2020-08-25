<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
	private $table 	= 'donatur';
	private $pk 	= 'kode_donatur';

	public function save($data){
		return $this->db->insert($this->table, $data);
	}

	public function edit($kd){
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

	public function update($kd,$data){
		$this->db->where($this->pk, $kd);
		return $this->db->update($this->table, $data);
	}

	public function delete($data){
		$this->db->where($data);
		return $this->db->delete($this->table);
	}

	public function search($data){
		$this->db->like($this->pk, $data);
		$this->db->or_like('nama_admin', $data);
		$this->db->or_like('hp_admin', $data);
		return $this->db->get($this->table);
	}

}

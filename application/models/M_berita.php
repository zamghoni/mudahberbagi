<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
	private $table 	= 'berita';
	private $pk 	= 'id_berita';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		$this->db->order_by('tgl_berita', 'desc');
		//$this->db->join('admin','berita.kd_admin=admin.kd_admin');
		$this->db->join('kategori', 'berita.id_kategori=kategori.id_kategori');
		return $this->db->get($this->table);
	}

	public function Getpublik()
	{
		$this->db->order_by($this->pk, 'desc');
		$this->db->order_by('tgl_berita', 'desc');
		$this->db->join('kategori', 'berita.id_kategori=kategori.id_kategori');
		$this->db->where('st_berita', 'Publik');
		return $this->db->get($this->table);
	}

	public function GetBeritaLain($id)
	{
		$q = $this->db->query("SELECT * FROM berita WHERE id_berita NOT IN ('$id')");
		return $q;
	}

	public function GetBerita($id_berita)
	{
		$this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori');
		$this->db->where('id_berita', $id_berita);
		return $this->db->get('berita');
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit($kd)
	{
		$this->db->where($this->pk, $kd);
		$this->db->join('kategori', 'berita.id_kategori=kategori.id_kategori');
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
		$this->db->or_like('judul_berita', $data);
		$this->db->or_like('nama_kategori', $data);
		$this->db->join('kategori', 'berita.id_kategori=kategori.id_kategori');
		return $this->db->get($this->table);
	}

	function berita_perhalaman($offset,$limit)
  {
		$hsl=$this->db->query("SELECT * FROM `berita` LEFT JOIN `kategori` ON `kategori`.`id_kategori`=`berita`.`id_kategori` WHERE `berita`.`st_berita`='Publik' ORDER BY `berita`.`tgl_berita` DESC limit $offset,$limit");
		return $hsl;
	}

}

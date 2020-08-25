<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_beranda extends CI_Model
{

	function donasiberanda()
	{
		$q = $this->db->query("SELECT donasi.*,SUM(transaksi.nominal) as total FROM `donasi` LEFT JOIN `transaksi` ON `transaksi`.`id_donasi`=`donasi`.`id_donasi` WHERE `donasi`.`st_donasi`='Publik' GROUP BY `donasi`.`id_donasi`");
		
		return $q;
	}

	function kategori()
	{
		return $this->db->get('kategori');
	}

	function donasikategori($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$this->db->where('st_donasi', 'Publik');
		$this->db->order_by('id_donasi', 'desc');
		//	$this->db->join('kategori','donasi.id_kategori=kategori.id_kategori');
		return $this->db->get('donasi');
	}

	function donasiread($id_donasi)
	{
		$this->db->where('id_donasi', $id_donasi);
		$this->db->where('st_donasi', 'Publik');
		$this->db->limit(1);
		$this->db->order_by('id_donasi', 'desc');
		$this->db->join('kategori', 'donasi.id_kategori=kategori.id_kategori');
		return $this->db->get('donasi');
	}

	function donasi_perhalaman($offset,$limit)
  {
		$hsl=$this->db->query("SELECT donasi.*,SUM(transaksi.nominal) as total FROM `donasi` LEFT JOIN `transaksi` ON `transaksi`.`id_donasi`=`donasi`.`id_donasi` WHERE `donasi`.`st_donasi`='Publik' GROUP BY `donasi`.`id_donasi` limit $offset,$limit");

		return $hsl;
	}

}

/* End of file M_haldonasi.php */
/* Location: ./application/models/M_haldonasi.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtheloai extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function get_theloai()
	{
		$this->db->distinct();
		$this->db->select('tentheloai, tentheloai_khongdau');
		$this->db->from('theloai');
		return $this->db->get()->result_array();
	}
	public function phim_home($theloai)
	{
		$this->db->select('phim.idphim, phim.tenphimvi, phim.tenphimen, phim.poster, phim.mota');
		$this->db->from('theloai, phim');
		$this->db->where('phim.idphim = theloai.idphim');
		$this->db->where('theloai.tentheloai_khongdau', $theloai);
		$this->db->order_by('rand()');
		$this->db->limit('6');
		
		
		return $this->db->get()->result_array();
	}
	public function theloai_play($id)
	{
		$this->db->select('*');
		$this->db->from('theloai');
		$this->db->where('idphim', $id);
		return $this->db->get()->result_array();
	}

	public function count_theloai_play($id){
		$this->db->select('*');
		$this->db->from('theloai');
		$this->db->where('idphim', $id);
		return $this->db->count_all(); 
	}
}
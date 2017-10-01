<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mphimbo extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function phimbo_play($id)
	{
		$this->db->select('*');
		$this->db->from('phimbo');
		$this->db->where('idphim', $id);
		$this->db->order_by('tap', 'asc');
		return $this->db->get()->result_array();
	}	
	public function phimbo_play_tap($idphim, $tap)
	{
		$this->db->select('*');
		$this->db->from('phimbo');
		$this->db->where('idphim', $idphim);
		$this->db->where('tap', $tap);
		return $this->db->get()->row_array();
	}

	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}
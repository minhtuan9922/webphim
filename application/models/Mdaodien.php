<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdaodien extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function daodien_play($id)
	{
		$this->db->select('*');
		$this->db->from('daodien');
		$this->db->where('idphim', $id);
		return $this->db->get()->result_array();
	}
	
	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}
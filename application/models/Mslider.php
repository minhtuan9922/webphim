<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mslider extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function slider()
	{
		$this->db->select('*');
		$this->db->from('slide');
		$this->db->order_by('stt', 'desc');
		return $this->db->get()->result_array();
	}

	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}
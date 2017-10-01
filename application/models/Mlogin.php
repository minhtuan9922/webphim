<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function check($mail, $pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('mail', $mail);
		$this->db->where('pass', $pass);
		return $this->db->count_all_results();
	}
	public function user($mail)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('mail', $mail);
		return $this->db->get()->row_array();
	}

	public function count_theloai_play(){
		$this->db->select('*');
		$this->db->from('theloai');
		//$this->db->where('idphim', $id);
		return $this->db->count_all(); 
	}
}
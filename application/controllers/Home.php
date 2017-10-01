<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	protected $_data;
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		
	}
	public function index()
	{
		$this->_data['title'] = 'Trang chủ | PhimMT';
		$this->load->model('Mtheloai');
		$this->_data['theloai'] = $this->Mtheloai->get_theloai();
		$this->load->model('Mslider');
		$this->_data['slide'] = $this->Mslider->slider();
		$this->load->model('Mphim');
		$this->_data['phimmoicapnhat'] = $this->Mphim->phimmoicapnhat();
		$this->_data['phim_hanhdong'] = $this->Mtheloai->phim_home('Hanhdong');
		$this->_data['phim_hoathinh'] = $this->Mtheloai->phim_home('Hoathinh');
		$this->_data['phim_haihuoc'] = $this->Mtheloai->phim_home('Haihuoc');
		$this->load->model('Mlogin');
		//view
		$this->_data['slider'] = 'layout/slider/slider';
		$this->_data['content'] = 'layout/content';
		$this->load->view('index', $this->_data);
	}	
	public function login()
	{
		$this->_data['title'] = 'Trang chủ | PhimMT';
		$this->load->model('Mtheloai');
		$this->_data['theloai'] = $this->Mtheloai->get_theloai();
		$this->load->model('Mslider');
		$this->_data['slide'] = $this->Mslider->slider();
		$this->load->model('Mphim');
		$this->_data['phimmoicapnhat'] = $this->Mphim->phimmoicapnhat();
		$this->_data['phim_hanhdong'] = $this->Mtheloai->phim_home('Hanhdong');
		$this->_data['phim_hoathinh'] = $this->Mtheloai->phim_home('Hoathinh');
		$this->_data['phim_haihuoc'] = $this->Mtheloai->phim_home('Haihuoc');
		//đăng nhập
		$mail = $this->input->post('mail');
		$pass = $this->input->post('pass');
		echo($mail);
		echo $pass;
		$this->load->model('Mlogin');
		$dem = $this->Mlogin->check($mail, $pass);
		echo($dem);
		if($dem == 1)
		{
			$this->session->set_userdata("login", $mail);
		}
		//view
		$this->_data['slider'] = 'layout/slider/slider';
		$this->_data['content'] = 'layout/content';
		$this->load->view('index', $this->_data);
	}
}
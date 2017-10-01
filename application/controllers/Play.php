<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Play extends CI_Controller {

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
	public function phim()
	{
		$id = $this->uri->segment('3');
		$tap = $this->uri->segment('4');
		if(!isset($tap))
		{
			$tap = 1;
		}
		$this->load->model('Mlogin');
		$this->_data['idphim'] = $id;
		$this->_data['tap'] = $tap;
		$this->load->model('Mphim');
		$this->_data['phim_play'] = $this->Mphim->phim_play($id);
		$this->_data['title'] = $this->_data['phim_play']['tenphimvi'].' | '. $this->_data['phim_play']['tenphimen'];
		$this->load->model('Mtheloai');
		$this->_data['theloai'] = $this->Mtheloai->get_theloai();
		//đạo diễn
		$this->load->model('Mdaodien');
		$this->_data['daodien_play'] = $this->Mdaodien->daodien_play($id);		
		//kịch bản
		$this->load->model('Mkichban');
		$this->_data['kichban_play'] = $this->Mkichban->kichban_play($id);
		//diễn viên
		$this->load->model('Mdienvien');
		$this->_data['dienvien_play'] = $this->Mdienvien->dienvien_play($id);
		//Thể loại
		$this->_data['theloai_play'] = $this->Mtheloai->theloai_play($id);
		//$this->_data['count_theloai_play'] = $this->Mtheloai->count_theloai_play($id);
		//phim bộ
		$this->load->model('Mphimbo');
		$this->_data['phimbo_play'] = $this->Mphimbo->phimbo_play($id);
		$this->_data['phimbo_play_tap'] = $this->Mphimbo->phimbo_play_tap($id, $tap);
		//view
		//$this->_data['slider'] = 'layout/slider/slider';
		$this->_data['content'] = 'layout/content/xemphim';
		$this->load->view('index', $this->_data);
	}
}
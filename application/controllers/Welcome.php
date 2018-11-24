<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url', 'language'));
		$this->load->model('analytics');
	}
	

	public function index()
	{
       $this->analytics->write();
  
		$data['headers'] = array(
				'title' => 'Welcome', 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('welcome', $data);
		$this->load->view('layout/footer');
	}
}

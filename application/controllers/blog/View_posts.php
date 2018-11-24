<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_posts extends CI_Controller {
	

	public function index()
	{
		$data['headers'] = array(
			'title' => '', 
			'description' => '', 
			'keywords' => '', 
		);
		$this->load->view('layout/header');
		$this->load->view('blog/welcome');
		$this->load->view('layout/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Not_found extends CI_Controller {


	public function index()
	{
		$data['headers'] = array(

				'title' => 'Page Not found', 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('not_found');
		$this->load->view('layout/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {


	public function index()
	{
		$data['headers'] = array(

				'title' => 'About Us', 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('about_us');
		$this->load->view('layout/footer');
	}
}

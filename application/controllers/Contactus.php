<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {
	

	public function index()
	{
	$data['headers'] = array(

				'title' => 'Contact Us', 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('contact_us');
		$this->load->view('layout/footer');
	}
}

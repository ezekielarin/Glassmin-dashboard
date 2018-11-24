<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {


	public function index()
	{
		$data['headers'] = array(

				'title' => 'Terms and Conditions', 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('terms_and_conditions');
		$this->load->view('layout/footer');
	}
}

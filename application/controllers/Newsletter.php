<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->library('email');
		$this->load->helper('url');

	}


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('newsletter/news_letter');
		$this->load->view('layout/footer');
	}
	public function subscribe()
	{
        $sub = $this->input->post('sub');
        if ($sub) {
        	$data = array(
        		'email' => $this->input->post('email'), 
        	);

        	$insert = $this->db->insert('news_letter', $data);
        	if ($insert) {
        		$data['message'] = "Subscribed Successfully";
        	}else{
        		$data['message'] = "Subscription Failed";
        	}
       
		$this->load->view('layout/header');
		$this->load->view('newsletter/news_subscribe', $data);
		$this->load->view('layout/footer');

	     }
	}
	public function unsubscribe($id)
	{
		$this->load->view('layout/header');
		$this->load->view('newsletter/news_unsubscribe');
		$this->load->view('layout/footer');
	}
}

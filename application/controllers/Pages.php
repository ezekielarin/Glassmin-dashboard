<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	

	public function index()
	{

	public function view($slug)
	{
		$data['page'] = $page = $this->db->query("SELECT * FROM pages WHERE slug='$slug'")->row();
		$data['headers'] = array(
				'title' => $page->title, 
 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('page', $data);
		$this->load->view('layout/footer');
	}
}

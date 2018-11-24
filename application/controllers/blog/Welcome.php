<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	

	public function index()
	{
		$data['headers'] = array(
			'title' => 'blog', 
			'description' => '', 
			'keywords' => '', 
		);
		$data['blog'] = $this->db->query("SELECT * FROM blog ORDER BY id DESC")->result();
		$this->load->view('layout/header', $data);
		$this->load->view('blog/welcome', $data);
		$this->load->view('layout/footer');
	}

	public function view($url)
	{
		$data['blog'] = $blog = $this->db->query("SELECT * FROM blog WHERE slug='$url'")->row();

		$data['headers'] = array(
			'title' => $blog->title, 
			'description' => '', 
			'keywords' => '', 
		);
		$this->load->view('layout/header', $data);
		$this->load->view('blog/view_post', $data);
		$this->load->view('layout/footer');

		
	}
}

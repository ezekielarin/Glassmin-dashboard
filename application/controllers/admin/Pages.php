<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language','file','download'));
		$this->load->dbutil();

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
            $user = $this->ion_auth->user()->row();
			$user_id = $user->id;
			$data['user_id'] = $user->id;

			$data['pages'] = $this->db->query("SELECT * FROM pages")->result();
            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pages/home', $data);
		$this->load->view('admin/layout/footer');
		}
	}
	 public function addnew()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
            $user = $this->ion_auth->user()->row();
			$user_id = $user->id;
			$data['user_id'] = $user->id;
			$add = $this->input->post('update');
			if ($add) {
				$slug = url_title($this->input->post('title'), 'dash', TRUE);
		    $data = array(
			'title' => $this->input->post('title'), 
			'slug' => $slug, 
			'content' => $this->input->post('content'), 
		    );

		    $this->db->insert('pages', $data);
			
			}
			
            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pages/add', $data);
		$this->load->view('admin/layout/footer');
		}
	}
     public function edit($id)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
            $user = $this->ion_auth->user()->row();
			$user_id = $user->id;
			$data['user_id'] = $user->id;
			 $update = $this->input->post('update');
			
			if (isset($update)) {
				$slug = url_title($this->input->post('slug'), 'dash', TRUE);
		    $data = array(
			'title' => $this->input->post('title'), 
			'slug' => $slug, 
			'content' => $this->input->post('content'), 
		    );
		    $this->db->update('pages', $data, "id=$id");

			}

			$data['pages'] = $this->db->query("SELECT * FROM pages WHERE id='$id'")->row();

            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pages/edit', $data);
		$this->load->view('admin/layout/footer');
		}
	}

	public function delete($id)
	{
		$this->db->delete('pages', "id=$id");
		redirect('admin/pages');
	}


}
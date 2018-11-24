<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));
		$this->load->library('grocery_CRUD');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('example.php',(array)$output);
		$this->load->view('admin/layout/footer');
	}

	public function manage()
	{
	//	$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('contacts');
			$crud->set_subject('Team');
			$crud->required_fields('phone');
			$crud->set_field_upload('photo','uploads/images');
			$crud->columns('name','position','phone','email','address','place_of_work','photo');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
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
			$add = $this->input->post('add');
             if ($add) {
             	$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			 );
		$insert = $this->db->insert('contacts', $data);
		if ($insert) {
			echo "successfully add";
		}
             	
             }
			
            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/contacts/home', $data);
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
             if ($update) {
             	$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			 );
		        $this->db->where('id', $data['id']);
		$save = $this->db->update('contacts', $data);
		if ($save) {
			echo "successfully updated";
		  }
             	
             }
           $data['contact'] = $this->db->query("SELECT * FROM contacts WHERE id='$id'")->row();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/contacts/edit_contact', $data);
		$this->load->view('admin/layout/footer');
		}
	}

	 public function delete($id)
	 {
	 	$this->db->where('id',$id);
	 	$this->db->delete('contacts');
	 redirect('admin/contacts/');
	}
}

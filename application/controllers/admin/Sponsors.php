<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsors extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

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
			$add = $this->input->post('add');
             if ($add) {
             	$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			 );
             	 $config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 10224;
                $config['max_height']           = 8648;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('picture'))
                {
                	$data['logo'] = $this->upload->data('file_name');

                   $insert = $this->db->insert('sponsors', $data);
					if ($insert) {
						echo "successfully add";
					}

                   redirect('admin/sponsors');

                }else{
                	echo "error";
                  echo $this->upload->display_errors();
                  
                }
		
             	
             }
			
            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/sponsors/home', $data);
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
		$update = $this->input->post('update');
             if ($update) {
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			 );
		     $this->db->where('id', $id);
		$q = $this->db->update('sponsors', $data);
		if ($q) {
			echo "Updated successfully";
		}
         
	}
	    $data['sponsor'] = $this->db->query("SELECT * FROM sponsors WHERE id='$id'")->row();
	    $this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/sponsors/edit_sponsor', $data);
		$this->load->view('admin/layout/footer');
		

	}

	public function update_photo()
	{
		$config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 10224;
                $config['max_height']           = 8648;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('picture'))
                {
                	$data['logo'] = $this->upload->data('file_name');
                	$id = $this->input->post('id');

                             $this->db->where('id', $id);
                   $insert = $this->db->update('sponsors', $data);
					if ($insert) {
						echo "successfully updated";
					}

                   redirect('admin/sponsors/edit/'.$id);

                }else{
                	echo "error";
                  echo $this->upload->display_errors();
                  
                }
		
	}
	public function delete($id)
	{
		$this->db->delete('sponsors',"id=$id");
		redirect('admin/sponsors');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language','file','download'));
		$this->load->dbutil();
		$this->load->helper('file');

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

       if ($this->input->post('upload')) {
		        $config['upload_path']          = 'uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10224;
                $config['max_height']           = 8648;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image'))
                {
                	$data['photo'] = $this->upload->data('file_name');
                  }else{
          
                  echo $data['upload_error'] = $this->upload->display_errors();
                  
                }
               }



		//	$data['images'] = get_filenames('uploads/images/');
			$data['images'] = get_dir_file_info('uploads/images/');
            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/media/home', $data);
		$this->load->view('admin/layout/footer');
		}
	}

	public function view($image)
	{ 
		$data['image'] = $image;
	   $this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/media/view', $data);
		$this->load->view('admin/layout/footer');            
		
	}

}

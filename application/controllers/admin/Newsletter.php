<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->library('email');
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
            
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/news_letter', $data);
		$this->load->view('admin/layout/footer');
		}
	}

	public function sendmail()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
		//mail configuration
	$config['charset'] = 'utf-8';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';
	$this->email->initialize($config);

		$from = 'news@domain.com' ;
		$subject = $this->input->post('subject');
		$content = $this->input->post('message');
		$list = $this->db->query("SELECT * FROM news_letter")->result();
		//templates
	   foreach ($list as $address)
			{
				$address = $address->email;
				$data['id'] = $address->id;
				$data['name'] = $address->name;

			        $this->email->clear();
			        $this->email->to($address);
			        $this->email->from($from);
			        $this->email->subject($subject);
			        $this->email->message($content);
			        $this->email->send();
			}
	   }
	}


}

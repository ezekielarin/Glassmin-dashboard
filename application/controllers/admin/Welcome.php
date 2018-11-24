<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));
        $this->load->model('analytics');

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
			 $data['pages'] = $this->analytics->pages();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/welcome', $data);
		$this->load->view('admin/layout/footer');
		}
	}

    public function getvisits()
    {
       $query = $this->analytics->view();
       
       foreach ($query as $visits) {
          echo "<tr>";
          echo "<td>".$visits->platform."</td>";
          echo "</tr>";
       }
    }

public function googleAnalytics() {

        $this->config->load('ga_api');
        $ga_params = array(
            'applicationName' => $this->config->item('ga_api_applicationName'),
            'clientID' => $this->config->item('ga_api_clientId'),
            'clientSecret' => $this->config->item('ga_api_clientSecret'),
            'redirectUri' => $this->config->item('ga_api_redirectUri'),
            'developerKey' => $this->config->item('ga_api_developerKey'),
            'profileID' => $this->config->item('ga_api_profileId')
        );

        $this->load->library('GoogleAnalytics', $ga_params);

        $data = array(
            'users' => $this->googleanalytics->get_total('users'),
            'sessions' => $this->googleanalytics->get_total('sessions'),
            'browsers' => $this->googleanalytics->get_dimensions('browser','sessions'),
            'operatingSystems' => $this->googleanalytics->get_dimensions('operatingSystem','sessions'),
            'profileInfo' => $this->googleanalytics->get_profile_info()
        );

        //$this->googleanalytics->some_function();

        $this->load->view('welcome_message', $data);
    }

    public function logout() {
        $this->config->load('ga_api');
        $ga_params = array(
            'applicationName' => $this->config->item('ga_api_applicationName'),
            'clientID' => $this->config->item('ga_api_clientId'),
            'clientSecret' => $this->config->item('ga_api_clientSecret'),
            'redirectUri' => $this->config->item('ga_api_redirectUri'),
            'developerKey' => $this->config->item('ga_api_developerKey'),
            'profileID' => $this->config->item('ga_api_profileId')
        );
        $this->load->library('GoogleAnalytics', $ga_params);
        $this->googleanalytics->logout();
    }
}


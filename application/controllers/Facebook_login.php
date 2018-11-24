    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Facebook_login extends CI_Controller
    {
    	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->library('facebook_ion_auth');
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	    }
        /**
         * Index Page for this controller.
         * You will be redirected to the facebook login page
         */
        function index()
        {
            $this->facebook_ion_auth->login();
        }

        /**
         * Controller that is redirected back from facebook after login
         */
        public function action()
        {
            $code = $this->input->get('code');
            if ($code) {
                $this->facebook_ion_auth->login();
                redirect('admin');
            } else {
                redirect('auth/login');
            }
        }
    }
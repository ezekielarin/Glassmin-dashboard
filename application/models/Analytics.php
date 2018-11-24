<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Analytics extends CI_Model
{
	

	public function __construct()
	{
		$this->config->load('ion_auth', TRUE);
		$this->load->helper('date');
		$this->lang->load('ion_auth');
		$this->load->library('user_agent');
		}

	public function view()
	{

	     $this->db->select('*');
	     $this->db->from('analytics');
	     $query = $this->db->get()->result();
	     if ($query>0) {
	     	return $query;
	     }

	}

	public function write()
	{
		
        $data = array(
            'browser' => $this->agent->browser().' '.$this->agent->version(),
            'site_url' => $_SERVER['REQUEST_URI'],
            'page' => $this->uri->uri_string(),
            'device' => $this->agent->mobile(),
            'platform' =>$this->agent->platform(),
            'referrer' => $this->agent->referrer(),
            'ipaddress' => $this->input->ip_address(),
            'client_id' => '4234232',
            'visit_time' => date('d-m-Y H:i:s'),
            );
            
            $this->db->insert('analytics', $data);
       
	}

	 public function countries()
    {
            
    }
    
    public function devices()
    {
        # view by device type
        
                  $this->db->select('*');
        $query =  $this->db->get('analytics');
        $query = $this->db->get()->result();
	     if ($query>0) {
	     	return $query;
	     }
        
    }

    public function platform()
    { 
        #view by platform
        $query = $this->db->query("SELECT *,COUNT(*) as count FROM analytics GROUP BY platform");
	     if ($query) {
	     	return $query->result();
	     }
    }
    public function pages()
    { 
        #view by platform
        $query = $this->db->query("SELECT *,COUNT(*) as count FROM analytics GROUP BY page");
	     if ($query) {
	     	return $query->result();
	     }
    }
     public function browsers()
    {
        #view by browsers
              $query = $this->db->query("SELECT *,COUNT(*) as count FROM analytics GROUP BY browser");
	     if ($query) {
	     	return $query->result();
	     }
    }

    public function date()
    {
        #view by date
                      
    }

    public function robot()
    {
        #check if its a robot visiting
        if ($device == 'robot') {
            #which robot is it. google, yahoo, amazon etc..

            #return result to be stored
          }  
    }

}

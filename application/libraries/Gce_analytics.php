<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


/**
 * CodeIgniter gce_analytics Class
 * This library sends the sms and returns the response
 * 
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          Ezekiel Shapiro 
 * @github          https://github.com/ezekielarin
 */

class Gce_analytics {

   function __construct()
    {
        //initialize the CI super-object
       //     $this->_ci =& get_instance();
            //load config  
        // $this->load->library('user_agent');      
    }
   
    public function rec_visits()
    {
           //$this->site_analytics->useragent();
        $this->library->load('user_agent');
        $data = array(
            'browser' => $this->agent->browser().' '.$this->agent->version(),
            'site_url' => $_SERVER['REQUEST_URI'],
            'page' => $this->uri->uri_string(),
            'device' => $this->agent->mobile(),
            'platform' =>$this->agent->platform(),
            'referrer' => $this->agent->referrer(),
            'ipaddress' => $this->input->ip_address(),
            'client_id' => '4234232',
            'visit_time' => date('d-m-y H:s:i'),
            );
       $save = $this->db->insert('analytics', $data);
       if ($save) {
           return "success";
       }else{
        return error;
       }
    }

    public function views()
    {
        $query =  $this->db->get('analytics');
        
    }

    public function countries()
    {
                  $this->db->select('*');
                  $this->db->select('*');
        $query =  $this->db->get('analytics');
        
    }
    
    public function devices()
    {
        # view by device type11
                  $this->db->select('*');
                  $this->db->select('*');
        $query =  $this->db->get('analytics');
        
    }

    public function platform()
    { 
        #view by platform
                  $this->db->select('*');
                  $this->db->select('*');
        $query =  $this->db->get('analytics');
        
    }
     public function browsers()
    {
        #view by browsers
                  $this->db->select('*');
                  $this->db->select('*');
        $query =  $this->db->get('analytics');
        
    }

    public function date()
    {
        #view by date
                  $this->db->select('*');
                  $this->db->select('*');
        $query =  $this->db->get('analytics');
        
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

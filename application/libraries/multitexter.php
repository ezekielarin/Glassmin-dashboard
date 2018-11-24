<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


/**
 * CodeIgniter Multitexter Class
 * This library sends the sms and returns the response
 * 
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          Ezekiel Shapiro 
 * @github          https://github.com/ezekielarin
 */

class Multitexter {

   function __construct()
    {
        //initialize the CI super-object
            $this->_ci =& get_instance();

            //load config
            $this->_ci->load->config('multitexter', TRUE);
           
    }
   
    public function do_send($message,$sender_brand_name,$recipients)
    {
             
        $message = urlencode($message); 
        $sender= urlencode($sender_brand_name); 
        //$mobile = "2348012345678,2347012345678";
        $this->username = $this->_ci->config->item('username','multitexter');
        $this->password = $this->_ci->config->item('password','multitexter');
        $url = 'http://www.MultiTexter.com/tools/geturl/Sms.php?username='.$this->username.'g&password='.$this->password.'&sender='.$sender.'&message='.$message .'&flash=0&recipients='. $recipients;
        $ch = curl_init(); 
        curl_setopt($ch,CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0); 
       return $resp = curl_exec($ch); 
        curl_close($ch); 



    }


   
}

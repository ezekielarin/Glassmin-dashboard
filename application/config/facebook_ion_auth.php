<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id']       = '426143471096394';       // Your app id
$config['app_secret']   = 'aa15e05abd8a8bfed9033a24f03b9edc';       // Your app secret key
$config['scope']        = 'email';  // custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['fields']       = 'id,first_name,last_name,email'; // fields to retrieve; if set to '', default is "id,first_name,last_name"
$config['redirect_uri'] = site_url('facebook_login/action');       // url to redirect back from facebook. If set to '', site_url('') will be used

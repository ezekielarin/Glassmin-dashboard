<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Model
{
	

	public function __construct()
	{
		$this->config->load('ion_auth', TRUE);
		$this->load->helper('date');
		$this->lang->load('ion_auth');
		}

	public function available_units($user_id)
	{

	 $this->db->query("SELECT * FROM sms_units WHERE user_id='$user_id'")->row();

	}
	public function transactions($user_id)
	{
		$this->db->select('*');
		$this->db->from('transactions');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}
	}
	public function purchase_unit($user_id)
	{
		$data = array(
			'user_id' => $user_id, 
			'tx_id' => $user_id, 
			'price' => $user_id, 
			'credit_units' => $units 
		);

      $this->db->insert('sms_units', $data);
	}
	public function add_transaction($user_id)
	{
		$data = array(
			'user_id' => $user_id, 
			'tx_id' => $user_id, 
			'price' => $user_id, 
			'credit_units' => $user_id
		);


      $this->db->insert('transactions', $data);
	}
	public function check_sms_units($user_id,$unit_per_sms)
	{
		$this->db->select('credit_units');
		$this->db->from('sms_units');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get()->row();

		$availabe_unit = $query->credit_units;
    //how many sms can we send
		$sms_count = floor($availabe_unit/$unit_per_sms);

		return $sms_count;

	}
}

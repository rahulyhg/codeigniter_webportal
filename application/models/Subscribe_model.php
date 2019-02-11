<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "subscribe";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		return $this->db->order_by('id_subscribe','DESC')->get($this->_table)->result();
	}

	public function count()
	{
		return $this->db->get($this->_table)->num_rows();
	}

	public function store()
	{
		$data = array(
    		'id_subscribe' 		=> null, 
    		'email_subscribe' 	=> $this->input->post('txt_subscribe'), 
    	);
		return $this->db->insert($this->_table,$data);
	}
}

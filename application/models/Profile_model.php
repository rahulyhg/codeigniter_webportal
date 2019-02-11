<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "user";

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_user' => $id))->row();
	}

}

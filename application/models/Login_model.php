<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "user";

	public function cek_login($name_user,$pass_user)
	{
		$where = array(
			'name_user' => $name_user, 
			'pass_user' => md5($pass_user)
		);

		return $this->db->get_where($this->_table, $where)->num_rows();
	}

	public function where($name_user,$pass_user)
	{
		$where = array(
			'name_user' => $name_user, 
			'pass_user' => md5($pass_user)
		);
		
		return $this->db->get_where($this->_table, $where)->row();
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* application/models/Product_model.php
*/
class User_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "user";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		return $this->db->order_by('id_user','DESC')->get($this->_table)->result();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_user' => $id))->row();
	}

	public function store()
	{
		$this->id_user 			= uniqid();
		$this->name_user		= $this->input->post('txt_name');
		$this->pass_user		= md5($this->input->post('txt_pass'));

		$result = $this->db->insert($this->_table, $this);

		if ($result) {
			redirect(site_url('user'));
		}
	}

	public function update($id)
	{
		$this->name_user		= $this->input->post('txt_name');
		$this->pass_user		= md5($this->input->post('txt_pass'));

		$result = $this->db->update($this->_table, $this, array('id_user' => $id));

		if ($result) {
			redirect(site_url('user'));
		}
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_user' => $id)); 
	}

}

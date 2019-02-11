<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "informasi";

	// function untuk mengambil seluruh data pada table database
	public function get()
	{
		return $this->db->get($this->_table)->row();
	}

	public function update($id)
	{
		$data = array(
			'alamat'  	=> $this->input->post('address'),
			'telepon'  	=> $this->input->post('telepon'),
			'email'  	=> $this->input->post('email'),
			'facebook'  => $this->input->post('facebook'),
			'twitter'  	=> $this->input->post('twitter'),
			'instagram' => $this->input->post('instagram'),
			'youtube'  	=> $this->input->post('youtube'),
			'tentang'  	=> $this->input->post('about'),
		);

		$this->db->update($this->_table, $data, array('id_informasi' => $id));
	}

}

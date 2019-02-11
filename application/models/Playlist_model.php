<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Playlist_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "playlist";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		return $this->db->order_by('id_playlist','DESC')->get($this->_table)->result();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_playlist' => $id))->row();
	}

	public function store()
	{
		$data = array(
			'id_playlist'    => null,
			'nama_playlist'  => $this->input->post('txt_nama'),
			'slug_playlist'	 => url_title($this->input->post('txt_nama'), 'dash', TRUE)
		);

		$this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$data = array(
			'nama_playlist'  => $this->input->post('txt_nama'),
			'slug_playlist'	 => url_title($this->input->post('txt_nama'), 'dash', TRUE)
		);

		$this->db->update($this->_table, $data, array('id_playlist' => $id));
	}

	public function delete($id)
	{
		$this->db->delete($this->_table, array('id_playlist' => $id)); 
	}

}

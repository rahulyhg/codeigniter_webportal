<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "kategori";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		return $this->db->order_by('id_kategori','DESC')->get($this->_table)->result();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_kategori' => $id))->row();
	}

	public function store()
	{
		$data = array(
			'id_kategori'    => null,
			'name_kategori'  => $this->input->post('txt_name'),
			'slug_kategori'	 => url_title($this->input->post('txt_name'), 'dash', TRUE)
		);

		$this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$this->name_kategori		= $this->input->post('txt_name');
		$this->slug_kategori		= url_title($this->input->post('txt_name'), 'dash', TRUE);

		$this->db->update($this->_table, $this, array('id_kategori' => $id));
	}

	public function delete($id)
	{
		$this->db->delete($this->_table, array('id_kategori' => $id)); 
	}

}

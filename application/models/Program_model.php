<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Program_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "program";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		return $this->db->order_by('id_program','DESC')->get($this->_table)->result();
	}

	public function count()
	{
		return $this->db->get($this->_table)->num_rows();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_program' => $id))->row();
	}

	public function store()
	{
		$data = array(
			'id_program'    	=> null,
			'nama_program'  	=> $this->input->post('txt_nama'),
			'slug_program'	 	=> url_title($this->input->post('txt_nama'), 'dash', TRUE),
			'gambar_program'	=> $this->_uploadImage(),
			'deskripsi_program'	=> $this->input->post('txt_deskripsi')
		);

		$this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		if (!empty($_FILES["img_program"]["name"])) {
			$data = $this->db->get_where($this->_table,array('id_program' => $id))->row();

			unlink("./asset/backend/fileman/Uploads/Images/Program/$data->gambar_program");

			$data = array(
				'nama_program'  	=> $this->input->post('txt_nama'),
				'slug_program'	 	=> url_title($this->input->post('txt_nama'), 'dash', TRUE),
				'gambar_program'	=> $this->_uploadImage(),
				'deskripsi_program'	=> $this->input->post('txt_deskripsi')
			);
		} else {
			$data = array(
				'nama_program'  	=> $this->input->post('txt_nama'),
				'slug_program'	 	=> url_title($this->input->post('txt_nama'), 'dash', TRUE),
				'deskripsi_program'	=> $this->input->post('txt_deskripsi')
			);
		}

		$this->db->update($this->_table, $data, array('id_program' => $id));
	}

	public function delete($id)
	{
		$data = $this->db->get_where($this->_table,array('id_program' => $id))->row();

		unlink("./asset/backend/fileman/Uploads/Images/Program/$data->gambar_program");

		$this->db->delete($this->_table, array('id_program' => $id)); 
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './asset/backend/fileman/Uploads/Images/Program';
		$config['allowed_types']        = 'gif|jpg|png';

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('img_program')) {
	        return $this->upload->data("file_name");
	    }
	    
	}

	public function recent($number,$offset)
	{
		return $this->db->order_by('id_program','DESC')->get($this->_table,$number,$offset)->result();		
	}

	public function where_slug($slug)
	{
		return $this->db->get_where($this->_table,array('slug_program' => $slug))->row();
	}

	public function program_recent()
	{
		return $this->db->order_by('id_program','DESC')->limit(8)->get($this->_table)->result();
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "artikel";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		$get = $this->db->select('*')->from('artikel')->join('kategori','kategori.id_kategori=artikel.kategori_id');
		return $this->db->order_by('id_artikel','DESC')->get()->result();
	}

	public function count()
	{
		return $this->db->get($this->_table)->num_rows();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_artikel' => $id))->row();
	}

	public function where_slug($slug)
	{
		return $this->db->get_where($this->_table,array('slug_artikel' => $slug))->row();
	}

	public function store()
	{
		$data = array(
			'id_artikel'    	=> null,
			'nama_artikel'  	=> $this->input->post('txt_name'),
			'slug_artikel'	 	=> url_title($this->input->post('txt_name'), 'dash', TRUE),
			'kategori_id'		=> $this->input->post('txt_kategori'),
			'gambar_artikel'	=> $this->_uploadImage(),
			'konten_artikel'	=> $this->input->post('txt_konten'),
			'hits_artikel'		=> 0
		);

		$this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		if (!empty($_FILES["img_image"]["name"])) {
			$data = $this->db->get_where($this->_table,array('id_artikel' => $id))->row();

			unlink("./asset/backend/fileman/Uploads/Images/Artikel/$data->gambar_artikel");

			$data = array(
				'nama_artikel'  	=> $this->input->post('txt_name'),
				'slug_artikel'	 	=> url_title($this->input->post('txt_name'), 'dash', TRUE),
				'kategori_id'		=> $this->input->post('txt_kategori'),
				'gambar_artikel'	=> $this->_uploadImage(),
				'konten_artikel'	=> $this->input->post('txt_konten')
			);
		} else {
			$data = array(
				'nama_artikel'  	=> $this->input->post('txt_name'),
				'slug_artikel'	 	=> url_title($this->input->post('txt_name'), 'dash', TRUE),
				'kategori_id'		=> $this->input->post('txt_kategori'),
				'konten_artikel'	=> $this->input->post('txt_konten')
			);
		}

		$this->db->update($this->_table, $data, array('id_artikel' => $id));
	}

	public function delete($id)
	{
		$data = $this->db->get_where($this->_table,array('id_artikel' => $id))->row();

		unlink("./asset/backend/fileman/Uploads/Images/Artikel/$data->gambar_artikel");

		$this->db->delete($this->_table, array('id_artikel' => $id)); 
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './asset/backend/fileman/Uploads/Images/Artikel';
		$config['allowed_types']        = 'gif|jpg|png';

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('img_image')) {
	        return $this->upload->data("file_name");
	    }
	    
	}

	public function limit_empat()
	{
		return $this->db->order_by('id_artikel','DESC')->limit(4)->get($this->_table)->result();
	}

	public function recent($number,$offset)
	{
		return $this->db->order_by('id_artikel','DESC')->get($this->_table,$number,$offset)->result();		
	}

	public function recent_limit()
	{
		return $this->db->order_by('id_artikel','DESC')->limit(4)->get($this->_table)->result();
	}

	public function popular_limit()
	{
		return $this->db->order_by('hits_artikel','DESC')->limit(4)->get($this->_table)->result();
	}

	public function search()
	{
		$this->db->like('nama_artikel', $this->input->post('txt_search'))->limit(15);
		return $this->db->order_by('id_artikel','DESC')->get($this->_table)->result();		
	}

	public function article_by_category($slug)
	{
		$this->db->select('*')->from($this->_table)->join('kategori','kategori.id_kategori=artikel.kategori_id');
		return $this->db->where('slug_kategori', $slug)->order_by('id_artikel','DESC')->get();
	}

}

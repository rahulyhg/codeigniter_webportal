<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "video";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		$this->db->select('*')->from('video')->join('playlist','playlist.id_playlist=video.playlist_id');
		return $this->db->order_by('id_video','DESC')->get()->result();
	}

	public function count()
	{
		return $this->db->get($this->_table)->num_rows();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_video' => $id))->row();
	}

	public function store()
	{
		$data = array(
			'id_video'    	=> null,
			'nama_video'  	=> $this->input->post('txt_nama'),
			'slug_video'	=> url_title($this->input->post('txt_nama'), 'dash', TRUE),
			'playlist_id' 	=> $this->input->post('txt_playlist'),
			'konten_video' 	=> $this->input->post('txt_konten'),
		);

		$this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$data = array(
			'nama_video'  	=> $this->input->post('txt_nama'),
			'slug_video'	=> url_title($this->input->post('txt_nama'), 'dash', TRUE),
			'playlist_id' 	=> $this->input->post('txt_playlist'),
			'konten_video' 	=> $this->input->post('txt_konten'),
		);

		$this->db->update($this->_table, $data, array('id_video' => $id));
	}

	public function delete($id)
	{
		$this->db->delete($this->_table, array('id_video' => $id)); 
	}

	public function recent($number,$offset)
	{
		$this->db->select('*')->join('playlist','playlist.id_playlist=video.playlist_id');
		return $this->db->order_by('id_video','DESC')->get($this->_table,$number,$offset)->result();		
	}

	public function video_recent()
	{
		return $this->db->order_by('id_video','DESC')->limit(6)->get($this->_table)->result();
	}

	public function playlist_slug($slug)
	{
		$this->db->select('*')->from($this->_table)->join('playlist','playlist.id_playlist=video.playlist_id');
		return $this->db->where('slug_playlist', $slug)->order_by('id_video','DESC')->get()->result();
	}

	public function where_slug($slug)
	{
		return $this->db->get_where($this->_table,array('slug_video' => $slug))->row();
	}
}

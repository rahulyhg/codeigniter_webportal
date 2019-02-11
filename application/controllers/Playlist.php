<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playlist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("playlist_model");

		// syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Category', 
		);
		$this->load->view('backend/playlist/index',$data);
	}

	public function data()
    {
        $results    = $this->playlist_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_playlist;
            $row[]  = $list->slug_playlist;
            $row[]  = '
                <center>
                    <a onclick="editForm('.$list->id_playlist.')" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_playlist.')" class="btn btn-xs btn-danger">delete</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function insert()
	{
		$store = $this->playlist_model->store();
	}

	public function edit($id)
	{
		$edit_playlist = $this->playlist_model->where($id);
		echo json_encode($edit_playlist);
	}

	public function update($id)
	{
		$store = $this->playlist_model->update($id);
	}

	public function delete($id)
	{
		$this->playlist_model->delete($id);
	}
}

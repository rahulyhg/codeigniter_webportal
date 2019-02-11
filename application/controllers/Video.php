<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("playlist_model");
		$this->load->model("video_model");

		// syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Video',
			'playlists'	 => $this->playlist_model->all()
		);
		$this->load->view('backend/video/index',$data);
	}

	public function data()
    {
        $results    = $this->video_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_video;
            $row[]  = $list->slug_video;
            $row[]  = $list->nama_playlist;
            $row[]  = '
                <center>
                    <a onclick="editForm('.$list->id_video.')" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_video.')" class="btn btn-xs btn-danger">delete</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function insert()
	{
		$store = $this->video_model->store();
	}

	public function edit($id)
	{
		$edit_video = $this->video_model->where($id);
		echo json_encode($edit_video);
	}

	public function update($id)
	{
		$store = $this->video_model->update($id);
	}

	public function delete($id)
	{
		$this->video_model->delete($id);
	}
}

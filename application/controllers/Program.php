<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("program_model");

		// syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Program', 
		);
		$this->load->view('backend/program/index',$data);
	}

	public function data()
    {
        $results    = $this->program_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_program;
            $row[]  = $list->slug_program;
            $row[]  = '
				<center>
				<img src="'.site_url('asset/backend/fileman/Uploads/Images/Program/').$list->gambar_program.'" width="80" height="50">
				</center>
            ';
            $row[]  = '
                <center>
                    <a href="'.site_url('program/edit/').$list->id_program.'" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_program.')" class="btn btn-xs btn-danger">delete</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function create()
	{
		$data = array(
			'page_title' 	=> 'Program',
		);
		$this->load->view('backend/program/create',$data);
	}

	public function insert()
	{
		$this->program_model->store();
		return redirect(site_url('program'));
	}

	public function edit($id)
	{
		$data = array(
			'page_title' 	=> 'Program',
			'program' 		=> $this->program_model->where($id),
		);
		$this->load->view('backend/program/edit',$data);
	}

	public function update($id)
	{
		$this->program_model->update($id);
		return redirect(site_url('program'));
	}

	public function delete($id)
	{
		$this->program_model->delete($id);
	}
}

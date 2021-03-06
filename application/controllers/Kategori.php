<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("kategori_model");

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
		$this->load->view('backend/kategori/index',$data);
	}

	public function data()
    {
        $results    = $this->kategori_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->name_kategori;
            $row[]  = $list->slug_kategori;
            $row[]  = '
                <center>
                    <a onclick="editForm('.$list->id_kategori.')" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_kategori.')" class="btn btn-xs btn-danger">delete</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function insert()
	{
		$store = $this->kategori_model->store();
	}

	public function edit($id)
	{
		$edit_kategori = $this->kategori_model->where($id);
		echo json_encode($edit_kategori);
	}

	public function update($id)
	{
		$store = $this->kategori_model->update($id);
	}

	public function delete($id)
	{
		$this->kategori_model->delete($id);
	}
}

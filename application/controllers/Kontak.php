<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("kontak_model");

		// syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		# code...
	}

	public function all()
	{
		$data = array(
			'page_title' => 'Contact',
		);
		$this->load->view('backend/kontak/index',$data);
	}

	public function data()
    {
        $results    = $this->kontak_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_kontak;
            $row[]  = $list->email_kontak;
            $row[]  = $list->subjek_kontak;
            if ($list->balas_kontak == "") {
            	$row[] 	= '<p style="color: red;">Belum Dibalas</p>';
            } else {
            	$row[] 	= '<p>Sudah Dibalas</p>';
            }
            $row[]  = '
                <center>
                    <a onclick="editForm('.$list->id_kontak.')" class="btn btn-xs btn-warning">show or reply</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function insert()
	{
		$insert = $this->kontak_model->store();
    	redirect(site_url('welcome/contact'));
	}

	public function edit($id)
	{
		$edit_kontak = $this->kontak_model->where($id);
		echo json_encode($edit_kontak);
	}

	public function update($id)
	{
		$this->kontak_model->update($id);
	}

	public function delete($id)
	{
		$this->kontak_model->delete($id);
	}
}

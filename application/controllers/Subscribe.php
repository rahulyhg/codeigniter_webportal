<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("subscribe_model");

		// syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Subscribe', 
		);
		$this->load->view('backend/subscribe/index',$data);
	}

	public function data()
    {
        $results    = $this->subscribe_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->email_subscribe;
            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    public function insert()
    {
    	$insert = $this->subscribe_model->store();

    	if ($insert) {
    		redirect($_SERVER['HTTP_REFERER']);
    	}
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("user_model");

		// script apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		// array untuk parsing data ke view
		$data = array(
			'no' 		=> 1,
			'users' 	=> $this->user_model->all()
		);

		$this->load->view('backend/user/index', $data);
	}

	public function create()
	{
		$this->load->view("backend/user/create");
	}

	public function insert()
	{
		$store = $this->user_model->store();
	}

	public function edit($id)
	{
		$data["user"]	= $this->user_model->where($id);
		$this->load->view("backend/user/edit",$data);	
	}

	public function update($id)
	{
		$store = $this->user_model->update($id);
	}

	public function delete($id)
	{
		if ($this->user_model->delete($id)) {
            redirect(site_url('user'));
        }
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model("informasi_model");

		// syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Information',
			'informasi'	 => $this->informasi_model->get(),	
		);
		$this->load->view('backend/informasi/index',$data);
	}

	public function change($id)
	{
		$store = $this->informasi_model->update($id);
		return redirect(site_url('informasi'));
	}

}

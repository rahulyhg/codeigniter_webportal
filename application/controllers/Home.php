<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model apa yang digunakan
		$this->load->model('artikel_model');
		$this->load->model('program_model');
		$this->load->model('video_model');
		$this->load->model('subscribe_model');
		$this->load->model('kontak_model');
	
		// script apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'page_title' 		=> 'Admin',
			'total_artikel'		=> $this->artikel_model->count(),
			'total_program'		=> $this->program_model->count(),
			'total_video'		=> $this->video_model->count(),
			'total_subscribe'	=> $this->subscribe_model->count(),
			'total_kontak'		=> $this->kontak_model->count(),
		);
		$this->load->view('backend/home/admin', $data);
	}

	
}

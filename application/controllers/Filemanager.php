<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filemanager extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('backend/filemanager/index');
	}

}

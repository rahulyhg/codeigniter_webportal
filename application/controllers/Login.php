<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
	}

	public function index()
	{
		$this->load->view("backend/login/index");
	}

	public function action_login()
	{
		$name_user 	= $this->input->post('txt_name');
		$pass_user 	= $this->input->post('txt_pass');

		$cek 	= $this->login_model->cek_login($name_user,$pass_user);
		$data	= $this->login_model->where($name_user,$pass_user);

		if ($cek == 1) {
			
			$data_session = array(
				'id_user' 	=> $data->id_user,
				'username' 	=> $name_user,
				'status' 	=> "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(site_url('home'));
		} else {
			redirect(site_url('login'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}	
}

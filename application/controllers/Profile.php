<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// load model
		$this->load->model('profile_model');
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function edit($id_user)
	{
		// ambil data dari database sesuai id user
		$data = $this->profile_model->where($id_user);

		// parsing data ke view
		$this->load->view('backend/profile/index', $data);
	}

	public function change($id_user)
	{
		$data1 = array(
			'name_user' => $this->input->post('txt_name'), 
		);

		$data2 = array(
			'name_user' => $this->input->post('txt_name'), 
			'pass_user' => md5($this->input->post('txt_pass')), 
		);

		if (empty($this->input->post('txt_pass'))) {
			$this->db->update('user', $data1, array('id_user' => $id_user));
		} else {
			$this->db->update('user', $data2, array('id_user' => $id_user));
		}

		$data = $this->profile_model->where($id_user);

		if ($data) {
			$data_session = array(
				'id_user' 	=> $data->id_user,
				'username' 	=> $data->name_user,
				'status' 	=> "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(site_url('home'));
		} else {
			redirect(site_url('login'));
		}
	}
}

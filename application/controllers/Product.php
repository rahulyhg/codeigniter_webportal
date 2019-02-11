<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->library("form_validation");

		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'no' 		=> 1,
			'products' 	=> $this->product_model->all()
		);

		$this->load->view("backend/product/index", $data);
	}

	public function insert()
	{
		$product 	= $this->product_model;
		$validation	= $this->form_validation;

		// set aturan pada model
		$validation->set_rules($product->rules());

		if ($validation->run()) {
			$product->store();
			redirect(site_url('product'));
		}

		$this->load->view("backend/product/create");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/product');

		$product 	= $this->product_model;
		$validation	= $this->form_validation;

		// set aturan pada model
		$validation->set_rules($product->rules());

		if ($validation->run()) {
			$product->update();
			redirect(site_url('product'));
		}

		$data["product"]	= $product->where($id);
		
		if (!$data["product"]) show_404();

		$this->load->view("backend/product/edit",$data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->product_model->delete($id)) {
            redirect(site_url('product'));
        }
	}
}

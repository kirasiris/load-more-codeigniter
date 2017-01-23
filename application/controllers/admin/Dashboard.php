<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->model('dosen_model');

	}

	public function index()
	{
		if($this->dosen_model->admin_id())
		{

			$this->load->view("admin/header");
			$this->load->view("admin/sidebar");
			$this->load->view("admin/navbar");
			$this->load->view("admin/dashboard/dashboard");
			$this->load->view("admin/footer");
		}else{
			redirect("admin/login");
		}
	}

	public function logout()
	{
		if($this->dosen_model->admin_id())
		{
			$this->session->sess_destroy();
			
			redirect("admin/login");

		}else{
			redirect("admin/login");
		}
	}

}
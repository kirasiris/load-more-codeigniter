<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->model('dosen_model');

	}

	public function index()
	{
		if($this->dosen_model->admin_id())
		{
			redirect('admin/dashboard');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function check()
	{
		$username = $this->input->post("username");
		$password = md5($this->input->post("password", TRUE));
        //checking data via model
        $checking = $this->dosen_model->check_all('tbl_admin', 
        			array('username' => $username),
        			array('password' => $password)
        );
        //jika ditemukan, maka create session
        if($checking != FALSE)
        {
            foreach($checking as $auth)
            {
                $this->session->set_userdata(array(
                'id_admin'  => $auth->id_admin,
                'username'  => $auth->username,
                'password'  => $auth->password,
                'nama'      => $auth->nama
                ));
                redirect('admin/dashboard/');
            }
        }else{
            $this->load->view('admin/login');
        }		
	}

}
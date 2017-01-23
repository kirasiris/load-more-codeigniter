<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->model('dosen_model');

	}

	public function index()
	{
		if($this->dosen_model->admin_id())
		{
	        $config['base_url'] = base_url().'admin/berita/index/';
	        $config['total_rows'] = $this->dosen_model->count_berita()->num_rows();
	        $config['per_page'] = 5;
	        //instalasi paging
	        $this->pagination->initialize($config);
	        //deklare halaman
	        $halaman            =  $this->uri->segment(4);
	        $halaman            =  $halaman == '' ? 0 : $halaman;
	        //create data array
	        $data = array(
	            'data_berita' 	=> $this->dosen_model->index_berita($halaman,$config['per_page']),
	            'paging'        => $this->pagination->create_links()
	        );
	        if($data['data_berita'] != NULL)
	        {
	            $data['berita'] = $data['data_berita'];
	        }else{
	            $data['berita'] = NULL;
	        }			
			$this->load->view("admin/header", $data);
			$this->load->view("admin/sidebar");
			$this->load->view("admin/navbar");
			$this->load->view("admin/berita/data");
			$this->load->view("admin/footer");
		}else{
			redirect("admin/login");
		}
	}

	public function tambah()
	{
		if($this->dosen_model->admin_id())
		{
			$data = array(
					'type'	=> 'add'
		);
		$this->load->view("admin/header", $data);
		$this->load->view("admin/sidebar");
		$this->load->view("admin/navbar");
		$this->load->view("admin/berita/tambah");
		$this->load->view("admin/footer");

		}else{

			redirect("admin/login");

		}
	}

	public function edit()
	{

		if($this->dosen_model->admin_id())
		{
			$id_berita = $this->uri->segment(4);

			$data = array(
					'type'			=> 'edit',
					'data_berita'	=> $this->dosen_model->edit_berita($id_berita)->row_array()
			);
			$this->load->view("admin/header", $data);
			$this->load->view("admin/sidebar");
			$this->load->view("admin/navbar");
			$this->load->view("admin/berita/edit");
			$this->load->view("admin/footer");
		}else{
			redirect("admin/login/");
		}	
	}

	public function simpan()
	{
		if($this->dosen_model->admin_id())
		{
			$type 			 = $this->input->post("type");
			$id['id_berita'] = $this->input->post("id_berita");
			//check var type
			if($type == "add")
			{
                //config upload
                $config = array(
	                'upload_path'   => realpath('assets/images/berita/'),
	                'allowed_types' =>'jpg|png|jpeg',
	                'encrypt_name'  =>TRUE,
	                'remove_spaces' =>TRUE,
	                'overwrite'     =>TRUE,
	                'max_size'      =>'5000',
	                'max_width'     =>'5000',
	                'max_height'    =>'5000'
                );
                //load library upload
                $this->load->library("upload",$config);

                $this->upload->initialize($config);

                if($this->upload->do_upload("userfile"))
                {
                    $data_upload    = $this->upload->data();
                    //insert db
                    $insert = array(
                    			'judul' 	=> $this->input->post("judul"),
                    			'slug'		=> url_title(strtolower($this->input->post("judul"))),
                    			'thumbnail'	=> $data_upload['file_name'],
                    			'isi_berita'=> $this->input->post("isi")
                    );
                    $this->db->insert("tbl_berita", $insert);
                    redirect("admin/berita");
                }
			}elseif($type == "edit"){

				if(empty($_FILES['userfile']['name']))
                {
                	$update = array(
                    			'judul' 	=> $this->input->post("judul"),
                    			'slug'		=> url_title(strtolower($this->input->post("judul"))),
                    			'isi_berita'=> $this->input->post("isi")
                	);
                    $this->db->update("tbl_berita", $update, $id);
                    redirect("admin/berita");     

                }else{

	                //config upload
	                $config = array(
		                'upload_path'   => realpath('assets/images/berita/'),
		                'allowed_types' =>'jpg|png|jpeg',
		                'encrypt_name'  =>TRUE,
		                'remove_spaces' =>TRUE,
		                'overwrite'     =>TRUE,
		                'max_size'      =>'5000',
		                'max_width'     =>'5000',
		                'max_height'    =>'5000'
	                );
	                //load library upload
	                $this->load->library("upload",$config);

	                $this->upload->initialize($config);

	                if($this->upload->do_upload("userfile"))
	                {
	                    $data_upload    = $this->upload->data();
	                    //insert db
	                    $update = array(
	                    			'judul' 	=> $this->input->post("judul"),
	                    			'slug'		=> url_title(strtolower($this->input->post("judul"))),
	                    			'thumbnail'	=> $data_upload['file_name'],
	                    			'isi_berita'=> $this->input->post("isi")
	                    );
	                    $this->db->update("tbl_berita", $update, $id);
	                    redirect("admin/berita");
	                }
                }
			}
		}else{
			redirect("admin/login");
		}
	}

	public function delete()
	{
		if($this->dosen_model->admin_id())
		{
			$id  = $this->uri->segment(4);

			$key['id_berita'] = $id;

			$this->db->delete('tbl_berita', $key);

			redirect("admin/berita/");

		}else{

			redirect("admin/login");
		}
	}


}
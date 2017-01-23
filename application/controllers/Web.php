<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->model('dosen_model');

	}

	public function index()
	{

		$data = array(
					'title' => 'SMK TI - Bootstrap',
					'body'  => 'ini body'
				);

		$this->load->view('header', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

    public function detail($slug)
    {
    	$data = array(
    			'title'			=> 'SMK TI - Annajiyah',
    			'detail_berita' => $this->dosen_model->detail_berita($slug)
    	);
		$this->load->view('header', $data);
		$this->load->view('detail');
		$this->load->view('footer');    	

    }

	function get_berita()
    {
        $page   =  $_GET['page'];
        $berita = $this->dosen_model->get_berita($page);
        foreach($berita as $hasil){

            echo '<div class="col-md-3">
			          <div class="thumbnail">
			                <img src="'.base_url().'assets/images/berita/'.$hasil->thumbnail.'" alt="...">
			                <div class="caption">

			                  <p>'.$hasil->judul.'</p>

			                  <p>
			                  <a href="'.base_url().'berita/'.$hasil->slug.'" class="btn btn-primary" role="button">Selengkapnya</a> 
			                  </p>
			                </div>
			          </div>
			       </div>';
        }
        exit;
    }    

}

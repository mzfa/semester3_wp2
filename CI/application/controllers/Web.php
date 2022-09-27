<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$data['judul'] = "Halaman Judul";
		$this->load->view('v_index',$data);
	}

	public function about()
	{
		$data['meta'] = ['title' => "About Beritangoding"];
		$this->load->view('about',$data);
	}

	public function contact()
	{
		$data['meta'] = ['title' => "Contact Beritangoding"];
		if($this->input->method() == 'post'){
			print_r($this->input->method());
		}
		$this->load->view('contact',$data);
	}
	
}

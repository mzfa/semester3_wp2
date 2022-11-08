<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_data');
		$this->load->library('form_validation');
    }

	public function index()
	{
		$data['judul'] = "Halaman Judul";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
	public function about()
	{
		$data['judul'] = "Halaman About";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}

	
	public function bio()
	{
		$data = [
			'judul' => "Halaman Data",
			'bio' => $this->M_data->ambil_data()->result(),
		];
		$this->load->view('v_header',$data);
		$this->load->view('v_data',$data);
		$this->load->view('v_footer',$data);
	}
	public function create()
	{
		$data['judul'] = "Tambah Data";
		$this->load->view('v_header');
		$this->load->view('v_create');
		$this->load->view('v_footer');
	}

	public function save()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

		if($this->form_validation->run() != false){
			$insert['nama'] = $this->input->post('nama');
			$insert['jk'] = $this->input->post('jenis_kelamin');
			$insert['alamat'] = $this->input->post('alamat');
			$insert['pekerjaan'] = $this->input->post('pekerjaan');
			$this->M_data->insert($insert);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Disimpan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
			redirect(site_url('web/bio'));
		}else{
			$this->load->view('v_form');
		}
	}

	public function edit($id)
	{

		$data['biodata'] = $this->M_data->get_one($id)->row();
		// var_dump($data['biodata']);
		// die();
		$data['judul'] = "Ubah Data";
		$this->load->view('v_header');
		$this->load->view('v_edit', $data);
		$this->load->view('v_footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

		if($this->form_validation->run() != false){
			$update['id'] = $this->input->post('id');
			$update['nama'] = $this->input->post('nama');
			$update['jk'] = $this->input->post('jenis_kelamin');
			$update['alamat'] = $this->input->post('alamat');
			$update['pekerjaan'] = $this->input->post('pekerjaan');
			$this->M_data->update($update);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diupdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
			redirect(site_url('web/bio'));
		}else{
			$this->load->view('v_form');
		}
	}

	public function delete($id)
    {
		// die($id);
        $this->M_data->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
		redirect(site_url('web/bio'));
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

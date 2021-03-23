<?php

class Dashboardadmin extends CI_Controller{

	function __construct(){
		parent::__construct();

		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Anda Belum Login !
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('auth');
			}
		}

	public function index()
	{
		$data['tb_stok'] = $this->stok_model->tampil_data('tb_stok')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/dashboardadmin',$data);
		$this->load->view('templates_administrator/footer');
	}
}

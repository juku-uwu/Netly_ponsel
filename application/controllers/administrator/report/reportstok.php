<?php

class Reportstok extends CI_Controller{

	public function index()
	{		
		$data['tb_stok'] = $this->stok_model->tampil_data('tb_stok')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportstok',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_stok'] = $this->stok_model->tampil_data('tb_stok')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_stok',$data);

 		}
}
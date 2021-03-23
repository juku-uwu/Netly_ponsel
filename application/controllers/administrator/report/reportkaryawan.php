<?php

class Reportkaryawan extends CI_Controller{
	public function index()
	{		
		$data['tb_kryw'] = $this->karyawan_model->tampil_data('tb_kryw')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportkaryawan',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_kryw'] = $this->karyawan_model->tampil_data('tb_kryw')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_karyawan',$data);

 		}
}
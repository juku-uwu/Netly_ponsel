<?php

class Reportpengeluaranharian extends CI_Controller{
	public function index()
	{		
		$data['tb_pengeluaranharian'] = $this->pengeluaranharian_model->tampil_data('tb_pengeluaranharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportpengeluaranharian',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_pengeluaranharian'] = $this->pengeluaranharian_model->tampil_data('tb_pengeluaranharian')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_pengeluaranharian',$data);

 		}
}
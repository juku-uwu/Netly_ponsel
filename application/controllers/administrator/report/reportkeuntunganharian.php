<?php

class Reportkeuntunganharian extends CI_Controller{

	public function index()
	{		
		$data['tb_keuntunganharian'] = $this->keuntunganharian_model->tampil_data('tb_keuntunganharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportkeuntunganharian',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_keuntunganharian'] = $this->keuntunganharian_model->tampil_data('tb_keuntunganharian')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_keuntunganharian',$data);

 		}
}
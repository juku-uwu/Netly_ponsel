<?php

class Reportbersihbulanan extends CI_Controller{
	public function index()
	{		
		$data['tb_bersihbulanan'] = $this->bersihbulanan_model->tampil_data('tb_bersihbulanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportbersihbulanan',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_bersihbulanan'] = $this->bersihbulanan_model->tampil_data('tb_bersihbulanan')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_bersihbulanan',$data);

 		}
}
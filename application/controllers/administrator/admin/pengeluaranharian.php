<?php

class Pengeluaranharian extends CI_Controller{

	public function index()
	{		
		$data['tb_pengeluaranharian'] = $this->pengeluaranharian_model->tampil_data('tb_pengeluaranharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pengeluaranharian',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_pengeluaranharian'] = $this->pengeluaranharian_model->tampil_data('tb_pengeluaranharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pengeluaranharian_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$tanggal = $this->input->post('tanggal');
			$pagi = $this->input->post('pagi');
			$siang = $this->input->post('siang');
			$malam = $this->input->post('malam');
			$totalpengeluaran = $this->input->post('totalpengeluaran');
			$deskripsi = $this->input->post('deskripsi');
			$cabang = $this->input->post('cabang');
			
			
			
			
        		$data = array(
					'tanggal' => $tanggal,
					'pagi' => $pagi,
					'siang' => $siang,
					'malam' => $malam,
					'totalpengeluaran' => $totalpengeluaran,
					'deskripsi' => $deskripsi,
        			'cabang' => $cabang,
        			
        			
        		);

        		$this->pengeluaranharian_model->input_data($data,'tb_pengeluaranharian');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Pengeluaran Harian Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pengeluaranharian');
			}

		}
	public function _rules()
	{
		
		$this->form_validation->set_rules('tanggal','Tanggal','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('pagi','Pagi','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('siang','Siang','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('malam','Malam','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('totalpengeluaran','Total Pengeluaran','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('deskripsi','Deskripsi','required',['required' => '%s  Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('cabang','Cabang','required',['required' => '%s Tidak Boleh Kosong!']);
		
		

	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_pengeluaranharian'] = $this->pengeluaranharian_model->edit_data($where,'tb_pengeluaranharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/pengeluaranharian_update',$data);
		$this->load->view('templates_administrator/footer');

	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
			$pagi = $this->input->post('pagi');
			$siang = $this->input->post('siang');
			$malam = $this->input->post('malam');
			$totalpengeluaran = $this->input->post('totalpengeluaran');
			$deskripsi = $this->input->post('deskripsi');
			$cabang = $this->input->post('cabang');
			
			
			
			
        		$data = array(
					'tanggal' => $tanggal,
					'pagi' => $pagi,
					'siang' => $siang,
					'malam' => $malam,
					'totalpengeluaran' => $totalpengeluaran,
					'deskripsi' => $deskripsi,
        			'cabang' => $cabang,
        			
        			
        		);


			$where = array(
				'id' => $id
			);

        		$this->pengeluaranharian_model->update_data($where,$data,'tb_pengeluaranharian');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Pengeluaran Hari ini Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/pengeluaranharian');
		}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->pengeluaranharian_model->hapus_data($where,'tb_pengeluaranharian');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Pengeluaran Hari ini Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/pengeluaranharian');
	}

	


}
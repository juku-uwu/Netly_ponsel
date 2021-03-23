<?php

class Bersihbulanan extends CI_Controller
{

	public function index()
	{
		$data['tb_bersihbulanan'] = $this->bersihbulanan_model->tampil_data('tb_bersihbulanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/bersihbulanan', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_bersihbulanan'] = $this->bersihbulanan_model->tampil_data('tb_bersihbulanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/bersihbulanan_tambah', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{

		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		} else {
			$inputbulan = $this->input->post('inputbulan');
			$inputtahun = $this->input->post('inputtahun');
			$cabang = $this->input->post('inputcabang');
			$totalkeuntungan = $this->input->post('totalkeuntungan');
			$totalpengeluaran = $this->input->post('totalpengeluaran');
			$totalbersih = $this->input->post('totalbersih');





			$data = array(
				'inputbulan' => $inputbulan,
				'inputtahun' => $inputtahun,
				'inputcabang' => $cabang,
				'totalkeuntungan' => $totalkeuntungan,
				'totalpengeluaran' => $totalpengeluaran,
				'totalbersih' => $totalbersih,



			);

			$this->bersihbulanan_model->input_data($data, 'tb_bersihbulanan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Bersih Bulanan Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/bersihbulanan');
		}
	}
	public function _rules()
	{

		$this->form_validation->set_rules('inputbulan', 'inputbulan dan inputtahun', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('inputtahun', 'inputbulan dan inputtahun', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('inputcabang', 'inputcabang', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('totalkeuntungan', 'Total Keuntungan', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('totalpengeluaran', 'Total Keluaran', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('totalbersih', 'Total Bersih', 'required', ['required' => '%s  Tidak Boleh Kosong!']);
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_bersihbulanan'] = $this->bersihbulanan_model->edit_data($where, 'tb_bersihbulanan')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/bersihbulanan_update', $data);
		$this->load->view('templates_administrator/footer');
	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$bulan = $this->input->post('inputbulan');
		$tahun = $this->input->post('inputtahun');
		$cabang = $this->input->post('inputcabang');
		$totalkeuntungan = $this->input->post('totalkeuntungan');
		$totalpengeluaran = $this->input->post('totalpengeluaran');
		$totalbersih = $this->input->post('totalbersih');

		$data = array(
			'inputbulan' => $bulan,
			'inputtahun' => $tahun,
			'inputcabang' => $cabang,
			'totalkeuntungan' => $totalkeuntungan,
			'totalpengeluaran' => $totalpengeluaran,
			'totalbersih' => $totalbersih,
		);


		$where = array(
			'id' => $id
		);

		$this->bersihbulanan_model->update_data($where, $data, 'tb_bersihbulanan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Bersih Bulanan Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/bersihbulanan');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->bersihbulanan_model->hapus_data($where, 'tb_bersihbulanan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Bersih Bulanan Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/bersihbulanan');
	}
}

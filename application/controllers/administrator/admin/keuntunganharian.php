<?php

class Keuntunganharian extends CI_Controller
{

	public function index()
	{
		$data['tb_keuntunganharian'] = $this->keuntunganharian_model->tampil_data('tb_keuntunganharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/keuntunganharian', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_keuntunganharian'] = $this->keuntunganharian_model->tampil_data('tb_keuntunganharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/keuntunganharian_tambah', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		} else {
			$tanggal = $this->input->post('tanggal');
			$cabang = $this->input->post('cabang');
			$uang_kembali = $this->input->post('uang_kembali');
			$hsl_pagi = $this->input->post('hsl_pagi');
			$hsl_sore = $this->input->post('hsl_sore');
			$hsl_malam = $this->input->post('hsl_malam');
			$total = $this->input->post('total');
			$lebihan = $this->input->post('lebihan');
			$shift_pagi = $this->input->post('shift_pagi');
			$shift_sore = $this->input->post('shift_sore');
			$shift_malam = $this->input->post('shift_malam');
			$totalkeuntungan = $this->input->post('totalkeuntungan');
			$catatan = $this->input->post('catatan');


			$data = array(
				'tanggal' => $tanggal,
				'cabang' => $cabang,
				'uang_kembali' => $uang_kembali,
				'hsl_pagi' => $hsl_pagi,
				'hsl_sore' => $hsl_sore,
				'hsl_malam' => $hsl_malam,
				'total' => $total,
				'lebihan' => $lebihan,
				'shift_pagi' => $shift_pagi,
				'shift_sore' => $shift_sore,
				'shift_malam' => $shift_malam,
				'totalkeuntungan' => $totalkeuntungan,
				'catatan' => $catatan
			);

			$this->keuntunganharian_model->input_data($data, 'tb_keuntunganharian');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Keuntungan Harian Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/keuntunganharian');
		}
	}
	public function _rules()
	{

		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('cabang', 'Cabang', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('uang_kembali', 'Uang Kembali', 'required', ['required' => '%s  Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('hsl_pagi', 'Hasil Pagi', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('hsl_sore', 'Hasil Sore', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('hsl_malam', 'Hasil Malam', 'required', ['required' => '%s Belum Diisi!']);
		$this->form_validation->set_rules('lebihan', 'Lebihan', 'required', ['required' => '%s Tidak Boleh Kosong!']);
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_keuntunganharian'] = $this->keuntunganharian_model->edit_data($where, 'tb_keuntunganharian')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/keuntunganharian_update', $data);
		$this->load->view('templates_administrator/footer');
	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$cabang = $this->input->post('cabang');
		$uang_kembali = $this->input->post('uang_kembali');
		$hsl_pagi = $this->input->post('hsl_pagi');
		$hsl_sore = $this->input->post('hsl_sore');
		$hsl_malam = $this->input->post('hsl_malam');
		$total = $this->input->post('total');
		$lebihan = $this->input->post('lebihan');
		$shift_pagi = $this->input->post('shift_pagi');
		$shift_sore = $this->input->post('shift_sore');
		$shift_malam = $this->input->post('shift_malam');
		$totalkeuntungan = $this->input->post('totalkeuntungan');
		$catatan = $this->input->post('catatan');


		$data = array(
			'tanggal' => $tanggal,
			'cabang' => $cabang,
			'uang_kembali' => $uang_kembali,
			'hsl_pagi' => $hsl_pagi,
			'hsl_sore' => $hsl_sore,
			'hsl_malam' => $hsl_malam,
			'total' => $total,
			'lebihan' => $lebihan,
			'shift_pagi' => $shift_pagi,
			'shift_sore' => $shift_sore,
			'shift_malam' => $shift_malam,
			'totalkeuntungan' => $totalkeuntungan,
			'catatan' => $catatan
		);

		$where = array(
			'id' => $id
		);

		$this->keuntunganharian_model->update_data($where, $data, 'tb_keuntunganharian');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Keuntungan Hari ini Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/keuntunganharian');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->keuntunganharian_model->hapus_data($where, 'tb_keuntunganharian');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Keuntungan Hari ini Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/keuntunganharian');
	}
}

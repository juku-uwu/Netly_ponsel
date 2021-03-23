<?php

class Stok extends CI_Controller
{
	public function index()
	{
		$data['tb_stok'] = $this->stok_model->tampil_data('tb_stok')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/stok', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{

		$data['tb_stok'] = $this->stok_model->tampil_data('tb_stok')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/stok_tambah', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		} else {
			$provider = $this->input->post('provider');
			$kuota = $this->input->post('kuota');
			$harga = $this->input->post('harga');
			$harga_awal = $this->input->post('harga_awal');
			$distributor = $this->input->post('distributor');
			$deskripsi = $this->input->post('deskripsi');



			$data = array(

				'provider' => $provider,
				'kuota' => $kuota,
				'harga' => $harga,
				'harga_awal' => $harga_awal,
				'distributor' => $distributor,
				'deskripsi' => $deskripsi,


			);

			$this->stok_model->input_data($data, 'tb_stok');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Stok Berhasil Ditambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('administrator/admin/stok');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('provider', 'provider', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('kuota', 'jumlah kuota', 'required', ['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('harga', 'harga', 'required', ['required' => '%s Tidak Boleh Kosong!']);
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_stok'] = $this->stok_model->edit_data($where, 'tb_stok')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/stok_update', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{


		$id = $this->input->post('id');
		$provider = $this->input->post('provider');
		$kuota = $this->input->post('kuota');
		$harga = $this->input->post('harga');
		$harga_awal = $this->input->post('harga_awal');
		$distributor = $this->input->post('distributor');
		$deskripsi = $this->input->post('deskripsi');



		$data = array(

			'provider' => $provider,
			'kuota' => $kuota,
			'harga' => $harga,
			'harga_awal' => $harga_awal,
			'distributor' => $distributor,
			'deskripsi' => $deskripsi,





		);

		$where = array('id' => $id);

		$this->stok_model->update_data($where, $data, 'tb_stok');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Stok Berhasil Diubah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('administrator/admin/stok');
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->stok_model->hapus_data($where, 'tb_stok');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Jabatan Berhasil Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/stok');
	}
}

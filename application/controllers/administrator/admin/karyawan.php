<?php

class Karyawan extends CI_Controller{


    
	public function index()
	{	
		$data['tb_kryw'] = $this->karyawan_model->tampil_data('tb_kryw')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/karyawan',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		
		$data['tb_kryw'] = $this->karyawan_model->tampil_data('tb_kryw')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/karyawan_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');			
			$telp = $this->input->post('telp');
			
			
        		$data = array(

        			'nik' => $nik,
        			'nama' => $nama,
        			
        			'jenis_kelamin' => $jenis_kelamin,
        			'alamat' => $alamat,       			
        			'telp' => $telp,
        		        			
        		);

        		$this->karyawan_model->input_data($data,'tb_kryw');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Karyawan Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/karyawan');
			}

		}
	public function _rules()
	{
		$this->form_validation->set_rules('nik','Tempat Lahir','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('nama','Nama','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('alamat','Alamat','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('telp','Telepon','required',['required' => '%s Tidak Boleh Kosong!']);
		
		
	}

	public function update($id)
	{
		$where = array('id' => $id);
		
		$data['tb_kryw'] = $this->karyawan_model->edit_data($where,'tb_kryw')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/karyawan_update',$data);
		$this->load->view('templates_administrator/footer');

	}

	public function update_aksi(){

			
			$id = $this->input->post('id');
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');		
			$telp = $this->input->post('telp');
			
			
			
        		$data = array(

        			'nik' => $nik,
        			'nama' => $nama,
        			'alamat' => $alamat,
        			'jenis_kelamin' => $jenis_kelamin,
        			        			
        			'telp' => $telp,
        			
        			

        		);

        		$where = array('id' => $id);

        		$this->karyawan_model->update_data($where,$data,'tb_kryw');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Karyawan Berhasil Diupdate!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/karyawan');

		}
	
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->karyawan_model->hapus_data($where,'tb_kryw');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data Karyawan Berhasil Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/karyawan');
	}

	
}
<?php

class distributor extends CI_Controller
{

    public function index()
    {
        $data['tb_distributor'] = $this->distributor_model->tampil_data('tb_distributor')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebaradmin');
        $this->load->view('administrator/admin/distributor', $data);
        $this->load->view('templates_administrator/footer');
    }
    public function input()
    {
        $data['tb_distributor'] = $this->distributor_model->tampil_data('tb_distributor')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebaradmin');
        $this->load->view('administrator/admin/distributor_tambah', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $nama_distri = $this->input->post('nama_distri');
            $alamat_toko = $this->input->post('alamat_toko');
            $nama_kurir = $this->input->post('nama_kurir');
            $no_hp = $this->input->post('no_hp');


            $data = array(
                'nama_distri' => $nama_distri,
                'alamat_toko' => $alamat_toko,
                'nama_kurir' => $nama_kurir,
                'no_hp' => $no_hp,
            );

            $this->distributor_model->input_data($data, 'tb_distributor');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Keuntungan Harian Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
            redirect('administrator/admin/distributor');
        }
    }
    public function _rules()
    {

        $this->form_validation->set_rules('nama_distri', 'nama distri', 'required', ['required' => '%s Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('alamat_toko', 'alamat toko', 'required', ['required' => '%s Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('nama_kurir', 'nama kurir', 'required', ['required' => '%s  Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('no_hp', 'no hp', 'required', ['required' => '%s Tidak Boleh Kosong!']);
    }

    public function update($id)
    {
        $where = array('id' => $id);

        $data['tb_distributor'] = $this->distributor_model->edit_data($where, 'tb_distributor')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebaradmin');
        $this->load->view('administrator/admin/distributor_update', $data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi()
    {
        $id = $this->input->post('id');
        $nama_distri = $this->input->post('nama_distri');
        $alamat_toko = $this->input->post('alamat_toko');
        $nama_kurir = $this->input->post('nama_kurir');
        $no_hp = $this->input->post('no_hp');


        $data = array(
            'nama_distri' => $nama_distri,
            'alamat_toko' => $alamat_toko,
            'nama_kurir' => $nama_kurir,
            'no_hp' => $no_hp,
        );

        $where = array(
            'id' => $id
        );

        $this->distributor_model->update_data($where, $data, 'tb_distributor');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Keuntungan Hari ini Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
        redirect('administrator/admin/distributor');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->distributor_model->hapus_data($where, 'tb_distributor');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Keuntungan Hari ini Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
        redirect('administrator/admin/distributor');
    }
}

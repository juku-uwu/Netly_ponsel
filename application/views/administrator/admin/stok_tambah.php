<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Stok</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Tambah Stok</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">

        <?php echo form_open_multipart('administrator/admin/stok/input_aksi'); ?>
        <div class="card card-primary">

          <div class="card-body">

            <div class="form-group">
              <label for="inputStatus">Provider</label>
              <select class="form-control custom-select" name="provider">
                <option selected disabled>-Pilih Provider-</option>
                <option>Telkomsel</option>
                <option>Tri</option>
                <option>Indosat</option>
                <option>XL</option>
                <option>Axis</option>
                <option>Smartfren</option>
              </select>
              <?php echo form_error('provider', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
              <label>Masukkan Kuota (Gb)</label>
              <div class="input-group">
                <input type="text" class="form-control" name="kuota">
              </div>
              <?php echo form_error('kuota', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
              <label for="inputName">Harga</label>
              <input type="text" name="harga" class="form-control">
              <?php echo form_error('harga', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
              <label for="inputName">Harga awal</label>
              <input type="text" name="harga_awal" class="form-control">
              <?php echo form_error('harga', '<div class="text-danger small" ml-3>') ?>
            </div>



            <div class="form-group">
              <label for="inputDescription">Distributor</label>
              <input id="inputDescription" class="form-control" name="distributor"></input>
            </div>

            <!-- koding distri
            <div class="row">
              <div class="form-group">
                <label for="inputName">distributor</label>
                <select class="form-control" name="nama_distri" id="Nama_distri">
                  <?php
                  $link = mysqli_connect('localhost', 'root', '', 'db_netly');
                  //Perintah sql untuk menampilkan semua data pada tabel jurusan
                  $sql = "select * from tb_distributor";

                  $hasil = mysqli_query($link, $sql);
                  $no = 0;
                  while ($data = mysqli_fetch_array($hasil)) {
                    $no++;

                    $ket = "";
                    if (isset($_GET['tb_distributor'])) {
                      $distributor = trim($_GET['tb_distributor']);

                      if ($distributor == $data['nama_distri']) {
                        $ket = "selected";
                      }
                    }
                  ?>
                    <option <?php echo $ket; ?> value="<?php echo $data['nama_distri']; ?>"><?php echo $data['nama_distri']; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            -->

            <div>
              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="deskripsi"></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
            <?php echo anchor('administrator/admin/stok', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
            <?php echo form_close(); ?>
          </div>

  </section>
</div>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</a>
</div>
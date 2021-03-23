<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah distributor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Tambah distributor</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">

        <?php echo form_open_multipart('administrator/admin/distributor/input_aksi'); ?>
        <div class="card card-primary">

          <div class="card-body">
            <div class="form-group">


              <div class="form-group">
                <label for="inputName">Nama distributor</label>
                <input type="text" name="nama_distri" class="form-control">
                <?php echo form_error('nama_distri', '<div class="text-danger small" ml-3>') ?>
              </div>



              <div class="form-group">
                <label for="inputStatus">alamat distributor</label>
                <textarea id="inputDescription" name="alamat_toko" class=" form-control"></textarea>
                <?php echo form_error('alamat_toko', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputDescription">nama kurir</label>
                <input type="text" id="inputDescription" class="form-control" rows="4" name="nama_kurir">
                <?php echo form_error('nama_kurir', '<div class="text-danger small" ml-3>') ?>
              </div>


              <div class="form-group">
                <label>Telepon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" name="no_hp" class="form-control" data-inputmask='"mask": "(+62)899-9999-99999"' data-mask placeholder="">
                </div>
                <?php echo form_error('no_hp', '<div class="text-danger small" ml-3>') ?>
              </div>
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-primary mb-5">Simpan</button>
            <?php echo anchor('administrator/admin/distributor', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
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
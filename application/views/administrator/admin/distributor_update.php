<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Data distributor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Update Data Karyawan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">
        <?php foreach ($tb_distributor as $dd) : ?>
          <?php echo form_open_multipart('administrator/admin/distributor/update_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
              <div class="form-group">


                <input type="hidden" name="id" class="form-control" value="<?php echo $dd->id ?>">
              </div>


              <div class="form-group">
                <label for="inputName">Nama distributor</label>
                <input type="text" name="nama_distri" class="form-control" value="<?php echo $dd->nama_distri ?>">
                <?php echo form_error('nama_distri', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">alamat distributor</label>
                <input type="text" id="inputName" value="<?php echo $dd->alamat_toko ?>" class="form-control" rows="4" name="alamat_toko">
                <?php echo form_error('alamat_toko', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputStatus">nama kurir</label>
                <input type="text" name="nama_kurir" class="form-control" value=" <?php echo $dd->nama_kurir ?>">
                <?php echo form_error('nama_kurir', '<div class="text-danger small" ml-3>') ?>
              </div>




              <div class="form-group">
                <label>Telepon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" name="no_hp" class="form-control" data-inputmask='"mask": "(+62)899-9999-99999"' value="<?php echo $dd->no_hp ?>" data-mask>
                </div>
                <?php echo form_error('no_hp', '<div class="text-danger small" ml-3>') ?>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mb-5">Simpan</button>
          <?php echo anchor('administrator/admin/karyawan', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
          <?php echo form_close(); ?>
        <?php endforeach; ?>
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
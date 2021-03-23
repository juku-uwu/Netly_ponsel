<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Data Karyawan</h1>
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
        <?php foreach ($tb_kryw as $kryw) : ?>
          <?php echo form_open_multipart('administrator/admin/karyawan/update_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
              <div class="form-group">
                <label>NIK</label>
                <div class="input-group">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $kryw->id ?>">
                  <input type="text" class="form-control" name="nik" value="<?php echo $kryw->nik ?>" readonly>
                </div>
                <?php echo form_error('nik', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $kryw->nama ?>">
                <?php echo form_error('nama', '<div class="text-danger small" ml-3>') ?>
              </div>


              <div class="form-group">
                <label for="inputStatus">Jenis Kelamin</label>
                <select class="form-control custom-select" name="jenis_kelamin" value="<?php echo $kryw->jenis_kelamin ?>">
                  <option><?php echo $kryw->jenis_kelamin ?></option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">Alamat</label>
                <input type="text" id="inputName" class="form-control" rows="4" name="alamat" value="<?php echo $kryw->alamat ?>">
                <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
              </div>


              <div class="form-group">
                <label>Telepon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" name="telp" class="form-control" data-inputmask='"mask": "(+62)899-9999-9999"' value="<?php echo $kryw->telp ?>" data-mask>
                </div>
                <?php echo form_error('telp', '<div class="text-danger small" ml-3>') ?>
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
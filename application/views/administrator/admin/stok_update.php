<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Stok</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Update Stok</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">
        <?php foreach ($tb_stok as $st) : ?>
          <?php echo form_open_multipart('administrator/admin/stok/update_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">

              <div class="form-group">
                <label for="inputStatus">Provider</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $st->id ?>">
                <select class="form-control custom-select" name="provider" value="<?php echo $st->provider ?>">
                  <option><?php echo $st->provider ?></option>
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
                  <input type="text" class="form-control" name="kuota" value="<?php echo $st->kuota ?>">
                </div>
                <?php echo form_error('kuota', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $st->harga ?>">
                <?php echo form_error('harga', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">Harga awal</label>
                <input type="text" name="harga_awal" class="form-control" value="<?php echo $st->harga_awal ?>">
                <?php echo form_error('harga', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">Distributor</label>
                <input type="text" name="distributor" class="form-control" value="<?php echo $st->distributor ?>"></input>
              </div>

              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <input id="inputDescription" class="form-control" rows="4" value="<?php echo $st->deskripsi ?>" name="deskripsi">
              </div>


            </div>

          </div>
          <button type="submit" class="btn btn-primary mb-5">Simpan</button>
          <?php echo anchor('administrator/admin/stok', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
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
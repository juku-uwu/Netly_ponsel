<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Laba Bulanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Update Laba Bulanan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">

        <div class="card card-primary">

          <div class="card-body">
            <?php foreach ($tb_bersihbulanan as $bb) : ?>
              <?php echo form_open_multipart('administrator/admin/bersihbulanan/update_aksi'); ?>

              <div class="form-group">
                <label for="inputName">Bulan/Tahun</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $bb->id ?>">
                <?php echo form_error('bulan', '<div class="text-danger small" ml-3>') ?>
                <select class="form-control mr-2" name="inputbulan" id="inputbulan" value="<?php echo $bb->inputbulan ?>">
                  <option value="<?php echo $bb->inputbulan ?>" d><?php echo $bb->inputbulan ?></option>
                  <option value="januari">Januari</option>
                  <option value="februari">Februari</option>
                  <option value="maret">Maret</option>
                  <option value="april">April</option>
                  <option value="mei">Mei</option>
                  <option value="juni">Juni</option>
                  <option value="juli">Juli</option>
                  <option value="agustus">Agustus</option>
                  <option value="september">September</option>
                  <option value="oktober">Oktober</option>
                  <option value="november">November</option>
                  <option value="desember">Desember</option>
                </select>
                <?php echo form_error('inputbulan', '<div class="text-danger small" ml-3>') ?>
              </div>


              <div class="form-group">
                <label for="inputStatus">Cabang</label>
                <select class="form-control custom-select" name="inputtahun" id="inputtahun" value="<?php echo $bb->inputtahun ?>">
                  <option value="<?php echo $bb->inputtahun ?>" d><?php echo $bb->inputtahun ?></option>
                  <?php
                  $year = date('Y');
                  $min = $year - 60;
                  $max = $year;
                  for ($i = $max; $i >= $min; $i--) {
                    echo '<option value=' . $i . '>' . $i . '</option>';
                  }

                  ?>
                </select>
                <?php echo form_error('inputtahun', '<div class="text-danger small" ml-3>') ?>
              </div>





              <div class="form-group">
                <label for="inputStatus">Cabang</label>
                <select class="form-control custom-select" name="inputcabang">
                  <option value="<?php echo $bb->inputcabang ?>" d><?php echo $bb->inputcabang ?></option>
                  <option>Netly-1</option>
                  <option>Netly-2</option>
                  <option>Netly-3</option>
                 
                </select>
                <?php echo form_error('inputcabang', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="row">
                <div class="col-6">
                  <label for="inputName">Total Keuntungan</label>
                  <input type="number" name="totalkeuntungan" class="form-control" value="<?php echo $bb->totalkeuntungan ?>" id="totalkeuntungan">
                  <?php echo form_error('totalkeuntungan', '<div class="text-danger small" ml-3>') ?>
                </div>
                <div class="col-6">
                  <label for="inputName">Total Keluaran</label>
                  <input type="number" name="totalpengeluaran" class="form-control" value="<?php echo $bb->totalpengeluaran  ?>" id="totalpengeluaran">
                </div>
                <div class="col-6">
                  <label for="inputName">Total Laba Bulanan</label>
                  <input type="number" name="totalbersih" class="form-control" value="<?php echo $bb->totalbersih ?>" id="totalbersih" readonly>
                </div>

              </div>
              <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/bersihbulanan', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $("#totalkeuntungan, #totallebihan, #totalpengeluaran, #totalbersih").keyup(function() {
      var totalkeuntungan = $("#totalkeuntungan").val();
      var totalpengeluaran = $("#totalpengeluaran").val();
      var totalbersih = $("#totalbersih").val();


      var totalbersih = (parseInt(totalkeuntungan) - parseInt(totalpengeluaran));
      $("#totalbersih").val(totalbersih);



    });
  });
</script>
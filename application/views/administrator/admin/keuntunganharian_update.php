<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Keuntungan Harian</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Update Keuntungan Harian</li>
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
            <?php foreach ($tb_keuntunganharian as $kh) : ?>
              <?php echo form_open_multipart('administrator/admin/keuntunganharian/update_aksi'); ?>


              <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $kh->id ?>">
                  <input type="date" name="tanggal" class="form-control" value="<?php echo $kh->tanggal ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
                <?php echo form_error('tanggal', '<div class="text-danger small" ml-3>') ?>
              </div>
              <div class="form-group">
                <label for="inputStatus">Cabang</label>
                <select class="form-control custom-select" name="cabang">
                  <option value="<?php echo $kh->cabang ?>" d><?php echo $kh->cabang ?></option>
                  <option>Netly-1</option>
                  <option>Netly-2</option>
                  <option>Netly-3</option>

                </select>
                <?php echo form_error('cabang', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="form-group">
                <label for="inputName">Kembalian Awal</label>
                <input type="text" name="uang_kembali" class="form-control" value="<?php echo $kh->uang_kembali ?>" id="uang_kembali">
                <?php echo form_error('uang_kembali', '<div class="text-danger small" ml-3>') ?>
              </div>

              <div class="row">
                <div class="col-6">
                  <label for="inputName">Hasil Pagi</label>
                  <input type="text" name="hsl_pagi" class="form-control" value="<?php echo $kh->hsl_pagi ?>" id="hsl_pagi">
                  <!-- <?php echo form_error('hsl_pagi', '<div class="text-danger small" ml-3>') ?> -->
                </div>
                <div class="col-6">
                  <label for="inputName">Hasil Sore</label>
                  <input type="text" name="hsl_sore" class="form-control" value="<?php echo $kh->hsl_sore ?>" id="hsl_sore">
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <label for="inputName">Hasil Malam</label>
                  <input type="text" name="hsl_malam" class="form-control" value="<?php echo $kh->hsl_malam ?>" id="hsl_malam">
                </div>
                <div class="col-6">
                  <label for="inputName">Total</label>
                  <input type="text" name="total" class="form-control" value="<?php echo $kh->total ?>" id="total" readonly>

                </div>
              </div>

              <div class="form-group">
                <label for="inputName">Lebihan</label>
                <input type="text" name="lebihan" class="form-control" value="<?php echo $kh->lebihan ?>" id="lebihan" placeholder="">
              </div>


              <div class="row">
                <div class="form-group">
                  <label for="inputName">shift Pagi</label>
                  <select class="form-control" name="shift_pagi" id="shift_pagi">
                    <?php
                    $link = mysqli_connect('localhost', 'root', '', 'db_netly');
                    //Perintah sql untuk menampilkan semua data pada tabel jurusan
                    $sql = "select * from tb_kryw";

                    $hasil = mysqli_query($link, $sql);
                    $no = 0;
                    while ($data = mysqli_fetch_array($hasil)) {
                      $no++;

                      $ket = "";
                      if (isset($_GET['tb_kryw'])) {
                        $karyawan = trim($_GET['tb_kryw']);

                        if ($karyawan == $data['nama']) {
                          $ket = "selected";
                        }
                      }
                    ?>
                      <option <?php echo $ket; ?> value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>
                    <?php
                    }
                    ?>
                  </select>

                </div>

                <div class="form-group">
                  <label for="inputName">shift Sore</label>
                  <select class="form-control" name="shift_sore" id="shift_sore">
                    <?php
                    $link = mysqli_connect('localhost', 'root', '', 'db_netly');
                    //Perintah sql untuk menampilkan semua data pada tabel jurusan
                    $sql = "select * from tb_kryw";

                    $hasil = mysqli_query($link, $sql);
                    $no = 0;
                    while ($data = mysqli_fetch_array($hasil)) {
                      $no++;

                      $ket = "";
                      if (isset($_GET['tb_kryw'])) {
                        $karyawan = trim($_GET['tb_kryw']);

                        if ($karyawan == $data['nama']) {
                          $ket = "selected";
                        }
                      }
                    ?>
                      <option <?php echo $ket; ?> value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputName">shift Malam</label>
                  <select class="form-control" name="shift_malam" id="shift_malam">
                    <?php
                    $link = mysqli_connect('localhost', 'root', '', 'db_netly');
                    //Perintah sql untuk menampilkan semua data pada tabel jurusan
                    $sql = "select * from tb_kryw";

                    $hasil = mysqli_query($link, $sql);
                    $no = 0;
                    while ($data = mysqli_fetch_array($hasil)) {
                      $no++;

                      $ket = "";
                      if (isset($_GET['tb_kryw'])) {
                        $karyawan = trim($_GET['tb_kryw']);

                        if ($karyawan == $data['nama']) {
                          $ket = "selected";
                        }
                      }
                    ?>
                      <option <?php echo $ket; ?> value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>
                    <?php
                    }
                    ?>
                  </select>

                </div>
              </div>

              <div class="form-group">
                <label for="inputName">Total Hari Ini</label>
                <input type="text" name="totalkeuntungan" class="form-control" id="totalkeuntungan" value="<?php echo $kh->totalkeuntungan ?>" placeholder="Total Hari Ini" readonly>
              </div>



              <div class="form-group">


                <label for="inputDescription">Catatan</label>
                <input id="inputDescription" class="form-control" rows="4" value="<?php echo $kh->catatan ?>" name="catatan">

              </div>
          </div>

        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
        <?php echo anchor('administrator/admin/dataguru', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
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
    $("#hsl_pagi, #hsl_sore, #hsl_malam, #total, #uang_kembali, #lebihan, #totalkeuntungan").keyup(function() {
      var hsl_pagi = $("#hsl_pagi").val();
      var hsl_sore = $("#hsl_sore").val();
      var hsl_malam = $("#hsl_malam").val();
      var total = $("#total").val();
      var uang_kembali = $("#uang_kembali").val();
      var shift_pagi = $("#shift_pagi").val();
      var shift_sore = $("#shift_sore").val();
      var shift_malam = $("#shift_malam").val();
      var lebihan = $("#lebihan").val();
      var totalkeuntungan = $("#totalkeuntungan").val();

      var total = (parseInt(hsl_pagi) + parseInt(hsl_sore) + parseInt(hsl_malam));
      $("#total").val(total);

      var totalkeuntungan = (parseInt(total) + parseInt(lebihan) - parseInt(uang_kembali));
      $("#totalkeuntungan").val(totalkeuntungan);

    });
  });
</script>
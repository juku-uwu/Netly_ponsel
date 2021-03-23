<?php

// koneksi
$conn = new mysqli('localhost', 'root', '', 'db_netly');

if (isset($_POST['tampilkan'])) {
  $bln = date($_POST['bulan']);
  $tahun = $_POST['tahun'];
  $cabang = $_POST['cabang'] ?? '';


  if (!empty($bln)) {

    // perintah tampil data berdasarkan periode bulan
    $q = mysqli_query($conn, "SELECT tb_keuntunganharian.tanggal , tb_keuntunganharian.cabang , tb_keuntunganharian.totalkeuntungan , tb_pengeluaranharian.totalpengeluaran 
    FROM tb_keuntunganharian , tb_pengeluaranharian 
    WHERE month (tb_keuntunganharian.tanggal) = '$bln' and year (tb_keuntunganharian.tanggal) = '$tahun' and (tb_keuntunganharian.cabang) = '$cabang'and (tb_pengeluaranharian.cabang)='$cabang' and month (tb_pengeluaranharian.tanggal) = '$bln'
    ");
  } else {
    // perintah tampil semua data
    $q = mysqli_query($conn, "SELECT tb_keuntunganharian.tanggal , tb_keuntunganharian.cabang , tb_keuntunganharian.totalkeuntungan , tb_pengeluaranharian.totalpengeluaran  
    FROM tb_keuntunganharian , tb_pengeluaranharian 
    where tb_keuntunganharian.tanggal = tb_pengeluaranharian.tanggal
    ");
  }
} else {
  // perintah tampil semua data
  $q = mysqli_query($conn, "SELECT tb_keuntunganharian.tanggal , tb_keuntunganharian.cabang , tb_keuntunganharian.totalkeuntungan , tb_pengeluaranharian.totalpengeluaran 
  FROM tb_keuntunganharian , tb_pengeluaranharian 
 where tb_keuntunganharian.tanggal = tb_pengeluaranharian.tanggal
  ");
}

// hitung jumlah baris data
$s = $q->num_rows;


?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Laba Bulanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Tambah Laba Bulanan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">

        <?php echo form_open_multipart('administrator/admin/bersihbulanan/input_aksi'); ?>
        <div class="card card-primary">

          <div class="card-body">

            <div class="form-group">
              <label for="inputName">Bulan/Tahun</label>

              <div class="form-group">

                <form method="POST" action="" class="form-inline">
                  <?php
                  $bulan = $_POST["bulan"] ?? '';
                  ?>
                  <label for="date1">Tampilkan transaksi bulan&nbsp;</label>
                  <select class="form-control mr-2" name="bulan">
                    <option value="">-</option>
                    <option value="1" <?php if (isset($bulan) && $bulan == "1") echo ' selected'; ?>>Januari</option>
                    <option value="2" <?php if (isset($bulan) && $bulan == "2") echo ' selected'; ?>>Februari</option>
                    <option value="3" <?php if (isset($bulan) && $bulan == "3") echo ' selected'; ?>>Maret</option>
                    <option value="4"><?php if (isset($bulan) && $bulan == "4") echo ' selected'; ?>April</option>
                    <option value="5" <?php if (isset($bulan) && $bulan == "5") echo ' selected'; ?>>Mei</option>
                    <option value="6" <?php if (isset($bulan) && $bulan == "6") echo ' selected'; ?>>Juni</option>
                    <option value="7" <?php if (isset($bulan) && $bulan == "7") echo ' selected'; ?>>Juli</option>
                    <option value="8" <?php if (isset($bulan) && $bulan == "8") echo ' selected'; ?>>Agustus</option>
                    <option value="9" <?php if (isset($bulan) && $bulan == "9") echo ' selected'; ?>>September</option>
                    <option value="10" <?php if (isset($bulan) && $bulan == "10") echo ' selected'; ?>>Oktober</option>
                    <option value="11" <?php if (isset($bulan) && $bulan == "11") echo ' selected'; ?>>November</option>
                    <option value="12" <?php if (isset($bulan) && $bulan == "12") echo ' selected'; ?>>December</option>
                  </select>
                  <span>
                    <label for="tahun">Tampilkan tahun</label>
                    <select class="form-control mr2" name="tahun">
                      <?php
                      $year = date('Y');
                      $min = $year - 10;
                      $max = $year;
                      for ($i = $max; $i >= $min; $i--) {
                        echo '<option value=' . $i . '>' . $i . '</option>';
                      }
                      ?>
                    </select>
                  </span>

                  <div class="form-group">
                    <label for="inputStatus">Cabang</label>
                    <?php
                    $cabang = $_POST["cabang"] ?? '';
                    ?>
                    <select class="form-control custom-select" name="cabang">
                      <option value="">-</option>
                      <option value="Netly-1" <?php if (isset($cabang) && $cabang == "Netly-1") echo ' selected'; ?>>Netly-1</option>
                      <option value="Netly-2" <?php if (isset($cabang) && $cabang == "Netly-2") echo ' selected'; ?>>Netly-2</option>
                      <option value="Netly-3" <?php if (isset($cabang) && $cabang == "Netly-3") echo ' selected'; ?>>Netly-3</option>

                    </select>

                  </div>
                  <button type="submit" name="tampilkan" class="btn btn-primary" value="tampilkan">Tampilkan</button>

              </div>
              <?php echo form_error('tampilkan', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="row">
              <div class="col-6">
                <label for="inputName">bulan</label>

                <select class="form-control mr-2" name="inputbulan" id="inputbulan">
                  <option value="">-</option>
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

              </div>
              <div class="col-6">
                <label for="inputName">tahun</label>
                <select class="form-control mr2" name="inputtahun" id="inputtahun">
                  <?php
                  $year = date('Y');
                  $min = $year - 60;
                  $max = $year;
                  for ($i = $max; $i >= $min; $i--) {
                    echo '<option value=' . $i . '>' . $i . '</option>';
                  }
                  ?>
                </select>
              </div>

            </div>
            <div class="row">
              <div class="col-6">
                <label for="inputName">Total Keuntungan</label>
                <input type="number" name="totalkeuntungan" class="form-control" id="totalkeuntungan">

              </div>
              <div class="col-6">
                <label for="inputName">Total Keluaran</label>
                <input type="number" name="totalpengeluaran" class="form-control" id="totalpengeluaran">
              </div>
            </div>


            <div class="row">

              <div class="col-6">
                <label for="inputName">Total laba Bulanan</label>
                <input type="number" name="totalbersih" class="form-control" id="totalbersih" readonly>

              </div>
              <div class="col-6">
                <label for="inputName">cabang</label>
                <select class="form-control custom-select" name="inputcabang" id="inputcabang">
                  <option selected disabled>-Pilih-</option>
                  <option value="Netly-1">Netly-1</option>
                  <option value="Netly-2">Netly-2</option>
                  <option value="Netly-3">Netly-3</option>

                </select>

              </div>
            </div>

            <div class="mt-3" style="max-height: 340px; overflow-y: auto;">
              <table class="table table-bordered" id="sum_table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>tanggal</th>
                    <th>total keuntungan</th>
                    <th>total keluaran</th>
                    <th>cabang</th>
                  </tr>
                </thead>

                <?php

                $no = 1;
                while ($r = $q->fetch_assoc()) {
                ?>
                  <tbody>

                    <tr>
                      <td><?= $no++ ?></td>
                      <td id="tanggal"><?= $r['tanggal'] ?></td>
                      <td id="totaluntung"><?= $r['totalkeuntungan'] ?></td>
                      <td id="totalpengeluaran"><?= $r['totalpengeluaran'] ?></td>
                      <td><?= $r['cabang'] ?></td>
                    </tr>
                  </tbody>
                <?php
                }
                ?>

                <tfoot>
                  <tr>

                    <td>Total:</td>
                    <td>Total:</td>
                    <td></td>
                    <td></td>
                  </tr>

                </tfoot>
              </table>


              </form>
            </div>
            <div>
              <button type=" submit" name="simpan" class="btn btn-primary mb-5" value="simpan">Simpan</button>
              <?php echo anchor('administrator/admin/bersihbulanan', '<div class="btn mb-5 btn-primary">Kembali</div>') ?>
              <?php echo form_close(); ?>
            </div>

  </section>

</div>
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('table thead th').each(function(i) {
      calculateColumn(i);
    });
  });

  function calculateColumn(index) {
    var total = 0;
    $('table tr').each(function() {
      var value = parseInt($('td', this).eq(index).text());
      if (!isNaN(value)) {
        total += value;
      }
    });
    $('table tfoot td').eq(index).text('Total: ' + total);
  }
</script>
<script>
  $(document).ready(function() {
    $("#totalkeuntungan, #totalpengeluaran, #totalbersih").keyup(function() {
      var totalkeuntungan = $("#totalkeuntungan").val();
      var totalpengeluaran = $("#totalpengeluaran").val();
      var totalbersih = $("#totalbersih").val();


      var totalbersih = (parseInt(totalkeuntungan) - parseInt(totalpengeluaran));
      $("#totalbersih").val(totalbersih);



    });
  });
</script>
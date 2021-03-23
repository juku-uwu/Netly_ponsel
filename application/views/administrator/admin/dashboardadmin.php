<?php

// koneksi
$conn = new mysqli('localhost', 'root', '', 'db_netly');


// Create connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>












<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Netly Ponsel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- small box -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">

            <!-- Post -->
            <!-- /.user-block -->


            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <?php
                        // mengambil data barang
                        $data_keuntunganharian = mysqli_query($conn, "SELECT * FROM tb_keuntunganharian");
                        // menghitung data barang
                        $jumlah_keuntungan = mysqli_num_rows($data_keuntunganharian);
                        ?>
                        <h3>
                          <?php echo $jumlah_keuntungan; ?>
                        </h3>

                        <p>keuntungan harian</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="<?php echo base_url() ?>administrator/admin/keuntunganharian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">

                        <?php
                        // mengambil data barang
                        $data_pengeluaranharian = mysqli_query($conn, "SELECT * FROM tb_pengeluaranharian");
                        // menghitung data barang
                        $jumlah_pengeluaran = mysqli_num_rows($data_pengeluaranharian);
                        ?>
                        <h3>
                          <?php echo $jumlah_pengeluaran; ?>
                        </h3>
                        <p>pengeluaran harian</p>
                      </div>
                      <div class="icon">
                        <i class="nav-icon fas fa-edit nav-ico"></i>
                      </div>
                      <a href="<?php echo base_url() ?>administrator/admin/pengeluaranharian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <?php
                        // mengambil data barang
                        $data_bulanan = mysqli_query($conn, "SELECT * FROM tb_bersihbulanan");
                        // menghitung data barang
                        $jumlah_barang = mysqli_num_rows($data_bulanan);
                        ?>
                        <h3>
                          <?php echo $jumlah_barang; ?>
                        </h3>

                        <p>laba bulanan</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="<?php echo base_url() ?>administrator/admin/bersihbulanan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                      <div class="inner">
                        <?php
                        // mengambil data barang
                        $data_stok = mysqli_query($conn, "SELECT * FROM tb_stok");
                        // menghitung data barang
                        $jumlah_stok = mysqli_num_rows($data_stok);
                        ?>
                        <h3>
                          <?php echo $jumlah_stok; ?>
                        </h3>

                        <p>data stok</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="<?php echo base_url() ?>administrator/admin/stok" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./logo atas -->
                </div>
                <!-- /.card-body -->

              </div>

              <!-- /.col -->
          </div>

          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-left">
                <h2 style="font-family: inherit;" class="font-size-22 font-bold uc text-center">Daftar Harga</h2>

                <table id="example2" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Provider</th>
                      <th>Kuota</th>
                      <th>Harga</th>
                      <th>harga Awal</th>
                      <th>Deskripsi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($tb_stok as $st) : ?>
                      <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $st->provider ?></td>
                        <td><?php echo $st->kuota ?></td>
                        <td><?php echo number_format($st->harga, 0, ',', '.'); ?></td>
                        <td><?php echo number_format($st->harga_awal, 0, ',', '.'); ?></td>
                        <td><?php echo $st->deskripsi ?></td>

                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                </table>
              </div>

              <!-- /.card-body -->
            </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->





        </div>
      </div>
    </div>
</div>
</div>
<div class="card card-primary card-outline">
  <div class="card-body box-profile">


    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_netly");
    ?>

    <div style="width: 800px;margin: 0px auto;">
      <canvas id="Chart"></canvas>
    </div>
  </div>
</div>
</div>
<!-- jQuery -->

<!-- ChartJS -->
<script type="text/javascript" src="chartjs/Chart.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
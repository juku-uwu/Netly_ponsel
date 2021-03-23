  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Laporan Keuntungan Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Laporan Keuntungan Harian</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Data Keuntungan Harian</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">
              <?php echo anchor('administrator/report/reportkeuntunganharian/print','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i> Print </button>') ?>
              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr align="center">
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>Cabang</th>
                  <th>Uang Kembali</th>
                  <th>Hasil Pagi</th>
                  <th>Hasil Sore</th>
                  <th>Hasil Malam</th>
                  <th>Total</th>
                  <th>Lebihan</th>
                  <th>Total Hari Ini</th>
                  <th>Catatan</th>                  
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_keuntunganharian as $kh) : ?>
                 <tr align="center">
                 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $kh->tanggal?></td>
                      <td><?php echo $kh->cabang?></td>
                      <td><?php echo number_format($kh->uang_kembali,0,',','.');?></td>
                      <td><?php echo number_format($kh->hsl_pagi,0,',','.');?></td>
                      <td><?php echo number_format($kh->hsl_sore,0,',','.');?></td>
                      <td><?php echo number_format($kh->hsl_malam,0,',','.');?></td>
                      <td><?php echo number_format($kh->total,0,',','.'); ?></td>
                      <td><?php echo number_format($kh->lebihan,0,',','.');?></td>
                      <td><?php echo number_format($kh->totalkeuntungan,0,',','.');?></td>
                      <td><?php echo $kh->catatan?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
  <script>
    $(document).ready(function() {
    $('#form-status').hide();
    $('#filter').change(function() {
      if ($(this).val() == '0') { // Jika filter nya 1 (per tanggal)
        $('#form-status').hide(); // Sembunyikan form tanggal
      } else if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
        $('#form-status').show(); // Sembunyikan form bulan dan tahun
      } 

            $('#form-status select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        });
    });
    </script>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- page script -->

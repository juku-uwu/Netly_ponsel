  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Laporan Stok</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Laporan Stok</li>
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
              <h3 class="card-title">Daftar Data Stok</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card-body">
              <?php echo anchor('administrator/report/reportstok/print', '<button class="btn btn-sm btn-success mb-3"><i class="fas fa-print"></i> Print </button>') ?>
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr align="center">
                    <th>NO</th>
                    <th>Provider</th>
                    <th>Kuota (Gb)</th>
                    <th>Harga</th>
                    <th>harga awal</th>
                    <th>distributor</th>
                    <th>Deskripsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($tb_stok as $st) : ?>
                    <tr align="center">
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $st->provider ?></td>
                      <td><?php echo $st->kuota ?></td>
                      <td><?php echo number_format($st->harga, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($st->harga_awal, 0, ',', '.'); ?></td>
                      <td><?php echo $st->distributor ?></td>
                      <td><?php echo $st->deskripsi ?></td>

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
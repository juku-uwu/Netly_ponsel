  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Keuntungan Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Keuntungan Harian</li>
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
              <h3 class="card-title">Daftar Keuntungan Harian</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card-body">

              <?php echo anchor('administrator/admin/keuntunganharian/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-mr"></i> Tambah </button>') ?>

              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>Cabang</th>
                    <th>Uang Kembalian</th>
                    <th>Hasil Pagi</th>
                    <th>Hasil Sore</th>
                    <th>Hasil Malam</th>
                    <th>Total</th>
                    <th>Lebihan</th>
                    <th>Total Hari Ini</th>
                    <th>shift pagi</th>
                    <th>shift sore</th>
                    <th>shift malam</th>
                    <th>Catatan</th>
                    <th width="100px">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($tb_keuntunganharian as $kh) : ?>
                    <tr>
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $kh->tanggal ?></td>
                      <td><?php echo $kh->cabang ?></td>
                      <td><?php echo number_format($kh->uang_kembali, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($kh->hsl_pagi, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($kh->hsl_sore, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($kh->hsl_malam, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($kh->total, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($kh->lebihan, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($kh->totalkeuntungan, 0, ',', '.'); ?></td>
                      <td><?php echo $kh->shift_pagi ?></td>
                      <td><?php echo $kh->shift_sore ?></td>
                      <td><?php echo $kh->shift_malam ?></td>
                      <td><?php echo $kh->catatan ?></td>
                      <td class="project-actions text-left">
                        <a width="20px"><?php echo anchor('administrator/admin/keuntunganharian/update/' . $kh->id, '<div class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></div>') ?>
                        </a>
                        <a width="20px"><?php echo anchor('administrator/admin/keuntunganharian/delete/' . $kh->id, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
                        </a>
                      </td>
                      </td>
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
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <!-- page script -->
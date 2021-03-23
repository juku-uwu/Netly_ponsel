  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengeluaran Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Pengeluaran Harian</li>
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
              <h3 class="card-title">Daftar Pengeluaran Harian</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card-body">

              <?php echo anchor('administrator/admin/pengeluaranharian/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-mr"></i> Tambah </button>') ?>

              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>Pagi</th>
                    <th>Siang</th>
                    <th>Malam</th>
                    <th>Total Pengeluaran</th>
                    <th>Deskripsi</th>
                    <th>Cabang</th>
                    <th width="60px">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($tb_pengeluaranharian as $ph) : ?>
                    <tr align="center">
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $ph->tanggal ?></td>
                      <td><?php echo number_format($ph->pagi, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($ph->siang, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($ph->malam, 0, ',', '.'); ?></td>
                      <td><?php echo number_format($ph->totalpengeluaran, 0, ',', '.'); ?></td>
                      <td><?php echo $ph->deskripsi ?></td>
                      <td><?php echo $ph->cabang ?></td>

                      <td class="project-actions text-left">
                        <a width="20px"><?php echo anchor('administrator/admin/pengeluaranharian/update/' . $ph->id, '<div class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></div>') ?>
                        </a>
                        <a width="20px"><?php echo anchor('administrator/admin/pengeluaranharian/delete/' . $ph->id, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
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
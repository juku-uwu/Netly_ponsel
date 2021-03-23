  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Data Karyawan</li>
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
              <h3 class="card-title">Daftar Data Karyawan</h3>
            </div>
            <?php echo $this->session->flashdata('pesan') ?>
              <div class="card-body">   

                <?php echo anchor('administrator/admin/karyawan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-mr"></i> Tambah </button>') ?>

              <table id="example1" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NIK</th>
                  <th>Nama</th>                  
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>No Telp</th>                
                  
                  <th width="88px">AKSI</th>
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_kryw as $kryw) : ?>
                 <tr>
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $kryw->nik?></td>
                      <td><?php echo $kryw->nama?></td>
                      <td><?php echo $kryw->jenis_kelamin?></td>
                      <td><?php echo $kryw->alamat?></td>
                      <td><?php echo $kryw->telp?></td>                     
                      
                      <td class="project-actions text-left">                        
                                              
                          <a width="20px"><?php echo anchor('administrator/admin/karyawan/update/'.$kryw->id,'<div class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></div>') ?>
                          </a>
                          <a width="20px"><?php echo anchor('administrator/admin/karyawan/delete/'.$kryw->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
                          </a>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

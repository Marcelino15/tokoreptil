  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang 
        <span>{nama_session}</span>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-map"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Provinsi</span>
              <span class="info-box-number"><?php echo $this->db->count_all('provinsi'); ?></span>
            </div>
            
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-map-marker"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kabupaten</span>
              <span class="info-box-number"><?php echo $this->db->count_all('kabupaten'); ?></span>
            </div>
            
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Barang</span>
              <span class="info-box-number"><?php 
              $query = $this->db->get('barang');
              $query = $this->db->get_where('barang', array('idpersonal_barang' => $_SESSION['id_session']));
              echo $this->db->count_all('barang'); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
            <?php 
              $this->db->select_sum('nama_barang');
              $query = $this->db->get_where('barang', array('idpersonal_barang' => $_SESSION['id_session']));
              $query = $this->db->get('barang');
            ?>
              <span class="info-box-text">User</span>
              <span class="info-box-number"><?php echo $this->db->count_all('personal'); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">List Barang Upload User</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Status</th>
                    <th>Harga</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = $this->db->query("SELECT * FROM barang;");
                  $query = $this->db->get_where('barang', array('idpersonal_barang' => $_SESSION['id_session']));
                  foreach ($query->result_array() as $row){
                  ?>  
                  <tr>
                    <td><a href="pages/examples/invoice.html"><?php echo $row['id_barang'];?></a></td>
                    <td><?php echo $row['nama_barang'];?></td>
                    <td><span class="label <?php echo $row['status_barang'] == 'OK' ? 'label-success' : 'label-danger'; ?>"><?php echo $row['status_barang'];?></span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">Rp.<?php echo $row['harga_barang'];?>,00</div>
                    </td>
                  
                  </tr>
                  <?php }?>  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{site_url({base_level}/barang)}" class="btn btn-sm btn-info btn-flat pull-right">Liat Semua Data Barang</a>
            </div>
            <!-- /.box-footer -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang Admin
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
              <span class="info-box-number"><?php echo $this->db->count_all('Kabupaten'); ?></span>
            </div>
            
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kategori Barang</span>
              <span class="info-box-number"><?php echo $this->db->count_all('kategori'); ?></span>
            </div>
            
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kategori Artikel</span>
              <span class="info-box-number"><?php echo $this->db->count_all('kategori_artikel'); ?></span>
            </div>
            
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pesan</span>
              <span class="info-box-number"><?php echo $this->db->count_all('pesan'); ?></span>
            </div>
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Artikel</span>   
              <span class="info-box-number"><?php echo $this->db->count_all('artikel'); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Barang</span>
              <span class="info-box-number"><?php echo $this->db->count_all('artikel'); ?></span>
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
      <!-- /.row -->

      <!-- /.row -->

      <!-- Main row -->
      
        <!-- Left col -->
       
          <!-- MAP & BOX PANE -->
        
          <!-- /.box -->
          <div class="row">
      
            <!-- /.col -->

            <div class="col-md-12 ">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                   
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                
                  <ul class="users-list clearfix">
                  <?php
                  $query = $this->db->query("SELECT * FROM personal;");
					        foreach ($query->result_array() as $row){
				          ?>		
                    <li>
                      <img src="<?php echo base_url('assets/foto_personal/'.$row['foto_personal']); ?>" alt="User Image" width="100" height="100">
                      <a class="users-list-name" href="#"><?php echo $row['nama_personal']; ?></a>
                      <span class="users-list-date"><?php echo $row['level_personal']?></span>
                    </li>
                    <?php } ?>
                  </ul>
                  <!-- /.users-list -->
                  
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{site_url({base_level}/personal)}" class="uppercase">Liat Semua Data User</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
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
          <!-- /.box -->
      
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          
          <!-- /.info-box -->
          
          <!-- /.info-box -->
         
          <!-- /.info-box -->
      
          <!-- /.info-box -->

       
          <!-- /.box -->

          <!-- PRODUCT LIST -->
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

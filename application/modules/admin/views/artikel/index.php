  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="#">Artikel</a></li>
        <li class="active">index</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Artikel</h3>

      
        </div>
        <div class="box-body">
        <table id="tabel_artikel" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>ID (searchable)</th>
                <th>Judul (searchable)</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th><a href="{base_url({base_level}/artikel/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{id_artikel}</td>
                <td>{judul_artikel}</td>
                <td>{penulis_artikel}</td>
                <td>{nama_katar}</td>
                <td>{gambar_artikel}</td>
                <td>
                  <a href="{base_url({level}/artikel/ubah/{id_artikel})}"><span><i class="glyphicon glyphicon-resize-full"></i></span></a>
                </td>
              </tr>
            {/result}
            </tbody>
        </table>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
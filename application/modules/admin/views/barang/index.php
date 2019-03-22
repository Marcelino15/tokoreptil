  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Barang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="tabel_barang" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>ID Barang (searchable)</th>
                <th>Nama Barang (searchable)</th>
                <th>Harga Barang</th>
                <th>Gambar</th>
                <th>Gambar</th>
                <th>Gambar</th>
                <th>User</th>
                <th>Kategori</th>
                <th><a href="{base_url({base_level}/barang/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{id_barang}</td>
                <td>{nama_barang}</td>
                <td>{harga_barang}</td>
                <td>{gambar1_barang}</td>
                <td>{gambar2_barang}</td>
                <td>{gambar3_barang}</td>
                <td>{idpersonal_barang}</td>
                <td>{idsubkategori_barang}</td>
                <td>
                  <a href="{base_url({level}/barang/ubah/{id_barang})}"><span><i class="glyphicon glyphicon-resize-full"></i></span></a>
                </td>
              </tr>
            {/result}
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
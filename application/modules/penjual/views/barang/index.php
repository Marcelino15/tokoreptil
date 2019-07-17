  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Barang</a></li>
        <li class="active">Index</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Barang {nama_session}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <table id="tabel_kategori" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>Nama  (searchable)</th>
                <th>Harga (searchable)</th>
                <th>Gambar</th>
                <th>Gambar</th>
                <th>Gambar</th>
                <th>Status</th>
                <th><a href="{base_url({base_level}/barang/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{nama_barang}</td>
                <td>{harga_barang}</td>
                <td><img src="{base_url(assets/foto_barang/{gambar1_barang})}" alt="Gambar Barang" width="42" height="42"></td>
                <td><img src="{base_url(assets/foto_barang/{gambar2_barang})}" alt="Gambar Barang" width="42" height="42"></td>
                <td><img src="{base_url(assets/foto_barang/{gambar3_barang})}" alt="Gambar Barang" width="42" height="42"></td>
                <td>{status_barang}</td>
                <td>
                  <a href="{base_url({level}/barang/ubah/{id_barang})}"><span><i class="glyphicon glyphicon-resize-full"></i></span></a>
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
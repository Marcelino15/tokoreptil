  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
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
                <th>Status</th>
                <th><a href="{base_url({base_level}/barang/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{id_barang}</td>
                <td>{nama_barang}</td>
                <td>{harga_barang}</td>
                <td><img src="{base_url(assets/foto_barang/{gambar1_barang})}" alt="Gambar Barang" width="42" height="42"></td>
                <td><img src="{base_url(assets/foto_barang/{gambar2_barang})}" alt="Gambar Barang" width="42" height="42"></td>
                <td><img src="{base_url(assets/foto_barang/{gambar3_barang})}" alt="Gambar Barang" width="42" height="42"></td>
                <td>{idpersonal_barang}</td>
                <td>{idkategori_barang}</td>
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
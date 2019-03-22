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
        <li class="active">Pesan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Pesan Masuk</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="tabel_pesan" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Email (searchable)</th>
                <th>Nama (searchable)</th>
                <th>Judul (searchable)</th>
                <th>Pesan (searchable)</th>
                <th>id</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{datetime_pesan}</td>
                <td>{email_pesan}</td>
                <td>{nama_pesan}</td>
                <td>{judul_pesan}</td>
                <td>{isi_pesan}</td>
                <td>{id_pesan}</td>
                <td><a href="{base_url({level}/pesan/hapus/{id_pesan})}"><span><i class="fa fa-trash"></i></span></a></td>
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
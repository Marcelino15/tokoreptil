  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
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
                <td>{kategori_artikel}</td>
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
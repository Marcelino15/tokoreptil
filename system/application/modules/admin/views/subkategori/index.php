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
        <li class="active">Sub Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{title}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="tabel_subkategori" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>ID (searchable)</th>
                <th>Nama Sub Kategori (searchable)</th>
                <th>Nama Kategori(searchable)</th>
               <th><a href="{base_url({base_level}/subkategori/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{id_subkategori}</td>
                <td>{nama_subkategori}</td>
                <td>{nama_kategori}</td>
                <td>
                  <a href="{base_url({level}/subkategori/ubah/{id_subkategori})}"><span><i class="glyphicon glyphicon-resize-full"></i></span></a>
                  <!--<a href="{base_url({level}/subkategori/hapus/{id_subkategori})}"><span><i class="fa fa-trash"></i></span></a>-->
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
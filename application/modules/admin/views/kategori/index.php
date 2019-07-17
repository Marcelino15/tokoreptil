  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
  
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{title}</h3>

   
        </div>
        <div class="box-body">
          <table id="tabel_kategori" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>ID (searchable)</th>
                <th>Nama Kategori (searchable)</th>
                <th><a href="{base_url({base_level}/kategori/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{id_kategori}</td>
                <td>{nama_kategori}</td>
                <td>
                  <a href="{base_url({level}/kategori/ubah/{id_kategori})}"><span><i class="glyphicon glyphicon-resize-full"></i></span></a>
                  <!--<a href="{base_url({level}/kategori/hapus/{id_kategori})}"><span><i class="fa fa-trash"></i></span></a>-->
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
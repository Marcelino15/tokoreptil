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
        <li class="active">Personal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Pesonal</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="tabel_personal" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>Nama (searchable)</th>
                <th>HP</th>
                <th>Email (searchable)</th>
                <th>Level (searchable)</th>
                <th>ID</th>
                <th><a href="{base_url({base_level}/personal/tambah)}"><span><i class="glyphicon glyphicon-plus"></i></span></a></th>
              </tr>
            </thead>
            <tbody>
            {result}
              <tr>
                <td>{nama_personal}</td>
                <td>{hp_personal}</td>
                <td>{email_personal}</td>
                <td>{level_personal}</td>
                <td>{id_personal}</td>
                <td>
                  <a href="{base_url({level}/personal/detail/{id_personal})}"><span><i class="glyphicon glyphicon-resize-full"></i></span></a>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
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
          <h3 class="box-title">Upload Foto</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          {result}
        <form action="<?php echo site_url('admin/artikel/upload_proses'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_artikel" value="{id_artikel}">
            <label>Foto Artikel</label>
            <input type="file" name="gambar_artikel">
            <br />
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <a href="{base_url(admin/artikel/index)}" class="btn btn-primary">Kembali</a>
        </form>
        {/result}
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
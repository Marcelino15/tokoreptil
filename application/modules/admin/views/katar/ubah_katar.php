  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Kategori Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Kategori Artikel</h3>

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
        <form action="<?php echo site_url('admin/katar/ubah_proses'); ?>" method="post">
            <input type="hidden" name="id_katar" value="{id_katar}">
            <div class="form-group">
            <label>Nama Kategori Artikel</label>
            <input type="text" name="nama_katar" value="{nama_katar}" class="form-control">
            </div>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <a href="{base_url(admin/katar/hapus/{id_katar})}" class="btn btn-danger">Hapus</a>
            <button type="batal" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
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
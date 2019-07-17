  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li>Barang</li>
        <li>Ubah Barang</li>
        <li class="active">Upload Foto</li>
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
        <form action="<?php echo site_url('penjual/barang/upload_proses'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_barang" value="{id_barang}">
            <label>Gambar Barang 1</label>
            <input type="file" name="gambar1_barang">
            <label>Gambar Barang 2</label>
            <input type="file" name="gambar2_barang">
            <label>Gambar Barang 3</label>
            <input type="file" name="gambar3_barang">
            <br />
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <a href="{base_url(penjual/barang/index)}" class="btn btn-primary">Kembali</a>
        </form>
        {/result}
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
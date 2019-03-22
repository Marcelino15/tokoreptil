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
         <form action="<?php echo site_url('admin/artikel/tambah_proses'); ?>" method="post" enctype="multipart/form-data" >
            <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul_artikel" class="form-control">
            </div>
            <div class="form-group">
            <label>ISI</label>
            <textarea name="isi_artikel" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
            <label>Penulis Artikel</label>
            <input type="text" name="penulis_artikel" class="form-control" value="{nama_session}">
            </div>
            <label>Kategori Artikel</label>
            <select name="kategori_artikel" class="form-control">
                <option value="">---Pilih Kategori Artikel---</option>
                <option value="Pengetahuan">Pengetahuan</option>
                <option value="Perawatan">Perawatan</option>
                <option value="Tips">Tips</option>
            </select>
            <div class="form-group">
            <label>Sumber</label>
            <input type="text" name="sumber_artikel" class="form-control">
            </div>
            <div class="form-group">
            <label>Gambar Artikel</label>
            <input type="file" name="gambar_artikel" class="form-control">
            </div>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Upload</button>
            <a href="{base_url(admin/artikel)}" class="btn btn-primary">Kembali</a>
         </form>
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
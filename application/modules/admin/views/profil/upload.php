  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Personal</li>
        <li class="active">Ganti Foto Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Upload Foto</h3>

          
        </div>
        <div class="box-body">
          {result}
        <form action="<?php echo site_url('admin/profil/upload_proses'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_personal" value="{id_personal}">
            <label>Foto Profil</label>
            <input type="file" name="foto_personal">
            <br />
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <button type="submit" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
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
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
        
          {result}
        <form action="<?php echo site_url('admin/personal/ubah'); ?>" method="post">
            <input type="hidden" name="id_personal" value="{id_personal}">
          
            <label>Nama Personal</label>
            <input type="text" name="nama_personal" value="{nama_personal}" class="form-control">     
            
            <label>Nomor Handphone</label>
            <input type="text" name="hp_personal" value="{hp_personal}" class="form-control">
    
            <label>Email</label>
            <input type="email" name="email_personal" value="{email_personal}" class="form-control">
            
            <label>Lokasi</label>
              <select name="lokasi_personal" class="form-control">
                <option value="">---Pilih Lokasi Anda---</option>
                <option value="Bantul">Bantul</option>
                <option value="Gunung Kidul">Gunung Kidul</option>
                <option value="Kulon Progo">Kulon Progo</option>
                <option value="Sleman">Sleman</option>
                <option value="Wates">Wates</option>
              </select>
              
            <div class="form_dropdown">
            <label>Level</label>
             <?php $pilihan3=["admin"=>"admin", "penjual"=>"penjual"]; ?>
            <?= form_dropdown("level_personal", $pilihan3); ?>
            </div>
            <br />
            <label>Password</label>
            <input type="password" name="password_personal" value="{password_personal}" class="form-control">
            <br />
            <div class="col-md-4">
            <label>Foto</label>
                <div class="thumbnail">
                    <img src="{base_url(assets/foto_personal/{foto_personal})}" alt="GambarBarang3" style="width:100%">
                </div>
            </div>
            
            <div class="col-md-12">
            <a href="{base_url(admin/personal/upload/{id_personal})}" class="btn btn-info">Upload Foto</a>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <button type="submit" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
            <a href="{base_url(admin/personal/hapus/{id_personal})}" class="btn btn-danger">Hapus</a>
            </div>
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
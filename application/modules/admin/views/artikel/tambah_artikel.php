  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Tambah Artikel
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Artikel</a></li>
        <li class="active">Tambah Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
      

          
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
                <?php
                foreach ($kategori['katar'] as $kat) {
                    ?>
                    <option <?php echo $kategori['katar_selected'] == $kat->id_katar ? 'selected="selected"' : '' ?>
                        value="<?php echo $kat->id_katar ?>"><?php echo $kat->nama_katar ?></option>
                    <?php
                }
                ?>
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
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
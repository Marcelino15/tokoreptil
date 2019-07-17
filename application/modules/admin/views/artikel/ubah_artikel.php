  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}

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
          <h3 class="box-title">Form Ubah Artikel</h3>
        </div>
        <div class="box-body">
        {result}
        <form action="<?php echo site_url('admin/artikel/ubah_proses'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_artikel" value="{id_artikel}">

            <label>Judul</label>
            <input type="text" name="judul_artikel" value="{judul_artikel}" class="form-control">
            <label>Isi</label>
            <textarea name="isi_artikel" cols="30" rows="10" class="form-control">{isi_artikel}</textarea>
            <label>Penulis Artikel</label>
            <input type="text" name="penulis_artikel" value="{penulis_artikel}" class="form-control">
            <label>Kategori Artikel</label>
            <select name="kategori_artikel" class="form-control">
                <option value="{id_katar}">{nama_katar}</option>
                <option value="">--- Pilih Kategori Artikel --</option>
                 <?php
                foreach ($kategori['katar'] as $kat) {
                    ?>
                    <option <?php echo $kategori['katar_selected'] == $kat->id_katar ? 'selected="selected"' : '' ?>
                        value="<?php echo $kat->id_katar ?>"><?php echo $kat->nama_katar ?></option>
                    <?php
                }
                ?>
            </select>
            <label>Sumber</label>
            <input type="text" name="sumber_artikel" value="{sumber_artikel}" class="form-control">
            <label>Gambar</label>
            <div class="col-md-12">
              <div class="thumbnail">
                  <img src="{base_url(assets/foto_artikel/{gambar_artikel})}" alt="GambarArtikel" style="width:100%">
            </div>
            <br /><br />
            <a href="{base_url(admin/artikel/upload/{id_artikel})}" class="btn btn-info">Upload Foto</a>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <a href="{base_url(admin/artikel/index)}" class="btn btn-primary">Kembali</a>
            <a href="{base_url(admin/artikel/hapus/{id_artikel})}" class="btn btn-danger">Hapus</a>
        </form>
        {/result}
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
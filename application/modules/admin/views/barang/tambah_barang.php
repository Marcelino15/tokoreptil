  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halo
        <small>{nama_session}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Barang</a></li>
        <li class="active">Tambah Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Form Input Barang</h3>

          
        </div>
        <div class="box-body">
          <form action="<?php echo site_url('admin/barang/tambah_proses'); ?>" method="post" enctype="multipart/form-data">
            <label>Nama </label>
            <input type="text" name="nama_barang" class="form-control"> 
            <label>Harga </label>
            <input type="text" name="harga_barang" class="form-control">
            <div class="form-group">
            <label>Keterangan </label>
            <textarea class="form-control" rows="5" name="keterangan_barang"></textarea>
            </div>
            <div class="form-group">
            <label>Kategori</label>
              <select name="idkategori_barang" class="form-control">
                <option value="">---Pilih Kategori---</option>
                <?php
                foreach ($kategori['kategori'] as $kat) {
                    ?>
                <option <?php echo $kategori['kategori_selected'] == $kat->id_kategori ? 'selected="selected"' : '' ?>
                        value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nama_kategori ?></option>
                    <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group">
            <label>Status Barang</label>
              <select name="status_barang" class="form-control">
                  <option value="PENDING">PENDING</option>
              </select>
            </div>

            <div class="form-group">
            <label>Gambar </label>
            <input type="file" name="gambar1_barang"  class="form-control">
            <input type="file" name="gambar2_barang"  class="form-control">
            <input type="file" name="gambar3_barang"  class="form-control">
            </div>

            <div class="form-group">
            <input type="text" name="idpersonal_barang" value="{id_session}" class="form-control">            
            </div>

            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
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
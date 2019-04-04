  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halo
        <small>{nama_session}</small>
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
          <h3 class="box-title">Form Input Barang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo site_url('penjual/barang/tambah_proses'); ?>" method="post" enctype="multipart/form-data">
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
                  <option value="1">Ular</option>
                  <option value="2">Katak</option>
                  <option value="3">Kura-Kura</option>
                  <option value="4">Kadal</option>
                  <option value="5">Accessories</option>
                  <option value="6">Serangga</option>
              </select>
            </div>

            <div class="form-group">
            <label>Status Barang</label>
              <select name="status_barang" class="form-control">
                  <option value="1">PENDING</option>
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
            <a href="{base_url(penjual/barang)}" class="btn btn-primary">Kembali</a>
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
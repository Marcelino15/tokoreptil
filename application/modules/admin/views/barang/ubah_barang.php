  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {title}
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
          <h3 class="box-title">Ubah Data Barang User</h3>

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
          <form action="<?php echo site_url('admin/barang/ubah_proses'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_barang" value="{id_barang}">
            <label>Nama</label>
            <input type="text" name="nama_barang" value="{nama_barang}" value="{nama_barang}" class="form-control">
            <label>Harga</label>
            <input type="text" name="harga_barang" value="{harga_barang}" value="{harga_barang}" class="form-control">
            <label>Keterangan</label>
            <textarea name="keterangan_barang" cols="30" rows="10" class="form-control">{keterangan_barang}</textarea>
            <label>Kategori</label>
              <select name="idsubkategori_barang" class="form-control">
                  <option value="{idsubkategori_barang}">{idsubkategori_barang}</option>
                  <option value="">---Pilih Kategori---</option>
                  <option value="1">Acrochordidae</option>
                  <option value="2">Aniliidae</option>
                  <option value="3">Anomochilidae</option>
                  <option value="4">Boidae</option>
                  <option value="5">Bolyeriidae</option>
              </select>
              <label>Status Barang</label>
              <select name="status_barang" class="form-control">
                  <option value="PENDING">PENDING</option>
                  <option value="OK">OK</option>
              </select>
            <div class="form-group">  
            <label>Gambar Barang</label>
            <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="{base_url(assets/foto_barang/{gambar1_barang})}" alt="GambarBarang1" style="width:100%">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="{base_url(assets/foto_barang/{gambar2_barang})}" alt="GambarBarang2" style="width:100%">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="{base_url(assets/foto_barang/{gambar3_barang})}" alt="GambarBarang3" style="width:100%">
                  </div>
                </div>
              </div>
            </div>
            <input type="text" name="idpersonal_barang" value="{idpersonal_barang}" class="form-control">
            <br><br>
            <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
            <button type="submit" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
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
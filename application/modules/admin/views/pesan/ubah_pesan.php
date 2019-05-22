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
          {result}
          <form action="<?php echo site_url('admin/pesan/ubah_proses'); ?>" method="post">
              <div class="form-group">
              <input type="hidden" name="id_pesan" value="{id_pesan}">
              <label for="judul_pesan">Judul Pesan :</label>
              <select name="judul_pesan" class="form-control" required>
                <option value="{judul_pesan}">{judul_pesan}</option>
                <option>---Masukkan Judul Pesan---</option>
                <option value="Lupa Password">Lupa Password</option>
                <option value="Barang">Barang</option>
              </select>
              </div>

              <div class="form-group">
              <label for="email">Alamat Email :</label>
              <input type="email" name="email_pesan" placeholder="masukkan alamat email anda" class="form-control" value="{email_pesan}" required>
              </div>

              <div class="form-group">
              <label for="hp">Nomor Telfon :</label>
              <input type="number" name="hp_pesan" placeholder="masukkan nomor telfon" class="form-control" value="{hp_pesan}" required>
              </div>

              <div class="form-group">
              <label for="isi_pesan">Isi Pesan :</label>
              <textarea class="form-control" rows="5" class="form-control" placeholder="Masukkan pesan Anda" name="isi_pesan" required>{isi_pesan}</textarea>
              </div>

              <div class="form-group">
              <label for="hp">Pengirim :</label>
              <input type="text" name="levelpengirim_pesan"  class="form-control" value="{levelpengirim_pesan}" readonly>
              </div>

              <input type="hidden" name="penerima_pesan" value="admin">

              <input type="hidden" name="status_pesan" value="dibaca">

              <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
              <a href="{base_url(pesan)}" class="btn btn-primary">Kembali</a>
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
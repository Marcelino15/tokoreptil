  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Pengiriman Pesan
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pesan</a></li>
        <li class="active">Kirim Pesan</li>
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
        <form action="<?php echo site_url('penjual/pesan/tambah_proses'); ?>" method="post">
          <div class="form-group">
          <input type="hidden" name="id_pesan">
          <label for="judul_pesan">Judul Pesan :</label>
          <input type="text" name="judul_pesan"  class="form-control" value="Lupa Password" readonly>
          </div>

          <div class="form-group">
          <label for="email">Alamat Email :</label>
          <input type="email" name="email_pesan" placeholder="masukkan alamat email anda" class="form-control" required>
          </div>

          <div class="form-group">
          <label for="hp">Nomor Telfon :</label>
          <input type="number" name="hp_pesan" placeholder="masukkan nomor telfon" class="form-control" required>
          </div>

          <div class="form-group">
          <label for="isi_pesan">Isi Pesan :</label>
          <textarea class="form-control" rows="5" class="form-control" placeholder="Masukkan pesan Anda" name="isi_pesan" required></textarea>
          </div>

          <div class="form-group">
          <label>Pengirim :</label>
          <input type="text" name="statuspengirim_pesan" class="form-control" value="penjual" readonly>
          </div>

          <div class="form-group">
            <label for="penerima">Penerima :</label>
            <input type="text" name="penerima_pesan" value="admin" class="form-control" readonly>
          </div>

          <input type="hidden" name="status_pesan" value="belum dibaca">
          <input type="hidden" name="pengiriman_pesan" value="terkirim">


          <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
          <button type="batal" value="Go Back" onclick="history.back(-1)" class="btn btn-primary">Batal</button>
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

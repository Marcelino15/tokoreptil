<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{base_url(assets/frontend/images/icons/icon.png)}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{base_url(assets/frontend/vendor/bootstrap/css/bootstrap.min.css)}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{base_url(assets/frontend/vendor/bootstrap/css/bootstrap.css)}">
    <title>{title}</title>
</head>
<body>
    <div class="container">
    <h2><center>Form Lupa Password</center></h2>
    <br /><br />
    <form action="<?php echo site_url('global/pesan/tambah_proses'); ?>" method="post">
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
      <a href="{base_url(global/login)}" class="btn btn-primary">Kembali</a>
    </form>
    </div>
    <br /> <br />
    <script src="<?php echo base_url('assets/frontend/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/jquery.chained.min.js') ?>"></script>
        <script>
            $("#kabupaten").chained("#provinsi"); // disini kita hubungkan kota dengan provinsi
        </script>
</body>
</html>
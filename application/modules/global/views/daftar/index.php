<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{base_url(assets/frontend/images/icons/favicon.png)}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{base_url(assets/frontend/vendor/bootstrap/css/bootstrap.min.css)}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{base_url(assets/frontend/vendor/bootstrap/css/bootstrap.css)}">
    <title>{title}</title>
</head>
<body>
    <div class="container">
    <h2><center>Form Daftar Penjual</center></h2>
    <br /><br />
    <form action="<?php echo site_url('global/daftar/tambah_proses'); ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_personal">
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_personal" class="form-control" >
    </div>
    <div class="form-group">
    <label>Nomor Handphone</label>
    <input type="text" name="hp_personal" class="form-control" >
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email_personal" class="form-control" >
    </div>
    <div class="form-group">
    <label>Lokasi</label>
        <select name="lokasi_personal" class="form-control">
            <option value="">---Pilih Lokasi Anda---</option>
            <option value="Bantul">Bantul</option>
            <option value="Gunung Kidul">Gunung Kidul</option>
            <option value="Kulon Progo">Kulon Progo</option>
            <option value="Sleman">Sleman</option>
            <option value="Wates">Wates</option>
        </select>
    </div>
    <div class="form-group">
    <label>Level</label>
        <select name="level_personal" class="form-control">
            <option value="penjual" type="readonly">Penjual</option>
        </select>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password_personal" class="form-control" >
    </div>  
    <div class="form-group">
    <label>Foto</label>
    <input type="file" name="foto_personal"  class="form-control">
    </div>
    <button type="submit" name="aksi" value="simpan" class="btn btn-success">Simpan</button>
    <a href="{base_url(global/login)}" class="btn btn-primary">Kembali</a>
   
    </form>
    </div>
    <br /> <br />
</body>
</html>
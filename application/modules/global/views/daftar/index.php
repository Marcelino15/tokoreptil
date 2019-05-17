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
    <input type="text" name="nama_personal" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Nomor Handphone</label>
    <input type="number" name="hp_personal" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" name="email_personal" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Lokasi :</label><br>
    <label>Provinsi</label>
        <select name="provinsi_personal" class="form-control" id="provinsi" required>
        <option>---Masukkan Provinsi---</option>
        <?php
        foreach ($provinsi as $prov) {
            ?>
            <option <?php echo $provinsi_selected == $prov->id_provinsi ? 'selected="selected"' : '' ?>
                value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option>
            <?php
        }
        ?>
        </select>
    </div>
    <div class="form-group">
    <label>Kabupaten</label>
         <select class="form-control" name="kabupaten_personal" id="kabupaten" required>
            <option value="">---Masukkan Kecamatan---</option>
            <?php
                foreach ($kabupaten as $kab) {
                    ?>
                    <option <?php echo $kabupaten_selected == $kab->idprovinsi_kabupaten ? 'selected="selected"' : '' ?>
                        class="<?php echo $kab->idprovinsi_kabupaten ?>" value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
                    <?php
                }
            ?>
        </select>
    </div>    
    <div class="form-group">
    <label>Level</label>
        <select name="level_personal" class="form-control" required>
            <option value="penjual" type="readonly">Penjual</option>
        </select>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password_personal" class="form-control" required>
    </div>  
    <div class="form-group">
    <label>Foto</label>
    <input type="file" name="foto_personal"  class="form-control" required>
    </div>
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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | {title}</title>
  <link rel="icon" type="image/png" href="{base_url(assets/frontend/images/icons/icon.png)}"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{base_url(assets/adminlte2/bower_components/bootstrap/dist/css/bootstrap.min.css)}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{base_url(assets/adminlte2/bower_components/font-awesome/css/font-awesome.min.css)}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{base_url(assets/adminlte2/bower_components/Ionicons/css/ionicons.min.css)}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{base_url(assets/adminlte2/dist/css/AdminLTE.min.css)}">
  <link rel="stylesheet" href="{base_url(assets/adminlte2/dist/css/AdminLTE.css)}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{base_url(assets/adminlte2/plugins/iCheck/square/blue.css)}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Login</b> | <a href="{base_url(frontend)}"><b>Beranda</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    
    <p class="login-box-msg">Sign in to start your session</p>

    {if {error}}
      <p class="login-box-msg">{error}</p>
    {/if}

    <form action="{base_url(global/login/login_cek)}" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email_personal" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p>{form_error(email_personal)}</p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_personal" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <p>{form_error(password_personal)}</p>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- Modal -->
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Form Lupa Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="<?php echo site_url('global/pesan/tambah_proses'); ?>" method="post">
            <div class="form-group">
            <label for="judul_pesan">Judul Pesan :</label>
            <input type="email" name="judul_pesan"  class="form-control" value="Lupa Password" required>
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
            <select name="levelpengirim_pesan" class="form-control" required>
              <option value="penjual">Penjual</option>
              <option value="admin">Admin</option>
            </select>
            </div>
         </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" value="simpan" class="btn btn-success" data-dismiss="modal">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    <a href="#" data-toggle="modal" data-target="#myModal">Lupa Password</a><br>
    <a href="{base_url(global/daftar)}" class="text-center">Daftar</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{base_url(assets/adminlte2/bower_components/jquery/dist/jquery.min.js)}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{base_url(assets/adminlte2/bower_components/bootstrap/dist/js/bootstrap.min.js)}"></script>
<!-- iCheck -->
<script src="{base_url(assets/adminlte2/plugins/iCheck/icheck.min.js)}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

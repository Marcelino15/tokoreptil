  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="{base_url({base_level}/dashboard)}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{base_url(assets/foto_personal/{foto_session})}" alt="User profile picture">

              <h3 class="profile-username text-center">{nama_session}</h3>

              <p class="text-muted text-center">{level_session}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nomor Telfon</b> <a class="pull-right">{hp_session}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{email_session}</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
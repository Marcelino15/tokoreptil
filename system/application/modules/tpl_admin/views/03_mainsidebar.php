 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{base_url(assets/adminlte2/dist/img/{foto_session})}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{nama_session}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Profil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{site_url({base_level}/profil)}"><i class="fa fa-circle-o"></i> Detail</a></li>
            <li><a href="{site_url({base_level}/profil/password)}"><i class="fa fa-circle-o"></i> Ganti Password</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Personal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{site_url({base_level}/personal)}"><i class="fa fa-circle-o"></i> Personal</a></li>
            <li><a href="{site_url({base_level}/coverage)}"><i class="fa fa-circle-o"></i> Lokasi</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{site_url({base_level}/barang)}"><i class="fa fa-circle-o"></i>Barang</a></li>
            <li><a href="{site_url({base_level}/kategori)}"><i class="fa fa-circle-o"></i> Kategori</a></li>
            <li><a href="{site_url({base_level}/subkategori)}"><i class="fa fa-circle-o"></i> Subkategori</a></li>
          </ul>
        </li>
        <li><a href="{site_url({base_level}/pesan)}"><i class="fa fa-book"></i> <span>Pesan</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
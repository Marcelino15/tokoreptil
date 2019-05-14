 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{base_url(assets/foto_personal/{foto_session})}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{nama_session}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     <br><br>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li><a href="{site_url({base_level}/dashboard)}"><i class="fa fa-dashboard "></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Profil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{site_url({base_level}/personal)}"><i class="fa fa-circle-o"></i> Detail</a></li>
            <li><a href="{site_url({base_level}/personal/detail/{id_session})}"><i class="fa fa-circle-o"></i>Edit Profil</a></li>
          </ul>
        </li>
        <li><a href="{site_url({base_level}/barang)}"><i class="fa fa-suitcase"></i> <span>Barang</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
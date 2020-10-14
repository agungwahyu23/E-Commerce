<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>assets/admin/index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- MENU DASHBOARD -->
          <li class="nav-item">
            <a href="<?= base_url('admin/dasbor') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt text-aqua"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
          <!-- MENU USER -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                PENGGUNA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user') ?>" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/user/tambah') ?>" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>Tambah Pengguna</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
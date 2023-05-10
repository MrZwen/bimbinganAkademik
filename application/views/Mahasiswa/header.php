<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Mahasiswa</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Navbar -->
  <nav class="atas main-header navbar navbar-expand navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto">
        <a class="btn btn-danger" href="../logout.php" role="button">
          <i class="fas fa-sign-out-alt mx-1"></i>Logout
        </a>
    </ul> -->
  </nav>
  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="samping main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= base_url('gambar/logopoltek.png') ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text text-white font-weight-light">Bimbingan Akademik</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/dist/img/avatar.png') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php ?></a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item ">
              <a href="" class="nav-link text-white">
                <i class="nav-icon fas fa-reugler fa-user"></i>
                <p>
                  Data Diri
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-white">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Bimbingan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-white">
                <i class="nav-icon fas fa-history"></i>
                <p>
                  Riwayat
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-white">
                <i class="nav-icon fas fa-regular fa-book"></i>
                <p>
                  Informasi SK
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-white">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </div>
  </aside>
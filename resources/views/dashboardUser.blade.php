<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('userLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('userLTE/dist/css/adminlte.min.css')}}">

  <style>
    .bayangan:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
      /* Adjust the values to customize the shadow effect */
    }
  </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      {{-- <img src="{{asset('userLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">KAF Dashboard User</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="data:image/png;base64,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" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>Video</p>
            </a>
          </li>
          <br>
          <li class="nav-header text-center">

          <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="btn btn-outline-danger link btn-circle">
                                <i class="nav-icon fas fa-door-open"></i>
                            </a>
          </form>
            <!-- <a class="btn btn-outline-danger link btn-circle">
              <i class="nav-icon fas fa-door-open"></i>
            </a> -->
          </li>
          
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="container">
    <div class="d-flex flex-wrap justify-content-start">
    @foreach($userVideo as $row)
    <div class="card bayangan mx-4" style="width: 18rem;">
    <video class="card-img-top" style="height: 13rem;" controls>
        <source src="{{ asset('upload') }}/{{ $row['video'] }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="card-body">
        <h5 class="card-title">{{$row['judul']}}</h5>
        <p class="card-text">{{$row['deskripsi']}}</p>
    </div>
</div>
        @endforeach
    </div>
</div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- Modal -->

<!-- REQUIRED SCRIPTS -->

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <video controls width="100%">
            <source src="#" type="video/*">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('userLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('userLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('userLTE/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('userLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('userLTE/dist/js/pages/dashboard3.js')}}"></script>
</body>
</html>

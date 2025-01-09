<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Edit Video</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('xsb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('xsb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials-admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

                        <!-- Nav Item - User Information -->
                        @include('partials-admin.user-information')

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="modal-body">
      <form method="POST" action="{{ route('admin.upload') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
        <h6><a class="text-secondary text-decoration-none" href="dashboard"> Dashboard </a> <i class="fas fa-arrow-right mx-2"></i> <span class="text-primary">Edit Video</span></h6>
            <h1>Edit Video</h1>
          <label for="judulVideo">Judul : </label>
          <input type="text" class="form-control" id="judulVideo" name="judul" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="deskripsiVideo">Deskripsi : </label>
          <input type="text" class="form-control" id="deskripsiVideo"  name="deskripsi" aria-describedby="judulEdit">
        </div>
        <div class="form-group mb-3">
      <label for="kategoriVideo">Kategori :</label>
    <select class="custom-select" id="kategori" name="kategori">
    <!-- <option selected>Categories</option> -->
    <option value="0">User</option>
    <option value="1">Mitra</option>
  </select>
</div>
        <div class="form-group">
          <label for="inputGroupFile01">Upload Video : </label>
        <div class="input-group mb-3">
          <div class="custom-file">
            <label class="custom-file-label" for="inputGroupFile01" ></label>
            <input type="file" class="custom-file-input" id="inputGroupFile01"  name="video" aria-describedby="inputGroupFileAddon01" placeholder="pilih video">
          </div>
        </div>
      </div>
      </div>
      <p>
            @if($errors->has('video'))
              {{$errors->first('video')}}
            @endif
          </p>
      <button type="submit" class="btn btn-primary mx-3">Upload</button>


            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        @include('partials-admin.footer')
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('partials-admin.logout-modal')
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('xsb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('xsb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('xsb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('xsb-admin/js/sb-admin-2.min.js')}}"></script>
    {{-- <script src="https://kit.fontawesome.com/f02686f695.js" crossorigin="anonymous"></script> --}}

</body>

</html>
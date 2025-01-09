<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('xsb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('xsb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{asset('xsb-admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Video</h1>
                    </div>
                    <!-- tabel -->
                    @include('partials-admin.tabel')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('partials-admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('partials-admin.logout-modal')

       <!-- Modal Tambah Video -->
    @include('partials-admin.add-video')

    <!-- Modal Edit -->
    @include('partials-admin.edit-video')

    <!-- Modal Detail Video -->
    @include('partials-admin.detail-video')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('xsb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('xsb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('xsb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('xsb-admin/js/sb-admin-2.min.js')}}"></script>
    {{-- <script src="https://kit.fontawesome.com/f02686f695.js" crossorigin="anonymous"></script> --}}

     <!-- Page level plugins -->
     <script src="{{asset('xsb-admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('xsb-admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <!-- Page level custom scripts -->
  <script src="{{asset('xsb-admin/js/demo/datatables-demo.js')}}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var table = document.getElementById("dataTable");
      var tbody = table.getElementsByTagName("tbody")[0];
      var rows = tbody.getElementsByTagName("tr");
  
      for (var i = 0; i < rows.length; i++) {
        var cell = document.createElement("td");
        cell.textContent = i + 1;
        rows[i].insertBefore(cell, rows[i].firstChild);
      }
    });
  </script>
</body>

</html>
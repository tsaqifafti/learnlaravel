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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/1234dm1n/dashboard">
                {{-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> --}}
                <div class="sidebar-brand-text mx-3">KAF Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/1234dm1n/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin.adduser')}}">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Create User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between text-align-center">
                          <h6 class="m-0 font-weight-bold text-primary">List Video</h6>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                            <i class="">Add Video</i>
                          </a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Video</th>
                                  <th>Judul</th>
                                  <th>Deskripsi</th>
                                  <th class="text-center">aksi</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>No</th>
                                  <th>Video</th>
                                  <th>Judul</th>
                                  <th>Deskripsi</th>
                                  <th class="text-center">aksi</th>
                                </tr>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td class="text-center">
                                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#detailModal">
                                    <i class="fas fa-image"></i>
                                  </a>
                                </td>
                                  <td>Customer Support</td>
                                  <td>New York</td>
                                  <td class="d-flex justify-content-around align-items-center">
                                  <a href="" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#editModal">
                                    <i class="fas fa-pen"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-center">
                                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#detailModal">
                                    <i class="fas fa-image"></i>
                                  </a>
                                </td>
                                  <td>Customer Support</td>
                                  <td>New York</td>
                                  <td class="d-flex justify-content-around align-items-center">
                                  <a href="#" class="btn btn-warning btn-circle">
                                    <i class="fas fa-pen"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; KAF FriedChicken 2023</span>
                    </div>
                </div>
            </footer>
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="judulVideo">Judul : </label>
          <input type="text" class="form-control" id="judulVideo" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="deskripsiVideo">Deskripsi : </label>
          <input type="text" class="form-control" id="deskripsiVideo" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="inputGroupFile01">Upload Video : </label>
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="judulVideo">Judul : </label>
          <input type="text" class="form-control" id="judulVideo" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="deskripsiVideo">Deskripsi : </label>
          <input type="text" class="form-control" id="deskripsiVideo" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="inputGroupFile01">Upload Video : </label>
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail Video -->

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <video width="100%" height="240" controls>
          <source src="https://www.youtube.com/watch?v=vFmSJRNVhak" type="video/ogg">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
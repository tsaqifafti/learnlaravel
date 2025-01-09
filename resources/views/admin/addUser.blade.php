<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Create User</title>

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Generate User Account</h1>
                    </div>

                    <div class="row justify-content-lg-center">

                        <div class="col-lg-6">

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4 border-bottom-info">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary text-center">Create User Account (GUEST)</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample">
                                    <div class="card-body">
                                            <div class="form-group">
                                            <form class="user" method="POST" action="{{ route('admin.adduser') }}">
                                            @csrf
                                                <input type="text" class="form-control" id="usernameInput" aria-describedby="emailHelp" placeholder="Username" name="name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control " id="passwordInput" name="password" placeholder="Password" readonly>
                                            </div>
                                            <button id="generate" class='btn btn-info btn-block'>Generate</button>
                                         </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4 border-bottom-primary">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardMitra" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary text-center">Create User Account (MITRA)</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardMitra">
                                    <div class="card-body">
                                        {{-- <form class="user"> --}}
                                            <div class="form-group">
                                            <form class="user" method="POST" action="{{ route('admin.addmitra') }}">
                                            @csrf    
                                                <input type="text" class="form-control" id="usernameInputMitra" aria-describedby="emailHelp" placeholder="Username" name="name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control " id="passwordInputMitra" placeholder="Password" name="password" readonly>
                                                <input type="hidden" class="form-control "  name="role" value="1" readonly>
                                            </div>
                                            <button id="generateMitra" class='btn btn-primary btn-block'>Generate</button>
                                        {{-- </form> --}}
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
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
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('xsb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('xsb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('xsb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('xsb-admin/js/sb-admin-2.min.js')}}"></script>
    {{-- <script src="https://kit.fontawesome.com/f02686f695.js" crossorigin="anonymous"></script> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const generateButton = document.getElementById("generate");
            const usernameInput = document.getElementById("usernameInput")
            const passwordInput = document.getElementById("passwordInput");

            generateButton.addEventListener("click", function () {
                const randomUsername = generateRandomUsername(6)
                const randomPassword = generateRandomPassword(20);
                passwordInput.value = randomPassword;
                usernameInput.value = randomUsername;
                alert(`
                Create Account User Berhasil !

                Username User = ${usernameInput.value}
                Password User = ${passwordInput.value}`)
            });

            function generateRandomUsername(length) {
                const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,.!@#$%^&*";
                let username = "User";
                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * charset.length);
                    username += charset.charAt(randomIndex);
                }
                return username;
            }

            function generateRandomPassword(length) {
                const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,.!@#$%^&*";
                let password = "";
                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * charset.length);
                    password += charset.charAt(randomIndex);
                }
                return password;
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            const generateButtonMitra = document.getElementById("generateMitra");
            const usernameInput = document.getElementById("usernameInputMitra")
            const passwordInput = document.getElementById("passwordInputMitra");

            generateButtonMitra.addEventListener("click", function () {
                const randomUsername = generateRandomUsername(6)
                const randomPassword = generateRandomPassword(20);
                passwordInput.value = randomPassword;
                usernameInput.value = randomUsername;

                alert(`
                Create Account Mitra Berhasil !

                Username Mitra = ${usernameInput.value}
                Password Mitra = ${passwordInput.value}`)
                
            });

            function generateRandomUsername(length) {
                const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,.!@#$%^&*";
                let username = "Mitra";
                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * charset.length);
                    username += charset.charAt(randomIndex);
                }
                return username;
            }

            function generateRandomPassword(length) {
                const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,.!@#$%^&*";
                let password = "";
                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * charset.length);
                    password += charset.charAt(randomIndex);
                }
                return password;
            }
        });
        </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyStuffMapala</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{ asset('img/mytfficon.png') }}">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <img src="{{asset('img/mytuffkotak.png')}}" alt="">

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item {{ request()->is('list') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/list')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Stok Barang</span></a>
        </li>

        <li class="nav-item {{ request()->is('/peminjaman') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/peminjaman')}}">
                <i class="fas fa-fw fa-solid fa-book"></i>
                <span>Peminjaman</span></a>
        </li>

        <li class="nav-item {{ request()->is('rekap') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/rekap')}}">
                <i class="fas fa-solid fa-clipboard"></i>
                <span>Rekap Data</span></a>
        </li>

        <li class="nav-item">
            <form action="{{route('logout')}}">
                <button class="btn nav-link" type="submit">
                <i class="fas fa-solid fa-backward"></i>
                <span>Logout</span></a>
            </button>
            </form>
        </li>
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        @yield('layout.navbar')

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                {{-- Main COntent --}}
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Peralatan</h1>
                    </div>

                    <form action="{{ route('peralatan.update', $peralatan->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group" style="width: 80%;">
                          <label for="nama_alat">Nama Alat</label>
                          <input type="text" class="form-control" id="nama_alat" placeholder="masukkan nama alat" name="nama_alat" value="{{ old('nama_alat', $peralatan->nama_alat) }}">
                        </div>

                        <span>Deskripsi: </span>
                        <div class="d-sm-flex align-items-center mb-4">
                        <div class="form-group" style="margin-right: 24px;">
                            <label for="perlangkapan">Perlengkapan</label>
                            <input type="text" class="form-control" id="perlangkapan" placeholder="masukkan perlengkapan alat" name="perlangkapan" value="{{ old('perlangkapan', $peralatan->perlangkapan) }}">
                        </div>
                        <div class="form-group" style="margin-left: 24px;">
                            <label for="warna">Warna</label>
                            <input type="text" class="form-control" id="warna" placeholder="masukkan warna alat" name="warna" value="{{ old('warna', $peralatan->warna) }}">
                        </div>
                        <div class="form-group" style="margin-left: 24px;">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" placeholder="masukkan merk alat" name="merk" value="{{ old('merk', $peralatan->merk) }}">
                        </div>
                        </div>

                        <div class="d-sm-flex align-items-center mb-4">
                            <div class="form-group" style="margin-right: 24px;">
                                <label for="tersedia">Tersedia</label>
                                <input type="text" class="form-control" id="tersedia" placeholder="Alat tersedia" name="tersedia" value="{{ old('tersedia', $peralatan->tersedia) }}">
                            </div>
                            <div class="form-group" style="margin-left: 24px;">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah" placeholder="Jumlah Alat" name="jumlah" value="{{ old('jumlah', $peralatan->jumlah) }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button></a>
                        <a href="{{url('/list')}}">
                        <button class="btn btn-primary">Batal</button></a>
                    </form>
                </div>
                {{-- End Content --}}

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MyStuffMapala</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
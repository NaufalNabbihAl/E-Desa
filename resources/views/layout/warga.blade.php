<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard E-DESA</title>


    <!-- Custom fonts for this template-->
    <link href="/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="shortcut icon" href="{{ url('assets/admin/img/favicon.png') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/dashboardWarga.min.css') }}">
    <!-- <link rel="stylesheet" href="/assets/admin/css/dashboardWarga.min.css"> -->
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a href="/" class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ url('assets/admin/img/favicon.png') }}" class="img-fluid" alt="" />
                </div>
                <div>E-DESA</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0" />
            <div class="d-flex justify-content-around my-3 flex-wrap">
                <img src="{{ url('assets/img/gambar2.png') }}" class="rounded-circle" alt="" width="50px">
                <a href="{{ route('warga.edit') }}"
                    class="text-left w-50 d-flex align-items-center text-white">{{ App\Models\Warga::where('NIK', Auth::user()->NIK)->first()->nama }}</a>
                <hr class="sidebar-divider my-0" />
                <!-- render -->
                <div>
                    <!-- nav item halaman utama -->
                    <li class="nav-item DashboardPage">
                        <a href="{{ route('jadwal_kegiatan.index') }}" class="nav-link text-center">
                            <span>Jadwal Kegiatan Warga</span>
                        </a>
                    </li>
                    <!-- Nav Item data anggota -->
                    <li class="nav-item AnggotaPage">
                        <a href="{{ route('wajib_lapor.index') }}" class="nav-link text-center">
                            <span>Wajib Lapor</span>
                        </a>
                    </li>

                    <!-- Nav Item simpanan -->
                    <li class="nav-item SimpananPage">
                        <a href="{{ route('umkm.index') }}" class="nav-link text-center">
                            <span>UMKM</span>
                        </a>
                    </li>

                    <!-- Nav Item simpanan -->
                    <li class="nav-item PinjamanPage">
                        <a href="{{ route('peminjaman_barang.index') }}" class="nav-link text-center">
                            <span>Peminjaman Barang</span>
                        </a>
                    </li>

                    <!-- Nav Item simpanan -->
                    <li class="nav-item AngsuranPage">
                        <a href="{{ route('bank_sampah.index') }}" class="nav-link text-center">
                            <span>Bank Sampah</span>
                        </a>
                    </li>
                    <!-- Nav Item simpanan -->
                    <else>
                        <li class="nav-item LaporanKeuanganPage">
                            <a href="{{ route('laporan_keuangan.index') }}" class="nav-link text-center">
                                <span>Laporan Keuangan</span>
                            </a>
                        </li>
                        <li class="nav-item AuditLaporanPage">
                            <a class="nav-link text-center">
                                <span>Forum</span>
                            </a>
                        </li>
                        <li class="nav-item AkunPage">
                            <a href="{{ route('pengumuman.index') }}" class="nav-link text-center">
                                <span>Pengumuman</span>
                            </a>
                        </li>
                </div>
                <!-- end render -->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block" />

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
                <nav class="navbar navbar-expand topbar mb-4 static-top shadow" style="background-color: #54BAB9;">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                    class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                </svg>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                style="width: 500px;" aria-labelledby="userDropdown">
                                <span class="dropdown-item-text">Pengumuman</span>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-item d-flex justify-content-around overflow-auto">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                            fill="black" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="border border-dark"></div>
                                    <p class="text-wrap col-10">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Repellat vitae aperiam et natus quos. Vel, ducimus atque delectus harum
                                        magnam repellat pariatur nihil tenetur, aspernatur modi eum officia in
                                        obcaecati!</p>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-item d-flex justify-content-around overflow-auto">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                            fill="black" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="border border-dark"></div>
                                    <p class="text-wrap col-10">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Repellat vitae aperiam et natus quos. Vel, ducimus atque delectus harum
                                        magnam repellat pariatur nihil tenetur, aspernatur modi eum officia in
                                        obcaecati!</p>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-item d-flex justify-content-around overflow-auto">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                            fill="black" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </div>
                                    <div class="border border-dark"></div>
                                    <p class="text-wrap col-10">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Repellat vitae aperiam et natus quos. Vel, ducimus atque delectus harum
                                        magnam repellat pariatur nihil tenetur, aspernatur modi eum officia in
                                        obcaecati!</p>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                        <path d="M7.5 1v7h1V1h-1z" />
                                        <path
                                            d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- End of Topbar -->

                    @yield('content')

                    <!-- Footer -->
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
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pilih "Logout" Jika Sudah Ingin Keluar Dari Website
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                Batal
                            </button>
                            <a class="btn btn-primary" href="base_url(getenv('logout'))">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
            <script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- from page -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
            </script>
</body>

</html>

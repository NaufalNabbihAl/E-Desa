<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Jadwal</title>
    <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/admin/css/sb-admin-2.min.css">
</head>

<body>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ base_url() }}">
                    <div class="sidebar-brand-icon rotate-n-15">
                    </div>
                    <div>E-DESA</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0" />
                <div class="d-flex justify-content-around my-3 flex-wrap">
                    <img src="assets/img/profile.png" class="rounded-circle" alt="" width="50px">
                    <div class="text-left w-50 d-flex align-items-center text-white">Warga</div>
                </div>
                <hr class="sidebar-divider my-0" />
                <!-- render -->
                <div>
                    <!-- nav item halaman utama -->
                    <li class="nav-item DashboardPage">
                        <a class="nav-link text-center">
                            <span>Jadwal Kegiatan Warga</span>
                        </a>
                    </li>
                    <!-- Nav Item data anggota -->
                    <li class="nav-item AnggotaPage">
                        <a class="nav-link text-center">
                            <span>Wajib Lapor</span>
                        </a>
                    </li>

                    <!-- Nav Item simpanan -->
                    <li class="nav-item SimpananPage">
                        <a class="nav-link text-center">
                            <span>UMKM</span>
                        </a>
                    </li>

                    <!-- Nav Item simpanan -->
                    <li class="nav-item PinjamanPage">
                        <a class="nav-link text-center">
                            <span>Peminjaman</span>
                        </a>
                    </li>

                    <!-- Nav Item simpanan -->
                    <li class="nav-item AngsuranPage">
                        <a class="nav-link text-center">
                            <span>Bank Sampah</span>
                        </a>
                    </li>
                    <!-- Nav Item simpanan -->
                    <else>
                        <li class="nav-item LaporanKeuanganPage">
                            <a class="nav-link text-center">
                                <span>Laporan Keuangan</span>
                            </a>
                        </li>
                        <li class="nav-item AuditLaporanPage">
                            <a class="nav-link text-center">
                                <span>Forum</span>
                            </a>
                        </li>
                        <li class="nav-item AkunPage">
                            <a class="nav-link text-center">
                                <span>Pengumuman</span>
                            </a>
                        </li>
                </div>

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
                        <h2 style="color: azure;">HOME</h2>
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
                                            elit. Repellat vitae aperiam et natus quos. Vel, ducimus atque delectus
                                            harum magnam repellat pariatur nihil tenetur, aspernatur modi eum officia in
                                            obcaecati!
                                        </p>
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
                                            elit. Repellat vitae aperiam et natus quos. Vel, ducimus atque delectus
                                            harum magnam repellat pariatur nihil tenetur, aspernatur modi eum officia in
                                            obcaecati!
                                        </p>
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
                                            elit. Repellat vitae aperiam et natus quos. Vel, ducimus atque delectus
                                            harum magnam repellat pariatur nihil tenetur, aspernatur modi eum officia in
                                            obcaecati!
                                        </p>
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
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- diisi konten -->
                        <h2 style="color: #387372;">Jadwal Kegiatan Warga</h2>
                        <div class="d-flex justify-content-around my-4">
                            <div class="w-100 rounded bg-white p-4 w-100 d-flex justify-content-around">
                                <form action="">
                                    <div class="my-3 rounded w-100"
                                        style="width: 800px;border-color: #387372;border-width: 1px;border-style: solid;">
                                        <h5 class="mb-3 rounded p-3 text-white" style="background-color: #387372;">
                                            Ajukan Jadwal Kegiatan Warga</h5>
                                        <div class="d-flex justify-content-between flex-wrap w-100 px-3">
                                            <label for="nama" class="form-label"
                                                style="color: #387372;">Pelaksana
                                                :</label>
                                            <input id="nama" class="form-control h-100" name="pelaksana">
                                            <br>
                                            <label for="nama" class="form-label" style="color: #387372;">Lokasi
                                                :</label>
                                            <input id="nama" class="form-control h-100" name="Lokasi">
                                            <br>
                                            <label for="nama" class="form-label" style="color: #387372;">Waktu
                                                :</label>
                                            <input id="nama" class="form-control h-100" name="Waktu">
                                            <br>
                                            <label for="nama" class="form-label"
                                                style="color: #387372;">Pembahasan
                                                :</label>
                                            <input id="nama" class="form-control h-100" name="Pembahasan">
                                            <br>
                                            <div class="text-right w-100 my-3">
                                                <a href="TabelPengajuanJadwal.html"
                                                    class="btn rounded-pill text-white"
                                                    style="background-color: #387372;">Ajukan</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

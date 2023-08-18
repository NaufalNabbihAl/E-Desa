@extends('layout.wg')
@section('content')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-light elevation-4" style="background-color: #387372;">
        <!-- Brand Logo -->
        <a href="/" class="brand-link text-white">
            <span class="brand-text font-weight-light">E-Desa</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block text-white">Warga</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('jadwal_kegiatan.index') }}" class="nav-link ">
                                    <p style="color: white;">Jadwal Kegiatan Warga</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('wajib_lapor.index') }}" class="nav-link active">
                                    <p style="color: white;">Wajib Lapor</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('umkm.index') }}" class="nav-link">
                            <p style="color: white;">UMKM</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('peminjaman_barang.index') }}" class="nav-link">
                            <p style="color: white;">Peminjaman Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('bank_sampah.index') }}" class="nav-link">
                            <p style="color: white;">Bank Sampah</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('laporan_keuangan.index') }}" class="nav-link">
                            <p style="color: white;">Laporan Keuangan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p style="color: white;">Forum</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pengumuman.index') }}" class="nav-link">
                            <p style="color: white;">Pengumuman</p>
                        </a>
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
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                    <div class="col-sm-4">
                        <div class="card" style="border: 1px solid #387372; border-radius: 10px;">
                            <div class="card-header d-flex justify-content-center align-items-center"
                                style="background-color: #387372; color: white;">
                                LAPOR TAMU
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center p-5"
                                style="background-color: #d9d9d9; border-radius: 10px;">
                                <a href="{{ route('wajib_lapor.laporTamu') }}"><img src="{{ url('dist/img/pm.png') }}"
                                        alt="LaporTamu" height="100" width="100"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="border: 1px solid #387372; border-radius: 10px;">
                            <div class="card-header d-flex justify-content-center align-items-center"
                                style="background-color: #387372; color: white;">
                                LAPORKAN
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center p-5"
                                style="background-color: #d9d9d9; border-radius: 10px;">
                                <a href="{{ route('wajib_lapor.laporkan') }}"><img src="{{ url('dist/img/danger.png') }}"
                                        alt="LaporTamu" height="100" width="100"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    @endsection

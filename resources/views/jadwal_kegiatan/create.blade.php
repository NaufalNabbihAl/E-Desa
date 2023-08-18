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
                                <a href="{{ route('jadwal_kegiatan.index') }}" class="nav-link active">
                                    <p style="color: white;">Jadwal Kegiatan Warga</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('wajib_lapor.index') }}" class="nav-link">
                            <p style="color: white;">Wajib Lapor</p>
                        </a>
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
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jadwal Kegiatan Warga</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3">
                        <div class="card" style="border: 1px solid #387372;">
                            <div class="card-header" style="background-color: #387372; color: white;">
                                Ajukan Jadwal Kegiatan Warga
                            </div>
                            <div class="card-body">
                                <form action="{{ route('jadwal_kegiatan.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="pelaksana" class="form-label">Pelaksana</label>
                                        <input type="text" class="form-control" id="pelaksana" name="pelaksana">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label for="tanggal" class="form-label">Tanggal dan Waktu Mulai</label>
                                                <input type="datetime-local" class="form-control" id="tanggal"
                                                    name="waktu">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mb-3">
                                                <label for="tanggal" class="form-label">Tanggal dan Waktu Selesai</label>
                                                <input type="datetime-local" class="form-control" id="tanggal"
                                                    name="waktuSelesai">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pembahasan" class="form-label">Pembahasan</label>
                                        <input type="text" class="form-control" id="pembahasan" name="pembahasan">
                                    </div>
                                    <button type="submit" class="btn ml-auto text-white"
                                        style="background-color: #387372;">Ajukan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

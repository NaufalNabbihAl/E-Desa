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
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Status Jadwal Pengajuan Warga</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
                        <table class="table m-0">

                            <thead>
                                <tr>
                                    <th scope="col">Pelaksana</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Pembahasan</th>
                                    <th scope="col" style="border-left: 1px solid #387372;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                @foreach ($jadwal as $jwl)
                                    <tr>
                                        <td>{{ $jwl->pelaksana }}</td>
                                        <td>{{ $jwl->lokasi }}</td>
                                        <td>{{ $jwl->waktu }} Sampai{{ $jwl->waktuSelesai }}</td>
                                        <td>{{ $jwl->pembahasan }}</td>
                                        <td style="border-left: 1px solid #387372;">
                                            @if ($jwl->status == 'Diproses')
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #54BAB9;">{{ $jwl->status }}</span>
                                            @elseif($jwl->status == 'Ditolak')
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #C63737;">{{ $jwl->status }}</span>
                                            @else
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #4486D3;">{{ $jwl->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.row -->


                <div class="row">
                    <a class="btn text-white mt-3 ml-auto" href="{{ route('jadwal_kegiatan.create') }}" role="button"
                        style="background-color: #387372; border-radius: 10px;">Ajukan Jadwal</a>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jadwal Kegiatan Warga</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th scope="col">Pelaksana</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Pembahasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($jadwal as $jwl)
                                        <td>{{ $jwl->pelaksana }}</td>
                                        <td>{{ $jwl->lokasi }}</td>
                                        <td>{{ $jwl->waktu }}-{{ $jwl->waktuSelesai }}</td>
                                        <td>{{ $jwl->pembahasan }}</td>
                                    @endforeach
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

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
                    <li class="nav-item">
                        <a href="{{ route('wajib_lapor.index') }}" class="nav-link">
                            <p style="color: white;">Wajib Lapor</p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('umkm.index') }}" class="nav-link active">
                                    <p style="color: white;">UMKM</p>
                                </a>
                            </li>
                        </ul>
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
                        <h1 class="m-0">UMKM</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3">
                        <div class="card" style="border: 1px solid #387372;">
                            <div class="card-header" style="background-color: #387372; color: white;">
                                Tabel UMKM
                            </div>
                            <div class="card-body">
                                <div class="container" style="border:1px solid #387372;">
                                    <table class="table m-0">

                                        <thead>
                                            <tr>
                                                <th scope="col">Nama UMKM</th>
                                                <th scope="col">Tanggal Pengajuan</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($umkm as $umkm)
                                                <tr>
                                                    <td>{{ $umkm->nama }}</td>
                                                    <td>{{ $umkm->tanggal }}</td>
                                                    <td>
                                                        @if ($umkm->status == 'Diproses')
                                                            <span class="rounded-pill p-2"
                                                                style="background-color: #54BAB9; color: white">{{ $umkm->status }}</span>
                                                        @elseif($umkm->status == 'Ditolak')
                                                            <span class="rounded-pill p-2"
                                                                style="background-color: #C63737; color: white">{{ $umkm->status }}</span>
                                                        @else
                                                            <span class="rounded-pill p-2"
                                                                style="background-color: #4486D3; color: white">{{ $umkm->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ route('umkm.edit', $umkm->id) }}"><i
                                                                class="fas fa-pen mr-2"></i> </a>| <i>
                                                            <form action="{{ route('umkm.destroy') }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="id"
                                                                    value="{{ $umkm->id }}">
                                                                <button onclick="return confirm('Apakah Kamu yakin')"
                                                                    type="submit" class="fas fa-trash mr-2">
                                                                </button>
                                                            </form>
                                                        </i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <a class="btn text-white mt-3 ml-auto" href="{{ route('umkm.create') }}" role="button"
                                        style="background-color: #387372; border-radius: 10px;">Ajukan
                                        UMKM</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

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
                        <h1 class="m-0">Peminjaman Barang</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3">
                        <div class="card" style="border: 1px solid #387372;">
                            <div class="card-header" style="background-color: #387372; color: white;">
                                Ajukan Pengajuan Barang
                            </div>
                            <div class="card-body">
                                <form action="{{ route('peminjaman_barang.store') }}" method="POST">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mb-3">
                                                <label for="tanggal" class="form-label">Nama Barang</label>
                                                <select class="form-select" name="id_barang"
                                                    aria-label="Default select example">
                                                    <option selected disabled>Open this select menu</option>
                                                    @foreach ($barangs as $b)
                                                        <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mb-3">
                                                <label for="tanggal" class="form-label">Jumlah</label>
                                                <input id="nama" type="number" class="form-control"
                                                    name="jumlah_pinjam" required>
                                                @if ($errors->any())
                                                @endif
                                                <div id="validationServer03Feedback" class="text-danger">
                                                    {{ $errors->first('jumlah_pinjam') }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Keperluan Acara</label>
                                <input type="text" class="form-control" id="tanggal" name="keperluan">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Peminjaman</label>

                                <div class="col-5">
                                    <input type="date" class="form-control" name="tanggal_pinjam" required>
                                </div>
                                <div class="col-1 text-center">
                                    -
                                </div>
                                <div class="col-5">
                                    <input type="date" class="form-control" name="tanggal_kembali" required>
                                </div>
                            </div>
                            <button type="submit" class="btn ml-auto text-white"
                                style="background-color: #387372;">Ajukan</button>
                        </div>

                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
@endsection

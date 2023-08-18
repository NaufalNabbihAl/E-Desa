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
                    <li class="nav-item">
                        <a href="{{ route('umkm.index') }}" class="nav-link">
                            <p style="color: white;">UMKM</p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('peminjaman_barang.index') }}" class="nav-link active">
                                    <p style="color: white;">Peminjaman Barang</p>
                                </a>
                            </li>
                        </ul>
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
                        <h1 class="m-0">Peminjaman Barang</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
                        <table class="table m-0">

                            <thead>
                                <tr>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Lokasi Disimpan</th>
                                    <th scope="col" style="border-left: 1px solid #387372;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                @foreach ($datab as $db)
                                    <tr>
                                        <td>{{ $db->nama }}</td>
                                        <td>{{ $db->jumlah }}</td>
                                        <td>{{ $db->lokasi }} </td>
                                        <td style="border-left: 1px solid #387372;">
                                            @if ($db->status == 'Diproses')
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #54BAB9;">{{ $db->status }}</span>
                                            @elseif($db->status == 'Ditolak')
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #C63737;">{{ $db->status }}</span>
                                            @else
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #4486D3;">{{ $db->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.row -->


                <div class="row">
                    <a class="btn text-white mt-3 ml-auto" href="{{ route('peminjaman_barang.create') }}" role="button"
                        style="background-color: #387372; border-radius: 10px;">Ajukan Pinjaman</a>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Status</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th scope="col">Peminjam</th>
                                    <th scope="col">Acara</th>
                                    <th scope="col">Waktu Pengajuan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datap as $dp)
                                    <tr>
                                        <td>{{ App\Models\DataBarang::where('id', $dp->id_barang)->first()->nama }}</td>
                                        <td>{{ $dp->acara }}</td>
                                        <td>{{ $dp->waktu }}-{{ $dp->waktuSelesai }}</td>
                                        <td style="border-left: 1px solid #387372;">
                                            @if ($dp->status == 'Diproses')
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #54BAB9;">{{ $dp->status }}</span>
                                            @elseif($dp->status == 'Ditolak')
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #C63737;">{{ $dp->status }}</span>
                                            @else
                                                <span class="rounded-pill p-2"
                                                    style="background-color: #4486D3;">{{ $dp->status }}</span>
                                            @endif
                                        </td>
                                        <td><a href=""><i class="fas fa-pen mr-2"></i>
                                            </a>| <i>
                                                <form action="" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $dp->id }}">
                                                    <button onclick="return confirm('Apakah Kamu yakin')" type="submit"
                                                        class="fas fa-trash mr-2">
                                                    </button>
                                                </form>
                                            </i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

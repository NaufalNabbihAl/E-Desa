@extends('layout.warga')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporan Keuangan</h1>
                    </div><!-- /.col -->
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Dokumen</th>
                                    <th scope="col">Jenis Kegiatan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Unduh</th>
                                </tr>
                            </thead>
                            @csrf
                            @foreach ($lapor as $lp)
                                <tbody>
                                    <tr>
                                        <td>{{ $lp->nama }}</td>
                                        <td>{{ $lp->nama_kegiatan }}</td>
                                        <td>{{ $lp->tanggal }}</td>
                                        <td><a href="{{ url('upload/laporanKeuangan/', $lp->file) }}"><i
                                                    class="fas fa-download mr-2"></i> </a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

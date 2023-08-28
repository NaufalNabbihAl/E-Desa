@extends('layout.warga')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="container mt-3">
                        <div class="card" style="background-color: #d9d9d9;" border-radius: 10px;">
                            @csrf
                            @foreach ($pengumuman as $pgm)
                                <div class="card-body">
                                    <h4 class="mb-3">{{ $pgm->judul }}</h4>
                                    <p class="mb-3">{{ $pgm->isi }}</p>
                                    <p style="font-size: 12px;">{{ $pgm->tanggal }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

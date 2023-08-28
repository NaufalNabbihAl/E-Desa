@extends('layout.warga')
@section('content')
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
    </div>
@endsection

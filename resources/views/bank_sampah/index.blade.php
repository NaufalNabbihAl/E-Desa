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
                                BANK SAMPAH
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center p-5"
                                style="background-color: #d9d9d9; border-radius: 10px;">
                                <a href="{{ route('bank_sampah.data') }}"><img src="{{ url('dist/img/recycle.png') }}"
                                        alt="LaporTamu" height="100" width="100"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="border: 1px solid #387372; border-radius: 10px;">
                            <div class="card-header d-flex justify-content-center align-items-center"
                                style="background-color: #387372; color: white;">
                                JADWAL PENGAMBILAN
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center p-5"
                                style="background-color: #d9d9d9; border-radius: 10px;">
                                <a href="{{ route('bank_sampah.jadwal') }}"><img src="{{ url('dist/img/calendar.png') }}"
                                        alt="LaporTamu" height="100" width="100"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    @endsection

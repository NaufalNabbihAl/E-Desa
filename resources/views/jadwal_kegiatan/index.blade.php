@extends('layout.warga')
{{-- @extends('layout.wg') --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                {{-- <div class="row mb-2">
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
                </div> --}}
                @if (Auth::user()->role == 'warga')
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
                @else
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
                @endif
            </div><!-- /.container-fluid -->
        </div>
    @endsection

@extends('layout.warga')
@section('content')
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

@extends('layout.warga')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">History Lapor Tamu</h1>
                    </div><!-- /.col -->
                    <div class="row mb-2">
                            <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Pelapor</th>
                                            <th scope="col">Terlapor</th>
                                            <th scope="col">Alasan</th>
                                            <th scope="col">Rt/Rw</th>
                                            <th scope="col">Tanggal Menginap</th>
                                            <th scope="col">Tanggal Pulang</th>
                                            <th scope="col">Bukti</th>
                                            <th scope="col" class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @csrf
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ App\Models\Warga::where('NIK', $d->NIK)->get()->first()->nama }}</td>
                                                <td>{{ $d->nama }}</td>
                                                <td>{{ $d->deskripsi }}</td>
                                                <td>
                                                    {{ App\Models\Warga::where('NIK', $d->NIK)->get()->first()->rt }}/{{ App\Models\Warga::where('NIK', $d->NIK)->get()->first()->rw }}
                                                </td>
                                                <td>{{ date_format(date_create($d->tanggal), 'l d/m/Y') }}</td>
                                                <td>{{ date_format(date_create($d->pulang), 'l d/m/Y') }}</td>
                                                <td>
                                                    <a href="{{ url('/upload/wajibLapor/ktp/', $d->ktp) }}">
                                                        Open
                                                    </a>
                                                </td>
                                                <td class="text-white text-center">
                                                    @if ($d->status == 'Diproses')
                                                        <span class="rounded-pill p-2"
                                                            style="background-color: #54BAB9;">{{ $d->status }}</span>
                                                    @elseif($d->status == 'Ditolak')
                                                        <span class="rounded-pill p-2"
                                                            style="background-color: #C63737;">{{ $d->status }}</span>
                                                    @else
                                                        <span class="rounded-pill p-2"
                                                            style="background-color: #4486D3;">Diproses</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @if (Auth::user()->role == 'warga')
                        <div class="container mt-3">
                            <div class="card" style="border: 1px solid #387372;">
                                <div class="card-header" style="background-color: #387372; color: white;">
                                    Laporkan Tamu
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('wajib_lapor.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3" id="div-bukti">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <label for="bukti" class="form-label">Bukti</label>
                                                </div>
                                                <div class="col text-right">
                                                    <button class="btn btn-success" onclick="tambahInput()"
                                                        type="button">Tambah</button>
                                                </div>
                                            </div>
                                            <input type="file" class="form-control" id="bukti" name="bukti[]">
                                        </div>
                                        <div class="mb-3" id="div-tamu">
                                            <label for="tamu" class="form-label">Tamu</label>
                                            <input type="text" class="form-control" id="tamu" name="terlapor[]">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lokasi" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" id="lokasi" name="lokasi">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alasan" class="form-label">Alasan</label>
                                            <input type="text" class="form-control" id="alasan" name="deskripsi">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="mb-3">
                                                    <label for="tanggal" class="form-label">Tanggal Datang</label>
                                                    <input type="date" class="form-control" id="tanggal"
                                                        name="tanggal">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3">
                                                    <label for="tanggal" class="form-label">Tanggal Pulang</label>
                                                    <input type="date" class="form-control" id="tanggal"
                                                        name="pulang">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn ml-auto text-white"
                                            style="background-color: #387372;">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <script>
            function tambahInput() {
                $('#div-bukti').append('<input type="file" class="form-control mt-2" id="bukti" name="bukti[]">');
                $('#div-tamu').append('<input type="text" class="form-control mt-2" id="tamu" name="terlapor[]">')
            }
        </script>
    @endsection

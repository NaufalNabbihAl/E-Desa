@extends('layout.warga')
@section('content')
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card" style="border: 1px solid #387372;">
                    <div class="card-header" style="background-color: #387372; color: white;">
                        Bank Sampah
                    </div>
                    <div class="card-body">
                        @if (Auth::user()->role == 'warga')
                            <div class="container" style="border:1px solid #387372;">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-2">Tanggal</th>
                                            <th scope="col" class="col-2">Kategori</th>
                                            <th scope="col" class="col-2">Berat</th>
                                            <th scope="col" class="col-2">Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @csrf
                                        @foreach ($bank as $b)
                                            <tr>
                                                <td>{{ $b->tanggal }}</td>
                                                <td>{{ $b->kategori }}</td>
                                                <td>{{ $b->berat }} kg</td>
                                                <td>RP {{ $b->pendapatan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="card-body">
                                <form action="{{ route('bank_sampah.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik">
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="berat" class="form-label">Berat</label>
                                            <input type="text" class="form-control" id="berat" name="berat">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <select class="form-select  text-center" aria-label="Default select example">
                                                <option selected disabled>Pilih Kategori</option>
                                                <option value="plastik">Plastik</option>
                                                <option value="kertas">Kertas</option>
                                                <option value="besi">Besi</option>
                                            </select>
                                        </div>
                                        <div class=" col ">
                                            <label for="pendapatan" class="form-label">Pendapatan</label>
                                            <input type="text" class="form-control" id="pendapatan" name="pendapatan">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn ml-auto text-white"
                                        style="background-color: #387372;">Simpan</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

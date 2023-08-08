@extends('layout.warga')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">UMKM</h2>
        <div class="d-flex justify-content-around my-4">
            <div class="w-100 rounded bg-white p-4 w-100 d-flex justify-content-around">

                <div class="my-3 rounded w-100"
                    style="width: 800px;border-color: #387372;border-width: 1px;border-style: solid;">
                    <h5 class="mb-3 rounded p-3 text-white" style="background-color: #387372;">Tabel UMKM</h5>
                    <div class="d-flex justify-content-between flex-wrap w-100 px-3">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Nama UMKM</th>
                                    <th scope="col"
                                        style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Tanggal
                                        Pengajuan</th>
                                    <th scope="col"
                                        style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Status
                                    </th>
                                    <th scope="col"
                                        style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Aksi</th>
                                    </th>
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
                                        <td class="d-flex justify-content-around flex-wrap" style="border: none;">
                                            <a href="{{ route('umkm.edit', $umkm->id) }}">

                                                <button type="button" class="btn d-flex flex-column">
                                                    <img src="{{ url('assets/img/edit.png') }}" alt=""
                                                        class="text-center w-100" style="width: 50px; height: 40px;">
                                                    <span class="text-center w-100">Edit</span>
                                                </button>
                                            </a>
                                            <form action="{{ route('umkm.destroy') }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $umkm->id }}">
                                                <button onclick="return confirm('Apakah Kamu yakin')" type="submit"
                                                    class="btn d-flex flex-column">
                                                    <img src="{{ url('assets/img/delete.png') }}" class="text-center w-100">
                                                    <span class="text-center w-100">Delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class=" text-right w-100 my-3">
                            <a href="{{ route('umkm.create') }}">
                                <button type="button" class="btn rounded-pill text-white"
                                    style="background-color: #387372;">Ajukan UMKM</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

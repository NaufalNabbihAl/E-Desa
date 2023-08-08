@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2>Jadwal Kegiatan Warga</h2>
        <div class="container">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px;">Pelaksana
                        </th>
                        <th scope="col " style="color: #235252;border: #54BAB9 solid 1px;">Lokasi
                        </th>
                        <th scope="col " style="color: #235252;border: #54BAB9 solid 1px;">Waktu
                        </th>
                        <th scope="col " style="color: #235252;border: #54BAB9 solid 1px;">
                            Pembahasan
                        </th>
                        <th scope="col " style="color: #235252;border: #54BAB9 solid 1px;">Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @csrf
                    @foreach ($jadwal as $jwl)
                        <tr>
                            <th scope="row " style="color: #235252; "> {{ $jwl->pelaksana }}</th>
                            <td style="color: #235252; ">{{ $jwl->lokasi }}</td>
                            <td style="color: #235252; ">{{ $jwl->waktu }}-{{ $jwl->waktuSelesai }}
                            </td>
                            <td style="color: #235252; ">{{ $jwl->pembahasan }}</td>
                            <td class="text-white text-center">
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
    </div>
@endsection

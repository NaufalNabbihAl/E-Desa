@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">Peminjaman Barang</h2>
        <div class="d-flex justify-content-between flex-wrap w-100 px-3">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Nama
                            Barang</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                            Jumlah
                            Barang</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                            Lokasi
                            Disimpan</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                            Status
                            Barang</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datab as $db)
                        <tr>
                            <th scope="row " style="color: #235252; "> {{ $db->nama }}</th>
                            <td style="color: #235252; "> {{ $db->jumlah }}</td>
                            <td style="color: #235252; "> {{ $db->lokasi }} </td>
                            <td style="color: #235252; "> {{ $db->status }}</td>
                            </td>
                        </tr>
                    @endforeach
            </table>
            <div class="text-right w-100 my-3">
                <a href="{{ route('peminjaman_barang.create') }}" class="btn rounded-pill text-white"
                    style="background-color: #387372;">Ajukan
                    Peminjaman</a>
            </div>
            <h2 style="color: #387372;">Status</h2>
            <div class="d-flex justify-content-between flex-wrap w-100 px-0">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                                Nama Barang</th>
                            <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                                Jumlah Barang</th>
                            <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                                Waktu</th>
                            <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                                Status</th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datap as $dp)
                            <tr>
                                <th scope="row " style="color: #235252; ">
                                    {{ App\Models\DataBarang::where('id', $dp->id_barang)->first()->nama }}</th>
                                <td style="color: #235252; "> {{ $dp->jumlah }}</td>
                                <td style="color: #235252; "> {{ $dp->tgl_pinjam }} - {{ $dp->tgl_kembali }}</td>
                                <td style="color: #235252; "> {{ $dp->status }}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

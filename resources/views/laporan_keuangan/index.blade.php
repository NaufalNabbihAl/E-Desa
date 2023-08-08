@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <h2 style="color: #387372;">Laporan Keuangan</h2>
        <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis minima sint,
            quaerat obcaecati recusandae deserunt maiores atque natus aperiam et in quas aliquid est
            accusantium porro ipsa enim? Veniam, enim!</p>
        <div class="d-flex justify-content-between flex-wrap w-100 px-3">
            <table class="table table-bordered border-primary" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Nama
                            Dokumen</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Jenis
                            Dokumen</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">
                            Tanggal</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Unduh
                        </th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @csrf
                    @foreach ($lapor as $lp)
                        <tr>
                            <th scope="row " style="color: #235252; "> {{ $lp->nama }}</th>
                            <td style="color: #235252; "> {{ $lp->jenis_dokumen }}</td>
                            <td style="color: #235252; "> {{ $lp->tanggal }}</td>
                            <td style="color: #235252; "> <a href="{{ url('upload/laporanKeuangan/', $lp->file) }}"
                                    download> Download </a></td>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

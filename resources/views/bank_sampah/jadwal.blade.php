@extends('layout.warga')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- diisi konten -->
        <div class="d-flex justify-content-start mx-3">
            <a href="{{ route('bank_sampah.index') }}" class="ml-5 h3" style="color: #387372; font-size: 20px;">Bank Sampah</a>
            <a href="{{ route('bank_sampah.jadwal') }}" class="ml-5 h3" style="color: #387372; font-size: 20px;">Jadwal
                Pengambilan Sampah</a>
        </div>
        <div class="d-flex justify-content-between flex-wrap w-100 px-3">
            <table class="table table-bordered table-hover border-primary mt-2">
                <thead>
                    <tr>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">RT</th>
                        <th scope="col" style="color: #235252;border: #54BAB9 solid 1px; text-align: center;">Tanggal
                            Penjemputan
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row " class="text-center" style="color: #235252; "> 07</th>
                        <td style="color: #235252; text-align: center; "> 17 Mei 2023</td>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection

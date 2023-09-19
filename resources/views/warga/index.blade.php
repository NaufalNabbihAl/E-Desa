@extends('layout.warga')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Warga</h1>

            <a class="btn text-white mt-3 ml-auto" href="{{ route('warga.create') }}" role="button"
              style="background-color: #387372; border-radius: 10px;">Tambahkan
              Warga</a>

          </div><!-- /.col -->
          <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
            <table class="table m-0">
              <thead>
                <tr>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @csrf
                @foreach ($warga as $w)
                  <tr>
                    <td>{{ $w->NIK }}</td>
                    <td> {{ $w->nama }} </td>
                    <td> {{ $w->tempat_tgl }} </td>
                    <td> {{ $w->jk }} </td>
                    <td>
                      <a class="btn btn-primary" href="{{ route('warga.detail', $w->id) }}" role="button">Detail</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
@endsection

@extends('layout.warga')
{{-- @extends('layout.wg') --}}
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jadwal Kegiatan Warga</h1>
            @if (Auth::user()->role != 'warga')
              <a class="btn text-white mt-3 ml-auto" href="{{ route('jadwal_kegiatan.create') }}" role="button"
                style="background-color: #387372; border-radius: 10px;">Tambahkan
                Jadwal</a>
            @endif
          </div><!-- /.col -->
          <div class="container mt-3" style="border:1px solid #387372; border-radius: 10px;">
            <table class="table m-0">
              <thead>
                <tr>
                  <th scope="col">Pelaksana</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Pembahasan</th>
                  <th scope="col">Tingkat</th>
                </tr>
              </thead>
              <tbody>
                @csrf
                @foreach ($jadwal as $jwl)
                  <tr>
                    <td>{{ $jwl->pelaksana }}</td>
                    <td>{{ $jwl->lokasi }}</td>
                    <td>{{ date_format(date_create($jwl->waktu), 'l d/m/Y H:i') }} -
                      {{ date_format(date_create($jwl->waktuSelesai), 'l d/m/Y H:i') }}</td>
                    <td>{{ $jwl->pembahasan }}</td>
                    <td class="text-capitalize">
                      @php
                        if ($jwl->tingkat == 'desa') {
                            $tingkat = $jwl->tingkat;
                            echo $tingkat;
                        } else {
                            $tingkat = explode('/', $jwl->tingkat);
                            echo 'Rt: ' . $tingkat[0] . ' Rw: ' . $tingkat[1];
                        }
                      @endphp
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

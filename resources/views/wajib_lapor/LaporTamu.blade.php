@extends('layout.warga')
@section('content')
  @if (Auth::user()->role == 'warga')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <ul class="list-group list-group-horizontal">
            <button class="list-group-item list-group-item-action text-center text-light" id="laporkanButton"
              style="background: #387372" onclick="showLaporkan()">Laporkan
              Tamu</button>
            <button class="list-group-item list-group-item-action text-center" id="historyButton"
              onclick="showHistory()">History Lapor
              Tamu</button>
          </ul>

          {{-- history table --}}
          <div class="container mt-3" style="display: none" id="history">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-body">
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
                          <a href="{{ url('/upload/wajibLapor/ktp/', $d->ktp) }}" target="_blank">
                            Open
                          </a>
                        </td>
                        <td class="text-white text-center">
                          @if ($d->status == 'Diproses')
                            <span class="rounded-pill p-2" style="background-color: #4486D3;">{{ $d->status }}</span>
                          @elseif($d->status == 'Ditolak')
                            <span class="rounded-pill p-2" style="background-color: #C63737;">{{ $d->status }}</span>
                          @else
                            <span class="rounded-pill p-2" style="background-color: #54BAB9;">Diterima</span>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          {{-- form tambah --}}
          <div class="container mt-3" id="laporkan">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-body">
                <form action="{{ route('wajib_lapor.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3" id="div-bukti">
                    <div class="row mb-2">
                      <div class="col">
                        <label for="bukti" class="form-label">Bukti</label>
                      </div>
                      @if ($errors->has('bukti'))
                        <div class="text-red">
                          {{ $errors->first('bukti') }}
                        </div>
                      @endif
                      <div class="col text-right">
                        <button class="btn btn-success" onclick="tambahInput()" type="button">Tambah</button>
                      </div>
                    </div>
                    <input type="file" class="form-control" id="bukti" name="bukti[]">
                  </div>
                  <div class="mb-3" id="div-tamu">
                    @if ($errors->has('terlapor'))
                      <div class="text-red">
                        {{ $errors->first('terlapor') }}
                      </div>
                    @endif
                    <label for="tamu" class="form-label">Tamu</label>
                    <input type="text" class="form-control" id="tamu" name="terlapor[]">
                  </div>
                  <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                    @if ($errors->has('lokasi'))
                      <div class="text-red">
                        {{ $errors->first('lokasi') }}
                      </div>
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="alasan" class="form-label">Alasan</label>
                    <input type="text" class="form-control" id="alasan" name="deskripsi">
                    @if ($errors->has('deskripsi'))
                      <div class="text-red">
                        {{ $errors->first('deskripsi') }}
                      </div>
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Datang</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                        @if ($errors->has('tanggal'))
                          <div class="text-red">
                            {{ $errors->first('tanggal') }}
                          </div>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Pulang</label>
                        <input type="date" class="form-control" id="tanggal" name="pulang">
                        @if ($errors->has('pulang'))
                          <div class="text-red">
                            {{ $errors->first('pulang') }}
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn ml-auto text-white"
                    style="background-color: #387372;">Kirim</button>
                </form>
              </div>
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
    </div>

    <script>
      function tambahInput() {
        $('#div-bukti').append('<input type="file" class="form-control mt-2" id="bukti" name="bukti[]">');
        $('#div-tamu').append('<input type="text" class="form-control mt-2" id="tamu" name="terlapor[]">')
      }

      function showLaporkan() {
        $('#laporkan').show();
        $('#history').hide();

        $('#laporkanButton').addClass('text-light');
        $('#laporkanButton').css('background-color', '#387372');
        $('#historyButton').removeClass('text-light');
        $('#historyButton').css('background-color', 'white');
      }

      function showHistory() {
        $('#laporkan').hide();
        $('#history').show();

        $('#historyButton').addClass('text-light');
        $('#historyButton').css('background-color', '#387372');
        $('#laporkanButton').removeClass('text-light');
        $('#laporkanButton').css('background-color', 'white');
      }
    </script>
  @else
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

          {{-- history table --}}
          <div class="container mt-3" id="history">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-body">
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
                      <th class="text-center">Aksi</th>
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
                          <a href="{{ url('/upload/wajibLapor/ktp/', $d->ktp) }}" target="_blank">
                            Open
                          </a>
                        </td>
                        <td class="text-white text-center">
                          @if ($d->status == 'Diproses')
                            <span class="rounded-pill p-2" style="background-color: #4486D3;">Menunggu Dirposes</span>
                          @elseif($d->status == 'Ditolak')
                            <span class="rounded-pill p-2"
                              style="background-color: #C63737;">{{ $d->status }}</span>
                          @else
                            <span class="rounded-pill p-2" style="background-color: #54BAB9;">Diterima</span>
                          @endif
                        </td>
                        <td colspan="9">
                          <div class="row">
                            <div class="col">
                              <form action="{{ route('wajib_lapor.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $d->id }}">
                                <input type="hidden" name="status" value="Diterima">
                                <button type="submit" class="btn btn-success btn-sm">Terima</button>
                              </form>
                            </div>
                            <div class="col">
                              <form action="{{ route('wajib_lapor.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $d->id }}">
                                <input type="hidden" name="status" value="Ditolak">
                                <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                              </form>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
    </div>
  @endif

@endsection

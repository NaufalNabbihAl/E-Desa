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
              style="background: #387372" onclick="showLaporkan()">Laporkan Kejadian</button>
            <button class="list-group-item list-group-item-action text-center" id="historyButton"
              onclick="showHistory()">History Laporan</button>
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
                <form action="{{ route('wajib_lapor.storeLaporan') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3" id="div-bukti">
                    <div class="row mb-2">
                      <div class="col">
                        <label for="bukti" class="form-label">Bukti</label>
                      </div>
                      <div class="col text-right">
                        <button class="btn btn-success" onclick="tambahInput()" type="button">Tambah</button>
                      </div>
                    </div>
                    <input type="file" class="form-control" id="bukti" name="bukti[]">
                  </div>
                  <div class="mb-3" id="div-tamu">
                    <label for="tamu" class="form-label">Terlapor</label>
                    <input type="text" class="form-control" id="tamu" name="terlapor[]">
                  </div>
                  <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                  </div>
                  <div class="mb-3">
                    <label for="aldeskrispasan" class="form-label">Deskripsi Kejadian</label>
                    <textarea name="deskripsi" id="deskrisp" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Kejadian</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                  </div>
                  <button type="submit" class="btn ml-auto text-white"
                    style="background-color: #387372;">Laporkan</button>
                </form>
              </div>
            </div>
          </div>

        </div><!-- /.container-fluid -->
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
  @endif
  {{-- <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Laporkan Warga</h1>
                    </div><!-- /.col -->
                    <div class="container mt-3">
                        <div class="card" style="border: 1px solid #387372;">
                            <div class="card-header" style="background-color: #387372; color: white;">
                                Laporkan Kejadian
                            </div>
                            <div class="card-body">
                                <form action="{{ route('wajib_lapor.storeLaporan') }}" method="post"
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
                                        <label for="tamu" class="form-label">Terlapor</label>
                                        <input type="text" class="form-control" id="tamu" name="terlapor[]">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="aldeskrispasan" class="form-label">Deskripsi Kejadian</label>
                                        <textarea name="deskripsi" id="deskrisp" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Kejadian</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                    </div>
                                    <button type="submit" class="btn ml-auto text-white"
                                        style="background-color: #387372;">Laporkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <script>
            function tambahInput() {
                $('#div-bukti').append('<input type="file" class="form-control mt-2" id="bukti" name="bukti[]">');
                $('#div-tamu').append('<input type="text" class="form-control mt-2" id="tamu" name="terlapor[]">')
            }
        </script> --}}
@endsection

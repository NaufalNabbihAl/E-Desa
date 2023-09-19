@extends('layout.warga')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jadwal Kegiatan Warga</h1>
          </div><!-- /.col -->
          <div class="container mt-3">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-header" style="background-color: #387372; color: white;">
                Ajukan Jadwal Kegiatan Warga
              </div>
              <div class="card-body">
                <form action="{{ route('jadwal_kegiatan.store') }}" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="pelaksana" class="form-label">Pelaksana</label>
                    <input type="text" class="form-control" id="pelaksana" name="pelaksana">
                  </div>
                  <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                  </div>
                  @if (Auth::user()->role == 'admin')
                    <div class="mb-3">
                      <label for="tingkat" class="form-label">Tingkat</label>
                      <select class="form-select" name="tingkat" id="tingkat">
                        <option value="desa">Desa</option>
                        <option value="rt/rw">Rt/Rw</option>
                      </select>
                    </div>
                  @endif
                  <div class="mb-3" style="display: none" id="rtRwInput">
                    <label id="rtRwLabel" class="form-label text-capitalize"></label>
                    <div class="row">
                      <div class="col-5">
                        <input type="text" class="form-control" id="rt" name="rt">
                      </div>
                      <div class="col-1 text-center">
                        /
                      </div>
                      <div class="col-6">
                        <input type="text" class="form-control" id="rw" name="rw">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal dan Waktu Mulai</label>
                        <input type="datetime-local" class="form-control" id="tanggal" name="waktu">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal dan Waktu Selesai</label>
                        <input type="datetime-local" class="form-control" id="tanggal" name="waktuSelesai">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="pembahasan" class="form-label">Pembahasan</label>
                    <input type="text" class="form-control" id="pembahasan" name="pembahasan">
                  </div>
                  <button type="submit" class="btn ml-auto text-white" style="background-color: #387372;">Ajukan</button>
                </form>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <script>
    $('#tingkat').change(function() {
      if ($('#tingkat').val() != 'desa') {
        $('#rtRwInput').show();
        $('#rtRwLabel').text($('#tingkat').val());
      } else {
        $('#rtRwInput').hide();
      }
    })
  </script>
@endsection

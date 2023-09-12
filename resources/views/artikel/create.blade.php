@extends('layout.warga')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambahkan Artikel</h1>
          </div><!-- /.col -->
          <div class="container mt-3">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-body">
                <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3" id="formGambar">
                    <div class="row mb-2">
                      <div class="col">
                        <label for="bukti" class="form-label">Gambar</label>
                      </div>
                      <div class="col text-right">
                        <button class="btn btn-success" onclick="tambahInput()" type="button">Tambah</button>
                      </div>
                    </div>
                    <input type="file" class="form-control" id="gambar" name="gambar[]">
                  </div>
                  <div class="mb-3">
                    <label for="pelaksana" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                  <div class="mb-3">
                    <label for="pelaksana" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="11"></textarea>
                  </div>
                  <button type="submit" class="btn ml-auto text-white"
                    style="background-color: #387372;">Publish</button>
                </form>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <script>
    function tambahInput() {
      $('#formGambar').append('<input type="file" class="form-control mt-2" id="gambar" name="gambar[]">');
    }
  </script>
@endsection

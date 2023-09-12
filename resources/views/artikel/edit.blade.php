@extends('layout.warga')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Artikel</h1>
          </div><!-- /.col -->
          <div class="container mt-3">
            <div class="card" style="border: 1px solid #387372;">
              <div class="card-body">
                <form action="{{ route('artikel.update') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id_artikel" id="id_artikel" value="{{ $artikel->id_artikel }}">
                  <div class="mb-3" id="formGambar">
                    <div class="row mb-2">
                      <div class="col">
                        <label for="bukti" class="form-label">Gambar</label>
                      </div>
                      <div class="col text-right">
                        <button class="btn btn-success" onclick="tambahInput()" type="button">Tambah</button>
                      </div>
                    </div>
                    <div class="row">
                      @foreach ($gambar as $g)
                        <div class="col-3">
                          <div class="card">
                            <img src="{{ url('/upload/artikel', $g->name) }}" class="img-thumbnail"
                              style="aspect-ratio: 1/1; object-fit:cover">
                            <div class="card-img-overlay">
                              <a href="{{ route('artikel.destroyGambar', $g->id) }}" class="btn btn-danger btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15"
                                  height="15  " viewBox="0,0,256,256">
                                  <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                      <path
                                        d="M10,2l-1,1h-6v2h1.10938l1.7832,15.25586v0.00781c0.13102,0.98666 0.98774,1.73633 1.98242,1.73633h8.24805c0.99468,0 1.8514,-0.74968 1.98242,-1.73633l0.00195,-0.00781l1.7832,-15.25586h1.10938v-2h-6l-1,-1zM6.125,5h11.75l-1.75195,15h-8.24805z">
                                      </path>
                                    </g>
                                  </g>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    <input type="file" class="form-control" id="gambar" name="gambar[]">
                  </div>
                  <div class="mb-3">
                    <label for="pelaksana" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                      value="{{ $artikel->judul }}">
                  </div>
                  <div class="mb-3">
                    <label for="pelaksana" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="11">{{ $artikel->isi }}</textarea>
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

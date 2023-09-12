@extends('layout.warga')
@section('content')

  @if (Auth::user()->role != 'warga')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2 justify-content-between">
            <div class="col">
              <h1 class="m-0">Galeri Desa</h1>
            </div><!-- /.col -->
            <div class="col text-end">
              <!-- Button trigger modal -->
              <button type="button" class="btn text-light" style="background-color: #387372; border-radius: 10px;"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambahkan Gambar
              </button>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <div class="container">
        <div class="row">
          @foreach ($galeri as $key => $g)
            <div class="col-3">
              <div class="card">
                <div class="col">
                  <img src="{{ url('/upload/galery', $g->image) }}" class="img-thumbnail"
                    style="aspect-ratio: 1/1; object-fit:cover" id="gambar{{ $key }}">
                  <a onclick="detailGambar({{ $key }})" href="#" class="stretched-link"></a>
                </div>
                <div class="card-body">
                  <a href="{{ route('galeri.destroy', $g->id_galeri) }}" class="btn btn-danger btn-md">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25 " height="25  "
                      viewBox="0,0,256,256">
                      <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
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
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Gambar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col">
              <img id="detail" style="display: none" class="img-fluid img-thumbnail">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gambar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="col">
                <img id="preview" style="display: none" class="img-fluid mb-2 img-thumbnail">
              </div>
              <input type="file" id="gambar" name="gambar" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn text-light" style="background-color: #387372; border-radius: 10px;">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      $('#gambar').change(function() {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#preview').attr('src', e.target.result);
          $('#preview').hide();
          $('#preview').fadeIn(500);
        }
        reader.readAsDataURL(this.files[0]);
      })

      function detailGambar(id) {
        $('#detailModal').modal('show');

        var gambar = $('#gambar' + id).attr('src');
        $('#detail').attr('src', gambar);
        $('#detail').show();
      }
    </script>
  @endif
@endsection

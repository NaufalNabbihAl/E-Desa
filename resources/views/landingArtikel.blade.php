@extends('layout.landing')
@section('content')
  <div class="hero overlay">

    <div class="img-bg rellax">
      <img src="{{ url('assets/images/image1.png') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-lg-6 mx-auto text-center">

          <h1 class="heading" data-aos="fade-up">Artikel</h1>
        </div>
      </div>
    </div>
  </div>



  <div class="section">
    <div class="container">


      <div class="row align-items-stretch">

        @foreach ($artikel as $key => $item)
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="media-entry">
              <a href="{{ route('detailArtikel', $item->id_artikel) }}">
                <img src="{{ url('upload/artikel', $cover[$key]) }}" alt="Image" class="img-fluid"
                  style="aspect-ratio: 1/1;object-fit: cover; width: 336px">
              </a>
              <div class="bg-white m-body">
                <span class="date">{{ date_format($item->updated_at, 'l, d F Y') }}</span>
                <h3><a href="{{ route('detailArtikel', $item->id_artikel) }}">{{ $item->judul }}</a></h3>
                <a href="{{ route('detailArtikel', $item->id_artikel) }}"
                  class="more d-flex align-items-center float-start">
                  <span class="label">Read More</span>
                  <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                </a>
              </div>
            </div>
          </div>
        @endforeach



        {{-- <nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
          <ul class="custom-pagination pagination">
            <li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item next"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav> --}}

        {{ $artikel->links() }}
      </div>
    </div>
  </div>
@endsection

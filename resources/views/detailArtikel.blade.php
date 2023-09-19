@extends('layout.landing')
@section('content')
  <div class="hero overlay">

    <div class="img-bg rellax">
      <img src="{{ url('assets/images/image1.png') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-lg-6 mx-auto text-center">

          <h1 class="heading" data-aos="fade-up">{{ $artikel->judul }}</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          @foreach ($gambar as $key => $value)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img src="{{ url('upload/artikel', $value->name) }}" class="d-block w-100"
                style="aspect-ratio: 29/9; object-fit: cover">
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <p class="mt-2 fs-5">
        @php
          echo nl2br($artikel->isi);
        @endphp
      </p>
    </div>
  </div>
@endsection

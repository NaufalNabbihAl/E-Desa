@extends('layout.landing')
@section('content')
  <div class="hero overlay">

    <div class="img-bg rellax">
      <img src="{{ url('assets/images/image1.png') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-lg-6 mx-auto text-center">

          <h1 class="heading" data-aos="fade-up">Galeri</h1>
          <p>Koleksi tangkapan layar dari warga setempat.</p>
        </div>
      </div>
    </div>
  </div>



  <!-- Gallery -->
  <div class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mx-auto text-center">
          <div class="heading-content" data-aos="fade-up">
            <h2>Galeri Warga</h2>
          </div>
        </div>
      </div>
      <!-- Gallery -->
      <div class="row">

        @foreach ($galeri as $item)
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="{{ url('upload/galery', $item->image) }}" class="w-100 shadow-1-strong rounded mb-4" />
          </div>
        @endforeach
      </div>
      <!-- Gallery -->
    </div>
  </div>
  </div>
@endsection

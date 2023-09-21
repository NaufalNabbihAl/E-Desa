@extends('layout.landing')
@section('content')
  <div class="hero overlay">

    <div class="img-bg rellax">
      <img src="{{ url('assets/images/image1.png') }}" alt="Image" class="img-fluid">
    </div>

    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-lg-5">

          <h1 class="heading" data-aos="fade-up">E - Desa</h1>
          <p class="mb-5" data-aos="fade-up">Lorem ipsum ukumuemueueeue ugemum bim osas</p>

        </div>


      </div>
    </div>


  </div>


  <div class="section section-2">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
          <div class="image-stack mb-5 mb-lg-0">
            <div class="image-stack__item image-stack__item--bottom" data-aos="fade-up">
              <img src="{{ url('assets/images/image2.png') }}" alt="Image" class="img-fluid rellax ">
            </div>
            <div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"
              data-rellax-percentage="0.5">
              <img src="{{ url('assets/images/image3.png') }}" alt="Image" class="img-fluid">
            </div>
          </div>

        </div>
        <div class="col-lg-4 order-lg-1">

          <div>
            <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Deskripsi Desa</h2>

            <p data-aos="fade-up" data-aos-delay="200">Desa adalah kesatuan masyarakat hukum dengan
              penyelenggaraan rumah tangga berdasarkan hak asal-usul dan adat istiadat yang diakui oleh
              pemerintah pusat dan berkedudukan di dalam wilayah kabupaten daerah. Secara etimologis kata
              desa berasal dari bahasa sansekerta, yaitu deca yang diartikan sebagai tanah air, kampung
              halaman, atau tanah kelahiran.</p>

            <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Jelajahi
                lebih lanjut</a></p>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class="section service-section-99">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mx-auto text-center">
          <div class="heading-content" data-aos="fade-up">
            <h2 class="heading">Berita Terkini</h2>
          </div>
        </div>
      </div>

      <div class="row">

        @foreach ($artikel as $key => $a)
          <div class="col-lg-12">
            <div class="bg-white p-4 rounded job-position">
              <div class="row">
                <div class="col-lg-5-start">
                  <img src="{{ url('upload/artikel', $cover[$key]) }}" alt="Image"
                    class="img-fluid"style="object-fit: cover;aspect-ratio: 4/1">
                </div>
                <div class="col-lg-7">
                  <h2>{{ $a->judul }}</h2>
                  <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <span class="icon-clock-o me-2"></span>
                      <span>{{ date_format($a->updated_at, 'l, d F Y') }}</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 text-lg-end">
                  <a href="#" class="d-inline-flex align-items-center fs-5 mt-2">
                    <span class="me-2">Baca Selengkapnya</span>
                    <span class="icon-link2"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </div>

  <div class="section service-section-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mb-4 mb-lg-0">
          <div class="heading-content" data-aos="fade-up">
            <h2>Fasilitas <span class="d-block">Desa</span></h2>
            <p>Lengkapnya fasilitas desa yang dapat menambah kenyamanan mu</p>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row">
            <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="service-1">
                <div>
                  <h3></h3>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="service-1">
                <span class="icon">
                  <svg width="45px" height="45px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path fill="none" stroke="#000000" stroke-width="2"
                        d="M16,7 L19,7 L19,11 L16,11 L16,7 Z M9,15 L20,15 M9,11 L13,11 M9,7 L13,7 M6,18.5 C6,19.8807119 4.88071187,21 3.5,21 C2.11928813,21 1,19.8807119 1,18.5 L1,7 L6.02493781,7 M6,18.5 L6,3 L23,3 L23,18.5 C23,19.8807119 21.8807119,21 20.5,21 L3.5,21">
                      </path>
                    </g>
                  </svg>
                </span>
                <div>
                  <h3>Artikel</h3>
                  <p>Berita dan artikel terbaru tentang desa.</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="service-1">
                <span class="icon">
                  <img src="{{ url('assets/images/people.png') }}" alt="Image" class="img-fluid">
                </span>
                <div>
                  <h3>Pengaduan masyarakat</h3>
                  <p>Memiliki keluhan atau terdapat masalah? silahkan lapor.</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
              <div class="service-1">
                <span class="icon">
                  <img src="{{ url('assets/images/image.png') }}" alt="Image" class="img-fluid">
                </span>
                <div>
                  <h3>Galeri</h3>
                  <p>Mempunyai foto bagus di desa? ingin membagikan nya ke sesama? upload foto kamu
                    agar masuk Galeri desa!</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

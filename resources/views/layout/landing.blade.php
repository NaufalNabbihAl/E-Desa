<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="{{ url('assets/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ url('css/aos.css') }}">
  <link rel="stylesheet" href="{{ url('css/flatpickr.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">


  <title>E - Desa &mdash; Ini adalah website DESA </title>
</head>

<body>

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav mt-3">
    <div class="container">

      <div class="site-navigation">
        <div class="row">
          <div class="col-6 col-lg-3">
            <a href="/" class="logo m-0 float-start">E - Desa</a>
          </div>
          <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
            <ul class="js-clone-nav  text-center site-menu p-0 m-0">
              <li class="active"><a href="/">Beranda</a></li>
              <li><a href="/artikel">Artikel</a></li>
              <li><a href="/galeri">Galeri</a></li>

            </ul>
          </div>
          <div class="col-6 col-lg-3 text-lg-end">
            @guest
              <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                <li class="cta-button"><a href="{{ route('login') }}">Masuk</a></li>
              </ul>
            @endguest
            @auth
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                  style="color: white; background-color: #f17945">
                  {{ App\Models\Warga::where('NIK', Auth::user()->NIK)->first()->nama }}
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('warga.edit') }}">Profil</a></li>
                  <li><a class="dropdown-item" href="{{ route('jadwal_kegiatan.index') }}">Dashboard
                    </a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </div>
            @endauth


            <a href="#"
              class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
              data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </nav>

  @yield('content')

  <div class="site-footer">
    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Kontak Kami</h3>
            <address>Desa Rawa tilep, Wonokromo. Surabaya </address>
            <ul class="list-unstyled links mb-4">
              <li><a href="mailto:edesa123@gmail.com">edesa123@gmail.com</a></li>
              <li><a href="tel://6285162981827">+62 (851) 6298-1827</a></li>
            </ul>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Ikuti kami</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="/">Beranda</a></li>
              <li><a href="/artikel">Artikel</a></li>
              <li><a href="/galeri">Galeri</a></li>
              <li><a href="{{ route('jadwal_kegiatan.index') }}">Dashboard</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2">
          <div class="widget">
            <h3>Informasi</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Fasilitas</a></li>
              <li><a href="#">Galeri</a></li>
              <li><a href="#">Bantuan</a></li>
              <li><a href="#">Testimonal</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-3">
          <div class="widget">
            <h3>Alamat</h3>
            <address>Desa Rawa tilep, Wonokromo. Surabaya</address>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98942.81783629968!2d112.70011608915964!3d-7.3368708919870995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb75b88b6079%3A0x5353bfe87077df51!2sRoyal%20Plaza%20Surabaya!5e0!3m2!1sen!2sid!4v1683899044046!5m2!1sen!2sid"
              width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="mb-0">Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>. All Rights Reserved. </a>
          </p>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>


    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/tiny-slider.js') }}"></script>
    <script src="{{ url('js/aos.js') }}"></script>
    <script src="{{ url('js/navbar.js') }}"></script>
    <script src="{{ url('js/counter.js') }}"></script>
    <script src="{{ url('js/rellax.js') }}"></script>
    <script src="{{ url('js/flatpickr.js') }}"></script>
    <script src="{{ url('js/glightbox.min.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
</body>

</html>

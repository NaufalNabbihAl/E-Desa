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
                        <a href="index.html" class="logo m-0 float-start">E - Desa</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                        <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                            <li class="active"><a href="/">Beranda</a></li>
                            <li><a href="/artikel">Artikel</a></li>
                            <li><a href="/umkm">UMKM</a></li>
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
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: white; background-color: #f17945">
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

                        <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#"
                                class="btn btn-primary">Jelajahi lebih lanjut</a></p>
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
                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded job-position">
                        <div class="row">
                            <div class="col-lg-5-start">
                                <img src="{{ url('assets/images/berita1.png') }}" alt="Image"
                                    class="img-fluid"style="max-width: 300px;">
                            </div>
                            <div class="col-lg-7">
                                <span class="block subtitle">Politik</span>
                                <h2>Dana Desa Bari Diduga 4 Tahun Di korupsi Hampir Rp 500 juta</h2>
                                <p>Dugaan tindak pidana korupsi Dana Desa di Desa Bari, Kecamatan Macang Pacar,
                                    Kabupaten Manggarai Barat, Nusa Tenggara Timur (NTT) mencapai Rp 482.961.508,47.</p>
                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center">
                                        <span class="icon-clock-o me-2"></span> <span>Kamis, 10 April 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <a href="#" class="d-inline-flex align-items-center"><span class="me-2">Baca
                                        Selengkapnya</span> <span class="icon-link2"></span></a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded job-position">
                        <div class="row">
                            <div class="col-lg-5-start">
                                <img src="{{ url('assets/images/berita2.png') }}" alt="Image" class="img-fluid"
                                    style="max-width: 300px;">
                            </div>
                            <div class="col-lg-7">
                                <span class="block subtitle">Umum</span>
                                <h2>Kumpul di GBK, Para Kades Minta Alokasi 10% APBN Untuk Dana Desa</h2>
                                <P>Kepala desa dari berbagai asosiasi berkumpul di Gelora Bung Karno (GBK). Mereka
                                    meminta agar 10% dari APBN dialokasikan untuk dana desa.</P>

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="icon-clock-o me-2"></span> <span>Senin, 29 April 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <a href="#" class="d-inline-flex align-items-center"><span class="me-2">Baca
                                        Selengkapnya</span> <span class="icon-link2"></span></a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bg-white p-4 rounded job-position">
                        <div class="row">
                            <div class="col-lg-5-start">
                                <img src="{{ url('assets/images/berita3.jpg') }}" alt="Image" class="img-fluid"
                                    style="max-width: 300px;">
                            </div>
                            <div class="col-lg-7">
                                <span class="block subtitle">Umum</span>
                                <h2>Kerukunan anak dan ayah</h2>
                                <P>Terlihat gambar kemesraaan antara anak dan ayahnya, dimana ayahnya mengajak tos
                                    kepada anaknya</P>

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="icon-clock-o me-2"></span> <span>Senin, 29 April 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <a href="#" class="d-inline-flex align-items-center"><span class="me-2">Baca
                                        Selengkapnya</span> <span class="icon-link2"></span></a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
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
                                    <img src="{{ url('assets/images/store.png') }}" alt="Image"
                                        class="img-fluid">
                                </span>
                                <div>
                                    <h3>UMKM</h3>
                                    <p>Pelayanan untuk masyarakat yang ingin atau sedang mendirikan UMKM.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="{{ url('assets/images/people.png') }}" alt="Image"
                                        class="img-fluid">
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
                                    <img src="{{ url('assets/images/image.png') }}" alt="Image"
                                        class="img-fluid">
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


    <div class="section section-3" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row align-items-center justify-content-between  mb-5">
                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="heading mb-3">Berbagai macam UMKM Unggulan Desa Kami</h2>
                    <p></p>
                </div>
                <div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
                    <div id="destination-controls">
                        <span class="prev me-3" data-controls="prev">
                            <span class="icon-chevron-left"></span>

                        </span>
                        <span class="next" data-controls="next">
                            <span class="icon-chevron-right"></span>

                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="destination-slider-wrap">
            <div class="destination-slider">

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ url('assets/images/umkm1.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Buah bu Puan</a></h3>
                        <span class="meta">Buah berkualitas yang menggunakan pupuk banteng</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="{{ url('assets/images/umkm2.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Sayur bu Mega</a></h3>
                        <span class="meta">Sayur berkualitas yang menggunakan pupuk banteng</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="{{ url('assets/images/umkm3.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Biji pak Ganjar</a></h3>
                        <span class="meta">Biji berkualitas yang menggunakan pupuk banteng</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="{{ url('assets/images/umkm4.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Permen pak Joko</a></h3>
                        <span class="meta">Gulali tahum 90an yang di gemari banyak anak</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="{{ url('assets/images/umkm5.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Rumah makan padang sederhana PDIP</a></h3>
                        <span class="meta">Menyediakan berbagai macam gulai dari kambing hingga banteng</span>
                    </div>
                </div>
                <div class="destination">
                    <div class="thumb">
                        <img src="{{ url('assets/images/umkm6.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Warkop </a></h3>
                        <span class="meta">Tempat nongkrong yang cozy dan wuenak</span>
                    </div>
                </div>


            </div>
        </div>

    </div>





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
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">UMKM</a></li>
                            <li><a href="#">Galeri</a></li>
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

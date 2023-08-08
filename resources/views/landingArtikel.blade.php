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

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>E - Desa &mdash; Ini adalah website DESA YA ANJING </title>
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
                            <li><a href="/">Beranda</a></li>
                            <li class="active"><a href="/artikel">Artikel</a></li>
                            <li><a href="/umkm">UMKM</a></li>
                            <li><a href="/galeri">Galeri</a></li>

                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 text-lg-end">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                            <li class="cta-button"><a href="{{ route('login') }}">Masuk</a></li>
                        </ul>

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
                <div class="col-lg-6 mx-auto text-center">

                    <h1 class="heading" data-aos="fade-up">Artikel</h1>
                    <div data-aos="fade-up">
                        <a href="{{ url('assets/video/rikroll.mp4') }}"
                            class="play-button glightbox3 w-100 text-center">
                            <div class="d-inline-flex align-items-center ">
                                <span class="icon-button me-3">
                                    <span class="icon-play"></span>
                                </span>
                                <span class="caption">Watch Video</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section">
        <div class="container">


            <div class="row align-items-stretch">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_1.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_3.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_4.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_1.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_3.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ url('assets/images/gal_4.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Jauh sekali, di balik kata gunung</a></h3>
                            <p>Vokalia dan Consonantia, di sana hidup teks-teks buta. Terpisah mereka hidup.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>



                <nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
                    <ul class="custom-pagination pagination">
                        <li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item next"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
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


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/rellax.js"></script>
        <script src="js/flatpickr.js"></script>
        <script src="js/glightbox.min.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>

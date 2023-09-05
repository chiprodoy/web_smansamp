<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMA Negeri 1 Martapura</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('theme/sailore/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/sailore/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/sailore/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/sailore/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/sailore/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/sailore/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/sailore/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('theme/sailore/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">SMAN 1 MARTAPURA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('public.post.show','sejarah')}}">Sejarah</a></li>
              <li><a href="{{ route('public.post.show','visi-dan-misi')}}">Visi Misi</a></li>
              <li><a href="{{ route('public.post.show','struktur-organisasi')}}">Struktur Organisasi</a></li>
              <li><a href="{{ route('public.post.show','profil-pendidik')}}">Profil Pendidik</a></li>
              <li><a href="{{ route('public.post.show','profil-siswa-dan-alumni')}}">Profil Siswa & Alumni</a></li>

              <li class="dropdown"><a href="#"><span>Unit</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('public.post.show','perpustakaan')}}">Perpustakaan</a></li>
                  <li><a href="{{route('public.post.show','bimbbingan-konseling')}}">Bimbingan Konseling</a></li>
                  <li><a href="{{route('public.post.show','osis-dan-mpk')}}">OSIS & MPK</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{route('public.post.category','prestasi')}}">Prestasi</a></li>
          <li><a href="portfolio.html">Elearning</a></li>
          <li><a href="pricing.html">Galeri</a></li>
          <li><a href="{{route('public.post.show','berita')}}">Berita & Pengumuman</a></li>

          <li><a href="{{route('public.post.show','kontak')}}">Kontak</a></li>
          <li><a href="{{route('public.post.category','kerja-sama')}}" class="getstarted">Kerja Sama</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('layouts.sailore.footer')

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('theme/sailore/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('theme/sailore/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('theme/sailore/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('theme/sailore/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('theme/sailore/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('theme/sailore/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('theme/sailore/assets/js/main.js"></script>

</body>

</html>

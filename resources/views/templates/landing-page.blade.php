<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AIK | @yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    {{-- <link href="{{ asset('/bootslander/assets/img/favicon.png') }}" rel="icon"> --}}
    {{-- <link href="{{ asset('/bootslander/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}
    <link href="{{ asset('/assets/img/logo-yayasan.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/logo-yayasan.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/bootslander/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootslander/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootslander/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootslander/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootslander/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/bootslander/assets/css/main.css') }}" rel="stylesheet">

    <style>
        ul {
            list-style-type: square; /* Mengubah bullet menjadi kotak */
        }
        ol {
            list-style-type: upper-alpha; /* Mengubah angka menjadi huruf kapital */
        }
    </style>

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    {{-- header --}}
    @include('components.header')

    <main class="main">

        <!-- Hero Section -->
        @include('sections.hero-2')
        <!-- /Hero Section -->

        @yield('content')

    </main>

    {{-- footer --}}
    @include('components.footer')
    {{-- /footer --}}

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    {{-- jquery --}}
    <script src="{{ asset('/vendor/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootslander/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('bootslander/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('bootslander/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('bootslander/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('bootslander/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('bootslander/assets/js/main.js') }}"></script>

    {{-- script --}}
    @yield('script')

</body>

</html>

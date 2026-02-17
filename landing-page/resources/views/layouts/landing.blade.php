<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions & Business Services EdKey">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'flex-IT | Home')</title>

    <!-- fav icon -->
    <link rel="icon" href="{{ asset('assets/images/fav-icon/fav-icon.png') }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">

    <!-- animate.css file -->
    <link rel="stylesheet" href="{{ asset('css/vendors/animate.css') }}">

    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('css/vendors/swiper-bundle.min.css') }}">

    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('css/vendors/flaticon/flaticon.css') }}">

    <!-- fontAwesome -->
    <link rel="stylesheet" href="{{ asset('css/vendors/all.min.css') }}">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css') }}">

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/vendors/jquery.fancybox.min.css') }}">

    <!-- fonts site preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap">

    <!-- main-LTR -->
    <link rel="stylesheet" href="{{ asset('css/main-LTR.css') }}">

    @stack('styles')
</head>

<body class=" dark-theme ">

    @yield('content')

    <!-- Start loading-screen Component-->
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span
            class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
    <!-- End loading-screen Component-->

    <!-- Start back-to-top Button-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i></div>
    <!-- End back-to-top Button-->

    <!-- JQuery -->
    <script src="{{ asset('js/vendors/jquery-3.6.1.min.js') }}"></script>
    <!-- appear -->
    <script src="{{ asset('js/vendors/appear.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('js/vendors/jquery.countTo.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('js/vendors/wow.min.js') }}"></script>
    <!-- swiper -->
    <script src="{{ asset('js/vendors/swiper-bundle.min.js') }}"></script>
    <!-- particles -->
    <script src="{{ asset('js/vendors/particles.min.js') }}"></script>
    <!-- Vanilla-tilt -->
    <script src="{{ asset('js/vendors/vanilla-tilt.min.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('js/vendors/isotope-min.js') }}"></script>
    <!-- fancybox -->
    <script src="{{ asset('js/vendors/jquery.fancybox.min.js') }}"></script>
    <!-- main -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
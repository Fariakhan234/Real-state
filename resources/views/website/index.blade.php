<!--
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{ asset('web/icon/favicon.png') }}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('web/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}" />

    <title>Property &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
  </head>

  <body>
    <!-- Mobile Menu -->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Navbar -->
    @include('website.partical.nav')

    <!-- Page Content -->
    @yield('main')

    <!-- Footer -->
    @include('website.partical.footer')

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('web/js/aos.js') }}"></script>
    <script src="{{ asset('web/js/navbar.js') }}"></script>
    <script src="{{ asset('web/js/counter.js') }}"></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>
  </body>
</html>

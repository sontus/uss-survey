<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Survey">
    <meta property="og:description" content="Survey">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Survey - Admin Dashboard">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="../fonts.googleapis.com/css6617.css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/stylesheets/theme.min.css')}}" data-skin="default">
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/stylesheets/theme-dark.min.css')}}" data-skin="dark">
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/stylesheets/custom.css')}}">
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
      </script><!-- END THEME STYLES -->
    @stack('vendor-css')
    @stack('page-css')
  </head>
  <body>
    <div class="app">
        @if (Route::current()->getName() == "login")

        @else
            @include('layouts.partials.header')
            @include('layouts.partials.aside')
        @endif

        <!-- BEGIN MAIN CONTENT -->
        @yield('content')
    </div>
    <!-- BEGIN BASE JS -->
    <script src="{{ asset('assets/backend/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{ asset('assets/backend/assets/vendor/particles.js/particles.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/pace-progress/pace.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/stacked-menu/js/stacked-menu.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- BEGIN THEME JS -->
    <script src="{{ asset('assets/backend/assets/javascript/theme.js')}}"></script> <!-- END THEME JS -->
    @stack('vendor-js')
    @stack('page-js')
    </body>
</html>

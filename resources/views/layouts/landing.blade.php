<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Derma10 - @yield('title')</title>
  <meta name="keywords" content="...">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!--general styles  -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!--custom styles -->
  @yield('custom-styles')

  <!-- general scripts -->
  <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  <!--[if lt IE 9]>
    <script src="{{ asset('js/ie/html5shiv.js') }}"></script>
    <script src="{{ asset('js/ie/respond.min.js') }}"></script>
    <script src="{{ asset('js/ie/excanvas.js') }}"></script>
  <![endif]-->
</head>
<body>
    @include('partials.home-header')
    <section id="content">
        @yield('content')
    </section>

    @include('partials.home-footer')

    <!-- core scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- post scripts -->
    <script src="{{ asset('js/app.plugin.js') }}"></script>
    <script src="{{ asset('js/scroll/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/landing.js') }}"></script>

    @yeild('custom-scripts')

</body>
</html>

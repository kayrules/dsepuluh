<!DOCTYPE html>
<html lang="en" class="app">
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
  <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

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
  <section class="vbox">
    @include('partials.header')
    <section>
      <section class="hbox stretch">
        @yield('menu')
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{ route('_home') }}"><i class="fa fa-home"></i> Home</a></li>
                <?php
                $exs = explode('/', Route::current()->getPath());
                foreach ($exs as $x) {
                  if(strlen($x) > 0 && strpos($x, '{') === false) {
                ?>
                <li class="active">
                  <a href="{{ route(Route::current()->getName()) }}">
                  {{ ucwords($x) }}
                  </a>
                </li>
                <?php }} ?>
              </ul>
              @yield('content')
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>

  <!-- core scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

  <!-- post scripts -->
  <script src="{{ asset('js/app.plugin.js') }}"></script>
  <script src="{{ asset('js/scroll/smoothscroll.js') }}"></script>
  <script src="{{ asset('js/appear/jquery.appear.js') }}"></script>
  <script src="{{ asset('js/landing.js') }}"></script>

</body>
</html>

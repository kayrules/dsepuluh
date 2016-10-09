<header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="{{ route('_home') }}" class="navbar-brand"><img src="{!! asset('img/logo-yellow-204x50.png') !!}" class="m-r-sm"><span class="text-muted"></span></a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>

      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="{{ asset('img/avatar_default.jpg') }}">
            </span>
            @if(!empty(Auth::user()->id)) {{ Auth::user()->name }} @endif
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <!-- <a href="{{ route('user.update', Auth::user()->id) }}">Profile</a> -->
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('_auth.logout') }}">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>

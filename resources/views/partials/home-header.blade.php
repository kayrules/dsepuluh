<header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light"  data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ route('_home') }}" class="navbar-brand"><img src="{!! asset('img/logo-yellow-204x50.png') !!}" class="m-r-sm"><span class="text-muted"></span></a>
            <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#">{{ trans('campaign.start') }}</a>
                </li>
                <li>
                    <a href="#">{{ trans('campaign.give') }}</a>
                </li>
                <li>
                    <a href="#">{{ trans('campaign.faq') }}</a>
                </li>
                <li>
                    @if(!empty(Auth::user()->id))
                    <ul id="logged-user" class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="thumb-sm avatar pull-left">
                                    <img src="{{ asset('img/avatar_default.jpg') }}">
                                </span>
                                {{ Auth::user()->name }}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight">
                                <span class="arrow top"></span>
                                <li>
                                    <!-- <a href="route('user.update', Auth::user()->id)">Profile</a> -->
                                    <a href="">Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('_auth.logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @else
                    <div class="m-t-sm">
                        <a href="{{ route('_auth.login') }}" class="btn btn-link btn-sm">{{ trans('auth.login_button') }}</a>
                        <a href="{{ route('_auth.signup') }}" class="btn btn-sm btn-success m-l"><strong>{{ trans('auth.register_button') }}</strong></a>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</header>

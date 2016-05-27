<header class="main-header">
    <!-- Logo -->
    <a href="@yield('logoURL')" class="logo">
        <span class="logo-lg"><img src="../../images/big_logo.png"></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user user-image fa-2x"></i>
                        <span class="hidden-xs">
                             @if (Auth::check())
                                {{ Auth::user()->name }}
                                @endif
                                </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <i class="fa fa-user img-circle fa-5x"></i>
                            <p>
                                @if (Auth::check())
                                {{ Auth::user()->name }}
                                @endif
                                    @if (Auth::check())
                                        {{ Auth::user()->name }}
                                        @if (Auth::user()->userType == '1')
                                            <small>You are signed in as a Parent</small>
                                        @else
                                            <small>You are signed in as a Teacher</small>
                                        @endif
                                    @endif
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="{{ url('/logout') }}" class="btn btn-warning btn-block ">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
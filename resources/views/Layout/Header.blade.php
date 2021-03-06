 <html>
 <head>
    <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text large" >Property Marketing</li>

                <li><a href="{{ route('land') }}">Land</a></li>
                <li><a href="{{ url('house') }}">House</a></li>

            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="{{ url('shope') }}">Shope</a></li>
                <li><a href="{{ url('plaza') }}">Plaza</a></li>
                <li><a href="{{ url('office') }}">Office</a></li>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endguest
                    </ul>
                </div>

            </ul>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
 </body>
 </html>
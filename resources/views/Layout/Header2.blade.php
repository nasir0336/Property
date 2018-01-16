


<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text large" >Property Marketing</li>
            <li><a href="{{ route('addland') }}">Add Land </a></li>
            <li><a href="{{ route('landview') }}">View Land </a></li>
            <li><a href="{{ url('users') }}">Create Usre </a></li>
            <li><a href="{{ url('permissions') }}">Add Permission </a></li>
            <li><a href="{{ url('roles') }}">Add Roles </a></li>

        </ul>
    </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


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

</div>



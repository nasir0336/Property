<html>
<head>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
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
    <div class="row column text-center">
        <h2>Land List</h2>
        <hr>
    </div>
    @if(\Session::has('message'))
        {{\Session::get('message')}}
     @endif
    <form method="post" action="{{ route('record') }}">
        {{csrf_field()}}
    <div class="row">
        <div class="medium-4 columns  ">
            <label>Name
                <input type="text" name="name" placeholder="Name">
            </label>
            <label>
                Discription
                <textarea placeholder="Enter Discription" name="discription" id="discription"></textarea>
            </label>

            <input type="submit" class="button expanded" value="Submit">
        </div>
    </div>
    </form>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

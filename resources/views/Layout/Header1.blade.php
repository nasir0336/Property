<html>
<head>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href="{{ url('rules') }}">Rules</a></li>

        </ul>
    </div>
    <div class="top-bar-right">
        @if (Route::has('login'))

            <div class="top-right links">
                @auth


                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <a href="{{ route('register') }}">Register</a>
                        @endauth
            </div>
        @endif
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
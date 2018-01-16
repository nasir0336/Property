<!doctype html>
<html lang="en" id="top">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/one.css" rel="stylesheet">
    <link href="/css/foundation-icons.css" rel="stylesheet">

    <title>Property Markeeting</title>
</head>

<body>
<nav class="tab-bar">
    <section class="left-small">
        <a class="menu-icon" id="menu-toggle"><span></span></a>
    </section>

    <section class="middle tab-bar-section">
        <center>  Property Markeeting Admin Panal </center>
    </section>
</nav>

<div id="wrapper" class="toggled">
<div id="sidebar-wrapper" class="toggled">
    <ul class="sidebar-nav toggled">

                <li >
                    <a href="#" >
                        {{ Auth::user()->name }} </span><span class="fi-link" alt="Shortcuts">
                    </a>

                </li>




        <li><a href="{{ route('landview') }}">Land<span class="fi-filter" alt="Shortcuts"></a></li>
                <li><a href="{{ url('users') }}">Usres<span class="fi-plus" alt="Overview"></a></li>
                <li><a href="{{ url('roles') }}">Roles<span class="fi-star" alt="About"></a></li>
                <li><a href="{{ url('permissions') }}">Permissions<span class="fi-address-book" alt="Contact"> </a></li>
        <li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout<span class="fi-page-remove" alt="Contact">
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>

    </ul>

</div>
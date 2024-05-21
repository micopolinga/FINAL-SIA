<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thrift</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>
<body>

    <div id="main">
        <div id="sidebar">
            <div id="branding">
                <img src="{{ asset('ay.png') }}" alt="">
                {{-- <h1>DOTA2</h1> --}}
            </div>

            <nav id="main-nav">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/shirts') }}">T-Shirts</a>
                <a href="{{ url('/about') }}">About</a>
            </nav>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>

</html>

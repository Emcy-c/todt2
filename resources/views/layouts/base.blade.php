<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') uwu</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/three.r92.min.js') }}"></script>
    <script src="{{ asset('js/vanta.halo.min.js') }}"></script>


    @yield('js')
</head>
<body>
@yield('content')
</body>
</html>

@section('title', 'Home')
@section('content')
@extends('layouts.base')

    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Koemi Harumi" />
    <meta property="og:description" content="A fun and bubbly person with a lot of character. Will always try to help out best they can and is very loyal if they find a master." />
    <meta property="og:image" content="https://i.trapdoes.tech/u/21.23.18-19.07.20.png" />
    <meta name="title" content="Koemi Harumi">
    <meta name="description" content="A fun and bubbly person with a lot of character. They will always try to help out best they can and is very loyal if they find a master.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | uwu</title>
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

@include ('layouts.koemi')
@endsection


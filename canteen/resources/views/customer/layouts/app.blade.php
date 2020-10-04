<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Canteen') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    {{-- <link href="{{asset('carousel.css')}}" rel="stylesheet"> --}}
</head>
<body>
<div class="flex-wrapper" id="app">
    <!--navigation-->
    @include('customer.layouts.navbar')
    <!--content-->
    <div class="container">
        @include('layouts.messages')
        @yield('content')
    </div>
    <!--footer-->
    @include('layouts.footer')
</div>
@include('layouts.scripts')
</body>
</html>

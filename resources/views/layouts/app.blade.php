<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} | @yield('title')</title>

    <meta name="application-name" content="BauTRADE Centar" />
    <meta name="description" content="@yield('meta-description', 'Stovarište građevinskog materjala sa najvećim i najboljim izborom materjala za eksterijere i enterijere')" />
    <meta name="keywords" content="@yield('meta-keywords', 'stovarište, građevinski materjal, eksterijer, enterijer, trasport, transport robe')" />
    <meta name="author" content="Ljubiša Jakovljević" />
    <meta name="rating" content="General" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Head Scripts -->
    @stack('head-scripts')
</head>
<body background="{{ asset('/images/bricks.jpg') }}">
    <div id="app">
        <!-- Main NavBar -->
        @include('layouts.sections.main-navbar')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- After Main Body Scripts -->
    @stack('scripts')
</body>
</html>

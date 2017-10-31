<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <meta name="application-name" content="BauTRADE Centar" />
        <meta name="description" content="Stovarište građevinskog materjala sa najvećim i najboljim izborom materjala za eksterijere i enterijere. Obezbeđen transport robe do kupca" />
        <meta name="keywords" content="stovarište, građevinski materjal, eksterijer, enterijer, trasport, transport robe" />
        <meta name="author" content="Ljubiša Jakovljević" />
        <meta name="rating" content="General" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background="{{ asset('/images/bricks.jpg') }}">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                    <a href="{{ route('register') }}">
                        Register
                    </a>
                </div>
            @endif

            <div class="content">
                <img src="{{ asset('/images/Logo_FVC.png') }}" alt="BauTRADE Centar Logo" width="30%" height="auto">
                <div class="title m-b-md">
                    <strong>BauTRADE</strong> Centar
                </div>

                <div class="links">
                    <a href="{{ route('home') }}">{{ trans('navbar.home') }}</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

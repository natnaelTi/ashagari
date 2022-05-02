<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/icon/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Login | CMS | Ashagari Charitable Organisation') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/login/login.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/login/login.js') }}"></script>

</body>

</html>

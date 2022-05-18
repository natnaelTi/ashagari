<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('img/icon/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $name ?? '' }}{{ __(' | Ashagari Charitable Organisation') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/cms/guest.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="main-layout">
    <!-- Page Load Spinner -->

    @include('guest.inc.loader')

    <!-- End Page Load Spinner -->


    <!-- Navigation Bar -->
    <header>

        @include('guest.inc.navbar')

    </header>
    <!-- End Navigation Bar -->


    <!-- Message Display -->
    <div class="message">

        @include('guest.inc.message')
    
    </div>
    <!-- End Message Dispplay -->


    <main>

        @yield('content')

    </main>


    <!-- Footer -->

    @include('guest.inc.footer')

    <!-- End Footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/cms/cms.js') }}"></script>
</body>
</html>
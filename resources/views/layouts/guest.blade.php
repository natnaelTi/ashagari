<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Ashagari</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{ asset('css/guest_temp/bootstrap.min.css') }}">

   <!--infinite-slider-->

   <link rel="stylesheet" href="{{ asset('css/guest_temp/infinite-slider.css') }}">
   <!-- style css -->
   <link rel="stylesheet" href="{{ asset('css/guest_temp/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/guest_temp/sliding.css') }}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('css/guest_temp/responsive.css') }}">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('logo.svg') }}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset('css/guest_temp/jquery.mCustomScrollbar.min.css') }}">
   <script src="https://kit.fontawesome.com/7837a43023.js" crossorigin="anonymous"></script>
</head>
<!-- body -->

<body class="main-layout">

    <!-- Page Load Spinner -->

    {{-- @include('guest.inc.loader') --}}

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


    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

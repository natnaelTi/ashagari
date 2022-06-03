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
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('css/guest_temp/responsive.css') }}">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('logo.svg') }}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset('css/guest_temp/jquery.mCustomScrollbar.min.css') }}">
   {{-- <link href="{{ asset('css/guest/guest.css') }}" rel="stylesheet"> --}}
   {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

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
    <script src="{{ asset('js/guest_temp/jquery.min.js') }}"></script>
    <script src="{{ asset('js/guest_temp/popper.min.js') }}"></script>
    <script src="{{ asset('js/guest_temp/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/guest_temp/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/guest_temp/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/guest_temp/custom.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

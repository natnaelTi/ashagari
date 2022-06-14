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

   <meta name="google-site-verification" content="sSm16SD3RTk2vQBclPZY6W6QwIEb4As8YqPkf8IyIkc" />
   <!-- site metas -->
   <title>Ashagari</title>
   <meta name="keywords" content="ashagari, aco, ashagari charitable organisation, ashagari consultancy, ashagari_consultancy, social enterprise, social enterprise ethiopia, youth, youth development, women, women empowerment, development, self-help, conferences, events in addis, events in ethiopia, unhcr, usaid, sida, i need a job, i need help, i need to learn, i need support"/>
   <meta name="description" content="Ashagari Charitable Organization (ACO) is a non for profit organization founded and recognised as a Civil Society Organisation in Ethiopia We are mainly focused on Skill Development, Leadership Empowerment and Capacity Building of Youth, Woman and leaders to ultimately add substantial value and develop the social economy."/>
   <meta name="author" content="Earald Trading and ICT Technologies, Ashagari Consultancy, Ashagari Charitable Organisation, Natnael Tilaye, Mekdes Gebrewold Hundura"/>
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
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
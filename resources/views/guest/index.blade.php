@extends('layouts.guest')

@section('content')

@if(!Session::get('success'))
    <div id="simpleModal" class="modal" tabindex="-1" role="dialog" style="margin-top: 20vh !important;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-align: center !important;">Subscribe to Ashagari</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('subscribe')}}" method="POST" style="margin: 0 20px !important;">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="modal-body">
                        <div class="row">
                            <label for="email">Subscribe to get updates on Ashagari right to your inbox.</label>
                            <input type="email" name="email" id="email" class="form-control input" placeholder="myemail@host.com"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

    <!----------- Hero Section ----------->

    <!-- Banner -->
    <div id="carousel" class="carousel slide hero-slides   home-banner" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active boat   landing-hero-banner">
                <div class="container h-100 d-md-block">
                    <div id="landing-header">
                        <div class="row align-items-center h-100">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center !important;">
                                <div class="test_box">
                                    <div class="text-bg">
                                        <h1 class="" style="margin: 35vh auto 0 auto !important;"><span
                                                style="font-size: 72px !important; font-family: Calibri !important;">ashagari</span> <span
                                                style="display: block !important; font-size: 28px !important; font-weight: 400 !important; color: white !important;">Learning
                                                and Development Company</span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center" style="vertical-align: center !important;">
                                <div class="test_box" style="vertical-align: center !important;">
                                    <div class="text-bg" style="vertical-align: center !important;">
                                        <div class="row" style="padding: 6% 0 0 0 !important;">
                                            <div class="col-12">
                                                <a class="read_more about-btn hero-btn p-3 mx-2" style="border-radius: 25px !important;" href="{{route('about')}}">About
                                            Us</a>
                                            </div>
                                            {{-- <div class="col-6">
                                                <a class="Donate-btn-outline   contact-btn shadow p-3 mb-5 mx-2 hero_btn"
                                            href="#contact_section">Contact</a>
                                            </div> --}}
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="slideshow">
                        <li></li>
                        <li></li>
                        <li></li>
                        {{-- <li></li> --}}
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <section id="who">
        <div class="titlepage text-center p-3 ">
            <h2 class="p-2 mt-5">Ashagari is</h2>
        </div>
        <p class="mt-5" style="font-weight: 300 !important; width: 60% !important; text-align:center !important; margin: 0 auto 5% auto !important;">an Amharic
            word meaning
            <i id="info-cards">"the one who helps transform"</i>, and with this spirit of transformation we
            equip
            youth, women, and leaders to unleash their maximum potential
        </p>
    </section>
    
    <!-- Catalog Cards -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card d-inline-flex p-3 mb-5 bg-white rounded card_zoom">
                        <div class="card-body">
                            <a href="{{ route('strategy_youth') }}" class="stretched-link">
                                <h1 class="card-title" style="font-weight: bold;">Ashagari Youth</h1>
                                <p class="card-text">
                                    Building conscious, skilled and empowered youth community
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card d-inline-flex p-3 mb-5 bg-white rounded card_zoom">
                        <div class="card-body">
                            <a href="{{ route('strategy_women') }}">
                                <h1 class="card-title" style="font-weight: bold;">Ashagari Women</h1>
                                <p class="card-text">
                                    Developing women of value and influence
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mt-n10px">
                    <div class="card d-inline-flex p-3 mb-5 bg-white rounded card_zoom">
                        <div class="card-body">
                            <a href="{{ route('strategy_leader') }}">
                                <h1 class="card-title" style="font-weight: bold;">Ashagari Leader</h1>
                                <p class="card-text">
                                    Promoting emotional intelligence to equip leaders lead authentically
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Catalog Cards -->

    <!----------- End Hero Section ----------->


    <!----------- Events Section ----------->
    <section style="background-color: rgb(238, 236, 236) !important;" id="upcoming">
        <div class="titlepage text-center p-3 ">
            <h2 class="p-2 mt-5">Upcoming Activities</h2>
        </div>

        <div class="row mr-auto ml-auto py-5"
            style="width: 100% !important; justify-content: center !important; margin-right: auto !important; margin-left: auto !important; padding: 0 30px !important;">
            @if (count($events) > 0)
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6 col-sm-12 mr-auto ml-auto">
                        <div class="card e-card">
                            <div class="card__header">
                                <img src="{{ asset('events') }}/{{ $event->title }}/{{ $event->filepath }}" alt="{{ $event->title }}" class="card__image"
                                    width="600">
                            </div>
                            <div class="card__body">
                                <h2>{{ $event->title }}</h2>
                                <p style="height: 120px !important; overflow-y: scroll !important;">{{ $event->description }}</p>
                            </div>
                            <div class="card__footer">
                                <div class="user">
                                    <a type="button" href="{{ route('rsvp', [$event->id]) }}" class="btn btn-success"
                                        style="font-size: 12px !important; background-color: rgba(2, 167, 145, 1) !important;">Register
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <small style="padding: 25px 0 60px 0 !important;">There are no upcoming activities for now. Please, check back in later.</small>
            @endif

            {{-- <div class="col-lg-4 col-md-6 col-sm-12 mr-auto ml-auto">
                <div class="card e-card">
                    <div class="card__header">
                        <img src="{{ asset('images/events/1.jpg') }}" alt="card__image" class="card__image"
                            width="600">
                    </div>
                    <div class="card__body">
                        <h2>Intentional Growth</h2>
                        <p style="max-height: 200px !important; overflow-y: scroll !important;">It is time to see the
                            results of your hardwork. Learn how to take action and continue eleminating
                            any roadblocks in your way.</p>
                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <a type="button" href="Upcoming.html" class="btn btn-success"
                                style="font-size: 12px !important; background-color: rgba(2, 167, 145, 1) !important;">Register
                                >></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card e-card">
                    <div class="card__header">
                        <img src="{{ asset('images/events/2.jpg') }}" alt="card__image" class="card__image"
                            width="600">
                    </div>
                    <div class="card__body">
                        <h2>Authentic Leadership</h2>
                        <p style="max-height: 200px !important; overflow-y: scroll !important;">A leader is many things;
                            skills, knowledge, passion, etc. Authentic leadership,
                            leading with your best self though, cannot be attained without a basic
                            understanding of temperament and character, which together makeup a person's
                            core. Join us and practice the language and process of authentic leadership let
                            you setup yourself to achieve your best.</p>
                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <a type="button" href="Upcoming.html" class="btn btn-success"
                                style="font-size: 12px !important; background-color: rgba(2, 167, 145, 1) !important;">Register
                                >></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card e-card">
                    <div class="card__header">
                        <img src="{{ asset('images/events/3.jpg') }}" alt="card__image" class="card__image"
                            width="600">
                    </div>
                    <div class="card__body">
                        <h2>Positive Parenting</h2>
                        <p style="max-height: 200px !important; overflow-y: scroll !important;">Join us as we discuss the
                            challenges teens face and how to help them overcome adversity and skills to help them thrive!
                        </p>
                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <a type="button" href="Upcoming.html" class="btn btn-success"
                                style="font-size: 12px !important; background-color: rgba(2, 167, 145, 1) !important;">Register
                                >></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!----------- End Events Section ----------->


    <!----------- Counter Section ----------->
    <section id="counter" class="stat_bg wow fadeIn animated p-5 counter-section"
        style="background-color: #090807; visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row" style="color: white !important;">
                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    
                    style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                    <h1 style="font-size: 48px !important; padding-bottom: 15px !important; font-weight: 700 !important; color: #fff !important;" class="alt-font appear text-center">130000</h1>
                    <h4 style="font-size: 14px !important; font-weight: 400 !important; color: #fff !important;" class="counter-title d-block text-center">Trainees</p>
                </div>

                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    
                    style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                    <h1 style="font-size: 48px !important; padding-bottom: 15px !important; font-weight: 700 !important; color: #fff !important;" class="alt-font appear text-center">160</h1>
                    <h4 style="font-size: 14px !important; font-weight: 400 !important; color: #fff !important;" class="counter-title d-block text-center">Volunteers</p>
                </div>

                <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                    
                    style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                    <h1 style="font-size: 48px !important; padding-bottom: 15px !important; font-weight: 700 !important; color: #fff !important;" class="alt-font appear text-center">6</h1>
                    <h4 style="font-size: 14px !important; font-weight: 400 !important; color: #fff !important;" class="counter-title d-block text-center">Dedicated Staff</p>
                </div>

                <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
                    style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                    <h1 style="font-size: 48px !important; padding-bottom: 15px !important; font-weight: 700 !important; color: #fff !important;" class="alt-font appear text-center">3</h1>
                    <h4 style="font-size: 14px !important; font-weight: 400 !important; color: #fff !important;" class="counter-title d-block text-center">Partners</p>
                </div>
            </div>
        </div>
    </section>
    <!----------- End Counter Section ----------->


    <!----------- Clients Section ----------->
    <div class="container clients-section" id="partners">
        <div class="titlepage text-center p-3 ">
            <h2 class="p-2 mt-5">Trusted Partners</h2>
        </div>

        <section class="logo-list" style="padding-bottom: 30px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="#"><img src="./images/clients/client3.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Ministry of Women and Social Affairs, FDRE"
                                style="height: 180px !important;" alt="Ministry of Women and Social Affairs, FDRE"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="#"><img src="./images/clients/client2.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Addis Ababa City Administration: Feeding Agency"
                                style="height: 180px !important;" alt="Addis Ababa City Administration: Feeding Agency"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="#"><img src="./images/clients/client9.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Ministry of Labor and Skills, FDRE"
                                style="height: 180px !important;" alt="Ministry of Labor and Skills, FDRE"></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!----------- End Clients Section ----------->


    <!----------- Social Media Section ----------->
    <!--<div class="juices   news-section" style="padding-bottom: 35px !important;">-->
    <!--    <div class="container ">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <div class="titlepage">-->
    <!--                    <h4>Read Our</h4>-->
    <!--                    <h2>Latest Post</h2>-->
    <!--                </div>-->

                    <!-- <h6 class="titlepage p-5" style="font-weight: 200 !important; text-transform: lowercase !important;">No
                          blogs have been posted yet</h6> -->

    <!--                <div class="row">-->
    <!--                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <p>facebook</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <iframe-->
    <!--                            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fashagarii%2Fposts%2F554961182652548&width=350&show_text=true&height=350&appId"-->
    <!--                            width="350" height="197" style="border:none;overflow:hidden" scrolling="no" frameborder="0"-->
    <!--                            allowfullscreen="true"-->
    <!--                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>-->
    <!--                    </div>-->

    <!--                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <p>youtube</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <iframe width="350" height="197" src="https://www.youtube.com/embed/bfXBRkobnVk"-->
    <!--                            title="YouTube video player" frameborder="0"-->
    <!--                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
    <!--                            allowfullscreen></iframe>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!----------- End Social Media Section ----------->
    
    <script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#simpleModal").modal('show');
        }
    </script>
@endsection
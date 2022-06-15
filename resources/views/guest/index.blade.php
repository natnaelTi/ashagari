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
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6" style="text-align: center !important;">
                                <div class="test_box">
                                    <div class="text-bg">
                                        <h1 class="" style="margin: 25vh 0 0 0 !important;"><span
                                                style="font-size: 68px !important;">ashagari</span> <span
                                                style="display: block !important; font-size: 28px !important; font-weight: 400 !important; color: white !important;">Learning
                                                and Development Company</span></h1>
                                        <p class="mt-5" style="font-weight: 300 !important;">Ashagari is an Amharic
                                            word meaning
                                            <i id="info-cards">"the one who helps transform"</i>, and with this spirit of transformation we
                                            equip
                                            youth, women, and leaders to unleash their maximum potential
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-6 align-self-center" style="vertical-align: center !important;">
                                <div class="test_box" style="vertical-align: center !important;">
                                    <div class="text-bg" style="vertical-align: center !important;">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="read_more   about-btn hero-btn shadow p-3 mx-2" href="#info-cards">Get To Know
                                            Us</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="Donate-btn-outline   contact-btn shadow p-3 mb-5 mx-2 hero_btn"
                                            href="#contact_section">Contact</a>
                                            </div>
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
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
    <!-- Catalog Cards -->
    <div class="card_one catalog-cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 margin_top_lil">
                    <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded card_zoom">
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

                <div class="col-lg-4 mb-4 margin_top_lil">
                    <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded card_zoom">
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

                <div class="col-lg-4 mb-4 mt-n10px margin_top_lil">
                    <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded card_zoom">
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
    </div>
    <!-- End Catalog Cards -->

    <!----------- End Hero Section ----------->


    <!----------- Events Section ----------->
    <section style="background-color: rgb(238, 236, 236) !important;">
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
            <div class="row">
                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    data-wow-duration="300ms"
                    style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                    <i class="fa fa-beer medium-icon"></i>
                    <span id="anim-number-pizza" class="counter-number"></span>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000">130000</span>
                    <p class="counter-title">Trainees</p>
                </div>

                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    data-wow-duration="600ms"
                    style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                    <i class="fa fa-heart medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000">160</span>
                    <span class="counter-title">Volunteers</span>
                </div>

                <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                    data-wow-duration="900ms"
                    style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                    <i class="fa fa-anchor medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="810" data-speed="7000">6</span>
                    <span class="counter-title">Dedicated Staff</span>
                </div>

                <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms"
                    style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                    <i class="fa fa-user medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="600" data-speed="7000">3</span>
                    <span class="counter-title">Partners</span>
                </div>
            </div>
        </div>
    </section>
    <!----------- End Counter Section ----------->


    <!----------- Clients Section ----------->
    <div class="container clients-section">
        <div class="titlepage text-center p-3 ">
            <h2 class="p-2 mt-5">Trusted Partners</h2>
        </div>

        <section class="logo-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="#"><img src="./images/clients/client3.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Ministry of Women and Social Affairs, FDRE"
                                style="height: 120px !important;" alt="Ministry of Women and Social Affairs, FDRE"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="#"><img src="./images/clients/client2.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Addis Ababa City Administration: Feeding Agency"
                                style="height: 120px !important;" alt="Addis Ababa City Administration: Feeding Agency"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="#"><img src="./images/clients/client9.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Ministry of Labor and Skills, FDRE"
                                style="height: 120px !important;" alt="Ministry of Labor and Skills, FDRE"></a>
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
    <!--                        blogs have been posted yet</h6> -->-->

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


    <!----------- Contact Section ----------->
    <div id="contact_section" class="contact_section bg-white">
        <div class="row justify-content-center">
            <div class=" col-md-12 contact_form">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-6 d-flex align-items-center align-self-center">
                            <div class="contact-wrap w-100 p-md-5 p-10">
                                <h1 class="mb-4 font-weight-bold">Contact Us</h1>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    <!-- Your message was sent, thank you! -->
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" action="{{route('feedback')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="phone" id="phone"
                                                    placeholder="Phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="firstname" id="fname"
                                                    placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="lastname" id="lname"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message"
                                                    class="read_more shadow p-3 mb-5 btn">

                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch contact_banner">
                            <div class=" mx-auto my-4">
                                <div class="p-3 m-5 rounded">
                                    <div class="card-body card_spacing" style="background-size: contain !important;">
                                        <h6 class="card-title card_title_spacing" style="font-size: 26px !important;">If an
                                            egg is
                                            broken by an
                                            outside force, life ends. If broken
                                            by an inside force, life begins. Great things always begin from the inside.</h1>

                                            <p class=""
                                                style="color: whitesmoke; font-size: 24px; ; text-align: right; ">
                                                Jim Kwik
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------- End Contact Section ----------->
    
    <script type="text/javascript">
    window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#simpleModal").modal('show');
    }
</script>
@endsection
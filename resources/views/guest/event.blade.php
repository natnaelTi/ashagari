@extends('layouts.guest')

@section('content')
    <!-- banner -->
    <section class="upcoming_banner_main">
        <div class="container">
            <div class="row">
                <div class="col-12"
                    style="text-align: right !important; padding-right: 0 !important; margin-right: 0 !important; right: 0 !important;">
                    <div class="test_box">
                        <div class="text-bg margin_top_hero">
                            <h1>{{ $l_event->title }}</h1>
                            <h4
                                style="margin: 20px !important; padding-left: 6px !important; font-size: 28px !important; font-weight: 500 !important; color: white;">
                                {{ $l_event->start_date }}
                            </h4>
                            <h6 class="text-center"
                                style="margin: 20px !important; padding-left: 6px !important; font-size: 22px !important; font-weight: 400 !important; color: white;">
                                <i class="fas fa fa-map-marker pl-3 pr-2 " aria-hidden="true"></i> {{ $l_event->location }}
                            </h6>
                            <!-- <p>English Seminar  will be distracted by the this week readable content of a page when looking at its layout. t</p> -->
                            <a class="read_more shadow hero_btn p-3  "
                                href="{{ route('register', [$l_event->id]) }}">Register Now <i
                                    class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </a>
                            <!-- <a class="Donate-btn-outline  shadow p-3 mb-5" href="#contact_section">Contact Us</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->


    <!-- Our Latest news -->
    <div class="juices ">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 style="padding-bottom: 30px !important;">Upcoming Event</h2>
                        <!-- <h6 class="pt-5 mt-5" style="font-weight: 200 !important; text-transform: lowercase !important;">
                               No upcoming events in record yet</h6> -->

                        @foreach ($events as $event)
                            <div class="row">
                                <div class="container-fluid shadow m-3">
                                    <div class="row bg-white">
                                        <div class="col-xl-4 col-lg-4 col-md-4"
                                            style="border:0px solid #ddd; margin: 0 !important; padding: 0 !important;">
                                            <img src="{{ asset('events') }}/{{ $event->title }}/{{ $event->filepath }}" alt="{{ $event->title }}" class="img-fluid"
                                                style="max-width: object-fit !important; max-height: 230px !important; size: cover !important;">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6" style="border:0px solid #ddd">
                                            <div class="card-body">
                                                <div class="card-title" style="font-weight: bold;">
                                                    <h1 class="card-title" style="font-weight: bold;">
                                                        {{ $event->title }}
                                                    </h1>
                                                    <p class="card-text"
                                                        style="font-size: 13px !important; font-weight: 300 !important; max-height: 80px; overflow-y: scroll;">
                                                        {{ $event->description }}
                                                    </p>
                                                    <p style="font-size: 14px !important;">
                                                        <i class="fa fa-clock-o pr-2" aria-hidden="true"></i>
                                                        {{ $event->start_date }}
                                                        <i class="fas fa fa-map-marker pl-3 pr-2 " aria-hidden="true"></i>
                                                        {{ $event->location }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-2 col-md-2" style="border:0px solid #ddd">
                                            <div class="" style="margin-top: 100px;">
                                                <a class="read_more mt-5 "
                                                    href="{{ route('rsvp', [$event->id]) }}">Register Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Our   section -->
@endsection

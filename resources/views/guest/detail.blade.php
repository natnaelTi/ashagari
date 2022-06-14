@extends('layouts.guest')

@section('content')
    <!-- banner -->

    <section class="about-youth"
        style="height: 100vh !important; background-image: linear-gradient(to bottom, rgba(213, 255, 249, 0.15), rgba(2, 167, 145, 0.73)), url('{{asset('events/'.$event->title.'/'.$event->filepath)}}') !important; background-size: cover !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="test_box" style="padding-top: 15% !important;">
                        <div class="text-bg">
                            <h1 class="mt-5 pt-5"><span
                                    style="font-size: 78px !important;color: white !important; padding-top: 15% !important; width: 80vw !important;">{{$event->title}}</h1>
                            <p class="mt-2" style="font-weight: 300 !important;font-size: 25px !important;">Held on: {{\Carbon\Carbon::parse($event->start_date)->format('d M Y')}}</p>
                            <p class="mt-2" style="font-weight: 300 !important;font-size: 25px !important;"><i class="fas fa fa-map-marker pl-3 pr-2 " aria-hidden="true"></i> {{$event->location}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end banner -->

    <!-- about -->
    <!-- Article  -->

    <section id="about">
        <div class="about" style="margin-top: 0 !important; padding-top: 0 !important;">
            <div class="container" id="about">
                <div class="row d_flex">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 ">
                        <div class="titlepage mx-auto my-5">
                            <h4 style="text-decoration: underline !important;"></h4>
                            <h2 style="text-align: left;">{{ $event->title }}</h2>
                            <p style="text-align: left;">
                                {{ $event->description }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                @if (count($gallery) > 0)
                    <div class="bd-example" style="width: 60vw !important; margin-bottom: 45px !important; margin-left: auto !important; margin-right: auto !important;">
                        <h2 style="font-weight: 700 !important; margin-bottom: 20px !important; text-align: center !important;">Few Moments from the Event</h2>
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                @for ($i = 1; $i < count($gallery); $i++)
                                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}"></li>
                                @endfor
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img-gradient">
                                        <img src="{{asset('events/gallery/'.$event->title.'/'.$gallery[0])}}" class="d-block" style="max-height: 400px !important; text-align: center !important; margin: 10px auto !important;" alt="...">
                                    </div>
                                </div>
                                @for ($i = 1; $i < count($gallery); $i++)
                                    <div class="carousel-item">
                                        <div class="img-gradient">
                                            <img src="{{asset('events/gallery/'.$event->title.'/'.$gallery[$i])}}" class="d-block" style="max-height: 400px !important; text-align: center !important; margin: 10px auto !important;" alt="...">
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                @else
                    <p class="text-center">Apologies, but it does not seem there are images taken from the moments of the event.</p>
                @endif                
            </div>
        </div>
    </section>
@endsection
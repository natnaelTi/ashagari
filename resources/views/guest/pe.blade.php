@extends('layouts.guest')

@section('content')
    <!-- Our Latest news -->
    <div class="juices ">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 style="margin-top: 70px !important; padding-bottom: 30px !important;">Our Archives</h2>
                        <!-- <h6 class="pt-5 mt-5" style="font-weight: 200 !important; text-transform: lowercase !important;">
                               No upcoming events in record yet</h6> -->
                        @if (count($pes) > 0)
                            @foreach ($pes as $event)
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
                                                            {{\Carbon\Carbon::parse($event->start_date)->format('d M Y')}}
                                                            <i class="fas fa fa-map-marker pl-3 pr-2 " aria-hidden="true"></i>
                                                            {{ $event->location }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-lg-2 col-md-2" style="border:0px solid #ddd">
                                                <div class="" style="margin-top: 100px;">
                                                    <a class="read_more mt-5 "
                                                        href="{{ route('detail', [$event->id]) }}">Explore</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach    
                        @else
                        <small style="padding: 25px 0 60px 0 !important;">There have been no activities we have been doing. Please, check back in later.</small>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Our   section -->
@endsection
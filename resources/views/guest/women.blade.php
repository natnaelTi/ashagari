@extends('layouts.guest')

@section('content')
    <!-- banner -->

    <section class="about-women"
        style="height: 100vh !important; background-image: linear-gradient(to bottom, rgba(213, 255, 249, 0.15), rgba(2, 167, 145, 0.73)), url('./images/women.jpg'); background-size: cover !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="test_box" style="padding-top: 15% !important;">
                        <div class="text-bg">
                            <h1 class="mt-5 pt-5"><span
                                    style="font-size: 78px !important; color: white !important;">Ashagari
                                    Women</span> </h1>
                            <p class="mt-2" style="font-weight: 300 !important;font-size: 25px !important;">
                                Developing women of value and influence</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end banner -->

    <!-- Catalog Cards -->
    <div class="card_one catalog-cards">
        <div class="container">
            <div class="row ">
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
                            <h2 style="text-align: left;">Ashagari Woman</h2>
                            <p style="text-align: left;">
                                Recognizing the women’s natural ability to solve problem and influence decision making,
                                Ashagari women program created a platform to unleash women’s potential to influence their
                                environment. The program mainly focus on the power of women to influence their community in
                                order to ensure peaceful and enabling environment towards sustainable success.
                            </p>

                            <!-- <a class="read_more" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

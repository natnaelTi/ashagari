@extends('layouts.guest')

<style>
    .img-con{
        position: relative !important;
        width: 100% !important;
    }
    .image{
        opacity: 1 !important;
        display: block !important;
        width: auto !important;
        height: 280px !important;
        overflow: hidden !important;
        transition: .5s ease !important;
        backface-visibility: hidden !important;
        padding: 0 8px !important;
    }

    .bottom{
        transition: .5s ease !important;
        opacity: 0 !important;
        position: absolute !important;
        bottom: 10% !important;
        transform: translate(-50%, -50%) !important;
        -ms-transform: translate(-50%, -50%) !important;
        text-align: center !important;
        vertical-align: bottom !important;
    }

    .img-con:hover .image{
        opacity: 1 !important;
    }

    .img-con:hover .bottom{
        
        opacity: 1 !important;
    }
    .text{
        color: rgb(58, 58, 58) !important;
        padding: 0 0 0 50px !important;
        margin: 0 0 0 50px !important;
    }
</style>

@section('content')
    <!-- banner -->

    <section class="about-youth"
        style="height: 100vh !important; background-image: linear-gradient(to bottom, rgba(213, 255, 249, 0.15), rgba(21, 29, 28, 0.73)), url('./images/youth/cover.jpg') !important; background-size: cover !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="test_box" style="padding-top: 15% !important;">
                        <div class="text-bg">
                            <h1 class="mt-5 pt-5"><span
                                    style="font-size: 78px !important;color: white !important; padding-top: 15% !important">Ashagari
                                    Youth</span> </h1>
                            <p class="mt-2" style="font-weight: 300 !important;font-size: 25px !important;">Building
                                conscious,
                                skilled and empowered youth community</p>
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
                            <h2 style="text-align: left;">Ashagari Youth</h2>
                            <p style="text-align: left;">
                                Ashagari created a platform for youth community (>75% of Ethiopian population) to come and
                                learn, share experience and motivate. The platform is in the form of edutainment which
                                includes
                                both education and entertainment which can enhance the young people’s creativity,
                                innovations
                                critical thinking, problem solving and decision making ability.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="bd-example" style="position: relative !important; width: 85vw !important; margin: 0 auto 45px auto !important;">
                <h2 style="font-weight: 700 !important; margin-bottom: 20px !important; text-align: center !important;">Previous Activities</h2>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                        <div class="img-con">
                            <img src="{{asset('images/youth/1.jpg')}}" class="image" alt="...">
                            <div class="bottom">
                                <div class="text text-center" style="width: 100% !important;">
                                    <h5 style="font-weight: 700 !important; font-size: 14px !important; color: rgb(58, 58, 58) !important; margin: 0 0 0 25% !important; width: 100% !important; background-color: rgba(255, 255, 255, 0.521) !important; background-size: 100% auto !important;">Overcoming Rejection</h5>
                                    <p style="font-weight: 400 !important; font-size: 10px !important; color: rgb(58, 58, 58) !important; margin: 0 0 0 25% !important; width: 100% !important; background-color: rgba(255, 255, 255, 0.521) !important; background-size: 100% auto !important;">Training program held on 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                        <div class="img-con" style="position: relative !important;">
                            <img src="{{asset('images/youth/2.jpg')}}" class="d-block w-full image" alt="...">
                            <div class="bottom">
                                <div class="text text-center" style="width: 100% !important;">
                                    <h5 style="font-weight: 700 !important; font-size: 14px !important; color: rgb(58, 58, 58) !important; margin: 0 0 0 25% !important; width: 100% !important; background-color: rgba(255, 255, 255, 0.521) !important; background-size: 100% auto !important;">Failing Forward</h5>
                                    <p style="font-weight: 400 !important; font-size: 10px !important; color: rgb(58, 58, 58) !important; margin: 0 0 0 25% !important; width: 100% !important; background-color: rgba(255, 255, 255, 0.521) !important; background-size: 100% auto !important;">Conference held on 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                        <div class="img-con" style="position: relative !important;">
                            <img src="{{asset('images/youth/3.jpg')}}" class="d-block w-full image" alt="...">
                            <div class="bottom">
                                <div class="text text-center" style="width: 100% !important;">
                                    <h5 style="font-weight: 700 !important; font-size: 14px !important; color: rgb(58, 58, 58) !important; margin: 0 0 0 25% !important; width: 100% !important; background-color: rgba(255, 255, 255, 0.521) !important; background-size: 100% auto !important;">I am the Change</h5>
                                    <p style="font-weight: 400 !important; font-size: 10px !important; color: rgb(58, 58, 58) !important; margin: 0 0 0 25% !important; width: 100% !important; background-color: rgba(255, 255, 255, 0.521) !important; background-size: 100% auto !important;">Skills development training held on 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
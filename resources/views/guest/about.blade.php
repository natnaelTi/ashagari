@extends('layouts.guest')

@section('content')
<!----------- Hero Section ----------->
<div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
    <ol class="carousel-indicators margin_top_carousel ">
       <li class="active" data-target="#carousel" data-slide-to="0"></li>
       <li data-target="#carousel" data-slide-to="1"></li>
       <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
       <div class="carousel-item active about-youth">
          <div class="container h-100 d-block">
             <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                   <div class="caption animated fadeIn" style="background: none !important;">
                      <div class="test_box">
                         <div class="text-bg">
                            <h1 class="animated fadeInLeft">Ashagari Youth</h1>
                            <a class="Donate-btn-outline  shadow mb-5 hero_btn" href="{{route('contact')}}">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="carousel-item about-women">
          <div class="container h-100 d-block">
             <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                   <div class="caption animated fadeIn" style="background: none !important;">
                      <div class="test_box">
                         <div class="text-bg">
                            <h1>Ashagari Women</h1>
                            <a class="Donate-btn-outline  shadow mb-5 hero_btn" href="{{route('contact')}}">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="carousel-item about-leader">
          <div class="container h-100 d-block">
             <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                   <div class="caption animated fadeIn" style="background: none !important;">
                      <div class="test_box">
                         <div class="text-bg">
                            <h1>Ashagari Leader</h1>
                            <a class="Donate-btn-outline  shadow mb-2 hero_btn" href="{{route('contact')}}">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
    </a>
 </div>
 <!----------- End Hero Section ----------->

 <!-- about -->
 <div class="about" style="min-height: 100vh !important;">
    <div class="container align-center">
       <div class="row d_flex align-center" style="vertical-align: center !important; padding-top: 8% !important;">
          <div class="col-lg-12 col-md-12 col-sm-12">
             <div class="titlepage mx-auto my-5">
                {{-- <h4>About Us</h4> --}}
                <h2 style="text-align: center !important;">Who We Are</h2>
                <p>
                   Ashagari Charitable Organization (ACO) is a non for profit organization founded and recognised as a
                   Civil Society Organisation in Ethiopia We are mainly focused on Skill Development, Leadership
                   Empowerment and Capacity Building of Youth, Woman and leaders to ultimately add substantial value
                   and
                   develop the social economy.
                </p>

                <p
                   style="text-align: justify !important; margin: 0 15px 0 15px !important; padding: 0 15px 0 15px !important; font-size: 12px !important; font-weight: 600 !important;">
                   "Transformation is only possible when one can be ware of the potential and
                   understand the ways to utilize it to make greater impact. As we all agree, the greatest growth gap
                   is
                   between knowing and doing. Thus, helping the generation identify its gaps; strengthen its capacity
                   and
                   enduring commitement to live a life of contribution will make the world a better place for human
                   kind." - <i><b>Mekdes Gebrewold</b>, CEO</i>
                </p>
             </div>
          </div>

          <div class="col-lg-5 col-md-6 col-sm-12">

          </div>
       </div>
    </div>
 </div>
 <!-- end about -->

 <!----------- Values Section ----------->
 <section class="core_value_bg card_two" style="background-color: #090807 !important; visibility: visible; animation-name: fadeIn; color: white !important;">
    <div class="container">
       <div class="titlepage m-7 p-5">
          <h2 class="text-center text-white">Our Core Values</h2>
       </div>
       <div class="row" style="margin: 0 !important; padding: 0 !important;">
          <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
             <div class="card shadow p-3 mb-5 card_bg rounded value-card">
                <div class="card-body">
                   <i class="fa fa-child fa-5x p-2 text-white" aria-hidden="true" style="text-align: center;
                   width: 100%; font-size: 28px !important;"></i>
                   <h1 class="card_title text-white">Passion & Care</h1>
                   <p class="card-text center text-white"
                      style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: capitalize !important;">
                      Respect the wellbeing and dignity of all those we will train and mentor
                   </p>
                </div>
             </div>
          </div>

          <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
             <div class="card shadow p-3 mb-5 card_bg rounded value-card">
                <div class="card-body">
                   <i class="fa fa-balance-scale fa-5x p-2 text-white" aria-hidden="true" style="text-align: center;
                   width: 100%; font-size: 28px !important;"></i>
                   <h1 class="card_title text-white">Accountability & Ethics</h1>
                   <p class="card-text center text-white"
                      style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: capitalize !important;">
                      Hold highest ethical standards in our workk and take responsibility for the consequence of
                      our action
                   </p>
                </div>
             </div>
          </div>

          <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
             <div class="card shadow p-3 mb-5 card_bg rounded value-card">
                <div class="card-body">
                   <i class="fa fa-users fa-5x p-2 text-white" aria-hidden="true" style="text-align: center;
                   width: 100%; font-size: 28px !important;"></i>
                   <h1 class="card_title text-white">Diversity</h1>
                   <p class="card-text center text-white"
                      style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: capitalize !important;">
                      Recognise and accomodate the uniqueness of our diverse population
                   </p>
                </div>
             </div>
          </div>

          <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
             <div class="card shadow p-3 mb-5 card_bg rounded value-card">
                <div class="card-body">
                   <i class="fa fa-handshake-o fa-5x p-2 text-white" aria-hidden="true" style="text-align: center;
                   width: 100%; font-size: 28px !important;"></i>
                   <h1 class="card_title text-white">Partneship & Collaboration</h1>
                   <p class="card-text center text-white"
                      style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: capitalize !important;">
                      Share responsibilities to integrate quality service for continous positive impact
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!----------- End Values Section ----------->

 <div class="about" style="padding-bottom: 40px !important;">
   <div class="container align-center">
      <div class="row d_flex align-center" style="vertical-align: center !important; padding-top: 3% !important;">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="titlepage mx-auto">
               {{-- <h4>About Us</h4> --}}
               <h2 style="text-align: center !important; padding-bottom: 30px !important;">Program Areas</h2>
               <!-- Catalog Cards -->
               <section>
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-4 mb-4">
                              <div class="card d-inline-flex bg-white rounded card_zoom" style="min-height: 300px !important; margin: auto 0 !important;">
                                 <img src="{{ asset('images/pa/youth.jpg') }}" style="height: 150px !important; overflow: hidden !important;" height="150px">
                                 <div class="card-body p-3">
                                    <a href="{{ route('strategy_youth') }}" class="stretched-link">
                                          <h1 class="card-title" style="font-weight: bold;">Ashagari Youth</h1>
                                          <p class="card-text">
                                             Building conscious, skilled and empowered youth community
                                          </p>
                                    </a>
                                    <div class="text-center">
                                       <a role="button" href="{{ route('strategy_youth') }}" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                              <div class="card d-inline-flex mb-5 bg-white rounded card_zoom" style="min-height: 300px !important;">
                                 <img src="{{ asset('images/pa/women.jpg') }}" style="height: 150px !important; overflow: hidden !important;" height="150px">
                                 <div class="card-body p-3">
                                    <a href="{{ route('strategy_women') }}">
                                          <h1 class="card-title" style="font-weight: bold;">Ashagari Women</h1>
                                          <p class="card-text">
                                             Developing women of value and influence
                                          </p>
                                    </a>
                                    <div class="text-center">
                                       <a role="button" href="{{ route('strategy_women') }}" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                        </div>

                        <div class="col-lg-4 mb-4 mt-n10px">
                              <div class="card d-inline-flex mb-5 bg-white rounded card_zoom" style="min-height: 300px !important;">
                                 <img src="{{ asset('images/pa/leader.jpg') }}" height="150px">
                                 <div class="card-body p-3">
                                    <a href="{{ route('strategy_leader') }}">
                                          <h1 class="card-title" style="font-weight: bold;">Ashagari Leader</h1>
                                          <p class="card-text">
                                             Promoting emotional intelligence to equip leaders
                                          </p>
                                    </a>
                                    <div class="text-center">
                                       <a role="button" href="{{ route('strategy_leader') }}" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- End Catalog Cards -->
            </div>
         </div>
      </div>
   </div>
 </div>
@endsection
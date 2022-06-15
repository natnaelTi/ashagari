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
                            <a class="Donate-btn-outline  shadow mb-5 hero_btn" href="#contact_section">Contact Us</a>
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
                            <a class="Donate-btn-outline  shadow mb-5 hero_btn" href="#contact_section">Contact Us</a>
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
                            <a class="Donate-btn-outline  shadow mb-2 hero_btn" href="#contact_section">Contact Us</a>
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
 <div class="about">
    <div class="container">
       <div class="row d_flex">
          <div class="col-lg-7 col-md-6 col-sm-12">
             <div class="titlepage mx-auto my-5">
                {{-- <h4>About Us</h4> --}}
                <h2 style="text-align: left;">Who We Are</h2>
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
             <div class="card shadow p-3 mb-5 card_bg rounded">
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
             <div class="card shadow p-3 mb-5 card_bg rounded">
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
             <div class="card shadow p-3 mb-5 card_bg rounded">
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
             <div class="card shadow p-3 mb-5 card_bg rounded">
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
@endsection
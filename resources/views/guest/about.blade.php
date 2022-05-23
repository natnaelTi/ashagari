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
       <div class="carousel-item active boat about-youth">
          <div class="container h-100 d-none d-md-block">
             <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                   <div class="caption animated fadeIn">
                      <div class="test_box">
                         <div class="text-bg">
                            <h1 class="animated fadeInLeft">Ashagari Youth</h1>
                            <p class="animated fadeInRight">Ashagari created a platform for youth community (>75% of
                               Ethiopian population) co come and learn, share experience and motivate. The platform is
                               in the form of edutainment which includes both education and entertainment which can
                               enhance the young people’s creativity, innovations critical thinking, problem solving
                               and decision making ability.</p>
                            <a class="Donate-btn-outline  shadow mb-5 hero_btn" href="#contact_section">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="carousel-item sea about-women">
          <div class="container h-100 d-none d-md-block">
             <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                   <div class="caption animated fadeIn">
                      <div class="test_box">
                         <div class="text-bg">
                            <h1>Ashagari Women</h1>
                            <p class="animated fadeInRight">Recognizing the women’s natural ability to solve problem
                               and influence decision making, Ashagari women program created a platform to unleash
                               women’s potential to influence their environment.</p>
                            <a class="Donate-btn-outline  shadow mb-5 hero_btn" href="#contact_section">Contact Us</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="carousel-item river about-leader">
          <div class="container h-100 d-none d-md-block">
             <div class="row align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                   <div class="caption animated fadeIn">
                      <div class="test_box">
                         <div class="text-bg">
                            <h1>Ashagari Leader</h1>
                            <p>As we speak about globalization we are moving in to the fourth industrial revolution
                               where we see a lot of change in social. Environmental, economic and political arena,
                               where leaders are expected to make an intent decision considering their environmental,
                               social and economical implications at the same value in dealing with local and global
                               challenges in order to compete successfully and grow sustainably.</p>
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

 <!-- Our Latest news -->
 <section class="juices" style="padding-bottom: 30px !important;">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-12 mx-auto ">
             <div class="titlepage text-left">
                <h4>Our Execlusive </h4>
                <h2 class="">Expert Board</h2>
                <p>Ashagari advocates transformation, and holding truth to that we are led by visionary, passionate
                   and frank teams.</p>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-lg-4 mb-4 mt-n10px ">
             <div class="card d-inline-flex  shadow mx-auto bg-white rounded">
                <img class="card-img-top-post" src="{{ asset('images/teams/1.jpg') }}" style="width: 125%;" alt="">
             </div>
             <div class="card-body">
                <h1 class=" font-weight-bold">Mrs. Mekdes Gebrewold</h1>
                <h3 class=" ">Founder, CEO</h3>

                <div class="social-post text-left pt-4 ">
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram"
                         aria-hidden="true"></i></a>

                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter"
                         aria-hidden="true"></i></a>
                </div>
             </div>
          </div>

          <div class="col-lg-4 mb-4 mt-n10px ">
             <div class="card d-inline-flex  shadow mx-auto bg-white rounded">
                <img class="card-img-top-post" src="{{ asset('images/teams/2.png') }}" style="width: 125%;" alt="">
             </div>
             <div class="card-body">
                <h1 class=" font-weight-bold">Mr. Mekdela Mekuriya</h1>
                <h3 class=" ">Chair Person</h3>

                <div class="social-post text-left pt-4 ">
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram"
                         aria-hidden="true"></i></a>

                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter"
                         aria-hidden="true"></i></a>
                </div>
             </div>
          </div>

          <div class="col-lg-4 mb-4 mt-n10px ">
             <div class="card d-inline-flex  shadow mx-auto bg-white rounded">
                <img class="card-img-top-post" src="{{ asset('images/teams/3.png') }}" style="width: 125%;" alt="">
             </div>
             <div class="card-body">
                <h1 class=" font-weight-bold">Mr. Seleshi Kasaye</h1>
                <h3 class=" ">Board Secretary</h3>

                <div class="social-post text-left pt-4 ">
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram"
                         aria-hidden="true"></i></a>

                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter"
                         aria-hidden="true"></i></a>
                </div>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-lg-4 mb-4 mt-n10px ">
             <div class="card d-inline-flex  shadow mx-auto bg-white rounded">
                <img class="card-img-top-post" src="{{ asset('images/teams/4.png') }}" style="width: 125%;" alt="">
             </div>
             <div class="card-body">
                <h1 class=" font-weight-bold">Mr. Behailu Shiferaw</h1>
                <h3 class=" ">Board Member</h3>

                <div class="social-post text-left pt-4 ">
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram"
                         aria-hidden="true"></i></a>

                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter"
                         aria-hidden="true"></i></a>
                </div>
             </div>
          </div>

          <div class="col-lg-4 mb-4 mt-n10px ">
             <div class="card d-inline-flex  shadow mx-auto bg-white rounded">
                <img class="card-img-top-post" src="{{ asset('images/teams/4.png') }}" style="width: 125%;" alt="">
             </div>
             <div class="card-body">
                <h1 class=" font-weight-bold">Mrs. Seble Guangul</h1>
                <h3 class=" ">Board Member</h3>

                <div class="social-post text-left pt-4 ">
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter"
                         aria-hidden="true"></i></a>
                </div>
             </div>
          </div>

          <div class="col-lg-4 mb-4 mt-n10px ">
             <div class="card d-inline-flex  shadow mx-auto bg-white rounded">
                <img class="card-img-top-post" src="{{ asset('images/teams/4.png') }}" style="width: 125%;" alt="">
             </div>
             <div class="card-body">
                <h1 class=" font-weight-bold">Mrs. Asrat Tilahun</h1>
                <h3 class=" ">Vice Chairperson</h3>

                <div class="social-post text-left pt-4 ">
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin"
                         aria-hidden="true"></i></a>
                   <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter"
                         aria-hidden="true"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end Our Juices  section -->

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
                      <form method="POST" id="contactForm" name="contactForm">
                         <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <input type="tel" class="form-control" name="Phone number" id="phone"
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
                                  <input type="text" class="form-control" name="fname" id="fname"
                                     placeholder="First Name">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                  <input type="text" class="form-control" name="lname" id="lname"
                                     placeholder="Last Name">
                               </div>
                            </div>

                            <div class="col-md-12">
                               <div class="form-group">
                                  <textarea name="message" class="form-control" id="message" cols="30" rows="7"
                                     placeholder="Message"></textarea>
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="form-group">
                                  <input type="submit" value="Send Message" class="read_more shadow p-3 mb-5 btn">

                                  <div class="submitting"></div>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch contact_banner">
                   <div class=" mx-auto my-4">
                      <div class=" shadow p-3 m-5  rounded " style="border:3px solid
                      rgb(255, 255, 255) ">
                         <div class="card-body card_spacing" style="background-size: contain !important;">
                            <h6 class="card-title card_title_spacing" style="font-size: 26px !important;">If an egg is
                               broken by an
                               outside force, life ends. If broken
                               by an inside force, life begins. Great things always begin from the inside.</h1>

                               <p class="" style="color: whitesmoke; font-size: 24px; ; text-align: right; ">
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

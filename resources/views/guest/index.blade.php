@extends('layouts.guest')

@section('content')

   <!----------- Hero Section ----------->
   
   <!-- Banner -->
   <div id="carousel" class="carousel slide hero-slides   home-banner" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
         <div class="carousel-item active boat   landing-hero-banner">
            <div class="container h-100 d-none d-md-block">
               <div class="row align-items-center h-100">
                  <div class="col-7 col-md-9 col-lg-7 col-xl-6">
                     <div class="test_box">
                        <div class="text-bg">
                           <h1 class="mt-5 pt-5"><span style="font-size: 78px !important;">Ashagari</span> <span
                                 style="display: block !important; font-size: 35px !important; font-weight: 400 !important; color: white !important;">Learning and Development Company</span></h1>
                           <p class="mt-5" style="font-weight: 300 !important;">Ashagari is an Amharic word meaning <i>"the one who helps transform"</i>, and with this spirit of transformation we equip youth, women, and leaders to unleash their maximum potential</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-5 col-md-9 col-lg-5 col-xl-6">
                     <div class="test_box">
                        <div class="text-bg">
                           <a class="read_more   about-btn hero-btn shadow p-3 mx-2" href="#about">Get To Know Us</a>
                           <a class="Donate-btn-outline   contact-btn shadow p-3 mb-5 mx-2 hero_btn"
                              href="#contact_section">Contact</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Banner -->

   <!-- Catalog Cards -->
   <div class="card_one catalog-cards">
      <div class="container">
         <div class="row ">
            <div class="col-lg-4 mb-4 margin_top_lil">
               <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded card_zoom">
                  <div class="card-body">
                     <a href="ashagari_youth.html" class="stretched-link">
                        <h1 class="card-title" style="font-weight: bold;">Ashagari Youth</h1>
                        <p class="card-text">
                           Build conscious, skilled and empowered youth community
                        </p>
                     </a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 mb-4 margin_top_lil">
               <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded card_zoom">
                  <div class="card-body">
                     <a href="ashagari_woman.html">
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
                     <a href="ashagari_leader.html">
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
   <section id="events   events-section">

   </section>
   <!----------- End Events Section ----------->


   <!----------- About Section ----------->
   {{-- <section id="about   about-section">
      <div class="about" style="margin-top: 0 !important; padding-top: 0 !important;">
         <div class="container" id="about">
            <div class="row d_flex">
               <div class="col-md-6 ">
                  <div class="titlepage mx-auto my-5">
                     <h4 style="text-decoration: underline !important;">About Us</h4>
                     <h2 style="text-align: left;">Who We Are</h2>
                     <p style="text-align: left;">Ashagari Charitable Organization (ACO) is a non profit organization
                        founded and currently operating in Ethiopia recognised as a Civil Society Organisation by the
                        FDRE.
                        We are mainly focused on <b>Skill Development</b>, <b>Leadership Empowerment</b> and <b>Capacity
                           Building</b> on <i>Youth</i>
                        and <i>Woman</i>, ultimately adding a substantial value to their lives and develop the social
                        economy.</p>
                  </div>
               </div>

               <div class="col-md-6" style="margin-top: 0 !important; top: 0 !important; padding-top: 0 !important;">
                  <div class="row d_flex">
                     <div class="col-md-6  margin_top_bottom">
                        <i class="fa fa-magnet fa-3x circle-icon mx-auto  "></i>
                        <h2 class="my-3 font-weight-bold">Personal Development</h2>
                        <p class="mb-3">Help individuals with coaching and mentorship to develop the nedded social,
                           economic and personal skills to create a sustained wellbeing and lifestyle for themselves.
                        </p>
                     </div>
                     <div class="col-md-6  margin_top_bottom">
                        <i class="fa fa-refresh fa-3x circle-icon mx-auto  "></i>
                        <h2 class="my-3 font-weight-bold">Community Development</h2>
                        <p class="mb-3">Support and train groups of individuals or corporations to create a suitable
                           enviroment for better communication productivity, capacity awareness and development.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!----------- End About Section ----------->


   <!----------- Values Section ----------->
   {{-- <section class="core_value_bg card_two   values-section">
      <div class="container">
         <div class="titlepage m-7 p-5">
            <h2 class="text-center">Our Core Values</h2>
            <p class="text-center mx-auto pb-5 fs-2x" style="color: rgb(56, 55, 55) !important;">“<span
                  style="font-style: italic !important; font-weight: 700 !important;">If an egg is broken by an
                  outside force, life ends. If broken by an inside force, life begins. Great things always begin from
                  the inside.</span>” <span style="color: #090807;">– Jim Kwik.</span></p>

         </div>
         <div class="row" style="margin: 0 !important; padding: 0 !important;">
            <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
               <div class="card shadow p-3 mb-5 card_bg rounded">
                  <div class="card-body">
                     <i class="fa fa-child fa-5x p-2 " aria-hidden="true" style="text-align: center;
                        width: 100%; font-size: 28px !important;"></i>
                     <h1 class="card_title ">Passion & Care</h1>
                     <p class="card-text center"
                        style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: lowercase !important;">
                        Respect the wellbeing and dignity of all those we will train and mentor
                     </p>
                  </div>
               </div>
            </div>

            <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
               <div class="card shadow p-3 mb-5 card_bg rounded">
                  <div class="card-body">
                     <i class="fa fa-balance-scale fa-5x p-2 " aria-hidden="true" style="text-align: center;
                        width: 100%; font-size: 28px !important;"></i>
                     <h1 class="card_title ">Accountability & Ethics</h1>
                     <p class="card-text center"
                        style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: lowercase !important;">
                        Hold highest ethical standards in our workk and take responsibility for the consequence of
                        our action
                     </p>
                  </div>
               </div>
            </div>

            <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
               <div class="card shadow p-3 mb-5 card_bg rounded">
                  <div class="card-body">
                     <i class="fa fa-users fa-5x p-2 " aria-hidden="true" style="text-align: center;
                        width: 100%; font-size: 28px !important;"></i>
                     <h1 class="card_title ">Diversity</h1>
                     <p class="card-text center"
                        style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: lowercase !important;">
                        Recognise and accomodate the uniqueness of our diverse population
                     </p>
                  </div>
               </div>
            </div>

            <div class="col" style="margin-left: 5px !important; margin-right: 5px !important; padding: 0 !important;">
               <div class="card shadow p-3 mb-5 card_bg rounded">
                  <div class="card-body">
                     <i class="fa fa-handshake-o fa-5x p-2 " aria-hidden="true" style="text-align: center;
                        width: 100%; font-size: 28px !important;"></i>
                     <h1 class="card_title ">Partneship & Collaboration</h1>
                     <p class="card-text center"
                        style="font-weight: 300 !important; text-align: center !important; padding-top: 12px !important; text-transform: lowercase !important;">
                        Share responsibilities to integrate quality service for continous positive impact
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!----------- End Values Section ----------->


   <!----------- Counter Section ----------->
   <section class="stat_bg wow fadeIn animated p-5 counter-section"
      style=" background-color: #090807; visibility: visible; animation-name: fadeIn; ;">
      <div class="container">
         <div class="row">
            <div
               class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
               data-wow-duration="300ms"
               style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
               <i class="fa fa-beer medium-icon"></i>
               <span id="anim-number-pizza" class="counter-number"></span>
               <span class="timer counter alt-font appear" data-to="980" data-speed="7000">130000</span>
               <p class="counter-title">Trainees</p>
            </div>
            
            <div
               class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
               data-wow-duration="600ms"
               style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
               <i class="fa fa-heart medium-icon"></i>
               <span class="timer counter alt-font appear" data-to="980" data-speed="7000">160</span>
               <span class="counter-title">Volunteers</span>
            </div>
            
            <div
               class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
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
                  <a href="#"><img src="{{ asset('images/clients/client1.png') }}" class="img-fluid" style="height: 120px !important;"
                        alt="Addis Ababa University"></a>
               </div>
               <div class="col-lg-4 col-md-4 col-6">
                  <a href="#"><img src="{{ asset('images/clients/client2.png') }}" class="img-fluid" style="height: 120px !important;"
                        alt="Addis Ababa City Administration"></a>
               </div>
               <div class="col-lg-4 col-md-4 col-6">
                  <a href="#"><img src="{{ asset('images/clients/client3.png') }}" class="img-fluid" style="height: 120px !important;"
                        alt="Ministry of Women and Children, FDRE"></a>
               </div>
            </div>
         </div>
      </section>

   </div>
   <!----------- End Clients Section ----------->


   <!----------- Social Media Section ----------->
   <div class="juices   news-section">
      <div class="container ">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h4>Read Our</h4>
                  <h2>Latest Post</h2>
               </div>

               <h6 class="titlepage p-5" style="font-weight: 200 !important; text-transform: lowercase !important;">No
                  blogs have been posted yet</h6>
            </div>
         </div>

         {{-- <div class="row">
               <div class="col-lg-4 mb-4 mt-n10px ">
                  <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded   scm-card" >
                        <img class="card-img-top-post" src="/images/Event2.jpg" style="width: 125%;" alt="">
                        <div class="card-body">
                           <h1 class="card-title" style="font-weight: bold;" >Ashagari Leader</h1>
                           <p class="card-text">
                              Some quick example text to build on the 
                              card title and make up the bulk of the 
                              card's content. 
                           </p>
                           <h3 class="font-weight-bold mt-3">Abebe kebed</h3>
                           <a href="#" class="">
                              June 16,2022
                           </a>

                           <div class="social-post text-center pt-4 ">
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-youtube-play" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa  fa-xs fa-share-alt" aria-hidden="true"></i></a>
                           </div>
                        </div>
                  </div>
               </div>
            
               <div class="col-lg-4 mb-4 mt-n10px ">
                  <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded   scm-card" >
                        <img class="card-img-top-post" src="/images/Event2.jpg" style="width: 125%;" alt="">
                        <div class="card-body">
                           <h1 class="card-title" style="font-weight: bold;" >Ashagari Leader</h1>
                           <p class="card-text">
                              Some quick example text to build on the 
                              card title and make up the bulk of the 
                              card's content. 
                           </p>
                           <h3 class="font-weight-bold mt-3">Abebe kebed</h3>
                           <a href="#" class="">
                              June 16,2022
                           </a>

                           <div class="social-post text-center pt-4 ">
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-youtube-play" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa  fa-xs fa-share-alt" aria-hidden="true"></i></a>
                           </div>
                        </div>
                  </div>
               </div>

               <div class="col-lg-4 mb-4 mt-n10px ">
                  <div class="card d-inline-flex  shadow p-3 mb-5 bg-white rounded   scm-card" >
                        <img class="card-img-top-post" src="/images/Event2.jpg" style="width: 125%;" alt="">
                        <div class="card-body">
                           <h1 class="card-title" style="font-weight: bold;" >Ashagari Leader</h1>
                           <p class="card-text">
                              Some quick example text to build on the 
                              card title and make up the bulk of the 
                              card's content. 
                           </p>
                           <h3 class="font-weight-bold mt-3">Abebe kebed</h3>
                           <a href="#" class="">
                              June 16,2022
                           </a>

                           <div class="social-post text-center pt-4 ">
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-facebook" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-instagram" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-youtube-play" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-2xs fa-linkedin" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-xs fa-twitter" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa  fa-xs fa-share-alt" aria-hidden="true"></i></a>
                           </div>
                        </div>
                  </div>
               </div>
         </div> --}}
      </div>
   </div>
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

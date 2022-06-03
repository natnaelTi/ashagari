<!----------- Footer Section ----------->
<footer class="text-left text-lg-start text-white" style="background-color: #23272B ">
   <div class="container py-4 pb-0">
      <section class="">
         <div class="row">
            <div class="col-md-3 col-lg-2 col-xl-3 mx-auto align-self-center">
               <img src="{{ asset('images/logo.svg') }}" width="60%" style="display: block; margin: auto auto 16px auto !important; text-align: center !important;"
                  class="filter-green" />

               <div class="social-post text-center">
                  <a href="https://www.facebook.com/AshagariConsulting" class="btn btn-outline-light btn-sm mr-2 px-3"><i
                        class="fa fa-2xs fa-facebook" aria-hidden="true"></i></a>
                  
                  <a href="https://www.youtube.com/channel/UCAtySlaYpbdJoyG8P1ncp2Q/sub?1"
                     class="btn btn-outline-light btn-sm mr-2 px-3"><i class="fa fa-2xs fa-youtube-play"
                        aria-hidden="true"></i></a>
                  <a href="https://www.linkedin.com/in/ashagari-mekdes" class="btn btn-outline-light btn-sm mr-2 px-3"><i
                        class="fa fa-2xs fa-linkedin" aria-hidden="true"></i></a>
                  <a href="https://t.me/ashagari" class="btn btn-outline-light btn-sm mr-2 px-3"><i
                        class="fa fa-xs fa-telegram" aria-hidden="true"></i></a>

               </div>
            </div>

            <hr class="w-100 clearfix d-md-none" />

            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mt-5">
               <h6 class="text-uppercase mb-4 font-weight-bold text-white">Contact</h6>
               <p><i class="fas fa fa-map-marker  " aria-hidden="true"></i> Addis Ababa, Bole, Friendship</p>

               <p><i class="fas fa fa-phone mr-3"></i> Office: +251 11 822 2332</p>
               <p><i class="fas fa fa-phone mr-3"></i>Mobile: +251 95 592 9299</p>
               <p><i class="fas fa fa-phone mr-3"></i>PO Box: 2260/1110</p>
               <p><i class="fas fa fa-envelope mr-3"></i>Email: info@ashagari.org</p>
            </div>

            <hr class="w-100 clearfix d-md-none" />

            <div class="col-md-5 col-lg-5 col-xl-2 mx-auto mt-5">
               <form action="{{route('subscribe')}}" method="POST">
                  <div class="row">
                     <label for="email">Subscribe to get updates on Ashagari right to your inbox.</label>
                     <input type="email" name="email" id="email" class="form-control input" placeholder="myemail@host.com"/>
                  </div>
               </form>
            </div>
         </div>
      </section>

      <hr class="my-1 " size="3" color=white>

      <section class="p-3 pt-0">
         <div class="row d-flex align-items-center">
            <div class="col-md-12 col-lg-12 text-center">
               <div class="p-3">
                  © 2022 Copyright:
                  <a class="text-white">Ashagari Charitable Organisation</a>
               </div>
            </div>
         </div>
      </section>
   </div>
</footer>
<!-- End Footer Section -->
<!----------- Header Section ----------->
<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="index.html"><img src="{{ asset('images/logo.svg') }}" width="70%" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                      aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                         </li>
                         <li class="nav-item ">
                            <a class="nav-link" href="{{ route('event') }}">Conferences</a>
                         </li>

                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
</header>
<!----------- End Header Section ----------->
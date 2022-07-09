@extends('layouts.guest')

@section('content')

<section class="contact_banner_main">
    <div class="container">
        <div class="row">
            <div class="col-12"
                style="text-align: right !important; padding-right: 0 !important; margin-right: 0 !important; right: 0 !important;">
                <div class="test_box">
                    <div class="text-bg margin_top_hero text-center">
                        <h1>Get in Touch</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------- Contact Section ----------->
<div id="contact_section" class="contact_section bg-white" style="display: block !important; position: relative !important;">
    <div class="titlepage text-center p-3 ">
        <h2 class="p-2 mt-5">Contact Us</h2>
    </div>
    <div class="row justify-content-center">
        <div class=" col-md-12 contact_form">
            <div class="wrapper">
                <div class="row no-gutters" style="width: 60%; margin: 0 auto !important;">
                    <div class="col-md-12 d-flex align-items-center align-self-center">
                        <div class="contact-wrap w-100 p-md-5 p-10">
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
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 col-md-12 col-sm-12 pl-5">
            <h2 class="mb-4">Office Address</h2>
            <p>Addis Ababa, Bole, Friendship Mall - 6th Floor, 603</p>
            <p>Addis Ababa, Ethiopia</p>
            
            <br/><br/>

            <h2 class="mb-4">Contact Info</h2>
            <p>Office:<a href="tel:+251118222332"> +251 11 822 2332 </a></p>
            <p>Mobile:<a href="tel:+251955929299"> +251 95 592 9299 </a></p>
            <p>P.O. Box: 2260/1110</p>
            <p>Email:<a href="mailto:info@ashagari.org"> info@ashagari.org</a></p>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.30050156666942!2d38.78598884693456!3d8.989805617967418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b84fb99570403%3A0x8a21e3ebfc8b4fc5!2zRnJpZW5kc2hpcCBCdXNpbmVzcyBDZW50ZXIgKOGNjeGIrOGKleGLteGIuuGNlSDhi6jhjIjhiaDhi6sg4Yib4Yql4Yqo4YiNKQ!5e0!3m2!1sen!2set!4v1656062628026!5m2!1sen!2set" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!----------- End Contact Section ----------->

@endsection
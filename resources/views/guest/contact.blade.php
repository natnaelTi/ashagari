@extends('layouts.guest')

@section('content')

<!----------- Contact Section ----------->
<div id="contact_section" class="contact_section bg-white" style="display: block !important; position: relative !important; padding-top: 70px !important;">
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
    <div class="row justify-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.30050156666942!2d38.78598884693456!3d8.989805617967418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b84fb99570403%3A0x8a21e3ebfc8b4fc5!2zRnJpZW5kc2hpcCBCdXNpbmVzcyBDZW50ZXIgKOGNjeGIrOGKleGLteGIuuGNlSDhi6jhjIjhiaDhi6sg4Yib4Yql4Yqo4YiNKQ!5e0!3m2!1sen!2set!4v1656062628026!5m2!1sen!2set" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!----------- End Contact Section ----------->

@endsection
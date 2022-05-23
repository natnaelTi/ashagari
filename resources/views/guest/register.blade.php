@extends('layouts.guest')

@section('content')
    <!-- Our Latest news -->
    <div class="juices" style="margin-top: 30px !important; padding-top: 100px !important;">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <h2>Registration</h2>

                        <p>Fill in the below form with all the fields to secure your spot on the event.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="reg"></div>
                <div class="form-container bg-white mx-auto mb-5">
                    <div class="head_title mx-5  ">
                        <h3 class="mt-3">Register</h3>
                        <h1 class="mt-2  font-weight-bold">Registration Form</h1>
                        <hr class="mb-5"
                            style="width:50%;text-align:left; height:2px;border-width:0;color:gray;background-color:#02A791">
                    </div>
                    <form method="POST" name="registration_form" id="registration_form" action="{{ route('store_rsvp') }}" class="cms-form">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="input-name">
                            <i class="fa fa-user lock"></i>
                            <input type="text" placeholder="First Name" class="name" name="firstname">
                            <span>
                                <i class="fa fa-user lock"></i>
                                <input type="text" placeholder="Last Name" class="name" name="lastname">
                            </span>
                        </div>

                        <div class="input-name">
                            <i class="fa fa-phone lock"></i>
                            <input type="text" placeholder="Phone Number" class="name" name="phone_number">
                            <span>
                                <i class="fa fa-envelope lock"></i>
                                <input type="text" placeholder="Email" class="name" name="email">
                            </span>
                        </div>

                        <div class="input-name">
                            <i class="fa fa-building lock" aria-hidden="true"></i>
                            <input type="text" placeholder="Occupation" class="name" name="occupation">
                            <span>
                                <label for="age" style="display: block !important;">Select Age Group</label>
                                <select id="age" class="name" name="age">
                                    <option value="<24">Less than 24 Years (< 24)</option>
                                    <option value="25<34">Between 25 and 34 (25 < 34)</option>
                                    <option value=">35">Greater than 35 Years (> 35)</option>
                                </select>
                            </span>
                        </div>

                        @if ($event->price > 0)
                            <div class="input-name">
                                {{-- <i class="fa fa-envelope lock"></i> --}}
                                <input type="text" placeholder="Transaction Number" class="name" name="transaction_id">
                            </div>
                        @endif

                        <div class="input-name">
                            <i class="fa fa-message lock"></i>
                            <textarea name="comment" id="message" cols="30" rows="10" placeholder="Message / Comment / Request / Feedback"
                                class="phone"></textarea>
                        </div>

                        <div class="input-name">
                            <label for="reference" style="display: block !important;">How did you hear about us?</label>
                            <select id="reference" class="name" name="reference">
                                <option value="telegram">Telegram Group</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="linkedin">LinkedIn</option>
                                <option value="wom">Word of Mouth</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <input type="hidden" name="event_id" value="{{ $event->id }}"/>

                        <div class="input-name">
                            <button type="submit" class="btn btn-secondary"
                                style="width: 100% !important; background-color: #02A791 !important; border: none !important;">Register</button>
                        </div>

                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- end Our   section -->
@endsection

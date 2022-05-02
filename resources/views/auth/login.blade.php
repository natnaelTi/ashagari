@extends('layouts.login')

@section('content')
    <div class="cms-login-container">
        <div class="cms-login-screen">
            <div class="cms-login-screen__content">
                <form class="cms-login" method="GET" action="{{ route('dashboard') }}">
                    <div class="cms-login__field">
                        <i class="cms-login__icon fa fa-user"></i>
                        <input type="text" class="cms-login__input" placeholder="User name / Email">
                    </div>
                    <div class="cms-login__field">
                        <i class="cms-login__icon fa fa-lock"></i>
                        <input type="password" class="cms-login__input" placeholder="Password">
                    </div>
                    <button class="button cms-login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="cms-login-button__icon fa fa-chevron-right"></i>
                    </button>
                </form>
                <div class="cms-login-social-login">
                    <h3>log in via</h3>
                    <div class="cms-login-social-icons">
                        <a href="#" class="cms-login-social-login__icon"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="cms-login-social-login__icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="cms-login-social-login__icon"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="cms-login-screen__background">
                <span class="cms-login-screen__background__shape cms-login-screen__background__shape4"></span>
                <span class="cms-login-screen__background__shape cms-login-screen__background__shape3"></span>
                <span class="cms-login-screen__background__shape cms-login-screen__background__shape2"></span>
                <span class="cms-login-screen__background__shape cms-login-screen__background__shape1"></span>
            </div>
        </div>
    </div>
@endsection

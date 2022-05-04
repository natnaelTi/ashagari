@extends('layouts.login')

@section('content')
    <div class="cms-login-container">
        <div class="cms-login-screen">
            <div class="cms-login-screen__content">
                <form class="cms-login" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="cms-login__field">
                        <i class="cms-login__icon fa fa-user"></i>
                        <input type="text" class="cms-login__input" placeholder="email" id="email" name="email" value="{{ old('email') ?? '' }}" required>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="cms-login__field">
                        <i class="cms-login__icon fa fa-lock"></i>
                        <input type="password" class="cms-login__input" placeholder="password" id="password" name="password" value="{{ old('password') ?? '' }}" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="cms-login__field">
                        <div class="form-check">
                            <label class="toggle" for="remember">
                                <input type="checkbox" class="toggle__input" id="remember" name="remember" value="{{ old('remember') ? 'checked' : '' }}" />
                                <span class="toggle-track">
                                    <span class="toggle-indicator">
                                        <!-- 	This check mark is optional	 -->
                                        <span class="checkMark">
                                            <svg viewBox="0 0 24 24" id="ghq-svg-check" role="presentation" aria-hidden="true">
                                                <path d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                                Remember Me
                            </label>
                            
                            <!-- <input class="form-check-input cms-login__check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label cms-login__label" for="remember">
                                {{ __('Remember Me') }}
                            </label> -->
                        </div>
                    </div>

                    <button class="button cms-login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="cms-login-button__icon fa fa-chevron-right"></i>
                    </button>
                    <div class="cms-login__link">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link cms-login__link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
                <!-- <div class="cms-login-social-login">
                    <h3>log in via</h3>
                    <div class="cms-login-social-icons">
                        <a href="#" class="cms-login-social-login__icon"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="cms-login-social-login__icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="cms-login-social-login__icon"><i class="fa fa-twitter"></i></a>
                    </div>
                </div> -->
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

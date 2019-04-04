<style>
        .header-inner {
            display: none;
        }
        .header-wrapper {
            display: none;
        }
        .top-nav {
            display: none;
        }
        .footer{
            display: none;
        }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title> {{ setting('store_name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/bootstrap.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/bootstrap-slider.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/fontawesome-all.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/slick.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/style.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/custom.css')) }}">
</head>

@extends('public.layout')

@section('title', trans('user::auth.register'))

@section('content')

<style>
.wrapper {
    position: unset;
}
</style>

<body class="fullpage">
        <div class="info-slider-holder" style="min-height:0px">
                <div class="info-holder">
                    <h6>A Service you can anytime modify.</h6>
                    <div class="bold-title">Bestway to learn<br>
                        Arduino <span> ThingerBits Core</span></div>
                    <div class="mini-testimonials-slider">
                        <div>
                            <div class="details-holder">
                                <h4>Chris Walker</h4>
                                <h5>CEO &amp; CO-Founder @HelloBrandio</h5>
                                <p>“In hostify we trust. I am with them for over
        7 years now. It always felt like home!
        Loved their customer support”</p>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
                <div class="form-holder">
                    <div class="menu-holder">
                        <ul class="main-links">
                            <li><a class="normal-link" href="signin.html">You have an account?</a></li>
                            <li><a class="sign-button" href="signin.html">Sign in</a></li>
                        </ul>
                    </div>
                    <div class="signin-signup-form">
                        <div class="form-items">
                            <div class="form-title">Sign up for new account</div>
                            <form method="POST"  id="signupform" action="{{ route('register.post') }}">
                                    {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 form-text">
                                        <input type="text" name="first_name" placeholder="First name" required>
                                    </div>
                                    <div class="col-md-6 form-text">
                                        <input type="text" name="last_name" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="form-text">
                                    <input type="text" name="email" placeholder="E-mail Address" required>
                                </div>
                                <div class="form-text">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>

                                <div class="form-text {{ $errors->has('password_confirmation') ? 'has-error': '' }}">
    
                                        <input type="password" name="password_confirmation" class="form-control" id="confirm-password">
    
                                        {!! $errors->first('password_confirmation', '<span class="error-message">:message</span>') !!}
                                </div>

                                <div class="checkbox">
                                        <input type="checkbox" name="privacy_policy" id="privacy">
        
                                        <label for="privacy">
                                            {{ trans('user::auth.i_agree_to_the') }} <a href="{{ $privacyPageURL }}">{{ trans('user::auth.privacy_policy') }}</a>
                                        </label>
        
                                        {!! $errors->first('privacy_policy','<span class="error-message">:message</span>') !!}
                                </div>

                                <div class="form-button">
                                    <button id="submit" type="submit" class="ybtn ybtn-accent-color">Create new account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

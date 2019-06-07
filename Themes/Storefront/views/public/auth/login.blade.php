@extends('public.layout')

@section('title', trans('user::auth.login'))

@section('content')

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
        .main, .wrapper {
            position: unset;
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

<body class="fullpage">            
                <div class="info-slider-holder" style="min-height:0px">
                    <div class="info-holder">
                        <h6></h6>
                        <div class="bold-title">Endless Learning Resources<br>
                            <span> {{ setting('store_name') }}</span></div>
                        <div class="mini-testimonials-slider">
                            <div>
                                <div class="details-holder">                                   
                                    <p>“An ever growing global network of STEM enthusiasts”</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="form-holder">
                    <div class="menu-holder">
                        <ul class="main-links">
                            <li><a class="normal-link" href="/register">Don’t have an account?</a></li>
                            <li><a class="sign-button" href="/register">Sign up</a></li>
                        </ul>
                    </div>
                    <div class="signin-signup-form" style="padding-bottom: 0px;">
                        <div class="form-items">
                            <div class="form-title">Sign in to your account</div>
                            <form id="signinform" method="POST" action="{{ route('login.post') }}">
                                {{ csrf_field() }}
                                <div class="form-text">
                                    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail Address" required>
                                </div>
                                <div class="form-text">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-button">
                                    <button id="submit" type="submit" class="ybtn ybtn-accent-color">Sign in</button>
                                    {{ trans('user::auth.login') }}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-wrapper" style="margin-top: 0px;">
                        @include('public.partials.notification')    
                        
                
                        <div class="social-login-buttons text-center">
                            @if (count(app('enabled_social_login_providers')) !== 0)
                                <span>{{ trans('user::auth.or') }}</span>
                            @endif
                
                            @if (setting('facebook_login_enabled'))
                                <a href="{{ route('login.redirect', ['provider' => 'facebook']) }}" class="btn btn-facebook">
                                    {{ Theme::image('public/images/facebook.png') }}
                                    {{ trans('user::auth.log_in_with_facebook') }}
                                </a>
                            @endif
                
                            @if (setting('google_login_enabled'))
                                <a href="{{ route('login.redirect', ['provider' => 'google']) }}" class="btn btn-google">
                                    {{ Theme::image('public/images/google.png') }}
                                    {{ trans('user::auth.log_in_with_google') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


   
@endsection

<script>
$('body,html').css("overflow","hidden");
</script>
<script src="{{ (Theme::url('public/HomeLand/js/jquery.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/bootstrap.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/bootstrap-slider.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/slick.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/main.js')) }}"></script>

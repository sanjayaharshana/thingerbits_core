<!doctype html>
<html>
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

<style>
.sidebar {
    display: none;
}
.header-inner {
    display: none;
}
.header-wrapper {
    display: none;
}
.top-nav {
    display: none;
}
</style>

<body>
<div id="header-holder" class="main-header">
    <div class="bg-animation">
        <div class="graphic-show">
            <img class="fix-size" src="{{ (Theme::url('public/HomeLand/images/graphic1.png')) }}" alt="">
            <img class="img img1" src="{{ (Theme::url('public/HomeLand/images/graphic1.png')) }}" alt="">
            <img class="img img2" src="{{ (Theme::url('public/HomeLand/images/graphic2.png')) }}" alt="">
            <img class="img img3" src="{{ (Theme::url('public/HomeLand/images/graphic3.png')) }}" alt="">
        </div>
    </div>
    
    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo-holder" href="index.html">
                                <div>{{ setting('store_name') }}</div>
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown unity-menu">
                                    <a href="#pricing">Traning</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">Arduino Workshop</a></li>
                                        <li><a href="blog.html">Arduino Course</a></li>                                        
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Learning Kits </a>                                    
                                </li>
                                <li><a href="../../whmcs/index.php?systpl=hostify">Programmes</a></li>
                                <li><a href="contact.html">Contact us</a></li>

                                @auth
                                <li class="dropdown unity-menu">
                                        <a href="#pricing">Account<i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-unity">
                                            <li>
                                                <a class="unity-link" href="{{ route('account.dashboard.index') }}">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="{{ (Theme::url('public/HomeLand/images/service-icon1.svg')) }}" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            Dashboard
                                                        </div>
                                                        <div class="unity-details">
                                                            Browse you self
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="unity-link" href="resellershosting.html">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="{{ (Theme::url('public/HomeLand/images/service-icon2.svg')) }}" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                           LMS
                                                        </div>
                                                        <div class="unity-details">
                                                            Let's Learn Arduino 
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="unity-link" href="cloudhosting.html">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="{{ (Theme::url('public/HomeLand/images/service-icon3.svg')) }}" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            Cloud Hosting
                                                        </div>
                                                        <div class="unity-details">
                                                            Fast as rocket
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="unity-link" href="vpshosting.html">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="{{ (Theme::url('public/HomeLand/images/service-icon4.svg')) }}" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            VPS Servers
                                                        </div>
                                                        <div class="unity-details">
                                                            Scalable hosting
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>                                            
                                            <li><a class="login" href="{{ route('logout') }}">Sign Out</a></li>
                                        </ul>
                                        
                                    </li>                                   
                                @else
                                     <li><a class="login-button" href="{{ route('login') }}">Login</a></li>
                                 @endauth
                               
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="/shop">Shop</a>                                   
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="main-slider">
                        <div class="slide">
                            <div class="noti-holder">
                                <a href="#">
                                    <div class="noti">
                                        <span class="badge">New</span><span class="text">Added new packages in cloud hosting.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="spacer"></div>
                            <div class="big-title">Your very <span>own space,</span><br>anywhere, anytime.</div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis atque corrupti quos dolores et quas molestias.</p>
                            <div class="btn-holder">
                                <a href="signup.html" class="ybtn ybtn-header-color">Register</a><a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="header-graphic" src="{{ (Theme::url('public/HomeLand/images/graphic1.png')) }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</div>
                
                <a href="signup.html" class="ybtn ybtn-accent-color ybtn-shadow">Create Your Account</a>
            </div>
        </div>
    </div>
</div>
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Services</div>
                <div class="row-subtitle">Designed to satisfy your creative needs.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ (Theme::url('public/HomeLand/images/service-icon1.svg')) }}" alt="">
                    </div>
                    <div class="service-title"><a href="webhosting.html">Web Hosting</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ (Theme::url('public/HomeLand/images/service-icon2.svg')) }}" alt="">
                    </div>
                    <div class="service-title"><a href="#">Resellers</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ (Theme::url('public/HomeLand/images/service-icon3.svg')) }}" alt="">
                    </div>
                    <div class="service-title"><a href="vpshosting.html">VPS Hosting</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="{{ (Theme::url('public/HomeLand/images/service-icon4.svg')) }}" alt="">
                    </div>
                    <div class="service-title"><a href="cloudhosting.html">Cloud Hosting</a></div>
                    <div class="service-details">
                        <p>At vero eos et accusamus et iusto odio dignissimos
ducimus qui blanditiis praesentium voluptatum div
atque corrupti quos dolores et quas molestias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message1" class="container-fluid message-area">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Are you ready?</div>
                <div class="text-other-color2">create an account, or contact us.</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="signup.html" class="ybtn ybtn-accent-color">Create Your Account</a><a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="pricing" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Web Hosting Plans</div>
                <div class="row-subtitle">Choose what's best</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-unity pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="{{ (Theme::url('public/HomeLand/images/service-icon1.svg')) }}" alt="">
                        </div>
                        <div class="pricing-title">Web Hosting</div>
                        <div class="price-title">Starting from</div>
                        <div class="pricing-price">$4.8</div>
                        <div class="pricing-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.<br>
                                Blanditiis praesentium voludiv.</p>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="webhosting.html">See web hosting plans</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-unity pricing-color2 featured">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon4.svg" alt="">
                        </div>
                        <div class="pricing-title">Cloud Server</div>
                        <div class="price-title">Starting from</div>
                        <div class="pricing-price">$10.8</div>
                        <div class="pricing-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.<br>
                                Blanditiis praesentium voludiv.</p>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="cloudhosting.html">See cloud servers plans</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="pricing-box pricing-unity pricing-color3">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon3.svg" alt="">
                        </div>
                        <div class="pricing-title">VPS Server</div>
                        <div class="price-title">Starting from</div>
                        <div class="pricing-price">$18.8</div>
                        <div class="pricing-details">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.<br>
                                Blanditiis praesentium voludiv.</p>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="vpshosting.html">See vps servers plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Testimonials</div>
                <div class="row-subtitle">What others said about us?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div id="testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person1.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas non ante non consequat. Aenean accumsan eros vel elit tristique, non sodales nunc luctus. Etiam vitae odio eget orci finibus auctor ut eget magna.</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/person2.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas non ante non consequat. Aenean accumsan eros vel elit tristique, non sodales nunc luctus. Etiam vitae odio eget orci finibus auctor ut eget magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Promise</div>
                <div class="row-subtitle">Your satisfaction is guaranteed. Indeed.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">%99.9 Uptime</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Money Back Guarantee</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Best Support</div>
                    <div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message2" class="container-fluid message-area normal-bg boxed">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Are you ready?</div>
                <div class="text-other-color2">create an account, or contact us.</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="signup.html" class="ybtn ybtn-accent-color">Create Your Account</a><a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ (Theme::url('public/HomeLand/js/jquery.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/bootstrap.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/bootstrap-slider.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/slick.min.js')) }}"></script>
<script src="{{ (Theme::url('public/HomeLand/js/main.js')) }}"></script>
</body>
</html>

<style>
.header-wrapper{
    display: none;
}
.footer{
    display: none;
}
.breadcrumb{
    display: none;
}
.list-inline{
    font-family: sans-serif;
}
.top-nav{
    display: none;
}

.a:focus, a:hover{
    text-decoration: none;
}
.megamenu-wrapper hidden-xs {
    display: none;
}
</style>
<link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/style.css')) }}">
<link rel="stylesheet" type="text/css" href="{{ (Theme::url('public/HomeLand/css/fontawesome-all.min.css')) }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    
    

@extends('public.layout')

@section('breadcrumb')
    @if (request()->routeIs('account.dashboard.index'))
        <li class="active">{{ trans('storefront::account.links.my_account') }}</li>
    @else
        <li><a href="{{ route('account.dashboard.index') }}">{{ trans('storefront::account.links.my_account') }}</a></li>
    @endif

    @yield('account_breadcrumb')
@endsection

<nav id="nav" class="navbar navbar-default navbar-fixed-top">
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
                            <a class="logo-holder" href="">
                                <p style="color:white;"><strong>Thingerbits</strong></p> 
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/">Home</a></li>
                                <li class="">
                                    <a href="#pricing">Traning</i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">Arduino Traning</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Learning Kits <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="about.html">Company</a></li>
                                      <li><a href="blog.html">Blog</a></li>
                                      <li><a href="domains.html">Domain List</a></li>
                                      <li><a href="ourservers.html">Servers</a></li>
                                      <li><a href="mapdata.html">Map Generator</a></li>
                                      <li><a href="horizontalpricing.html">Horizontal Pricing</a></li>
                                    </ul>
                                </li>
                                <li><a href="../../whmcs/index.php?systpl=hostify">WHMCS</a></li>
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
                                                <a class="unity-link" href="/shopcenter">
                                                    <div class="unity-box">
                                                        <div class="unity-icon">
                                                            <img src="{{ (Theme::url('public/HomeLand/images/service-icon3.svg')) }}" alt="">
                                                        </div>
                                                        <div class="unity-title">
                                                            Thingerbits Shop
                                                        </div>
                                                        <div class="unity-details">
                                                            Buy robotics items
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
                                                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%"><br><br><br>                                                 
    <a href="{{ route('account.dashboard.index') }}" li class="w3-bar-item w3-button" > Dashboard</a>                                             
    <a href="{{ route('skillpane') }}" li class="w3-bar-item w3-button" > Hows your Skill</a>                                             
    <a href="{{ route('coursexp') }}" li class="w3-bar-item w3-button" > Course Explorer</a>                                      
    <a href="{{ route('account.orders.index') }}" li class="w3-bar-item w3-button" >{{ trans('storefront::account.links.my_orders') }}</a>
    <a href="{{ route('account.wishlist.index') }}" li class="w3-bar-item w3-button" >Product Wishlist</a>
    <a href="{{ route('account.reviews.index') }}" li class="w3-bar-item w3-button" > {{ trans('storefront::account.links.my_reviews') }}</a>
    <a href="{{ route('account.profile.edit') }}" li class="w3-bar-item w3-button" >Profile</a>
    <h3 class="w3-bar-item">Lessons</h3>  
</div>

<div style="margin-left:25%">           
    <div class="w3-container"><br><br><br>         
          
          @yield('content_right')
    </div>
        
</div>
  
@section('content')
    <div class="row">
        <div class="my-account clearfix">
            <div class="col-md-3" style=" position: -webkit-sticky;position: sticky;top: 0;">
                <div class="sidebar-menu">
                   
                </div>
            </div>

            <div class="col-md-9">
                <div class="clearfix"></div>

                <div class="content-right clearfix">
                  
                </div>
            </div>
        </div>
    </div>
@endsection

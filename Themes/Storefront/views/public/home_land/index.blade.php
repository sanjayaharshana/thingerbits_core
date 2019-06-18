
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home1 SmartEdu</title>

    <!-- Bootstrap -->
    
    <link rel='stylesheet' href='{{ (Theme::url('public/visual_style/vendor/jquery-ui/jquery-ui.min.css')) }}'>
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/bootstrap/css/bootstrap.min.css')) }}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/fonts/line-awesome/css/line-awesome.min.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/fonts/font-awesome/css/font-awesome.min.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/fonts/font-awesome-5/css/fontawesome-all.min.css')) }}">

    <!-- Revolution slider -->
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/revolution/settings.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/revolution/layers.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/revolution/navigation.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/revolution/settings-source.css')) }}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/css-hamburgers/dist/hamburgers.min.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/slick/slick-theme.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/slick/slick.css')) }}">
    <link rel="stylesheet" href="{{ (Theme::url('public/visual_style/vendor/fancybox/dist/jquery.fancybox.min.css')) }}">
    <link rel='stylesheet' href='{{ (Theme::url('public/visual_style/vendor/fullcalendar/fullcalendar.cs')) }}' />
    <link rel='stylesheet' href='{{ (Theme::url('public/visual_style/vendor/animate/animate.css')) }}' />

    <!-- Main CSS File -->
    <link href="{{ (Theme::url('public/visual_style/css/style.css')) }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ (Theme::url('public/visual_style/favicon.png')) }}">
</head>

<body>

    <!-- page load-->
    <div class="images-preloader">
	    <div id="preloader_1 spinner1" class="spinner1 rectangle-bounce">
	    	<div class="double-bounce1"></div>
	    	<div class="double-bounce2"></div>
	    </div>
	</div>

    <!-- Header page -->
    <header class="header">
        <div class="header-top hidden-tablet-landscape">
            <div class="container">
                <div class="header-top-content display-flex">
                    <div class="header-top-info">
                        <div class="header-socials">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <a href="mailto:info@smartedu.com" class="email"><i class="far fa-envelope"></i>info@smartedu.com</a>
                        <a href="#" class="telephone"><i class="fas fa-mobile-alt"></i>+1 222-333-9999</a>
                    </div>
                    <div class="header-top-account">
                        <a href="{{ route('register') }}" class="signup"><i class="fas fa-edit"></i>Sign Up</a>
                        <a href="{{ route('login') }}" class="login">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-tablet-landscape" id="js-navbar-fixed">
            <div class="container">
                <div class="header-bottom">
                    <div class="header-bottom-content display-flex">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ (Theme::url('public/visual_style/images/logo.png')) }}" alt="SmartEdu">
                            </a>
                        </div>
                        <div class="menu-search display-flex">
                            <nav class="menu">
                                <div>
                                    <ul class="menu-primary">
                                        <li class="menu-item curent-menu-item">
                                            <a href="index.html">Home</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="index.html">Home 1</a></li>
                                                <li class="menu-item"><a href="index2.html">Home 2</a></li>
                                                <li class="menu-item"><a href="index3.html">Home 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="courses.html">Courses</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="courses.html">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="single-course.html">Course Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="standardlist.html">Standard List</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="aboutus.html">About us </a></li>
                                                <li class="menu-item"><a href="gallery1.html">Gallery 1</a></li>
                                                <li class="menu-item"><a href="gallery2.html">Gallery 2</a></li>
                                                <li class="menu-item"><a href="404.html">404</a></li>
                                                <li class="menu-item"><a href="pricing.html">Pricing Table</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="events.html">Events</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="events.html">Events</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="single-event.html">Event Detail</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog1.html">News</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog1.html">Blog 1</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="single.html">Blog detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="blog2.html">Blog 2</a></li>
                                                <li class="menu-item"><a href="blog3.html">Blog 3</a>
                                            </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="contact1.html">Contact</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="contact1.html">Contact 1</a></li>
                                                    <li class="menu-item"><a href="contact2.html">Contact 2</a></li>
                                                    <li class="menu-item"><a href="contact3.html">Contact 3</a></li>
                                                </ul>
                                            </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="search-box">
                                <form method="POST">
                                    <input type="text" placeholder="Search..." id="search-box" name="s" value="">
                                    <div class="search-icon display-flex-center">
                                        <i class="la la-search"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-tablet-landscape-up header-mobile">
            <div class="header-top-mobile">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ (Theme::url('public/visual_style/images/logo.png')) }}" alt="SmartEdu" />
                        </a>
                    </div>
                    <div class="search-box">
                        <form method="POST">
                            <input type="text" placeholder="Search..." name="s" value="">
                            <div class="search-icon font-color-white display-flex-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </form>
                    </div>
                    <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="au-nav-mobile">
                <nav class="menu-mobile">
                    <div>
                        <ul class="au-navbar-menu">
                            <li class="menu-item curent-menu-item">
                                <a href="index.html">Home</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Home 1</a></li>
                                    <li class="menu-item"><a href="index2.html">Home 2</a></li>
                                    <li class="menu-item"><a href="index3.html">Home 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="courses.html">Courses</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="courses.html">Courses</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="single-course.html">Course Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="standardlist.html">Standard List</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#">Pages</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="aboutus.html">About us </a></li>
                                    <li class="menu-item"><a href="gallery1.html">Gallery 1</a></li>
                                    <li class="menu-item"><a href="gallery2.html">Gallery 2</a></li>
                                    <li class="menu-item"><a href="404.html">404</a></li>
                                    <li class="menu-item"><a href="pricing.html">Pricing Table</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="events.html">Events</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="events.html">Events</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="single-event.html">Event Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="blog1.html">News</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog1.html">Blog 1</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="single.html">Blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="blog2.html">Blog 2</a></li>
                                    <li class="menu-item"><a href="blog3.html">Blog 3</a>
                                </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact1.html">Contact</a>
                                    <span class="arrow">
                                    <i></i>
                                </span>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="contact1.html">Contact 1</a></li>
                                        <li class="menu-item"><a href="contact2.html">Contact 2</a></li>
                                        <li class="menu-item"><a href="contact3.html">Contact 3</a></li>
                                    </ul>
                                </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- <div class="clear"></div> -->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-top-content display-flex">
                        <div class="header-top-info">
                            <a href="tel:04445552222" class="telephone"><span><i class="fas fa-mobile-alt"></i></span> +1 444-555-2222</a>
                            <a href="mailto:info@smartedu.com" class="email"><span><i class="far fa-envelope"></i></span> info@smartedu.com</a>
                        </div>
                        <div class="header-top-account">
                            <a href="#" class="login"><i class="fas fa-user"></i>Login</a>
                            <a href="#" class="signup"><i class="fas fa-edit"></i>Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </header>

    <main>
        <!-- Slide show -->
        <section class="slideshow">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="au_rev_slider" class="rev_slider fullscreenbanner slide-content" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-82" data-transition="papercut">
                        <!-- MAIN IMAGE -->
                        <img src="{{ (Theme::url('public/visual_style/images/home1-slideshow1.jpg')) }}" alt="">

                        <!-- LAYERS -->
                        <div class="tp-caption tp-resizeme slide-title" data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['-140','-140','-140','-140']" data-width="['870', '870', '870', '480']"
                            data-fontsize="['55','55','45','30']" data-color="['#fff']" data-fontweight="['bold']" data-textalign="['center']" data-lineheight="['58','58','40','40']">
                            BUILD YOUR SKILL TO BEST
                        </div>
                        <div class="tp-caption tp-resizeme slide-desc" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['-70', '-70', '-70', '-70']" data-width="['600', '600', '700', '380']"
                            data-height="['auto']" data-whitespace="normal" data-type="text" data-textalign="['center']" data-fontsize="['20','20','20','20']" data-color="['#fff']" data-lineheight="['58','58','40','40']">
                            Learning and teaching online easier for everyone.
                        </div>
                        <a href="#" class="au-btn tp-caption tp-resizeme slide-btn" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-responsive="on" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']" data-voffset="['12', '12', '12', '12']" data-width="['auto']" data-height="['auto']"
                            data-type="text" data-textalign="['center']" data-paddingtop="[13, 13, 13, 13]" data-paddingright="[53, 53, 53, 53]" data-paddingbottom="[13, 13, 13, 13]" data-paddingleft="[53, 53, 53, 53]" data-fontsize="['15','15','20','20']"
                            data-lineheight="['25']">
                            Read More
                        </a>
                    </li>
                </ul>
                <!-- <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div> -->
            </div>
            <!-- END REVOLUTION SLIDER -->
            <div class="slide-categories">
                <div class="container">
                    <div class="slide-categories-content">
                        <div class="item">
                            <a href="courses.html">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39px" height="39px">
                                <path fill-rule="eveno"
                                d="M10.066,21.092 C10.208,21.234 10.289,21.431 10.289,21.631 C10.289,21.831 10.208,22.028 10.066,22.169 C9.924,22.311 9.729,22.393 9.527,22.393 C9.327,22.393 9.131,22.311 8.989,22.169 C8.847,22.028 8.766,21.831 8.766,21.631 C8.766,21.431 8.847,21.234 8.989,21.092 C9.131,20.951 9.327,20.869 9.527,20.869 C9.728,20.869 9.924,20.951 10.066,21.092 ZM19.572,28.486 C19.151,28.486 18.810,28.146 18.810,27.725 C18.810,27.304 19.151,26.963 19.572,26.963 C19.993,26.963 20.337,27.304 20.337,27.725 C20.337,28.146 20.000,28.486 19.579,28.486 L19.572,28.486 ZM35.191,31.533 L23.613,31.533 L23.613,34.429 L24.679,34.429 C26.444,34.429 27.879,35.862 27.879,37.627 L27.879,38.237 C27.879,38.657 27.538,38.998 27.117,38.998 L11.883,38.998 C11.462,38.998 11.121,38.657 11.121,38.237 L11.121,37.627 C11.121,35.862 12.556,34.429 14.320,34.429 L15.387,34.429 L15.387,31.533 L3.809,31.533 C1.708,31.533 -0.000,29.825 -0.000,27.725 L-0.000,6.244 C-0.000,4.481 1.435,3.046 3.199,3.046 L3.807,3.046 C4.228,3.046 4.569,3.386 4.569,3.807 C4.569,4.227 4.228,4.568 3.807,4.568 L3.199,4.568 C2.275,4.568 1.523,5.320 1.523,6.244 L1.523,20.869 L6.633,20.869 C7.054,20.869 7.395,21.211 7.395,21.631 C7.395,22.052 7.054,22.393 6.633,22.393 L1.523,22.393 L1.523,23.917 L15.720,23.917 L15.720,17.651 L15.365,17.651 C14.945,17.651 14.603,17.310 14.603,16.889 C14.603,16.469 14.945,16.127 15.365,16.127 L15.431,16.127 L13.807,11.163 C13.712,10.871 13.801,10.551 14.033,10.351 L14.084,10.306 C15.912,8.724 17.403,6.754 18.437,4.568 L17.978,4.568 C17.557,4.568 17.216,4.227 17.216,3.807 L17.216,3.170 C12.604,4.172 9.147,8.169 8.808,12.886 L9.528,12.886 C9.948,12.886 10.289,13.227 10.289,13.648 L10.289,16.695 C10.289,17.115 9.948,17.456 9.528,17.456 L6.483,17.456 C6.063,17.456 5.721,17.115 5.721,16.695 L5.721,13.648 C5.721,13.227 6.063,12.886 6.483,12.886 L7.281,12.886 C7.448,10.199 8.495,7.635 10.272,5.599 C11.165,4.574 12.215,3.715 13.371,3.046 L9.804,3.046 C9.490,3.932 8.643,4.568 7.650,4.568 C6.390,4.568 5.365,3.544 5.365,2.284 C5.365,1.024 6.390,-0.001 7.650,-0.001 C8.643,-0.001 9.490,0.635 9.804,1.522 L17.216,1.522 L17.216,0.760 C17.216,0.339 17.557,-0.001 17.978,-0.001 L21.022,-0.001 C21.443,-0.001 21.784,0.339 21.784,0.760 L21.784,1.522 L29.196,1.522 C29.510,0.635 30.357,-0.001 31.350,-0.001 C32.610,-0.001 33.635,1.024 33.635,2.284 C33.635,3.544 32.610,4.568 31.350,4.568 C30.357,4.568 29.510,3.932 29.196,3.046 L25.615,3.046 C26.773,3.716 27.824,4.578 28.719,5.604 C30.493,7.640 31.538,10.201 31.705,12.886 L32.517,12.886 C32.937,12.886 33.278,13.227 33.278,13.648 L33.278,16.694 C33.278,17.115 32.937,17.456 32.517,17.456 L29.472,17.456 C29.052,17.456 28.711,17.115 28.711,16.694 L28.711,13.648 C28.711,13.227 29.052,12.886 29.472,12.886 L30.178,12.886 C29.840,8.175 26.388,4.179 21.784,3.173 L21.784,3.807 C21.784,4.227 21.443,4.568 21.022,4.568 L20.562,4.568 C21.596,6.753 23.088,8.724 24.916,10.306 L24.967,10.351 C25.199,10.551 25.288,10.871 25.192,11.163 L23.569,16.127 L23.800,16.127 C24.221,16.127 24.562,16.469 24.562,16.889 C24.562,17.310 24.221,17.651 23.800,17.651 L23.321,17.651 L23.321,23.917 L31.357,23.917 C31.778,23.917 32.119,24.258 32.119,24.678 C32.119,25.099 31.778,25.440 31.357,25.440 L1.523,25.440 L1.523,27.725 C1.523,28.984 2.549,30.011 3.809,30.011 L35.191,30.011 C36.451,30.011 37.476,28.984 37.476,27.725 L37.476,6.244 C37.476,5.321 36.725,4.568 35.801,4.568 L35.191,4.568 C34.771,4.568 34.430,4.227 34.430,3.807 C34.430,3.386 34.771,3.046 35.191,3.046 L35.801,3.046 C37.565,3.046 39.000,4.481 39.000,6.244 L39.000,27.725 C39.000,29.824 37.291,31.533 35.191,31.533 ZM8.766,14.409 L7.245,14.409 L7.245,15.933 L8.766,15.933 L8.766,14.409 ZM7.650,1.522 C7.230,1.522 6.888,1.863 6.888,2.284 C6.888,2.704 7.230,3.046 7.650,3.046 C8.070,3.046 8.412,2.704 8.412,2.284 C8.412,1.863 8.070,1.522 7.650,1.522 ZM31.350,3.046 C31.770,3.046 32.111,2.704 32.111,2.284 C32.111,1.863 31.770,1.522 31.350,1.522 C30.930,1.522 30.588,1.863 30.588,2.284 C30.588,2.704 30.930,3.046 31.350,3.046 ZM30.234,15.933 L31.755,15.933 L31.755,14.409 L30.234,14.409 L30.234,15.933 ZM20.260,1.522 L18.740,1.522 L18.740,3.046 L20.260,3.046 L20.260,1.522 ZM17.243,23.917 L21.798,23.917 L21.798,17.651 L17.243,17.651 L17.243,23.917 ZM21.966,16.127 L23.589,11.165 C22.305,10.000 21.183,8.655 20.262,7.185 L20.262,11.412 C20.262,11.833 19.921,12.174 19.500,12.174 C19.079,12.174 18.738,11.833 18.738,11.412 L18.738,7.185 C17.816,8.655 16.695,10.000 15.411,11.165 L17.034,16.127 L21.966,16.127 ZM14.320,35.952 C13.448,35.952 12.728,36.622 12.651,37.475 L26.348,37.475 C26.271,36.622 25.552,35.952 24.680,35.952 L14.320,35.952 ZM22.090,31.533 L16.910,31.533 L16.910,34.429 L22.090,34.429 L22.090,31.533 ZM35.299,24.139 C35.440,24.281 35.521,24.477 35.521,24.678 C35.521,24.879 35.440,25.075 35.299,25.217 C35.156,25.359 34.960,25.439 34.759,25.439 C34.559,25.439 34.363,25.359 34.221,25.217 C34.079,25.076 33.998,24.879 33.998,24.678 C33.998,24.477 34.079,24.281 34.221,24.139 C34.363,23.997 34.559,23.916 34.759,23.916 C34.960,23.916 35.156,23.997 35.299,24.139 Z"/>
                                </svg>
                                <span>UI Design</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="courses.html">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39px" height="39px">
                                <path fill-rule="evenodd"
                                d="M36.182,22.317 C34.891,22.317 33.802,21.444 33.469,20.259 L29.239,20.259 C28.818,20.259 28.477,19.919 28.477,19.498 C28.477,19.077 28.818,18.736 29.239,18.736 L33.469,18.736 C33.802,17.551 34.891,16.679 36.182,16.679 C37.736,16.679 39.000,17.944 39.000,19.498 C39.000,21.052 37.736,22.317 36.182,22.317 ZM36.182,18.203 C35.468,18.203 34.887,18.784 34.887,19.498 C34.887,20.212 35.468,20.793 36.182,20.793 C36.896,20.793 37.477,20.212 37.477,19.498 C37.477,18.784 36.896,18.203 36.182,18.203 ZM31.296,10.521 C30.804,10.521 30.332,10.395 29.915,10.160 L25.294,14.781 C25.146,14.930 24.951,15.004 24.756,15.004 C24.561,15.004 24.366,14.930 24.217,14.781 C23.920,14.483 23.920,14.001 24.217,13.703 L28.838,9.083 C28.603,8.666 28.477,8.194 28.477,7.702 C28.477,6.949 28.770,6.241 29.303,5.710 C29.835,5.177 30.543,4.884 31.296,4.884 C32.048,4.884 32.756,5.177 33.288,5.710 C34.387,6.808 34.387,8.596 33.288,9.695 C32.756,10.227 32.048,10.521 31.296,10.521 ZM32.211,6.786 C31.967,6.542 31.642,6.407 31.296,6.407 C30.950,6.407 30.625,6.542 30.380,6.786 C30.135,7.031 30.001,7.356 30.001,7.702 C30.001,8.048 30.135,8.373 30.380,8.618 C30.380,8.618 30.380,8.618 30.380,8.618 C30.380,8.618 30.380,8.618 30.380,8.618 C30.625,8.863 30.950,8.997 31.296,8.997 C31.642,8.997 31.967,8.863 32.211,8.618 C32.716,8.113 32.716,7.292 32.211,6.786 ZM20.261,5.530 L20.261,9.759 C20.261,10.179 19.920,10.521 19.499,10.521 C19.078,10.521 18.737,10.179 18.737,9.759 L18.737,5.530 C17.552,5.196 16.681,4.107 16.681,2.816 C16.681,1.262 17.945,-0.001 19.499,-0.001 C21.053,-0.001 22.317,1.262 22.317,2.816 C22.317,4.107 21.446,5.197 20.261,5.530 ZM19.499,1.522 C18.785,1.522 18.204,2.103 18.204,2.816 C18.204,3.531 18.785,4.112 19.499,4.112 C20.213,4.112 20.794,3.531 20.794,2.816 C20.794,2.103 20.213,1.522 19.499,1.522 ZM13.671,14.432 C13.477,14.432 13.282,14.357 13.133,14.208 L9.085,10.160 C8.668,10.395 8.196,10.521 7.704,10.521 C6.951,10.521 6.244,10.227 5.711,9.695 C4.612,8.596 4.612,6.808 5.711,5.710 C6.244,5.177 6.951,4.884 7.704,4.884 C8.457,4.884 9.165,5.177 9.697,5.710 C10.229,6.241 10.522,6.949 10.522,7.702 C10.522,8.194 10.397,8.666 10.162,9.083 L14.210,13.131 C14.508,13.429 14.508,13.911 14.210,14.208 C14.061,14.357 13.866,14.432 13.671,14.432 ZM8.620,6.786 C8.375,6.542 8.050,6.408 7.704,6.408 C7.358,6.408 7.033,6.542 6.789,6.786 C6.284,7.292 6.284,8.113 6.789,8.618 C7.033,8.863 7.358,8.997 7.704,8.997 C8.050,8.997 8.375,8.863 8.620,8.618 C8.620,8.618 8.620,8.618 8.620,8.618 C8.620,8.618 8.620,8.618 8.620,8.618 C8.865,8.373 8.999,8.048 8.999,7.702 C8.999,7.356 8.864,7.031 8.620,6.786 ZM9.750,18.736 C10.171,18.736 10.512,19.077 10.512,19.498 C10.512,19.919 10.171,20.259 9.750,20.259 L5.531,20.259 C5.198,21.444 4.108,22.317 2.818,22.317 C1.264,22.317 -0.000,21.052 -0.000,19.498 C-0.000,17.944 1.264,16.679 2.818,16.679 C4.108,16.679 5.198,17.551 5.531,18.736 L9.750,18.736 ZM2.818,18.203 C2.104,18.203 1.523,18.784 1.523,19.498 C1.523,20.212 2.104,20.793 2.818,20.793 C3.532,20.793 4.113,20.212 4.113,19.498 C4.113,18.784 3.532,18.203 2.818,18.203 ZM18.961,12.724 C18.818,12.582 18.737,12.386 18.737,12.185 C18.737,11.985 18.818,11.788 18.961,11.647 C19.102,11.505 19.298,11.424 19.499,11.424 C19.700,11.424 19.896,11.505 20.038,11.647 C20.179,11.788 20.261,11.985 20.261,12.185 C20.261,12.386 20.179,12.582 20.038,12.724 C19.896,12.865 19.700,12.947 19.499,12.947 C19.299,12.947 19.102,12.865 18.961,12.724 ZM19.503,14.775 C22.584,14.775 25.345,16.611 26.537,19.452 C26.699,19.840 26.517,20.286 26.129,20.449 C25.741,20.612 25.295,20.429 25.132,20.041 C24.178,17.768 21.969,16.299 19.503,16.299 C16.139,16.299 13.402,19.035 13.402,22.400 C13.402,22.821 13.062,23.162 12.641,23.162 C12.220,23.162 11.879,22.821 11.879,22.400 C11.879,18.196 15.299,14.775 19.503,14.775 ZM22.862,22.400 C22.862,20.547 21.355,19.041 19.503,19.041 C17.651,19.041 16.145,20.547 16.145,22.400 C16.145,22.821 15.804,23.162 15.383,23.162 C14.962,23.162 14.621,22.821 14.621,22.400 C14.621,19.708 16.811,17.517 19.503,17.517 C22.195,17.517 24.385,19.708 24.385,22.400 C24.385,22.821 24.044,23.162 23.624,23.162 C23.203,23.162 22.862,22.821 22.862,22.400 ZM25.604,22.399 L25.604,22.377 C25.602,21.956 25.942,21.613 26.362,21.611 C26.364,21.611 26.365,21.611 26.366,21.611 C26.785,21.611 27.126,21.950 27.128,22.370 L27.128,22.399 C27.128,22.821 26.786,23.161 26.366,23.161 C25.945,23.161 25.604,22.821 25.604,22.399 ZM13.560,30.457 C14.684,29.808 16.095,30.168 16.771,31.276 L17.208,31.995 L17.208,22.399 C17.208,21.134 18.238,20.105 19.503,20.105 C20.769,20.105 21.798,21.134 21.798,22.399 L21.798,26.029 C22.039,25.943 22.299,25.895 22.570,25.895 C23.159,25.895 23.696,26.119 24.103,26.484 C24.510,26.119 25.047,25.895 25.636,25.895 C26.593,25.895 27.415,26.484 27.759,27.319 C28.047,27.188 28.366,27.115 28.703,27.115 C29.968,27.115 30.998,28.145 30.998,29.410 L30.998,38.237 C30.998,38.657 30.657,38.998 30.236,38.998 C29.815,38.998 29.474,38.657 29.474,38.237 L29.474,29.410 C29.474,28.984 29.128,28.639 28.703,28.639 C28.277,28.639 27.931,28.984 27.931,29.410 L27.931,30.392 L27.931,31.906 C27.931,32.327 27.590,32.668 27.170,32.668 C26.749,32.668 26.408,32.327 26.408,31.906 L26.408,30.392 L26.408,29.410 L26.408,28.191 C26.408,27.766 26.062,27.419 25.636,27.419 C25.211,27.419 24.865,27.766 24.865,28.191 L24.865,28.739 L24.865,31.906 C24.865,32.327 24.524,32.668 24.103,32.668 C23.682,32.668 23.341,32.327 23.341,31.906 L23.341,28.739 L23.341,28.191 C23.341,27.766 22.995,27.419 22.570,27.419 C22.144,27.419 21.798,27.766 21.798,28.191 L21.798,31.906 C21.798,32.327 21.457,32.668 21.037,32.668 C20.616,32.668 20.275,32.327 20.275,31.906 L20.275,22.399 C20.275,21.974 19.929,21.628 19.503,21.628 C19.078,21.628 18.732,21.974 18.732,22.399 L18.732,34.708 C18.732,35.050 18.505,35.349 18.176,35.442 C17.847,35.534 17.497,35.396 17.319,35.105 L15.470,32.070 C15.228,31.673 14.724,31.544 14.322,31.776 C13.939,31.997 13.790,32.482 13.982,32.879 L16.409,37.906 C16.592,38.284 16.433,38.739 16.054,38.923 C15.947,38.974 15.835,38.998 15.723,38.998 C15.440,38.998 15.168,38.840 15.037,38.568 L12.610,33.542 C12.073,32.429 12.491,31.074 13.560,30.457 Z"/>
                                </svg>
                                <span>UX Design</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="courses.html">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="34px">
                                <path fill-rule="evenodd"
                                d="M31.426,13.587 L33.168,12.372 C33.515,12.130 34.000,12.202 34.253,12.534 C34.506,12.865 34.430,13.330 34.083,13.571 L32.341,14.787 C32.203,14.882 32.043,14.929 31.884,14.929 C31.644,14.929 31.408,14.823 31.256,14.624 C31.003,14.293 31.080,13.829 31.426,13.587 ZM32.228,19.003 C32.228,18.592 32.576,18.260 33.005,18.260 L36.467,18.260 C36.896,18.260 37.244,18.592 37.244,19.003 C37.244,19.413 36.896,19.745 36.467,19.745 L33.005,19.745 C32.576,19.745 32.228,19.413 32.228,19.003 ZM33.625,25.777 C33.467,25.777 33.307,25.731 33.168,25.635 L31.437,24.426 C31.090,24.185 31.014,23.721 31.267,23.390 C31.520,23.058 32.005,22.986 32.352,23.227 L34.084,24.435 C34.430,24.677 34.506,25.140 34.253,25.472 C34.101,25.672 33.865,25.777 33.625,25.777 ZM36.739,29.247 L30.554,29.247 C30.125,29.247 29.778,28.915 29.778,28.506 C29.778,28.095 30.126,27.762 30.554,27.762 L36.739,27.762 C37.681,27.762 38.447,27.030 38.447,26.129 L38.447,6.829 L4.917,6.829 C4.914,6.829 4.911,6.828 4.908,6.828 L4.908,8.912 L9.746,8.912 C10.175,8.912 10.523,9.244 10.523,9.655 C10.523,10.064 10.175,10.397 9.746,10.397 L4.908,10.397 L4.908,13.287 C4.908,13.696 4.561,14.029 4.132,14.029 C3.703,14.029 3.356,13.696 3.356,13.287 L3.356,3.116 C3.356,1.397 4.818,-0.001 6.616,-0.001 L36.739,-0.001 C38.537,-0.001 40.000,1.397 40.000,3.116 L40.000,26.129 C40.000,27.848 38.537,29.247 36.739,29.247 ZM38.447,3.116 C38.447,2.216 37.681,1.483 36.739,1.483 L6.616,1.483 C5.674,1.483 4.908,2.216 4.908,3.116 L4.908,5.344 C4.911,5.344 4.914,5.344 4.917,5.344 L38.447,5.344 L38.447,3.116 ZM7.983,2.671 C8.188,2.671 8.388,2.750 8.532,2.888 C8.677,3.026 8.760,3.218 8.760,3.414 C8.760,3.609 8.677,3.800 8.532,3.938 C8.388,4.076 8.188,4.156 7.983,4.156 C7.779,4.156 7.579,4.076 7.435,3.938 C7.290,3.800 7.207,3.609 7.207,3.414 C7.207,3.218 7.290,3.026 7.435,2.888 C7.579,2.750 7.779,2.671 7.983,2.671 ZM10.836,2.671 C11.041,2.671 11.241,2.750 11.385,2.888 C11.530,3.026 11.613,3.218 11.613,3.414 C11.613,3.609 11.530,3.800 11.385,3.938 C11.241,4.076 11.041,4.156 10.836,4.156 C10.632,4.156 10.432,4.076 10.288,3.938 C10.142,3.800 10.060,3.609 10.060,3.414 C10.060,3.218 10.143,3.026 10.288,2.888 C10.432,2.750 10.632,2.671 10.836,2.671 ZM13.690,2.671 C13.894,2.671 14.093,2.750 14.238,2.888 C14.383,3.026 14.466,3.218 14.466,3.414 C14.466,3.609 14.383,3.800 14.238,3.938 C14.093,4.076 13.894,4.156 13.690,4.156 C13.485,4.156 13.285,4.076 13.140,3.938 C12.996,3.800 12.913,3.609 12.913,3.414 C12.913,3.218 12.996,3.026 13.140,2.888 C13.285,2.750 13.485,2.671 13.690,2.671 ZM19.257,2.671 L35.372,2.671 C35.801,2.671 36.148,3.003 36.148,3.414 C36.148,3.823 35.801,4.156 35.372,4.156 L19.257,4.156 C18.829,4.156 18.481,3.823 18.481,3.414 C18.481,3.003 18.829,2.671 19.257,2.671 ZM11.715,10.178 C11.571,10.041 11.488,9.850 11.488,9.654 C11.488,9.459 11.571,9.268 11.715,9.129 C11.860,8.991 12.060,8.912 12.264,8.912 C12.469,8.912 12.669,8.991 12.813,9.129 C12.958,9.268 13.041,9.459 13.041,9.654 C13.041,9.850 12.957,10.041 12.813,10.178 C12.669,10.318 12.469,10.397 12.264,10.397 C12.060,10.397 11.860,10.318 11.715,10.178 ZM9.630,14.043 L27.042,8.945 C27.277,8.876 27.533,8.918 27.730,9.057 C27.928,9.197 28.045,9.419 28.045,9.655 L28.045,15.748 C29.598,16.086 30.761,17.417 30.761,19.003 C30.761,20.589 29.598,21.919 28.045,22.258 L28.045,28.351 C28.045,28.587 27.928,28.808 27.730,28.948 C27.595,29.043 27.433,29.094 27.269,29.094 C27.192,29.094 27.116,29.083 27.041,29.061 L15.022,25.542 C14.661,27.136 13.420,28.436 11.782,28.919 L12.157,30.635 C12.337,31.462 12.121,32.312 11.564,32.967 C11.007,33.622 10.181,33.999 9.298,33.999 C7.922,33.999 6.720,33.064 6.439,31.776 L4.730,23.942 C2.083,23.721 -0.000,21.591 -0.000,19.003 C-0.000,16.269 2.327,14.043 5.187,14.043 L9.630,14.043 ZM28.045,20.702 C28.729,20.415 29.208,19.762 29.208,19.003 C29.208,18.244 28.729,17.590 28.045,17.304 L28.045,20.702 ZM14.700,23.894 L22.792,26.264 L22.792,16.196 C22.792,15.786 23.140,15.453 23.568,15.453 C23.997,15.453 24.345,15.786 24.345,16.196 L24.345,26.718 L26.493,27.347 L26.493,27.347 L26.493,10.658 L10.523,15.335 L10.523,22.671 L14.456,23.823 C14.543,23.834 14.625,23.858 14.700,23.894 ZM11.464,27.456 C12.538,27.087 13.333,26.187 13.530,25.104 L10.775,24.297 L11.464,27.456 ZM7.959,31.474 C8.091,32.076 8.654,32.514 9.298,32.514 C9.712,32.514 10.099,32.338 10.359,32.031 C10.620,31.724 10.722,31.326 10.637,30.939 L10.108,28.511 C10.107,28.511 10.107,28.510 10.107,28.510 L9.115,23.962 L6.321,23.962 L7.959,31.474 ZM1.553,19.003 C1.553,20.919 3.183,22.477 5.187,22.477 L5.366,22.477 L8.970,22.477 L8.970,15.528 L5.187,15.528 C3.183,15.528 1.553,17.087 1.553,19.003 ZM23.568,12.477 C23.997,12.477 24.345,12.809 24.345,13.219 L24.345,13.230 C24.345,13.639 23.997,13.972 23.568,13.972 C23.140,13.972 22.792,13.639 22.792,13.230 L22.792,13.219 C22.792,12.809 23.140,12.477 23.568,12.477 Z"/>
                                </svg>
                                <span>Marketing</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="courses.html">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43px" height="40px">
                                <path fill-rule="evenodd"
                                d="M38.801,31.693 L26.035,31.693 L26.035,34.914 L27.211,34.914 C29.156,34.914 30.738,36.511 30.738,38.473 L30.738,39.151 C30.738,39.619 30.362,39.998 29.898,39.998 L13.101,39.998 C12.638,39.998 12.262,39.619 12.262,39.151 L12.262,38.473 C12.262,36.511 13.844,34.914 15.789,34.914 L16.965,34.914 L16.965,31.693 L4.199,31.693 C1.884,31.693 -0.000,29.792 -0.000,27.456 L-0.000,3.558 C-0.000,1.596 1.582,-0.001 3.527,-0.001 L39.473,-0.001 C41.417,-0.001 43.000,1.596 43.000,3.558 L43.000,27.456 C43.000,29.792 41.116,31.693 38.801,31.693 ZM15.789,36.608 C14.827,36.608 14.034,37.354 13.949,38.303 L29.051,38.303 C28.966,37.354 28.173,36.608 27.211,36.608 L15.789,36.608 ZM24.355,34.914 L24.355,31.693 L18.644,31.693 L18.644,34.914 L24.355,34.914 ZM41.320,3.558 C41.320,2.530 40.491,1.694 39.473,1.694 L22.340,1.694 L22.340,23.219 L41.320,23.219 L41.320,3.558 ZM41.320,24.914 L6.971,24.914 C6.507,24.914 6.131,24.534 6.131,24.067 C6.131,23.597 6.507,23.219 6.971,23.219 L20.660,23.219 L20.660,1.694 L3.527,1.694 C2.508,1.694 1.680,2.530 1.680,3.558 L1.680,27.456 C1.680,28.858 2.810,29.998 4.199,29.998 L38.801,29.998 C40.190,29.998 41.320,28.858 41.320,27.456 L41.320,24.914 ZM21.588,28.303 L21.579,28.303 C21.116,28.303 20.740,27.924 20.740,27.456 C20.740,26.987 21.116,26.608 21.579,26.608 C22.043,26.608 22.423,26.987 22.423,27.456 C22.423,27.924 22.051,28.303 21.588,28.303 ZM4.231,20.336 C4.231,19.869 4.607,19.489 5.071,19.489 L12.706,19.489 C13.170,19.489 13.546,19.869 13.546,20.336 C13.546,20.805 13.170,21.185 12.706,21.185 L5.071,21.185 C4.607,21.185 4.231,20.805 4.231,20.336 ZM16.055,19.489 L17.618,19.489 C18.082,19.489 18.458,19.868 18.458,20.336 C18.458,20.804 18.082,21.184 17.618,21.184 L16.055,21.184 C15.591,21.184 15.215,20.804 15.215,20.336 C15.215,19.868 15.591,19.489 16.055,19.489 ZM17.618,17.795 L11.842,17.795 C11.378,17.795 11.002,17.415 11.002,16.947 C11.002,16.479 11.378,16.100 11.842,16.100 L17.618,16.100 C18.082,16.100 18.458,16.479 18.458,16.947 C18.458,17.415 18.082,17.795 17.618,17.795 ZM17.618,14.405 L13.436,14.405 C12.973,14.405 12.596,14.025 12.596,13.557 C12.596,13.090 12.973,12.710 13.436,12.710 L17.618,12.710 C18.082,12.710 18.458,13.090 18.458,13.557 C18.458,14.025 18.082,14.405 17.618,14.405 ZM15.686,9.743 C15.522,9.909 15.307,9.992 15.092,9.992 C14.877,9.992 14.662,9.909 14.498,9.743 C14.170,9.412 14.170,8.876 14.498,8.545 L16.081,6.948 L14.498,5.350 C14.170,5.019 14.170,4.483 14.498,4.152 C14.826,3.820 15.358,3.820 15.686,4.152 L17.863,6.348 C18.191,6.679 18.191,7.215 17.863,7.547 L15.686,9.743 ZM10.357,10.016 C10.201,10.284 9.920,10.435 9.632,10.435 C9.487,10.435 9.341,10.397 9.207,10.317 C8.807,10.080 8.674,9.561 8.909,9.157 L11.983,3.878 C12.218,3.476 12.732,3.341 13.132,3.578 C13.532,3.815 13.666,4.334 13.431,4.738 L10.357,10.016 ZM7.841,9.743 C7.677,9.909 7.463,9.992 7.248,9.992 C7.033,9.992 6.818,9.909 6.654,9.743 L4.477,7.547 C4.149,7.215 4.149,6.679 4.477,6.348 L6.654,4.151 C6.982,3.820 7.513,3.820 7.841,4.151 C8.169,4.482 8.169,5.019 7.841,5.349 L6.258,6.948 L7.841,8.545 C8.169,8.876 8.169,9.412 7.841,9.743 ZM4.231,13.557 C4.231,13.090 4.607,12.710 5.071,12.710 L10.546,12.710 C11.010,12.710 11.386,13.090 11.386,13.557 C11.386,14.025 11.010,14.405 10.546,14.405 L5.071,14.405 C4.607,14.405 4.231,14.025 4.231,13.557 ZM7.808,17.795 L5.071,17.795 C4.607,17.795 4.231,17.415 4.231,16.947 C4.231,16.479 4.607,16.100 5.071,16.100 L7.808,16.100 C8.272,16.100 8.648,16.479 8.648,16.947 C8.648,17.415 8.272,17.795 7.808,17.795 ZM4.787,24.066 C4.787,24.289 4.697,24.508 4.541,24.666 C4.385,24.823 4.168,24.913 3.947,24.913 C3.726,24.913 3.510,24.823 3.353,24.666 C3.197,24.508 3.107,24.290 3.107,24.066 C3.107,23.843 3.197,23.625 3.353,23.467 C3.509,23.309 3.726,23.219 3.947,23.219 C4.168,23.219 4.385,23.309 4.541,23.467 C4.697,23.625 4.787,23.843 4.787,24.066 ZM24.870,3.388 L37.972,3.388 C38.435,3.388 38.811,3.767 38.811,4.236 L38.811,10.337 C38.811,10.805 38.435,11.185 37.972,11.185 L24.870,11.185 C24.406,11.185 24.030,10.805 24.030,10.337 L24.030,4.236 C24.030,3.767 24.406,3.388 24.870,3.388 ZM25.710,9.490 L37.132,9.490 L37.132,5.083 L25.710,5.083 L25.710,9.490 ZM24.907,12.710 L37.972,12.710 C38.435,12.710 38.811,13.090 38.811,13.557 C38.811,14.025 38.435,14.405 37.972,14.405 L24.907,14.405 C24.443,14.405 24.067,14.025 24.067,13.557 C24.067,13.090 24.443,12.710 24.907,12.710 ZM24.907,16.100 L37.972,16.100 C38.435,16.100 38.811,16.479 38.811,16.947 C38.811,17.415 38.435,17.795 37.972,17.795 L24.907,17.795 C24.443,17.795 24.067,17.415 24.067,16.947 C24.067,16.479 24.443,16.100 24.907,16.100 ZM24.907,19.489 L34.559,19.489 C35.023,19.489 35.399,19.869 35.399,20.336 C35.399,20.805 35.023,21.185 34.559,21.185 L24.907,21.185 C24.443,21.185 24.067,20.805 24.067,20.336 C24.067,19.869 24.443,19.489 24.907,19.489 ZM37.972,19.490 C38.193,19.490 38.408,19.580 38.565,19.739 C38.722,19.896 38.812,20.114 38.812,20.337 C38.812,20.560 38.722,20.779 38.565,20.937 C38.408,21.094 38.193,21.185 37.972,21.185 C37.750,21.185 37.534,21.094 37.378,20.937 C37.221,20.779 37.132,20.560 37.132,20.337 C37.132,20.114 37.221,19.896 37.378,19.739 C37.534,19.580 37.750,19.490 37.972,19.490 Z"/>
                                </svg>
                                <span>Developer</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="courses.html">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px">
                                <path fill-rule="evenodd"
                                d="M34.935,37.183 C32.591,38.590 30.248,39.888 30.225,39.901 C30.109,39.965 29.979,39.998 29.847,39.998 C29.714,39.998 29.578,39.965 29.462,39.901 C29.439,39.888 27.096,38.590 24.753,37.183 C22.122,35.603 19.688,33.614 19.688,29.790 L19.688,20.844 C19.688,20.548 19.854,20.278 20.119,20.146 L29.477,15.463 C29.585,15.407 29.707,15.374 29.838,15.373 C29.838,15.373 29.839,15.373 29.839,15.373 C29.840,15.373 29.840,15.373 29.841,15.373 C29.841,15.373 29.841,15.373 29.842,15.373 C29.843,15.373 29.843,15.373 29.844,15.373 C29.865,15.373 29.887,15.375 29.908,15.377 C29.908,15.377 29.908,15.377 29.908,15.377 C30.008,15.385 30.108,15.412 30.196,15.456 L39.568,20.146 C39.833,20.278 40.000,20.548 40.000,20.844 L40.000,29.790 C40.000,33.614 37.566,35.603 34.935,37.183 ZM38.437,21.327 L29.844,17.027 L21.250,21.327 L21.250,29.790 C21.250,32.677 22.898,34.246 25.557,35.843 C27.325,36.906 29.093,37.904 29.844,38.324 C30.595,37.904 32.363,36.906 34.131,35.843 C36.789,34.246 38.437,32.677 38.437,29.790 L38.437,21.327 ZM29.844,33.467 C26.656,33.467 24.062,30.874 24.062,27.686 C24.062,24.498 26.656,21.904 29.844,21.904 C33.031,21.904 35.625,24.498 35.625,27.686 C35.625,30.874 33.031,33.467 29.844,33.467 ZM29.844,23.467 C27.517,23.467 25.625,25.360 25.625,27.686 C25.625,30.012 27.517,31.904 29.844,31.904 C32.170,31.904 34.062,30.012 34.062,27.686 C34.062,25.360 32.170,23.467 29.844,23.467 ZM29.959,29.707 C29.812,29.853 29.614,29.935 29.406,29.935 C29.199,29.935 29.001,29.853 28.854,29.707 L27.472,28.324 C27.167,28.019 27.167,27.524 27.472,27.220 C27.777,26.914 28.272,26.914 28.577,27.220 L29.406,28.050 L31.618,25.837 C31.923,25.532 32.418,25.532 32.723,25.837 C33.028,26.143 33.028,26.636 32.723,26.942 L29.959,29.707 ZM30.272,9.347 C30.577,9.042 31.072,9.042 31.377,9.347 L33.187,11.157 C33.334,11.304 33.416,11.502 33.416,11.709 C33.416,11.917 33.334,12.115 33.187,12.262 L31.377,14.072 C31.225,14.224 31.025,14.301 30.825,14.301 C30.625,14.301 30.425,14.224 30.272,14.072 C29.967,13.766 29.967,13.272 30.272,12.967 L31.530,11.709 L30.272,10.452 C29.967,10.146 29.967,9.652 30.272,9.347 ZM27.955,8.862 C28.327,9.080 28.451,9.559 28.232,9.931 L25.677,14.280 C25.531,14.527 25.271,14.665 25.003,14.665 C24.868,14.665 24.732,14.630 24.608,14.557 C24.235,14.339 24.111,13.860 24.330,13.488 L26.885,9.139 C27.104,8.767 27.583,8.643 27.955,8.862 ZM36.094,16.717 C35.662,16.717 35.312,16.367 35.312,15.936 L35.312,7.186 L1.571,7.186 C1.568,7.186 1.565,7.185 1.562,7.185 L1.562,27.498 C1.562,28.446 2.333,29.217 3.281,29.217 L14.648,29.217 C15.080,29.217 15.430,29.568 15.430,29.998 C15.430,30.430 15.080,30.780 14.648,30.780 L3.281,30.780 C1.472,30.780 -0.000,29.308 -0.000,27.498 L-0.000,3.280 C-0.000,1.470 1.472,-0.001 3.281,-0.001 L33.594,-0.001 C35.403,-0.001 36.875,1.470 36.875,3.280 L36.875,15.936 C36.875,16.367 36.525,16.717 36.094,16.717 ZM35.312,3.280 C35.312,2.331 34.541,1.561 33.594,1.561 L3.281,1.561 C2.333,1.561 1.562,2.331 1.562,3.280 L1.562,5.624 C1.565,5.624 1.568,5.623 1.571,5.623 L35.312,5.623 L35.312,3.280 ZM4.657,2.811 C4.863,2.811 5.064,2.895 5.209,3.040 C5.355,3.185 5.438,3.386 5.438,3.592 C5.438,3.798 5.355,4.000 5.209,4.144 C5.064,4.289 4.862,4.373 4.657,4.373 C4.451,4.373 4.250,4.289 4.105,4.144 C3.959,4.000 3.876,3.798 3.876,3.592 C3.876,3.386 3.959,3.185 4.105,3.040 C4.250,2.894 4.451,2.811 4.657,2.811 ZM7.528,2.811 C7.733,2.811 7.935,2.895 8.080,3.040 C8.226,3.185 8.309,3.386 8.309,3.592 C8.309,3.798 8.226,4.000 8.080,4.144 C7.935,4.289 7.733,4.373 7.528,4.373 C7.323,4.373 7.121,4.289 6.976,4.144 C6.830,4.000 6.747,3.798 6.747,3.592 C6.747,3.386 6.830,3.185 6.976,3.040 C7.121,2.894 7.323,2.811 7.528,2.811 ZM10.399,2.811 C10.605,2.811 10.806,2.895 10.951,3.040 C11.097,3.185 11.180,3.386 11.180,3.592 C11.180,3.798 11.097,4.000 10.951,4.144 C10.806,4.289 10.605,4.373 10.399,4.373 C10.193,4.373 9.992,4.289 9.847,4.144 C9.701,4.000 9.618,3.798 9.618,3.592 C9.618,3.386 9.701,3.185 9.847,3.040 C9.992,2.894 10.193,2.811 10.399,2.811 ZM16.002,2.811 L32.218,2.811 C32.649,2.811 32.999,3.161 32.999,3.592 C32.999,4.024 32.649,4.373 32.218,4.373 L16.002,4.373 C15.570,4.373 15.221,4.024 15.221,3.592 C15.221,3.161 15.570,2.811 16.002,2.811 ZM16.361,23.904 L17.641,23.904 C18.072,23.904 18.422,24.255 18.422,24.686 C18.422,25.117 18.072,25.467 17.641,25.467 L16.361,25.467 C15.929,25.467 15.580,25.117 15.580,24.686 C15.580,24.255 15.929,23.904 16.361,23.904 ZM17.640,29.217 C17.847,29.217 18.048,29.301 18.194,29.446 C18.339,29.592 18.423,29.793 18.423,29.998 C18.423,30.204 18.339,30.405 18.194,30.551 C18.048,30.696 17.847,30.780 17.640,30.780 C17.435,30.780 17.234,30.696 17.088,30.551 C16.943,30.405 16.859,30.204 16.859,29.998 C16.859,29.793 16.943,29.592 17.088,29.446 C17.234,29.301 17.435,29.217 17.640,29.217 ZM18.422,20.311 C18.422,20.742 18.072,21.092 17.641,21.092 L10.198,21.092 C9.766,21.092 9.417,20.742 9.417,20.311 C9.417,19.880 9.766,19.530 10.198,19.530 L17.641,19.530 C18.072,19.530 18.422,19.880 18.422,20.311 ZM11.268,15.936 C11.268,16.142 11.184,16.343 11.039,16.488 C10.894,16.634 10.692,16.718 10.487,16.718 C10.281,16.718 10.080,16.634 9.934,16.488 C9.789,16.343 9.705,16.142 9.705,15.936 C9.705,15.730 9.789,15.530 9.934,15.383 C10.080,15.238 10.281,15.155 10.487,15.155 C10.692,15.155 10.894,15.238 11.039,15.383 C11.184,15.530 11.268,15.730 11.268,15.936 ZM5.427,10.779 L10.178,10.779 C10.609,10.779 10.959,11.130 10.959,11.561 C10.959,11.993 10.609,12.342 10.178,12.342 L5.427,12.342 C4.995,12.342 4.645,11.993 4.645,11.561 C4.645,11.130 4.995,10.779 5.427,10.779 ZM5.427,15.155 L7.802,15.155 C8.234,15.155 8.584,15.505 8.584,15.936 C8.584,16.367 8.234,16.717 7.802,16.717 L5.427,16.717 C4.995,16.717 4.645,16.367 4.645,15.936 C4.645,15.505 4.995,15.155 5.427,15.155 ZM5.427,23.904 L13.208,23.904 C13.639,23.904 13.989,24.255 13.989,24.686 C13.989,25.117 13.639,25.467 13.208,25.467 L5.427,25.467 C4.995,25.467 4.645,25.117 4.645,24.686 C4.645,24.255 4.995,23.904 5.427,23.904 ZM5.427,19.530 L7.249,19.530 C7.680,19.530 8.030,19.880 8.030,20.311 C8.030,20.742 7.680,21.092 7.249,21.092 L5.427,21.092 C4.995,21.092 4.645,20.742 4.645,20.311 C4.645,19.880 4.995,19.530 5.427,19.530 ZM13.564,12.343 C13.133,12.343 12.783,11.993 12.783,11.562 C12.783,11.130 13.133,10.781 13.564,10.781 L16.004,10.781 C16.436,10.781 16.785,11.130 16.785,11.562 C16.785,11.993 16.436,12.343 16.004,12.343 L13.564,12.343 ZM22.290,14.072 C22.137,14.224 21.937,14.301 21.737,14.301 C21.538,14.301 21.338,14.224 21.185,14.072 L19.375,12.262 C19.229,12.115 19.146,11.917 19.146,11.709 C19.146,11.502 19.229,11.303 19.375,11.157 L21.185,9.347 C21.490,9.042 21.985,9.042 22.290,9.347 C22.595,9.652 22.595,10.146 22.290,10.452 L21.032,11.709 L22.290,12.966 C22.595,13.272 22.595,13.766 22.290,14.072 ZM12.318,15.936 C12.318,15.505 12.667,15.155 13.099,15.155 L18.637,15.155 C19.068,15.155 19.418,15.505 19.418,15.936 C19.418,16.367 19.068,16.717 18.637,16.717 L13.099,16.717 C12.667,16.717 12.318,16.367 12.318,15.936 Z"/>
                                </svg>
                                <span>Protect</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="courses.html">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43px" height="40px">
                                <path fill-rule="evenodd"  fill="rgb(153, 153, 153)"
                                d="M38.801,31.693 L26.035,31.693 L26.035,34.914 L27.211,34.914 C29.156,34.914 30.738,36.511 30.738,38.473 L30.738,39.151 C30.738,39.619 30.362,39.998 29.898,39.998 L13.101,39.998 C12.638,39.998 12.262,39.619 12.262,39.151 L12.262,38.473 C12.262,36.511 13.844,34.914 15.789,34.914 L16.965,34.914 L16.965,31.693 L4.199,31.693 C1.884,31.693 -0.000,29.792 -0.000,27.456 L-0.000,3.558 C-0.000,1.596 1.582,-0.001 3.527,-0.001 L39.473,-0.001 C41.417,-0.001 43.000,1.596 43.000,3.558 L43.000,27.456 C43.000,29.792 41.116,31.693 38.801,31.693 ZM15.789,36.608 C14.827,36.608 14.034,37.354 13.949,38.303 L29.051,38.303 C28.966,37.354 28.173,36.608 27.211,36.608 L15.789,36.608 ZM24.355,34.914 L24.355,31.693 L18.644,31.693 L18.644,34.914 L24.355,34.914 ZM41.320,3.558 C41.320,2.530 40.491,1.694 39.473,1.694 L22.340,1.694 L22.340,23.219 L41.320,23.219 L41.320,3.558 ZM41.320,24.914 L6.971,24.914 C6.507,24.914 6.131,24.534 6.131,24.067 C6.131,23.597 6.507,23.219 6.971,23.219 L20.660,23.219 L20.660,1.694 L3.527,1.694 C2.508,1.694 1.680,2.530 1.680,3.558 L1.680,27.456 C1.680,28.858 2.810,29.998 4.199,29.998 L38.801,29.998 C40.190,29.998 41.320,28.858 41.320,27.456 L41.320,24.914 ZM21.588,28.303 L21.579,28.303 C21.116,28.303 20.740,27.924 20.740,27.456 C20.740,26.987 21.116,26.608 21.579,26.608 C22.043,26.608 22.423,26.987 22.423,27.456 C22.423,27.924 22.051,28.303 21.588,28.303 ZM4.231,20.336 C4.231,19.869 4.607,19.489 5.071,19.489 L12.706,19.489 C13.170,19.489 13.546,19.869 13.546,20.336 C13.546,20.805 13.170,21.185 12.706,21.185 L5.071,21.185 C4.607,21.185 4.231,20.805 4.231,20.336 ZM16.055,19.489 L17.618,19.489 C18.082,19.489 18.458,19.868 18.458,20.336 C18.458,20.804 18.082,21.184 17.618,21.184 L16.055,21.184 C15.591,21.184 15.215,20.804 15.215,20.336 C15.215,19.868 15.591,19.489 16.055,19.489 ZM17.618,17.795 L11.842,17.795 C11.378,17.795 11.002,17.415 11.002,16.947 C11.002,16.479 11.378,16.100 11.842,16.100 L17.618,16.100 C18.082,16.100 18.458,16.479 18.458,16.947 C18.458,17.415 18.082,17.795 17.618,17.795 ZM17.618,14.405 L13.436,14.405 C12.973,14.405 12.596,14.025 12.596,13.557 C12.596,13.090 12.973,12.710 13.436,12.710 L17.618,12.710 C18.082,12.710 18.458,13.090 18.458,13.557 C18.458,14.025 18.082,14.405 17.618,14.405 ZM15.686,9.743 C15.522,9.909 15.307,9.992 15.092,9.992 C14.877,9.992 14.662,9.909 14.498,9.743 C14.170,9.412 14.170,8.876 14.498,8.545 L16.081,6.948 L14.498,5.350 C14.170,5.019 14.170,4.483 14.498,4.152 C14.826,3.820 15.358,3.820 15.686,4.152 L17.863,6.348 C18.191,6.679 18.191,7.215 17.863,7.547 L15.686,9.743 ZM10.357,10.016 C10.201,10.284 9.920,10.435 9.632,10.435 C9.487,10.435 9.341,10.397 9.207,10.317 C8.807,10.080 8.674,9.561 8.909,9.157 L11.983,3.878 C12.218,3.476 12.732,3.341 13.132,3.578 C13.532,3.815 13.666,4.334 13.431,4.738 L10.357,10.016 ZM7.841,9.743 C7.677,9.909 7.463,9.992 7.248,9.992 C7.033,9.992 6.818,9.909 6.654,9.743 L4.477,7.547 C4.149,7.215 4.149,6.679 4.477,6.348 L6.654,4.151 C6.982,3.820 7.513,3.820 7.841,4.151 C8.169,4.482 8.169,5.019 7.841,5.349 L6.258,6.948 L7.841,8.545 C8.169,8.876 8.169,9.412 7.841,9.743 ZM4.231,13.557 C4.231,13.090 4.607,12.710 5.071,12.710 L10.546,12.710 C11.010,12.710 11.386,13.090 11.386,13.557 C11.386,14.025 11.010,14.405 10.546,14.405 L5.071,14.405 C4.607,14.405 4.231,14.025 4.231,13.557 ZM7.808,17.795 L5.071,17.795 C4.607,17.795 4.231,17.415 4.231,16.947 C4.231,16.479 4.607,16.100 5.071,16.100 L7.808,16.100 C8.272,16.100 8.648,16.479 8.648,16.947 C8.648,17.415 8.272,17.795 7.808,17.795 ZM4.787,24.066 C4.787,24.289 4.697,24.508 4.541,24.666 C4.385,24.823 4.168,24.913 3.947,24.913 C3.726,24.913 3.510,24.823 3.353,24.666 C3.197,24.508 3.107,24.290 3.107,24.066 C3.107,23.843 3.197,23.625 3.353,23.467 C3.509,23.309 3.726,23.219 3.947,23.219 C4.168,23.219 4.385,23.309 4.541,23.467 C4.697,23.625 4.787,23.843 4.787,24.066 ZM24.870,3.388 L37.972,3.388 C38.435,3.388 38.811,3.767 38.811,4.236 L38.811,10.337 C38.811,10.805 38.435,11.185 37.972,11.185 L24.870,11.185 C24.406,11.185 24.030,10.805 24.030,10.337 L24.030,4.236 C24.030,3.767 24.406,3.388 24.870,3.388 ZM25.710,9.490 L37.132,9.490 L37.132,5.083 L25.710,5.083 L25.710,9.490 ZM24.907,12.710 L37.972,12.710 C38.435,12.710 38.811,13.090 38.811,13.557 C38.811,14.025 38.435,14.405 37.972,14.405 L24.907,14.405 C24.443,14.405 24.067,14.025 24.067,13.557 C24.067,13.090 24.443,12.710 24.907,12.710 ZM24.907,16.100 L37.972,16.100 C38.435,16.100 38.811,16.479 38.811,16.947 C38.811,17.415 38.435,17.795 37.972,17.795 L24.907,17.795 C24.443,17.795 24.067,17.415 24.067,16.947 C24.067,16.479 24.443,16.100 24.907,16.100 ZM24.907,19.489 L34.559,19.489 C35.023,19.489 35.399,19.869 35.399,20.336 C35.399,20.805 35.023,21.185 34.559,21.185 L24.907,21.185 C24.443,21.185 24.067,20.805 24.067,20.336 C24.067,19.869 24.443,19.489 24.907,19.489 ZM37.972,19.490 C38.193,19.490 38.408,19.580 38.565,19.739 C38.722,19.896 38.812,20.114 38.812,20.337 C38.812,20.560 38.722,20.779 38.565,20.937 C38.408,21.094 38.193,21.185 37.972,21.185 C37.750,21.185 37.534,21.094 37.378,20.937 C37.221,20.779 37.132,20.560 37.132,20.337 C37.132,20.114 37.221,19.896 37.378,19.739 C37.534,19.580 37.750,19.490 37.972,19.490 Z"/>
                                </svg>
                                <span>Web Developer</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured -->
        <section class="featured section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>Our Featured</h2>
                </div>
                <div class="featured-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="74px" height="74px">
                                        <path fill-rule="evenodd" 
                                        d="M72.806,73.999 L53.710,73.999 C52.993,73.999 52.516,73.522 52.516,72.806 L52.516,65.644 C52.516,60.990 56.216,57.289 60.871,57.289 L65.645,57.289 C70.300,57.289 74.000,60.990 74.000,65.644 L74.000,72.806 C74.000,73.522 73.522,73.999 72.806,73.999 ZM64.452,59.676 L62.064,59.676 L62.064,60.393 L63.258,61.586 L64.452,60.393 L64.452,59.676 ZM71.613,65.644 C71.613,62.780 69.584,60.393 66.839,59.797 L66.839,60.870 C66.839,61.228 66.719,61.467 66.481,61.706 L64.093,64.093 C63.616,64.570 62.900,64.570 62.423,64.093 L60.035,61.706 C59.797,61.467 59.677,61.228 59.677,60.870 L59.677,59.797 C56.932,60.393 54.903,62.780 54.903,65.644 L54.903,71.613 L57.290,71.613 L57.290,66.838 L59.677,66.838 L59.677,71.613 L66.839,71.613 L66.839,66.838 L69.226,66.838 L69.226,71.613 L71.613,71.613 L71.613,65.644 ZM34.613,4.774 C36.642,4.774 38.194,6.325 38.194,8.354 C38.194,8.473 38.194,8.473 38.194,8.593 C39.745,10.025 40.581,12.174 40.581,14.322 C40.581,16.470 39.745,18.619 38.194,20.051 C38.194,20.170 38.194,20.170 38.194,20.290 C38.194,22.319 36.642,23.870 34.613,23.870 C32.584,23.870 31.032,22.319 31.032,20.290 C31.032,20.170 31.032,20.170 31.032,20.051 C29.839,18.857 29.003,17.306 28.764,15.515 L23.632,15.515 C23.274,16.470 22.558,17.306 21.484,17.664 C19.693,18.380 17.664,17.425 16.948,15.515 C16.232,13.725 17.187,11.696 19.097,10.980 C20.887,10.264 22.916,11.218 23.632,13.128 L28.764,13.128 C28.884,11.457 29.719,9.786 31.032,8.593 C31.032,8.473 31.032,8.473 31.032,8.354 C31.032,6.325 32.584,4.774 34.613,4.774 ZM20.290,13.128 C19.574,13.128 19.097,13.606 19.097,14.322 C19.097,15.038 19.574,15.515 20.290,15.515 C21.006,15.515 21.484,15.038 21.484,14.322 C21.484,13.606 21.006,13.128 20.290,13.128 ZM34.613,7.161 C33.897,7.161 33.419,7.638 33.419,8.354 C33.419,9.070 33.897,9.548 34.613,9.548 C35.329,9.548 35.806,9.070 35.806,8.354 C35.806,7.638 35.329,7.161 34.613,7.161 ZM34.613,21.483 C35.329,21.483 35.806,21.006 35.806,20.290 C35.806,19.574 35.329,19.096 34.613,19.096 C33.897,19.096 33.419,19.574 33.419,20.290 C33.419,21.006 33.897,21.483 34.613,21.483 ZM32.106,17.783 C33.539,16.470 35.687,16.470 37.119,17.783 C37.835,16.709 38.194,15.515 38.194,14.322 C38.194,13.128 37.835,11.935 37.119,10.861 C35.687,12.174 33.539,12.174 32.106,10.861 C31.390,11.935 31.032,13.128 31.032,14.322 C31.032,15.515 31.390,16.709 32.106,17.783 ZM69.226,34.612 L68.032,34.612 L68.032,42.370 C69.584,43.803 70.419,45.713 70.419,47.741 C70.419,51.680 67.197,54.903 63.258,54.903 C59.319,54.903 56.097,51.680 56.097,47.741 L56.097,33.418 L8.355,33.418 C7.639,33.418 7.161,32.941 7.161,32.225 L7.161,3.580 C7.161,2.864 7.639,2.387 8.355,2.387 L11.935,2.387 L11.935,1.193 C11.935,0.477 12.413,-0.001 13.129,-0.001 L60.871,-0.001 C61.587,-0.001 62.064,0.477 62.064,1.193 L62.064,4.893 C63.735,4.774 65.287,5.729 66.123,7.161 C67.435,9.309 66.719,12.293 64.452,13.606 C62.303,14.919 59.319,14.083 58.006,11.935 C56.693,9.786 57.410,6.803 59.677,5.490 L59.677,2.387 L14.323,2.387 L14.323,26.257 L56.097,26.257 L56.097,22.677 L47.742,22.677 C45.713,22.677 44.161,21.125 44.161,19.096 C44.161,17.067 45.713,15.515 47.742,15.515 L68.032,15.515 C70.658,15.515 72.806,17.664 72.806,20.290 L72.806,31.031 C72.806,33.061 71.255,34.612 69.226,34.612 ZM62.064,11.935 C63.377,11.935 64.452,10.861 64.452,9.548 C64.452,8.235 63.377,7.161 62.064,7.161 C60.752,7.161 59.677,8.235 59.677,9.548 C59.677,10.861 60.752,11.935 62.064,11.935 ZM63.258,52.516 C65.884,52.516 68.032,50.367 68.032,47.741 C68.032,45.115 65.884,42.967 63.258,42.967 C60.632,42.967 58.484,45.115 58.484,47.741 C58.484,50.367 60.632,52.516 63.258,52.516 ZM13.129,28.644 C12.413,28.644 11.935,28.167 11.935,27.451 L11.935,4.774 L9.548,4.774 L9.548,31.031 L56.097,31.031 L56.097,28.644 L13.129,28.644 ZM48.935,17.903 L47.742,17.903 C47.026,17.903 46.548,18.380 46.548,19.096 C46.548,19.812 47.026,20.290 47.742,20.290 L48.935,20.290 L48.935,17.903 ZM70.419,20.290 C70.419,18.977 69.345,17.903 68.032,17.903 L51.323,17.903 L51.323,20.290 L57.290,20.290 C58.006,20.290 58.484,20.767 58.484,21.483 L58.484,42.370 C59.200,41.774 60.035,41.296 60.871,40.938 L60.871,31.031 L63.258,31.031 L63.258,40.580 C64.093,40.580 64.929,40.700 65.645,40.938 L65.645,20.290 L68.032,20.290 L68.032,27.451 L70.419,27.451 L70.419,20.290 ZM70.419,29.838 L68.032,29.838 L68.032,32.225 L69.226,32.225 C69.942,32.225 70.419,31.748 70.419,31.031 L70.419,29.838 ZM17.903,47.741 C17.903,51.680 14.681,54.903 10.742,54.903 C6.803,54.903 3.581,51.680 3.581,47.741 C3.581,43.803 6.803,40.580 10.742,40.580 C14.681,40.580 17.903,43.803 17.903,47.741 ZM5.968,47.741 C5.968,50.367 8.116,52.516 10.742,52.516 C13.368,52.516 15.516,50.367 15.516,47.741 C15.516,45.115 13.368,42.967 10.742,42.967 C8.116,42.967 5.968,45.115 5.968,47.741 ZM13.129,57.289 C17.784,57.289 21.484,60.990 21.484,65.644 L21.484,72.806 C21.484,73.522 21.006,73.999 20.290,73.999 L1.194,73.999 C0.477,73.999 -0.000,73.522 -0.000,72.806 L-0.000,65.644 C-0.000,60.990 3.700,57.289 8.355,57.289 L13.129,57.289 ZM11.935,59.676 L9.548,59.676 L9.548,60.393 L10.742,61.586 L11.935,60.393 L11.935,59.676 ZM7.161,60.870 L7.161,59.797 C4.416,60.393 2.387,62.780 2.387,65.644 L2.387,71.613 L4.774,71.613 L4.774,66.838 L7.161,66.838 L7.161,71.613 L14.323,71.613 L14.323,66.838 L16.710,66.838 L16.710,71.613 L19.097,71.613 L19.097,65.644 C19.097,62.780 17.068,60.393 14.323,59.797 L14.323,60.870 C14.323,61.228 14.203,61.467 13.964,61.706 L11.577,64.093 C11.100,64.570 10.384,64.570 9.906,64.093 L7.519,61.706 C7.281,61.467 7.161,61.228 7.161,60.870 ZM29.839,47.741 C29.839,43.803 33.061,40.580 37.000,40.580 C40.939,40.580 44.161,43.803 44.161,47.741 C44.161,51.680 40.939,54.903 37.000,54.903 C33.061,54.903 29.839,51.680 29.839,47.741 ZM41.774,47.741 C41.774,45.115 39.626,42.967 37.000,42.967 C34.374,42.967 32.226,45.115 32.226,47.741 C32.226,50.367 34.374,52.516 37.000,52.516 C39.626,52.516 41.774,50.367 41.774,47.741 ZM34.613,57.289 L39.387,57.289 C44.042,57.289 47.742,60.990 47.742,65.644 L47.742,72.806 C47.742,73.522 47.264,73.999 46.548,73.999 L27.452,73.999 C26.735,73.999 26.258,73.522 26.258,72.806 L26.258,65.644 C26.258,60.990 29.958,57.289 34.613,57.289 ZM38.194,59.676 L35.806,59.676 L35.806,60.393 L37.000,61.586 L38.194,60.393 L38.194,59.676 ZM28.645,71.613 L31.032,71.613 L31.032,66.838 L33.419,66.838 L33.419,71.613 L40.581,71.613 L40.581,66.838 L42.968,66.838 L42.968,71.613 L45.355,71.613 L45.355,65.644 C45.355,62.780 43.326,60.393 40.581,59.797 L40.581,60.870 C40.581,61.228 40.461,61.467 40.222,61.706 L37.835,64.093 C37.358,64.570 36.642,64.570 36.165,64.093 L33.777,61.706 C33.539,61.467 33.419,61.228 33.419,60.870 L33.419,59.797 C30.674,60.393 28.645,62.780 28.645,65.644 L28.645,71.613 Z"/>
                                        </svg>
                                    </a>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="#">Training Solutions</a>
                                    </h3>
                                    <p class="desc">
                                        Sliquam malesuada bibendum arcu vitae el vita nunc egestas ip vulputate amet mi mattis pellentesque id.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="75px" height="75px">
                                        <path fill-rule="evenodd" 
                                        d="M71.371,21.773 C69.314,21.773 67.742,20.201 67.742,18.145 C67.742,17.298 68.105,16.451 68.588,15.846 L62.782,9.072 C62.177,9.435 61.330,9.677 60.483,9.677 C60.362,9.677 60.120,9.677 60.000,9.677 L55.040,17.902 C55.282,18.145 55.524,18.386 55.766,18.629 C57.580,20.564 57.459,23.588 55.524,25.403 L57.822,29.152 C57.943,29.152 58.185,29.152 58.306,29.152 C59.153,29.152 60.000,29.515 60.725,30.120 C62.177,31.451 62.298,33.750 60.967,35.201 C59.637,36.653 57.338,36.774 55.887,35.443 C54.435,34.113 54.314,31.814 55.645,30.362 L53.346,26.612 C52.136,26.975 50.927,26.733 49.838,26.128 L45.725,30.967 C46.572,31.572 47.177,32.419 47.298,33.386 C47.661,35.443 46.330,37.257 44.394,37.620 C42.338,37.984 40.523,36.653 40.160,34.717 C39.797,32.660 41.128,30.846 43.064,30.483 L48.023,24.556 C47.781,23.951 47.540,23.467 47.419,22.862 L34.838,18.629 C34.354,19.596 33.507,20.322 32.418,20.564 C30.483,21.169 28.547,19.959 27.942,18.024 C27.338,16.088 28.547,14.031 30.483,13.548 C32.418,12.943 34.475,14.153 34.959,16.088 L47.419,20.201 C48.144,18.265 49.959,16.935 52.015,16.935 C52.136,16.935 52.378,16.935 52.499,16.935 L57.701,8.830 C56.370,7.862 55.645,6.410 55.645,4.838 C55.645,2.176 57.822,-0.000 60.483,-0.000 C63.145,-0.000 65.322,2.176 65.322,4.838 C65.322,5.685 65.080,6.652 64.596,7.379 L70.766,14.637 C71.008,14.515 71.129,14.515 71.371,14.515 C73.427,14.515 75.000,16.088 75.000,18.145 C75.000,20.201 73.427,21.773 71.371,21.773 ZM58.064,33.870 C58.790,33.870 59.274,33.386 59.274,32.660 C59.274,31.935 58.790,31.451 58.064,31.451 C57.338,31.451 56.854,31.935 56.854,32.660 C56.854,33.386 57.338,33.870 58.064,33.870 ZM43.548,32.660 C42.822,32.660 42.338,33.144 42.338,33.870 C42.338,34.596 42.822,35.080 43.548,35.080 C44.273,35.080 44.757,34.596 44.757,33.870 C44.757,33.144 44.273,32.660 43.548,32.660 ZM31.451,15.725 C30.725,15.725 30.241,16.209 30.241,16.935 C30.241,17.661 30.725,18.145 31.451,18.145 C32.176,18.145 32.660,17.661 32.660,16.935 C32.660,16.209 32.176,15.725 31.451,15.725 ZM52.015,19.354 C50.685,19.354 49.596,20.443 49.596,21.773 C49.596,23.104 50.685,24.193 52.015,24.193 C53.346,24.193 54.435,23.104 54.435,21.773 C54.435,20.443 53.346,19.354 52.015,19.354 ZM60.483,2.419 C59.153,2.419 58.064,3.507 58.064,4.838 C58.064,6.169 59.153,7.257 60.483,7.257 C61.814,7.257 62.903,6.169 62.903,4.838 C62.903,3.507 61.814,2.419 60.483,2.419 ZM71.371,16.935 C70.645,16.935 70.161,17.419 70.161,18.145 C70.161,18.870 70.645,19.354 71.371,19.354 C72.097,19.354 72.580,18.870 72.580,18.145 C72.580,17.419 72.097,16.935 71.371,16.935 ZM37.136,31.814 C37.620,32.298 37.620,33.023 37.136,33.507 L31.934,38.709 L34.717,41.491 C35.201,41.975 35.201,42.701 34.717,43.185 L31.088,46.814 C30.604,47.298 29.878,47.298 29.394,46.814 L26.612,44.031 L26.249,44.394 C25.765,44.878 25.039,44.878 24.555,44.394 L21.773,41.612 L18.991,44.394 C18.507,44.878 17.781,44.878 17.297,44.394 L13.426,40.524 C12.579,42.218 12.095,44.031 12.095,45.967 C12.095,52.620 17.539,58.064 24.192,58.064 L33.870,58.064 L33.870,57.338 L30.604,54.072 C30.120,53.588 30.120,52.862 30.604,52.378 L41.491,41.491 C41.975,41.007 42.701,41.007 43.185,41.491 L46.814,45.120 C47.298,45.605 47.298,46.330 46.814,46.814 L41.128,52.499 L41.128,57.580 L46.330,52.378 L48.023,54.072 L40.765,61.330 C39.918,63.749 37.620,65.322 35.080,65.322 L29.031,65.322 L29.031,67.742 L35.080,67.742 C35.805,67.742 36.289,68.226 36.289,68.951 L36.289,73.790 C36.289,74.515 35.805,74.999 35.080,74.999 L13.305,74.999 C12.579,74.999 12.095,74.515 12.095,73.790 L12.095,68.951 C12.095,68.226 12.579,67.742 13.305,67.742 L19.353,67.742 L19.353,64.596 C11.006,62.418 5.079,54.919 4.837,46.209 C4.837,42.338 5.926,38.467 8.103,35.201 L3.990,31.088 C3.506,30.604 3.506,29.878 3.990,29.395 L9.192,24.193 L7.619,22.620 C7.135,22.136 7.135,21.410 7.619,20.927 L8.587,19.959 L6.652,18.024 L5.684,18.991 C5.200,19.475 4.474,19.475 3.990,18.991 L0.361,15.362 C-0.123,14.878 -0.123,14.153 0.361,13.669 L8.829,5.201 C9.313,4.717 10.039,4.717 10.523,5.201 L14.152,8.830 C14.636,9.314 14.636,10.040 14.152,10.523 L13.184,11.491 L15.119,13.427 L16.087,12.459 C16.571,11.975 17.297,11.975 17.781,12.459 L33.507,28.185 L37.136,31.814 ZM30.241,44.274 L32.176,42.338 L30.241,40.402 L28.305,42.338 L30.241,44.274 ZM18.144,41.854 L20.926,39.072 L22.499,37.500 L20.563,35.564 C19.837,36.048 18.991,36.290 18.144,36.290 C17.781,36.290 17.418,36.290 17.176,36.169 C16.208,36.894 15.482,37.620 14.757,38.467 L18.144,41.854 ZM20.563,31.451 C20.563,30.120 19.474,29.032 18.144,29.032 C16.813,29.032 15.724,30.120 15.724,31.451 C15.724,32.782 16.813,33.870 18.144,33.870 C19.474,33.870 20.563,32.782 20.563,31.451 ZM44.273,45.967 L42.338,44.031 L33.144,53.225 L35.080,55.160 L44.273,45.967 ZM14.515,70.161 L14.515,72.580 L33.870,72.580 L33.870,70.161 L14.515,70.161 ZM26.612,67.742 L26.612,65.322 L24.676,65.322 C23.708,65.322 22.741,65.201 21.773,65.080 L21.773,67.742 L26.612,67.742 ZM7.256,46.209 C7.498,55.523 15.361,63.024 24.676,62.902 L35.080,62.902 C37.136,62.902 38.709,61.330 38.588,59.274 L38.588,54.919 L36.168,57.338 L36.168,59.274 C36.168,60.000 35.685,60.483 34.959,60.483 L24.071,60.483 C19.837,60.483 15.845,58.669 13.063,55.403 C7.861,49.354 8.708,40.161 14.757,34.959 C14.152,34.475 13.789,33.750 13.547,32.903 C9.434,36.048 7.135,41.007 7.256,46.209 ZM6.531,30.241 L9.676,33.266 C10.765,31.935 12.216,30.725 13.668,29.757 C13.789,29.515 13.910,29.273 14.031,29.032 L10.885,25.887 L6.531,30.241 ZM9.676,7.741 L2.901,14.515 L4.837,16.451 L11.611,9.677 L9.676,7.741 ZM11.490,13.185 L8.345,16.330 L10.281,18.265 L13.426,15.121 L11.490,13.185 ZM29.031,27.096 L26.249,29.878 L24.555,28.185 L27.338,25.403 L20.563,18.629 L17.781,21.410 L16.087,19.717 L18.870,16.935 L16.934,14.999 L10.160,21.773 L15.724,27.338 C16.450,26.854 17.297,26.612 18.144,26.612 C20.805,26.612 22.983,28.789 22.983,31.451 C22.983,32.298 22.741,33.144 22.257,33.870 L24.192,35.806 L30.967,29.032 L29.031,27.096 ZM25.039,38.346 L23.466,39.919 L25.402,41.854 L34.596,32.660 L32.660,30.725 L25.039,38.346 Z"/>
                                        </svg>
                                    </a>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="#">Achieve Your Dreams</a>
                                    </h3>
                                    <p class="desc">
                                        Diam quam nulla porttitor massa id aliquam vestibulum. Ullamcorper eget null facilisi etiam dignissim.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px">
                                        <path fill-rule="evenodd" 
                                        d="M63.952,56.612 L29.355,56.612 L29.355,63.951 C29.355,64.580 28.935,64.999 28.306,64.999 L11.532,64.999 C10.903,64.999 10.484,64.580 10.484,63.951 L10.484,56.612 L1.048,56.612 C0.419,56.612 -0.000,56.193 -0.000,55.564 L-0.000,9.435 C-0.000,8.806 0.419,8.386 1.048,8.386 L10.484,8.386 L10.484,1.048 C10.484,0.419 10.903,-0.001 11.532,-0.001 L28.306,-0.001 C28.935,-0.001 29.355,0.419 29.355,1.048 L29.355,8.386 L63.952,8.386 C64.581,8.386 65.000,8.806 65.000,9.435 L65.000,55.564 C65.000,56.193 64.581,56.612 63.952,56.612 ZM29.355,46.128 L38.685,46.128 L35.855,42.564 C35.540,42.249 35.540,41.620 35.855,41.306 L38.685,37.741 L31.452,37.741 L31.452,40.887 C31.452,41.515 31.032,41.934 30.403,41.934 L29.355,41.934 L29.355,46.128 ZM12.581,62.903 L27.258,62.903 L27.258,60.806 L14.677,60.806 L14.677,58.709 L27.258,58.709 L27.258,41.934 L12.581,41.934 L12.581,62.903 ZM29.355,39.838 L29.355,31.451 L10.484,31.451 L10.484,39.838 L29.355,39.838 ZM2.097,54.515 L10.484,54.515 L10.484,48.225 L2.097,48.225 L2.097,54.515 ZM2.097,46.128 L10.484,46.128 L10.484,41.934 L9.435,41.934 L2.097,41.934 L2.097,46.128 ZM2.097,39.838 L8.387,39.838 L8.387,37.741 L2.097,37.741 L2.097,39.838 ZM10.484,10.483 L2.097,10.483 L2.097,35.645 L8.387,35.645 L8.387,26.209 C8.387,25.580 8.806,25.160 9.435,25.160 L10.484,25.160 L10.484,10.483 ZM27.258,2.096 L12.581,2.096 L12.581,4.193 L25.161,4.193 L25.161,6.290 L12.581,6.290 L12.581,25.160 L27.258,25.160 L27.258,2.096 ZM10.484,27.257 L10.484,29.354 L29.355,29.354 L29.355,27.257 L10.484,27.257 ZM62.903,10.483 L29.355,10.483 L29.355,25.160 L30.403,25.160 C31.032,25.160 31.452,25.580 31.452,26.209 L31.452,35.645 L40.887,35.645 C41.097,35.645 41.306,35.749 41.516,35.854 C42.040,36.169 42.040,36.902 41.726,37.322 L38.056,41.934 L41.726,46.548 C41.831,46.757 41.935,46.967 41.935,47.177 C41.935,47.806 41.516,48.225 40.887,48.225 L29.355,48.225 L29.355,54.515 L62.903,54.515 L62.903,10.483 ZM40.048,32.184 C39.629,31.766 39.629,31.137 40.048,30.717 L44.137,26.629 C41.097,23.379 41.097,18.451 44.137,15.201 C47.282,11.846 52.629,11.636 55.984,14.782 C59.339,17.926 59.548,23.273 56.403,26.629 L60.492,30.717 C60.702,30.927 60.806,31.137 60.806,31.451 C60.806,32.080 60.387,32.500 59.758,32.500 L57.661,32.500 L57.661,34.596 C57.661,34.911 57.556,35.120 57.347,35.330 C56.927,35.749 56.298,35.749 55.879,35.330 L50.323,29.773 L44.766,35.330 C44.556,35.540 44.347,35.645 44.032,35.645 C43.403,35.645 42.984,35.225 42.984,34.596 L42.984,32.500 L40.887,32.500 C40.573,32.500 40.363,32.395 40.048,32.184 ZM55.564,32.080 L55.564,31.451 C55.564,30.822 55.984,30.403 56.613,30.403 L57.242,30.403 L54.831,27.991 C54.097,28.515 53.363,28.830 52.524,29.040 L55.564,32.080 ZM56.613,20.967 C56.613,17.507 53.782,14.677 50.323,14.677 C46.863,14.677 44.032,17.507 44.032,20.967 C44.032,24.427 46.863,27.257 50.323,27.257 C53.782,27.257 56.613,24.427 56.613,20.967 ZM44.032,30.403 C44.661,30.403 45.081,30.822 45.081,31.451 L45.081,32.080 L48.121,29.040 C47.282,28.830 46.548,28.411 45.814,27.991 L43.403,30.403 L44.032,30.403 ZM50.323,15.725 C53.258,15.725 55.564,18.032 55.564,20.967 C55.564,23.903 53.258,26.209 50.323,26.209 C47.387,26.209 45.081,23.903 45.081,20.967 C45.081,18.032 47.387,15.725 50.323,15.725 ZM50.323,24.112 C52.105,24.112 53.468,22.750 53.468,20.967 C53.468,19.184 52.105,17.822 50.323,17.822 C48.540,17.822 47.177,19.184 47.177,20.967 C47.177,22.750 48.540,24.112 50.323,24.112 ZM60.806,52.419 L46.129,52.419 L46.129,50.321 L60.806,50.321 L60.806,52.419 ZM52.419,46.128 L60.806,46.128 L60.806,48.225 L52.419,48.225 L52.419,46.128 Z"/>
                                        </svg>
                                    </a>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="#">Validated & Certified</a>
                                    </h3>
                                    <p class="desc">
                                        Odio tempor orci dapibus ultrices in iaculis. Tincidunt eget nullam non nisi est amet ipsum consequat nisl.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Course -->
        <section class="courses section-padding-large bg-parten section-bg-overlay">
            <div class="container">
                <div class="section-title-white section-title-center">
                    <h2>Popular Courses</h2>
                    <p class="title-desc">
                        Tempus egestas sed sed risus pretium quam vulputate. Sit amet est placerat in id nibh tortor egestas erat imperdiet sed.
                    </p>
                </div>
                <div class="courses-content featured-course-slider">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item wow fadeIn" data-wow-delay="0.1s">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-course-1.jpg')) }}" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="feadtured-course-small">
                                        <a href="#">
                                            <img src="{{ (Theme::url('public/visual_style/images/course-small-1.jpg')) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="#" class="teacher">Steven Boyd</a>
                                    <h3 class="title">
                                        <a href="single-course.html">Basic: Web Developer</a>
                                    </h3>
                                    <p class="course-desc">
                                        Morbi tristique senectus et ne malesuada fames ac turpis. Tempus egestas sed sed risus pretium quam vulputate.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>20 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                        </div>
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item wow fadeIn" data-wow-delay="0.3s">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-course-2.jpg')) }}" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="feadtured-course-small">
                                        <a href="#">
                                            <img src="{{ (Theme::url('public/visual_style/images/course-small-2.jpg')) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="#" class="teacher">Andrea Russell</a>
                                    <h3 class="title">
                                        <a href="single-course.html">Basic WordPress</a>
                                    </h3>
                                    <p class="course-desc">
                                        Ullamcorper eget nulla facilisi dignissim diam quis enim lobortis. Ali malesuada bibendum arcu vitae.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>08 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>08 Lessons</a>
                                        </div>
                                        <span class="price notfree">$40.00</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item wow fadeIn" data-wow-delay="0.5s">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-course-3.jpg')) }}" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="feadtured-course-small">
                                        <a href="#">
                                            <img src="{{ (Theme::url('public/visual_style/images/course-small-2.jpg')) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="#" class="teacher">Andrea Russell</a>
                                    <h3 class="title">
                                        <a href="single-course.html">Web Design For Usability</a>
                                    </h3>
                                    <p class="course-desc">
                                        Mauris vitae ultricies leo inte malesuada. Proin sagittis nisl rhoncus matt rhoncu urna amet est placerat egestas.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>25 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>10 Lessons</a>
                                        </div>
                                        <span class="price notfree">$50.00</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="images/home1-course-4.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="feadtured-course-small">
                                        <a href="#">
                                            <img src="images/course-small-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="#" class="teacher">Lucas Coleman</a>
                                    <h3 class="title">
                                        <a href="single-course.html">Advanced: UI Design</a>
                                    </h3>
                                    <p class="course-desc">
                                        Diam quam nulla porttitor massa neque aliquam vestibulum. Ullamcorper eget nulla facilisi consectetur.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>35 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>20 Lessons</a>
                                        </div>
                                        <span class="price notfree">$65.00</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="images/home1-course-5.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="feadtured-course-small">
                                        <a href="#">
                                            <img src="images/course-small-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="#" class="teacher">Andrea Russell</a>
                                    <h3 class="title">
                                        <a href="single-course.html">Graphic Design</a>
                                    </h3>
                                    <p class="course-desc">
                                        Odio tempor orci dapibus ultrice iaculis. Tincidunt eget nullam non nisi est sit amet pretium lectus.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>26 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                        </div>
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="images/home1-course-6.jpg" alt="">
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="feadtured-course-small">
                                        <a href="#">
                                            <img src="images/course-small-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="#" class="teacher">Steven Boyd</a>
                                    <h3 class="title">
                                        <a href="single-course.html">Design System</a>
                                    </h3>
                                    <p class="course-desc">
                                        Gravida in fermentum et sollicitudi orci phasellus. Diam quam nulla portt masa id neque aliquam vestibulum.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>50 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>18 Lessons</a>
                                        </div>
                                        <span class="price notfree">$45.00</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="our-team section-padding-large">
            <div class="container">
                <div class="section-title section-title-left">
                    <h2>Our Teachers</h2>
                </div>
                <div class="our-team-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-1.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Charles Williams</a></h4>
                                    <span class="job-title">Manager</span>
                                    <p class="desc">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-2.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Henrik Campbell</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Dapibus ultrices in iaculis nunc sed augue lacus viverra.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-3.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Marie Washington</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Nec tincidunt praesent semper feugiat nibh sed pulvinar proin.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="{{ (Theme::url('public/visual_style/images/our-team-4.jpg')) }}" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">William Fuller</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Eget nunc lobortis mattis convallis aliquam faucibus purus
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-5.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Tiffany Gilber</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Enim blandit volutpat maec volutpat blandit aliquam etiam erat.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-6.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Bobby Bailey</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Tincidunt lobortis feugiat vivamus at augue eget arcu.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials background-grey section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonials-content">
                    <div class="row">
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Good Courses</span>
                                <p class="desc">“In hendrerit gravida rutrum quisque non. Suspendisse faucibus interdum posuere lorem ipsum dolor fermentum iaculis eu non diam. Hendrerit dolor magna eget est lorem. Tempor commodo ullamcorper a lacus vestibulum.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-1.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Elizabeth King</a></h4>
                                    <a href="#" class="categories">Poster Design</a>
                                </div>
                            </figure>
                        </article>
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Best Support 24/7</span>
                                <p class="desc">“Senectus et netus et malesuada fames ac turpis egestas maecenas. Id porta nibh venenatis cras sed felis. Ornare massa eget egestas purus. Vel pretium lectus quam id leo. Gravida in fermentum et sollicitudin ac faucibus scelerisque.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-2.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Lucas Andrews</a></h4>
                                    <a href="#" class="categories">UI Design</a>
                                </div>
                            </figure>
                        </article>
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Amazing Program</span>
                                <p class="desc">“Hendrerit dolor magna eget est lorem. Tempor commodo ullamcorper a lacus vestibulum sed. Cras tincidunt lobortis feugiat vivamus. Senectus et netus et malesuada fames ac turpis egestas maecenas interdum posuere.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-3.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Tiffany Jenkins</a></h4>
                                    <a href="#" class="categories">Web Designer</a>
                                </div>
                            </figure>
                        </article>
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Good Courses</span>
                                <p class="desc">“Tempor commodo ullamcorper a lacus vestibulum sed. Cras tincidunt lobortis feugiat vivamus. Senectus et netus et malesuada fames ac turpis egestas maecenas. Id porta nibh venenatis cras sed felis. Ornare massa eget egestas purus.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-4.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Gabriel Henry</a></h4>
                                    <a href="#" class="categories">UX Design</a>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sign up -->
        <section class="sign-up section-padding-large">
            <div class="container">
                <div class="sign-up-content">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-3">
                            <div class="sign-up-form">
                                <div class="form-heading">
                                    <h3>
                                        Get Free Online Courses
                                    </h3>
                                </div>
                                <form method="POST" class="form-signup js-contact-form" action="includes/contact-form.php">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="textl" name="phone" id="phone" placeholder="Phone Number">
                                    </div>
                                    <input type="submit" class="submit au-btn-hover" value="Get It Now">
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-3">
                            <div class="register-now">
                                <h2 class="register-title">FREE COURSES</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                <div id="count-down-time" data-countdown="2019/03/30"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Table -->
        <section class="pricing-table section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>Pricing Table</h2>
                </div>
                <div class="pricing-table-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <h4 class="title">Basic</h4>
                                <figure class="display-flex-center basic">
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="60px" height="60px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                    d="M5.000,23.999 L7.000,23.999 C7.552,23.999 8.000,24.447 8.000,24.999 C8.000,25.551 7.552,25.999 7.000,25.999 L5.000,25.999 C4.448,25.999 4.000,25.551 4.000,24.999 C4.000,24.447 4.448,23.999 5.000,23.999 ZM5.000,27.999 L7.000,27.999 C7.552,27.999 8.000,28.448 8.000,29.000 C8.000,29.552 7.552,29.999 7.000,29.999 L5.000,29.999 C4.448,29.999 4.000,29.551 4.000,29.000 C4.000,28.448 4.448,27.999 5.000,27.999 ZM5.000,51.999 L7.000,51.999 C7.552,51.999 8.000,52.447 8.000,52.999 C8.000,53.551 7.552,53.999 7.000,53.999 L5.000,53.999 C4.448,53.999 4.000,53.551 4.000,52.999 C4.000,52.447 4.448,51.999 5.000,51.999 ZM5.000,47.999 L7.000,47.999 C7.552,47.999 8.000,48.448 8.000,48.999 C8.000,49.551 7.552,50.000 7.000,50.000 L5.000,50.000 C4.448,50.000 4.000,49.551 4.000,48.999 C4.000,48.448 4.448,47.999 5.000,47.999 ZM55.000,23.999 C55.552,23.999 56.000,24.447 56.000,24.999 L56.000,34.999 C56.000,35.551 55.552,35.999 55.000,35.999 C54.448,35.999 54.000,35.551 54.000,34.999 L54.000,24.999 C54.000,24.447 54.448,23.999 55.000,23.999 ZM51.000,51.999 L55.000,51.999 C55.552,51.999 56.000,52.447 56.000,52.999 C56.000,53.551 55.552,53.999 55.000,53.999 L51.000,53.999 C50.448,53.999 50.000,53.551 50.000,52.999 C50.000,52.447 50.448,51.999 51.000,51.999 ZM50.000,35.000 L50.000,24.999 C50.000,24.447 50.448,23.999 51.000,23.999 C51.552,23.999 52.000,24.447 52.000,24.999 L52.000,35.000 C52.000,35.552 51.552,36.000 51.000,36.000 C50.448,36.000 50.000,35.552 50.000,35.000 ZM56.000,48.999 C56.000,49.551 55.552,50.000 55.000,50.000 L51.000,50.000 C50.448,50.000 50.000,49.551 50.000,48.999 C50.000,48.448 50.448,47.999 51.000,47.999 L55.000,47.999 C55.552,47.999 56.000,48.448 56.000,48.999 ZM57.000,60.000 L3.000,60.000 C1.346,60.000 -0.000,58.654 -0.000,57.000 L-0.000,9.000 C-0.000,7.346 1.346,6.000 3.000,6.000 L7.000,6.000 C7.552,6.000 8.000,6.448 8.000,7.000 C8.000,7.552 7.552,8.000 7.000,8.000 L3.000,8.000 C2.449,8.000 2.000,8.449 2.000,9.000 L2.000,57.000 C2.000,57.551 2.449,57.999 3.000,57.999 L10.000,57.999 L10.000,13.999 L5.000,13.999 C4.448,13.999 4.000,13.551 4.000,12.999 C4.000,12.448 4.448,12.000 5.000,12.000 L10.000,12.000 L10.000,3.000 C10.000,1.346 11.346,-0.000 13.000,-0.000 L23.000,-0.000 C24.682,-0.000 26.000,1.318 26.000,3.000 L26.000,4.000 L33.000,4.000 C33.552,4.000 34.000,4.448 34.000,5.000 C34.000,5.552 33.552,6.000 33.000,6.000 L26.000,6.000 L26.000,57.999 L36.000,57.999 L36.000,5.000 C36.000,3.346 37.346,2.000 39.000,2.000 L45.000,2.000 C46.682,2.000 48.000,3.317 48.000,5.000 L48.000,14.000 L54.000,14.000 C54.552,14.000 55.000,14.448 55.000,15.000 C55.000,15.552 54.552,16.000 54.000,16.000 L48.000,16.000 L48.000,57.999 L57.000,57.999 C57.551,57.999 58.000,57.551 58.000,57.000 L58.000,11.000 C58.000,10.448 57.551,10.000 57.000,10.000 L51.000,10.000 C50.448,10.000 50.000,9.552 50.000,9.000 C50.000,8.448 50.448,8.000 51.000,8.000 L57.000,8.000 C58.654,8.000 60.000,9.345 60.000,11.000 L60.000,57.000 C60.000,58.654 58.654,60.000 57.000,60.000 ZM24.000,3.000 C24.000,2.429 23.570,2.000 23.000,2.000 L13.000,2.000 C12.439,2.000 12.000,2.439 12.000,3.000 L12.000,6.000 L21.000,6.000 C21.552,6.000 22.000,6.448 22.000,7.000 C22.000,7.552 21.552,8.000 21.000,8.000 L12.000,8.000 L12.000,57.999 L24.000,57.999 L24.000,3.000 ZM46.000,5.000 C46.000,4.429 45.570,4.000 45.000,4.000 L39.000,4.000 C38.439,4.000 38.000,4.438 38.000,5.000 L38.000,8.000 L43.000,8.000 C43.552,8.000 44.000,8.448 44.000,9.000 C44.000,9.552 43.552,10.000 43.000,10.000 L38.000,10.000 L38.000,57.999 L46.000,57.999 L46.000,5.000 ZM41.000,16.000 L43.000,16.000 C43.552,16.000 44.000,16.448 44.000,17.000 C44.000,17.551 43.552,17.999 43.000,17.999 L41.000,17.999 C40.448,17.999 40.000,17.551 40.000,17.000 C40.000,16.448 40.448,16.000 41.000,16.000 ZM41.000,20.000 L43.000,20.000 C43.552,20.000 44.000,20.448 44.000,21.000 C44.000,21.552 43.552,22.000 43.000,22.000 L41.000,22.000 C40.448,22.000 40.000,21.552 40.000,21.000 C40.000,20.448 40.448,20.000 41.000,20.000 ZM41.000,23.999 L43.000,23.999 C43.552,23.999 44.000,24.447 44.000,24.999 C44.000,25.551 43.552,25.999 43.000,25.999 L41.000,25.999 C40.448,25.999 40.000,25.551 40.000,24.999 C40.000,24.447 40.448,23.999 41.000,23.999 ZM41.000,47.999 L43.000,47.999 C43.552,47.999 44.000,48.448 44.000,48.999 C44.000,49.551 43.552,50.000 43.000,50.000 L41.000,50.000 C40.448,50.000 40.000,49.551 40.000,48.999 C40.000,48.448 40.448,47.999 41.000,47.999 ZM41.000,51.999 L43.000,51.999 C43.552,51.999 44.000,52.447 44.000,52.999 C44.000,53.551 43.552,53.999 43.000,53.999 L41.000,53.999 C40.448,53.999 40.000,53.551 40.000,52.999 C40.000,52.447 40.448,51.999 41.000,51.999 ZM15.000,16.000 L21.000,16.000 C21.552,16.000 22.000,16.448 22.000,17.000 L22.000,31.000 C22.000,31.552 21.552,32.000 21.000,32.000 L15.000,32.000 C14.448,32.000 14.000,31.552 14.000,31.000 L14.000,17.000 C14.000,16.448 14.448,16.000 15.000,16.000 ZM16.000,29.999 L20.000,29.999 L20.000,17.999 L16.000,17.999 L16.000,29.999 ZM15.000,47.999 L21.000,47.999 C21.552,47.999 22.000,48.448 22.000,48.999 C22.000,49.551 21.552,50.000 21.000,50.000 L15.000,50.000 C14.448,50.000 14.000,49.551 14.000,48.999 C14.000,48.448 14.448,47.999 15.000,47.999 ZM15.000,51.999 L21.000,51.999 C21.552,51.999 22.000,52.447 22.000,52.999 C22.000,53.551 21.552,53.999 21.000,53.999 L15.000,53.999 C14.448,53.999 14.000,53.551 14.000,52.999 C14.000,52.447 14.448,51.999 15.000,51.999 ZM33.000,53.999 L29.000,53.999 C28.448,53.999 28.000,53.551 28.000,52.999 C28.000,52.447 28.448,51.999 29.000,51.999 L33.000,51.999 C33.552,51.999 34.000,52.447 34.000,52.999 C34.000,53.551 33.552,53.999 33.000,53.999 ZM33.000,50.000 L29.000,50.000 C28.448,50.000 28.000,49.551 28.000,48.999 C28.000,48.448 28.448,47.999 29.000,47.999 L33.000,47.999 C33.552,47.999 34.000,48.448 34.000,48.999 C34.000,49.551 33.552,50.000 33.000,50.000 ZM33.000,32.000 L29.000,32.000 C28.448,32.000 28.000,31.552 28.000,31.000 L28.000,17.000 C28.000,16.448 28.448,16.000 29.000,16.000 L33.000,16.000 C33.552,16.000 34.000,16.448 34.000,17.000 L34.000,31.000 C34.000,31.552 33.552,32.000 33.000,32.000 ZM32.000,17.999 L30.000,17.999 L30.000,29.999 L32.000,29.999 L32.000,17.999 Z"/>
                                    </svg>
                                </figure>
                                <div class="info">
                                    <ul class="advanced">
                                        <li>5 Users</li>
                                        <li>10 Projects</li>
                                        <li>5 E-mail accounts</li>
                                        <li>2 Domains</li>
                                    </ul>
                                    <div class="price">
                                        <span>45.00</span>
                                        <span>M</span>
                                    </div>
                                    <a href="#" class="au-btn basic au-btn-hover">Purchase</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item popular" data-popular="Popular">
                                <h4 class="title">Business</h4>
                                <figure class="display-flex-center business">
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="62px" height="62px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                    d="M60.967,62.000 L1.033,62.000 C0.463,62.000 -0.000,61.537 -0.000,60.966 C-0.000,60.396 0.463,59.933 1.033,59.933 L60.967,59.933 C61.537,59.933 62.000,60.396 62.000,60.966 C62.000,61.537 61.537,62.000 60.967,62.000 ZM43.400,56.833 C43.400,57.403 42.937,57.866 42.367,57.866 L19.633,57.866 C19.063,57.866 18.600,57.403 18.600,56.833 C18.600,56.262 19.063,55.799 19.633,55.799 L42.367,55.799 C42.937,55.799 43.400,56.262 43.400,56.833 ZM23.767,53.733 C23.196,53.733 22.733,53.270 22.733,52.700 L22.733,38.233 C22.733,37.959 22.842,37.696 23.036,37.502 C23.133,37.405 25.470,35.133 31.000,35.133 C36.530,35.133 38.867,37.405 38.964,37.502 C39.158,37.696 39.267,37.959 39.267,38.233 L39.267,52.700 C39.267,53.270 38.804,53.733 38.233,53.733 C37.663,53.733 37.200,53.270 37.200,52.700 L37.200,38.732 C36.574,38.302 34.936,37.416 32.033,37.238 L32.033,47.533 C32.604,47.533 33.067,47.996 33.067,48.566 C33.067,49.136 32.604,49.600 32.033,49.600 L32.033,52.699 C32.033,53.270 31.570,53.733 31.000,53.733 C30.430,53.733 29.967,53.270 29.967,52.699 L29.967,49.600 C29.396,49.600 28.933,49.136 28.933,48.566 C28.933,47.996 29.396,47.533 29.967,47.533 L29.967,37.238 C27.070,37.416 25.432,38.299 24.800,38.733 L24.800,52.700 C24.800,53.270 24.337,53.733 23.767,53.733 ZM56.833,55.799 C57.404,55.799 57.867,56.262 57.867,56.833 C57.867,57.403 57.404,57.866 56.833,57.866 L46.500,57.866 C45.930,57.866 45.467,57.403 45.467,56.833 C45.467,56.262 45.930,55.799 46.500,55.799 L47.533,55.799 L47.533,31.000 L14.467,31.000 L14.467,55.799 L15.500,55.799 C16.070,55.799 16.533,56.262 16.533,56.833 C16.533,57.403 16.070,57.866 15.500,57.866 L5.167,57.866 C4.596,57.866 4.133,57.403 4.133,56.833 C4.133,56.262 4.596,55.799 5.167,55.799 L6.200,55.799 L6.200,31.000 L5.167,31.000 C4.596,31.000 4.133,30.537 4.133,29.966 C4.133,29.396 4.596,28.933 5.167,28.933 L56.833,28.933 C57.404,28.933 57.867,29.396 57.867,29.966 C57.867,30.537 57.404,31.000 56.833,31.000 L55.800,31.000 L55.800,55.799 L56.833,55.799 ZM12.400,31.000 L8.267,31.000 L8.267,55.799 L12.400,55.799 L12.400,31.000 ZM53.733,31.000 L49.600,31.000 L49.600,55.799 L53.733,55.799 L53.733,31.000 ZM48.567,14.466 C49.137,14.466 49.600,14.929 49.600,15.500 L49.600,21.700 C49.600,22.270 49.137,22.733 48.567,22.733 L44.433,22.733 C43.863,22.733 43.400,22.270 43.400,21.700 L43.400,15.500 C43.400,14.929 43.863,14.466 44.433,14.466 L48.567,14.466 ZM45.467,20.666 L47.533,20.666 L47.533,16.533 L45.467,16.533 L45.467,20.666 ZM38.233,14.466 C38.804,14.466 39.267,14.929 39.267,15.500 L39.267,21.700 C39.267,22.270 38.804,22.733 38.233,22.733 L34.100,22.733 C33.530,22.733 33.067,22.270 33.067,21.700 L33.067,15.500 C33.067,14.929 33.530,14.466 34.100,14.466 L38.233,14.466 ZM35.133,20.666 L37.200,20.666 L37.200,16.533 L35.133,16.533 L35.133,20.666 ZM27.900,14.466 C28.470,14.466 28.933,14.929 28.933,15.500 L28.933,21.700 C28.933,22.270 28.470,22.733 27.900,22.733 L23.767,22.733 C23.196,22.733 22.733,22.270 22.733,21.700 L22.733,15.500 C22.733,14.929 23.196,14.466 23.767,14.466 L27.900,14.466 ZM24.800,20.666 L26.867,20.666 L26.867,16.533 L24.800,16.533 L24.800,20.666 ZM17.567,14.466 C18.137,14.466 18.600,14.929 18.600,15.500 L18.600,21.700 C18.600,22.270 18.137,22.733 17.567,22.733 L13.433,22.733 C12.863,22.733 12.400,22.270 12.400,21.700 L12.400,15.500 C12.400,14.929 12.863,14.466 13.433,14.466 L17.567,14.466 ZM14.467,20.666 L16.533,20.666 L16.533,16.533 L14.467,16.533 L14.467,20.666 ZM54.767,26.866 C54.196,26.866 53.733,26.403 53.733,25.833 L53.733,10.333 L8.267,10.333 L8.267,25.833 C8.267,26.403 7.804,26.866 7.233,26.866 C6.663,26.866 6.200,26.403 6.200,25.833 L6.200,9.300 C6.200,8.729 6.663,8.266 7.233,8.266 L28.933,8.266 L28.933,1.033 C28.933,0.462 29.396,-0.001 29.967,-0.001 L37.200,-0.001 C37.770,-0.001 38.233,0.462 38.233,1.033 L38.233,5.166 C38.233,5.737 37.770,6.200 37.200,6.200 L33.067,6.200 C32.496,6.200 32.033,5.737 32.033,5.166 C32.033,4.596 32.496,4.133 33.067,4.133 L36.167,4.133 L36.167,2.067 L31.000,2.067 L31.000,8.266 L54.767,8.266 C55.337,8.266 55.800,8.729 55.800,9.300 L55.800,25.833 C55.800,26.403 55.337,26.866 54.767,26.866 Z"/>
                                    </svg>
                                </figure>
                                <div class="info">
                                    <ul class="advanced">
                                        <li>20 Users</li>
                                        <li>30 Projects</li>
                                        <li>10 E-mail accounts</li>
                                        <li>5 Domains</li>
                                    </ul>
                                    <div class="price">
                                        <span>80.00</span>
                                        <span>M</span>
                                    </div>
                                    <a href="#" class="au-btn business au-btn-hover">Purchase</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <h4 class="title">Premium</h4>
                                <figure class="display-flex-center premium">
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="63px" height="63px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                    d="M61.950,63.000 C61.370,63.000 60.900,62.529 60.900,61.949 L60.900,27.300 L49.350,27.300 C48.770,27.300 48.300,26.829 48.300,26.250 C48.300,25.670 48.770,25.200 49.350,25.200 L60.900,25.200 L60.900,24.149 C60.900,23.570 61.370,23.099 61.950,23.099 C62.530,23.099 63.000,23.570 63.000,24.149 L63.000,61.949 C63.000,62.529 62.530,63.000 61.950,63.000 ZM47.249,19.950 C47.065,19.950 46.878,19.901 46.709,19.800 L31.500,10.674 L16.291,19.800 C15.794,20.098 15.147,19.937 14.850,19.441 C14.551,18.943 14.713,18.298 15.209,18.000 L30.450,8.855 L30.450,1.049 C30.450,0.470 30.920,-0.001 31.500,-0.001 L38.850,-0.001 C39.429,-0.001 39.900,0.470 39.900,1.049 L39.900,5.250 C39.900,5.829 39.429,6.299 38.850,6.299 L34.650,6.299 C34.070,6.299 33.600,5.829 33.600,5.250 C33.600,4.670 34.070,4.200 34.650,4.200 L37.800,4.200 L37.800,2.100 L32.550,2.100 L32.550,8.855 L47.791,18.000 C48.287,18.298 48.449,18.943 48.150,19.440 C47.953,19.768 47.606,19.950 47.249,19.950 ZM13.650,27.300 L2.100,27.300 L2.100,35.700 C2.100,36.279 1.630,36.750 1.050,36.750 C0.470,36.750 -0.000,36.279 -0.000,35.700 L-0.000,24.149 C-0.000,23.570 0.470,23.099 1.050,23.099 C1.630,23.099 2.100,23.570 2.100,24.150 L2.100,25.200 L13.650,25.200 C14.229,25.200 14.700,25.670 14.700,26.250 C14.700,26.829 14.229,27.300 13.650,27.300 ZM5.250,37.800 C10.440,37.800 10.500,51.313 10.500,51.449 C10.500,53.985 8.693,56.105 6.300,56.593 L6.300,61.949 C6.300,62.529 5.829,63.000 5.250,63.000 C4.670,63.000 4.200,62.529 4.200,61.949 L4.200,56.593 C1.807,56.105 -0.000,53.985 -0.000,51.449 C-0.000,51.313 0.060,37.800 5.250,37.800 ZM5.250,54.599 C6.987,54.599 8.400,53.187 8.400,51.449 C8.400,46.218 6.995,39.900 5.250,39.900 C3.505,39.900 2.100,46.218 2.100,51.449 C2.100,53.187 3.513,54.599 5.250,54.599 ZM7.350,35.700 C6.770,35.700 6.300,35.229 6.300,34.650 L6.300,32.550 C6.300,31.970 6.770,31.500 7.350,31.500 L11.550,31.500 C12.130,31.500 12.600,31.970 12.600,32.550 L12.600,38.849 C12.600,39.429 12.130,39.900 11.550,39.900 C10.970,39.900 10.500,39.429 10.500,38.849 L10.500,33.600 L8.400,33.600 L8.400,34.650 C8.400,35.229 7.929,35.700 7.350,35.700 ZM16.800,53.549 L16.800,23.099 C16.800,22.520 17.270,22.049 17.850,22.049 C18.430,22.049 18.900,22.520 18.900,23.099 L18.900,53.549 C18.900,54.129 18.430,54.599 17.850,54.599 C17.270,54.599 16.800,54.129 16.800,53.549 ZM28.350,27.300 L24.150,27.300 C23.570,27.300 23.100,26.829 23.100,26.250 L23.100,19.950 C23.100,19.370 23.570,18.900 24.150,18.900 L28.350,18.900 C28.929,18.900 29.400,19.370 29.400,19.950 L29.400,26.250 C29.400,26.829 28.929,27.300 28.350,27.300 ZM27.300,20.999 L25.200,20.999 L25.200,25.200 L27.300,25.200 L27.300,20.999 ZM29.400,38.849 C29.400,39.429 28.929,39.900 28.350,39.900 L24.150,39.900 C23.570,39.900 23.100,39.429 23.100,38.849 L23.100,38.849 L23.100,32.550 C23.100,31.970 23.570,31.500 24.150,31.500 L28.350,31.500 C28.929,31.500 29.400,31.970 29.400,32.550 L29.400,38.849 ZM27.300,33.600 L25.200,33.600 L25.200,37.800 L27.300,37.800 L27.300,33.600 ZM38.850,27.300 L34.650,27.300 C34.070,27.300 33.600,26.829 33.600,26.250 L33.600,19.950 C33.600,19.370 34.070,18.900 34.650,18.900 L38.850,18.900 C39.429,18.900 39.900,19.370 39.900,19.950 L39.900,26.250 C39.900,26.829 39.429,27.300 38.850,27.300 ZM37.800,20.999 L35.700,20.999 L35.700,25.200 L37.800,25.200 L37.800,20.999 ZM39.900,38.849 C39.900,39.429 39.429,39.900 38.850,39.900 L34.650,39.900 C34.070,39.900 33.600,39.429 33.600,38.849 L33.600,32.550 C33.600,31.970 34.070,31.500 34.650,31.500 L38.850,31.500 C39.429,31.500 39.900,31.970 39.900,32.550 L39.900,38.849 ZM37.800,33.600 L35.700,33.600 L35.700,37.800 L37.800,37.800 L37.800,33.600 ZM44.100,53.549 L44.100,22.049 C44.100,21.470 44.570,20.999 45.150,20.999 C45.730,20.999 46.200,21.470 46.200,22.049 L46.200,53.549 C46.200,54.129 45.730,54.599 45.150,54.599 C44.570,54.599 44.100,54.129 44.100,53.549 ZM50.400,57.750 C50.400,58.329 49.929,58.800 49.350,58.800 L13.650,58.800 C13.070,58.800 12.600,58.329 12.600,57.749 C12.600,57.170 13.070,56.700 13.650,56.700 L23.100,56.700 L23.100,46.200 L22.050,46.200 C21.470,46.200 21.000,45.729 21.000,45.150 C21.000,44.570 21.470,44.100 22.050,44.100 L40.950,44.100 C41.529,44.100 42.000,44.570 42.000,45.150 C42.000,45.729 41.529,46.200 40.950,46.200 L39.900,46.200 L39.900,56.700 L49.350,56.700 C49.929,56.700 50.400,57.170 50.400,57.750 ZM30.450,52.499 C29.870,52.499 29.400,52.029 29.400,51.449 C29.400,50.870 29.870,50.400 30.450,50.400 L30.450,46.200 L25.200,46.200 L25.200,56.700 L30.450,56.700 L30.450,52.499 ZM37.800,46.200 L32.550,46.200 L32.550,50.400 C33.129,50.400 33.600,50.870 33.600,51.449 C33.600,52.029 33.129,52.500 32.550,52.500 L32.550,56.700 L37.800,56.700 L37.800,46.200 ZM9.450,60.899 L53.550,60.899 C54.130,60.899 54.600,61.370 54.600,61.949 C54.600,62.529 54.130,63.000 53.550,63.000 L9.450,63.000 C8.870,63.000 8.400,62.529 8.400,61.949 C8.400,61.370 8.870,60.899 9.450,60.899 ZM55.650,40.950 L51.450,40.950 C50.870,40.950 50.400,40.479 50.400,39.900 L50.400,33.600 C50.400,33.020 50.870,32.550 51.450,32.550 L55.650,32.550 C56.229,32.550 56.700,33.020 56.700,33.600 L56.700,39.900 C56.700,40.479 56.229,40.950 55.650,40.950 ZM54.600,34.650 L52.500,34.650 L52.500,38.849 L54.600,38.849 L54.600,34.650 ZM50.400,52.499 L50.400,46.199 C50.400,45.620 50.870,45.149 51.450,45.149 L55.650,45.149 C56.229,45.149 56.700,45.620 56.700,46.199 L56.700,52.499 C56.700,53.079 56.229,53.549 55.650,53.549 L51.450,53.549 C50.870,53.549 50.400,53.079 50.400,52.499 ZM52.500,51.449 L54.600,51.449 L54.600,47.249 L52.500,47.249 L52.500,51.449 Z"/>
                                    </svg>
                                </figure>
                                <div class="info">
                                    <ul class="advanced">
                                        <li>50 Users</li>
                                        <li>80 Projects</li>
                                        <li>20 E-mail accounts</li>
                                        <li>10 Domains</li>
                                    </ul>
                                    <div class="price">
                                        <span>120.00</span>
                                        <span>M</span>
                                    </div>
                                    <a href="#" class="au-btn premium au-btn-hover">Purchase</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lastest news -->
        <section class="blog section-padding-large background-grey">
            <div class="container">
                <div class="section-title section-title-left">
                    <h2>Latest News</h2>
                </div>
                <div class="blog-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item hover-scale">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-blog-1.jpg')) }}" alt="">
                                    </a>
                                    <div class="hover-border">
                                        <a href="single.html">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single.html">
                                            Technologies Driving Digital Transformation
                                        </a>
                                    </h3>
                                    <p class="desc">
                                        Lobortis scelerisque fermentum  faucibus in ornare quam. Fringilla est ullamcorper eget nulla facilisi etiam dignissim.
                                    </p>
                                    <div class="meta">
                                        <span class="date"><i class="far fa-calendar"></i>24 June,2018</span>
                                        <span class="likes">
                                            <i class="fas fa-heart"></i>22 Likes
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item hover-scale">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-blog-2.jpg')) }}" alt="">
                                    </a>
                                    <div class="hover-border">
                                        <a href="single.html">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single.html">
                                            Skills Training: The Fuel for Great Performance Reviews
                                        </a>
                                    </h3>
                                    <p class="desc">
                                        Fringilla scelerisque fermentum  faucibus in ornare quam. Fringilla est ullamcorper eget nulla facilisi etiam dignissim.
                                    </p>
                                    <div class="meta">
                                        <span class="date"><i class="far fa-calendar"></i>26 June,2018</span>
                                        <span class="likes">
                                            <i class="fas fa-heart"></i>25 Likes
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item hover-scale">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-blog-3.jpg')) }}" alt="">
                                    </a>
                                    <div class="hover-border">
                                        <a href="single.html">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single.html">
                                            Free eBook: 2019's Top 8 IT Certifications
                                        </a>
                                    </h3>
                                    <p class="desc">
                                        Volutpat lacus laoreet non curabitr. Feugiat pretium nibh ipsum consequat nisl vel pretium lectus massa placera.
                                    </p>
                                    <div class="meta">
                                        <span class="date"><i class="far fa-calendar"></i>26 June,2018</span>
                                        <span class="likes">
                                            <i class="fas fa-heart"></i>15 Likes
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer page -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-info">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ (Theme::url('public/visual_style/images/logo-white.png')) }}" alt="SmartEdu"></a>
                            </div>
                            <p class="footer-intro">
                                Proin libero nunc conseq interdum varius sit amet. Metus ali elei mi in nulla posuere. Tortor preti viverra suspendisse potenti nul ac.
                            </p>
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-menu">
                            <div class="footer-title">
                                <h4>Link Useful</h4>
                            </div>
                            <div class="footer-link-menu">
                                <ul>
                                    <li><a href="#"><i class="la la-angle-right"></i>Courses</a></li>
                                    <li><a href=""><i class="la la-angle-right"></i>Teacher</a></li>
                                    <li><a href=""><i class="la la-angle-right"></i>Graduation</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>International</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Support</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="la la-angle-right"></i>About Us</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Partner</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Blog Post</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Events</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-gallery">
                            <div class="footer-title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="footer-gallery-content">
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-1.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-1.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-2.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-2.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-3.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-3.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-4.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-4.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-5.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-5.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-6.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-6.jpg')) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-contact">
                            <div class="footer-title">
                                <h4>Infomation</h4>
                            </div>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>SmartEdu, 20th St, New York, NY 10003</span>
                                </li>
                                <li class="footer-phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>+1 333-444-5555</span>
                                </li>
                                <li class="footer-fax">
                                    <i class="fas fa-fax"></i>
                                    <span>+1 333-444-5555</span>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <span>info@smartedu.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="copyright">Copyright @ 2019 <span>SmartEdu</span>. <a class="au-btn-buy" href="https://themeforest.net/cart/add_items?item_ids=23218895">Get The Template</a></p>

                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- JS -->

    <!-- Jquery and Boostrap library -->
    <script src="{{ (Theme::url('public/visual_style/vendor/bootstrap/js/popper.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/jquery/jquery.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/bootstrap/js/bootstrap.min.js')) }}"></script>

    <!-- Other js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
    <script src="{{ (Theme::url('public/visual_style/js/theme-map.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/jquery.countdown.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/masonry.pkgd.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/imagesloaded.pkgd.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/isotope-docs.min.js')) }}"></script>

    <!-- Vendor JS -->
    <script src="{{ (Theme::url('public/visual_style/vendor/slick/slick.min.js')) }}"></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/jquery-ui/jquery-ui.min.js')) }}'></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/waypoints/lib/jquery.waypoints.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/jquery-validation/dist/jquery.validate.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/sweetalert/sweetalert.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/fancybox/dist/jquery.fancybox.min.js')) }}"></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/fullcalendar/lib/moment.min.js')) }}'></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/fullcalendar/fullcalendar.min.js')) }}'></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/wow/dist/wow.min.js')) }}'></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ (Theme::url('public/visual_style/vendor/revolution/js/jquery.themepunch.tools.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/revolution/js/jquery.themepunch.revolution.min.js')) }}"></script>

    <!-- Form JS -->
    <script src="{{ (Theme::url('public/visual_style/js/validate-form.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/config-contact.js')) }}"></script>

    <!-- Main JS -->
    <script src="{{ (Theme::url('public/visual_style/js/main.js')) }}"></script> 

</body>

</html>
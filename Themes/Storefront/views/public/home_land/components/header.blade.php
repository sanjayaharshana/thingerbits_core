<header class="header">
        <div class="header-top hidden-tablet-landscape">
            <div class="container">
                <div class="header-top-content display-flex">
                    <div class="header-top-info">
                        <div class="header-socials">
                            <ul>
                                <li><a href="https://www.facebook.com/thingerbits/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/thingerbits"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCqHeZLPI-ImB2_bU3yWT6PQ"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <a href="mailto:info@smartedu.com" class="email"><i class="far fa-envelope"></i>info@smartedu.com</a>
                        <a href="#" class="telephone"><i class="fas fa-mobile-alt"></i>+1 222-333-9999</a>
                    </div>
                    <div class="header-top-account">
                            @auth                            
                            <a href="{{ route('login') }}" class="signup">My Acccount</a>
                            @else 
                            <a href="{{ route('register') }}" class="signup"><i class="fas fa-edit"></i>Sign Up</a>
                            <a href="{{ route('login') }}" class="login">Sign In</a>
                            @endauth
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-tablet-landscape" id="js-navbar-fixed">
            <div class="container">
                <div class="header-bottom">
                    <div class="header-bottom-content display-flex">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ (Theme::url('public/visual_style/images/logo.png')) }}" alt="SmartEdu">
                            </a>
                        </div>
                        <div class="menu-search display-flex">
                            <nav class="menu">
                                <div>
                                    <ul class="menu-primary">
                                        <li class="menu-item curent-menu-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('getcourses','micro_service_pal') }}">Courses</a> 
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="Wordls Mart">Arduino</a></li>
                                                <li class="menu-item"><a href="index2.html">Raspberry Pi</a></li>
                                                <li class="menu-item"><a href="index3.html">MicroBits</a></li>
                                                <li class="menu-item"><a href="index3.html">Internet of Things</a></li>
                                                <li class="menu-item"><a href="index3.html">Robotics</a></li>
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
                                <a href="{{ route('home') }}">Home</a>
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
                                <a href="">Courses</a>                              
                                
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
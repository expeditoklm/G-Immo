<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/andora/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2024 17:26:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link of CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/scrollCue.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <style>
        .custom-star-rating {
            display: flex;
            direction: column;
        }

        .custom-star-rating .ri {
            font-size: 2rem;
            cursor: pointer;
            color: gray;
        }

        .custom-star-rating .ri:hover,
        .custom-star-rating .ri:hover~.ri {
            color: gold;
        }

        .custom-star-rating .ri.ri-star-fill {
            color: gold;
        }
    </style>

    @yield('css')



    <title>@yield('nomPage') </title>

    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader-area text-center position-fixed top-0 bottom-0 start-0 end-0" id="preloader">
        <div class="loader position-absolute start-0 end-0">
            <img src="{{asset('assets/images/favicon.png')}}" alt="favicon">
            <!-- <img src="{{asset('assets/images/agents/agents1.jpg')}}" style="height: auto; width: 100px " alt="favicon"> -->

            <div class="waviy position-relative">
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">D</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">A</span>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->
    @yield('div_init')
    <!-- Start Top Header Area -->
    <div class="top-header-area">
        <div class="container-fluid">
            <div class="@yield('div_init2')">
                @yield('div_init3')
                <div class="col-lg-7 col-md-7">
                    <ul class="top-header-info-with-social">
                        <li>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                                <a href="https://bd.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="ri-youtube-line"></i>
                                </a>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="mail-info">
                                <i class="ri-mail-line"></i>
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#22515752524d50566246474f4d0c414d4f"><span class="__cf_email__" data-cfemail="e4979194948b9690a48081898bca878b89">[email&#160;protected]</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-5 text-end">
                    <div class="top-header-call-info">
                        <i class="ri-phone-line"></i>
                        <a href="tel:00201068710594">+(002) 0106-8710-594</a>
                    </div>
                </div>
                @yield('div_finish3')
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->


    <!-- Start Navbar Area -->
    <nav class="navbar navbar-expand-xl" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} ">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
            </a>
            <form class="search-form" method="POST" action="{{ route('pages.search-post') }}">
                @csrf
                <input type="search" name="ttr_cra_dsc_sta_p_v_q_typ_us" class="search-field" placeholder="Search property">
                <button type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                <span class="burger-menu">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }}" class=" nav-link {{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'active' : '' }}">
                            Home

                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{ request()->route() && request()->route()->getName() == 'pages.search' ? 'javascript:void(0)' : route('pages.search') }}" class=" nav-link {{ request()->route() && request()->route()->getName() == 'pages.search' ? 'active' : '' }}">
                            Property
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'javascript:void(0)' : route('pages.contact-us') }}" class="nav-link {{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'active' : '' }}">Contact Us</a>
                    </li>
                </ul>
                <div class="others-option d-flex align-items-center">
                    @auth
                    <div class="option-item">
                        <div class="user-info">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" onclick="document.getElementById('deconnection').submit(); return false;">Deconnexion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form id="deconnection" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <div class="option-item">
                        <div class="user-info">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{ route('pages.account') }}" class="nav-link {{ request()->route() && request()->route()->getName() == 'pages.account' ? 'active' : '' }}">Log In / Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endauth

                    @auth
                    <div class="option-item">
                        <a href="{{ route('admin.dashbord') }}" class="default-btn {{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'active' : '' }}">Admin</a>
                    </div>
                    @endauth
                </div>

            </div>
        </div>
    </nav>


    @yield('div_finish')
    <!-- End Navbar Area -->

    <!-- Start Responsive Navbar Area -->
    <div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} " class="logo d-inline-block">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
            </a>
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="close-btn">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">


                <div class="accordion-item">
                    <a class="accordion-button without-icon {{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }}">
                        Home
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon {{ request()->route() && request()->route()->getName() == 'pages.search' || request()->route() && request()->route()->getName() == 'pages.search-post' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'pages.search' ? 'javascript:void(0)' : route('pages.search') }}">
                        Property
                    </a>
                </div>


                <div class="accordion-item ">
                    <a class="accordion-button without-icon {{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'javascript:void(0)' : route('pages.contact-us') }}">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="others-option">

                <div class="option-item nav-item">
                    <a href="{{ request()->route() && request()->route()->getName() == 'pages.account' ? 'javascript:void(0)' : route('pages.account') }}" class="default-btn {{ request()->route() && request()->route()->getName() == 'pages.account' ? 'active' : '' }}" style="margin-right: 70px; margin-bottom: 10px;">Log In / Register</a>
                    @auth
                    <a href="{{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'javascript:void(0)' : route('admin.dashbord') }}" class="default-btn">Admin</a>
                    @endauth
                </div>
                <div class="option-item">
                    <form class="search-form" method="POST" action="{{ route('pages.search-post') }}">
                        @csrf
                        <input type="search" name="ttr_cra_dsc_sta_p_v_q_typ_us" class="search-field" placeholder="Search property">
                        <button type="submit">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Responsive Navbar Area -->









    @yield('content')



    <!-- Start Footer Area -->
    <footer class="footer-area pt-120">
        <div class="container">
            <div class="row justify-content-center" data-cues="slideInUp">
                <div class="col-xl-3 col-md-12">
                    <div class="single-footer-widget pe-3">
                        <div class="widget-logo">
                            <a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} ">
                                <img src="{{asset('assets/images/logo2.png')}}" alt="logo2">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit dollar consectetur adipiscing elit. Diam lectus purus ultricies neque.</p>
                        <div class="widget-social">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-x-line"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://bd.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="ri-youtube-line"></i>
                            </a>
                            <a href="https://www.pinterest.com/" target="_blank">
                                <i class="ri-pinterest-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-12">
                    <div class="row justify-content-center" data-cues="slideInUp">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Company</h3>
                                <ul class="custom-links">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="customers-review.html">Our Reviews</a></li>
                                    <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Resources</h3>
                                <ul class="custom-links">
                                    <li><a href="property-grid.html">Apartments</a></li>
                                    <li><a href="property-grid.html">Villa</a></li>
                                    <li><a href="property-grid.html">Sell or Buy</a></li>
                                    <li><a href="property-grid.html">New Apartment</a></li>
                                    <li><a href="agents.html">Our Agents</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Quick Links</h3>
                                <ul class="custom-links">
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="what-we-do.html">What We Do</a></li>
                                    <li><a href="customers-review.html">Testimonial</a></li>
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="neighborhood.html">Neighborhood</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Contact Info</h3>
                                <ul class="info-list">
                                    <li>
                                        <span>Address:</span>
                                        45/15 New alsala Avenew Booston town, Austria
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#95e6e0e5e5fae7e1d5f1f0f8fabbf6faf8"><span class="__cf_email__" data-cfemail="b7c4c2c7c7d8c5c3f7d3d2dad899d4d8da">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span>Phone:</span>
                                        <a href="tel:00201068710594">+(002) 0106-8710-594</a>
                                    </li>
                                    <li>
                                        <span>Fax:</span>
                                        <a href="tel:01068710594">+0106-8710-594</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>
                    Copyright <span>Andora</span> All Rights Reserved by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Back to Top -->
    <button type="button" id="back-to-top" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-s-line"></i>
    </button>
    <!-- End Back to Top -->

    <!-- Start Lines -->
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <!-- End Lines -->

    <!-- Link of JS Files -->
    <script data-cfasync="false" src="{{asset('https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollCue.min.js')}}"></script>
    <script src="{{asset('assets/js/fslightbox.min.js')}}"></script>
    <script src="{{asset('assets/js/simpleParallax.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    @yield('js')
</body>

<!-- Mirrored from templates.envytheme.com/andora/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2024 17:27:39 GMT -->

</html>
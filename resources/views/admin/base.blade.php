<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 12:13:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>@yield('nomPage') </title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/admin/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/dashbord-mobile-menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('assets/admin/css/default.css')}}">

    @yield('css')

</head>

<body class="maxw1600 m0a dashboard-bd @yield('body') ">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="{{ request()->route()->getName() == 'pages.agent' ? 'javascript:void(0)' : route('pages.agent') }} " ><img src="{{asset('assets/images/favicon.png') }}" alt="favicon"></a>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <nav id="navigation" class="style-1">
                                <ul id="responsive">
                                    <li><a href="{{ request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} "  class="{{ request()->route()->getName() == 'pages.acceuil' ? 'active' : '' }}">Home</a></li>
                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('assets/admin/images/testimonials/ts-1.jpg')}}" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="{{ request()->route()->getName() == 'admin.user-profile' ? 'javascript:void(0)' : route('admin.user-profile') }} "> Edit profile</a></li>
                                <li><a href="{{ request()->route()->getName() == 'admin.add-property' ? 'javascript:void(0)' : route('admin.add-property') }} "> Add Property</a></li>
                                <li><a href="{{ request()->route()->getName() == 'pages.agent' ? 'javascript:void(0)' : route('pages.agent') }} "> Change Password</a></li>
                                <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <li> <button type="submit" class="btn btn-danger col-md-12">Log Out</button></li>
                                    </form>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding @yield('sectio') ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="text-center mt-2"><img src="{{asset('assets/images/favicon.png') }}" alt="favicon"> </div>
                            <div class="header clearfix">
                                <img src="{{asset('assets/admin/images/testimonials/ts-1.jpg')}}" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a class="{{ request()->route()->getName() == 'admin.dashbord' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'admin.dashbord' ? 'javascript:void(0)' : route('admin.dashbord') }}">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route()->getName() == 'admin.my-properties' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'admin.my-properties' ? 'javascript:void(0)' : route('admin.my-properties') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route()->getName() == 'admin.user-profile' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'admin.user-profile' ? 'javascript:void(0)' : route('admin.user-profile') }}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a class="{{ request()->route()->getName() == 'admin.add-property' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'admin.add-property' ? 'javascript:void(0)' : route('admin.add-property') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route()->getName() == 'admin.messages' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'admin.messages' ? 'javascript:void(0)' : route('admin.messages') }}">
                                            <i class="fas fa-credit-card"></i>Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route()->getName() == 'admin.reviews' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'admin.reviews' ? 'javascript:void(0)' : route('admin.reviews') }}">
                                            <i class="fas fa-paste"></i>Reviews
                                        </a>
                                    </li>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="@yield('class')">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'pages.acceuil' ? 'active' : '' }}" href="{{ request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }}">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'admin.my-properties' ? 'active' : '' }}"   href="{{ request()->route()->getName() == 'admin.my-properties' ? 'javascript:void(0)' : route('admin.my-properties') }}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'admin.user-profile' ? 'active' : '' }}"   href="{{ request()->route()->getName() == 'admin.user-profile' ? 'javascript:void(0)' : route('admin.user-profile') }}">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        
                                        
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'admin.add-property' ? 'active' : '' }}"   href="{{ request()->route()->getName() == 'admin.add-property' ? 'javascript:void(0)' : route('admin.add-property') }}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'admin.messages' ? 'active' : '' }}"   href="{{ request()->route()->getName() == 'admin.messages' ? 'javascript:void(0)' : route('admin.messages') }}">
                                                <i class="fas fa-paste mr-3"></i>Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'admin.reviews' ? 'active' : '' }}"   href="{{ request()->route()->getName() == 'admin.reviews' ? 'javascript:void(0)' : route('admin.reviews') }}">
                                                <i class="fa fa-lock mr-3"></i>Reviews
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->route()->getName() == 'pages.agent' ? 'active' : '' }}"   href="{{ request()->route()->getName() == 'pages.agent' ? 'javascript:void(0)' : route('pages.agent') }}">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION DASHBOARD -->

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('assets/admin/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/admin/js/tether.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/moment.js')}}"></script>
        <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/mmenu.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/mmenu.js')}}"></script>
        <script src="{{asset('assets/admin/js/swiper.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/swiper.js')}}"></script>
        <script src="{{asset('assets/admin/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/slick2.js')}}"></script>
        <script src="{{asset('assets/admin/js/fitvids.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/lightcase.js')}}"></script>
        <script src="{{asset('assets/admin/js/search.js')}}"></script>
        <script src="{{asset('assets/admin/js/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/newsletter.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.form.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/searched.js')}}"></script>
        <script src="{{asset('assets/admin/js/dashbord-mobile-menu.js')}}"></script>
        <script src="{{asset('assets/admin/js/forms-2.js')}}"></script>
        <script src="{{asset('assets/admin/js/color-switcher.js')}}"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });
        </script>

        <!-- MAIN JS -->
        <script src="{{asset('assets/admin/js/script.js')}}"></script>

        @yield('js')

    </div>
    <!-- Wrapper / End -->
</body>
<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 12:13:24 GMT -->
</html>

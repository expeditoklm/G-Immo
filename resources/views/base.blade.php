<!DOCTYPE html>
<html lang="zxx">


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
            <!-- <img src="{{asset('assets/images/favicon.png')}}" alt="favicon"> -->
            <img src="{{asset('assets/images/agents/1.png')}}" style="height: auto; width: 100px " alt="favicon">

            <div class="waviy position-relative">
                <span class="d-inline-block">M</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">W</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">Z</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">N</span>
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
                        <a href="tel:22995194936">+(229) 95 1949 36</a>
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
                <img src="{{asset('assets/images/agents/log.png')}}" alt="logo">
            </a>
            <form class="search-form" method="POST" action="{{ route('pages.search-post') }}">
                @csrf
                <input type="search" name="ttr_cra_dsc_sta_p_v_q_typ_us" class="search-field" placeholder="Rechercher une propriété">
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
                        Accueil
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{ request()->route() && request()->route()->getName() == 'pages.search' ? 'javascript:void(0)' : route('pages.search') }}" class=" nav-link {{ request()->route() && request()->route()->getName() == 'pages.search' ? 'active' : '' }}">
                        Propriétés
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'javascript:void(0)' : route('pages.contact-us') }}" class="nav-link {{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'active' : '' }}">Contactez-nous</a>
                    </li>
                </ul>
                <div class="others-option d-flex align-items-center">
                    @auth
                    <div class="option-item">
                        <div class="user-info">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" onclick="document.getElementById('deconnection').submit(); return false;">Déconnexion</a>
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
                                    <a href="{{ route('pages.account') }}" class="nav-link {{ request()->route() && request()->route()->getName() == 'pages.account' ? 'active' : '' }}">Se connecter / S'inscrire</a>
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
                       Accueil
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon {{ request()->route() && request()->route()->getName() == 'pages.search' || request()->route() && request()->route()->getName() == 'pages.search-post' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'pages.search' ? 'javascript:void(0)' : route('pages.search') }}">
                        Propriétés
                    </a>
                </div>


                <div class="accordion-item ">
                    <a class="accordion-button without-icon {{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'javascript:void(0)' : route('pages.contact-us') }}">
                    Contactez-nous
                    </a>
                </div>
            </div>
            <div class="others-option">

                <div class="option-item nav-item">
                    <a href="{{ request()->route() && request()->route()->getName() == 'pages.account' ? 'javascript:void(0)' : route('pages.account') }}" class="default-btn {{ request()->route() && request()->route()->getName() == 'pages.account' ? 'active' : '' }}" style="margin-right: 70px; margin-bottom: 10px;">Se connecter / S'inscrire</a>
                    @auth
                    <a href="{{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'javascript:void(0)' : route('admin.dashbord') }}" class="default-btn">Admin</a>
                    @endauth
                </div>
                <div class="option-item">
                    <form class="search-form" method="POST" action="{{ route('pages.search-post') }}">
                        @csrf
                        <input type="search" name="ttr_cra_dsc_sta_p_v_q_typ_us" class="search-field" placeholder="Rechercher une propriété">
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
                                <!-- <img src="{{asset('assets/images/logo2.png')}}" alt="logo2"> -->
                                <img src="{{asset('assets/images/agents/logo.png')}}" class="m-0 p-0" alt="logo">
                            </a>
                        </div>
                        <p>Découvrez des solutions immobilières adaptées à vos besoins avec notre expertise et notre engagement pour un avenir serein</p>
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
                                <h3>Entreprise</h3>
                                <ul class="custom-links">
                                    <li><a href="#">À propos de nous</a></li>
                                    <li><a href="{{ request()->route() && request()->route()->getName() == 'pages.contact-us' ? 'javascript:void(0)' : route('pages.contact-us') }}">Contactez-nous</a></li>
                                    <li><a href="{{ request()->route() && request()->route()->getName() == 'pages.privacy-policy' ? 'javascript:void(0)' : route('pages.privacy-policy') }}">Politique de Confidentialité</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Ressources</h3>
                                <ul class="custom-links">
                                    

                                    <li><a href="#" onclick="document.getElementById('post-Apartment1').submit(); return false;">Résidentiel</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment1" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="1">
                                    </form>


                                    <li><a href="#" onclick="document.getElementById('post-Apartment2').submit(); return false;">Commercial</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment2" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="2">
                                    </form>


                                    <li><a href="#" onclick="document.getElementById('post-Apartment3').submit(); return false;">Ferme / Domaine agricole</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment3" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="3">
                                    </form>


                                    <li><a href="#" onclick="document.getElementById('post-Apartment4').submit(); return false;">Parcelle</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment4" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="4">
                                    </form>


                                    <li><a href="#" onclick="document.getElementById('post-Apartment5').submit(); return false;">Duplex/Triplex/Quadruplex</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment5" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="5">
                                    </form>

                                    <li><a href="#" onclick="document.getElementById('post-Apartment6').submit(); return false;">Bureau / Bâtiment commercial</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment6" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="6">
                                    </form>

                                    <li><a href="#" onclick="document.getElementById('post-Apartment7').submit(); return false;">Appartements</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment7" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="7">
                                    </form>

                                    <li><a href="#" onclick="document.getElementById('post-Apartment8').submit(); return false;">Entrepôt</a></li>
                                    <!-- Formulaire caché -->
                                    <form id="post-Apartment8" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="type_propriete_id" value="8">
                                    </form>

                        
                                </ul>
                            </div>
                        </div>
 


                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Informations de contact</h3>
                                <ul class="info-list">
                                    <li>
                                        <span>Addresse:</span>
                                        Cotonou, Bénin
                                    </li>
                                    <li>
                                        <span>Courriel :</span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#95e6e0e5e5fae7e1d5f1f0f8fabbf6faf8"><span class="__cf_email__" data-cfemail="b7c4c2c7c7d8c5c3f7d3d2dad899d4d8da">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span>Téléphone :</span>
                                        <a href="tel:22995194936">+(229) 95 1949 36</a>
                                    </li>

                                    <li>
                                        <span>Téléphone :</span>
                                        <a href="tel:22966064948">+(229) 66 0649 48</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>
                    Copyright <span>Miawezon</span> Tout droits reservés 
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

<!-- Mirrored from templates.envytheme.com/miawezon/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2024 17:27:39 GMT -->

</html>
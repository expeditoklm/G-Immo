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

    <style>
        .left-aligned-btn {
            text-align: left;
            padding-left: 15px;
            /* Ajustez cette valeur selon vos besoins */
            border: none;
            /* Supprimer le contour */
            background: none;
            /* Supprimer le remplissage */
            color: inherit;
            /* Inhérer la couleur du texte */
        }

        .left-aligned-btn:focus {
            outline: none;
            /* Supprimer le contour lors du focus */
            box-shadow: none;
            /* Supprimer l'ombre lors du focus */
        }



        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            /* Adjust this value to move the modal up or down */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
            position: relative;
            top: 10%;
            /* Add this line to move the modal content down */
        }

        @media (min-width: 768px) {
            .modal-content {
                top: 20%;
                /* Adjust this value for positioning on larger screens */
                left: 8%;
                /* Adjust this value for positioning on larger screens */
            }
        }

        /* Position for smaller screens */
        @media (max-width: 767px) {
            .modal-content {
                top: 40%;
                /* Adjust this value for positioning on smaller screens */
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>



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
                                <a href="{{ request()->route() && request()->route()->getName() == 'pages.agent' ? 'javascript:void(0)' : route('pages.agent') }} "><img src="{{asset('assets/images/favicon.png') }}" alt="favicon"></a>
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
                                    <li><a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} " class="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'active' : '' }}">Acceuil</a></li>
                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        @php
                        $user = \App\Helpers\BaseHelper::getUser();
                        @endphp

                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                @if($user)
                                <span>
                                    @if($user->sexe == 'Feminin' && !$user->profile_img)
                                    <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image">
                                    @elseif($user->sexe == 'Masculin' && !$user->profile_img)
                                    <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image">
                                    @else
                                    <img src="{{ asset($user->profile_img) }}" alt="image">
                                    @endif

                                </span>Salut, {{ $user->nom_prenom }}!
                            </div>
                            @else
                            <p>Utilisateur non trouvé.</p>
                            @endif
                            <ul>
                                <li><a href="{{ request()->route() && request()->route()->getName() == 'admin.user-profile' ? 'javascript:void(0)' : route('admin.user-profile') }} "> Profile</a></li>
                                <li><a href="{{ request()->route() && request()->route()->getName() == 'admin.modif-user-profile' ? 'javascript:void(0)' : route('admin.modif-user-profile') }} "> Modifier le profil</a></li>
                                <li><a href="{{ request()->route() && request()->route()->getName() == 'admin.modif-pswd' ? 'javascript:void(0)' : route('admin.modif-pswd') }} ">Changer votre mot de passe</a></li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn  btn-danger   text-left "><i class="fas fa-sign-out-alt mr-3"></i>Déconnection</button>
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

                            @if($user)
                            <div class="user-profile d-block align-items-center ">
                                <div class="header pb-0">
                                    @if($user->sexe == 'Feminin' && !$user->profile_img)
                                    <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image" class="img-fluid rounded-circle m-0 shadow" style="width: 100px; height: 100px; object-fit: cover;">
                                    @elseif($user->sexe == 'Masculin' && !$user->profile_img)
                                    <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image" class="img-fluid rounded-circle mb-0 pb-0 shadow" style="width: 100px; height: 100px; object-fit: cover; ">
                                    @else
                                    <img src="{{ asset($user->profile_img) }}" alt="image" class="img-fluid rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover;">
                                    @endif
                                </div>
                                <div class="active-user ml-2">
                                    <h2 class="mb-0">{{ $user->nom_prenom }}</h2>
                                </div>
                            </div>

                            @else
                            <p>User not found.</p>
                            @endif
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'javascript:void(0)' : route('admin.dashbord') }}">
                                            <i class="fa fa-tachometer"></i>
                                            Tableau de Bord
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.my-properties' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.my-properties' ? 'javascript:void(0)' : route('admin.my-properties') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Mes Propriétés
                                        </a>
                                    </li>



                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.add-property' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.add-property' ? 'javascript:void(0)' : route('admin.add-property') }}">
                                            <i class="fa fa-plus-square"></i>
                                            Ajouter une propriété
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.messages' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.messages' ? 'javascript:void(0)' : route('admin.messages') }}">
                                            <i class="fas fa-credit-card"></i>Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.reviews' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.reviews' ? 'javascript:void(0)' : route('admin.reviews') }}">
                                            <i class="fas fa-paste"></i>Commentaires
                                        </a>
                                    </li>
                                    @if ($user->role == "admin")
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.users' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.users' ? 'javascript:void(0)' : route('admin.users') }}">
                                            <i class="fa fa-users"></i>

                                            Utilisateurs
                                        </a>
                                    </li>

                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.add-type-property' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.add-type-property' ? 'javascript:void(0)' : route('admin.add-type-property') }}">
                                            <i class="fa fa-building"></i>
                                            Type de propriétés
                                        </a>
                                    </li>

                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.caracteristique-type-property' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.add-caracteristique-property' ? 'javascript:void(0)' : route('admin.caracteristique-type-property') }}">
                                            <i class="fa fa-th-list"></i>
                                            Caractéristiques
                                        </a>
                                    </li>
                                    @endif


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
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.dashbord' ? 'javascript:void(0)' : route('admin.dashbord') }}">
                                            <i class="fa fa-tachometer mr-2"></i>
                                            Tableau de Bord
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.my-properties' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.my-properties' ? 'javascript:void(0)' : route('admin.my-properties') }}">
                                            <i class="fa fa-list mr-2"></i>Mes Propriétés
                                        </a>
                                    </li>



                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.add-property' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.add-property' ? 'javascript:void(0)' : route('admin.add-property') }}">
                                            <i class="fa fa-plus-square mr-2"></i>
                                            Ajouter une propriété
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.messages' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.messages' ? 'javascript:void(0)' : route('admin.messages') }}">
                                            <i class="fas fa-credit-card mr-2"></i>Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.reviews' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.reviews' ? 'javascript:void(0)' : route('admin.reviews') }}">
                                            <i class="fas fa-paste mr-2"></i>Commentaires
                                        </a>
                                    </li>
                                    @if ($user->role == "admin")
                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.users' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.users' ? 'javascript:void(0)' : route('admin.users') }}">
                                            <i class="fa fa-users mr-2"></i>

                                            Utilisateurs
                                        </a>
                                    </li>

                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.add-type-property' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.add-type-property' ? 'javascript:void(0)' : route('admin.add-type-property') }}">
                                            <i class="fa fa-building mr-2"></i>
                                            Type de propriétés
                                        </a>
                                    </li>

                                    <li>
                                        <a class="{{ request()->route() && request()->route()->getName() == 'admin.caracteristique-type-property' ? 'active' : '' }}" href="{{ request()->route() && request()->route()->getName() == 'admin.add-caracteristique-property' ? 'javascript:void(0)' : route('admin.caracteristique-type-property') }}">
                                            <i class="fa fa-th-list mr-2"></i>
                                            Caractéristiques
                                        </a>
                                    </li>
                                    @endif
                                   
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn left-aligned-btn w-100 text-left">
                                                <i class="fas fa-sign-out-alt "></i>Déconnection
                                            </button>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @include('admin.success_error')
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



        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var deleteIcons = document.querySelectorAll(".delete-icon");

                deleteIcons.forEach(function(icon) {
                    icon.addEventListener("click", function(event) {
                        event.preventDefault();
                        var messageId = this.getAttribute('data-id');
                        var modal = document.getElementById("myModal-" + messageId);
                        modal.style.display = "block";
                    });
                });

                var modals = document.querySelectorAll(".modal");
                modals.forEach(function(modal) {
                    var span = modal.querySelector(".close");
                    var cancelBtn = modal.querySelector("#cancel-delete");

                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    cancelBtn.onclick = function() {
                        modal.style.display = "none";
                    }

                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                });
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
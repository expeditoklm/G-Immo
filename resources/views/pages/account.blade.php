@extends('base')

@section('nomPage')
Property | Miawezon
@endsection

@section('css')

@endsection

@section('div_init')
<div class="main-header-area main-header-with-relative">

    @endsection

    @section('div_finish')
</div>
@endsection

@section('div_init2')
top-header-inner

@endsection

@section('div_init3')
<div class="row justify-content-center align-items-center">

    @endsection

    @section('div_finish3')
</div>
@endsection

@section('content')


<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>S'identifier / S'enregistrer</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Acceuil</a>
                </li>
                <li>Compte</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->



<!-- Start Profile Authentication Area -->
<div class="profile-authentication-area ptb-120">
    <div class="container">


        @include('admin.success_error')

        <div class="profile-authentication-inner">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="profile-authentication-box">
                        <div class="content">
                            <h3>Se Connecter</h3>
                            <p>Vous n'avez pas de compte? <a href="#">S'inscrire à votre droite</a></p>
                        </div>
                        <form method="POST" class="authentication-form" action="{{ route('login') }}">
                            @csrf
                            <div class="google-btn">
                                <button type="submit"><img src="{{asset('assets/images/google.svg')}}" alt="google">Sign in with Google</button>
                            </div>
                            <div class="or">
                                <span>OR</span>
                            </div>
                            <div class="form-group">
                                <label>Addresse E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="Entrer votre addresse email "required>
                                <div class="icon">
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mot de Passe</label>
                                <input type="password" name="password" class="form-control" placeholder="Votre mot de passe"required>
                                <div class="icon">
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                            <div class="form-bottom d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember_token" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        Se souvenir de moi
                                    </label>
                                </div>
                                <a href="#" class="forgot-password">
                                    Mot de passe oublier?
                                </a>
                            </div>
                            <button type="submit" class="default-btn">Se Connecter</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="profile-authentication-box with-gap">
                        <div class="content">
                            <h3>Créez votre compte</h3>
                            <p>Vous avez déjà un compte ? <a href="#">Se Connecter à votre gauche</a></p>
                        </div>
                        <form method="POST" class="authentication-form" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="google-btn">
                                <button type="submit"><img src="{{asset('assets/images/google.svg')}}" alt="google">Se connecter avec Google</button>
                            </div>
                            <div class="or">
                                <span>OU</span>
                            </div>
                            <div class="form-group">
                                <label>Votre Nom et Prénom</label>
                                <input type="text" name="nom_prenom" class="form-control" value="{{ old('nom_prenom') }}" placeholder="Entrer nom" required>
                                <div class="icon">
                                    <i class="ri-user-3-line"></i>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <div>
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group mb-3">
                                                <label >Sexe</label>
                                                <div class="m-0 d-flex">
                                                    <div class="form-check form-check-inline d-flex">
                                                        <input class="form-check-input m-2 mt-1" id="typePenne1" type="radio" name="sexe" id="typePnne1" value="Masculin" checked>
                                                        <label class="form-check-label" for="typePenne1">Masculin</label>
                                                    </div>
                                                    <div class="form-check form-check-inline d-flex">
                                                        <input class="form-check-input m-2 mt-1" id="typenne2" type="radio" name="sexe" id="typePe2" value="Feminin">
                                                        <label class="form-check-label" for="typenne2">Féminin</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Addresse E-mail </label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Entrer votre addresse email" required>
                                <div class="icon">
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="number" name="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="Entrer votre telephone" required>
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pays</label>
                                <select class="form-control" value="{{ old('pays') }}" name="pays" id="country" required>
                                    <option value="" selected>Selectionner votre pays</option>
                                    <option value="Bénin" >Bénin</option>
                                </select>
                                <div class="icon">
                                    <i class="ri-earth-line"></i>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Ville</label>
                                <select class="form-control" value="{{ old('ville') }}" name="ville" id="city" aria-label="Default select example" required>
                                    <option value="" selected>Selectionner votre ville</option>
                                    @foreach ($cities as $item)
                                    <option value="{{ $item->id }}">{{ $item->libelle  }}</option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="ri-building-line"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Régistre de Commerce (RCCM)</label>
                                <input type="file" name="rccm" class="form-control" value="{{ old('telephone') }}" placeholder="Entrer votre telephone" required>
                                <div class="icon">
                                <i class="ri-file-text-line"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Pièce d'Identité</label>
                                <input type="file" name="identite" class="form-control" value="{{ old('telephone') }}" placeholder="Entrer votre telephone" required>
                                <div class="icon">
                                <i class="ri-passport-line"></i> 
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Mot de Passe</label>
                                <input type="password" name="password" class="form-control" placeholder="Votre Mot de Passe" required>
                                <div class="icon">
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirmer Votre Mot de Passe</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer Votre Mot de Passe" required>
                                <div class="icon">
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                        J'accepte les <a href="{{ request()->route() && request()->route()->getName() == 'pages.privacy-policy' ? 'javascript:void(0)' : route('pages.privacy-policy') }}">Termes et Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="default-btn" id="signup-btn" disabled>S'inscrire</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Profile Authentication Area -->

<!-- Start Subscribe Area -->
<div class="subscribe-wrap-area">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Souscrire à notre Newsletter</h2>
                <form class="subscribe-form" action="{{ route('pages.news-letterss') }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="form-control" placeholder="Entrer votre email">
                    <button type="submit" name="btn_mail" class="default-btn">Souscrire</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->







@endsection



@section('js')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var checkbox = document.getElementById("checkbox1");
        var signupBtn = document.getElementById("signup-btn");

        checkbox.addEventListener("change", function() {
            if (checkbox.checked) {
                signupBtn.disabled = false; // Désactiver le bouton si la case est cochée
            } else {
                signupBtn.disabled = true; // Activer le bouton si la case n'est pas cochée
            }
        });
    });
</script>






@endsection
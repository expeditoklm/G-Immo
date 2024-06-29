@extends('base')

@section('nomPage')
Property | Andora
@endsection

@section('css')
<style>
    .rating {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .rating li {
        display: inline-block;
        cursor: pointer;
        font-size: 24px;
    }

    .rating li i {
        color: #ccc;
    }

    .rating li.selected i,
    .rating li.hover i,
    .rating li.hover~li i {
        color: #ffcc00;
    }
</style>
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
        @include('admin.success_error')
        <div class="page-banner-content">
            <h2>Détails de la propriété</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Acceuil</a>
                </li>
                <li>Détails de la propriété</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Property Details Area -->
<div class="property-details-area ptb-120">
    <div class="container">

        <div class="row justify-content-center">
            <div class="property-details-desc">
                <div class="property-details-content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-7 col-md-12">
                            <div class="left-content">
                                <div class="title">
                                    <h2>{{ $propertiesSingle->titre }}</h2>

                                </div>
                                @php
                                    // Récupérer le nom du pays à partir du code enregistré dans la base de données
                                    $userCountryCode = $propertiesSingle->pays;
                                    $userCountry = $geoNamesService->getCountryNameByCode($userCountryCode); // À adapter selon votre service

                                    // Récupérer le nom de la ville à partir du code enregistré dans la base de données
                                    $userCityCode = $propertiesSingle->ville;
                                    $userCity = $geoNamesService->getCityNameByCode($userCityCode); // À adapter selon votre service
                                    @endphp
                                <span class="address">{{ $userCountry }}, {{ $userCity }}, {{ $propertiesSingle->quartier }}</span>
                                <ul class="info-list">
                                    @if(!is_null($propertiesSingle->nbChambre) && $propertiesSingle->nbChambre != 0)
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/property-details/bed.svg') }}" alt="bed">
                                        </div>
                                        <span>{{ $propertiesSingle->nbChambre }} Chambre</span>
                                    </li>
                                    @endif

                                    @if(!is_null($propertiesSingle->nbToillete) && $propertiesSingle->nbToillete != 0)
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/property-details/bathroom.svg') }}" alt="bathroom">
                                        </div>
                                        <span>{{ $propertiesSingle->nbToillete }} Salle de bains</span>
                                    </li>
                                    @endif

                                    @if(!is_null($propertiesSingle->nbPiece) && $propertiesSingle->nbPiece != 0)
                                    <li>

                                        <span>{{ $propertiesSingle->nbPiece }} Pièces</span>
                                    </li>
                                    @endif

                                    @if(!is_null($propertiesSingle->surface) && $propertiesSingle->surface != 0)
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/property-details/area.svg') }}" alt="area">
                                        </div>
                                        <span>{{ $propertiesSingle->surface }} Area</span>
                                    </li>
                                    @endif
                                </ul>

                                <ul class="group-info">
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-share-line"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="ri-instagram-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="right-content">


                                <!-- Recoriger-->
                                <ul class="link-list">
                                    <li>
                                        <a href="#" class="link-btn" onclick="document.getElementById('post1{{ $propertiesSingle->id }}').submit(); return false;">
                                            {{ $propertiesSingle->typePropriete->libelle }}
                                        </a>
                                    </li>

                                    <!-- Formulaire caché -->
                                    <form id="post1{{ $propertiesSingle->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $propertiesSingle->user->id }}">
                                        <input type="hidden" name="type_propriete_id" value="{{ $propertiesSingle->typePropriete->id }}">
                                    </form>

                                    <li>
                                        <a href="#" class="link-btn" onclick="document.getElementById('post2{{ $propertiesSingle->id }}').submit(); return false;">
                                            {{ $propertiesSingle->status }}
                                        </a>
                                    </li>

                                    <!-- Formulaire caché -->
                                    <form id="post2{{ $propertiesSingle->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $propertiesSingle->user->id }}">
                                        <input type="hidden" name="type_propriete_id" value="{{ $propertiesSingle->typePropriete->id }}">
                                        <input type="hidden" name="status" value="{{ $propertiesSingle->status }}">
                                    </form>

                                </ul>
                                <div class="price">
                                    @isset($propertiesSingle->prix)
                                    {{ $propertiesSingle->prix }} XOF
                                    @endif
                                </div>
                                <div class="user">
                                    @if($propertiesSingle->user->sexe == 'Feminin' && !$propertiesSingle->user->profile_img)
                                    <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image">
                                    @elseif($propertiesSingle->user->sexe == 'Masculin' && !$propertiesSingle->user->profile_img)
                                    <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image">
                                    @else
                                    <img src="{{ asset($propertiesSingle->user->profile_img) }}" alt="image">
                                    @endif
                                    <a href="#" onclick="document.getElementById('post3{{ $propertiesSingle->user->id }}').submit(); return false;">{{ $propertiesSingle->user->nom_prenom }}</a>

                                    <!-- Formulaire caché -->
                                    <form id="post3{{ $propertiesSingle->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $propertiesSingle->user->id }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-details-image">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="row justify-content-center">
                                @php
                                // Obtenir les cinq dernières images, triées par date de création en ordre décroissant
                                $images = $propertiesSingle->proprieteImages->sortByDesc('created_at')->take(5);

                                // Séparer les quatre dernières images et la cinquième image
                                $mainImages = $images->take(4 );
                                $extraImage = $images->skip(4)->first();
                                @endphp


                                @foreach($mainImages as $image)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-image">
                                        <img src="{{ asset($image->url) }}" alt="image">

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="block-image">
                                @if($extraImage)
                                <img src="{{ asset($extraImage->url) }}" alt="image">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-details-inner-content">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-md-12">
                            <div class="description">
                                <h3>Description de la Propriété</h3>
                                @isset($propertiesSingle->description)
                                <p>{{ $propertiesSingle->description }}</p>
                                @else
                                <p>Aucune description disponible.</p>
                                @endisset
                            </div>


                            <div class="features">
                                <h3>Les caracteristiques de la Propriété</h3>
                                <div class="row justify-content-center">

                                    @if ($propertiesSingle->caracteristiques->isEmpty())

                                    <p class="mt-3">Aucune caractéristique n'a été renseignée</p>

                                    @else
                                    @foreach ($propertiesSingle->caracteristiques->chunk(5) as $chunk)
                                    <div class="col-lg-4 col-md-4">
                                        <ul class="list">
                                            @foreach ($chunk as $item)
                                            <li>
                                                <i class="ri-check-double-fill"></i>
                                                {{ $item->libelle }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>



                            <div class="comments-area">
                                @if($propertiesSingle->comments->isNotEmpty())
                                <h2>{{ $propertiesSingle->comments->count() }} Comments</h2>
                                @endif
                                <ul class="comments-list">
                                    @foreach ($propertiesSingle->comments as $item)
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/user/user1.png') }}" alt="image">
                                        </div>
                                        <div class="info">
                                            <h4>{{ $item->nom_prenom }}</h4>
                                            <span>{{ $item->created_at }}</span>
                                            @php
                                            $totalStars = 5;
                                            $filledStars = $item->note;
                                            $grayStars = $totalStars - $filledStars;
                                            @endphp

                                            <ul class="rating">
                                                @for ($i = 0; $i < $filledStars; $i++) <li>
                                                    <i class="ri-star-fill"></i>
                                    </li>
                                    @endfor

                                    @for ($i = 0; $i < $grayStars; $i++) <li><i class="ri-star-line"></i>
                                        @endfor


                                </ul>
                                <p>{{ $item->comment }}.</p>
                            </div>
                            </li>
                            @endforeach
                            </ul>


                            <form class="review-form">
                                <div class="title">
                                    <h3>Add A Review</h3>
                                    <ul class="rating">
                                        <li data-value="1"><i class="ri-star-line"></i></li>
                                        <li data-value="2"><i class="ri-star-line"></i></li>
                                        <li data-value="3"><i class="ri-star-line"></i></li>
                                        <li data-value="4"><i class="ri-star-line"></i></li>
                                        <li data-value="5"><i class="ri-star-line"></i></li>
                                    </ul>
                                </div>
                                <input type="hidden" name="rating" id="rating" value="0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group top-css">
                                            <label>Your Review Here</label>
                                            <textarea class="form-control" placeholder="Your review..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="check1">
                                                <label class="form-check-label" for="check1">
                                                    Save my name, email, and website in this browser for the next time I review.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Submit Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="property-details-sidebar">
                            <div class="booking">
                                <form action="{{ route('pages.single') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $propertiesSingle->id}}">
                                    <div class="form-group">
                                        <label>Nom et Prénom</label>
                                        <input type="text" name="nom_prenom" placeholder="Votre nom" class="form-control">
                                        <div class="icon">
                                            <i class="ri-user-3-line"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="text" name="email" placeholder="Votre e-mail" class="form-control">
                                        <div class="icon">
                                            <i class="ri-mail-send-line"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Téléphone</label>
                                        <input type="text" name="telephone" placeholder="+22997456780" class="form-control">
                                        <div class="icon">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                    </div>
                                    <div class="form-group extra-top">
                                        <label>Description</label>
                                        <textarea class="form-control" name="message" placeholder="Je suis intéressé par cette propriété......." rows="5"></textarea>
                                        <div class="icon">
                                            <i class="ri-pencil-line"></i>
                                        </div>
                                    </div>
                                    <button type="submit" name="btn_msg3" class="default-btn">Soumettre votre demande</button>
                                </form>
                            </div>
                            <div class="featured-properties">
                                @if($similarProperties->isNotEmpty())
                                <h3>Propriétés Similaires</h3>
                                @endif
                                <div class="swiper featured-properties-slider">
                                    <div class="swiper-wrapper">
                                        @foreach ($similarProperties as $item)
                                        <div class="swiper-slide">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="{{ route('pages.single') }}">
                                                        <img src="{{ asset($item->proprieteImages->first()->url) }}" alt="image">
                                                    </a>
                                                    <ul class="action">

                                                        <li>
                                                            <div class="media">
                                                                <span><i class="ri-vidicon-fill"></i></span>
                                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- Recoriger-->
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="#" class="link-btn" onclick="document.getElementById('post4{{ $item->id }}').submit(); return false;">
                                                                {{ $item->typePropriete->libelle }}
                                                            </a>
                                                        </li>

                                                        <!-- Formulaire caché -->
                                                        <form id="post4{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                                        </form>

                                                        <li>
                                                            <a href="#" class="link-btn" onclick="document.getElementById('post5{{ $item->id }}').submit(); return false;">
                                                                {{ $item->status }}
                                                            </a>
                                                        </li>

                                                        <!-- Formulaire caché -->
                                                        <form id="post5{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                                            <input type="hidden" name="status" value="{{ $item->status }}">
                                                        </form>

                                                    </ul>
                                                    <ul class="info-list">
                                                        @if(!is_null($item->nbChambre) && $item->nbChambre != 0)
                                                        <li>
                                                            <div class="icon">
                                                                <img src="{{ asset('assets/images/properties/bed.svg') }}" alt="bed">
                                                            </div>
                                                            <span>{{ $item->nbChambre }}</span>
                                                        </li>
                                                        @endif

                                                        @if(!is_null($item->nbToillete) && $item->nbToillete != 0)
                                                        <li>
                                                            <div class="icon">
                                                                <img src="{{ asset('assets/images/properties/bathroom.svg') }}" alt="bathroom">
                                                            </div>
                                                            <span>{{ $item->nbToillete }}</span>
                                                        </li>
                                                        @endif

                                                        @if(!is_null($item->nbPiece) && $item->nbPiece != 0)
                                                        <li>
                                                            <div class="icon">
                                                                <img src="{{ asset('assets/images/properties/parking.svg') }}" alt="parking">
                                                            </div>
                                                            <span>{{ $item->nbPiece }}</span>
                                                        </li>
                                                        @endif

                                                        @if(!is_null($item->surface) && $item->surface != 0)
                                                        <li>
                                                            <div class="icon">
                                                                <img src="{{ asset('assets/images/properties/area.svg') }}" alt="area">
                                                            </div>
                                                            <span>{{ $item->surface }}</span>
                                                        </li>
                                                        @endif
                                                    </ul>

                                                </div>
                                                <div class="properties-content">
                                                    <div class="top">
                                                        <div class="title">
                                                            <!-- Lien cliquable -->
                                                            <h3>
                                                                <a href="#" onclick="document.getElementById('post6{{ $item->id }}').submit(); return false;">
                                                                    {{ $item->titre }}
                                                                </a>
                                                            </h3>


                                                            <!-- Formulaire caché -->
                                                            <form id="post6{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                            </form>

                                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                                        </div>
                                                        <div class="price">
                                                            @isset($item->prix)
                                                            {{ $item->prix }} XOF
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="bottom">
                                                        <div class="user">
                                                            @if($item->user->sexe == 'Feminin' && !$item->user->profile_img)
                                                            <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image">
                                                            @elseif($item->user->sexe == 'Masculin' && !$item->user->profile_img)
                                                            <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image">
                                                            @else
                                                            <img src="{{ asset($item->user->profile_img) }}" alt="image">
                                                            @endif
                                                            <a href="#" onclick="document.getElementById('post7{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                                            <!-- Formulaire caché -->
                                                            <form id="post7{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $item->user->id }}">
                                                            </form>
                                                        </div>
                                                        <ul class="group-info">
                                                            <li>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="ri-share-line"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                                                                <i class="ri-facebook-fill"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                                                                <i class="ri-twitter-x-line"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://www.instagram.com/" target="_blank">
                                                                                <i class="ri-instagram-fill"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                                                                <i class="ri-linkedin-fill"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="properties-pagination"></div>
                                </div>
                            </div>
                            @isset($propertiesSingle->emailContact, $propertiesSingle->telContact)
                            <div class="contact-details">
                                <h3>Contact supplémentaire</h3>
                                <ul class="list">
                                    @php
                                    // Récupérer le nom du pays à partir du code enregistré dans la base de données
                                    $userCountryCode = $proprietaire->pays;
                                    $userCountry = $geoNamesService->getCountryNameByCode($userCountryCode); // À adapter selon votre service

                                    // Récupérer le nom de la ville à partir du code enregistré dans la base de données
                                    $userCityCode = $proprietaire->ville;
                                    $userCity = $geoNamesService->getCityNameByCode($userCityCode); // À adapter selon votre service
                                    @endphp
                                    <li>
                                        <span>Email:</span>
                                        <a href="mailto:{{$propertiesSingle->emailContact}}">{{$propertiesSingle->emailContact}}</a>
                                    </li>
                                    <li>
                                        <span>Phone:</span>
                                        <a href="tel:{{$propertiesSingle->telContact}}">{{$propertiesSingle->telContact}}</a>
                                    </li>
                                    <li>
                                        <span>Location:</span>
                                        {{ $userCountry }} , {{ $userCity }}
                                    </li>
                                </ul>
                            </div>

                            @endisset

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Détails de la propriété Area -->

<!-- Start Subscribe Area -->
<div class="subscribe-wrap-area">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Abonnez-vous à notre Newsletter</h2>
                <form class="subscribe-form" action="{{ route('pages.single') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$id}}">
                    <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
                    <button type="submit" name="btn_newslater" class="default-btn">Abonnez-vous</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->

@endsection



@section('script')


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.rating li');
        const ratingInput = document.getElementById('rating');

        stars.forEach(star => {
            star.addEventListener('mouseover', function() {
                resetStars();
                highlightStars(this.dataset.value);
            });

            star.addEventListener('click', function() {
                ratingInput.value = this.dataset.value;
                resetStars();
                highlightStars(this.dataset.value, true);
            });

            star.addEventListener('mouseout', function() {
                resetStars();
                if (ratingInput.value) {
                    highlightStars(ratingInput.value, true);
                }
            });
        });

        function resetStars() {
            stars.forEach(star => {
                star.classList.remove('hover');
                star.querySelector('i').classList.remove('ri-star-fill');
                star.querySelector('i').classList.add('ri-star-line');
            });
        }

        function highlightStars(rating, isPermanent = false) {
            stars.forEach(star => {
                if (star.dataset.value <= rating) {
                    if (isPermanent) {
                        star.classList.add('selected');
                    }
                    star.querySelector('i').classList.remove('ri-star-line');
                    star.querySelector('i').classList.add('ri-star-fill');
                }
            });
        }
    });


    @endsection
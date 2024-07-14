@extends('base')

@section('nomPage')
Acceuil | Andora
@endsection

@section('css')

@endsection


@section('div_init')

@endsection

@section('div_finish')
@endsection

@section('div_init2')
row justify-content-center align-items-center

@endsection



@section('content')




<!-- Start Main Banner Area -->
<div class="main-banner-area">
    <div class="container-fluid">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
            <div class="text-center"> <!-- Ajoutez une classe text-center à la div parente -->
                <span class="fw-bold d-block mx-auto">{{ session('error') }}</span> <!-- Utilisez mx-auto pour centrer le span -->
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-md-12" data-cues="slideInLeft">
                <div class="main-banner-content">
                    <span class="sub">Votre chemin vers la douceur du foyer.</span>
                    <h1>Plus qu'une propriété, nous offrons des possibilités.</h1>
                    <div class="search-info-tabs">
                        <ul class="nav nav-tabs" id="search_tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="sell-tab" data-bs-toggle="tab" href="#sell" role="tab" aria-controls="sell">Vendre</a></li>
                            <li class="nav-item"><a class="nav-link" id="rent-tab" data-bs-toggle="tab" href="#rent" role="tab" aria-controls="rent">Louer</a></li>
                        </ul>
                        <div class="tab-content" id="search_tab_content">
                            <div class="tab-pane fade show active" id="sell" role="tabpanel">
                                <form class="search-form" method="get" action="{{ route('pages.search-post') }}">
                                    @csrf
                                    <input type="hidden" name="status" value="For Sale">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Type de propriété </label>
                                                <select name="type_propriete_id" class="form-select form-control">
                                                    <option value="" selected>Type de propriété</option>
                                                    @foreach ($typeProprieteForSale as $item)
                                                    <option value="{{ $item->id}}">{{ $item->libelle}} ({{ $item->proprietes_count}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                       
                                            <div class="form-group">
                                                <label>Emplacement</label>
                                                <select name="ville" class="form-select form-control">
                                                    <option value="" selected>Toutes les villes</option>
                                                    @foreach ($uniqueCities as $item)
                                                    <option value="{{ $item->id}}">{{ $item->libelle}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input type="number" name="prix" class="form-control" placeholder="Environ combien">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Chambres</label>
                                                <input type="number" name="nbChambre" class="form-control" placeholder="Nombre de chambres">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Pièces</label>
                                                <input type="number" name="nbPiece" class="form-control" placeholder="Nombre de pièces">

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Rechercher une propriété
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="rent" role="tabpanel">
                                <form class="search-form" method="get" action="{{ route('pages.search-post') }}">
                                    @csrf
                                    <input type="hidden" name="status" value="Rental">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Type de propriété </label>
                                                <select name="type_propriete_id" class="form-select form-control">
                                                    <option value="" selected>Statut de la propriété</option>
                                                    @foreach ($typeProprieteRental as $item)
                                                    <option value="{{ $item->id}}">{{ $item->libelle}} ({{ $item->proprietes_count}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Emplacement</label>
                                                <select name="ville" class="form-select form-control">
                                                    <option value="" selected>Toutes les villes</option>
                                                    @foreach ($uniqueCities as $item)
                                                    <option value="{{ $item->ville}}">{{ $item->ville}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input type="number" name="prix" class="form-control" placeholder="Environ combien">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Chambres</label>
                                                <input type="number" name="nbChambre" class="form-control" placeholder="Nombre de chambres">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Pièces</label>
                                                <input type="number" name="nbPiece" class="form-control" placeholder="Nombre de pièces">

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Rechercher une propriété
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12" data-cues="fadeIn">
                <div class="swiper main-banner-image-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main-banner-image">
                                <img src="{{asset('assets/images/main-banner/banner1.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-banner-image">
                                <img src="{{asset('assets/images/main-banner/banner2.jpg')}}" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-banner-image">
                                <img src="{{asset('assets/images/main-banner/banner3.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="main-banner-image-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Category Area -->
<div class="category-area pt-120 pb-95">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category1.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Residential').submit(); return false;">
                            Résidentiel
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Residential" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="1">
                        </form>

                        <span>({{ $nbResidential}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category2.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Commercial').submit(); return false;">
                                Commercial
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Commercial" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="2">
                        </form>

                        <span>({{ $nbCommercial}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category3.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Farm').submit(); return false;">
                                Ferme / Domaine agricole
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Farm" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="3">
                        </form>
                        <span>({{ $nbFarm}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category4.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Land').submit(); return false;">
                                Parcelle
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Land" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="4">
                        </form>


                        <span>({{ $nbLand}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category5.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Duplex').submit(); return false;">
                                Duplex/Triplex/Quadruplex
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Duplex" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="5">
                        </form>

                        <span>({{ $nbDuplex}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category6.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Office').submit(); return false;">
                                Bureau / Bâtiment commercial
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Office" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="6">
                        </form>



                        <span>({{ $nbOffice}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category7.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Apartment').submit(); return false;">
                                Appartement
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Apartment" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="7">
                        </form>



                        <span>({{ $nbApartment}} Propriétés)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{asset('assets/images/category/category8.png')}}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post-Warehouse').submit(); return false;">
                                Entrepôt
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post-Warehouse" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="type_propriete_id" value="8">
                        </form>
                        <span>({{ $nbWarehouse}} Propriétés)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Category Area -->

<!-- Start Properties Area -->
<div class="properties-area pb-95">
    <div class="container">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Dernières propriétés</h2>
            <p>Explorez nos nouvelles arrivées et trouvez votre prochaine propriétés de rêve.</p>
        </div>
        <div class="properties-information-tabs">
            <ul class="nav nav-tabs" id="properties_tab" role="tablist" data-cue="slideInUp">
                <li class="nav-item"><a class="nav-link active" id="for-sale-tab" data-bs-toggle="tab" href="#for-sale" role="tab" aria-controls="for-sale">À vendre</a></li>
                <li class="nav-item"><a class="nav-link" id="houses-tab" data-bs-toggle="tab" href="#houses" role="tab" aria-controls="houses">Maisons</a></li>
                <li class="nav-item"><a class="nav-link" id="villas-tab" data-bs-toggle="tab" href="#villas" role="tab" aria-controls="villas">Villas</a></li>
                <li class="nav-item"><a class="nav-link" id="rental-tab" data-bs-toggle="tab" href="#rental" role="tab" aria-controls="rental">Location</a></li>
                <li class="nav-item"><a class="nav-link" id="apartment-tab" data-bs-toggle="tab" href="#apartment" role="tab" aria-controls="apartment">Appartement</a></li>
                <li class="nav-item"><a class="nav-link" id="condos-tab" data-bs-toggle="tab" href="#condos" role="tab" aria-controls="condos">Parcel</a></li>
                <li class="nav-item"><a class="nav-link" id="commercial-tab" data-bs-toggle="tab" href="#commercial" role="tab" aria-controls="commercial">Commercial</a></li>
            </ul>
            <div class="tab-content" id="properties_tab_content">
                <div class="tab-pane fade show active" id="for-sale" role="tabpanel">
                    <div class="row justify-content-center" data-cues="slideInUp">
                        @foreach ($propertiesForSalle as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post6{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post6{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post7{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post7{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post8{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulaire caché -->
                                            <form id="post8{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                    
                                    <span>Bénin, {{ $item->ville->libelle}}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post9{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post9{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                </div>
                <div class="tab-pane fade" id="houses" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesHouse as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post10{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post10{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post100{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post100{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post11{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulaire caché -->
                                            <form id="post11{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post12{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post12{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                </div>
                <div class="tab-pane fade" id="villas" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesVilla as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post13{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post13{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post14{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post14{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post140{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulaire caché -->
                                            <form id="post140{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                  
                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post15{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post15{{ $item->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
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
                </div>
                <div class="tab-pane fade" id="rental" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesRental as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post16{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post16{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post17{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post18{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post18{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulair8e caché -->
                                            <form id="post18{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                       
                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post19{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post19{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                </div>
                <div class="tab-pane fade" id="apartment" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesApartment as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post20{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post20{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post21{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post21{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post22{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulaire caché -->
                                            <form id="post22{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                  
                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post23{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post23{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                </div>
                <div class="tab-pane fade" id="condos" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesParcel as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post24{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post24{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post25{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post25{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post26{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulaire caché -->
                                            <form id="post26{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                            
                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post27{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post27{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                </div>
                <div class="tab-pane fade" id="commercial" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesCommercial as $item)
                        <div class="col-xl-4 col-md-6">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post28{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post28{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post29{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post29{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                <a href="#" onclick="document.getElementById('post30{{ $item->id }}').submit(); return false;">
                                                    {{ $item->titre }}
                                                </a>
                                            </h3>


                                            <!-- Formulaire caché -->
                                            <form id="post30{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                            </form>

                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
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
                                            <a href="#" onclick="document.getElementById('post31{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                            <!-- Formulaire caché -->
                                            <form id="post31{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Properties Area -->





<!-- Start Fun Facts Area -->
<div class="fun-facts-area pt-120 pb-95">
    <div class="container">
        <div class="row justify-content-center fun-facts-with-five-columns" data-cues="slideInUp">
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">{{ $percentClientSatisfaction}}</h3>
                        <h3 class="text">%</h3>
                    </div>
                    <p>Taux de satisfaction des clients</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">{{ $nbCustomer}}</h3>
                    </div>
                    <p>Nombre de partenaire</p>
                </div>
            </div>

            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">{{ $nbPropertyForSale}}</h3>
                    </div>
                    <p>Total de propriétés à vendre</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">{{ $nbPropertyRental}}</h3>
                    </div>
                    <p>Total de propriétés à louer</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Facts Area -->
@if($propertiesHigh->isNotEmpty())
<!-- Start Propriétés haut de gamme Area -->
<div class="featured-properties-area ptb-120">
    <div class="container">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Propriétés haut de gamme</h2>
            <p>Découvrez l'excellence et le raffinement dans chaque détail de nos propriétés haut de gamme.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="featured-properties-slide" data-cues="slideInUp">
            @php
            $count = 0;
            @endphp

            @foreach ($propertiesHigh as $item)
            @php
            $count++;
            @endphp
            <div class="slide {{ $count == 1 ? 'active' : '' }}" style="background-image: url('{{ asset($item->proprieteImages->first()->url) }}');">
                <div class="properties-content">
                    <div class="info">
                        <div class="media">
                            <span><i class="ri-vidicon-fill"></i></span>
                            <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
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
                    <div class="content">
                        <h3>
                            <a href="#" onclick="document.getElementById('post0{{ $item->id }}').submit(); return false;">
                                {{ $item->titre }}
                            </a>
                        </h3>


                        <!-- Formulaire caché -->
                        <form id="post0{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                        </form>


                 
                                    <span>Bénin, {{ $item->ville->libelle }}, {{ $item->quartier }}</span>
                    </div>
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
                    <div class="price-and-user">
                        <div class="price">
                            @isset($item->prix)
                            {{ $item->prix }} XOF
                            @endif
                        </div>
                        <div class="user">
                            @if($item->user->sexe == 'Feminin' && !$item->user->profile_img)
                            <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image">
                            @elseif($item->user->sexe == 'Masculin' && !$item->user->profile_img)
                            <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image">
                            @else
                            <img src="{{ asset($item->user->profile_img) }}" alt="image">
                            @endif
                            <a href="#" onclick="document.getElementById('post1{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                            <!-- Formulaire caché -->
                            <form id="post1{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->user->id }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endif
<!-- End Featured Properties Area -->
@if($propertiesForSale->isNotEmpty())
<!-- Start Properties Area -->
<div class="properties-area pt-120 pb-95">
    <div class="container">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Propriétés à vendre</h2>
            <p>Découvrez nos opportunités immobilières exceptionnelles et trouvez votre prochaine maison.</p>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp">
            @foreach ($propertiesForSale as $item)
            <div class="col-xl-4 col-md-6">
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
                                <a href="#" class="link-btn" onclick="document.getElementById('post2{{ $item->id }}').submit(); return false;">
                                    {{ $item->typePropriete->libelle }}
                                </a>
                            </li>

                            <!-- Formulaire caché -->
                            <form id="post2{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                            </form>

                            <li>
                                <a href="#" class="link-btn" onclick="document.getElementById('post3{{ $item->id }}').submit(); return false;">
                                    {{ $item->status }}
                                </a>
                            </li>

                            <!-- Formulaire caché -->
                            <form id="post3{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                    <a href="#" onclick="document.getElementById('post4{{ $item->id }}').submit(); return false;">
                                        {{ $item->titre }}
                                    </a>
                                </h3>


                                <!-- Formulaire caché -->
                                <form id="post4{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                </form>

                               
                                    <span>Bénin, {{ $item->ville->libelle}}, {{ $item->quartier }}</span>
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
                                <a href="#" onclick="document.getElementById('post5{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                <!-- Formulaire caché -->
                                <form id="post5{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
    </div>
</div>
<!-- End Properties Area -->
@endif


@if($comments->isNotEmpty())
<!-- Start Testimonial Area -->
<div class="testimonial-area pb-120">
    <div class="container-fluid" data-cues="slideInUp">
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                @foreach ($comments as $item)
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                @if($item->user->sexe == 'Feminin' && !$item->user->profile_img)
                                <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image">
                                @elseif($item->user->sexe == 'Masculin' && !$item->user->profile_img)
                                <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image">
                                @else
                                <img src="{{ asset($item->user->profile_img) }}" alt="image">
                                @endif
                            </div>
                            <div class="title">
                                <h3>{{ $item->nom_prenom }}</h3>
                                <span>{{ $item->propriete->user->nom_prenom }} / {{ $item->propriete->titre }} </span>
                            </div>
                        </div>
                        <p>“{{ $item->comment }}”</p>
                        @php
                        $totalStars = 5;
                        $filledStars = $item->note ;
                        $grayStars = $totalStars - $filledStars;
                        @endphp

                        <ul class="rating">
                            @for ($i = 0; $i < $filledStars; $i++) <li><i class="ri-star-fill"></i></li>
                                @endfor

                                @for ($i = 0; $i < $grayStars; $i++) <li class="gray"><i class="ri-star-fill"></i></li>
                                    @endfor
                        </ul>

                    </div>
                </div>


                @endforeach
            </div>
            <div class="testimonial-pagination"></div>
        </div>
    </div>
</div>
@endif
<!-- End Testimonial Area -->


@endsection

@section('script')



@endsection
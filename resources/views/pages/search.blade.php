@extends('base')

@section('nomPage')
Properties | Andora
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
        @include('admin.success_error')
        <div class="page-banner-content">
            <h2>Filtre principal de propriété</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Acceuil</a>
                </li>
                <li>Filtre principal de propriété</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Properties Wrap Area -->
<div class="properties-wrap-area without-wrap-bg pt-120 pb-120">
    <div class="container">
        <div class="properties-search-info-tabs">
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
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Type de propriété </label>
                                    <select name="type_propriete_id" class="form-select form-control">
                                        <option value="" selected>Statut de la propriété</option>
                                        @foreach ($typeProprieteForSale as $item)
                                        <option value="{{ $item->id}}">{{ $item->libelle}} ({{ $item->proprietes_count}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
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
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Prix</label>
                                    <input type="number" name="prix" class="form-control" placeholder="Environ combien">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Chambres</label>
                                    <input type="number" name="nbChambre" class="form-control" placeholder="Nombre de chambres">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Pièces</label>
                                    <input type="number" name="nbPiece" class="form-control" placeholder="Nombre de pièces">

                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="button-group-list">
                                    <button type="submit" class="search-btn">
                                        <i class="ri-search-2-line"></i>
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
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Property type For</label>
                                    <select name="type_propriete_id" class="form-select form-control">
                                        <option value="" selected>Property status</option>
                                        @foreach ($typeProprieteRental as $item)
                                        <option value="{{ $item->id}}">{{ $item->libelle}} ({{ $item->proprietes_count}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
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
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Prix</label>
                                    <input type="number" name="prix" class="form-control" placeholder="Environ combien">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Chambres</label>
                                    <input type="number" name="nbChambre" class="form-control" placeholder="Nombre de chambres">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Pièces</label>
                                    <input type="number" name="nbPiece" class="form-control" placeholder="Nombre de pièces">

                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="button-group-list">
                                    <button type="submit" class="search-btn">
                                        <i class="ri-search-2-line"></i>
                                    </button>
                                    <button type="submit" class="reset-search-btn">
                                        <i class="ri-refresh-line"></i>
                                        Rechercher une propriété
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="properties-grid-box">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-6">
                    <p>Affichage de {{ $properties->firstItem() }} à {{ $properties->lastItem() }} dans {{ $properties->total() }} Résultats</p>
                </div>
                <div class="col-lg-5 col-md-6"></div>
            </div>
        </div>
        @if($properties->isNotEmpty())
        <div class="row justify-content-center" data-cues="slideInUp">
            @foreach ($properties as $item)
            <div class="col-xl-6 col-md-12">
                <div class="properties-inner-card with-wrap-color">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="properties-image" style="background-image: url('{{ asset($item->proprieteImages->first()->url) }}');">
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="properties-content">
                                <div class="info">
                                    <!-- Recoriger-->
                                    <ul class="link-list">
                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post1{{ $item->id }}').submit(); return false;">
                                                {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post1{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post2{{ $item->id }}').submit(); return false;">
                                                {{ $item->status }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post2-{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                            <input type="hidden" name="status" value="{{ $item->status }}">
                                        </form>

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
                                <div class="title">
                                    <!-- Lien cliquable -->
                                    <h3>
                                        <a href="#" onclick="document.getElementById('post3{{ $item->id }}').submit(); return false;">
                                            {{ $item->titre }}
                                        </a>
                                    </h3>


                                    <!-- Formulaire caché -->
                                    <form id="post3{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                    </form>

                                  
                                    <span>Bénin, {{ $item->ville->libelle}}, {{ $item->quartier }}</span>
                                </div>
                                <!-- a nouveau-->
                                <ul class="info-list">
                                    @if(!is_null($item->nbChambre) && $item->nbChambre != 0)
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/properties/bed2.svg') }}" alt="bed2">
                                        </div>
                                        <span>{{ $item->nbChambre }}</span>
                                    </li>
                                    @endif

                                    @if(!is_null($item->nbToillete) && $item->nbToillete != 0)
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/properties/bathroom2.svg') }}" alt="bathroom2">
                                        </div>
                                        <span>{{ $item->nbToillete }}</span>
                                    </li>
                                    @endif

                                    @if(!is_null($item->nbPiece) && $item->nbPiece != 0)
                                    <li>

                                        <span>{{ $item->nbPiece }} Pièce</span>
                                    </li>
                                    @endif

                                    @if(!is_null($item->surface) && $item->surface != 0)
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/properties/area2.svg') }}" alt="area2">
                                        </div>
                                        <span>{{ $item->surface }}</span>
                                    </li>
                                    @endif
                                </ul>

                                <div class="price-and-user">
                                    <div class="user">
                                        @if($item->user->sexe == 'Feminin' && !$item->user->profile_img)
                                        <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image">
                                        @elseif($item->user->sexe == 'Masculin' && !$item->user->profile_img)
                                        <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image">
                                        @else
                                        <img src="{{ asset($item->user->profile_img) }}" alt="image">
                                        @endif
                                        <a href="#" onclick="document.getElementById('post4{{ $item->user->id }}').submit(); return false;">
                                            {{ $item->user->nom_prenom }}
                                        </a>

                                        <!-- Formulaire caché -->
                                        <form id="post4{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->user->id }}">
                                        </form>
                                    </div>
                                    <div class="price">
                                        @isset($item->prix)
                                        {{ $item->prix }} XOF
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        @if($properties->isNotEmpty())
        <div class="col-lg-12 col-md-12">
            <div class="pagination-area">
                <div class="nav-links">

                    @if ($properties->currentPage() > 1)
                    <a href="{{ $properties->previousPageUrl() }}" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                    @endif

                    @php
                    $start = max(1, $properties->currentPage() - 2);
                    $end = min($properties->lastPage(), $properties->currentPage() + 2);
                    @endphp

                    @if ($start > 1)
                    <a href="{{ $properties->url(1) }}" class="page-numbers">1</a>
                    @if ($start > 2)
                    <span class="page-numbers">...</span>
                    @endif
                    @endif

                    @for ($page = $start; $page <= $end; $page++) <a href="{{ $properties->url($page) }}" class="page-numbers {{ $page == $properties->currentPage() ? 'current' : '' }}">{{ $page }}</a>
                        @endfor

                        @if ($end < $properties->lastPage())
                            @if ($end < $properties->lastPage() - 1)
                                <span class="page-numbers">...</span>
                                @endif
                                <a href="{{ $properties->url($properties->lastPage()) }}" class="page-numbers">{{ $properties->lastPage() }}</a>
                                @endif

                                @if ($properties->hasMorePages())
                                <a href="{{ $properties->nextPageUrl() }}" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                                @endif

                </div>
            </div>
        </div>
        @else
        <div class="pagination-area">
            <span class="">Aucune propriété disponible.</span>
        </div>
        @endif
    </div>
</div>
</div>
<!-- End Properties Wrap Area -->
@if($popularProperties->isNotEmpty())
<!-- Start Properties Slide Area -->
<div class="properties-slide-area pt-120 pb-120">
    <div class="container-fluid">
        <div class="section-title text-center" data-cues="slideInUp">

            <h2>Propriétés populaires</h2>
            <p>Découvrez nos propriétés les plus recherchées et trouvez celle qui vous convient parfaitement.</p>
        </div>
        <div class="swiper properties-slider">
            <div class="swiper-wrapper align-items-center" data-cues="slideInUp">
                @foreach ($popularProperties as $item)
                <div class="swiper-slide">
                    <div class="properties-slide-item">
                        <div class="properties-image">
                            <a href="property-details.html">
                                <img src="{{ asset($item->proprieteImages->first()->url) }}" alt="image">
                            </a>

                            <div class="media">
                                <span><i class="ri-vidicon-fill"></i></span>
                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                            </div>

                            <!-- Recoriger-->
                            <ul class="link-list">
                                <li>
                                    <a href="#" class="link-btn" onclick="document.getElementById('post7{{ $item->id }}').submit(); return false;">
                                        {{ $item->typePropriete->libelle }}
                                    </a>
                                </li>

                                <!-- Formulaire caché -->
                                <form id="post7{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                    <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                </form>

                                <li>
                                    <a href="#" class="link-btn" onclick="document.getElementById('post8{{ $item->id }}').submit(); return false;">
                                        {{ $item->status }}
                                    </a>
                                </li>

                                <!-- Formulaire caché -->
                                <form id="post8{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                    <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                    <input type="hidden" name="status" value="{{ $item->status }}">
                                </form>

                            </ul>
                        </div>
                        <div class="properties-content">
                            <div class="top">
                                <div class="title">
                                    <!-- Lien cliquable -->
                                    <h3>
                                        <a href="#" onclick="document.getElementById('post9{{ $item->id }}').submit(); return false;">
                                            {{ $item->titre }}
                                        </a>
                                    </h3>


                                    <!-- Formulaire caché -->
                                    <form id="post9{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                    </form>
                                 
                                    <span>Bénin, {{ $item->ville->libelle}}, {{ $item->quartier }}</span>
                                </div>
                                <div class="price">{{ $item->prix }} XOF</div>
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

                                    <span>{{ $item->nbPiece }} Pièce</span>
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
                                                    <a href="https://www.facebook.com/" target="_blank">
                                                        <i class="ri-facebook-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="ri-twitter-x-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" target="_blank">
                                                        <i class="ri-instagram-fill"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://bd.linkedin.com/" target="_blank">
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
</div>
<!-- End Properties Slide Area -->
@endif

<!-- Start Subscribe Area -->
<!-- Start Subscribe Area -->
<div class="subscribe-wrap-area">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Abonnez-vous à notre Newsletter</h2>
                <form class="subscribe-form" action="{{ route('pages.search') }}" method="POST">
                    @csrf
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



@endsection
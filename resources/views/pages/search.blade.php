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
            <h2>Property Top Filter</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Home</a>
                </li>
                <li>Property Top Filter</li>
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
                <li class="nav-item"><a class="nav-link active" id="sell-tab" data-bs-toggle="tab" href="#sell" role="tab" aria-controls="sell">Sell</a></li>
                <li class="nav-item"><a class="nav-link" id="rent-tab" data-bs-toggle="tab" href="#rent" role="tab" aria-controls="rent">Rent</a></li>
            </ul>
            <div class="tab-content" id="search_tab_content">
                <div class="tab-pane fade show active" id="sell" role="tabpanel">
                    <form class="search-form" method="get" action="{{ route('pages.search-post') }}">
                        @csrf
                        <input type="hidden" name="status" value="For Sale">
                        <div class="row justify-content-center align-items-end">
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Property type For</label>
                                    <select name="type_propriete_id" class="form-select form-control">
                                        <option value="" selected>Property status</option>
                                        @foreach ($typeProprieteForSale as $item)
                                        <option value="{{ $item->id}}">{{ $item->libelle}} ({{ $item->proprietes_count}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="ville" class="form-select form-control">
                                        <option value="" selected>All cities</option>
                                        @foreach ($uniqueCities as $item)

                                        <option value="{{ $item->ville}}">{{ $item->ville}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Your Price</label>
                                    <input type="number" name="prix" class="form-control" placeholder="Max price">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <input type="number" name="nbChambre" class="form-control" placeholder="Number of bedrooms">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Rooms</label>
                                    <input type="number" name="nbPiece" class="form-control" placeholder="Number of rooms">

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
                                    <label>Location</label>
                                    <select name="ville" class="form-select form-control">
                                        <option value="" selected>All cities</option>
                                        @foreach ($uniqueCities as $item)

                                        <option value="{{ $item->ville}}">{{ $item->ville}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Your Price</label>
                                    <input type="number" name="prix" class="form-control" placeholder="Max price">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <input type="number" name="nbChambre" class="form-control" placeholder="Number of bedrooms">
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="form-group">
                                    <label>Rooms</label>
                                    <input type="number" name="nbPiece" class="form-control" placeholder="Number of rooms">

                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="button-group-list">
                                    <button type="submit" class="search-btn">
                                        <i class="ri-search-2-line"></i>
                                    </button>
                                    <button type="submit" class="reset-search-btn">
                                        <i class="ri-refresh-line"></i>
                                        Reset Search
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
                    <p>Showing {{ $properties->firstItem() }}-{{ $properties->lastItem() }} Of {{ $properties->total() }} Results</p>
                </div>
                <div class="col-lg-5 col-md-6"></div>
            </div>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp">

            @foreach ($properties as $item)
            <div class="col-xl-6 col-md-12">
                <div class="properties-inner-card with-wrap-color">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="properties-image">
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
                                            <a href="#" class="link-btn" onclick="document.getElementById('post-{{ $item->id }}').submit(); return false;">
                                            {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post-{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                           <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post2-{{ $item->id }}').submit(); return false;">
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
                                <div class="title">
                                    <!-- Lien cliquable -->
                                    <h3>
                                        <a href="#" onclick="document.getElementById('post-form-{{ $item->id }}').submit(); return false;">
                                            {{ $item->titre }}
                                        </a>
                                    </h3>


                                    <!-- Formulaire caché -->
                                    <form id="post-form-{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                    </form>

                                    <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
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
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/properties/parking2.svg') }}" alt="parking2">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
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
                                        <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                        <a href="#" onclick="document.getElementById('post-form-{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                                    <!-- Formulaire caché -->
                                                    <form id="post-form-{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->user->id }}">
                                                    </form>
                                    </div>
                                    <div class="price">{{ $item->prix }} XOF</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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

    </div>
</div>
</div>
<!-- End Properties Wrap Area -->

<!-- Start Properties Slide Area -->
<div class="properties-slide-area pt-120 pb-120">
    <div class="container-fluid">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Popular Properties</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris eget ornare venenatis, in. Pharetra iaculis consectetur.</p>
        </div>
        <div class="swiper properties-slider">
            <div class="swiper-wrapper align-items-center" data-cues="slideInUp">
            @foreach ($popularProperties as $item)
                <div class="swiper-slide">
                    <div class="properties-slide-item">
                        <div class="properties-image">
                            <a href="property-details.html">
                                <img src="{{asset('assets/images/properties/properties11.jpg')}}" alt="image">
                            </a>

                            <div class="media">
                                <span><i class="ri-vidicon-fill"></i></span>
                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                            </div>
                            
                            <!-- Recoriger-->
                            <ul class="link-list">
                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post-{{ $item->id }}').submit(); return false;">
                                            {{ $item->typePropriete->libelle }}
                                            </a>
                                        </li>

                                        <!-- Formulaire caché -->
                                        <form id="post-{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
                                            @csrf
                                           <input type="hidden" name="user_id" value="{{ $item->user->id }}">
                                            <input type="hidden" name="type_propriete_id" value="{{ $item->typePropriete->id }}">
                                        </form>

                                        <li>
                                            <a href="#" class="link-btn" onclick="document.getElementById('post2-{{ $item->id }}').submit(); return false;">
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
                        </div>
                        <div class="properties-content">
                            <div class="top">
                            <div class="title">
                                <!-- Lien cliquable -->
                                <h3>
                                    <a href="#" onclick="document.getElementById('post-form-{{ $item->id }}').submit(); return false;">
                                        {{ $item->titre }}
                                    </a>
                                </h3>


                                <!-- Formulaire caché -->
                                <form id="post-form-{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                </form>

                                <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
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
                            <div class="bottom">
                            <div class="user">
                                <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                <a href="#" onclick="document.getElementById('post-form-{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                <!-- Formulaire caché -->
                                <form id="post-form-{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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

<!-- Start Subscribe Area -->
<!-- Start Subscribe Area -->
<div class="subscribe-wrap-area">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Subscribe To Our Newsletter</h2>
                <form class="subscribe-form"action="{{ route('pages.search') }}" method="POST">
                @csrf
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" name="btn_newslater" class="default-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->

@endsection



@section('script')



@endsection
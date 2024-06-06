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
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-md-12" data-cues="slideInLeft">
                <div class="main-banner-content">
                    <span class="sub">Your Pathway to Home Sweet Home.</span>
                    <h1>More than Property, We Offer Possibilities</h1>
                    <div class="search-info-tabs">
                        <ul class="nav nav-tabs" id="search_tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="sell-tab" data-bs-toggle="tab" href="#sell" role="tab" aria-controls="sell">Sell</a></li>
                            <li class="nav-item"><a class="nav-link" id="rent-tab" data-bs-toggle="tab" href="#rent" role="tab" aria-controls="rent">Rent</a></li>
                        </ul>
                        <div class="tab-content" id="search_tab_content">
                            <div class="tab-pane fade show active" id="sell" role="tabpanel">
                                <form class="search-form" method="POST" action="{{ route('pages.search-post') }}">
                                    @csrf
                                    <input type="hidden" name="status" value="For Sale">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select name="ville" class="form-select form-control">
                                                    <option value="" selected >All cities</option>
                                                    @foreach ($uniqueCities as $item)

                                                    <option value="{{ $item->ville}}">{{ $item->ville}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Your Price</label>
                                                <input type="number" name="prix" class="form-control" placeholder="Max price">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Bedrooms</label>
                                                <input type="number" name="nbChambre" class="form-control" placeholder="Number of bedrooms">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Rooms</label>
                                                <input type="number" name="nbPiece" class="form-control" placeholder="Number of rooms">

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Search Property
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="rent" role="tabpanel">
                                <form class="search-form" method="POST" action="{{ route('pages.search-post') }}">
                                    @csrf
                                    <input type="hidden" name="status" value="Rental">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Property type For</label>
                                                <select name="type_propriete_id" class="form-select form-control">
                                                    <option value="" selected >Property status</option>
                                                    @foreach ($typeProprieteRental as $item)
                                                    <option value="{{ $item->id}}">{{ $item->libelle}} ({{ $item->proprietes_count}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select name="ville" class="form-select form-control">
                                                    <option value="" selected >All cities</option>
                                                    @foreach ($uniqueCities as $item)
                                                    <option value="{{ $item->ville}}">{{ $item->ville}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Your Price</label>
                                                <input type="number" name="prix" class="form-control" placeholder="Max price">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Bedrooms</label>
                                                <input type="number" name="nbChambre" class="form-control" placeholder="Number of bedrooms">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Rooms</label>
                                                <input type="number" name="nbPiece" class="form-control" placeholder="Number of rooms">

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Search Property
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
                            <a href="{{ route('pages.search') }}">Residential</a>
                        </h3>
                        <span>({{ $nbResidential}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">Commercial</a>
                        </h3>
                        <span>({{ $nbCommercial}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">Farm/Agricultural estate</a>
                        </h3>
                        <span>({{ $nbFarm}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">The Land</a>
                        </h3>
                        <span>({{ $nbLand}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">Duplex/Triplex/Quadruplex</a>
                        </h3>
                        <span>({{ $nbDuplex}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">Office</a>
                        </h3>
                        <span>({{ $nbOffice}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">Apartment</a>
                        </h3>
                        <span>({{ $nbApartment}} Properties)</span>
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
                            <a href="{{ route('pages.search') }}">Warehouse</a>
                        </h3>
                        <span>({{ $nbWarehouse}} Properties)</span>
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
            <h2>Latest Properties</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris eget ornare venenatis, in. Pharetra iaculis consectetur.</p>
        </div>
        <div class="properties-information-tabs">
            <ul class="nav nav-tabs" id="properties_tab" role="tablist" data-cue="slideInUp">
                <li class="nav-item"><a class="nav-link active" id="for-sale-tab" data-bs-toggle="tab" href="#for-sale" role="tab" aria-controls="for-sale">For Sale</a></li>
                <li class="nav-item"><a class="nav-link" id="houses-tab" data-bs-toggle="tab" href="#houses" role="tab" aria-controls="houses">Houses</a></li>
                <li class="nav-item"><a class="nav-link" id="villas-tab" data-bs-toggle="tab" href="#villas" role="tab" aria-controls="villas">Villas</a></li>
                <li class="nav-item"><a class="nav-link" id="rental-tab" data-bs-toggle="tab" href="#rental" role="tab" aria-controls="rental">Rental</a></li>
                <li class="nav-item"><a class="nav-link" id="apartment-tab" data-bs-toggle="tab" href="#apartment" role="tab" aria-controls="apartment">Apartment</a></li>
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
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">For Sale</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                </div>
                <div class="tab-pane fade" id="houses" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesHouse as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="properties-item">
                                <div class="properties-image">
                                    <a href="{{ route('pages.single') }}">
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                </div>
                <div class="tab-pane fade" id="villas" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesVilla as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="properties-item">
                                <div class="properties-image">
                                    <a href="{{ route('pages.single') }}">
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                </div>
                <div class="tab-pane fade" id="rental" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesRental as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="properties-item">
                                <div class="properties-image">
                                    <a href="{{ route('pages.single') }}">
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                </div>
                <div class="tab-pane fade" id="apartment" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesApartment as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="properties-item">
                                <div class="properties-image">
                                    <a href="{{ route('pages.single') }}">
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                </div>
                <div class="tab-pane fade" id="condos" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesParcel as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="properties-item">
                                <div class="properties-image">
                                    <a href="{{ route('pages.single') }}">
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                </div>
                <div class="tab-pane fade" id="commercial" role="tabpanel">
                    <div class="row justify-content-center" data-cue="slideInUp">
                        @foreach ($propertiesCommercial as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="properties-item">
                                <div class="properties-image">
                                    <a href="{{ route('pages.single') }}">
                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                    </a>
                                    <ul class="action">

                                        <li>
                                            <div class="media">
                                                <span><i class="ri-vidicon-fill"></i></span>
                                                <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                                        </li>
                                    </ul>
                                    <ul class="info-list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bed.svg')}}" alt="bed">
                                            </div>
                                            <span>{{ $item->nbChambre }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                            </div>
                                            <span>{{ $item->nbToillete }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                            </div>
                                            <span>{{ $item->nbPiece }}</span>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                            </div>
                                            <span>{{ $item->surface }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="properties-content">
                                    <div class="top">
                                        <div class="title">
                                            <h3>
                                                <a href="{{ route('pages.search') }}">{{ $item->titre }}</a>
                                            </h3>
                                            <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                                        </div>
                                        <div class="price">{{ $item->prix }} XOF</div>
                                    </div>
                                    <div class="bottom">
                                        <div class="user">
                                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
                        <h3 class="counter">12</h3>
                        <h3 class="text">K</h3>
                    </div>
                    <p>Our Happy Customers</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">98</h3>
                        <h3 class="text">%</h3>
                    </div>
                    <p>Clients Satisfaction Rate</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">6</h3>
                        <h3 class="text">+</h3>
                    </div>
                    <p>Our Office Locations</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">20</h3>
                        <h3 class="text">K</h3>
                    </div>
                    <p>Total Property Sale</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">85</h3>
                        <h3 class="text">+</h3>
                    </div>
                    <p>Real Estate Agents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Facts Area -->

<!-- Start Featured Properties Area -->
<div class="featured-properties-area ptb-120">
    <div class="container">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Featured Properties</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris eget ornare venenatis, in. Pharetra iaculis consectetur.</p>
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
            <div class="slide {{ $count == 1 ? 'active' : '' }}" style="background-image: url({{ asset('assets/images/properties/properties1.jpg') }});">
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
                    <div class="content">
                        <h3>
                            <a href="{{ route('pages.single') }}">{{ $item->titre }}</a>
                        </h3>
                        <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                    </div>
                    <ul class="info-list">
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/featured-properties/bed.svg')}}" alt="bed">
                            </div>
                            <span>{{ $item->nbChambre }}</span>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/featured-properties/bathroom.svg')}}" alt="bathroom">
                            </div>
                            <span>{{ $item->nbToillete }}</span>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/featured-properties/parking.svg')}}" alt="parking">
                            </div>
                            <span>{{ $item->nbPiece }}</span>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('assets/images/featured-properties/area.svg')}}" alt="area">
                            </div>
                            <span>{{ $item->surface }}</span>
                        </li>
                    </ul>
                    <div class="price-and-user">
                        <div class="price">{{ $item->prix }} XOF</div>
                        <div class="user">
                            <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                            <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Featured Properties Area -->

<!-- Start Properties Area -->
<div class="properties-area pt-120 pb-95">
    <div class="container">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Properties For Sale</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris eget ornare venenatis, in. Pharetra iaculis consectetur.</p>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp">
            @foreach ($propertiesForSale as $item)
            <div class="col-xl-4 col-md-6">
                <div class="properties-item">
                    <div class="properties-image">
                        <a href="{{ route('pages.single') }}">
                            <img src="{{asset('assets/images/properties/properties7.jpg')}}" alt="image">
                        </a>
                        <ul class="action">

                            <li>
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>{{ $item->proprieteImages->count() }}</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="link-list">
                            <li>
                                <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->typePropriete->libelle }}</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.search') }}" class="link-btn">{{ $item->status }}</a>
                            </li>
                        </ul>
                        <ul class="info-list">
                            <li>
                                <div class="icon">
                                    <img src="{{asset('assets/images/featured-properties/bed.svg')}}" alt="bed">
                                </div>
                                <span>{{ $item->nbChambre }}</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{asset('assets/images/featured-properties/bathroom.svg')}}" alt="bathroom">
                                </div>
                                <span>{{ $item->nbToillete }}</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{asset('assets/images/featured-properties/parking.svg')}}" alt="parking">
                                </div>
                                <span>{{ $item->nbPiece }}</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{asset('assets/images/featured-properties/area.svg')}}" alt="area">
                                </div>
                                <span>{{ $item->surface }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="properties-content">
                        <div class="top">
                            <div class="title">
                                <h3>
                                    <a href="{{ route('pages.single') }}">{{ $item->titre }}</a>
                                </h3>
                                <span>{{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</span>
                            </div>
                            <div class="price">{{ $item->prix }} XOF</div>
                        </div>
                        <div class="bottom">
                            <div class="user">
                                <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                <a href="{{ route('pages.agent') }}">{{ $item->user->nom_prenom }}</a>
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
    </div>
</div>
<!-- End Properties Area -->



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
                                <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                            </div>
                            <div class="title">
                                <h3>{{ $item->nom_prenom }}</h3>
                                <span>{{ $item->propriete->titre }} / {{ $item->propriete->user->nom_prenom }}</span>
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
<!-- End Testimonial Area -->





@endsection

@section('script')



@endsection
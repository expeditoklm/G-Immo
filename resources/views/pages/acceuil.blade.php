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
                                        <form class="search-form">
                                            <div class="row justify-content-center align-items-end">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Looking For</label>
                                                        <select class="form-select form-control">
                                                            <option selected>Property type</option>
                                                            <option value="1">Multifamily</option>
                                                            <option value="2">Detached house</option>
                                                            <option value="3">Industrial</option>
                                                            <option value="4">Townhouse</option>
                                                            <option value="5">Apartment</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-select form-control">
                                                            <option selected>All cities</option>
                                                            <option value="1">Liverpool</option>
                                                            <option value="2">Bristol</option>
                                                            <option value="3">Nottingham</option>
                                                            <option value="4">Leicester</option>
                                                            <option value="5">Coventry</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Your Price</label>
                                                        <input type="text" class="form-control"  placeholder="Max price">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Min Lot size</label>
                                                        <input type="text" class="form-control"  placeholder="Property lot size">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-select form-control">
                                                            <option selected>Property status</option>
                                                            <option value="1">Active (55)</option>
                                                            <option value="2">Open House (65)</option>
                                                            <option value="3">Hot Offer (45)</option>
                                                            <option value="4">Sold (78)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <a  href="{{ route('pages.search') }}" class="default-btn">
                                                            <i class="ri-search-2-line"></i>
                                                            Search Property
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="rent" role="tabpanel">
                                        <form class="search-form">
                                            <div class="row justify-content-center align-items-end">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Looking For</label>
                                                        <select class="form-select form-control">
                                                            <option selected>Property type</option>
                                                            <option value="1">Multifamily</option>
                                                            <option value="2">Detached house</option>
                                                            <option value="3">Industrial</option>
                                                            <option value="4">Townhouse</option>
                                                            <option value="5">Apartment</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="form-select form-control">
                                                            <option selected>All cities</option>
                                                            <option value="1">Liverpool</option>
                                                            <option value="2">Bristol</option>
                                                            <option value="3">Nottingham</option>
                                                            <option value="4">Leicester</option>
                                                            <option value="5">Coventry</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Your Price</label>
                                                        <input type="text" class="form-control"  placeholder="Max price">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Min Lot size</label>
                                                        <input type="text" class="form-control"  placeholder="Property lot size">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-select form-control">
                                                            <option selected>Property status</option>
                                                            <option value="1">Active (55)</option>
                                                            <option value="2">Open House (65)</option>
                                                            <option value="3">Hot Offer (45)</option>
                                                            <option value="4">Sold (78)</option>
                                                        </select>
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
                                <span>(26 Properties)</span>
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
                                <span>(33 Properties)</span>
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
                                <span>(37 Properties)</span>
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
                                <span>(54 Properties)</span>
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
                                <span>(123 Properties)</span>
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
                                <span>(355 Properties)</span>
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
                                    <a href="{{ route('pages.search') }}">Warehouse</a>
                                </h3>
                                <span>(89 Properties)</span>
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
                                    <a href="{{ route('pages.search') }}">Historic Properties</a>
                                </h3>
                                <span>(17 Properties)</span>
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
                        <li class="nav-item"><a class="nav-link" id="condos-tab" data-bs-toggle="tab" href="#condos" role="tab" aria-controls="condos">Condos</a></li>
                        <li class="nav-item"><a class="nav-link" id="commercial-tab" data-bs-toggle="tab" href="#commercial" role="tab" aria-controls="commercial">Commercial</a></li>
                    </ul>
                    <div class="tab-content" id="properties_tab_content">
                        <div class="tab-pane fade show active" id="for-sale" role="tabpanel">
                            <div class="row justify-content-center" data-cues="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="houses" role="tabpanel">
                            <div class="row justify-content-center" data-cue="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="villas" role="tabpanel">
                            <div class="row justify-content-center" data-cue="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="rental" role="tabpanel">
                            <div class="row justify-content-center" data-cue="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                              
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="apartment" role="tabpanel">
                            <div class="row justify-content-center" data-cue="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                           
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                           
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="condos" role="tabpanel">
                            <div class="row justify-content-center" data-cue="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="commercial" role="tabpanel">
                            <div class="row justify-content-center" data-cue="slideInUp">
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
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.search') }}">Vacation Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$95,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties2.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$55,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Walter White</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                        
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Single-Family Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$77,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties4.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$33,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                               
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Senior Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$65,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user5.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Jenny Loren</a>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="{{ route('pages.single') }}">
                                                <img src="{{asset('assets/images/properties/properties6.jpg')}}" alt="image">
                                            </a>
                                            <ul class="action">
                                                <li>
                                                    <div class="media">
                                                        <span><i class="ri-vidicon-fill"></i></span>
                                                        <span><i class="ri-image-line"></i>5</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                                    </div>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                                    </div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                                    </div>
                                                    <span>3250</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="properties-content">
                                            <div class="top">
                                                <div class="title">
                                                    <h3>
                                                        <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                                    </h3>
                                                    <span>194 Mercer Street, NY 10012, USA</span>
                                                </div>
                                                <div class="price">$89,000</div>
                                            </div>
                                            <div class="bottom">
                                                <div class="user">
                                                    <img src="{{asset('assets/images/user/user6.png')}}" alt="image">
                                                    <a href="{{ route('pages.agent') }}">Bella Loren</a>
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
                    <div class="slide active bg-1">
                        <div class="properties-content">
                            <div class="info">
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
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
                                    <a href="{{ route('pages.single') }}">Heritage Buildings</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bed.svg')}}" alt="bed">
                                    </div>
                                    <span>6</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bathroom.svg')}}" alt="bathroom">
                                    </div>
                                    <span>4</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/parking.svg')}}" alt="parking">
                                    </div>
                                    <span>1</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/area.svg')}}" alt="area">
                                    </div>
                                    <span>3250</span>
                                </li>
                            </ul>
                            <div class="price-and-user">
                                <div class="price">$95,000</div>
                                <div class="user">
                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                    <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide bg-2">
                        <div class="properties-content">
                            <div class="info">
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
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
                                    <a href="{{ route('pages.single') }}">Industrial Spaces</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bed.svg')}}" alt="bed">
                                    </div>
                                    <span>6</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bathroom.svg')}}" alt="bathroom">
                                    </div>
                                    <span>4</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/parking.svg')}}" alt="parking">
                                    </div>
                                    <span>1</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/area.svg')}}" alt="area">
                                    </div>
                                    <span>3250</span>
                                </li>
                            </ul>
                            <div class="price-and-user">
                                <div class="price">$195,000</div>
                                <div class="user">
                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                    <a href="{{ route('pages.agent') }}">Walter White</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide bg-3">
                        <div class="properties-content">
                            <div class="info">
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
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
                                    <a href="{{ route('pages.single') }}">Newly Built Homes</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bed.svg')}}" alt="bed">
                                    </div>
                                    <span>6</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bathroom.svg')}}" alt="bathroom">
                                    </div>
                                    <span>4</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/parking.svg')}}" alt="parking">
                                    </div>
                                    <span>1</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/area.svg')}}" alt="area">
                                    </div>
                                    <span>3250</span>
                                </li>
                            </ul>
                            <div class="price-and-user">
                                <div class="price">$295,000</div>
                                <div class="user">
                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                    <a href="{{ route('pages.agent') }}">Jack Smith</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide bg-4">
                        <div class="properties-content">
                            <div class="info">
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
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
                                    <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bed.svg')}}" alt="bed">
                                    </div>
                                    <span>6</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/bathroom.svg')}}" alt="bathroom">
                                    </div>
                                    <span>4</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/parking.svg')}}" alt="parking">
                                    </div>
                                    <span>1</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{asset('assets/images/featured-properties/area.svg')}}" alt="area">
                                    </div>
                                    <span>3250</span>
                                </li>
                            </ul>
                            <div class="price-and-user">
                                <div class="price">$395,000</div>
                                <div class="user">
                                    <img src="{{asset('assets/images/user/user4.png')}}" alt="image">
                                    <a href="{{ route('pages.agent') }}">Jane Ronan</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <span><i class="ri-image-line"></i>5</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                        <span>6</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                        </div>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                        </div>
                                        <span>1</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                        </div>
                                        <span>3250</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <div class="top">
                                    <div class="title">
                                        <h3>
                                            <a href="{{ route('pages.single') }}">Heritage Buildings</a>
                                        </h3>
                                        <span>194 Mercer Street, NY 10012, USA</span>
                                    </div>
                                    <div class="price">$95,000</div>
                                </div>
                                <div class="bottom">
                                    <div class="user">
                                        <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                        <a href="{{ route('pages.agent') }}">Thomas Klarck</a>
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
                    <div class="col-xl-4 col-md-6">
                        <div class="properties-item">
                            <div class="properties-image">
                                <a href="{{ route('pages.single') }}">
                                    <img src="{{asset('assets/images/properties/properties8.jpg')}}" alt="image">
                                </a>
                                <ul class="action">
                                    <li>
                                        <div class="media">
                                            <span><i class="ri-vidicon-fill"></i></span>
                                            <span><i class="ri-image-line"></i>5</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                        <span>6</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                        </div>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                        </div>
                                        <span>1</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                        </div>
                                        <span>3250</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <div class="top">
                                    <div class="title">
                                        <h3>
                                            <a href="{{ route('pages.single') }}">Beachfront Properties</a>
                                        </h3>
                                        <span>194 Mercer Street, NY 10012, USA</span>
                                    </div>
                                    <div class="price">$55,000</div>
                                </div>
                                <div class="bottom">
                                    <div class="user">
                                        <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                        <a href="{{ route('pages.agent') }}">Walter White</a>
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
                    <div class="col-xl-4 col-md-6">
                        <div class="properties-item">
                            <div class="properties-image">
                                <a href="{{ route('pages.single') }}">
                                    <img src="{{asset('assets/images/properties/properties9.jpg')}}" alt="image">
                                </a>
                                <ul class="action">
                                 
                                    <li>
                                        <div class="media">
                                            <span><i class="ri-vidicon-fill"></i></span>
                                            <span><i class="ri-image-line"></i>5</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('pages.search') }}" class="link-btn">Apartment</a>
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
                                        <span>6</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/bathroom.svg')}}" alt="bathroom">
                                        </div>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/parking.svg')}}" alt="parking">
                                        </div>
                                        <span>1</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/properties/area.svg')}}" alt="area">
                                        </div>
                                        <span>3250</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <div class="top">
                                    <div class="title">
                                        <h3>
                                            <a href="{{ route('pages.single') }}">Luxury Apartments</a>
                                        </h3>
                                        <span>194 Mercer Street, NY 10012, USA</span>
                                    </div>
                                    <div class="price">$77,000</div>
                                </div>
                                <div class="bottom">
                                    <div class="user">
                                        <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                        <a href="{{ route('pages.agent') }}">Jane Ronan</a>
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
                </div>
            </div>
        </div>
        <!-- End Properties Area -->

     

        <!-- Start Testimonial Area -->
        <div class="testimonial-area pb-120">
            <div class="container-fluid" data-cues="slideInUp">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="info">
                                    <div class="image">
                                        <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                    </div>
                                    <div class="title">
                                        <h3>Jordan Williams</h3>
                                        <span>Commercial Property Manager</span>
                                    </div>
                                </div>
                                <p>“I highly recommend Andora agent to anyone looking to buy or sell a home. They are professional, reliable, and truly care about their clients' needs. They are professional, reliable, and truly care about their clients' needs.”</p>
                                <ul class="rating">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="gray"><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="info">
                                    <div class="image">
                                        <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                    </div>
                                    <div class="title">
                                        <h3>Brandon Mitchell</h3>
                                        <span>Project Developer</span>
                                    </div>
                                </div>
                                <p>“I highly recommend Andora agent to anyone looking to buy or sell a home. They are professional, reliable, and truly care about their clients' needs. They are professional, reliable, and truly care about their clients' needs.”</p>
                                <ul class="rating">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="info">
                                    <div class="image">
                                        <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                    </div>
                                    <div class="title">
                                        <h3>Brandon Mitchell</h3>
                                        <span>Residential Appraiser</span>
                                    </div>
                                </div>
                                <p>“I highly recommend Andora agent to anyone looking to buy or sell a home. They are professional, reliable, and truly care about their clients' needs. They are professional, reliable, and truly care about their clients' needs.”</p>
                                <ul class="rating">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="gray"><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="info">
                                    <div class="image">
                                        <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                    </div>
                                    <div class="title">
                                        <h3>Jordan Williams</h3>
                                        <span>Commercial Property Manager</span>
                                    </div>
                                </div>
                                <p>“I highly recommend Andora agent to anyone looking to buy or sell a home. They are professional, reliable, and truly care about their clients' needs. They are professional, reliable, and truly care about their clients' needs.”</p>
                                <ul class="rating">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="gray"><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="info">
                                    <div class="image">
                                        <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                    </div>
                                    <div class="title">
                                        <h3>Brandon Mitchell</h3>
                                        <span>Project Developer</span>
                                    </div>
                                </div>
                                <p>“I highly recommend Andora agent to anyone looking to buy or sell a home. They are professional, reliable, and truly care about their clients' needs. They are professional, reliable, and truly care about their clients' needs.”</p>
                                <ul class="rating">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="info">
                                    <div class="image">
                                        <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                    </div>
                                    <div class="title">
                                        <h3>Brandon Mitchell</h3>
                                        <span>Residential Appraiser</span>
                                    </div>
                                </div>
                                <p>“I highly recommend Andora agent to anyone looking to buy or sell a home. They are professional, reliable, and truly care about their clients' needs. They are professional, reliable, and truly care about their clients' needs.”</p>
                                <ul class="rating">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li class="gray"><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-pagination"></div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area -->





@endsection

@section('script')



@endsection
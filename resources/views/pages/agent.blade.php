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
                <div class="page-banner-content">
                    <h2>Agent Profile</h2>
                    <ul class="list">
                        <li>
                            <a href="{{ route('pages.acceuil') }}">Home</a>
                        </li>
                        <li>Agent Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Agent Profile Area -->
        <div class="agent-profile-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center align-items-center" data-cues="slideInUp">
                    <div class="col-lg-5 col-md-12">
                        <div class="agent-profile-image">
                            <img src="{{asset('assets/images/agents/agents1.jpg')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="agent-profile-content">
                            <div class="title">
                                <h2>Christopher Baker</h2>
                                <span class="sub">Residential Property Manager</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus maecenas accumsan lacus vel facilisis.</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="info-list">
                                        <li>
                                            <span>Email:</span>
                                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#5d3e352f342e29322d35382f1d3a303c3431733e3230"><span class="__cf_email__" data-cfemail="75161d071c06011a051d1007351218141c195b161a18">[email&#160;protected]</span></a>
                                        </li>
                                        <li>
                                            <span>Phone:</span>
                                            <a href="tel:00201068710594">+(002) 0106-8710-594</a>
                                        </li>
                                        <li>
                                            <span>Fax:</span>
                                            <a href="tel:01068710594">+0106-8710-594</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="info-list">
                                        <li>
                                            <span>Website:</span>
                                            <a href="https://envytheme.com/" target="_blank">andora.net</a>
                                        </li>
                                        <li>
                                            <span>Licenses:</span>
                                            Abcd
                                        </li>
                                        <li>
                                            <span>Address:</span>
                                            194 Mercer Street, NY 10012, USA
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="social-info">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-95"></div>
                <div class="row justify-content-center" data-cues="slideInUp">
                    <div class="col-lg-8 col-md-12">
                        <div class="agent-profile-information-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="property-tab" data-bs-toggle="tab" href="#property" role="tab" aria-controls="property">Property</a></li>
                                <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                
                                <div class="tab-pane fade show active" id="property" role="tabpanel">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-md-12">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="property-details.html">
                                                        <img src="{{asset('assets/images/properties/properties1.jpg')}}" alt="image">
                                                    </a>
                                                    <ul class="action">
                                                        <li>
                                                            <a href="property-grid.html" class="featured-btn">Featured</a>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <span><i class="ri-vidicon-fill"></i></span>
                                                                <span><i class="ri-image-line"></i>5</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">Apartment</a>
                                                        </li>
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">For Sale</a>
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
                                                                <a href="property-details.html">Vacation Homes</a>
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
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                                    <i class="ri-heart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                                    <i class="ri-arrow-left-right-line"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="property-details.html">
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
                                                            <a href="property-grid.html" class="link-btn">Apartment</a>
                                                        </li>
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">For Sale</a>
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
                                                                <a href="property-details.html">Industrial Spaces</a>
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
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                                    <i class="ri-heart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                                    <i class="ri-arrow-left-right-line"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="property-details.html">
                                                        <img src="{{asset('assets/images/properties/properties3.jpg')}}" alt="image">
                                                    </a>
                                                    <ul class="action">
                                                        <li>
                                                            <a href="property-grid.html" class="featured-btn">Featured</a>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <span><i class="ri-vidicon-fill"></i></span>
                                                                <span><i class="ri-image-line"></i>5</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">Apartment</a>
                                                        </li>
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">For Sale</a>
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
                                                                <a href="property-details.html">Single-Family Homes</a>
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
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                                    <i class="ri-heart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                                    <i class="ri-arrow-left-right-line"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="property-details.html">
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
                                                            <a href="property-grid.html" class="link-btn">Apartment</a>
                                                        </li>
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">For Sale</a>
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
                                                                <a href="property-details.html">Newly Built Homes</a>
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
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                                    <i class="ri-heart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                                    <i class="ri-arrow-left-right-line"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="property-details.html">
                                                        <img src="{{asset('assets/images/properties/properties5.jpg')}}" alt="image">
                                                    </a>
                                                    <ul class="action">
                                                        <li>
                                                            <a href="property-grid.html" class="featured-btn">Featured</a>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <span><i class="ri-vidicon-fill"></i></span>
                                                                <span><i class="ri-image-line"></i>5</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">Apartment</a>
                                                        </li>
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">For Sale</a>
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
                                                                <a href="property-details.html">Senior Apartments</a>
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
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                                    <i class="ri-heart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                                    <i class="ri-arrow-left-right-line"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <div class="properties-item">
                                                <div class="properties-image">
                                                    <a href="property-details.html">
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
                                                            <a href="property-grid.html" class="link-btn">Apartment</a>
                                                        </li>
                                                        <li>
                                                            <a href="property-grid.html" class="link-btn">For Sale</a>
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
                                                                <a href="property-details.html">Luxury Apartments</a>
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
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                                    <i class="ri-heart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                                    <i class="ri-arrow-left-right-line"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="comments-content">
                                        <h2>03 Comments</h2>
                                        <ul class="comments-list">
                                            <li>
                                                <div class="image">
                                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                                </div>
                                                <div class="info">
                                                    <h4>Thomas Markdanel</h4>
                                                    <span>26th February 2024</span>
                                                    <ul class="rating">
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image">
                                                    <img src="{{asset('assets/images/user/user2.png')}}" alt="image">
                                                </div>
                                                <div class="info">
                                                    <h4>Sarah Karly</h4>
                                                    <span>26th February 2024</span>
                                                    <ul class="rating">
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image">
                                                    <img src="{{asset('assets/images/user/user3.png')}}" alt="image">
                                                </div>
                                                <div class="info">
                                                    <h4>Alson Meklen</h4>
                                                    <span>26th February 2024</span>
                                                    <ul class="rating">
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                        <li><i class="ri-star-fill"></i></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <form class="comments-form">
                                            <div class="title">
                                                <h3>Add A Review</h3>
                                                <ul class="rating">
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                </ul>
                                            </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <form class="contact-me-form">
                            <h3>Contact Me</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your number">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="default-btn">
                                Submit Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Agent Profile Area -->

      

        <!-- Start Subscribe Area -->
        <div class="subscribe-wrap-area">
            <div class="container" data-cues="slideInUp">
                <div class="subscribe-wrap-inner-area">
                    <div class="subscribe-content">
                        <h2>Subscribe To Our Newsletter</h2>
                        <form class="subscribe-form">
                            <input type="search" class="form-control" placeholder="Enter your email">
                            <button type="submit" class="default-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->
        
@endsection

@section('script')



@endsection
@extends('base')

@section('nomPage')
Property | Andora
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
            <h2>Property Details</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Home</a>
                </li>
                <li>Single Property</li>
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
                                <span class="address">{{ $propertiesSingle->pays }}, {{ $propertiesSingle->ville }}, {{ $propertiesSingle->quartier }}</span>
                                <ul class="info-list">
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/property-details/bed.svg')}}" alt="bed">
                                        </div>
                                        <span>{{ $propertiesSingle->nbChambre }} Bedroom</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/property-details/bathroom.svg')}}" alt="bathroom">
                                        </div>
                                        <span>{{ $propertiesSingle->nbToillete }} Bathroom</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/property-details/parking.svg')}}" alt="parking">
                                        </div>
                                        <span>{{ $propertiesSingle->nbPiece }} Parking</span>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/property-details/area.svg')}}" alt="area">
                                        </div>
                                        <span>{{ $propertiesSingle->surface }} Area</span>
                                    </li>
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
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="right-content">
                                <ul class="link-list">
                                    <li>
                                        <a href="property-grid.html" class="link-btn">{{ $propertiesSingle->typePropriete->libelle }}</a>
                                    </li>
                                    <li>
                                        <a href="property-grid.html" class="link-btn">{{ $propertiesSingle->status }}</a>
                                    </li>
                                </ul>
                                <div class="price">{{ $propertiesSingle->prix }} XOF</div>
                                <div class="user">
                                    <img src="{{asset('assets/images/user/user1.png')}}" alt="image">
                                    <a href="{{ route('pages.agent') }}">{{ $propertiesSingle->user->nom_prenom }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-details-image">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-image">
                                        <img src="{{asset('assets/images/property-details/property-details1.jpg')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-image">
                                        <img src="{{asset('assets/images/property-details/property-details2.jpg')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-image">
                                        <img src="{{asset('assets/images/property-details/property-details3.jpg')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="block-image">
                                        <img src="{{asset('assets/images/property-details/property-details4.jpg')}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="block-image">
                                <img src="{{asset('assets/images/property-details/property-details-large.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-details-inner-content">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-md-12">
                            <div class="description">
                                <h3>Property Description</h3>
                                <p>{{ $propertiesSingle->description }}</p>
                            </div>

                            <div class="features">
                                <h3>Facts And Features</h3>
                                <div class="row justify-content-center">


                                    @foreach ($propertiesSingle->proprieteCaracteristiques->chunk(5) as $chunk)
                                    <div class="col-lg-4 col-md-4">
                                        <ul class="list">
                                            @foreach ($chunk as $item)
                                            <li>
                                                <i class="ri-check-double-fill"></i>
                                                {{ $item->caracteristique ->libelle}}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>



                            <div class="comments-area">
    <h2>{{ $propertiesSingle->comments->count() }} Comments</h2>
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
                        @for ($i = 0; $i < $filledStars; $i++)
                            <li><i class="ri-star-fill"></i></li>
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
                <li><i class="ri-star-fill"></i></li>
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="number" class="form-control col-md-6" placeholder="Enter your note">
                        </div>
                    </div>

                </div>

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
                        <div class="col-xl-4 col-md-12">
                            <div class="property-details-sidebar">
                                <div class="booking">
                                    <form>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Your name" class="form-control">
                                            <div class="icon">
                                                <i class="ri-user-3-line"></i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" placeholder="Your email" class="form-control">
                                            <div class="icon">
                                                <i class="ri-mail-send-line"></i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input type="text" placeholder="+12345678" class="form-control">
                                            <div class="icon">
                                                <i class="ri-phone-line"></i>
                                            </div>
                                        </div>
                                        <div class="form-group extra-top">
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="I'm interested in this property......." rows="5"></textarea>
                                            <div class="icon">
                                                <i class="ri-pencil-line"></i>
                                            </div>
                                        </div>
                                        <button type="submit" class="default-btn">Submit Request</button>
                                    </form>
                                </div>
                                <div class="featured-properties">
                                    <h3>Featured Properties</h3>
                                    <div class="swiper featured-properties-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="properties-item">
                                                    <div class="properties-image">
                                                        <a href="property-details.html">
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


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
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

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="properties-item">
                                                    <div class="properties-image">
                                                        <a href="property-details.html">
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

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
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

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="properties-item">
                                                    <div class="properties-image">
                                                        <a href="property-details.html">
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

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="properties-pagination"></div>
                                    </div>
                                </div>
                                <div class="contact-details">
                                    <h3>Contact Details</h3>
                                    <ul class="list">
                                        <li>
                                            <span>Email:</span>
                                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#7c1f1312081d1f083c1419101013521f1311"><span class="__cf_email__" data-cfemail="54373b3a20353720143c3138383b7a373b39">[email&#160;protected]</span></a>
                                        </li>
                                        <li>
                                            <span>Phone:</span>
                                            <a href="tel:01234567890">0123 456 7890</a>
                                        </li>
                                        <li>
                                            <span>Location:</span>
                                            New York, USA
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
<!-- End Property Details Area -->

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
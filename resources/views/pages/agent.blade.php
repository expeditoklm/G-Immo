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
            <h2>Profil du Proprietaire / Démarcheur</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Acceuil</a>
                </li>
                <li>Profil du Proprietaire / Démarcheur</li>
            </ul>

        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Profil du Proprietaire / Démarcheur Area -->
<div class="agent-profile-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-cues="slideInUp">
            <div class="col-lg-5 col-md-12">
                <div class="agent-profile-image">
                    @if($agent->sexe == 'Feminin' && !$agent->profile_img)
                    <img src="{{ asset('assets/images/user/fe-user.png') }}" alt="image">
                    @elseif($agent->sexe == 'Masculin' && !$agent->profile_img)
                    <img src="{{ asset('assets/images/user/ma-user.jpg') }}" alt="image">
                    @else
                    <img src="{{ asset($agent->profile_img) }}" alt="image">
                    @endif
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="agent-profile-content">
                    <div class="title">
                        <h2>{{ $agent->nom_prenom}}</h2>
                        <span class="sub">Residential Property Manager</span>
                        <p>{{ $agent->description}}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6">
                            <ul class="info-list">
                                @isset($agent->email)
                                <li>
                                    <span>E-mail:</span>
                                    <a href="mailto:{{ $agent->email}}"><span class="__cf_email__">{{ $agent->email}}</span></a>
                                </li>
                                @endisset
                                @isset($agent->telephone)
                                <li>
                                    <span>Télephone:</span>
                                    <a href="tel:{{ $agent->telephone}}">{{ $agent->telephone}}</a>
                                </li>
                                @endisset
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul class="info-list">
                                @isset($agent->website)
                                <li>
                                    <span>Site Web:</span>
                                    <a href="https:{{ $agent->website}}" target="_blank">{{ $agent->website}}</a>
                                </li>
                                @endisset
                                <li>
                                    <span>Addresse:</span>
                                    Bénin, {{ $agent->ville}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="social-info">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
                            <i class="ri-twitter-x-line"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank">
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
                        <li class="nav-item"><a class="nav-link active" id="property-tab" data-bs-toggle="tab" href="#property" role="tab" aria-controls="property">Mes Propriétés</a></li>
                        @if($commentaires->count() != 0)
                        <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Commentaires</a></li>
                        @endif
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="property" role="tabpanel">
                            <div class="row justify-content-center">
                                @foreach ($properties as $item)
                                <div class="col-xl-6 col-md-12">
                                    <div class="properties-item">
                                        <div class="properties-image">
                                            <a href="property-details.html">
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
                                                <form id="post2{{ $item->id }}" action="{{ route('pages.search-post') }}" method="POST" style="display: none;">
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
                                                    <span>Bénin, {{ $item->ville }}, {{ $item->quartier }}</span>
                                                </div>
                                                <div class="price">{{ $item->prix }} XOF</div>
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
                                                    <a href="#" onclick="document.getElementById('post4{{ $item->user->id }}').submit(); return false;">{{ $item->user->nom_prenom }}</a>

                                                    <!-- Formulaire caché -->
                                                    <form id="post4{{ $item->user->id }}" action="{{ route('pages.agent') }}" method="POST" style="display: none;">
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
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="comments-content">
                                @if($commentaires->count() != 0)
                                <h2>{{ $commentaires->count() }} Commentaires</h2>
                                @endif
                                <ul class="comments-list">
                                    @foreach ($commentaires as $item)
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
                                                @for ($i = 0; $i < $filledStars; $i++) <li><i class="ri-star-fill"></i>
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



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <form class="contact-me-form" action="{{ route('pages.agent') }}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $agent->id}}">
                <h3>Contactez-moi</h3>
                <div class="form-group">
                    <input type="text" name="nom_prenom" class="form-control" placeholder="Entrer votre nom et prénom">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Entrer votre e-mail">
                </div>
                <div class="form-group">
                    <input type="number" name="telephone" class="form-control" placeholder="Entrer votre télephone">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Votre message"></textarea>
                </div>
                <button type="submit" name="btn_msg" class="default-btn">
                    Soumettre la demande
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
                <h2>Abonnez-vous à notre Newsletter</h2>
                <form class="subscribe-form" action="{{ route('pages.agent') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $agent->id}}">
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
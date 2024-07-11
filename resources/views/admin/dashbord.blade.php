@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .nice-select {
        display: none;
    }
</style>

<!-- Votre style personnalisé -->
<style>
    .form-group {
        margin-bottom: 1.5rem;
    }

    .password-section {
        margin-top: 2rem;
        border-top: 1px solid #ddd;
        padding-top: 1.5rem;
    }

    .select2-container--default .select2-selection--single {
        height: 38px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 6px 12px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #495057;
        line-height: 26px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
    }

    .select2-container {
        width: 100% !important;
        /* Ensure Select2 takes full width */
    }
</style>

@endsection

@section('body')
@endsection

@section('header')

@endsection

@section('header2')

@endsection

@section('logo')

@endsection

@section('navigation')

@endsection


@section('class')
col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2
@endsection

@section('content')



<div class="dashborad-box stat bg-white">

    <h4 class="title">Gérer votre tableau de bord</h4>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </div>
                    <div class="info">
                        <h6 class="number">{{ $nbProperties}}</h6>
                        <p class="type ml-1">Propriétés Publiées</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="info">
                        <h6 class="number">{{ $nbReviews}}</h6>
                        <p class="type ml-1">Total des commentaires</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 dar com mr-3">
                <div class="item mb-0">
                    <div class="icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="info">
                        <h6 class="number">{{ $nbMessages}}</h6>
                        <p class="type ml-1">Total des messages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



























@if($messages->isNotEmpty())
<div class="dashborad-box">
    <h4 class="title">Messages</h4>
    <div class="section-body">
        <div class="messages">

            @foreach ($messages as $item)
            <div class="message">
                <div class="thumb">
                    <img class="img-fluid" src="{{ asset('assets/admin/images/testimonials/ts-1.jpg') }}" alt="">
                </div>

                <div class="body">
                    <h6>{{ $item->user->nom_prenom }}</h6>
                    <p class="post-time">{{ $item->created_at }}</p>
                    <p class="content mb-0 mt-2">{{ $item->message }}</p>
                    <div class="controller">
                        <ul>
                            <li>
                                <a href="#" class="delete-icon" data-id="{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Formulaire caché -->
            <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="message2_sup_id" value="{{ $item->id }}">
                    </form>

            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->message }}" ?</p>
                    <a onclick="document.getElementById('post{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endif

@if($reviews->isNotEmpty())
<div class="dashborad-box">
    <h4 class="title">Commentaires</h4>
    <div class="section-body">
        <div class="messages">

            @foreach ($reviews as $item)
            <div class="message">
                <div class="thumb">
                    <img class="img-fluid" src="{{asset('assets/admin/images/testimonials/ts-4.jpg')}}" alt="">
                </div>
                <div class="body">
                    <h5>{{ $item->propriete->titre}}</h5>
                    <h6>{{ $item->nom_prenom}}</h6>
                    <p class="post-time">{{ $item->created_at}}</p>
                    <p class="content mb-0 mt-2">{{ $item->comment}} </p>
                    @php
                    $totalStars = 5;
                    $filledStars = $item->note;
                    $grayStars = $totalStars - $filledStars;
                    @endphp
                    <ul class="starts mb-0">
                        @for ($i = 0; $i < $filledStars; $i++) <li>
                            <i class="fa fa-star"></i>
                            </li>
                            @endfor

                            @for ($i = 0; $i < $grayStars; $i++) <li><i class="fa fa-star-o"></i>
                                @endfor

                    </ul>
                    <div class="controller">
                        <ul>

                            <li>
                                <a href="#" class="delete-icon" data-id="{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- The Modal -->
            <form id="post2{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="review2_sup_id" value="{{ $item->id }}">
                    </form>

            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->comment }}" ?</p>
                    <a onclick="document.getElementById('post2{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endif

<div class="dashborad-box mb-0">
    <h4 class="heading pt-0">Information Personalle</h4>
    <div class="section-inforamation">
        <div class="container mt-5">
            <form action="{{ route('admin.dashbord') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nom et Prénom</label>
                            <input type="text" placeholder="Votre Nom et Prénom" name="nom_prenom" class="form-control" value="{{ Auth::user()->nom_prenom }}" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pays</label>
                            <select class="form-select" onchange="countryHasChanged()" id="country" name="pays" aria-label="Default select example" required>
                                <option value="{{ $userCountryCode }}" selected>{{ $userCountry }}</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country['countryCode'] }}">{{ $country['countryName'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ville</label>
                            <select class="form-select" id="city" name="ville" aria-label="Default select example" required>
                                <option value="{{ $userCityCode}}" selected>{{$userCity }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Site Web</label>
                            <textarea name="website" placeholder="Votre site web" class="form-control">{{ Auth::user()->website }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>À propos de vous</label>
                            <textarea name="description" placeholder="À propos de vous" class="form-control">{{ Auth::user()->description }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="password-section">
                    <h6>Mettre à jour le mot de passe</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nouveau mot de passe</label>
                                <input type="password" name="new_password" class="form-control" placeholder="Veuillez écrire le nouveau mot de passe">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Répétez le mot de passe</label>
                                <input type="password" name="new_password_confirmation" class="form-control" placeholder="Veuillez réécrire le même mot de passe.">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn_modif" class="btn btn-primary btn-lg mt-2">Soumettre</button>
            </form>
        </div>
    </div>
</div>


@endsection

@section('js')

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialisation de Select2 sur les champs de sélection
        $('#country').select2({
            placeholder: 'Select your country'
        });
        $('#city').select2({
            placeholder: 'Select your city'
        });
    });

    function countryHasChanged() {
        const countrySelect = document.getElementById('country');
        const citySelect = document.getElementById('city');
        const countryCode = countrySelect.value;

        if (countryCode) {
            fetch("{{ route('get-cities') }}?country_code=" + countryCode)
                .then(response => response.json())
                .then(data => {
                    citySelect.innerHTML = ''; // Clear previous options
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.geonameId;
                        option.textContent = city.name;
                        citySelect.appendChild(option);
                    });
                    $('#city').select2(); // Re-initialiser Select2 pour le champ des villes
                })
                .catch(error => {
                    console.error('Error fetching cities:', error);
                });
        } else {
            citySelect.innerHTML = '<option value="">Select your city</option>';
            $('#city').select2(); // Re-initialiser Select2 pour le champ des villes
        }
    }
</script>


@endsection
@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .full-width {
        width: 100%;
    }
</style>

<style>
    .table-fixed-header {
        width: 100%;
        border-collapse: collapse;
    }

    .table-fixed-header thead {
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        /* Vous pouvez ajuster la couleur selon votre design */
        z-index: 1;
    }

    .table-fixed-header th,
    .table-fixed-header td {
        padding: 8px 12px;
        border: 1px solid #dee2e6;
    }

    .table-container {
        max-height: 400px;
        /* Définissez la hauteur maximale selon vos besoins */
        overflow-y: auto;
    }

    .btn-warning .btn-xs {
        background-color: #dee2e6;
        border: 3px solid blue;
    }
</style>

@endsection

@section('body')
inner-pages listing agents hd-white
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


@if ($isAdmin)

<section class="properties-right list featured portfolio blog pt-5">
    <div class="container">
        <section class="headings-2 pt-0 pb-4">
            <div class="pro-wrapper  m-0 p-0">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar m-0 p-0">
                        <div class="text-heading text-left">
                            <p class="pb-2"><a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} ">Home </a> &nbsp;/&nbsp; <span>{{$titre}}</span></p>
                        </div>

                        <h3>{{$titre}}</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="row ">


            <aside class="col-lg-4 col-md-12 car full-width">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="widget-boxed main-search-field">
                        <div class="widget-boxed-header">
                            <h4>Filtre principal de propriété</h4>
                        </div>
                        <form class="form" id="superficie-form" method="get" action="{{ route('admin.my-properties') }}">
                            @csrf
                            <!-- Search Form -->
                            <div class="trip-search">

                                <!-- Form Looking for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" name="titre" placeholder="Entrer le titre..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Looking for -->
                                <div class="form-group categories">
                                    <select name="ville" class="d-none">
                                        <option value="">Ville</option>
                                        @foreach ($uniqueCities as $item)
                                        <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach

                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home" aria-hidden="true"></i>Ville</span>
                                        <ul class="list">
                                            @foreach ($uniqueCities as $item)
                                            <li data-value="{{ $item->id }}" class="option selected">{{ $item->libelle }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group categories">
                                    <select name="type_propriete_id" class="d-none">
                                        <option value="">Type de Propriété</option>
                                        @foreach ($typeProprietes as $item)
                                        <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach

                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home" aria-hidden="true"></i>Type de Propriété</span>
                                        <ul class="list">
                                            @foreach ($typeProprietes as $item)
                                            <li data-value="{{ $item->id }}" class="option selected">{{ $item->libelle }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Categories -->
                                <!-- Form Property Status -->
                                <div class="form-group categories">
                                    <select name="status" class="d-none">
                                        <option value="">Status</option>


                                        <option value="For Sale">Vendre</option>
                                        <option value="Rental">Louer</option>
                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home"></i>Status de la Propriété</span>
                                        <ul class="list">
                                            <li data-value="For Sale" class="option selected">Vendre</li>
                                            <li data-value="Rental" class="option">Louer</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <select name="nbPiece" class="d-none">
                                        <option value=""></option>

                                        @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            <option value="6+">6+</option>
                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bath" aria-hidden="true"></i>Pièce</span>
                                        <ul class="list">
                                            <li data-value="" class="option">Nombre de pièce</li>

                                            @for ($i = 1; $i <= 6; $i++) <option data-value="{{ $i }}" class="option">{{ $i }}</option>
                                                @endfor
                                                <option data-value="6+" class="option">6+</option>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Form Bedrooms -->
                                <div class="form-group beds">
                                    <select name="nbChambre" class="d-none">
                                        <option value=""></option>

                                        @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            <option value="6+">6+</option>
                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Chambre</span>
                                        <ul class="list">
                                            <li data-value="" class="option">Nombre de chambre</li>

                                            @for ($i = 1; $i <= 6; $i++) <option data-value="{{ $i }}" class="option">{{ $i }}</option>
                                                @endfor
                                                <option data-value="6+" class="option">6+</option>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <select name="nbToillete" class="d-none">
                                        <option value=""></option>

                                        @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            <option value="6+">6+</option>
                                    </select>
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Toillete</span>
                                        <ul class="list">
                                            <li data-value="" class="option">Nombre de toillete</li>

                                            @for ($i = 1; $i <= 6; $i++) <li data-value="{{ $i }}" class="option">{{ $i }}</li>
                                                @endfor
                                                <li data-value="6+" class="option">6+</li>
                                        </ul>
                                    </div>
                                    <!-- Ajoutez l'attribut name ici pour que le formulaire puisse récupérer la valeur -->

                                </div>


                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">

                                        <div class="main-search-input-item">
                                            <input type="number" name="prix" placeholder="Entrer le prix maximum ..." value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="date" name="created_at" placeholder="Entrer la date de pub ..." value="" />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" name="user_name" placeholder="Nom du propriétaire ..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->

                            </div>
                            <!--/ End Search Form -->
                            <!-- Price Fields -->
                            <div class="main-search-field-2">
                                <!-- Area Range -->
                                <div class="range-slider">
                                    <label>Superficie</label>
                                    <div id="area-range" data-min="0" data-max="1000" data-unit="m2"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <br>
                                <!-- Price Range -->
                                <div class="range-slider">
                                    <label>Prix</label>
                                    <div id="price-range" data-max="999999999999" data-unit="XOF  " data-min="0"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- More Search Options -->
                            <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Caractéristiques" data-close-title="Caractéristiques"></a>
                            <div class="more-search-options relative">
                                <!-- Checkboxes -->
                                <div class="checkboxes one-in-row margin-bottom-10">
                                    @foreach ($caracteristiques as $item)
                                    <input id="{{ $item->id }}" value="{{ $item->id }}" type="checkbox" name="caracteristiques[]">
                                    <label for="{{ $item->id }}">{{ $item->libelle }}</label>
                                    @endforeach
                                </div>



                                <!-- Checkboxes / End -->
                            </div>
                            <!-- More Search Options / End -->
                            <div class="col-lg-12 no-pds">
                                <div class="at-col-default-mar">
                                    <button class="btn btn-default hvr-bounce-to-right" name="filtre_btn" type="submit">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="widget-boxed popular mt-5 mb-0">
                        <div class="widget-boxed-header">
                            <h4>Action&nbsp;Récent&nbsp;(Utilisateur)</h4>
                        </div>
                        <div class="widget-boxed-body mb-4 ">
                            <div class="recent-post">
                                <div class="tags">
                                    <span>

                                        <a href="#" onclick="document.getElementById('post6').submit(); return false;" class="btn btn-outline-primary">
                                            10 Dernières propriétés ajoutées
                                        </a>

                                        <form id="post6" action="{{ route('admin.my-properties') }}" method="get" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="properte-ajouter" value="properte-ajouter">
                                        </form>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="widget-boxed-header">
                            <h4>Action&nbsp;Récent&nbsp;(Administra...)</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">

                                <div class="tags">
                                    <span>

                                        <a href="#" onclick="document.getElementById('post1').submit(); return false;" class="btn btn-outline-primary">
                                            10 Dernières propriétés ajoutées
                                        </a>

                                        <form id="post1" action="{{ route('admin.my-properties') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="property-ajouter" value="property-ajouter">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>

                                        <a href="#" onclick="document.getElementById('post2').submit(); return false;" class="btn btn-outline-primary">
                                            10 Dernières propriétés modifier
                                        </a>

                                        <form id="post2" action="{{ route('admin.my-properties') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="property-modifier" value="property-modifier">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>

                                        <a href="#" onclick="document.getElementById('post3').submit(); return false;" class="btn btn-outline-primary">
                                            10 Dernières propriétés supprimer
                                        </a>

                                        <form id="post3" action="{{ route('admin.my-properties') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="property-supprimer" value="property-supprimer">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags ">
                                    <span>

                                        <a href="#" onclick="document.getElementById('post4').submit(); return false;" class="btn btn-outline-primary">
                                            10 Dernières propriétés masqués
                                        </a>

                                        <form id="post4" action="{{ route('admin.my-properties') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="property-masquer" value="property-masquer">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags ">
                                    <span>

                                        <a href="#" onclick="document.getElementById('post5').submit(); return false;" class="btn btn-outline-primary">
                                            10 Dernières propriétés mise en avant
                                        </a>

                                        <form id="post5" action="{{ route('admin.my-properties') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="property-avancer" value="property-avancer">
                                        </form>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="col-lg-8 col-md-12 blog-pots" style="display: block;">
                <div class="dashborad-box">
                    @if($adminPropertiesView->isNotEmpty() && $pagination == true)
                    <h4 class="title">Affichage de {{ $adminPropertiesView->firstItem() }} à {{ $adminPropertiesView->lastItem() }} dans {{ $adminPropertiesView->total() }} Résultats</h4>
                    @endif
                    <div class="section-body listing-table">
                        <div class="table-responsive table-container">
                            @if($adminPropertiesView->isNotEmpty())
                            <table class="table table-striped table-fixed-header">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Titre&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Nom&nbsp;Du&nbsp;Propriétaire</th>
                                        <th>Status&nbsp;Propriété</th>
                                        <th>Type&nbsp;Propriete</th>
                                        <th>NbPiece</th>
                                        <th>NbChambre</th>
                                        <th>NbToillete</th>
                                        <th>Prix</th>
                                        <th>Surface</th>
                                        <th>Adresse&nbsp;&nbsp;&nbsp;</th>
                                        <th>Pays&nbsp;&nbsp;&nbsp;</th>
                                        <th>Ville&nbsp;&nbsp;&nbsp;</th>
                                        <th>Quartier&nbsp;&nbsp;&nbsp;</th>
                                        <th>Vue</th>
                                        <th colspan="
                                        @if($restaurer==false)
                                        5
                                        @else
                                        1
                                        @endif
                                        ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($adminPropertiesView as $item)
                                    <tr id="titleSupprimer{{ $item->id}}">
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->titre}}</td>
                                        <td>{{ $item->user->nom_prenom}}</td>
                                        <td>{{ $item->status}}</td>
                                        <td>{{ $item->typePropriete->libelle}}</td>
                                        <td>{{ $item->nbPiece}}</td>
                                        <td>{{ $item->nbChambre}}</td>
                                        <td>{{ $item->nbToillete}}</td>
                                        <td>{{ $item->prix}}</td>
                                        <td>{{ $item->surface}}</td>
                                        <td>{{ $item->adresse}}</td>
                                        <td>Bénin</td>
                                        <td>{{ $item->ville->libelle}}</td>
                                        <td>{{ $item->quartier}}</td>
                                        <td>{{ $item->vue}}</td>
                                        @if($restaurer==false)
                                        <td class="view-details" title="Voir"><a href="#"><i class="fa fa-eye text-warning" title="Voir"></i></a></td>
                                        <td class="edit" title="Modifier"><a href="#"><i class="fa fa-pencil text-primary " title="Modifier"></i></a></td>
                                        @if($item->masquer == 0)
                                        <td title="Masquer" id="titleMasquer{{ $item->id}}"><a href="#" class="delete-icon" data-id="Masquer{{ $item->id}}"><i class="fa fa-check" style="color: green;" id="masque{{ $item->id}}"></i></a></td>
                                        @else
                                        <td title="Démasquer" id="titleDemasquer{{ $item->id}}"><a href="#" class="delete-icon" data-id="Demasquer{{ $item->id}}"><i class="fa fa-eye-slash text-secondary" id="demasque{{ $item->id}}"></i></a></td>
                                        @endif
                                        <td title="Mettre en avant"><a href="#" class="delete-icon" data-id="MettreAvant{{ $item->id}}"><i class="fa fa-arrow-up text-info" title="Mettre en avant"></i></a></td>
                                        @endif
                                        @if($restaurer==false)
                                        <td title="Supprimer"><a href="#" class="delete-icon" data-id="Supprimer{{ $item->id}}"><i class="fa fa-trash" title="Supprimer"></i></a></td>
                                        @else
                                        <td title="Restaurer"><a href="#" class="delete-icon" data-id="Restaurer{{ $item->id}}"><i class="fa fa-trash" style="color: green;"></i></a></td>
                                        @endif







                                        <!-- The Modal -->
                                        <div id="myModal-Supprimer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>supprimer</b> "{{ $item->titre}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 supprimer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>


                                        <!-- The Modal -->
                                        <div id="myModal-Restaurer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>restaurer</b> "{{ $item->titre}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 restaurer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>



                                        <!-- The Modal -->
                                        <div id="myModal-MettreAvant{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>mettre en avant</b> "{{ $item->titre}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 mettreAvant" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <div id="myModal-Masquer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeMasquer{{ $item->id}}">masquer</b> "{{ $item->titre}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 masquer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <div id="myModal-Demasquer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeDemasquer{{ $item->id}}">démasquer</b> "{{ $item->titre}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 demasquer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                        @if($adminPropertiesView->isNotEmpty() && $pagination == true)
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination justify-content-center">

                                    {{-- Bouton Previous --}}
                                    @if ($adminPropertiesView->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $adminPropertiesView->previousPageUrl() }}">Previous</a>
                                    </li>
                                    @endif

                                    {{-- Affichage des pages --}}
                                    @foreach ($adminPropertiesView->getUrlRange(1, $adminPropertiesView->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $adminPropertiesView->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                    @endforeach

                                    {{-- Bouton Next --}}
                                    @if ($adminPropertiesView->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $adminPropertiesView->nextPageUrl() }}">Next</a>
                                    </li>
                                    @else
                                    <li class="page-item disabled">
                                        <span class="page-link">Next</span>
                                    </li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                        @else
                        <div class="pagination-container">
                            @if(!($adminPropertiesView->isNotEmpty()))
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link " href="">Pas de propriéte pour le moment</a>
                                    </li>

                                </ul>
                            </nav>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>


@else

@if($properties->isNotEmpty())
<div class="my-properties">
    <table class="table-responsive">
        <thead>
            <tr>
                <th class="pl-2">Mes Propriétés</th>
                <th class="p-0"></th>
                <th>Date d'ajout</th>
                <th>Vues</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $item)
            <tr>
                <td class="image myelist">
                    <a href="#" onclick="document.getElementById('proper{{ $item->id }}').submit(); return false;">
                        <img alt="my-properties-3" src="{{ asset($item->proprieteImages->first()->url) }}" class="img-fluid">
                    </a>
                </td>

                <!-- Formulaire caché -->
                <form id="proper{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                </form>
                <td>
                    <div class="inner">
                        <a href="#" onclick="document.getElementById('property{{ $item->id }}').submit(); return false;">
                            <h2>{{ $item->titre}}</h2>
                        </a>

                        <!-- Formulaire caché -->
                        <form id="property{{ $item->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                        </form>

                        <figure><i class="lni-map-marker"></i> Bénin, {{ $item->ville->libelle}}, {{ $item->quartier }}</figure>

                        @php
                        $totalStars = 5;
                        $filledStars = intval($item->comments->avg('note')) ;
                        $grayStars = $totalStars - $filledStars;
                        @endphp
                        <ul class="starts text-left mb-0">
                            @for ($i = 0; $i < $filledStars; $i++) <li class="mb-0">
                                <i class="fa fa-star"></i>
                                </li>
                                @endfor

                                @for ($i = 0; $i < $grayStars; $i++) <li class="mb-0">
                                    <i class="fa fa-star-o"></i>
                                    </li>
                                    @endfor
                                    <li class="ml-3">({{ $item->comments->count() }} Reviews)</li>
                        </ul>


                    </div>
                </td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->vue }}</td>
                <td class="actions">

                    <a href="#" class="edit" onclick="document.getElementById('post2{{ $item->id }}').submit(); return false;"><i class="lni-pencil"></i>Edit</a>
                    <a href="#" class="delete-icon" data-id="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>

                    <!-- Formulaire caché -->
                    <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="property_sup_id" value="{{ $item->id }}">
                    </form>

                    <!-- Formulaire caché -->
                    <form id="post2{{ $item->id }}" action="{{ route('modif-property') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="property_modif_id" value="{{ $item->id }}">
                    </form>
                </td>
            </tr>
            <!-- The Modal -->
            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->titre }}" ?</p>
                    <a onclick="document.getElementById('post{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
    @if($properties->isNotEmpty())
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">

                {{-- Bouton Previous --}}
                @if ($properties->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $properties->previousPageUrl() }}">Previous</a>
                </li>
                @endif

                {{-- Affichage des pages --}}
                @foreach ($properties->getUrlRange(1, $properties->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $properties->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach

                {{-- Bouton Next --}}
                @if ($properties->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $properties->nextPageUrl() }}">Next</a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="page-link">Next</span>
                </li>
                @endif

            </ul>
        </nav>
    </div>
    @else
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link " href="{{ $properties->previousPageUrl() }}">Pas de propriéte pour le moment</a>
                </li>

            </ul>
        </nav>
    </div>
    @endif


</div>
@endif
@endif
@endsection

@section('js')

<script src="{{asset('assets/admin/js/inner.js')}}"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    document.querySelectorAll('.masquer').forEach(function(button) {

        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            var masque = document.getElementById('masque' + id);
            var titreMasque = document.getElementById('titleMasquer' + id);
            var verbeMasquer = document.getElementById('verbeMasquer' + id);

            var classNames = masque.className;
            var classNamesVariable = classNames;
            if (classNamesVariable == 'fa fa-check') {

                $.ajax({
                    url: '/ajax.property-masquer',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Masquer' + id).style.display = 'none';
                        document.getElementById('masque' + id).classList.remove('fa', 'fa-check');
                        document.getElementById('masque' + id).classList.add(...['fa', 'fa-eye-slash', 'text-secondary']);
                        document.getElementById('masque' + id).style.color = ''; // Debloquer le modal si nécessaire
                        titreMasque.title = 'Démasquer';
                        verbeMasquer.innerHTML = "démasquer"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.property-demasquer',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Masquer' + id).style.display = 'none';
                        document.getElementById('masque' + id).classList.remove('fa', 'fa-eye-slash', 'text-secondary');
                        document.getElementById('masque' + id).classList.add(...['fa', 'fa-check']);
                        document.getElementById('masque' + id).style.color = 'green'; // Debloquer le modal si nécessaire
                        titreMasque.title = 'Masquer';
                        verbeMasquer.innerHTML = "masquer"
                    }
                });
                //alert('demasquer avec succes')

            }
        });
    });


    document.querySelectorAll('.demasquer').forEach(function(button) {

        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            var demasque = document.getElementById('demasque' + id);
            var titreDemasque = document.getElementById('titleDemasquer' + id);
            var verbeDemasquer = document.getElementById('verbeDemasquer' + id);

            var classNames = demasque.className;
            var classNamesVariable = classNames;
            if (classNamesVariable == 'fa fa-check') {

                $.ajax({
                    url: '/ajax.property-masquer',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Demasquer' + id).style.display = 'none';
                        document.getElementById('demasque' + id).classList.remove('fa', 'fa-check');
                        document.getElementById('demasque' + id).classList.add(...['fa', 'fa-eye-slash', 'text-secondary']);
                        document.getElementById('demasque' + id).style.color = ''; // Debloquer le modal si nécessaire
                        titreDemasque.title = 'Démasquer';
                        verbeDemasquer.innerHTML = "démasquer"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.property-demasquer',
                    type: 'GET',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Demasquer' + id).style.display = 'none';
                        document.getElementById('demasque' + id).classList.remove('fa', 'fa-eye-slash', 'text-secondary');
                        document.getElementById('demasque' + id).classList.add(...['fa', 'fa-check']);
                        document.getElementById('demasque' + id).style.color = 'green'; // Debloquer le modal si nécessaire
                        titreDemasque.title = 'Masquer';
                        verbeDemasquer.innerHTML = "masquer"
                    }
                });
                //alert('demasquer avec succes')

            }
        });
    });
</script>





<script>
    document.querySelectorAll('.supprimer').forEach(function(button) {
        button.addEventListener('click', function(e) {

            e.preventDefault();
            const id = this.dataset.id;

            var titreSupprimer = document.getElementById('titleSupprimer' + id);


            $.ajax({
                url: '/ajax.property-supprimer',
                type: 'get',
                data: {
                    id: id
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(response) {
                    document.getElementById('myModal-Supprimer' + id).style.display = 'none';
                    titreSupprimer.style.display = 'none';
                }
            });
        });
    });
</script>


<script>
    document.querySelectorAll('.restaurer').forEach(function(button) {
        button.addEventListener('click', function(e) {

            e.preventDefault();
            const id = this.dataset.id;

            var titreSupprimer = document.getElementById('titleSupprimer' + id);


            $.ajax({
                url: '/ajax.property-restaurer',
                type: 'get',
                data: {
                    id: id
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(response) {
                    document.getElementById('myModal-Restaurer' + id).style.display = 'none';
                    titreSupprimer.style.display = 'none';
                }
            });
        });
    });
</script>

<script>
    document.querySelectorAll('.mettreAvant').forEach(function(button) {
        button.addEventListener('click', function(e) {

            e.preventDefault();
            const id = this.dataset.id;



            $.ajax({
                url: '/ajax.property-mettreAvant',
                type: 'get',
                data: {
                    id: id
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(response) {
                    document.getElementById('myModal-MettreAvant' + id).style.display = 'none';
                    console.log(response)
                }
            });
        });
    });
</script>

@endsection
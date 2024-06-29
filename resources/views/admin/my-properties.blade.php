@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

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


<section class="properties-right list featured portfolio blog pt-5">
    <div class="container">
        <section class="headings-2 pt-0 pb-4">
            <div class="pro-wrapper  m-0 p-0">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar m-0 p-0">
                        <div class="text-heading text-left">
                            <p class="pb-2"><a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} ">Home </a> &nbsp;/&nbsp; <span>Liste des propriétés</span></p>
                        </div>

                        <h3>Liste des propriétés</h3>
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
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Looking for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Entrer le titre..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Looking for -->
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-map-marker"></i>Ville</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">New York</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Categories -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home" aria-hidden="true"></i>Type de Propriété</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">House</li>
                                            <li data-value="3" class="option">Single Family</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Categories -->
                                <!-- Form Property Status -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home"></i>Status de la Propriété</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">Vendre</li>
                                            <li data-value="2" class="option">Louer</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                                 <!-- Form Bathrooms -->
                                 <div class="form-group bath">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bath" aria-hidden="true"></i>Pièce</span>
                                        <ul class="list">
                                        @for ($i = 1; $i <= 6; $i++) <option data-value="{{ $i }}" class="option">{{ $i }}</option>
                                                @endfor
                                                <option data-value="6+" class="option">6+</option>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Form Bedrooms -->
                                <div class="form-group beds">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Chambre</span>
                                        <ul class="list">
                                            @for ($i = 1; $i <= 6; $i++) <option data-value="{{ $i }}" class="option">{{ $i }}</option>
                                                @endfor
                                                <option data-value="6+" class="option">6+</option>
                                        </ul>
                                    </div> 
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Toillete</span>
                                        <ul class="list">
                                        @for ($i = 1; $i <= 6; $i++) <option data-value="{{ $i }}" class="option">{{ $i }}</option>
                                                @endfor
                                                <option data-value="6+" class="option">6+</option>
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">

                                        <div class="main-search-input-item">
                                            <input type="number" placeholder="Entrer le prix maximum ..." value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="date" placeholder="Entrer la date de pub ..." value="" />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Nom du propriétaire ..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                            </form>
                        </div>
                        <!--/ End Search Form -->
                        <!-- Price Fields -->
                        <div class="main-search-field-2">
                            <!-- Area Range -->
                            <div class="range-slider">
                                <label>Superficie</label>
                                <div id="area-range" data-min="0" data-max="1300" data-unit="m2"></div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            <!-- Price Range -->
                            <div class="range-slider">
                                <label>Prix</label>
                                <div id="price-range" data-max="600000" data-unit="XOF  " data-min="0" ></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- More Search Options -->
                        <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Caractéristiques" data-close-title="Caractéristiques"></a>
                        <div class="more-search-options relative">
                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-10">
                                <input id="check-2" type="checkbox" name="check">
                                <label for="check-15">Outdoor Shower</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- More Search Options / End -->
                        <div class="col-lg-12 no-pds">
                            <div class="at-col-default-mar">
                                <button class="btn btn-default hvr-bounce-to-right" type="submit">Rechercher</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-boxed popular mt-5 mb-0">
                        <div class="widget-boxed-header">
                            <h4>Tags Populaire</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">10 Dernières propriétés ajoutées </a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                </div>
                                <div class="tags no-mb">
                                    <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="col-lg-8 col-md-12 blog-pots" style="display: block;">
                <div class="dashborad-box">
                    <h4 class="title">Affichage de 1 à 2 dans 5 Résultats</h4>
                    <div class="section-body listing-table">
                        <div class="table-responsive table-container">
                            <table class="table table-striped table-fixed-header">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Titre</th>
                                        <th>Nom&nbsp;Du&nbsp;Propriétaire</th>
                                        <th>StatusPropriété</th>
                                        <th>TypePropriete</th>
                                        <th>NbPiece</th>
                                        <th>NbChambre</th>
                                        <th>NbToillete</th>
                                        <th>Prix</th>
                                        <th>Surface</th>
                                        <th>Adresse  </th>
                                        <th>Pays</th>
                                        <th>Ville</th>
                                        <th>Quartier</th>
                                        <th>Vue</th>
                                        <th colspan="5">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 25; $i++) <tr>
                                        <td>{{$i}}</td>
                                        <td>Luxury Restaurant</td>
                                        <td>Lachilo Expédit</td>
                                        <td>A vendre</td>
                                        <td>Parcelle</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>300</td>
                                        <td>100</td>
                                        <td>Forgeron</td>
                                        <td>Bénin</td>
                                        <td>Porto-Novo</td>
                                        <td>Tokpota</td>
                                        <td>22</td>
                                        <td class="view-details" title="Voir"><a href="#"><i class="fa fa-eye text-warning" title="Voir"></i></a></td>
                                        <td class="edit" title="Modifier"><a href="#"><i class="fa fa-pencil text-primary " title="Modifier"></i></a></td>
                                        <td class="slash" title="Masquer"><a href="#" class="delete-icon" data-id="Masquer{{$i}}"><i class="fa fa-eye-slash text-secondary" title="Masquer"></i></a></td>
                                        <td class="arrow" title="Mettre en avant"><a href="#" class="delete-icon" data-id="Mettre{{$i}}"><i class="fa fa-arrow-up text-info" title="Mettre en avant"></i></a></td>
                                        <td class="trash" title="Supprimer"><a href="#" class="delete-icon" data-id="Supprimer{{$i}}"><i class="fa fa-trash" title="Supprimer"></i></a></td>
                                        <td class="activate" hidden><a href="#"><i class="fa fa-check " style="color: green;"></i></a></td>







                                        <!-- The Modal -->
                                        <div id="myModal-Supprimer{{$i}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>supprimer</b> "ghhhh" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>



                                        <!-- The Modal -->
                                        <div id="myModal-Mettre{{$i}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>mettre en avant</b> "ghhhh" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <div id="myModal-Masquer{{$i}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>masquer</b> "ghhhh" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>


                                        </tr>
                                        @endfor



                                </tbody>
                            </table>

                        </div>
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="btn btn-common text-white" href="#">Précédent <i class="lni-chevron-right"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                                    <li class="page-item"><a class="btn btn-common text-white" href="#">Suivant <i class="lni-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>





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
                        @php
                        // Récupérer le nom du pays à partir du code enregistré dans la base de données
                        $userCountryCode = $item->pays;
                        $userCountry = $geoNamesService->getCountryNameByCode($userCountryCode); // À adapter selon votre service

                        // Récupérer le nom de la ville à partir du code enregistré dans la base de données
                        $userCityCode = $item->ville;
                        $userCity = $geoNamesService->getCityNameByCode($userCityCode); // À adapter selon votre service
                        @endphp
                        <figure><i class="lni-map-marker"></i> {{ $userCountry}}, {{ $userCity }}, {{ $item->quartier }}</figure>

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

@endsection

@section('js')

<script src="{{asset('assets/admin/js/inner.js')}}"></script>


@endsection
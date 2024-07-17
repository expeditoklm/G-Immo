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
                            <p class="pb-2"><a href="{{ request()->route() && request()->route()->getName() == 'pages.acceuil' ? 'javascript:void(0)' : route('pages.acceuil') }} ">Acceuil</a> &nbsp;/&nbsp; <span>{{$titre}}</span></p>
                        </div>

                        <h3>{{$titre}}</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <aside class="col-lg-4 col-md-12 car full-width">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="widget-boxed main-search-field">
                        <div class="widget-boxed-header">
                            <h4>Filtre principal de commentaire</h4>
                        </div>
                        <form class="form" method="get" action="{{ route('admin.reviews') }}">
                            @csrf
                            <!-- Search Form -->
                            <div class="trip-search">

                                <!-- Form Looking for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" name="user_name" placeholder="Nom du Propriétaire..." value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" name="nom_prenom" placeholder="Nom du Commentateur..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Looking for -->
                                <!-- Form Location -->
                                
                               

                                <div class="form-group looking mt-4">
                                    <div class=" first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="date" name="created_at" placeholder="Entrer la date de pub ..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Location -->

                                <!--/ End Form Bathrooms -->

                            </div>

                            <!-- More Search Options / End -->
                            <div class="col-lg-12 no-pds">
                                <div class="at-col-default-mar">
                                    <button class="btn btn-default hvr-bounce-to-right" name="btn_comment_filter" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="widget-boxed popular mt-5 mb-0">
                        <div class="widget-boxed-header">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">
                                
                                <div class="tags">
                                    <span>
                                       

                                        <a href="#" onclick="document.getElementById('post2').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers commentaires ajoutés 
                                        </a>

                                        <form id="post2" action="{{ route('admin.reviews') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="comment-ajouter" value="comment-ajouter">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                        <a href="#" onclick="document.getElementById('post3').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers commentaires modifiés
                                        </a>

                                        <form id="post3" action="{{ route('admin.reviews') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="comment-modifier" value="comment-modifier">
                                        </form>
                                    </span>
                                </div>
                               
                                <div class="tags">
                                    <span>
                                       
                                        <a href="#" onclick="document.getElementById('post5').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers commentaire approuver 
                                        </a>

                                        <form id="post5" action="{{ route('admin.reviews') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="comment-approuver" value="comment-approuver">
                                        </form>
                                    </span>
                                </div>

                                <div class="tags">
                                    <span>
                                       
                                        <a href="#" onclick="document.getElementById('post7').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers commentaires désapprouver 
                                        </a>

                                        <form id="post7" action="{{ route('admin.reviews') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="comment-desapprouver" value="comment-desapprouver">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                        <a href="#" onclick="document.getElementById('post6').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers commentaires supprimés 
                                        </a>

                                        <form id="post6" action="{{ route('admin.reviews') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="comment-supprimer" value="comment-supprimer">
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
                    @if($reviewsAdmin->isNotEmpty() && $pagination == true)
                    <h4 class="title">Affichage de {{ $reviewsAdmin->firstItem() }} à {{ $reviewsAdmin->lastItem() }} dans {{ $reviewsAdmin->total() }} Résultats</h4>
                    @endif
                    <div class="section-body listing-table">
                        <div class="table-responsive table-container">
                            @if($reviewsAdmin->isNotEmpty())
                            <table class="table table-striped table-fixed-header">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Commentateur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Nom&nbsp;&nbsp;&nbsp;&nbsp;Propriété&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Commentaire&nbsp;&nbsp;</th>
                                        <th>Note&nbsp;&nbsp;</th>
                                        <th>Propriétaire&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Date&nbsp;&nbsp;Publication</th>
                                        <th colspan="
                                        @if($restaurer==false)
                                        4
                                        @else
                                        1
                                        @endif
                                        ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviewsAdmin as $item)
                                    <tr id="titleSupprimer{{ $item->id}}">

                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->nom_prenom}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->propriete->titre}}</td>
                                        <td>{{ $item->comment}}</td>
                                        <td>{{ $item->note}}</td>
                                        <td>{{ $item->propriete->user->nom_prenom}}</td>
                                        <td>{{ $item->created_at}}</td>

                                        @if($restaurer==false)
                                        <td title="Voir"><a href="#" class="delete-icon" data-id="Voir{{ $item->id}}"><i class="fa fa-eye text-warning"></i></a></td>
                                        <td title="Modifier"><a href="#" class="delete-icon" data-id="Modifier{{ $item->id}}"><i class="fa fa-pencil text-primary " title="Modifier"></i></a></td>


                                        @if($item->approuver == 1)
                                        <td title="Désapprouver" id="titleActiver{{ $item->id}}"><a href="#" class="delete-icon" data-id="Activer{{ $item->id}}"><i class="fa fa-check" style="color: green;" id="active{{ $item->id}}"></i></a></td>
                                        @else
                                        <td title="Approuver" id="titleDesactiver{{ $item->id}}"><a href="#" class="delete-icon" data-id="Desactiver{{ $item->id}}"><i class="fa fa-eye text-danger" id="desactive{{ $item->id}}"></i></a></td>
                                        @endif
                                        @endif
                                        @if($restaurer==false)
                                        <td title="Supprimer"><a href="#" class="delete-icon" data-id="Supprimer{{ $item->id}}"><i class="fa fa-trash"></i></a></td>
                                        @else
                                        <td title="Restaurer"><a href="#" class="delete-icon" data-id="Restaurer{{ $item->id}}"><i class="fa fa-trash" style="color: green;"></i></a></td>
                                        @endif


                                        <!-- The Modal -->
                                        <div id="myModal-Supprimer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>supprimer</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 supprimer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>


                                        <!-- The Modal -->
                                        <div id="myModal-Restaurer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b>restaurer</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 restaurer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>




                                        <div id="myModal-Activer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeActiver{{ $item->id}}">désapprouver</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 activer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <div id="myModal-Desactiver{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeDesactiver{{ $item->id}}">approuver</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 desactiver" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                            @endif
                        </div>
                        @if($reviewsAdmin->isNotEmpty() && $pagination == true)
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination justify-content-center">

                                    {{-- Bouton Previous --}}
                                    @if ($reviewsAdmin->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $reviewsAdmin->previousPageUrl() }}">Previous</a>
                                    </li>
                                    @endif

                                    {{-- Affichage des pages --}}
                                    @foreach ($reviewsAdmin->getUrlRange(1, $reviewsAdmin->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $reviewsAdmin->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                    @endforeach

                                    {{-- Bouton Next --}}
                                    @if ($reviewsAdmin->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $reviewsAdmin->nextPageUrl() }}">Next</a>
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
                            @if( !( $reviewsAdmin->isNotEmpty() ))
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link " href="">Pas de commentaire pour le moment</a>
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




<div class="my-properties">
    <table class="table-responsive">
        <thead>
            <tr>
                <th class="pl-2">Commentaires</th>
                <th>Propriétés</th>
                <th class="p-0"></th>
                <th>Commentateur</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
       
            @foreach ($reviews as $item)
            <tr>
                <td>
                    <textarea hidden cols="30" class="form-control border-0"></textarea>
                    {{ $item->comment }}
                </td>

                <td class="image myelist">
                    <a href="#" onclick="document.getElementById('proper{{ $item->propriete->id }}').submit(); return false;">
                        <img alt="my-properties-3" src="{{ asset($item->propriete->proprieteImages->first()->url) }}" class="img-fluid">
                    </a>
                </td>

                <!-- Formulaire caché -->
                <form id="proper{{ $item->propriete->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->propriete->id }}">
                </form>
                <td>
                    <div class="inner">
                        <a href="#" onclick="document.getElementById('property{{ $item->propriete->id }}').submit(); return false;">
                            <h2>{{ $item->propriete->titre}}</h2>
                        </a>

                        <!-- Formulaire caché -->
                        <form id="property{{ $item->propriete->id }}" action="{{ route('pages.single') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->propriete->id }}">
                        </form>
                      
                        <figure><i class="lni-map-marker"></i> Bénin, {{ $item->propriete->ville->libelle}}, {{ $item->propriete->quartier }}</figure>

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
                    </div>
                </td>
                <td>
                    <div class="inner">
                        <h2>{{ $item->nom_prenom}}</h2>
                        <figure><i class="lni-map-marker"></i> {{ $item->email}} </figure>
                        <h6>{{ $item->created_at}}</h2>
                    </div>
                </td>

                <td class="actions">

                    <a href="#" class="delete-icon" data-id="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>

                    <!-- Formulaire caché -->
                    <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="review_sup_id" value="{{ $item->id }}">
                    </form>
                </td>
            </tr>
            <!-- The Modal -->
            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->comment }}" ?</p>
                    <a onclick="document.getElementById('post{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
            @endforeach
        
        </tbody>
    </table>
    @if($reviews->isNotEmpty())
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">

                {{-- Bouton Previous --}}
                @if ($reviews->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $reviews->previousPageUrl() }}">Previous</a>
                </li>
                @endif

                {{-- Affichage des pages --}}
                @foreach ($reviews->getUrlRange(1, $reviews->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $reviews->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach

                {{-- Bouton Next --}}
                @if ($reviews->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $reviews->nextPageUrl() }}">Next</a>
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
                    <a class="page-link " href="{{ $reviews->previousPageUrl() }}">Pas de commentaire pour le moment</a>
                </li>
                
            </ul>
        </nav>
    </div>
    @endif
</div>
@endif
@endsection

@section('js')

<script src="{{asset('assets/admin/js/inner.js')}}"></script>








<script>
    document.querySelectorAll('.activer').forEach(function(button) {
        button.addEventListener('click', function(e) {

            e.preventDefault();
            const id = this.dataset.id;

            var active = document.getElementById('active' + id);


            var titreActiver = document.getElementById('titleActiver' + id);

            var verbeActiver = document.getElementById('verbeActiver' + id);

            var classNames = active.className;
            var classNamesVariable = classNames;
            if (classNamesVariable == 'fa fa-check') {

                $.ajax({
                    url: '/ajax.comment-desapprouver',
                    type: 'get',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log('jai une reponse de ajax')

                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Activer' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('active' + id).classList.remove('fa', 'fa-check'); // Debloquer le modal si nécessaire
                        document.getElementById('active' + id).classList.add(...['fa', 'fa-eye', 'text-danger']); // Debloquer le modal si nécessaire
                        titreActiver.title = 'Approuver';
                        verbeActiver.innerHTML = "approuver"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.comment-approuver',
                    type: 'get',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Activer' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('active' + id).classList.remove('fa', 'fa-eye', 'text-danger'); // Debloquer le modal si nécessaire
                        document.getElementById('active' + id).classList.add(...['fa', 'fa-check']); // Debloquer le modal si nécessaire
                        titreActiver.title = 'Désapprouver';
                        verbeActiver.innerHTML = "desapprouver"
                    }
                });

            }
        });
    });

    document.querySelectorAll('.desactiver').forEach(function(button) {
        button.addEventListener('click', function(e) {

            e.preventDefault();
            const id = this.dataset.id;

            var desactive = document.getElementById('desactive' + id);


            var titreDesactiver = document.getElementById('titleDesactiver' + id);

            var verbeDesactiver = document.getElementById('verbeDesactiver' + id);

            var classNames = desactive.className;
            var classNamesVariable = classNames;
            if (classNamesVariable == 'fa fa-check') {

                $.ajax({
                    url: '/ajax.comment-desapprouver',
                    type: 'get',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        document.getElementById('myModal-Desactiver' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('desactive' + id).classList.remove('fa', 'fa-check'); // Debloquer le modal si nécessaire
                        document.getElementById('desactive' + id).classList.add(...['fa', 'fa-eye', 'text-danger']); // Debloquer le modal si nécessaire
                        document.getElementById('desactive' + id).style.color = ''; // Debloquer le modal si nécessaire
                        titreDesactiver.title = 'Approuver';
                        verbeDesactiver.innerHTML = "approuver"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.comment-approuver',
                    type: 'get',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Desactiver' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('desactive' + id).classList.remove('fa', 'fa-eye', 'text-danger'); // Debloquer le modal si nécessaire
                        document.getElementById('desactive' + id).classList.add(...['fa', 'fa-check']); // Debloquer le modal si nécessaire
                        document.getElementById('desactive' + id).style.color = 'green'; // Debloquer le modal si nécessaire
                        titreDesactiver.title = 'Désapprouver';
                        verbeDesactiver.innerHTML = "désapprouver"
                    }
                });


            }
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
                url: '/ajax.comment-restaurer',
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
    document.querySelectorAll('.supprimer').forEach(function(button) {
        button.addEventListener('click', function(e) {

            e.preventDefault();
            const id = this.dataset.id;



            var titreSupprimer = document.getElementById('titleSupprimer' + id);


            $.ajax({
                url: '/ajax.comment-supprimer',
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

@endsection
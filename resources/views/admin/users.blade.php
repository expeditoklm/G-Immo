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
                            <h4>Filtre principal d'utilisateur</h4>
                        </div>
                        <form class="form" method="get" action="{{ route('admin.users') }}">
                            @csrf
                            <!-- Search Form -->
                            <div class="trip-search">

                                <!-- Form Looking for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" name="nom_prenom" placeholder="Nom et Prenom..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Looking for -->
                                
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" name="ville" tabindex="0">
                                        <span class="current"><i class="fa fa-map-marker"></i>Ville</span>
                                        <ul class="list">
                                        @foreach ($uniqueCities as $item)

<li data-value="{{ $item->id}}" class="option selected">{{ $item->libelle}}</li>

@endforeach
                                        </ul>
                                    </div>
                                </div>

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
                                    <button class="btn btn-default hvr-bounce-to-right" name="btn_user_filter" type="submit">Search</button>
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
                                   
                                        <a href="#" onclick="document.getElementById('post1').submit(); return false;" class="btn btn-outline-primary">
                                        Utlisateurs interagit avec le système (10)
                                        </a>

                                        <form id="post1" action="{{ route('admin.users') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="users-interraction" value="users-interraction">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                       

                                        <a href="#" onclick="document.getElementById('post2').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers utlisateurs ajoutés 
                                        </a>

                                        <form id="post2" action="{{ route('admin.users') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="users-ajouter" value="users-ajouter">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                        <a href="#" onclick="document.getElementById('post3').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers utlisateurs modifiés
                                        </a>

                                        <form id="post3" action="{{ route('admin.users') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="users-modifier" value="users-modifier">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                        

                                        <a href="#" onclick="document.getElementById('post4').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers utlisateurs bloqués 
                                        </a>

                                        <form id="post4" action="{{ route('admin.users') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="users-bloquer" value="users-bloquer">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                       
                                        <a href="#" onclick="document.getElementById('post5').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers utlisateurs activés 
                                        </a>

                                        <form id="post5" action="{{ route('admin.users') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="users-activer" value="users-activer">
                                        </form>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span>
                                       

                                        <a href="#" onclick="document.getElementById('post6').submit(); return false;" class="btn btn-outline-primary">
                                        10 Derniers utlisateurs supprimés 
                                        </a>

                                        <form id="post6" action="{{ route('admin.users') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="users-supprimer" value="users-supprimer">
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
                    @if($users->isNotEmpty() && $pagination == true)
                    <h4 class="title">Affichage de {{ $users->firstItem() }} à {{ $users->lastItem() }} dans {{ $users->total() }} Résultats</h4>
                    @endif
                    <div class="section-body listing-table">
                        <div class="table-responsive table-container">
                            @if($users->isNotEmpty())
                            <table class="table table-striped table-fixed-header">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prénom&nbsp;&nbsp;</th>
                                        <th>Sexe</th>
                                        <th>Télephone&nbsp;&nbsp;&nbsp;</th>
                                        <th>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Pays&nbsp;&nbsp;</th>
                                        <th>Ville&nbsp;&nbsp;</th>
                                        <th>Website&nbsp;&nbsp;</th>
                                        <th>Description&nbsp;&nbsp;</th>
                                        <th>Date&nbsp;Création&nbsp;Compte</th>
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
                                    @foreach ($users as $item)
                                    <tr id="titleSupprimer{{ $item->id}}">

                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->nom_prenom}}</td>
                                        <td>{{ $item->sexe}}</td>
                                        <td>{{ $item->telephone}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>Bénin</td>
                                        <td>{{ $item->ville->libelle}}</td>
                                        <td>{{ $item->website}}</td>
                                        <td>{{ $item->description}}</td>
                                        <td>{{ $item->created_at}}</td>

                                        @if($restaurer==false)
                                        <td title="Voir"><a href="#" class="delete-icon" data-id="Voir{{ $item->id}}"><i class="fa fa-eye text-warning"></i></a></td>
                                        <td title="Modifier"><a href="#" class="delete-icon" data-id="Modifier{{ $item->id}}"><i class="fa fa-pencil text-primary " title="Modifier"></i></a></td>

                                        @if($item->bloquer == 0)
                                        <td title="Bloquer" id="titleBloquer{{ $item->id}}"><a href="#" class="delete-icon" data-id="Bloquer{{ $item->id}}"><i class="fa fa-ban" id="bloque{{ $item->id}}"></i></a></td>
                                        @else
                                        <td title="Débloquer" id="titleDebloquer{{ $item->id}}"><a href="#" class="delete-icon" data-id="Debloquer{{ $item->id}}"><i class="fa fa-eye-slash text-secondary" id="debloque{{ $item->id}}"></i></a></td>
                                        @endif

                                        @if($item->activer == 1)
                                        <td title="Désactiver" id="titleActiver{{ $item->id}}"><a href="#" class="delete-icon" data-id="Activer{{ $item->id}}"><i class="fa fa-check" style="color: green;" id="active{{ $item->id}}"></i></a></td>
                                        @else
                                        <td title="Activer" id="titleDesactiver{{ $item->id}}"><a href="#" class="delete-icon" data-id="Desactiver{{ $item->id}}"><i class="fa fa-eye text-danger" id="desactive{{ $item->id}}"></i></a></td>
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



                                        <!-- The Modal -->
                                        <div id="myModal-Bloquer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeBloquer{{ $item->id}}">bloquer</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 bloquer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <!-- The Modal -->
                                        <div id="myModal-Debloquer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeDebloquer{{ $item->id}}">débloquer</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 debloquer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <div id="myModal-Activer{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeActiver{{ $item->id}}">désactiver</b> "{{ $item->nom_prenom}}" ?</p>
                                                <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 activer" data-id="{{ $item->id}}" style=" color: black; cursor: pointer; text-decoration: none;">Oui</a>
                                                <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete" style=" color: white; cursor: pointer;">Non</button>
                                            </div>
                                        </div>

                                        <div id="myModal-Desactiver{{ $item->id}}" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Voulez-vous vraiment <b id="verbeDesactiver{{ $item->id}}">activer</b> "{{ $item->nom_prenom}}" ?</p>
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
                        @if($users->isNotEmpty() && $pagination == true)
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination justify-content-center">

                                    {{-- Bouton Previous --}}
                                    @if ($users->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $users->previousPageUrl() }}">Previous</a>
                                    </li>
                                    @endif

                                    {{-- Affichage des pages --}}
                                    @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $users->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                    @endforeach

                                    {{-- Bouton Next --}}
                                    @if ($users->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a>
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
                            @if( !( $users->isNotEmpty() ))
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link " href="">Pas d'utilisateur pour le moment</a>
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




@endsection

@section('js')

<script src="{{asset('assets/admin/js/inner.js')}}"></script>
<script>
    document.querySelectorAll('.bloquer').forEach(function(button) {

        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            var bloque = document.getElementById('bloque' + id);
            var titreBloque = document.getElementById('titleBloquer' + id);
            var verbeBloquer = document.getElementById('verbeBloquer' + id);

            var classNames = bloque.className;
            var classNamesVariable = classNames;
            if (classNamesVariable == 'fa fa-ban') {

                $.ajax({
                    url: '/ajax.users-bloquer',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Bloquer' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('bloque' + id).classList.remove('fa', 'fa-ban'); // Debloquer le modal si nécessaire
                        document.getElementById('bloque' + id).classList.add(...['fa', 'fa-eye-slash', 'text-secondary']); // Debloquer le modal si nécessaire
                        titreBloque.title = 'Débloquer';
                        verbeBloquer.innerHTML = "débloquer"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.users-debloquer',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Bloquer' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('bloque' + id).classList.remove('fa', 'fa-eye-slash', 'text-secondary'); // Debloquer le modal si nécessaire
                        document.getElementById('bloque' + id).classList.add(...['fa', 'fa-ban']); // Debloquer le modal si nécessaire
                        titreBloque.title = 'Bloquer';
                        verbeBloquer.innerHTML = "bloquer"
                    }
                });
            }
        });
    });


    document.querySelectorAll('.debloquer').forEach(function(button) {

        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            var debloque = document.getElementById('debloque' + id)
            var titreDebloque = document.getElementById('titleDebloquer' + id);
            var verbeDebloquer = document.getElementById('verbeDebloquer' + id);

            var classNames = debloque.className;
            var classNamesVariable = classNames;
            console.log(classNamesVariable);
            if (classNamesVariable == 'fa fa-ban') {

                $.ajax({
                    url: '/ajax.users-bloquer',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Debloquer' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('debloque' + id).classList.remove('fa', 'fa-ban'); // Debloquer le modal si nécessaire
                        document.getElementById('debloque' + id).classList.add(...['fa', 'fa-eye-slash', 'text-secondary']); // Debloquer le modal si nécessaire
                        titreDebloque.title = 'Débloquer';
                        verbeDebloquer.innerHTML = "débloquer"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.users-debloquer',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //alert('utilisateur bloquer avec succes')
                        document.getElementById('myModal-Debloquer' + id).style.display = 'none'; // Debloquer le modal si nécessaire
                        document.getElementById('debloque' + id).classList.remove('fa', 'fa-eye-slash', 'text-secondary'); // Debloquer le modal si nécessaire
                        document.getElementById('debloque' + id).classList.add(...['fa', 'fa-ban']); // Debloquer le modal si nécessaire
                        titreDebloque.title = 'Bloquer';
                        verbeDebloquer.innerHTML = "bloquer"
                    }
                });
            }
        });
    });
</script>


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
                    url: '/ajax.users-activer',
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
                        titreActiver.title = 'Activer';
                        verbeActiver.innerHTML = "activer"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.users-desactiver',
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
                        titreActiver.title = 'Désactiver';
                        verbeActiver.innerHTML = "désactiver"
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
                    url: '/ajax.users-activer',
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
                        titreDesactiver.title = 'Activer';
                        verbeDesactiver.innerHTML = "activer"
                    }
                });
            } else {
                $.ajax({
                    url: '/ajax.users-desactiver',
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
                        titreDesactiver.title = 'Désactiver';
                        verbeDesactiver.innerHTML = "désactiver"
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
                url: '/ajax.users-restaurer',
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
                url: '/ajax.users-supprimer',
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
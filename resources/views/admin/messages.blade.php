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
                            <h4>Filtre principal de message</h4>
                        </div>
                        <form class="form" method="get" action="{{ route('admin.messages') }}">
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
                                    <button class="btn btn-default hvr-bounce-to-right" name="btn_message_filter" type="submit">Search</button>
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
                                        10 Derniers messages ajoutés 
                                        </a>

                                        <form id="post2" action="{{ route('admin.messages') }}" method="GET" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="message-ajouter" value="message-ajouter">
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
                    @if($messagesAdmin->isNotEmpty() && $pagination == true)
                    <h4 class="title">Affichage de {{ $messagesAdmin->firstItem() }} à {{ $messagesAdmin->lastItem() }} dans {{ $messagesAdmin->total() }} Résultats</h4>
                    @endif
                    <div class="section-body listing-table">
                        <div class="table-responsive table-container">
                            @if($messagesAdmin->isNotEmpty())
                            <table class="table table-striped table-fixed-header">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Client&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Télephone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Titre&nbsp;du&nbsp;Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Message&nbsp;&nbsp;</th>
                                        <th>Propriétaire&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Date&nbsp;&nbsp;Publication</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messagesAdmin as $item)
                                    <tr id="titleSupprimer{{ $item->id}}">

                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->nom_prenom}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->telephone}}</td>
                                        <td>{{ $item->titre_msg}}</td>
                                        <td>{{ $item->message}}</td>
                                        <td>{{ $item->users->nom_prenom}}</td>
                                        <td>{{ $item->created_at}}</td>

                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                            @endif
                        </div>
                        @if($messagesAdmin->isNotEmpty() && $pagination == true)
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination justify-content-center">

                                    {{-- Bouton Previous --}}
                                    @if ($messagesAdmin->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $messagesAdmin->previousPageUrl() }}">Previous</a>
                                    </li>
                                    @endif

                                    {{-- Affichage des pages --}}
                                    @foreach ($messagesAdmin->getUrlRange(1, $messagesAdmin->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $messagesAdmin->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                    @endforeach

                                    {{-- Bouton Next --}}
                                    @if ($messagesAdmin->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $messagesAdmin->nextPageUrl() }}">Next</a>
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
                            @if( !( $messagesAdmin->isNotEmpty() ))
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link " href="">Pas de message pour le moment</a>
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
                <th>Messages</th>
                <th class="pl-2">Expéditeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($messages as $item)
            <tr>
                <td>
                <textarea hidden  cols="30" class="form-control border-0"></textarea>
                {{ $item->message }}
                </td>
                <td>
                    <div class="inner">
                        <h2>{{ $item->nom_prenom }}</h2>
                        <figure><i class="lni-map-marker"></i> {{ $item->email }} 
                        @isset($item->telephone ) / @endif
                        {{ $item->telephone }}</figure>
                        <h6>{{ $item->created_at }}</h2>
                    </div>
                </td>
                <td class="actions">
                    
                    <a href="#" class="delete-icon" data-id="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>
                 
                    <!-- Formulaire caché -->
                    <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="message_sup_id" value="{{ $item->id }}">
                    </form>
                </td>
            </tr>
            <!-- The Modal -->
            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->message }}" ?</p>
                    <a onclick="document.getElementById('post{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    @if($messages->isNotEmpty())
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">

                {{-- Bouton Previous --}}
                @if ($messages->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $messages->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                {{-- Affichage des pages --}}
                @foreach ($messages->getUrlRange(1, $messages->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $messages->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Bouton Next --}}
                @if ($messages->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $messages->nextPageUrl() }}">Next</a>
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
                    <a class="page-link " href="{{ $messages->previousPageUrl() }}">Pas de message pour le moment</a>
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

@endsection
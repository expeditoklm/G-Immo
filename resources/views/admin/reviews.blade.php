@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

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
                        <figure><i class="lni-map-marker"></i> {{ $item->propriete->pays}}, {{ $item->propriete->ville}}, {{ $item->propriete->quartier}}</figure>
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

@endsection

@section('script')


@endsection
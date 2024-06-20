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
                <th class="pl-2">My Properties</th>
                <th class="p-0"></th>
                <th>Date Added</th>
                <th>Views</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($properties as $item)
            <tr>
            <td class="image myelist">
                    <a href="#" onclick="document.getElementById('proper{{ $item->id }}').submit(); return false;">
                        <img alt="my-properties-3" src="{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}" class="img-fluid">
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
                        <figure><i class="lni-map-marker"></i> {{ $item->pays }}, {{ $item->ville }}, {{ $item->quartier }}</figure>
                        
                        @php
                        $totalStars = 5;
                        $filledStars =  intval($item->comments->avg('note')) ;
                        $grayStars = $totalStars - $filledStars;
                        @endphp
                        <ul class="starts text-left mb-0">
                            @for ($i = 0; $i < $filledStars; $i++)
                            <li class="mb-0">
                                <i class="fa fa-star"></i>
                            </li>
                            @endfor

                            @for ($i = 0; $i < $grayStars; $i++) 
                            <li class="mb-0">
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
                
                    <a href="{{ route('modif-property') }}" class="edit"><i class="lni-pencil"></i>Edit</a>
                    <a href="#" class="delete-icon" data-id="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>
                 
                    <!-- Formulaire caché -->
                    <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="property_sup_id" value="{{ $item->id }}">
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


</div>

@endsection

@section('script')


@endsection
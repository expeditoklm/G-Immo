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



<div class="my-properties">
    <a href="{{ route('admin.form-type-property') }}" class="btn btn-primary col-md-12 mb-5">Nouveau</a>
    <table class="table-responsive">
        <thead>
            <tr>
                <th>#id</th>
                <th>Type de propriété</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($typeProperty as $item)
            <tr>
             
                <td>
                    <div class="inner">
                        <h2>{{ $item->id}}</h2>
                       </div>
                </td>
                <td>
                    <div class="inner">
                        <h2>{{ $item->libelle}}</h2>
                       </div>
                </td>
                <td class="actions d-flex">
                    
                    <a href="#" class="edit" onclick="document.getElementById('post2{{ $item->id }}').submit(); return false;"><i class="lni-pencil"></i>Edit</a>

                    <a href="#" class="delete-icon ml-5" data-id="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>
                 
                    <!-- Formulaire caché -->
                    <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="type_property_sup_id" value="{{ $item->id }}">
                    </form>
                    <!-- Formulaire caché -->
                    <form id="post2{{ $item->id }}" action="{{ route('admin.form-type-property') }}" method="get" style="display: none;">
                        @csrf
                        <input type="hidden" name="type_property_modif_id" value="{{ $item->id }}">
                    </form>
                </td>
            </tr>
            <!-- The Modal -->
            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->libelle }}" ?</p>
                    <a onclick="document.getElementById('post{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    @if($typeProperty->isNotEmpty())
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">

                {{-- Bouton Previous --}}
                @if ($typeProperty->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $typeProperty->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                {{-- Affichage des pages --}}
                @foreach ($typeProperty->getUrlRange(1, $typeProperty->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $typeProperty->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Bouton Next --}}
                @if ($typeProperty->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $typeProperty->nextPageUrl() }}">Next</a>
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
                    <a class="page-link " href="{{ $typeProperty->previousPageUrl() }}">Pas de message pour le moment</a>
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
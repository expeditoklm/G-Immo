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
                <th>Message</th>
                <th class="pl-2">Custumer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($messages as $item)
            <tr>
                <td>
                    <textarea name="" id="" cols="30" class="form-control border-0 " rows="5" style="padding: 0px;">
                    {{ $item->message }}
                    </textarea>
                </td>
                <td>
                    <div class="inner">
                        <h2>{{ $item->nom_prenom }}</h2>
                        <figure><i class="lni-map-marker"></i> {{ $item->email }} / {{ $item->telephone }}</figure>
                        <h6>{{ $item->created_at }}</h2>
                    </div>
                </td>
                <td class="actions">
                    <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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

</div>

@endsection

@section('script')


@endsection
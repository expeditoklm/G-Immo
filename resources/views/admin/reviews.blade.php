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
                <th class="pl-2">Comments</th>
                <th>Properties</th>
                <th class="p-0"></th>
                <th>Custumers</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($reviews as $item)
            <tr>
                <td>
                    <textarea name="" id="" cols="30" class="form-control border-0 " rows="5">

                    {{ $item->comment }}
                   
                </textarea>
                </td>

                <td class="image myelist">
                    <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}" class="img-fluid"></a>
                </td>
                <td>
                    <div class="inner">
                        <a href="single-property-1.html">
                            <h2>{{ $item->propriete->titre}}</h2>
                        </a>
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
</div>

@endsection

@section('script')


@endsection
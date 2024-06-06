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
            <tr>
                <td>
                    <textarea name="" id="" cols="30" class="form-control border-0 " rows="5">

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, numquam.
                   
                </textarea>
                </td>

                <td class="image myelist">
                    <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}" class="img-fluid"></a>
                </td>
                <td>
                    <div class="inner">
                        <a href="single-property-1.html">
                            <h2>Luxury Villa House</h2>
                        </a>
                        <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                        <ul class="starts text-left mb-0">
                            <li class="mb-0"><i class="fa fa-star"></i>
                            </li>
                            <li class="mb-0"><i class="fa fa-star"></i>
                            </li>
                            <li class="mb-0"><i class="fa fa-star"></i>
                            </li>
                            <li class="mb-0"><i class="fa fa-star"></i>
                            </li>
                            <li class="mb-0"><i class="fa fa-star"></i>
                            </li>
                            <li class="ml-3">(6 Reviews)</li>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="inner">
                        <h2>Nom et Prenom</h2>
                        <figure><i class="lni-map-marker"></i> Email / Telephone</figure>
                        <h6>Date et Heure</h2>
                    </div>
                </td>
                
                <td class="actions">
                    <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                    <a href="#"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>

        </tbody>
    </table>
    <div class="pagination-container">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
            </ul>
        </nav>
    </div>
</div>

@endsection

@section('script')


@endsection
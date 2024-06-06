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
            <tr>
                <td>
                    <textarea name="" id="" cols="30" class="form-control border-0 " rows="5" style="padding: 0px;">
                        Lorem ipsum dolor sit amet consdolorum ipsa cumque  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque neque nulla dicta cumque tempora aperiam dolorem voluptatibus dolor quidem provident maxi
                    </textarea>
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
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
@include('admin.success_error')


<div class="ml-4 my-properties">
    <form action="{{ route('admin.form-type-property-post') }}" method="post">
        @csrf
        <div class="mb-3">
            <h4>
                {{ $isModif ? 'Modification de Type de Propriété' : 'Nouvel Enregistrement de Type de Propriété' }}

            </h4>

        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label text-danger">Type de Propriété</label>
            <input type="text" class="form-control" name="libelle" id="formGroupExampleInput2" placeholder="Entrer un type de propriété" value="{{ $isModif ? $typeProperty->libelle : '' }}">

            <input type="hidden" name="id" value="{{ $isModif ? $typeProperty->id : '' }}">
        </div>


        <button type="submit" name="btn_new_type" class="btn btn-primary col-md-4 m-0">Nouveau</a>

    </form>
</div>






@endsection

@section('js')


<script src="{{asset('assets/admin/js/inner.js')}}"></script>

@endsection
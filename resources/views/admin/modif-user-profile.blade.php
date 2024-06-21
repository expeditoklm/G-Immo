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



@section('sectio')
pt-5
@endsection


@section('class')
col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3
@endsection

@section('content')

<div class="widget-boxed-header">
    <h4>Modifier le Profile </h4>
</div>
<div class="sidebar-widget author-widget2">
    
    <div class="agent-contact-form-sidebar">
        <form name="contact_form" action="{{ route('admin.modif-user-profile') }}" method="POST">
            @csrf
            <input type="text" id="fname" name="nom_prenom" value="{{ Auth::user()->nom_prenom }}" required />
            <textarea placeholder="A propos" name="description"  required>{{ Auth::user()->description }}</textarea>
            <input type="text" id="website" name="website" value="{{ Auth::user()->website }}" required />
            <div class="d-flex" style="justify-content: space-between;">

                <select class="form-select col-md-4  " name="pays" id="abcd" aria-label="Default select example">
                                <option disabled selected>Selectionner le pays</option>
                                <option value="Benin">Benin</option>
                                <option value="Cote d'ivoire ">Cote d'ivoire</option>
                                <option value="Togo">Togo</option>
                            </select>
    
                            <select class="form-select col-md-4 " name="ville" id="abcd" aria-label="Default select example">
                                <option disabled selected>Selectionner la ville</option>
                                <option value="Porto">Porto</option>
                                <option value="Ctn">Ctn</option>
                                <option value="S○vi">S○vi</option>
                                </select>
            </div>
                        

            <input type="submit" class="multiple-send-message" value="Submit Request" />
        </form>
    </div>
</div>

@endsection

@section('script')


@endsection
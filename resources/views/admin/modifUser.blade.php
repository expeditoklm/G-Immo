@extends('admin/base')

@section('nomPage')
Add User | Find Houses
@endsection

@section('css')


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Votre style personnalisé -->
<style>
    .form-group {
        margin-bottom: 1.5rem;
    }

    .password-section {
        margin-top: 2rem;
        border-top: 1px solid #ddd;
        padding-top: 1.5rem;
    }

    .select2-container--default .select2-selection--single {
        height: 38px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 6px 12px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #495057;
        line-height: 26px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
    }

    .select2-container {
        width: 100% !important;
        /* Ensure Select2 takes full width */
    }
</style>
@endsection

@section('body')
inner-pages
@endsection

@section('header')

@endsection

@section('header2')

@endsection

@section('logo')

@endsection

@section('sectio')
pt-5
@endsection


@section('class')
col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2
@endsection

@section('content')

@include('admin.success_error')


<!-- Début Formulaire -->
<form id="form1" method="POST" action="{{ route('user.modif') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
    <div class="single-add-property">
        <h3>Information l'Agent </h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-name">Nom et Prénom <span class="text-danger"> *</span></label>
                        <input type="text" placeholder="Entrer le Nom du Contact" value="{{$user->nom_prenom}}" id="con-name" name="nom_prenom">
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-user">Site Web </label>
                        <input type="text" placeholder="Entrer le Prénom du Contact" value="{{$user->website}}" id="con-user" name="email">
                    </p>
                </div>

                <div class="property-form-group">
                    <div class="row">
                    <label for="con-user">Role</label>

                        <div class="col-md-12">
                            <ul class="pro-feature-add pl-0">
                            
                                <li class="fl-wrap filter-tags clearfix">
                                    <div class="checkboxes float-left">
                                        <div class="filter-tags-wrap">
                                            <input id="1" type="radio" 
                                            
                                            
                                             name="role"  value="agent" @if ($user->role == 'agent' )checked @endif>
                                            <label for="1">Agent</label>
                                        </div>

                                        <div class="filter-tags-wrap">
                                            <input id="2" type="radio" name="role" value="admin" @if ($user->role == 'admin' )checked @endif>
                                            <label for="2">Admin</label>
                                        </div>
                                    </div>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>

        
            </div>
        </div>
    </div>

    <div class="single-add-property">
        <h3>Description </h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="description">Description </label>
                        <textarea id="description" name="description" value="" placeholder="Décrivez votre propriété">{{$user->description}}</textarea>
                    </p>
                </div>
            </div>


        </div>
    </div>



    <div class="single-add-property">
        <h3>Lieu de Résidence</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12 dropdown ">
                    <div class="form-group categories">
                        <label for="address">Pays<span class="text-danger">*</span></label>
                        <select class="form-control wide js-example-basic-single" value="{{$user->pays}}" id="country" name="pays" required style="height: 45px; font-size: 14px; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; padding: 10px 12px; width: 100%;">
                            <option value="Bénin">Bénin</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown ">
                    <div class="form-group categories">
                        <label for="address">Ville <span class="text-danger">*</span></label>
                        <select class="form-control wide js-example-basic-single" id="city"  name="ville_id" required style="height: 45px; font-size: 14px; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; padding: 10px 12px; width: 100%;">
                            <option value="{{ $user->ville_id }}">{{ $user->ville->libelle  }}</option>
                            @foreach ($cities as $item)
                            <option value="{{ $item->id }}">{{ $item->libelle  }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="country">Quartier <span class="text-danger"> *</span></label>
                        <input type="text" name="quartier" placeholder="Enter Your qut" value="{{$user->quartier}}" id="country" required>
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="address">Addresse</label>
                        <input type="adresse" name="adresse" placeholder="Entrer votre Addresse" value="{{$user->addresse}}" id="adresse">
                    </p>
                </div>
            </div>
        </div>

        <div class="single-add-property">
            <div class="add-property-button pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="prperty-submit-button">
                            <button type="submit" id="btn_submit" name="btn_submit">Enregistrer le Compte</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>






</form>

<!-- Fin Formulaire -->




@endsection


@section('js')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialisation de Select2 sur les champs de sélection
        $('#country').select2({
            placeholder: 'Select your country'
        });
        $('#city').select2({
            placeholder: 'Select your city'
        });
    });
</script>

@endsection
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
<form id="form1" method="POST" action="{{ route('comment.modif') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$comment->id}}">
    

    <div class="single-add-property">
        <h3>Modifier un commentaire </h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="description">Commentaire </label>
                        <textarea id="description" name="commentaire" value="" placeholder="Décrivez votre propriété">{{$comment->comment}}</textarea>
                    </p>
                </div>
            </div>


        </div>
        <div class="single-add-property">
            <div class="add-property-button pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="prperty-submit-button">
                            <button type="submit" id="btn_submit" name="btn_submit">Modifier le Commentaire</button>
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
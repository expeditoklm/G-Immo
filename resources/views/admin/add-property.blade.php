@extends('admin/base')

@section('nomPage')
Add Property | Find Houses
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

<div class="single-add-property">
    <h3>Ajouter des photos à la propriété <span class="text-danger">*</span></h3> 
    <div class="property-form-group">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('add-property-post') }}" class="dropzone" id="my-dropzone">
                    @csrf
                </form>

            </div>
        </div>
    </div>
</div>

 <!-- Début Formulaire -->
<form id="form1" method="POST" >
    @csrf

    <div class="single-add-property">
        <h3>Description de la propriété et prix</h3>
        <div class="property-form-group">

            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="title">Titre de la propriété<span class="text-danger"> *</span></label>
                        <input type="text" name="titre" id="title" placeholder="Entrez le titre de votre propriété" required>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="description">Description de la propriété</label>
                        <textarea id="description" name="description" placeholder="Décrivez votre propriété"></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select id="status" name="status" class="form-control wide" required>
                            <option value="" disabled selected>Selectionner un status</option>
                            <option value="Rental">Louer</option>
                            <option value="For Sale">Vendre</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="propriete">Type de Propriété <span class="text-danger">*</span></label>
                        <select name="type_propriete_id" class="form-control wide" required>
                            <option value="" disabled selected>Selectionner le type de propriété</option>
                            @foreach ($typeProprietes as $item)
                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb">
                        <label for="price">Prix</label>
                        <input type="number" name="prix" placeholder="XOF" id="price">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="area">Surface</label>
                        <input type="number" name="surface" placeholder="Surface en m2" id="area">
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="single-add-property">
        <h3>Emplacement de la propriété</h3>
        <div class="property-form-group">
        <div class="row">
                <div class="col-lg-6 col-md-12 dropdown ">
                    <div class="form-group categories">
                        <label for="address">Pays<span class="text-danger">*</span></label>
                        <select class="form-control wide js-example-basic-single" id="country" name="pays" required
                            style="height: 45px; font-size: 14px; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; padding: 10px 12px; width: 100%;">
                            <option value="" selected>Selectionner un pays</option>
                            <option value="Bénin" >Bénin</option>
                        </select>
                    </div>
                </div>
            
                <div class="col-lg-6 col-md-12 dropdown ">
                    <div class="form-group categories">
                        <label for="address">Ville <span class="text-danger">*</span></label>
                        <select class="form-control wide js-example-basic-single" id="city" name="ville" required
                            style="height: 45px; font-size: 14px; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; padding: 10px 12px; width: 100%;">
                            <option value="" selected>Selectionner une ville</option>
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
                        <input type="text" name="quartier" placeholder="Enter Your qut" id="country" required>
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="address">Addresse</label>
                        <input type="adresse" name="adresse" placeholder="Entrer votre Addresse" id="adresse">
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="single-add-property">
        <h3>Extra Information</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="piece">Pièce</label>

                        <select name="nbPiece" class="form-control wide">
                            <option value="" disabled selected>Selectionner le nombre de Pièce</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            <option value="6+" >6+</option>

                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="chambre">Chambre</label>
                        <select name="nbChambre" class="form-control wide">
                            <option value="" disabled selected>Selectionner le nombre de Chambre</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            <option value="6+" >6+</option>

                        </select>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="toillete">Toillete</label>
                        <select name="nbToillete" class="form-control wide">
                            <option value="" disabled selected>Selectionner le nombre de Toillete</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            <option value="6+" >6+</option>

                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="single-add-property">
        <h3>Caracteristiques de la propriétés</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pro-feature-add pl-0">
                        @foreach ($caracteristiques as $item)
                        <li class="fl-wrap filter-tags clearfix">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="{{ $item->id }}" type="checkbox" name="caracteristiques[]" value="{{ $item->id }}">
                                    <label for="{{ $item->id }}">{{ $item->libelle }}</label>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="single-add-property">
        <h3>Information sur un Contact </h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-name">Nom</label>
                        <input type="text" placeholder="Entrer le Nom du Contact" id="con-name" name="nomContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-user">Prénom</label>
                        <input type="text" placeholder="Entrer le Prénom du Contact" id="con-user" name="prenomContact">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb first">
                        <label for="con-email">E-mail</label>
                        <input type="email" placeholder="Entrer l'E-mail du Contact" id="con-email" name="emailContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="con-phn">Télephone</label>
                        <input type="text" placeholder="Entrer le Number Télephone du Contact" id="con-phn" name="telContact">
                    </p>
                </div>  
            </div>
        </div>

        <div class="add-property-button pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="prperty-submit-button">
                    <button type="submit" id="btn_submit" name="btn_submit">Enregistrer la Propriété</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Fin Formulaire -->




@endsection


@section('js')
<script src="{{ asset('assets/admin/js/dropzone.js') }}"></script>
<script>
    var uploadedImageUrls = [];
    Dropzone.options.myDropzone = {
        url: "{{ route('upload-image') }}",
        dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Cliquez ici ou déposez les fichiers à télécharger",
        paramName: "file",
        maxFilesize: 2,
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        init: function() {

            this.on("success", function(file, response) {

                if (response.success) {
                    file.uploadedFileUrl = response.file_url;
                    uploadedImageUrls.push(response.file_url);
                    console.log('uploadedImageUrls:', uploadedImageUrls);
                    console.log('File information saved successfully.');
                } else {
                    console.error('Failed to save file information.');
                }
            });
            this.on("error", function(file, errorMessage) {
                console.error('Error uploading file:', errorMessage);
            });
            this.on("removedfile", function(file) {
                console.log('File removed:', file);
                if (file.uploadedFileUrl) {
                    console.log('Attempting to delete file:', file.uploadedFileUrl);
                    $.ajax({
                        url: "{{ route('delete-file') }}",
                        type: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            file_url: file.uploadedFileUrl
                        },
                        success: function(response) {
                            console.log('Server response:', response);
                            if (response.success) {
                                console.log('File deleted successfully.');
                                var index = uploadedImageUrls.indexOf(file.uploadedFileUrl);
                                if (index > -1) {
                                    uploadedImageUrls.splice(index, 1);
                                    console.log('Updated uploadedImageUrls:', uploadedImageUrls); // Log le tableau mis à jour
                                }
                            } else {
                                console.error('Failed to delete file.');
                            }
                        },
                        error: function(error) {
                            console.error('Error deleting file:', error);
                        }
                    });
                }
            });
        }
    };

        // Fonction pour soumettre le formulaire
function submitForm(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    var form = document.getElementById('form1');
    var formData = new FormData(form);

    formData.append('uploadedImageUrls', JSON.stringify(uploadedImageUrls));
    console.log('stringify:', JSON.stringify(uploadedImageUrls));

    fetch("{{ route('add-property-post') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Server response:', data);
            if (data.success) {
                window.location.href = "{{ route('admin.add-property') }}";
            } else {
                alert("Les champs dont les labels portent une étoile rouge sont obligatoires.");
                console.error('Server error:', data.error);
            }
        })
        .catch(error => {
            alert('Erreur');
            console.error('Error adding property:', error);
        });
}

// Vérifier la longueur de uploadedImageUrls et désactiver le bouton si nécessaire
function checkUploadedImages() {
    var submitButton = document.getElementById('btn_submit');
    if (uploadedImageUrls.length === 0) {
        submitButton.disabled = true;
        alert('Vous devez soumettre au moins une image obligatoirement');
    } else {
        submitButton.disabled = false;
    }
}

// Ajouter un événement au formulaire pour vérifier les images avant de soumettre
document.getElementById('form1').addEventListener('submit', function(event) {
    if (uploadedImageUrls.length === 0) {
        event.preventDefault(); // Empêche la soumission du formulaire si aucune image n'est téléchargée
        alert('Vous devez soumettre au moins une image obligatoirement');
    } else {
        submitForm(event);
    }
});

// Ajouter un écouteur d'événements pour vérifier les images chaque fois que l'utilisateur ajoute une image
document.getElementById('imageUploadField').addEventListener('change', function() {
    checkUploadedImages();
});

// Initialiser la vérification des images au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    checkUploadedImages();
});

</script>









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
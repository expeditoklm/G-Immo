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

<style>
    .image-gallery {
        display: flex;
        overflow-x: scroll;
        scroll-behavior: smooth;
        width: 100%;
        gap: 20px;
        /* Espace entre les images */
    }

    .image-container {
        position: relative;
        min-width: 200px;
        /* Largeur minimale de la cellule */
        height: 200px;
        /* Hauteur de la cellule */
        background-size: cover;
        /* Ajuster la taille de l'image */
        background-position: center;
        /* Centrer l'image */
        background-repeat: no-repeat;
        /* Éviter que l'image se répète */
        overflow: hidden;
        /* Pour s'assurer que les éléments enfants ne débordent pas */
        cursor: pointer;
        /* Curseur pointer au survol */
    }

    .image-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1;
    }

    .image-container:hover::before {
        opacity: 1;
    }

    .icons {
        position: absolute;
        bottom: 75px;
        /* Positionner les icônes en bas */
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        opacity: 0;
        /* Rendre les icônes invisibles par défaut */
        transition: opacity 0.3s;
        /* Transition pour l'apparition des icônes */
    }

    .image-container:hover .icons {
        opacity: 1;
        /* Rendre les icônes visibles au survol */
    }

    .icons a {
        color: white;
        /* Couleur des icônes */
        background-color: blue;
        /* Fond bleu des icônes */
        padding: 8px;
        border-radius: 15%;
        /* Contour arrondi */
        text-decoration: none;
        /* Pas de soulignement */
    }

    .icons .ad {
        color: white;
        /* Couleur des icônes */
        background-color: red;
        /* Fond bleu des icônes */
        padding: 8px;
        border-radius: 15%;
        /* Contour arrondi */
        text-decoration: none;
        /* Pas de soulignement */
    }

    .scroll-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 3;
    }

    .scroll-button.left {
        left: 10px;
    }

    .scroll-button.right {
        right: 10px;
    }

    .popup {
        display: none;
        /* Cacher le pop-up par défaut */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .popup img {
        max-width: 90%;
        max-height: 90%;
    }

    .popup-close {
        position: absolute;
        top: 20px;
        right: 30px;
        color: white;
        font-size: 30px;
        cursor: pointer;
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
    <h3>Property Media</h3>
    <div class="property-form-group">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('modif-property-post') }}" class="dropzone" id="my-dropzone">
                    @csrf
                </form>

            </div>
        </div>
    </div>
</div>






@if($proprieteImages->isNotEmpty())
<div class="image-gallery-container" style="position: relative;">
        <div class="image-gallery" id="image-gallery">
            @foreach ($proprieteImages as $item)
            <div class="image-container" style="background-image: url('{{ asset($item->url) }}');">
                <div class="icons">
                    <a href="#" title="Voir" class="view-icon"><i class="far fa-eye"></i></a>
                    <a href="#" class="delete-icon ad" title="Supprimer" data-id="{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
            <!-- The Modal -->
            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close" data-id="{{ $item->id }}">&times;</span>
                    <p>Voulez-vous vraiment supprimer ?</p>
                    <a href="#" class="btn btn-warning btn-xs ml-5 mr-5 border-0 confirm-delete" data-id="{{ $item->id }}" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0 cancel-delete" data-id="{{ $item->id }}" id="cancel-delete">Non</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="popup" id="image-popup">
        <span class="popup-close" id="popup-close">&times;</span>
        <img src="" alt="Agrandissement de l'image" id="popup-img">
    </div>
@endif

 <!-- Début Formulaire -->
<form id="form1" method="POST">
    @csrf

    <div class="single-add-property">
        <h3>Description de la propriété et prix</h3>
        <div class="property-form-group">
            <input type="hidden" name="id" value="{{$properties->id}}">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="title">Titre de la propriété</label>
                        <input type="text" name="titre" placeholder="Entrez le titre de votre propriété" id="title" value="{{$properties->titre}}" required>
                    </p>
                </div>
            </div>
            <input type="hidden" id="idProperty" value="{{$properties->id}}">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="description">Description de la propriété</label>
                        <textarea id="description" name="description"  placeholder="Décrivez votre propriété" value="">{{$properties->description}}</textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-control wide" required>
                            <option value="{{$properties->status}}"  selected>{{$properties->status}}</option>
                            <option value="Rental">Louer</option>
                            <option value="For Sale">Vendre</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="propriete">Type de Propriété <span class="text-danger">*</span></label>
                        <select name="type_propriete_id" class="form-control wide" required>
                            <option value="{{$properties->typePropriete->id}}"  selected>{{$properties->typePropriete->libelle}}</option>
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
                        <input type="text" name="prix" placeholder="XOF" value="{{$properties->prix}}" id="price">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="area">Surface</label>
                        <input type="text" placeholder="Surface en m2" name="surface" value="{{$properties->surface}}" id="area">
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
                        <select class="form-control wide js-example-basic-single" onchange="countryHasChanged()" id="country" name="pays" required
                            style="height: 45px; font-size: 14px; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; padding: 10px 12px; width: 100%;">
                            <option value="{{ $propertiesCountryCode }}" selected>{{ $propertiesCountry }}</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country['countryCode'] }}">{{ $country['countryName'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            
                <div class="col-lg-6 col-md-12 dropdown ">
                    <div class="form-group categories">
                        <label for="address">Ville <span class="text-danger">*</span></label>
                        <select class="form-control wide js-example-basic-single" id="city" name="ville" required
                            style="height: 45px; font-size: 14px; border: 1px solid #ced4da; border-radius: 4px; background-color: #fff; padding: 10px 12px; width: 100%;">
                            <option value="{{ $propertiesCityCode }}" selected>{{ $propertiesCity }}</option>
                        </select>
                    </div>
                </div>
           




            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="country">Quartier <span class="text-danger">*</span></label>
                        <input type="text" name="quartier" value="{{$properties->quartier}}" placeholder="Enter Your qut" id="country">
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="address">Address</label>
                        <input type="adresse" name="adresse" value="{{$properties->adresse}}" placeholder="Enter Your Address" id="adresse">
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
                        <select name="nbPiece" class="form-control wide">
                            <option value="{{$properties->nbPiece}}"  selected>{{$properties->nbPiece}}</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            <option value="6+" >6+</option>

                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select name="nbChambre" class="form-control wide">
                            <option value="{{$properties->nbChambre}}"  selected>{{$properties->nbChambre}}</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            <option value="6+" >6+</option>

                        </select>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select name="nbToillete" class="form-control wide">
                            <option value="{{$properties->nbToillete}}"  selected>{{$properties->nbToillete}}</option>
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
                                    <input 
                                        id="{{ $item->id }}" 
                                        type="checkbox" 
                                        name="caracteristiques[]" 
                                        value="{{ $item->id }}"
                                        @if($properties->caracteristiques->contains('id', $item->id)) 
                                               checked 
                                           @endif>
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
        <h3>Information sur un Contact</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-name">Nom</label>
                        <input type="text" placeholder="Entrer le Nom du Contact" id="con-name" value="{{$properties->nomContact}}" name="nomContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-user">Prénom</label>
                        <input type="text" placeholder="Entrer le Prénom du Contact" value="{{$properties->prenomContact}}" id="con-user" name="prenomContact">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb first">
                        <label for="con-email">E-mail</label>
                        <input type="email" placeholder="Entrer l'E-mail du Contact" value="{{$properties->emailContact}}" id="con-email" name="emailContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="con-phn">Télephone</label>
                        <input type="text" placeholder="Entrer le Number Télephone du Contact" id="con-phn" value="{{$properties->telContact}}" name="telContact">
                    </p>
                </div>
            </div>
        </div>




        <div class="add-property-button pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="prperty-submit-button">
                    <button type="button" id="btn_submit" onclick="submitForm()" name="btn_submit">Mettre à jour la Propriété</button>
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
    document.querySelectorAll('.view-icon').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            var imageUrl = element.closest('.image-container').style.backgroundImage.slice(5, -2);
            var popup = document.getElementById('image-popup');
            var popupImg = document.getElementById('popup-img');
            popupImg.src = imageUrl;
            popup.style.display = 'flex';
        });
    });

    document.getElementById('popup-close').addEventListener('click', function() {
        var popup = document.getElementById('image-popup');
        popup.style.display = 'none';
    });

    document.getElementById('image-popup').addEventListener('click', function(event) {
        if (event.target === this) {
            this.style.display = 'none';
        }
    });

    var gallery = document.getElementById('image-gallery');
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // CSRF Token
    const csrfToken = '{{ csrf_token() }}';

    // Confirm delete action
    document.querySelectorAll('.confirm-delete').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.id;
            console.log('Confirm delete button clicked, id:', id);
            let url = '{{ route("delete-image", ":id") }}';
            url = url.replace(':id', id);
            console.log('Request URL:', url);

            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(response => {
                if (response.success) {
                    console.log('Suppression réussie, réponse :', response);
                    document.getElementById('myModal-' + id).style.display = 'none'; // Masquer le modal si nécessaire
                    document.querySelectorAll('.image-container').forEach(function(container) {
                        if (container.querySelector('.delete-icon').dataset.id == id) {
                            container.remove(); // Supprimer l'élément de l'interface utilisateur
                        }
                    });
                    //alert('Image supprimée avec succès');
                } else if (response.error) {
                    console.error('Échec de la suppression, réponse :', response);
                    alert('Erreur : ' + response.error); // Afficher l'erreur dans une alerte
                }
                //alert(response.success);
            })
            .catch(error => {
                console.error('Delete failed, response:', error);
                alert('Error: ' + error.message);
            });
        });
    });
});
</script>
<script>
    var uploadedImageUrls = [];
    Dropzone.options.myDropzone = {
        url: "{{ route('upload-image') }}",
        dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
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

    









// Liste pour stocker les URL des images téléchargées


function submitForm() {
            event.preventDefault(); // Empêche la soumission du formulaire initiale

            var form = document.getElementById('form1');
            var idProperty = document.getElementById('idProperty').value;
            var formData = new FormData(form);

            formData.append('uploadedImageUrls', JSON.stringify(uploadedImageUrls));
            console.log('stringify:', JSON.stringify(uploadedImageUrls));

            if (uploadedImageUrls.length === 0) {
                // Requête AJAX pour vérifier les images existantes
                $.ajax({
                    url: '/check-image/' + idProperty,
                    method: 'GET',
                    success: function(response) {
                        if (response.hasImage) {
                            //alert('L\'image existe déjà.');
                            proceedWithFormSubmission(formData);
                        } else {
                            alert('Vous devez soumettre au moins une image obligatoirement.');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Échec de la vérification des images.');
                        console.error('Erreur:', error);
                    }
                });
            } else {
                // Procéder directement à la soumission du formulaire
                proceedWithFormSubmission(formData);
            }
        }

        function proceedWithFormSubmission(formData) {
            fetch("{{ route('modif-property-post') }}", {
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
                    window.location.href = "{{ route('admin.my-properties') }}";
                } else {
                    alert("Les champs dont les labels portent une étoile rouge sont obligatoires.");
                    console.error('Server error:', data.error);
                }
            })
            .catch(error => {
                alert('Erreur lors de l\'ajout de la propriété.');
                console.error('Error adding property:', error);
            });
        }



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

    function countryHasChanged() {
        const countrySelect = document.getElementById('country');
        const citySelect = document.getElementById('city');
        const countryCode = countrySelect.value;

        if (countryCode) {
            fetch("{{ route('get-cities') }}?country_code=" + countryCode)
                .then(response => response.json())
                .then(data => {
                    citySelect.innerHTML = ''; // Clear previous options
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.geonameId;
                        option.textContent = city.name;
                        citySelect.appendChild(option);
                    });
                    $('#city').select2(); // Re-initialiser Select2 pour le champ des villes
                })
                .catch(error => {
                    console.error('Error fetching cities:', error);
                });
        } else {
            citySelect.innerHTML = '<option value="">Select your city</option>';
            $('#city').select2(); // Re-initialiser Select2 pour le champ des villes
        }
    }
</script>


@endsection
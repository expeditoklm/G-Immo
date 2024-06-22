@extends('admin/base')

@section('nomPage')
Add Property | Find Houses
@endsection

@section('css')

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







<div class="image-gallery-container" style="position: relative;">
        <div class="image-gallery" id="image-gallery">
            <div class="image-container" style="background-image: url('{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}');">
                <div class="icons">
                    <a href="#" title="Voir" class="view-icon"><i class="far fa-eye"></i></a>
                    <a href="#" class="ad" title="Supprimer"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
            <div class="image-container" style="background-image: url('{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}');">
                <div class="icons">
                    <a href="#" title="Voir" class="view-icon"><i class="far fa-eye"></i></a>
                    <a href="#" class="ad" title="Supprimer"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>
            <div class="image-container" style="background-image: url('{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}');">
                <div class="icons">
                    <a href="#" title="Voir" class="view-icon"><i class="far fa-eye"></i></a>
                    <a href="#" class="ad" title="Supprimer"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>


            <div class="image-container" style="background-image: url('{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}');">
                <div class="icons">
                    <a href="#" title="Voir" class="view-icon"><i class="far fa-eye"></i></a>
                    <a href="#" class="ad" title="Supprimer"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>

            <div class="image-container" style="background-image: url('{{asset('assets/admin/images/feature-properties/fp-1.jpg')}}');">
                <div class="icons">
                    <a href="#" title="Voir" class="view-icon"><i class="far fa-eye"></i></a>
                    <a href="#" class="ad" title="Supprimer"><i class="far fa-trash-alt"></i></a>
                </div>
            </div>


        </div>


    </div>

    <div class="popup" id="image-popup">
        <span class="popup-close" id="popup-close">&times;</span>
        <img src="" alt="Agrandissement de l'image" id="popup-img">
    </div>











 <!-- Début Formulaire -->
<form id="form1" method="POST">
    @csrf

    <div class="single-add-property">
        <h3>Property description and price</h3>
        <div class="property-form-group">
            <input type="hidden" name="id" value="{{$properties->id}}">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="title">Property Title</label>
                        <input type="text" name="titre" id="title" value="{{$properties->titre}}" required>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="description">Property Description</label>
                        <textarea id="description" name="description" value="">{{$properties->description}}</textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select name="status" class="form-control wide" required>
                            <option value="{{$properties->status}}"  selected>{{$properties->status}}</option>
                            <option value="Rental">Rent</option>
                            <option value="For Sale">Sale</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
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
                        <label for="price">Price</label>
                        <input type="text" name="prix" value="{{$properties->prix}}" id="price">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="area">Area</label>
                        <input type="text" name="surface" value="{{$properties->surface}}" id="area">
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="single-add-property">
        <h3>Property Location</h3>
        <div class="property-form-group">
            <div class="row">

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="address">Pays</label>

                        <select name="pays" class="form-control wide">
                            <option value="{{$properties->pays}}"  selected>{{$properties->pays}}</option>
                            <option value="Benin">Benin</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Algerie">Algerie</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="address">Ville</label>

                        <select name="ville" class="form-control wide">
                            <option value="{{$properties->ville}}" selected>{{$properties->ville}}</option>
                            <option value="Cotonou">Cotonou</option>
                            <option value="Ibadan">Ibadan</option>
                            <option value="Liay">Liay</option>
                        </select>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="country">Quartier</label>
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
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select name="nbChambre" class="form-control wide">
                            <option value="{{$properties->nbChambre}}"  selected>{{$properties->nbChambre}}</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <select name="nbToillete" class="form-control wide">
                            <option value="{{$properties->nbToillete}}"  selected>{{$properties->nbToillete}}</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="single-add-property">
    <h3>Property Features</h3>
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
        <h3>Contact Information</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-name">Name</label>
                        <input type="text" placeholder="Enter Your Name" id="con-name" value="{{$properties->nomContact}}" name="nomContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-user">Username</label>
                        <input type="text" placeholder="Enter Your Username" value="{{$properties->prenomContact}}" id="con-user" name="prenomContact">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb first">
                        <label for="con-email">Email</label>
                        <input type="email" placeholder="Enter Your Email" value="{{$properties->emailContact}}" id="con-email" name="emailContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="con-phn">Phone</label>
                        <input type="text" placeholder="Enter Your Phone Number" id="con-phn" value="{{$properties->telContact}}" name="telContact">
                    </p>
                </div>
            </div>
        </div>




        <div class="add-property-button pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="prperty-submit-button">
                        <button type="button" onclick="submitForm()" name="btn_submit">Submit Property</button>
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

    function submitForm() {
        var form = document.getElementById('form1');

        var formData = new FormData(form);

        formData.append('uploadedImageUrls', JSON.stringify(uploadedImageUrls));
        console.log('stringify:', JSON.stringify(uploadedImageUrls));

        fetch("{{ route('modif-property-post') }}", {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log('Server response:', data);
                if (data.success) {
                    window.location.href = "{{ route('admin.my-properties') }}";
                } else {
                    alert('Remplir le titre , le status et le type de la propriété.');
                    console.error(data.error);
                }
            })
            .catch(error => {
                alert('Remplir le titre , le status et le type de la propriété');
                console.error('Error adding property:', error);
            });
    }
</script>

@endsection
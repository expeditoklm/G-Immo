@extends('admin/base')

@section('nomPage')
Add Property | Find Houses
@endsection

@section('css')


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
                <form action="{{ route('add-property-post') }}" class="dropzone" id="my-dropzone">
                    @csrf
                </form>

            </div>
        </div>
    </div>
</div>

 <!-- Début Formulaire -->
<form id="form1" method="POST">
    @csrf

    <div class="single-add-property">
        <h3>Property description and price</h3>
        <div class="property-form-group">

            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="title">Property Title  <span class="text-danger"> *</span></label>
                        <input type="text" name="titre" id="title" placeholder="Enter your property title" required>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <label for="description">Property Description</label>
                        <textarea id="description" name="description" placeholder="Describe about your property"></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-control wide" required>
                            <option value="" disabled selected>Select status</option>
                            <option value="Rental">Rent</option>
                            <option value="For Sale">Sale</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="propriete">Propriété <span class="text-danger">*</span></label>
                        <select name="type_propriete_id" class="form-control wide" required>
                            <option value="" disabled selected>Select type propriété</option>
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
                        <input type="text" name="prix" placeholder="USD" id="price">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="area">Area</label>
                        <input type="text" name="surface" placeholder="Sqft" id="area">
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
                        <label for="address">Pays <span class="text-danger">*</span></label>

                        <select name="pays" class="form-control wide" require required>
                            <option value="" disabled selected>Select Country</option>
                            <option value="Benin">Benin</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Algerie">Algerie</option>
                        </select>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="address">Ville <span class="text-danger">*</span></label>

                        <select name="ville" class="form-control wide" required>
                            <option value="" disabled selected>Select City</option>
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
                        <label for="country">Quartier <span class="text-danger"> *</span></label>
                        <input type="text" name="quartier" placeholder="Enter Your qut" id="country" required>
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="address">Address</label>
                        <input type="adresse" name="adresse" placeholder="Enter Your Address" id="adresse">
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
                            <option value="" disabled selected>Select Pièce</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="chambre">Chambre</label>
                        <select name="nbChambre" class="form-control wide">
                            <option value="" disabled selected>Select Chambre</option>
                            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 dropdown faq-drop">
                    <div class="form-group categories">
                        <label for="toillete">Toillete</label>
                        <select name="nbToillete" class="form-control wide">
                            <option value="" disabled selected>Select Toillete</option>
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
        <h3>Contact Information</h3>
        <div class="property-form-group">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-name">Name</label>
                        <input type="text" placeholder="Enter Your Name" id="con-name" name="nomContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>
                        <label for="con-user">Username</label>
                        <input type="text" placeholder="Enter Your Username" id="con-user" name="prenomContact">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb first">
                        <label for="con-email">Email</label>
                        <input type="email" placeholder="Enter Your Email" id="con-email" name="emailContact">
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="no-mb last">
                        <label for="con-phn">Phone</label>
                        <input type="text" placeholder="Enter Your Phone Number" id="con-phn" name="telContact">
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

        fetch("{{ route('add-property-post') }}", {
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
                    window.location.href = "{{ route('admin.add-property') }}";
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
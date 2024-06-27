@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .nice-select {
        display: none;
    }
</style>


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
        <form name="contact_form" action="{{ route('admin.modif-user-profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" id="fname" placeholder="Nom et Prénom" name="nom_prenom" value="{{ Auth::user()->nom_prenom }}" required />
            <textarea placeholder="A propos" name="description" required>{{ Auth::user()->description }}</textarea>
            <input type="text" id="website" placeholder="Site Web" name="website" value="{{ Auth::user()->website }}" required />
            <div class="d-flex  " style="justify-content: space-between;">

                @if(Auth::user()->sexe == 'Feminin' && !Auth::user()->profile_img)
                <img src="{{ asset('assets/images/user/f-user.png') }}" alt="image" class="img-fluid rounded-circle  m-0  mb-4 shadow" style="width: 100px; height: 100px; object-fit: cover;">
                @elseif(Auth::user()->sexe == 'Masculin' && !Auth::user()->profile_img)
                <img src="{{ asset('assets/images/user/m-user.jpg') }}" alt="image" class="img-fluid rounded-circle mb-0 pb-0 mb-4  shadow" style="width: 100px; height: 100px; object-fit: cover; ">
                @else
                <img src="{{ asset(Auth::user()->profile_img) }}" alt="image" class="img-fluid rounded-circle mb-4  shadow author__img" style="width: 100px; height: 100px; object-fit: cover;">
                @endif
                <div class="d-block">

                    <label for="">Changer la photo de profile</label>
                    <input type="file" class="m-0 mt-4 text-center" id="file" name="file"  />
                </div>
            </div>

            <div class="d-flex" style="justify-content: space-between;">
                <select class="form-select col-md-4" onchange="countryHasChanged()" id="country" name="pays" aria-label="Default select example" required>
                    <option value="{{ $userCountryCode }}" selected>{{ $userCountry }}</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country['countryCode'] }}">{{ $country['countryName'] }}</option>
                    @endforeach
                </select>

                <select class="form-select col-md-4 " id="city" name="ville" aria-label="Default select example" required>
                    <option value="{{ $userCityCode}}" selected>{{$userCity }}</option>
                </select>
            </div>


            <input type="submit" class="multiple-send-message" value="Modifier" />
        </form>
    </div>
</div>

@endsection

@section('js')

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


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
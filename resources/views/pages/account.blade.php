@extends('base')

@section('nomPage')
Property | Andora
@endsection

@section('css')

@endsection

@section('div_init')
<div class="main-header-area main-header-with-relative">

    @endsection

    @section('div_finish')
</div>
@endsection

@section('div_init2')
top-header-inner

@endsection

@section('div_init3')
<div class="row justify-content-center align-items-center">

    @endsection

    @section('div_finish3')
</div>
@endsection

@section('content')


<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Login / Register</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Home</a>
                </li>
                <li>Account</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->



<!-- Start Profile Authentication Area -->
<div class="profile-authentication-area ptb-120">
    <div class="container">


        @include('admin.success_error')

        <div class="profile-authentication-inner">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="profile-authentication-box">
                        <div class="content">
                            <h3>Sign In</h3>
                            <p>Don't have an account yet? <a href="my-account.html">Sign up here</a></p>
                        </div>
                        <form method="POST" class="authentication-form" action="{{ route('login') }}">
                            @csrf
                            <div class="google-btn">
                                <button type="submit"><img src="{{asset('assets/images/google.svg')}}" alt="google">Sign in with Google</button>
                            </div>
                            <div class="or">
                                <span>OR</span>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email address">
                                <div class="icon">
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your password">
                                <div class="icon">
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                            <div class="form-bottom d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember_token" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot-password.html" class="forgot-password">
                                    Forgot your password?
                                </a>
                            </div>
                            <button type="submit" class="default-btn">Sign In</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="profile-authentication-box with-gap">
                        <div class="content">
                            <h3>Create Your Account</h3>
                            <p>Already have an account? <a href="my-account.html">Sign in here</a></p>
                        </div>
                        <form method="POST" class="authentication-form" action="{{ route('register') }}">
                            @csrf
                            <div class="google-btn">
                                <button type="submit"><img src="{{asset('assets/images/google.svg')}}" alt="google">Sign in with Google</button>
                            </div>
                            <div class="or">
                                <span>OR</span>
                            </div>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="nom_prenom" class="form-control" value="{{ old('nom_prenom') }}" placeholder="Enter name" required>
                                <div class="icon">
                                    <i class="ri-user-3-line"></i>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-4 col-12">
                                <div class="mb-3">
                                    <div>
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group mb-3">
                                                <label >Sexe</label>
                                                <div class="m-0 d-flex">
                                                    <div class="form-check form-check-inline d-flex">
                                                        <input class="form-check-input m-2 mt-1" type="radio" name="sexe" id="typePnne1" value="Masculin" checked>
                                                        <label class="form-check-label" for="typePenne1">Masculin</label>
                                                    </div>
                                                    <div class="form-check form-check-inline d-flex">
                                                        <input class="form-check-input m-2 mt-1" type="radio" name="sexe" id="typePe2" value="Feminin">
                                                        <label class="form-check-label" for="typenne2">Féminin</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email address" required>
                                <div class="icon">
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="Enter phone" required>
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" value="{{ old('pays') }}" name="pays" id="country" required>
                                    <option value="" selected>Select your country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country['countryCode'] }}">{{ $country['countryName'] }}</option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="ri-earth-line"></i>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control" value="{{ old('ville') }}" name="ville" id="city" aria-label="Default select example" required>
                                    <option value="" selected>Select your city</option>
                                </select>
                                <div class="icon">
                                    <i class="ri-building-line"></i>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Your Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your password" required>
                                <div class="icon">
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
                                <div class="icon">
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                        I accept the <a href="terms-conditions.html">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="default-btn" id="signup-btn" disabled>Sign Up</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Profile Authentication Area -->

<!-- Start Subscribe Area -->
<div class="subscribe-wrap-area">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Subscribe To Our Newsletter</h2>
                <form class="subscribe-form" action="{{ route('pages.news-letterss') }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" name="btn_mail" class="default-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->







@endsection



@section('js')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var checkbox = document.getElementById("checkbox1");
        var signupBtn = document.getElementById("signup-btn");

        checkbox.addEventListener("change", function() {
            if (checkbox.checked) {
                signupBtn.disabled = false; // Désactiver le bouton si la case est cochée
            } else {
                signupBtn.disabled = true; // Activer le bouton si la case n'est pas cochée
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var countrySelect = document.getElementById('country');
        var citySelect = document.getElementById('city');

        countrySelect.addEventListener('change', function() {
            var countryCode = this.value;
            if (countryCode) {
                fetch("{{ route('get-cities') }}?country_code=" + countryCode)
                    .then(response => response.json())
                    .then(data => {
                        citySelect.innerHTML = '<option value="">Select your city</option>';
                        data.forEach(function(city) {
                            var option = document.createElement('option');
                            option.value = city.geonameId;
                            option.textContent = city.name;
                            citySelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching cities:', error);
                    });
            } else {
                citySelect.innerHTML = '<option value="">Select your city</option>';
            }
        });
    });
</script>



@endsection
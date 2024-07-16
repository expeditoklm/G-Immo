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
            @if(session('success'))
                <div class="alert alert-primary alert-dismissible fade show m-2" role="alert">
                    <div class="text-center"> <!-- Ajoutez une classe text-center à la div parente -->
                        <span class="fw-bold d-block mx-auto">{{ session('success') }}</span> <!-- Utilisez mx-auto pour centrer le span -->
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
                    <div class="text-center"> <!-- Ajoutez une classe text-center à la div parente -->
                        <span class="fw-bold d-block mx-auto">{{ session('error') }}</span> <!-- Utilisez mx-auto pour centrer le span -->
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="page-banner-content">
                    <h2>Contactez-nous</h2>
                    <ul class="list">
                        <li>
                            <a href="{{ route('pages.acceuil') }}">Acceuil</a>
                        </li>
                        <li>Contactez-nous</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Contact Area -->
        <div class="contact-area ptb-120">
            <div class="container">
                <div class="row justify-content-center" data-cues="slideInUp">
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-info-box">
                            <div class="box">
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="info">
                                    <h4>Notre emplacement</h4>
                                    <span>Cotonou, Bénin</span>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="info">
                                    <h4>Numéro de téléphone</h4>
                                    <span>
                                    <a href="tel:22995194936">+(229) 95 1949 36</a>
                                    </span>
                                    <span>
                                    <a href="tel:22966064948">+(229) 66 0649 48</a>
                                    </span>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="ri-mail-send-line"></i>
                                </div>
                                <div class="info">
                                    <h4>Notre adresse e-mail</h4>
                                    <span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#3d4e484d4d524f4954535b527d5c5359524f5c135e5250"><span class="__cf_email__" data-cfemail="66151316160914120f080009260708020914074805090b">[email&#160;protected]</span></a>
                                    </span>
                                    <span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e0838f8e94818394a0898e868fce838f8d"><span class="__cf_email__" data-cfemail="b2d1dddcc6d3d1c6f2dbdcd4dd9cd1dddf">[email&#160;protected]</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-wrap-form">
                            <h3>Entrez en contact</h3>
                            <form action="{{ route('pages.contacts-us-post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Votre Nom et Prénom</label>
                                    <input type="text" name="nom_prenom" class="form-control" placeholder="Entrer votre nom">
                                    <div class="icon">
                                        <i class="ri-user-3-line"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adresse E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="Entrer votre adresse e-mail ">
                                    <div class="icon">
                                        <i class="ri-mail-line"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Votre Téléphone</label>
                                    <input type="phone" name="telephone" class="form-control" placeholder="Entrer votre télephone">
                                    <div class="icon">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Votre Sujet</label>
                                    <input type="text" name="titre_msg" class="form-control" placeholder="Entrer votre le sujet">
                                    <div class="icon">
                                        <i class="ri-file-line"></i>
                                    </div>
                                </div>
                                <div class="form-group extra-top">
                                    <label>Votre Message</label>
                                    <textarea class="form-control"  name="message" placeholder="Votre message ici"></textarea>
                                    <div class="icon">
                                        <i class="ri-message-2-line"></i>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" name="btn_msg2" class="default-btn">Envoyer le Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->


@endsection

@section('script')



@endsection
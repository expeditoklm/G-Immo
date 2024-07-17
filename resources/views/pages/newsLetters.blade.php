@extends('base')

@section('nomPage')
Properties | Miawezon
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
        @include('admin.success_error')
        <div class="page-banner-content">
            <h2>Abonnement à la Newsletter pour continuer</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('pages.acceuil') }}">Acceuil</a>
                </li>
                <li>Abonnement à la Newsletter</li>
            </ul>

        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Profil du Proprietaire / Démarcheur Area -->
<div class="agent-profile-area pt-120 pb-120">
    <div class="container m-0">
       
    </div>
</div>
</div>
<!-- End Agent Profile Area -->



<!-- Start Subscribe Area -->
<div class="subscribe-wrap-area mt-0">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Abonnez-vous à notre Newsletter</h2>
                <form class="subscribe-form" action="{{ route('store.email') }}" method="POST">
                    @csrf
                    <input type="hidden" name="target_url" value="{{ $targetUrl }}">
                    <input type="hidden" name="id" value="{{ $id }}">
                    <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
                    <button type="submit" name="btn_news" class="default-btn">Abonnez-vous</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->

@endsection

@section('script')



@endsection
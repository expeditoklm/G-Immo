@extends('base')

@section('nomPage')
Properties | Andora
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
                    <h2>Server Error</h2>
                    <ul class="list">
                        <li>
                            <a href="javascript:history.back()">Go Back</a>
                        </li>
                        <li>{{ $message }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Not Found Area -->
        <div class="not-found-area ptb-120">
            <div class="container">
                <div class="not-found-content text-center">
                    <img src="assets/images/error.png" alt="error-image">
                    <h3>Oops! That page can't be found</h3>
                    <a href="javascript:history.back()" class="default-btn">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
        <!-- End Not Found Area -->

        <!-- Start Subscribe Area -->
<div class="subscribe-wrap-area">
    <div class="container" data-cues="slideInUp">
        <div class="subscribe-wrap-inner-area">
            <div class="subscribe-content">
                <h2>Subscribe To Our Newsletter</h2>
                <form class="subscribe-form"action="{{ route('pages.news-letterss') }}" method="POST">
                @csrf
                    <input type="hidden" name="message" value="{{ $message }}">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" name="btn_newslater" class="default-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->

<!-- End Subscribe Area -->

@endsection

@section('script')



@endsection



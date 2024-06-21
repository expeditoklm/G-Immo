@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

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
    <h4>Profile Details</h4>
</div>
<div class="sidebar-widget author-widget2">
    <div class="author-box clearfix">
        <img src="{{asset('assets/admin/images/testimonials/ts-1.jpg')}}" alt="author-image" class="author__img">
        <h4 class="author__title">{{ $user->nom_prenom}}</h4>
        <!-- <p class="author__meta">{{ $user->description}}</p> -->
        <div>
            <textarea class="author__meta text-center"  readonly style="border: none; outline: none; resize: none; overflow: hidden; width: 100%; height: auto; padding: 0; margin: 0; background: none;">{{ $user->description }}</textarea>
        </div>
    </div>
    <ul class="author__contact">
        <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>{{ $user->pays}}, {{ $user->ville}} </li>
        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:{{ $user->telephone}}">{{ $user->telephone}}</a></li>
        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:{{ $user->email}}">{{ $user->email}}</a></li>
        <li><span class="la la-envelope-o"><i class="fa fa-globe" aria-hidden="true"></i></span><a href="https:{{ $user->website}}">{{ $user->website}}</a></li>
    </ul>

    <div class="agent-contact-form-sidebar">
        <h4>Request Inquiry</h4>
        <form name="contact_form" action="{{ route('pages.contacts-us-post') }}" method="POST">
            @csrf
            <input type="text" id="fname" name="nom_prenom" placeholder="Full Name" required />
            <input type="number" id="pnumber" name="telephone" placeholder="Phone Number" required />
            <input type="email" id="emailid" name="email" placeholder="Email Address" required />
            <textarea placeholder="Message" name="message" required></textarea>
            <input type="submit" name="btn_msg4" class="multiple-send-message" value="Submit Request" />
        </form>
    </div>
</div>

@endsection

@section('script')


@endsection
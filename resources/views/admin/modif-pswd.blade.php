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
    <h4>Modifier le mot de passe </h4>
</div>
<div class="sidebar-widget author-widget2">
    
    <div class="agent-contact-form-sidebar">
        <form name="contact_form" action="{{ route('admin.modif-pswd') }}" method="POST">
            @csrf
            <input type="password" id="fname" name="nom_prenom" placeholder="Full Name" required />
            <input type="password" id="fname" name="nom_prenom" placeholder="Full Name" required />
                    

            <input type="submit" class="multiple-send-message" value="Submit Request" />
        </form>
    </div>
</div>

@endsection

@section('script')


@endsection
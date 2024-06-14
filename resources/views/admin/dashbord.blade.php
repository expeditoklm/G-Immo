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

@section('logo')

@endsection

@section('navigation')

@endsection


@section('class')
col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2
@endsection

@section('content')

@include('admin.success_error')

<div class="dashborad-box stat bg-white">

    <h4 class="title">Manage Dashboard</h4>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                <div class="item">
                    <div class="icon">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </div>
                    <div class="info">
                        <h6 class="number">{{ $nbProperties}}</h6>
                        <p class="type ml-1">Published Property</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="info">
                        <h6 class="number">{{ $nbReviews}}</h6>
                        <p class="type ml-1">Total Reviews</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 dar com mr-3">
                <div class="item mb-0">
                    <div class="icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="info">
                        <h6 class="number">{{ $nbMessages}}</h6>
                        <p class="type ml-1">Messages</p>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<div class="dashborad-box">
    <h4 class="title">Message</h4>
    <div class="section-body">
        <div class="messages">
            @foreach ($messages as $item)
            <div class="message">
                <div class="thumb">
                    <img class="img-fluid" src="{{asset('assets/admin/images/testimonials/ts-1.jpg')}}" alt="">
                </div>
                
                <div class="body">
                    <h6>{{ $item->user->nom_prenom}}</h6>
                    <p class="post-time">{{ $item->created_at}}</p>
                    <p class="content mb-0 mt-2">{{ $item->message}}</p>
                    <div class="controller">
                        <ul>

                            <li><a href="#"><i class="far fa-trash-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="dashborad-box">
    <h4 class="title">Review</h4>
    <div class="section-body">
        <div class="messages">
            @foreach ($reviews as $item)
            <div class="message">
                <div class="thumb">
                    <img class="img-fluid" src="{{asset('assets/admin/images/testimonials/ts-4.jpg')}}" alt="">
                </div>
                <div class="body">
                    <h5>{{ $item->propriete->titre}}</h5>
                    <h6>{{ $item->nom_prenom}}</h6>
                    <p class="post-time">{{ $item->created_at}}</p>
                    <p class="content mb-0 mt-2">{{ $item->comment}} </p>
                    @php
                    $totalStars = 5;
                    $filledStars = $item->note;
                    $grayStars = $totalStars - $filledStars;
                    @endphp
                    <ul class="starts mb-0">
                        @for ($i = 0; $i < $filledStars; $i++) <li>
                            <i class="fa fa-star"></i>
                            </li>
                            @endfor

                            @for ($i = 0; $i < $grayStars; $i++) <li><i class="fa fa-star-o"></i>
                                @endfor

                    </ul>
                    <div class="controller">
                        <ul>

                            <li><a href="#"><i class="far fa-trash-alt"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="dashborad-box mb-0">
    <h4 class="heading pt-0">Personal Information</h4>
    <div class="section-inforamation">
        <form action="{{ route('admin.dashbord') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="nom_prenom" class="form-control" placeholder="Enter your  name">
                    </div>
                </div>


                <div class="col-sm-6">
                    <label class="form-label" for="inlineRadio1">Sexe</label>
                    <div class="form-group">

                        <div class="m-0 d-flex">
                            <div class="form-check form-check-inline d-flex">
                                <input class="form-check-input" type="radio" name="sexe" id="typePnne1" value="Masculin" checked>
                                <label class="form-check-label" for="typePenne1">Masculin</label>
                            </div>
                            <div class="form-check form-check-inline d-flex">
                                <input class="form-check-input" type="radio" name="sexe" id="typePe2" value="Feminin">
                                <label class="form-check-label" for="typenne2">Féminin</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label>Pays</label>
                    <div class="form-group">

                        <select class="form-select" name="pays" id="abcd" aria-label="Default select example">
                            <option >Selectionner le pays</option>
                            <option value="Benin">Benin</option>
                            <option value="Cote d'ivoire ">Cote d'ivoire</option>
                            <option value="Togo">Togo</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <label>Ville</label>
                    <div class="form-group">

                        <select class="form-select" name="ville" id="abcd" aria-label="Default select example">
                            <option >Selectionner la ville</option>
                            <option value="Porto">Porto</option>
                            <option value="Ctn">Ctn</option>
                            <option value="S○vi">S○vi</option>
                        </select>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Website</label>
                        <textarea name="website" class="form-control" placeholder="Write your address here"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>About Yourself</label>
                        <textarea name="description" class="form-control" placeholder="Write about userself"></textarea>
                    </div>
                </div>
            </div>
            <div class="password-section">
                <h6>Update Password</h6>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="Write new password">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" class="form-control" placeholder="Write same password again">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="btn_modif" class="btn btn-primary btn-lg mt-2">Submit</button>
        </form>
    </div>
</div>


@endsection

@section('script')


@endsection
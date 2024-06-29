@extends('admin/base')

@section('nomPage')
Dashbord | Find Houses
@endsection

@section('css')

<style>
    .full-width {
        width: 100%;
    }
</style>

<style>
    .table-fixed-header {
        width: 100%;
        border-collapse: collapse;
    }

    .table-fixed-header thead {
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        /* Vous pouvez ajuster la couleur selon votre design */
        z-index: 1;
    }

    .table-fixed-header th,
    .table-fixed-header td {
        padding: 8px 12px;
        border: 1px solid #dee2e6;
    }

    .table-container {
        max-height: 400px;
        /* Définissez la hauteur maximale selon vos besoins */
        overflow-y: auto;
    }
</style>


@endsection

@section('body')
inner-pages listing homepage-4 agents hd-white
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




<section class="properties-right list featured portfolio blog pt-5">
    <div class="container">
        <section class="headings-2 pt-0 pb-4">
            <div class="pro-wrapper  m-0 p-0">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar m-0 p-0">

                        <h3>List View</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <aside class="col-lg-4 col-md-12 car full-width">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="widget-boxed main-search-field">
                        <div class="widget-boxed-header">
                            <h4>Find Your House</h4>
                        </div>
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Looking for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Enter Keyword..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Looking for -->
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">New York</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Categories -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home" aria-hidden="true"></i>Property Type</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">House</li>
                                            <li data-value="3" class="option">Single Family</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Categories -->
                                <!-- Form Property Status -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-home"></i>Property Status</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">For Sale</li>
                                            <li data-value="2" class="option">For Rent</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                                <!-- Form Bedrooms -->
                                <div class="form-group beds">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1</li>
                                            <li data-value="2" class="option">2</li>
                                            <li data-value="3" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <div class="nice-select form-control wide" tabindex="0">
                                        <span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1</li>
                                            <li data-value="3" class="option">9</li>
                                            <li data-value="3" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                            </form>
                        </div>
                        <!--/ End Search Form -->
                        <!-- Price Fields -->
                        <div class="main-search-field-2">
                            <!-- Area Range -->
                            <div class="range-slider">
                                <label>Area Size</label>
                                <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            <!-- Price Range -->
                            <div class="range-slider">
                                <label>Price Range</label>
                                <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- More Search Options -->
                        <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Advanced Features" data-close-title="Advanced Features"></a>
                        <div class="more-search-options relative">
                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-10">
                                <input id="check-2" type="checkbox" name="check">
                                <input id="check-15" type="checkbox" name="check">
                                <label for="check-15">Outdoor Shower</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- More Search Options / End -->
                        <div class="col-lg-12 no-pds">
                            <div class="at-col-default-mar">
                                <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-boxed popular mt-5 mb-0">
                        <div class="widget-boxed-header">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="recent-post">
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                </div>
                                <div class="tags no-mb">
                                    <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-lg-8 col-md-12 blog-pots" style="display: block;">
                <div class="dashborad-box">
                    <h4 class="title">Listing</h4>
                    <div class="section-body listing-table">
                        <div class="table-responsive table-container">
                            <table class="table table-striped table-fixed-header">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Nom Prénom</th>
                                        <th>Sexe</th>
                                        <th>Télephone</th>
                                        <th>E-mail</th>
                                        <th>Pays</th>
                                        <th>Ville</th>
                                        <th>Website</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 25; $i++) <tr>
                                        <td>Luxury Restaurant</td>
                                        <td>Luxury Restaurant</td>
                                        <td>Luxury Restaurant</td>
                                        <td>Luxury Restaurant</td>
                                        <td>Luxury Restaurant</td>
                                        <td>Luxury Restaurant</td>
                                        <td>Luxury Restaurant</td>
                                        <td>23 Jan 2020</td>
                                        <td class="rating"><span>5.0</span></td>
                                        <td class="status"><span class=" active">Active</span></td>
                                        <td class="block"><a href="#"><i class="fa fa-ban"></i></a></td>

                                        </tr>
                                        @endfor
                                        <tr>
                                            <td>Luxury Restaurant</td>
                                            <td>Luxury Restaurant</td>
                                            <td>Luxury Restaurant</td>
                                            <td>Luxury Restaurant</td>
                                            <td>Luxury Restaurant</td>
                                            <td>Luxury Restaurant</td>
                                            <td>Luxury Restaurant</td>
                                            <td>23 Jan 2020</td>
                                            <td class="rating"><span>5.0</span></td>
                                            <td class="status"><span class=" active">Active</span></td>
                                            <td class="activate"><a href="#"><i class="fa fa-check " style="color: green;"></i></a></td>

                                        </tr>


                                </tbody>
                            </table>

                        </div>
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="btn btn-common text-white" href="#">Previous <i class="lni-chevron-right"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                                    <li class="page-item"><a class="btn btn-common text-white" href="#">Next <i class="lni-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>



<div class="my-properties">
    <table class="table-responsive">
        <thead>
            <tr>
                <th>Messages</th>
                <th class="pl-2">Expéditeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($messages as $item)
            <tr>
                <td>
                <textarea hidden  cols="30" class="form-control border-0"></textarea>
                {{ $item->message }}
                </td>
                <td>
                    <div class="inner">
                        <h2>{{ $item->nom_prenom }}</h2>
                        <figure><i class="lni-map-marker"></i> {{ $item->email }} / {{ $item->telephone }}</figure>
                        <h6>{{ $item->created_at }}</h2>
                    </div>
                </td>
                <td class="actions">
                    
                    <a href="#" class="delete-icon" data-id="{{ $item->id }}">
                        <i class="far fa-trash-alt"></i>
                    </a>
                 
                    <!-- Formulaire caché -->
                    <form id="post{{ $item->id }}" action="{{ route('suppression') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="message_sup_id" value="{{ $item->id }}">
                    </form>
                </td>
            </tr>
            <!-- The Modal -->
            <div id="myModal-{{ $item->id }}" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Voulez-vous vraiment supprimer "{{ $item->message }}" ?</p>
                    <a onclick="document.getElementById('post{{ $item->id }}').submit(); return false;" class="btn btn-warning btn-xs ml-5 mr-5 border-0" id="confirm-delete">Oui</a>
                    <button class="btn btn-info btn-xs ml-5 mr-5 border-0" id="cancel-delete">Non</button>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    @if($messages->isNotEmpty())
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">

                {{-- Bouton Previous --}}
                @if ($messages->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $messages->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                {{-- Affichage des pages --}}
                @foreach ($messages->getUrlRange(1, $messages->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $messages->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Bouton Next --}}
                @if ($messages->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $messages->nextPageUrl() }}">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif

            </ul>
        </nav>
    </div>
    @else
    <div class="pagination-container">
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link " href="{{ $messages->previousPageUrl() }}">Pas de message pour le moment</a>
                </li>
                
            </ul>
        </nav>
    </div>
    @endif

</div>

@endsection

@section('js')


<script src="{{asset('assets/admin/js/inner.js')}}"></script>

@endsection
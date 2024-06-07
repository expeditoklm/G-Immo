<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use Auth;
use App\Models\Patient;
use App\Models\Propriete;
use App\Models\TypePropriete;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function acceuil()
    {
        $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function($query) {
            $query->where('proprietes.status', 'For Sale');
        }])
        ->get();

        $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function($query) {
            $query->where('proprietes.status', 'Rental');
        }])
        ->get();

        $uniqueCities = Propriete::select('ville')->distinct()->get();

        $nbResidential = Propriete::where('type_propriete_id', 1)->count();
        $nbCommercial = Propriete::where('type_propriete_id', 2)->count();
        $nbFarm = Propriete::where('type_propriete_id', 3)->count();
        $nbLand = Propriete::where('type_propriete_id', 4)->count();
        $nbDuplex = Propriete::where('type_propriete_id', 5)->count();
        $nbOffice = Propriete::where('type_propriete_id', 6)->count();
        $nbApartment = Propriete::where('type_propriete_id', 7)->count();
        $nbWarehouse = Propriete::where('type_propriete_id', 8)->count();


        $propertiesForSalle = Propriete::where('status', 'For Sale')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();


        $propertiesHouse = Propriete::where('type_propriete_id', 1)
            ->orWhere('type_propriete_id', 5)
            ->orWhere('type_propriete_id', 7)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();


        $propertiesVilla = Propriete::where('type_propriete_id', 1)
            ->orWhere('prix', DB::raw('(SELECT MAX(prix) FROM proprietes)'))
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();


        $propertiesRental = Propriete::where('status', 'Rental')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();


        $propertiesApartment = Propriete::where('type_propriete_id', 7)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();


        $propertiesParcel = Propriete::where('type_propriete_id', 3)
            ->orWhere('type_propriete_id', 4)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        $propertiesCommercial = Propriete::where('type_propriete_id', 8)
            ->orWhere('type_propriete_id', 2)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();



        $propertiesHigh = Propriete::orderBy('prix', 'desc')
            ->limit(4)
            ->get();

        $propertiesForSale = Propriete::where('status', 'For Sale')
            ->orderBy('prix', 'asc')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $comments = Comment::where('note', '>', 3)
            ->whereHas('user')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();


        //dd($comments);
        return view('pages/acceuil', compact(
            'typeProprieteForSale',
            'typeProprieteRental',
            'uniqueCities',
            'nbResidential',
            'nbCommercial',
            'nbFarm',
            'nbLand',
            'nbDuplex',
            'nbOffice',
            'nbApartment',
            'nbWarehouse',
            'propertiesForSalle',
            'propertiesHouse',
            'propertiesVilla',
            'propertiesRental',
            'propertiesApartment',
            'propertiesParcel',
            'propertiesCommercial',
            'propertiesHigh',
            'propertiesForSale',
            'comments'

        ));
    }


    public function search()
    {
        $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function($query) {
            $query->where('proprietes.status', 'For Sale');
        }])
        ->get();

        $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function($query) {
            $query->where('proprietes.status', 'Rental');
        }])
        ->get();

        $uniqueCities = Propriete::select('ville')->distinct()->get();

        $properties = Propriete::paginate(10);
        return view('pages/search',compact(
            'properties',
            'typeProprieteForSale',
            'typeProprieteRental',
            'uniqueCities'

        ));
    }


    public function searchPost(Request $request)
    {
        $typeProprieteForSale = TypePropriete::withCount(['proprietes as proprietes_count' => function($query) {
            $query->where('proprietes.status', 'For Sale');
        }])
        ->get();

        $typeProprieteRental = TypePropriete::withCount(['proprietes as proprietes_count' => function($query) {
            $query->where('proprietes.status', 'Rental');
        }])
        ->get();

        $uniqueCities = Propriete::select('ville')->distinct()->get();


        // Retrieve the form inputs
        $status = $request->input('status');
        $type_propriete_id = $request->input('type_propriete_id');
        $ville = $request->input('ville');
        $prix = $request->input('prix');
        $nbChambre = $request->input('nbChambre');
        $nbPiece = $request->input('nbPiece');

        $query = Propriete::query();

        if (!empty($status)) {
            $query->where('status', $status);
        }

        if (!empty($type_propriete_id)) {
            $query->where('type_propriete_id', $type_propriete_id);
        }

        if (!empty($ville)) {
            $query->where('ville', $ville);
        }

        if (!empty($prix)) {
            $query->where('prix', $prix);
        }

        if (!empty($nbChambre)) {
            $query->where('nbChambre', $nbChambre);
        }

        if (!empty($nbPiece)) {
            $query->where('nbPiece', $nbPiece);
        }
        $properties = $query->paginate(10)->appends($request->except('page'));

        //dd($properties);

        // Return the results to the view
        return view('pages/search', compact(
            'properties',
            'typeProprieteForSale',
            'typeProprieteRental',
            'uniqueCities'
        ));
    }





  

    public function details()
    {
        return view('pages/details');
    }

    public function single(Request $request)
    {
        $id = $request->id;
        
        $propertiesSingle = Propriete::where('id', $id)->first();
        //dd($propertiesSingle);
        return view('pages/single',compact('propertiesSingle'));
    }

    public function contactUs()
    {
        return view('pages/contact-us');
    }

    public function account()
    {
        return view('pages/account');
    }

    public function agent()
    {
        return view('pages/agent');
    }



    public function dashbord()
    {
        $nbProperties = Propriete::where('user_id', 'personne connecte id ')->count();
        $nbReviews = Comment::where('user_id', 'personne connecte id ')->count();
        $nbMessages = Message::where('user_id', 'personne connecte id ')->count();

        $Messages = Message::where('user_id', 'personne connecte id ')
        ->limit(3)
        ->order_by('created_at','desc')
        ->get();


        $Reviews = Comment::where('user_id', 'personne connecte id ')
        ->limit(3)
        ->order_by('created_at','desc')
        ->get();

        return view('admin/dashbord');
    }

    public function userProfile()
    {
        return view('admin/profile');
    }



    public function myProperties()
    {
        $Reviews = Comment::where('user_id', 'personne connecte id ')->get();
        return view('admin/my-properties');
    }

    public function addProperty()
    {
        return view('admin/add-property');
    }

    public function messages()
    {
        return view('admin/messages');
    }

    public function reviews()
    {
        return view('admin/reviews');
    }
}

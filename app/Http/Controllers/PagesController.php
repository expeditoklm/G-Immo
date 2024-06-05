<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Patient;
use App\Models\Propriete;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function acceuil()
    {
        $nbResidential= Propriete::where('type_propriete_id', 1)->count();
        $nbCommercial= Propriete::where('type_propriete_id', 2)->count();
        $nbFarm= Propriete::where('type_propriete_id', 3)->count();
        $nbLand= Propriete::where('type_propriete_id', 4)->count();
        $nbDuplex= Propriete::where('type_propriete_id', 5)->count();
        $nbOffice= Propriete::where('type_propriete_id', 6)->count();
        $nbApartment= Propriete::where('type_propriete_id', 7)->count();
        $nbWarehouse= Propriete::where('type_propriete_id', 8)->count();



        $propertiesForSalle = Propriete::
        where('status', 'For Sale')
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
    

        $propertiesRental = Propriete::
        where('status', 'Rental')
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

        $propertiesHigh = Propriete::where('prix', DB::raw('(SELECT MAX(prix) FROM proprietes)'))
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();


        return view('pages/acceuil',compact(
        'nbResidential','nbCommercial','nbFarm',
        'nbLand','nbDuplex','nbOffice','nbApartment','nbWarehouse',
        'propertiesForSalle','propertiesHouse','propertiesVilla',
        'propertiesRental','propertiesApartment','propertiesParcel',
        'propertiesCommercial','propertiesHigh'
    
        ));
    }

    public function search()
    {
        return view('pages/search');
    }

    public function details()
    {
        return view('pages/details');
    }

    public function single()
    {
        return view('pages/single');
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
        return view('admin/dashbord');
    }

    public function userProfile()
    {
        return view('admin/profile');
    }



    public function myProperties()
    {
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
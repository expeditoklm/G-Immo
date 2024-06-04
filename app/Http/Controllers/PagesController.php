<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Patient;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;


class PagesController extends Controller
{

    public function acceuil()
    {
        return view('pages/acceuil');
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
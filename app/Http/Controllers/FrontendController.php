<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Rent;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $properties=Property::all();
        $rents= Rent::all();
        return view('frontend.pages.index', compact('properties','rents'));   
    }

    public function Pdetails(){

        return view('frontend.pages.property_details');
    }

    public function Plist(){

        return view('frontend.pages.property_list');
    }

    public function About(){

        return view('frontend.pages.about');
    }

    public function Ulogin(){

        return view('frontend.pages.user_login');
    }

    public function Communication(){

        return view('frontend.pages.contact');
    }
}

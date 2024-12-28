<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Rent;
use App\Models\About;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $abouts = About::get();
        $rents = Rent::all();
        return view('frontend.pages.index', compact('properties', 'rents', 'abouts'));   
    }


    public function Pdetails(){

        return view('frontend.pages.property_details');
    }

    public function Plist(){

        return view('frontend.pages.property_list');
    }

    public function About()
    {
        $about = About::first(); // Retrieve the first record
        return view('frontend.pages.about', compact('about'));
    }

    public function Ulogin(){

        return view('frontend.pages.user_login');
    }

    public function Communication(){

        return view('frontend.pages.contact');
    }
}

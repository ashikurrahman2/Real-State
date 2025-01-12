<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Rent;
use App\Models\About;
use App\Models\Land;
use App\Models\setting;
use App\Models\Agent;
use App\Models\Partner;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $abouts = About::get();
        $newses = News::all();
        $agents = Agent::all();
        $settings = setting::get();
        $partners = Partner::paginate(10);
        $rents = Rent::all();
        return view('frontend.pages.index', compact('properties', 'rents', 'settings', 'abouts','newses','agents','partners'));   
    }


    public function Pdetails(){
        $abouts = About::get();
        $properties=Property::all();
        return view('frontend.pages.property_details', compact('properties','abouts'));
    }

    public function Plist(){
        $abouts = About::get();
        $properties = Property::all();
        return view('frontend.pages.property_list',compact('properties','abouts'));
    }

    public function About()
    {
        $abouts = About::get(); // Retrieve the first record
        return view('frontend.pages.about', compact('abouts'));
    }

    // public function Ulogin(){

    //     return view('frontend.pages.user_login');
    // }

    public function Communication(){
        $abouts = About::get();
        return view('frontend.pages.contact',compact('abouts'));
    }

    public function partnerDetails(){
        $partners=Partner::all();
        $abouts = About::get();
        return view('frontend.pages.partner_collabration', compact('partners', 'abouts'));
    }

    public function Career(){
        $abouts = About::get();
        $lands = Land::all();
        return view('frontend.pages.career_form', compact('abouts','lands'));
    }

    public function JobApplication(){
        $abouts = About::get();
        return view('frontend.pages.job_application', compact('abouts'));
    }

    public function Rent(){
        $abouts = About::get();
        return view('frontend.pages.rent_property', compact('abouts'));
    }

    public function rentDetails($id)
    {
        $rent = Rent::findOrFail($id); 
        $abouts = About::all();
        return view('frontend.pages.rent_details', compact('rent', 'abouts'));
    }

}

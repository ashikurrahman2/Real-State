<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sell;
use App\Models\About;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class SellController extends Controller
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index()
    {
        return view('user.profile');
    }


public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'zilla' => 'required|string|max:100',
            'bds' => 'nullable|string|max:100',
            'morrja' => 'nullable|string|max:100',
            'category' => 'required|string',
            'road' => 'nullable|string|max:100',
            'bayna' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        // dd($request->all()); 
        Sell::newSell($request);
        $this->toastr->success('Sell form submitted successfully!!');
        return back();
    }

    public function Cart()
    {   
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'zilla' => 'required|string|max:100',
            'bds' => 'nullable|string|max:100',
            'morrja' => 'nullable|string|max:100',
            'category' => 'required|string',
            'road' => 'nullable|string|max:100',
            'bayna' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        Sell::newSell($request);
        $this->toastr->success('Cart info form submitted successfully!!');
        return back();
    }

    
    public function CartView(){

        $sells=Sell::all();
        $abouts=About::all();
        return view('frontend.pages.cart_view', compact('sells','abouts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
        
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Home()
    {
        $Testimonials = Testimonials::get();
        return view('Pages.Home',[
            'Testimonials'=>$Testimonials
        ]);
    }

    public function Contact()
    {
        return view('Pages.Contact');
    }

    public function Product()
    {
        
        return view('Pages.Product',[
            'Prices'=>Pricing::get()
        ]);
    }
}

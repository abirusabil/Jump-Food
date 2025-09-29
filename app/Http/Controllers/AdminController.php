<?php

namespace App\Http\Controllers;

use App\Models\FoodSchedule;
use App\Models\Menu;
use App\Models\Pricing;
use App\Models\Testimonials;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
    } 
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $Price = Pricing::get();
        $Menus = Menu::get();
        $FoodSchedules = FoodSchedule::with('User','MenuSunday','MenuMonday','MenuThusday','MenuWednesday','MenuThursday','MenuFriday','MenuSaturday')->get();
        $Testimonials = Testimonials::get();
        $Customers = User::with('Payment.Pricing')->where('Akses',null)->get();
        return view('Pages.Admin',[
            'Prices'=>$Price,
            'Menus'=>$Menus,
            'FoodSchedules'=>$FoodSchedules,
            'Testimonials'=>$Testimonials,
            'Customers'=>$Customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}

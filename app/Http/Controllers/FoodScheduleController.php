<?php

namespace App\Http\Controllers;

use App\Models\FoodSchedule;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class FoodScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Users = User::get();
        $Menus = Menu::get();
        return view('Pages.FormFoodSchedule',[
           'Users'=> $Users,
           'Menus'=>$Menus
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       FoodSchedule::create([
        'UserId'=>$request->UserId,
        'Sunday'=>$request->Sunday,
        'Monday'=>$request->Monday,
        'Thusday'=>$request->Thusday,
        'Wednesday'=>$request->Wednesday,
        'Thursday'=>$request->Thursday,
        'Friday'=>$request->Friday,
        'Saturday'=>$request->Saturday
       ]);
       return redirect('/Admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(FoodSchedule $foodSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodSchedule $foodSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FoodSchedule $FoodSchedule)
    {
        // return $request;
        FoodSchedule::where('id',$request->FoodScheduleId)->update([$request->Day=>$request->MenuId]);
        return redirect('MyProfile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodSchedule $foodSchedule)
    {
        //
    }
}

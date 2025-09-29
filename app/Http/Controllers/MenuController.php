<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
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
        return view('Pages.FormMenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('Picture1');
        
        $Picture1 = time() . '_' . $request->FoodName1 . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/img/asset', $Picture1);
        
        $file = $request->file('Picture2');
        $Picture2 = time() . '_' . $request->FoodName2 . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/img/asset', $Picture2);
        
        $file = $request->file('Picture3');
        $Picture3 = time() . '_' . $request->FoodName3 . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/img/asset', $Picture3);
        

        Menu::create([
            'Picture1'=>$Picture1,
            'FoodName1'=>$request->FoodName1,
            'FoodDescribe1'=>$request->FoodDescribe1,
            'FoodKalori1'=>$request->FoodKalori1,
            'FoodProtein1'=>$request->FoodProtein1,
            'FoodFat1'=>$request->FoodFat1,
            'FoodCarbohydrates1'=>$request->FoodCarbohydrates1,
            'FoodFiber1'=>$request->FoodFiber1,
            'Picture2'=>$Picture2,
            'FoodName2'=>$request->FoodName2,
            'FoodDescribe2'=>$request->FoodDescribe2,
            'FoodKalori2'=>$request->FoodKalori2,
            'FoodProtein2'=>$request->FoodProtein2,
            'FoodFat2'=>$request->FoodFat2,
            'FoodCarbohydrates2'=>$request->FoodCarbohydrates2,
            'FoodFiber2'=>$request->FoodFiber2,
            'Picture3'=>$Picture3,
            'FoodName3'=>$request->FoodName3,
            'FoodDescribe3'=>$request->FoodDescribe3,
            'FoodKalori3'=>$request->FoodKalori3,
            'FoodProtein3'=>$request->FoodProtein3,
            'FoodFat3'=>$request->FoodFat3,
            'FoodCarbohydrates3'=>$request->FoodCarbohydrates3,
            'FoodFiber3'=>$request->FoodFiber3,
        ]);

        return redirect('/Admin');


    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}

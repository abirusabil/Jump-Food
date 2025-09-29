<?php

namespace App\Http\Controllers;

use App\Models\FoodSchedule;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\Pricing;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function __construct()
    {
        $this->middleware('auth');
        
    } 
    public function index()
    {
        $Profile = Profile::where('UserId',Auth::user()->id)->first();
         $Payment = Payment::where('UserId', Auth::user()->id)->with('Pricing')->latest()->first();
        $FoodSchedules = FoodSchedule::with('User','MenuSunday','MenuMonday','MenuThusday','MenuWednesday','MenuThursday','MenuFriday','MenuSaturday')->where('UserId',Auth::user()->id)->first();
        return view('Pages.Profile',[
            'Profile'=>$Profile,
            'Payment'=>$Payment,
            'FoodSchedules'=>$FoodSchedules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.EditProfile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $file = $request->file('Picture');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/img/asset', $filename);

        Profile::create([
            'UserId'=>$request->UserId,
            'FullName'=>$request->FullName,
            'Picture'=>$filename,
            'Gender'=>$request->Gender,
            'PhoneNumber'=>$request->PhoneNumber,
            'DateOfBirth'=>$request->DateOfBirth,
            'FullAddress'=>$request->FullAddress,
            'Weight'=>$request->Weight,
            'Height'=>$request->Height,
            'Activity'=>$request->Activity,
            'Allergic'=>$request->Allergic,
            'SpecificDiet'=>$request->SpecificDiet,
            'HealthCondition'=>$request->HealthCondition,
            'PrimaryGoal'=>$request->PrimaryGoal,
        ]);

        return redirect('MyProfile');
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

    public function Package(){
        return view('Pages.Package',[
            'Prices'=>Pricing::get()
        ]);
    }

    public function DetailPayment(Request $request){
        $Pricing = Pricing::where('id',$request->id)->first();
        return view('Pages.Payment',[
            'Pricings'=> $Pricing,
        ]);
    }

    public function DonePayment(Request $request){
        $Pricing = Pricing::where('id',$request->id)->first();
        return view('Pages.DonePayment',[
            'Pricings'=> $Pricing,
            'MethodPayment'=>$request->MethodPayment
        ]);
    }

    public function EditMenu(Request $request){

        // return $request;
        $Menu = Menu::get();
        return view('Pages.EditMenu',[
            'Menus'=>$Menu,
            'Day'=>$request->Day,
            'FoodScheduleId'=>$request->FoodScheduleId
        ]);
    }
    
}

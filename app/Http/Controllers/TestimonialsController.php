<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
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
        return view('Pages.FormTestimonials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $file = $request->file('Picture');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/img/asset', $filename);

        Testimonials::create([
            'FullName'=>$request->FullName,
            'Picture'=>$filename,
            'Job'=>$request->Job,
            'Tagline'=>$request->Tagline,
            'Coment'=>$request->Coment
        ]);

        return redirect('/Admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonials $testimonials)
    {
        //
    }
}

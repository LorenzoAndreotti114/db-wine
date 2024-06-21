<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;

class WineController extends Controller
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

     //GianLivio
    public function create()
    {
        return view("wines.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    //fine Gianlivio
    /**
     * Display the specified resource.
     */

     //Omar
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

    //fine Omar
    /**
     * Update the specified resource in storage.
     */

     //Constantin
    public function update(Request $request, string $id)
    {
        // Validazione degli input
        $request->validate([
            "winery"=> "required|string|max:255",
            "wine"=> "required|string|max:255",
            "rating"=> "required|numeric|min:255|max:5",
            "rating_reviews"=> "required|integer|min:0",
            "location"=> "required|string|max:255",
            "image"=> "nullable|url",
        ]);

        // Trovo il vino specifico tramite l'ID
        $wine = Wine::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //fine constantin
}

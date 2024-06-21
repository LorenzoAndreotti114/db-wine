<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;

class WineController extends Controller
{
    /**
     * Display a listing of the resource. Gianlivio
     */
    public function index()
    {
        // Recupero ii vini dal database
        $wines = Wine::all();

        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */

    //Omar
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    //fine Omar
    /**
     * Display the specified resource.
     */

    //Gianlivio
    public function show(string $id)
    {
        $wine = Wine::findOrFail($id);

       
        return view('wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $wine = Wine::findOrFail($id);
        return view('wines.edit', compact('wine'));
    }

    //fine Gianlivio
    /**
     * Update the specified resource in storage.
     */

    //Constantin
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

    //fine constantin
}

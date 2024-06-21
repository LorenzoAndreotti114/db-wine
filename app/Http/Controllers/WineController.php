<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->validate([
            'winery' => 'nullable|string|max:255',
            'wine' => 'required|string|max:255',
            'rating_average' => 'required',
            'rating_reviews' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'image' => 'required',
        ]);
        //validazione dei valori della tabella richiesti

        if ($request->hasFile('image')) {
            // Salvo il file nel storage e mi crea una nuova cartella in public chiamata wine_images
            $image_path = Storage::put('wine_images', $request->image);
            // salvo il path del file nei dati da inserire nel daabase
            $data['image'] = $image_path;
        }
            // Creazione di un nuovo oggetto Wine e salvataggio nel database
            $newWine = new Wine();
            $newWine->fill($data);
            $newWine->save();;
        
            // Redirezione alla rotta desiderata con un messaggio di successo
            return redirect()->route('wines.index')->with('success', 'Wine created successfully.');
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

        //Aggiorniamo i capi del wine
        $wine->winery = $request->input('winery');
        $wine->wine = $request->input('wine');
        $wine->rating_average = $request->input('rating_average');
        $wine->rating_reviews = $request->input('rating_reviews');
        $wine->location = $request->input('location');
        $wine->image = $request->input('image');

        // Salva le modifiche
        $wine->save();

        // Reindirizza con un messaggio di successo
        return redirect()->route('wines.index')->with('success', 'Wine updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Trova il vino specifico tramite l'ID
        $wine = Wine::findOrFail($id);

        // Elimina il vino
        $wine->delete();

        // Reindirizza con un messaggio di successo
        return redirect()->route('wines.index')->with('success', 'Wine deleted successfully.');

    }

    //fine constantin
}

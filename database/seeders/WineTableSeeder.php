<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Wine;


class WineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withOptions([ 'verify' => false ])->get('https://api.sampleapis.com/wines/reds');

        $data = $response->json();

        foreach ($data as $singleWine) {

            $newWine = new Wine();
            $newWine->winery = $singleWine["winery"];
            $newWine->wine = $singleWine["wine"];
            $newWine->rating_average = $singleWine["rating"]["average"];
            $newWine->rating_reviews = $singleWine["rating"]["reviews"];
            $newWine->location = $singleWine["location"];
            $newWine->image = $singleWine["image"];
            $newWine->save();
            
        }
    }
}

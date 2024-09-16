<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = State::all();
        foreach($states as $state) {
            $cities = json_decode(Storage::get("cidades/{$state->acronym}/cidades.txt"));
            foreach($cities as $city) {
                City::create([
                    "name" => $city, 
                    "state_id" => $state->id, 
                ]);
            }
        }
    }
}

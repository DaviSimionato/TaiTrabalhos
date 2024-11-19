<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\JobListing;
use Illuminate\Http\Request;

class VagasController extends Controller
{
    
    public function vagas() {
        $vagas = JobListing::all();
        foreach($vagas as $vaga) {
            $vaga->city = City::find($vaga->city);
            $vaga->state = State::find($vaga->city->state_id);
        }
        return view("vagas", [
            "vagas" => $vagas
        ]);
    }
}

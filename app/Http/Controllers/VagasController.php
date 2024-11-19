<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\FavoritedListing;
use App\Models\State;
use App\Models\JobListing;
use App\Models\ListingApplication;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VagasController extends Controller
{
    
    public function vagas(Request $request, $search = "") {
        $user = $request->user();
        $vagas = JobListing::all();
        foreach($vagas as $vaga) {
            $vaga->city = City::find($vaga->city_id);
            $vaga->state = State::find($vaga->city->state_id);
            $vaga->company = Company::find($vaga->company_id);
            $vaga->releaseDate = Carbon::parse($vaga->created_at)->addHours(mt_rand(-1460,-3))->format("d/m/Y");
            $vaga->benefits = explode(",",$vaga->benefits);
            $vaga->tags = explode(",",$vaga->tags);
            $vaga->isFavorite = false;
            $testFavorite = FavoritedListing::where("user_id", $user->id)
            ->where("job_listing_id", $vaga->id)->first();
            if($testFavorite) {
                $vaga->isFavorite = true;
            }
            $vaga->isApplied = false;
            $testApplied = ListingApplication::where("user_id", $user->id)
            ->where("job_listing_id", $vaga->id)->first();
            if($testApplied) {
                $vaga->isApplied = true;
            }
        }
        return view("vagas", [
            "vagas" => $vagas,
            "search" => $search,
        ]);
    }
}

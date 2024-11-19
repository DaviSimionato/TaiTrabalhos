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

use function PHPSTORM_META\type;

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

    public function applyListing(JobListing $listing, Request $request) {
        $user = $request->user();
        if($user->resume == null || $user->resume == "") {
            return redirect("/user/profile")->with("message", "Adicione um currículo ao seu perfil!");
        }
        $favTest = ListingApplication::where("user_id", $user->id)->where("job_listing_id", $listing->id)->first();
        if($favTest) {
            return redirect("/vagas/desenvolvedor")->with("vagaSelected", $listing->id)
            ->with("message", "Usuário já candidatado!");
        }
        ListingApplication::create([
            "user_id" => $user->id,
            "job_listing_id" => $listing->id,
            "resume" => $user->resume
        ]);
        $listing->candidate_count++;
        $listing->update();
        return redirect("/vagas/desenvolvedor")->with("vagaSelected", $listing->id)
        ->with("message", "Currículo enviado!");
    }

    public function favoriteListing(JobListing $listing, Request $request) {
        $user = $request->user();
        $favTest = FavoritedListing::where("user_id", $user->id)->where("job_listing_id", $listing->id)->first();
        if(!$favTest) {
            FavoritedListing::create([
                "user_id" => $user->id,
                "job_listing_id" => $listing->id
            ]);
        }
        return redirect("/vagas/desenvolvedor")->with("vagaSelected", $listing->id)
        ->with("message", "Vaga adicionada aos favoritos!");
    }

    public function removeFavoriteListing(JobListing $listing, Request $request) {
        $user = $request->user();
        $favTest = FavoritedListing::where("user_id", $user->id)->where("job_listing_id", $listing->id)->first();
        if($favTest) {
            $favTest->delete();
        }
        return redirect("/vagas/desenvolvedor")->with("vagaSelected", $listing->id)
        ->with("message", "Vaga removida dos favoritos!");
    }
}

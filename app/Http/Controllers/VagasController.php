<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Company;
use App\Models\JobListing;
use Illuminate\Http\Request;
use App\Models\FavoritedListing;

use App\Models\ListingApplication;

class VagasController extends Controller
{

    public function vaga(Request $request, JobListing $listing) {
        $user = $request->user();
        $listing->city = City::find($listing->city_id);
        $listing->state = State::find($listing->city->state_id);
        $listing->company = Company::find($listing->company_id);
        $listing->releaseDate = Carbon::parse($listing->created_at)->addHours(mt_rand(-1460,-3))->format("d/m/Y");
        $listing->benefits = explode(",",$listing->benefits);
        $listing->tags = explode(",",$listing->tags);
        $listing->isFavorite = false;
        $testFavorite = FavoritedListing::where("user_id", $user->id)
        ->where("job_listing_id", $listing->id)->first();
        if($testFavorite) {
            $listing->isFavorite = true;
        }
        $listing->isApplied = false;
        $testApplied = ListingApplication::where("user_id", $user->id)
        ->where("job_listing_id", $listing->id)->first();
        if($testApplied) {
            $listing->isApplied = true;
        }
        return view("vaga", [
            "vaga" => $listing,
            "search" => $listing->title
        ]);
    }
    
    public function vagas(Request $request, $search = "") {
        $user = $request->user();
        if(trim($search) != "") {
            $search = str_replace("-", " ", $search);
            $secondSearch = str_replace(" ", "", $search);
            $vagas = JobListing::where("title", "like", "%$search%")
            ->orWhere("tags", "like", "%$search%")
            ->orWhere("title", "like", "%$secondSearch%")
            ->orWhere("tags", "like", "%$secondSearch%")->get();
        }else {
            if($user->job_preference == null) {
                $vagas = JobListing::all();
            }else {
                $search = str_replace("-", " ", $user->job_preference);
                $secondSearch = str_replace(" ", "", $search);
                $vagas = JobListing::where("title", "like", "%$search%")
                ->orWhere("tags", "like", "%$search%")
                ->orWhere("title", "like", "%$secondSearch%")
                ->orWhere("tags", "like", "%$secondSearch%")->get();
            }
        }
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

    public function appliedListingsPage(Request $request) {
        $user = $request->user();
        $listings = ListingApplication::where("user_id", $user->id)->get();
        $vagas = [];
        foreach($listings as $listing) {
            $listing = JobListing::where("id", $listing->job_listing_id)->first();
            $listing->city = City::find($listing->city_id);
            $listing->state = State::find($listing->city->state_id);
            $listing->company = Company::find($listing->company_id);
            array_push($vagas, $listing);
        }
        return view("user.applied-listings", [
            "user" => $user,
            "vagas" => $vagas
        ]);
    }

    public function applyListing(JobListing $listing, Request $request) {
        $user = $request->user();
        if($user->user_name == null || $user->user_name == "" || $user->name == null || $user->name == "") {
            return redirect("/user/profile")->with("message", "Finalize a configuração da sua conta!");
        }
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

    public function deleteListingApplication(Request $request, JobListing $listing) {
        $user = $request->user();
        $application = ListingApplication::where("user_id", $user->id)
        ->where("job_listing_id", $listing->id)->first();
        if($application) {
            $listing->candidate_count--;
            $listing->update();
            $application->delete();
        }
        return redirect("/user/profile/applied-listings")->with("message", "Participação removida com sucesso!");
    }

    public function favoriteListingsPage(Request $request) {
        $user = $request->user();
        $listings = FavoritedListing::where("user_id", $user->id)->get();
        $vagas = [];
        foreach($listings as $listing) {
            $listing = JobListing::where("id", $listing->job_listing_id)->first();
            $listing->city = City::find($listing->city_id);
            $listing->state = State::find($listing->city->state_id);
            $listing->company = Company::find($listing->company_id);
            array_push($vagas, $listing);
        }
        return view("user.favorite-listings", [
            "user" => $user,
            "vagas" => $vagas
        ]);
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

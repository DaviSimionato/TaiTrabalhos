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

    public function candidatosView(JobListing $listing, Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if(!$company) {
            return redirect("/");
        }
        $appliedListings = ListingApplication::where("job_listing_id", $listing->id)
        ->orderByDesc("id")->get();
        $candidates = [];
        foreach($appliedListings as $listingApp) {
            $lUser = User::find($listingApp->user_id);
            $lUser->resume = $listingApp->resume;
            $lUser->city = City::find($lUser->city);
            $lUser->state = State::find($lUser->state);
            array_push($candidates, $lUser);
        }
        return view("company.candidates", [
            "company" => $company,
            "candidates" => $candidates,
            "vaga" => $listing
        ]);
    }

    public function cadastrarVagaView(Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if ($company) {
            $company->load('jobListings');
            $company->listingCount = $company->jobListings->count();
        } else {
            $company->listingCount = 0;
        }
        $user->city = City::find($company->city_id);
        $user->state = State::find($company->state_id);
        return view("company.register-listing", [
            "user" => $user,
            "company" => $company,
        ]);
    }

    public function cadastrarVaga(Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if(!$company) {
            return redirect("/");
        }
        $jobListing = JobListing::create([
            'title' => $request->title,
            'description' => $request->description,
            'modality' => $request->modality,
            'type' => $request->type,
            'salary' => 'R$' . " " . trim(preg_replace('/[^0-9.,]/', '', $request->salary)),
            'benefits' => $request->benefits,
            'tags' => $request->tags,
            'candidate_count' => 0,
            'city_id' => $request->city_id,
            'company_id' => $company->id,
        ]);
        return redirect("/vaga/$jobListing->id")->with("message", "Vaga cadastrada com sucesso!");
    }

    public function vagasCadastradasView(Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if(!$company) {
            return redirect("/");
        }
        $listings = JobListing::where("company_id", $company->id)
        ->orderByDesc("id")->get();
        $vagas = [];
        foreach($listings as $listing) {
            $listing->city = City::find($listing->city_id);
            $listing->state = State::find($listing->city->state_id);
            $listing->company = $company;
            $listing->salary = str_replace("R$", "", $listing->salary);
            $listing->salary = str_replace(".", "", $listing->salary);
            $listing->salary = str_replace(",", ".", $listing->salary);
            $listing->salary = "R$" . number_format(floatval($listing->salary), 2, ",", ".");
            $listing->releaseDate = Carbon::parse($listing->created_at)->addHours(-3)->format("d/m/Y");
            array_push($vagas, $listing);
        }
        return view("company.listings", [
            "user" => $user,
            "vagas" => $vagas,
            "company" => $company
        ]);
    }

    public function editarVagaView(JobListing $listing, Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if(!$company) {
            return redirect("/");
        }
        $listing->city = City::find($listing->city_id);
        $listing->state = State::find($listing->city->state_id);
        $listing->company = $company;
        $listing->salary = str_replace("R$", "", $listing->salary);
        $listing->salary = str_replace(".", "", $listing->salary);
        $listing->salary = str_replace(",", ".", $listing->salary);
        $listing->salary = number_format(floatval($listing->salary), 2, ",", ".");
        $listing->releaseDate = Carbon::parse($listing->created_at)->addHours(-3)->format("d/m/Y");
        $user->city = City::find($company->city_id);
        $user->state = State::find($company->state_id);
        return view("company.edit-listing", [
            "user" => $user,
            "company" => $company,
            "listing" => $listing
        ]);
    }

    public function editarVaga(JobListing $listing, Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if(!$company) {
            return redirect("/");
        }
        $listing->title = $request->title;
        $listing->description = $request->description;
        $listing->modality = $request->modality;
        $listing->type = $request->type;
        $listing->salary = 'R$ ' . trim(preg_replace('/[^0-9.,]/', '', $request->salary));
        $listing->benefits = $request->benefits;
        $listing->tags = $request->tags;
        $listing->city_id = $request->city_id;
        $listing->update();
        return redirect("/vaga/$listing->id")->with("message", "Vaga editada com sucesso!");
    }

    public function apagarVaga(JobListing $listing, Request $request) {
        $user = $request->user();
        $company = Company::where("user_id", $user->id)->first();
        if(!$company) {
            return redirect("/");
        }
        if($listing->company_id != $company->id) {
            return redirect("/");
        }
        $favListing = FavoritedListing::where("job_listing_id", $listing->id)->get();
        $apliedListing = ListingApplication::where("job_listing_id", $listing->id)->get();
        foreach($favListing as $l) {
            $l->delete();
        }
        foreach($apliedListing as $l) {
            $l->delete();
        }
        $listing->delete();
        return redirect("/vagas-cadastradas")->with("message", "Vaga deletada com sucesso!");
    }

    public function vaga(Request $request, JobListing $listing) {
        $user = $request->user();
        $listing->city = City::find($listing->city_id);
        $listing->state = State::find($listing->city->state_id);
        $listing->company = Company::find($listing->company_id);
        $listing->releaseDate = Carbon::parse($listing->created_at)->addHours(-3)->format("d/m/Y");
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
        $listing->salary = str_replace("R$", "", $listing->salary);
        $listing->salary = str_replace(".", "", $listing->salary);
        $listing->salary = str_replace(",", ".", $listing->salary);
        $listing->salary = "R$" . number_format(floatval($listing->salary), 2, ",", ".");
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
            ->orWhere("tags", "like", "%$secondSearch%")
            ->orderByDesc("id")->get();
        }else {
            if($user->job_preference == null) {
                $vagas = JobListing::orderByDesc("id")->get();
            }else {
                $search = str_replace("-", " ", $user->job_preference);
                $secondSearch = str_replace(" ", "", $search);
                $vagas = JobListing::where("title", "like", "%$search%")
                ->orWhere("tags", "like", "%$search%")
                ->orWhere("title", "like", "%$secondSearch%")
                ->orWhere("tags", "like", "%$secondSearch%")
                ->orderByDesc("id")->get();
            }
        }
        foreach($vagas as $vaga) {
            $vaga->city = City::find($vaga->city_id);
            $vaga->state = State::find($vaga->city->state_id);
            $vaga->company = Company::find($vaga->company_id);
            $vaga->releaseDate = Carbon::parse($vaga->created_at)->addHours(-3)->format("d/m/Y");
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
            $vaga->salary = str_replace("R$", "", $vaga->salary);
            $vaga->salary = str_replace(".", "", $vaga->salary);
            $vaga->salary = str_replace(",", ".", $vaga->salary);
            $vaga->salary = "R$" . number_format(floatval($vaga->salary), 2, ",", ".");
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
            $listingData = JobListing::where("id", $listing->job_listing_id)->first();
            $listingData->city = City::find($listingData->city_id);
            $listingData->state = State::find($listingData->city->state_id);
            $listingData->company = Company::find($listingData->company_id);
            $listingData->resume = $listing->resume;
            array_push($vagas, $listingData);
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
        return back()->with("vagaSelected", $listing->id)
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
        if($user->type === "company") {
            $company = Company::where("user_id", $user->id)->first();
            return view("company.favorite-listings", [
                "user" => $user,
                "vagas" => $vagas,
                "company" => $company
            ]);
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
        return back()->with("vagaSelected", $listing->id)
        ->with("message", "Vaga adicionada aos favoritos!");
    }

    public function removeFavoriteListing(JobListing $listing, Request $request) {
        $user = $request->user();
        $favTest = FavoritedListing::where("user_id", $user->id)->where("job_listing_id", $listing->id)->first();
        if($favTest) {
            $favTest->delete();
        }
        return back()->with("vagaSelected", $listing->id)
        ->with("message", "Vaga removida dos favoritos!");
    }
}

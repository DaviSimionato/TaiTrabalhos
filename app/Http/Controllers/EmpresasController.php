<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\City;
use App\Models\State;
use App\Models\Company;
use App\Models\JobListing;
use Illuminate\Http\Request;
use App\Models\FavoritedListing;
use App\Models\ListingApplication;

class EmpresasController extends Controller
{
    
    public function login() {
        return view('company.login');
    }

    public function registrarView() {
        return view("company.register");
    }

    public function companiesView() {
        $companies = Company::orderBy("employees_count")->get();
        foreach($companies as $comp) {
            $listings = JobListing::Where("company_id", $comp->id)->get();
            $comp->listing_count = $listings->count();
            $comp->city = City::find($comp->city_id);
            $comp->state = State::find($comp->city->state_id);
            $comp->member_since = Carbon::parse($comp->created_at->subHours(3))->format("d/m/Y");
            $salaries = $listings->map(function ($listing) {
                $salary = str_replace(["R$", "."], "", $listing->salary);
                $salary = str_replace(",", ".", $salary); 
                return floatval($salary);
            });
            $comp->avgSalary = "R$" . number_format($salaries->avg(), 2, ",", ".");
        }
        return view("companies", [
            "companies" => $companies
        ]);
    }

    public function searchCompanies($search = "") {
        if(trim($search) != "") {
            $search = str_replace("-", " ", $search);
            $secondSearch = str_replace(" ", "", $search);
            $companies = Company::where("name", "like", "%$search%")
            ->orWhere("name", "like", "%$secondSearch%")
            ->orWhere("sector", "like", "%$search%")
            ->orWhere("sector", "like", "%$secondSearch%")->get();
        }else {
            $companies = Company::all();
        }

        foreach($companies as $comp) {
            $listings = JobListing::Where("company_id", $comp->id)->get();
            $comp->listing_count = $listings->count();
            $comp->city = City::find($comp->city_id);
            $comp->state = State::find($comp->city->state_id);
            $comp->member_since = Carbon::parse($comp->created_at->subHours(3))->format("d/m/Y");
            $salaries = $listings->map(function ($listing) {
                $salary = str_replace(["R$", "."], "", $listing->salary);
                $salary = str_replace(",", ".", $salary); 
                return floatval($salary);
            });
            $comp->avgSalary = "R$" . number_format($salaries->avg(), 2, ",", ".");
        }
        return view("companies", [
            "companies" => $companies
        ]);
    }

    public function vagas(Request $request, Company $company) {
        $user = $request->user();
        $vagas = JobListing::where("company_id", $company->id)->get();
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
            "search" => str_replace(["'","@","$","%"], "", $company->name),
        ]);
    }
}

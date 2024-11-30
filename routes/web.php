<?php

use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\SalariosController;

Route::get("/", function () {
    // $states = State::all();
    //     foreach($states as $state) {
    //         $stateName = $state->acronym . "-" . str_replace(" ", "", $state->state);
    //         $cities = json_decode(Storage::get("cidades/$stateName/cidades.txt"));
    //         foreach($cities as $city) {
    //             City::create([
    //                 "name" => $city, 
    //                 "state_id" => $state->id, 
    //             ]);
    //         }
    //     }
    return view("index");
});
Route::get("/login", [UserController::class, "login"])->middleware("guest");

Route::middleware("auth")->group(function () {
    Route::get("/vagas", [VagasController::class, "vagas"]);
    Route::get("/vaga/{listing}", [VagasController::class, "vaga"]);
    Route::get("/vagas/{search}", [VagasController::class, "vagas"])->where("vaga", ".*");
    Route::get("/user/favorite-listing/{listing}", [VagasController::class, "favoriteListing"]);
    Route::get("/user/remove-favorite-listing/{listing}", [VagasController::class, "removeFavoriteListing"]);
    Route::get("/user/profile/delete-application/{listing}", [VagasController::class, "deleteListingApplication"]);
    Route::get("/listing/apply/{listing}", [VagasController::class, "applyListing"]);
    Route::get("/logout", [UserController::class, "logout"]);
    Route::get("/user/profile", [UserController::class, "profile"]);
    Route::get("/user/profile/favorite-listings", [VagasController::class, "favoriteListingsPage"]);
    Route::get("/user/profile/applied-listings", [VagasController::class, "appliedListingsPage"]);
    Route::post("/user/update-resume", [UserController::class, "updateResume"]);
    Route::get("/user/profile/delete-resume", [UserController::class, "deleteResume"]);
    Route::post("/user/config/update-user-data", [UserController::class, "updateUserData"]);
    Route::get("/empresas", [EmpresasController::class, "companiesView"]);
    Route::get("/empresas/{search}", [EmpresasController::class, "searchCompanies"]);
    Route::get("/empresa/{company}/vagas", [EmpresasController::class, "vagas"]);
    Route::get("/salarios", [SalariosController::class, "teste"]);
    Route::get("/para-empresas", [EmpresasController::class, "teste"]);
});
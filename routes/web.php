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
    Route::get("/vagas/{vaga}", [VagasController::class, "vagas"])->where("vaga", ".*");
    Route::get("/logout", [UserController::class, "logout"]);
    Route::get("/user/profile", [UserController::class, "profile"]);
    Route::post("/user/update-resume", [UserController::class, "updateResume"]);
    Route::get("/empresas", [EmpresasController::class, "teste"]);
    Route::get("/salarios", [SalariosController::class, "teste"]);
    Route::get("/para-empresas", [EmpresasController::class, "teste"]);
});
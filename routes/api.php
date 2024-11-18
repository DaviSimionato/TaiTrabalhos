<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Json;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::post("check-email", [UserController::class, "checkEmail"])->middleware("web",Json::class);
Route::post("create-account", [UserController::class, "createAccount"])->middleware("web", Json::class);
Route::post("login", [UserController::class, "authenticate"])->middleware("web", Json::class);

Route::get("/cidades/{uf}", function($uf) {
    $state = State::where("acronym", $uf)->first();
    $cidades = City::where("state_id", $state->id)->get();
    return response()->json([
        "cidades" => $cidades
    ]);
});

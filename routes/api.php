<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::post("check-email", [UserController::class, "checkEmail"])->middleware("web",Json::class);
Route::post("create-account", [UserController::class, "createAccount"])->middleware("web", Json::class);
Route::post("login", [UserController::class, "authenticate"])->middleware("web", Json::class);

Route::get("/cidades/{uf}", function($uf) {
    $cidades = json_decode(Storage::get("cidades/$uf/cidades.txt"));
    $estados = [];
    foreach(Storage::allDirectories("cidades/") as $estado) {
        $estado = substr($estado, -2);
        array_push($estados, $estado);
    };
    return response()->json([
        "estados" => $estados,
        "cidades" => $cidades
    ]);
});

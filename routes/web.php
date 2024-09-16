<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\SalariosController;
use App\Http\Controllers\UserController;

Route::get("/", function () {
    return view("index");
});
Route::get("/login", [UserController::class, "login"])->middleware("guest");

Route::middleware("auth")->group(function () {
    Route::get("/vagas", [VagasController::class, "vagas"]);
    Route::get("/vagas/{vaga}", [VagasController::class, "vagas"])->where("vaga", ".*");
    Route::get("/logout", [UserController::class, "logout"]);
    Route::get("/empresas", [EmpresasController::class, "teste"]);
    Route::get("/salarios", [SalariosController::class, "teste"]);
    Route::get("/para-empresas", [EmpresasController::class, "teste"]);
});
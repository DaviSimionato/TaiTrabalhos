<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    
    public function vagas() {
        return view("vagas");
    }
}

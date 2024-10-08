<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function login() {
        return view("login");
    }

    public function authenticate(Request $request) {
        $userInput = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ], [
            "password.required" => "O campo senha é obrigatório",
        ]);
        if(Auth::attempt($userInput)) {
            request()->session()->regenerate();
            return response()->json([
                "message" => "success"
            ]);
        }else {
            return response()->json([
                "errors" => [
                    "password" => ["Dados inválidos"]
                ]
            ], 401);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/")->with("mensagem", "Usuário desconectado!");
    }

    public function checkEmail(Request $request) {
        $email = $request->validate([
            "email" => "required|email"
        ], [
            "email.required" => "Preencha o campo de e-mail",
            "email.email" => "Insira um e-mail válido",
            
        ])["email"];
        $user = User::where("email", $email)->first();
        if(!$user) {
            return response()->json([
                "message" => "no user found"
            ], 200);
        }
        return response()->json([
            "message" => "user found"
        ], 200);
    }

    public function createAccount(Request $request) {
        $userInput = $request->validate([
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed"
        ], [
            "password.required" => "O campo senha é obrigatório",
            "password.confirmed" => "As senhas não se repetem"
        ]);
        $user = User::create([
            "email" => $userInput["email"],
            "password" => bcrypt($userInput["password"])
        ]);
        Auth::guard("web")->login($user);
        return response()->json([
            "message" => "success"
        ], 201);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function profile(Request $request) {
        $user = $request->user();
        $user->city = City::find($user->city);
        $user->state = State::find($user->state);
        return view("user.profile", [
            "user" => $user
        ]);
    }

    public function updateUserData(Request $request) {
        $user = $request->user();
        // $request->headers->set('Accept', 'application/json');
        $userData = $request->validate([
            "user_name" => "string|max:48",
            "name" => "string|max:120",
            "current_situation" => "string|in:Trabalhando,Buscando emprego",
            "current_position" => "string|max:72",
            "state" => "exists:states,acronym|nullable",
            "city" => "exists:cities,id|integer|nullable",
            "company" => "string|max:72"
        ]);
        $state = State::where("acronym", $userData["state"])->first();
        if($state) {
            $userData["state"] = $state->id;
        }
        $modifiedData = false;
        foreach($userData as $data => $value) {
            if($value == "Não definido" || $value == "Nome não definido") {
                $value = null;
            }
            if ($value !== $user->$data) {
                $user->$data = $value;
                $modifiedData = true;
            }
        }
        if($modifiedData) {
            $user->update();
            return redirect("/user/profile")->with("message", "Dados alterados com sucesso!");
        }
        return redirect("/user/profile")->with("message", "Nenhuma alteração realizada!");
    }

    public function updateResume(Request $request) {
        $user = $request->user();
        $request->validate([
            "resume" => "required|file|max:8024|mimes:pdf,txt,png,jpg,jpeg,webp"
        ]);
        $file = $request->file("resume");
        $path = "resumes/$user->id";
        $filePath = $file->store($path, 'public');
        $user->resume = $filePath;
        $user->update();

        return redirect("/user/profile")->with("message", "Currículo atualizado com sucesso!");
    }

    public function deleteResume(Request $request) {
        $user = $request->user();
        $user->resume = null;
        $user->update();

        return redirect("/user/profile")->with("message", "Currículo removido com sucesso!");
    }
}
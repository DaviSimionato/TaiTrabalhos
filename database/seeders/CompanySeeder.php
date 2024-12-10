<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpFoundation\File\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Company::create([
            "user_id" => User::where("email", "davidstore@dstore.com")->first()->id,
            "name" => "David'store",
            "cnpj" => "14.525.252/0001-85",
            "email" => "davidstore@dstore.com",
            "address" => "Rua das araras, 182",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 20,
            "logo" => "imagens\companies\logo\davidstore-logo.svg",
            "sector" => "Tecnologia da informação",
        ]);
        Company::create([
            "user_id" => User::where("email", "pine@gmail.com")->first()->id,
            "name" => "Pine Tech",
            "cnpj" => "14.525.252/0001-85",
            "email" => "pine@gmail.com",
            "address" => "Rua da cachoeira torta, 540",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 80,
            "logo" => "imagens\companies\logo\pine.png",
            "sector" => "Tecnologia da informação",
        ]);
        Company::create([
            "user_id" => User::where("email", "planet@gmail.com")->first()->id,
            "name" => "Planet",
            "cnpj" => "14.525.252/0001-85",
            "email" => "planet@gmail.com",
            "address" => "Rua das aranhas, 201",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 35,
            "logo" => "imagens\companies\logo\planet.png",
            "sector" => "Tecnologia da informação",
        ]);
    }
}

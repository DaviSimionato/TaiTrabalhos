<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use App\Models\Company;
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
            "user_id" => 1,
            "name" => "David'store",
            "cnpj" => "14.525.252/0001-85",
            "email" => "davidstore@dstore.com",
            "address" => "Rua das araras, 182",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 20,
            "logo" => "imagens\companies\logo\davidstore-logo.svg",
            "sector" => "Tecnologia da informação",
            "password" => bcrypt("123456"),
        ]);
        Company::create([
            "user_id" => 1,
            "name" => "Pine Tech",
            "cnpj" => "14.525.252/0001-85",
            "email" => "pinetech@gmail.com",
            "address" => "Rua da cachoeira torta, 540",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 80,
            "logo" => "imagens\companies\logo\pine.png",
            "sector" => "Tecnologia da informação",
            "password" => bcrypt("123456"),
        ]);
        Company::create([
            "user_id" => 1,
            "name" => "Planet",
            "cnpj" => "14.525.252/0001-85",
            "email" => "planet@gmail.com",
            "address" => "Rua das aranhas, 201",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 35,
            "logo" => "imagens\companies\logo\planet.png",
            "sector" => "Tecnologia da informação",
            "password" => bcrypt("123456"),
        ]);
    }
}

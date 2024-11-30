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
            "name" => "David'store",
            "cnpj" => "14.525.252/0001-85",
            "email" => "davidstore@dstore.com",
            "address" => "Ruas das araras, 182",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 20,
            "logo" => "imagens\companies\logo\davidstore-logo.svg",
            "sector" => "Tecnologia da informação",
            "password" => bcrypt("123456"),
        ]);
        Company::create([
            "name" => "David'store 2",
            "cnpj" => "14.525.252/0001-85",
            "email" => "davidstore@dstore.com",
            "address" => "Ruas das araras, 183",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 20,
            "logo" => "imagens\companies\logo\davidstore-logo.svg",
            "sector" => "Tecnologia da informação",
            "password" => bcrypt("123456"),
        ]);
        Company::create([
            "name" => "David'store 3",
            "cnpj" => "14.525.252/0001-85",
            "email" => "davidstore@dstore.com",
            "address" => "Ruas das araras, 183",
            "city_id" => City::where("name", "Jaú")->first()->id,
            "state_id" => State::where("state", "São Paulo")->first()->id,
            "employees_count" => 20,
            "logo" => "imagens\companies\logo\davidstore-logo.svg",
            "sector" => "Tecnologia da informação",
            "password" => bcrypt("123456"),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "type" => "company",
            "name" => "David'store",
            "user_name" => "David'store",
            "email" => "davidstore@dstore.com",
            "city" => City::where("name", "Jaú")->first()->id,
            "state" => State::where("state", "São Paulo")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
    }
}

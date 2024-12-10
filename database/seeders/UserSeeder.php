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

        User::create([
            "type" => "user",
            "name" => "David Roberto da Silva",
            "user_name" => "David Rob",
            "email" => "david@gmail.com",
            "city" => City::where("name", "Jaú")->first()->id,
            "state" => State::where("state", "São Paulo")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);

        User::create([
            "type" => "user",
            "name" => "Ana Maria Costa",
            "user_name" => "Ana Costa",
            "email" => "ana.costa@gmail.com",
            "city" => City::where("name", "São Paulo")->first()->id,
            "state" => State::where("state", "São Paulo")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "João Pedro Almeida",
            "user_name" => "João P",
            "email" => "joao.pedro@gmail.com",
            "city" => City::where("name", "Rio de Janeiro")->first()->id,
            "state" => State::where("state", "Rio de Janeiro")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Mariana Oliveira Santos",
            "user_name" => "Mari Oli",
            "email" => "mariana.oliveira@gmail.com",
            "city" => City::where("name", "Belo Horizonte")->first()->id,
            "state" => State::where("state", "Minas Gerais")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Felipe Augusto Ramos",
            "user_name" => "Felipe R",
            "email" => "felipe.ramos@gmail.com",
            "city" => City::where("name", "Curitiba")->first()->id,
            "state" => State::where("state", "Paraná")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Lucas Martins Pereira",
            "user_name" => "Lucas MP",
            "email" => "lucas.martins@gmail.com",
            "city" => City::where("name", "Porto Alegre")->first()->id,
            "state" => State::where("state", "Rio Grande do Sul")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Isabela Fernandes Lima",
            "user_name" => "Isa Lima",
            "email" => "isabela.lima@gmail.com",
            "city" => City::where("name", "Florianópolis")->first()->id,
            "state" => State::where("state", "Santa Catarina")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Gabriel Souza Cardoso",
            "user_name" => "Gabe Cardoso",
            "email" => "gabriel.cardoso@gmail.com",
            "city" => City::where("name", "Goiânia")->first()->id,
            "state" => State::where("state", "Goiás")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Carolina Mendes",
            "user_name" => "Carol Mendes",
            "email" => "carolina.mendes@gmail.com",
            "city" => City::where("name", "Fortaleza")->first()->id,
            "state" => State::where("state", "Ceará")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Thiago Alves",
            "user_name" => "Thiago A",
            "email" => "thiago.alves@gmail.com",
            "city" => City::where("name", "Salvador")->first()->id,
            "state" => State::where("state", "Bahia")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Fernanda Rocha",
            "user_name" => "Fernanda R",
            "email" => "fernanda.rocha@gmail.com",
            "city" => City::where("name", "Recife")->first()->id,
            "state" => State::where("state", "Pernambuco")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Daniela Castro",
            "user_name" => "Dani Castro",
            "email" => "daniela.castro@gmail.com",
            "city" => City::where("name", "Manaus")->first()->id,
            "state" => State::where("state", "Amazonas")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Ricardo Dias",
            "user_name" => "Ricardo D",
            "email" => "ricardo.dias@gmail.com",
            "city" => City::where("name", "Natal")->first()->id,
            "state" => State::where("state", "Rio Grande do Norte")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Luiza Campos",
            "user_name" => "Luiza C",
            "email" => "luiza.campos@gmail.com",
            "city" => City::where("name", "Belém")->first()->id,
            "state" => State::where("state", "Pará")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Roberto Freitas",
            "user_name" => "Rob Freitas",
            "email" => "roberto.freitas@gmail.com",
            "city" => City::where("name", "Aracaju")->first()->id,
            "state" => State::where("state", "Sergipe")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
        User::create([
            "type" => "user",
            "name" => "Marcos Silva",
            "user_name" => "Marcos S",
            "email" => "marcos.silva@gmail.com",
            "city" => City::where("name", "Campo Grande")->first()->id,
            "state" => State::where("state", "Mato Grosso do Sul")->first()->id,
            "country" => "Brasil",
            "password" => bcrypt(123456)
        ]);
        
    }
}

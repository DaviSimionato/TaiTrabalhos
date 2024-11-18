<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['state' => 'Acre', 'acronym' => 'AC'],
            ['state' => 'Alagoas', 'acronym' => 'AL'],
            ['state' => 'Amapá', 'acronym' => 'AP'],
            ['state' => 'Amazonas', 'acronym' => 'AM'],
            ['state' => 'Bahia', 'acronym' => 'BA'],
            ['state' => 'Ceará', 'acronym' => 'CE'],
            ['state' => 'Distrito Federal', 'acronym' => 'DF'],
            ['state' => 'Espírito Santo', 'acronym' => 'ES'],
            ['state' => 'Goiás', 'acronym' => 'GO'],
            ['state' => 'Maranhão', 'acronym' => 'MA'],
            ['state' => 'Mato Grosso', 'acronym' => 'MT'],
            ['state' => 'Mato Grosso do Sul', 'acronym' => 'MS'],
            ['state' => 'Minas Gerais', 'acronym' => 'MG'],
            ['state' => 'Pará', 'acronym' => 'PA'],
            ['state' => 'Paraíba', 'acronym' => 'PB'],
            ['state' => 'Paraná', 'acronym' => 'PR'],
            ['state' => 'Pernambuco', 'acronym' => 'PE'],
            ['state' => 'Piauí', 'acronym' => 'PI'],
            ['state' => 'Rio de Janeiro', 'acronym' => 'RJ'],
            ['state' => 'Rio Grande do Norte', 'acronym' => 'RN'],
            ['state' => 'Rio Grande do Sul', 'acronym' => 'RS'],
            ['state' => 'Rondônia', 'acronym' => 'RO'],
            ['state' => 'Roraima', 'acronym' => 'RR'],
            ['state' => 'Santa Catarina', 'acronym' => 'SC'],
            ['state' => 'São Paulo', 'acronym' => 'SP'],
            ['state' => 'Sergipe', 'acronym' => 'SE'],
            ['state' => 'Tocantins', 'acronym' => 'TO'],
        ];
        foreach($states as $state) {
            State::create($state);
        }
    }
}

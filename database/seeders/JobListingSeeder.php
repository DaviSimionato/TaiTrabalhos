<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobListing::create([
            'title' => 'Desenvolvedor Backend PHP',
            'description' => 'Buscamos um desenvolvedor backend PHP experiente para integrar nossa equipe e trabalhar em sistemas escaláveis.',
            'modality' => 'Remoto',
            'type' => 'CLT',
            'salary' => 'R$ 8.000,00',
            'benefits' => 'Vale transporte, Vale refeição, Plano de saúde',
            'tags' => 'PHP, Laravel, API, Backend',
            'candidates_count' => 0,
            'city_id' => 1, 
            // 'category_id' => 1, 
            // 'sub_category_id' => 1, 
            'company_id' => 1, 
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Frontend React',
            'description' => 'Procuramos um desenvolvedor frontend com experiência em React para criação de interfaces de usuário dinâmicas.',
            'modality' => 'Híbrido',
            'type' => 'PJ',
            'salary' => 'R$ 7.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Flexibilidade de horário',
            'tags' => 'React, JavaScript, Frontend, UI/UX',
            'candidates_count' => 0,
            'city_id' => 2,
            // 'category_id' => 1,
            // 'sub_category_id' => 2,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Mobile Flutter',
            'description' => 'Buscamos um desenvolvedor Flutter para trabalhar em projetos de aplicativos móveis.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 9.000,00',
            'benefits' => 'Vale transporte, Plano de saúde, Participação nos lucros',
            'tags' => 'Flutter, Mobile, Desenvolvimento',
            'candidates_count' => 0,
            'city_id' => 3,
            // 'category_id' => 1,
            // 'sub_category_id' => 3,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Fullstack',
            'description' => 'Procuramos um desenvolvedor fullstack para trabalhar em um produto inovador com tecnologias modernas.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 12.000,00',
            'benefits' => 'Vale refeição, Vale transporte, Plano de saúde',
            'tags' => 'JavaScript, React, Node.js, Fullstack',
            'candidates_count' => 0,
            'city_id' => 4,
            // 'category_id' => 1,
            // 'sub_category_id' => 1,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Engenheiro de Software',
            'description' => 'Procuramos engenheiro de software com experiência em soluções em cloud computing.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 13.500,00',
            'benefits' => 'Plano de saúde, Vale refeição, Vale transporte',
            'tags' => 'Engenharia de Software, Cloud, AWS, DevOps',
            'candidates_count' => 0,
            'city_id' => 5,
            // 'category_id' => 1,
            // 'sub_category_id' => 4,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Python',
            'description' => 'Buscamos desenvolvedor Python para trabalhar em backend de soluções de dados.',
            'modality' => 'Remoto',
            'type' => 'CLT',
            'salary' => 'R$ 7.500,00',
            'benefits' => 'Vale refeição, Plano de saúde',
            'tags' => 'Python, Backend, Dados',
            'candidates_count' => 0,
            'city_id' => 6,
            // 'category_id' => 1,
            // 'sub_category_id' => 1,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Node.js',
            'description' => 'Procuramos desenvolvedor Node.js para integrar nossa equipe de backend.',
            'modality' => 'Híbrido',
            'type' => 'PJ',
            'salary' => 'R$ 8.000,00',
            'benefits' => 'Plano de saúde, Vale refeição',
            'tags' => 'Node.js, Backend, JavaScript',
            'candidates_count' => 0,
            'city_id' => 7,
            // 'category_id' => 1,
            // 'sub_category_id' => 1,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Java',
            'description' => 'Estamos procurando desenvolvedor Java para projetos de alta escalabilidade.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 10.000,00',
            'benefits' => 'Vale transporte, Vale refeição, Plano de saúde',
            'tags' => 'Java, Backend, Microservices',
            'candidates_count' => 0,
            'city_id' => 8,
            // 'category_id' => 1,
            // 'sub_category_id' => 1,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor de Jogos Unity',
            'description' => 'Buscamos desenvolvedor de jogos para criar experiências incríveis com Unity.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 9.500,00',
            'benefits' => 'Plano de saúde, Vale refeição',
            'tags' => 'Unity, C#, Jogos',
            'candidates_count' => 0,
            'city_id' => 9,
            // 'category_id' => 1,
            // 'sub_category_id' => 2,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Arquiteto de Soluções',
            'description' => 'Procuramos arquiteto de soluções para desenhar a arquitetura de sistemas complexos.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 14.000,00',
            'benefits' => 'Vale transporte, Plano de saúde, Participação nos lucros',
            'tags' => 'Arquitetura de Software, Soluções, Cloud, DevOps',
            'candidates_count' => 0,
            'city_id' => 10,
            // 'category_id' => 1,
            // 'sub_category_id' => 4,
            'company_id' => 1,
        ]);
    }
}

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
            'description' => 'Estamos em busca de um desenvolvedor backend experiente com habilidades avançadas em PHP e conhecimento profundo em frameworks como Laravel. O profissional será responsável por criar e manter APIs robustas e escaláveis, integrar bancos de dados complexos e garantir a segurança e performance das aplicações. Além disso, deverá trabalhar de forma colaborativa com equipes multidisciplinares e contribuir para a melhoria contínua de processos de desenvolvimento.',
            'modality' => 'Remoto',
            'type' => 'CLT',
            'salary' => 'R$ 8.000,00',
            'benefits' => 'Vale transporte, Vale refeição, Plano de saúde, Seguro de vida, Auxílio home office',
            'tags' => 'PHP, Laravel, API, Backend, MySQL, Segurança',
            'candidate_count' => 12,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Frontend React',
            'description' => 'Procuramos um desenvolvedor frontend apaixonado por tecnologia, com experiência comprovada em React e bibliotecas relacionadas, como Redux. O profissional será responsável por projetar e desenvolver interfaces de usuário interativas e responsivas, garantindo uma experiência de usuário de alta qualidade. Espera-se também que tenha habilidades em otimização de performance e conhecimento em sistemas de design para garantir consistência visual.',
            'modality' => 'Híbrido',
            'type' => 'PJ',
            'salary' => 'R$ 7.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Flexibilidade de horário, Participação nos lucros',
            'tags' => 'React, JavaScript, CSS, Frontend, UI/UX',
            'candidate_count' => 23,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Mobile Flutter',
            'description' => 'Buscamos um desenvolvedor mobile especialista em Flutter para trabalhar no desenvolvimento de aplicativos modernos e intuitivos para Android e iOS. O profissional será responsável por criar interfaces responsivas, integrar APIs e lidar com ferramentas de gerenciamento de estado, como Provider ou Bloc. É necessário também possuir um olhar crítico para usabilidade e experiência do usuário.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 9.000,00',
            'benefits' => 'Vale transporte, Plano de saúde, Participação nos lucros, Auxílio educação',
            'tags' => 'Flutter, Mobile, Desenvolvimento, Dart, Cross-Platform',
            'candidate_count' => 35,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Fullstack',
            'description' => 'Estamos contratando um desenvolvedor fullstack para trabalhar em um produto de tecnologia inovador. A pessoa ideal deverá ter sólido conhecimento em linguagens de frontend, como React ou Vue.js, e backend, como Node.js ou Python. Este profissional será responsável por planejar e implementar soluções ponta a ponta, garantindo performance, segurança e usabilidade de todos os sistemas desenvolvidos.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 12.000,00',
            'benefits' => 'Vale refeição, Plano de saúde, Seguro odontológico, Auxílio educação',
            'tags' => 'Fullstack, React, Node.js, Segurança, AWS',
            'candidate_count' => 41,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Engenheiro de Software',
            'description' => 'Procuramos um engenheiro de software com ampla experiência no desenvolvimento de soluções em cloud computing e integração de sistemas complexos. Este profissional será responsável por desenhar, implementar e otimizar arquiteturas distribuídas, além de liderar iniciativas para melhorar a escalabilidade e performance das aplicações.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 13.500,00',
            'benefits' => 'Plano de saúde, Vale refeição, Auxílio home office, Participação nos lucros',
            'tags' => 'Engenharia de Software, Cloud, AWS, DevOps, Kubernetes',
            'candidate_count' => 60,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Python',
            'description' => 'Estamos à procura de um desenvolvedor Python para trabalhar no desenvolvimento de sistemas backend focados em dados e inteligência artificial. O profissional deverá ter experiência em frameworks como Django ou Flask, além de habilidade para integrar soluções de machine learning e pipelines de dados.',
            'modality' => 'Remoto',
            'type' => 'CLT',
            'salary' => 'R$ 7.500,00',
            'benefits' => 'Vale refeição, Plano de saúde, Vale transporte, Seguro de vida',
            'tags' => 'Python, Backend, Dados, Machine Learning, Flask',
            'candidate_count' => 42,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Node.js',
            'description' => 'Procuramos um desenvolvedor Node.js para integrar nossa equipe e desenvolver aplicações backend robustas e escaláveis. Este profissional será responsável por criar serviços RESTful, integrar bancos de dados NoSQL e SQL, e colaborar com equipes frontend para entregar soluções completas.',
            'modality' => 'Híbrido',
            'type' => 'PJ',
            'salary' => 'R$ 8.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Auxílio transporte',
            'tags' => 'Node.js, Backend, APIs, JavaScript',
            'candidate_count' => 32,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Java',
            'description' => 'Estamos contratando desenvolvedores Java para atuar em projetos de alta escalabilidade e sistemas corporativos. Este profissional deve possuir experiência em frameworks como Spring Boot, além de habilidades para trabalhar com microservices e sistemas distribuídos.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 10.000,00',
            'benefits' => 'Vale transporte, Vale refeição, Plano de saúde, Seguro odontológico',
            'tags' => 'Java, Backend, Spring Boot, Microservices',
            'candidate_count' => 56,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor de Jogos Unity',
            'description' => 'Procuramos um desenvolvedor apaixonado por jogos e tecnologia, com experiência em Unity e C#. O profissional será responsável por criar e otimizar mecânicas de jogos, integrar sistemas gráficos e físicos, além de colaborar com designers para criar experiências imersivas.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 9.500,00',
            'benefits' => 'Plano de saúde, Vale refeição, Seguro de vida',
            'tags' => 'Unity, C#, Desenvolvimento de Jogos',
            'candidate_count' => 29,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Arquiteto de Soluções',
            'description' => 'Procuramos um arquiteto de soluções experiente para liderar o planejamento e execução de arquiteturas de sistemas corporativos. Este profissional será responsável por garantir a integração de tecnologias de forma eficiente e segura, além de colaborar com equipes para resolver desafios técnicos complexos.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 14.000,00',
            'benefits' => 'Vale transporte, Plano de saúde, Participação nos lucros, Seguro odontológico',
            'tags' => 'Arquitetura de Software, Cloud, DevOps, Infraestrutura',
            'candidate_count' => 10,
            'city_id' => 5005,
            'company_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Frontend React',
            'description' => 'Procuramos um desenvolvedor frontend apaixonado por tecnologia, com experiência comprovada em React e bibliotecas relacionadas, como Redux. O profissional será responsável por projetar e desenvolver interfaces de usuário interativas e responsivas, garantindo uma experiência de usuário de alta qualidade. Espera-se também que tenha habilidades em otimização de performance e conhecimento em sistemas de design para garantir consistência visual.',
            'modality' => 'Híbrido',
            'type' => 'PJ',
            'salary' => 'R$ 5.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Flexibilidade de horário, Participação nos lucros',
            'tags' => 'React, JavaScript, CSS, Frontend, UI/UX',
            'candidate_count' => 23,
            'city_id' => 5005,
            'company_id' => 2,
        ]);

        JobListing::create([
            'title' => 'Desenvolvedor Mobile Flutter',
            'description' => 'Buscamos um desenvolvedor mobile especialista em Flutter para trabalhar no desenvolvimento de aplicativos modernos e intuitivos para Android e iOS. O profissional será responsável por criar interfaces responsivas, integrar APIs e lidar com ferramentas de gerenciamento de estado, como Provider ou Bloc. É necessário também possuir um olhar crítico para usabilidade e experiência do usuário.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 3.600,00',
            'benefits' => 'Vale transporte, Plano de saúde, Participação nos lucros, Auxílio educação',
            'tags' => 'Flutter, Mobile, Desenvolvimento, Dart, Cross-Platform',
            'candidate_count' => 35,
            'city_id' => 5005,
            'company_id' => 2,
        ]);
    }
}

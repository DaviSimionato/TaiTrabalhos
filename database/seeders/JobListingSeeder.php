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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
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
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Administrador de Banco de Dados',
            'description' => 'Procuramos um administrador de banco de dados com experiência em otimização de consultas SQL e gestão de bases de dados relacionais. Este profissional será responsável por garantir a integridade e segurança dos dados.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 9.000,00',
            'benefits' => 'Plano de saúde, Seguro de vida, Vale refeição, Participação nos lucros',
            'tags' => 'SQL, Banco de Dados, DBA, Segurança da Informação',
            'candidate_count' => 0,
            'city_id' => 5006,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Engenheiro de Dados',
            'description' => 'Estamos contratando um engenheiro de dados para criar pipelines de dados e integrar sistemas. Necessário conhecimento em Apache Spark e bancos de dados NoSQL.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 13.000,00',
            'benefits' => 'Auxílio home office, Plano de saúde, Seguro de vida',
            'tags' => 'Engenharia de Dados, Spark, NoSQL, ETL, Python',
            'candidate_count' => 0,
            'city_id' => 5007,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Especialista em Cloud Computing',
            'description' => 'Procuramos um especialista em cloud computing para gerenciar e otimizar nossa infraestrutura em nuvem. É necessário conhecimento em AWS e arquitetura de microservices.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 15.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Seguro de vida',
            'tags' => 'Cloud, AWS, DevOps, Microservices',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 3,
        ]);
        
        JobListing::create([
            'title' => 'Desenvolvedor Kotlin',
            'description' => 'Estamos contratando um desenvolvedor Kotlin para criar aplicativos nativos para Android. Necessário experiência em integração de APIs e padrões de design mobile.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 8.000,00',
            'benefits' => 'Auxílio home office, Seguro de vida, Participação nos lucros',
            'tags' => 'Kotlin, Android, Mobile, APIs',
            'candidate_count' => 0,
            'city_id' => 5008,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Analista de Segurança da Informação',
            'description' => 'Buscamos um analista de segurança da informação com conhecimento em práticas de pentest e gerenciamento de riscos de TI. Este profissional será responsável por proteger os sistemas da empresa.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 11.000,00',
            'benefits' => 'Plano de saúde, Seguro de vida, Vale refeição, Participação nos lucros',
            'tags' => 'Segurança, Pentest, Riscos, TI',
            'candidate_count' => 0,
            'city_id' => 5009,
            'company_id' => 3,
        ]);
        
        JobListing::create([
            'title' => 'Product Owner',
            'description' => 'Procuramos um Product Owner para liderar o desenvolvimento de produtos digitais. É necessário experiência em metodologias ágeis e gestão de stakeholders.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 10.500,00',
            'benefits' => 'Plano de saúde, Seguro de vida, Vale refeição, Participação nos lucros',
            'tags' => 'Product Owner, Scrum, Gestão de Produtos',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Gerente de Projetos',
            'description' => 'Estamos contratando um gerente de projetos para liderar equipes multidisciplinares. É necessário conhecimento em ferramentas como Jira e MS Project.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 12.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Seguro de vida',
            'tags' => 'Gerente, Projetos, Scrum, PMO',
            'candidate_count' => 0,
            'city_id' => 5006,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Desenvolvedor Frontend Vue.js',
            'description' => 'Buscamos um desenvolvedor frontend com experiência em Vue.js para criar interfaces dinâmicas e responsivas. Conhecimento em Tailwind CSS é um diferencial.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 6.000,00',
            'benefits' => 'Flexibilidade de horário, Auxílio home office',
            'tags' => 'Vue.js, Frontend, Tailwind CSS',
            'candidate_count' => 0,
            'city_id' => 5007,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Analista de Infraestrutura',
            'description' => 'Procuramos um analista de infraestrutura com conhecimento em redes, servidores e virtualização. Este profissional será responsável por garantir a operação dos sistemas da empresa.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 8.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Seguro de vida',
            'tags' => 'Infraestrutura, Redes, Servidores, Virtualização',
            'candidate_count' => 0,
            'city_id' => 5010,
            'company_id' => 3,
        ]);
        
        JobListing::create([
            'title' => 'Especialista em Redes',
            'description' => 'Estamos contratando um especialista em redes para gerenciar e monitorar redes corporativas. Necessário conhecimento em Cisco e segurança de redes.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 9.000,00',
            'benefits' => 'Plano de saúde, Seguro de vida, Vale refeição',
            'tags' => 'Redes, Cisco, Segurança',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Desenvolvedor Blockchain',
            'description' => 'Procuramos um desenvolvedor com experiência em contratos inteligentes e plataformas blockchain como Ethereum. É necessário conhecimento em Solidity.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 20.000,00',
            'benefits' => 'Auxílio home office, Seguro de vida',
            'tags' => 'Blockchain, Solidity, Smart Contracts',
            'candidate_count' => 0,
            'city_id' => 5011,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Analista de Suporte Técnico',
            'description' => 'Buscamos um analista de suporte técnico para auxiliar clientes na resolução de problemas técnicos. Necessário conhecimento básico em TI e atendimento ao cliente.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 3.500,00',
            'benefits' => 'Vale transporte, Vale refeição, Plano de saúde',
            'tags' => 'Suporte, Atendimento, TI',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 3,
        ]);
        
        JobListing::create([
            'title' => 'Engenheiro de Software Frontend',
            'description' => 'Estamos em busca de um engenheiro de software frontend com foco em Angular para trabalhar em projetos escaláveis. Experiência em RxJS é um diferencial.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 10.000,00',
            'benefits' => 'Flexibilidade de horário, Seguro de vida',
            'tags' => 'Frontend, Angular, RxJS',
            'candidate_count' => 0,
            'city_id' => 5010,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Engenheiro de Software Backend',
            'description' => 'Procuramos um engenheiro backend com experiência em Go e arquitetura de microservices para criar sistemas de alta performance.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 11.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Seguro de vida',
            'tags' => 'Go, Backend, Microservices',
            'candidate_count' => 0,
            'city_id' => 5006,
            'company_id' => 3,
        ]);
        
        JobListing::create([
            'title' => 'Analista de Dados',
            'description' => 'Buscamos um analista de dados com experiência em SQL, Power BI e Python para criar relatórios, dashboards e insights estratégicos para a tomada de decisão. O profissional será responsável por trabalhar com grandes volumes de dados e colaborar com equipes de diferentes áreas.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 6.500,00',
            'benefits' => 'Plano de saúde, Vale refeição, Participação nos lucros, Seguro de vida',
            'tags' => 'Dados, SQL, Python, Power BI, BI',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Engenheiro de Machine Learning',
            'description' => 'Estamos contratando um engenheiro de machine learning para construir e treinar modelos preditivos avançados. Necessário conhecimento em frameworks como TensorFlow e PyTorch, além de habilidades em análise de dados e algoritmos de IA.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 15.000,00',
            'benefits' => 'Plano de saúde, Auxílio home office, Participação nos lucros',
            'tags' => 'Machine Learning, IA, TensorFlow, PyTorch, Big Data',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Administrador de Sistemas',
            'description' => 'Procuramos um administrador de sistemas com experiência em Linux, gerenciamento de servidores e segurança da informação. O profissional será responsável por garantir a estabilidade e segurança dos ambientes de TI.',
            'modality' => 'Presencial',
            'type' => 'CLT',
            'salary' => 'R$ 7.000,00',
            'benefits' => 'Vale transporte, Plano de saúde, Seguro de vida, Auxílio educação',
            'tags' => 'Linux, Servidores, Segurança da Informação, Redes',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 3,
        ]);
        
        JobListing::create([
            'title' => 'Desenvolvedor Ruby on Rails',
            'description' => 'Buscamos um desenvolvedor Ruby on Rails com experiência em desenvolvimento ágil para criar aplicações web de alta performance. Necessário conhecimento em banco de dados e metodologias ágeis.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 9.500,00',
            'benefits' => 'Plano de saúde, Auxílio home office, Flexibilidade de horário',
            'tags' => 'Ruby on Rails, Desenvolvimento Web, Agile, PostgreSQL',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 2,
        ]);
        
        JobListing::create([
            'title' => 'Designer UX/UI',
            'description' => 'Estamos em busca de um designer UX/UI criativo para projetar interfaces de usuário inovadoras. É necessário conhecimento em ferramentas como Figma, Adobe XD e habilidades em design responsivo.',
            'modality' => 'Híbrido',
            'type' => 'CLT',
            'salary' => 'R$ 6.000,00',
            'benefits' => 'Plano de saúde, Vale refeição, Seguro de vida, Auxílio transporte',
            'tags' => 'UX, UI, Design, Figma, Adobe XD',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 1,
        ]);
        
        JobListing::create([
            'title' => 'Especialista em DevOps',
            'description' => 'Procuramos um especialista em DevOps com experiência em CI/CD, Kubernetes e infraestrutura como código. Será responsável por implementar pipelines automatizados e otimizar a infraestrutura de aplicações.',
            'modality' => 'Remoto',
            'type' => 'PJ',
            'salary' => 'R$ 12.000,00',
            'benefits' => 'Plano de saúde, Participação nos lucros, Seguro de vida',
            'tags' => 'DevOps, CI/CD, Kubernetes, Terraform, AWS',
            'candidate_count' => 0,
            'city_id' => 5005,
            'company_id' => 3,
        ]);
    }
}

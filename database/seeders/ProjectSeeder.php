<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Limpa a tabela se já tiver dados
        Project::truncate();

        Project::create([
            'title' => 'Projeto Restaurante',
            'slug' => 'projeto-restaurante',
            'description' => 'API para gestão de restaurante com módulos completos',
            'content' => '<h3>Sistema Completo para Restaurantes</h3>
                         <p>Desenvolvimento de um sistema completo com:</p>
                         <ul>
                             <li>Módulo de Vendas e Pedidos</li>
                             <li>Controle de Estoque</li>
                             <li>Sistema de Delivery</li>
                             <li>Estatísticas e Relatórios</li>
                             <li>Gestão de Mesas e Comandas</li>
                         </ul>',
            'image' => null, // Deixe null se não tiver imagem
            'github_url' => 'https://github.com/paulorsf29/ProjetoRestaurante',
            'live_url' => null, // Pode ser null se não tiver deploy
            'technologies' => ['Spring Boot', 'PostgreSQL', 'Maven', 'Java', 'JPA'],
            'order' => 1,
            'featured' => true,
            'published' => true,
        ]);

        Project::create([
            'title' => 'TodoList laravel',
            'slug' => 'todo-list',
            'description' => 'uma Todo list web onde o usuario pode adicionar tarefa e seus respectivos tempo de expiração',
            'content' => '<h3>Plataforma todo list</h3>
                         <p>Desenvolvimento de plataforma completa com:</p>
                         <ul>
                             <li>criação de tarefas</li>
                             <li>buscar tarefas especificas</li>
                             <li>painel de tarefas</li>
                             <li>alerta de tempo de cada tarefa</li>
                             <li>deletar tarefas</li>
                         </ul>',
            'image' => null,
            'github_url' => 'https://github.com/paulorsf29/ToDoList_PHP-Laravel.git',
            'live_url' => 'https://demo-ecommerce.exemplo.com',
            'technologies' => ['Laravel', 'PostgreSQL', 'Bootstrap', 'html'],
            'order' => 2,
            'featured' => true,
            'published' => true,
        ]);

        Project::create([
            'title' => 'Portfólio Laravel',
            'slug' => 'portfolio-laravel',
            'description' => 'Site de portfólio pessoal desenvolvido com Laravel',
            'content' => '<h3>Portfólio Profissional</h3>
                         <p>Site pessoal para exibição de projetos com:</p>
                         <ul>
                             <li>Gestão de Projetos</li>
                             <li>Formulário de Contato</li>
                             <li>Design Responsivo</li>
                             <li>Painel Administrativo</li>
                         </ul>',
            'image' => null,
            'github_url' => 'https://github.com/paulorsf29/PortifolioWeb_Laravel.git',
            'live_url' => 'https://portfolio.exemplo.com',
            'technologies' => ['Laravel', 'PostgreSQL', 'Bootstrap 5', 'JavaScript'],
            'order' => 3,
            'featured' => false,
            'published' => true,
        ]);

        Project::create([
            'title' => 'Implementação Ia evolutiva',
            'slug' => 'implementacao-ia-evolutiva',
            'description' => 'Este projeto apresenta uma implementação do Algoritmo de Otimização por Colônia de Formigas (ACO) 
            aprimorado com refinamento 2-Opt para resolver o clássico Problema do Caixeiro Viajante (TSP), utilizando dados reais de 48 
            cidades do Rio Grande do Norte _ Brasil.

O objetivo é encontrar a menor rota possível que passe por todas as cidades exatamente uma vez e retorne ao ponto de origem, 
utilizando técnicas de Inteligência Artificial Evolutiva.',
            'content' => '<h3>buscar cidades</h3>
                         <p>Sistema desenvolvido com:</p>
                         <ul>
                             <li>Dados reais das 48 cidades do RN (coordenadas)</li>
                             <li> Cálculo de distâncias geográficas</li>
                             <li>Refinamento com algoritimo 2-Opt</li>
                             <li>Visualizações gráficas</li>
                             <li>Mapas das rotas otimizadas</li>
                         </ul>',
            'image' => null,
            'github_url' => 'https://github.com/paulorsf29/Implementacao_CaxeiroViajante_Com_ACO',
            'live_url' => null,
            'technologies' => ['python', 'data science','matplotlib', 'pandas', 'IA'],
            'order' => 4,
            'featured' => false,
            'published' => true,
        ]);

        Project::create([
            'title' => 'Projeto Freta',
            'slug' => 'Projeto-Freta',
            'description' => 'aplicativo mobile onde usuarios de frete se conectariam com motoristas de fretes da região de belem, 
            projeto desenvolvido no ambito
            do programa amazon hacking',
            'content' => '<h3>Projeto freta</h3>
                         <p>aplicativo com:</p>
                         <ul>
                             <li>Gestão de entregas</li>
                             <li>Formulário de emcomenda custo de entrega calculado relativo a distancia e transito do momento</li>
                             <li>monitoramento de entrega</li>
                             <li>sistema de localização</li>
                         </ul>',
            'image' => null,
            'github_url' => 'https://github.com/paulorsf29/Freta_project_2',
            'live_url' => 'https://portfolio.exemplo.com',
            'technologies' => ['React Native', 'Android', 'Firebase', 'google-API', 'javascript'],
            'order' => 5,
            'featured' => false,
            'published' => true,
        ]);

         Project::create([
            'title' => 'CRM Mineração',
            'slug' => 'crm-mineracao',
            'description' => 'Projeto básico de CRM desenvolvido em JavaScript para treinamento em equipe, focando em técnicas 
            de organização utilizando Trello e metodologias Scrum. O objetivo principal foi praticar gestão de projetos em grupo 
            seguindo frameworks ágeis.',
            'content' => '<h3>CRM Mineração</h3>
                         <p>Sistema de Customer Relationship Management desenvolvido para estudo e prática de:</p>
                         <ul>
                                 <li>Gestão de tarefas em equipe utilizando Trello</li>
                                 <li>Aplicação de metodologias Scrum</li>
                                 <li>Organização de projetos colaborativos</li>
                                 <li>Versionamento e controle de código em grupo</li>
                                 <li>Desenvolvimento de funcionalidades básicas de CRM</li>
                         </ul>',
            'image' => null,
            'github_url' => 'https://github.com/paulorsf29/crm1.git',
            'live_url' => 'https://portfolio.exemplo.com',
            'technologies' => ['JavaScript', 'HTML5', 'CSS3', 'Trello', 'Metodologias Ágeis', 'Git'],
            'order' => 6,
            'featured' => false,
            'published' => true,
        ]);
    }
}
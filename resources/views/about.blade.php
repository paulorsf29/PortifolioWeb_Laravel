@extends('layouts.app')

@section('title', 'Sobre')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Sobre Mim</h1>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Desenvolvedor Full Stack e Mobile</h5>
                    <p class="card-text">
                        Olá! Sou estudante do curso de ciencias da computação com experiência prática no desenvolvimento 
                        de soluções digitais. Participei do programa Amazon Hacking, promovido pelo CESUPA, onde participei 
                        do desenvolvi o MVP do aplicativo Freta usando React Native js, conectando motoristas autônomos a clientes 
                        que precisam de serviços de frete urbano. Tenho conhecimentos em Java com Spring Boot, React, React Native, 
                        git e metodologias ágeis, além de familiaridade com Design Thinking.
                    </p>
                    
                    <h5 class="mt-4">Habilidades Técnicas</h5>
                    <ul>
                        <li>Laravel & PHP</li>
                        <li>React native & JavaScript</li>
                        <li>Spring Boot & Java</li>
                        <li>PostgreSQL & MySQL</li>
                        <li>Vue.js & JavaScript</li>
                        <li>HTML5, CSS3 & Bootstrap</li>
                        <li>Git & GitHub</li>
                        <li>APIs RESTful</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informações</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i> Belem, PA</li>
                        <li><i class="bi bi-envelope me-2"></i> paulorsf229@gmail.com</li>
                        <li><i class="bi bi-github me-2"></i> https://github.com/paulorsf29</li>
                        <li><i class="bi bi-linkedin me-2"></i> https://www.linkedin.com/in/paulo-ricardo-fonseca-920037265/</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
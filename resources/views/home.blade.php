@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4">Bem-vindo ao Meu Portfólio</h1>
    <p class="lead">Desenvolvedor Full Stack | Laravel | Desenvolvedor mobile | React Native | PostgreSQL</p>
    <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg mt-3">
        Ver Meus Projetos
    </a>
</div>

<div class="row mt-5">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-code-slash display-4 text-primary"></i>
                <h3 class="card-title mt-3">Desenvolvimento</h3>
                <p class="card-text">Soluções web modernas com Laravel e Vue.js, react e aplicações mobile com React native</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-database display-4 text-success"></i>
                <h3 class="card-title mt-3">Banco de Dados</h3>
                <p class="card-text">Modelagem e otimização com PostgreSQL.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-lightning display-4 text-warning"></i>
                <h3 class="card-title mt-3">Performance</h3>
                <p class="card-text">Aplicações rápidas e escaláveis.</p>
            </div>
        </div>
    </div>
</div>
@endsection
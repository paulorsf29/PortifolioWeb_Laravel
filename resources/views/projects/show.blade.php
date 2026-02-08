@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="row">
    <div class="col-lg-8">
        <h1>{{ $project->title }}</h1>
        
        @if($project->image)
        <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded mb-4" alt="{{ $project->title }}">
        @endif
        
        <div class="mb-4">
            <p class="lead">{{ $project->description }}</p>
            <div>{!! $project->content !!}</div>
        </div>
        
        <div class="mb-4">
            <h4>Tecnologias</h4>
            <div>
                @foreach($project->technologies ?? [] as $tech)
                <span class="badge bg-primary me-1 mb-1">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Links</h5>
                <div class="d-grid gap-2">
                    @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank" class="btn btn-dark">
                        <i class="bi bi-github me-2"></i> Código no GitHub
                    </a>
                    @endif
                    
                    @if($project->live_url)
                    <a href="{{ $project->live_url }}" target="_blank" class="btn btn-success">
                        <i class="bi bi-box-arrow-up-right me-2"></i> Ver Projeto Online
                    </a>
                    @endif
                    
                    <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left me-2"></i> Voltar para Projetos
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Informações</h5>
                <ul class="list-unstyled">
                    <li><strong>Publicado:</strong> {{ $project->created_at ? $project->created_at->format('d/m/Y') : 'N/A' }}</li>
                    <li><strong>Status:</strong> 
                        <span class="badge bg-{{ $project->published ? 'success' : 'warning' }}">
                            {{ $project->published ? 'Publicado' : 'Rascunho' }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
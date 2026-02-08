@extends('layouts.app')

@section('title', 'Projetos')

@section('content')
<h1 class="mb-4">Meus Projetos</h1>

<div class="row">
    @forelse ($projects as $project)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                <div class="mb-3">
                    @foreach($project->technologies ?? [] as $tech)
                    <span class="badge bg-secondary me-1">{{ $tech }}</span>
                    @endforeach
                </div>
                <a href="{{ route('projects.show', $project->slug) }}" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info">
            Nenhum projeto publicado no momento.
        </div>
    </div>
    @endforelse
</div>
@endsection
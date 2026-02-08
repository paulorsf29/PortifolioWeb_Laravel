<?php

namespace App\Http\Middleware;

use App\Models\Project;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckProjectExists
{
    public function handle(Request $request, Closure $next): Response
    {
        $slug = $request->route('slug');
        
        $project = Project::where('slug', $slug)
            ->where('published', true)
            ->first();
            
        if (!$project) {
            abort(404, 'Projeto não encontrado ou não está publicado.');
        }
        
        // Adiciona o projeto à request para uso no controller
        $request->merge(['project' => $project]);
        
        return $next($request);
    }
}
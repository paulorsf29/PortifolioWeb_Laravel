<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('published', true)
            ->orderBy('order')
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
            
        return view('projects.show', compact('project'));
    }
}
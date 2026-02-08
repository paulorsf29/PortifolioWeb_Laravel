<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'github_url',
        'live_url',
        'technologies',
        'order',
        'featured',
        'published',
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
        'published' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relação com categorias (se usar)
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
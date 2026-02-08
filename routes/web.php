<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Página sobre
Route::get('/sobre', function () {
    return view('about');
})->name('about');

// Página contato
Route::get('/contato', function () {
    return view('contact');
})->name('contact');

// Rota para processar o formulário de contato
Route::post('/contato/enviar', function (Request $request) {
    // Validação dos dados
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);
    
    // Aqui você pode:
    // 1. Salvar no banco de dados (se criar uma tabela de mensagens)
    // 2. Enviar email
    // 3. Integrar com serviço de terceiros
    
    // Por enquanto, apenas redireciona com mensagem de sucesso
    return redirect()->route('contact')
        ->with('success', 'Mensagem enviada com sucesso! Entrarei em contato em breve.');
})->name('contact.submit');

// ROTAS DE PROJETOS
Route::prefix('projetos')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/{slug}', [ProjectController::class, 'show'])->name('projects.show');
});
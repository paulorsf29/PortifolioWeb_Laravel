<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
    
    try {
        // Envia o email
        Mail::to('paulorsf229@gmail.com')->send(new ContactMail($validated));
        
        return redirect()->route('contact')
            ->with('success', 'Mensagem enviada com sucesso! Entrarei em contato em breve.');
            
    } catch (\Exception $e) {
        // Log do erro para debug
        \Log::error('Erro ao enviar email: ' . $e->getMessage());
        
        return redirect()->route('contact')
            ->with('error', 'Erro ao enviar mensagem. Por favor, tente novamente.')
            ->withInput();
    }
})->name('contact.submit');

// ROTAS DE PROJETOS
Route::prefix('projetos')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/{slug}', [ProjectController::class, 'show'])->name('projects.show');
});
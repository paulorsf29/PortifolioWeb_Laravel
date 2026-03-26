<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        try {
            // Envia o email
            Mail::to('paulorsf229@gmail.com')->send(new ContactMail($validated));
            
            return redirect()->route('contact')->with('success', 'Mensagem enviada com sucesso! Entrarei em contato em breve.');
            
        } catch (\Exception $e) {
            return redirect()->route('contact')
                ->with('error', 'Erro ao enviar mensagem. Por favor, tente novamente.')
                ->withInput();
        }
    }
}